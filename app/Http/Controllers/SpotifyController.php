<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class SpotifyController extends Controller
{
    private array $scopes = [
        'user-read-currently-playing'
    ];

    public function login()
    {
        $query = http_build_query([
            'response_type' => 'code',
            'client_id' => config('services.spotify.client_id'),
            'scope' => implode(' ', $this->scopes),
            'redirect_uri' => config('services.spotify.redirect'),
        ]);

        return redirect("https://accounts.spotify.com/authorize?$query");
    }

    public function callback(Request $request)
    {
        $response = Http::asForm()
            ->withBasicAuth(
                config('services.spotify.client_id'),
                config('services.spotify.client_secret')
            )
            ->post('https://accounts.spotify.com/api/token', [
                'grant_type' => 'authorization_code',
                'code' => $request->code,
                'redirect_uri' => config('services.spotify.redirect'),
            ]);

        $data = $response->json();

        Session::put('spotify_access_token', $data['access_token']);
        Session::put('spotify_refresh_token', $data['refresh_token']);
        Session::put('spotify_expires_at', now()->addSeconds($data['expires_in']));

        return redirect('/'); // or wherever
    }

    public function currentYear()
    {
        $accessToken = $this->getValidAccessToken();

        if (!$accessToken) {
            return response()->json(['error' => 'Not authenticated'], 401);
        }

        $response = Http::asForm()
            ->withBasicAuth(
                config('services.spotify.client_id'),
                config('services.spotify.client_secret')
            )
            ->post('https://accounts.spotify.com/api/token', [
                'grant_type' => 'refresh_token',
                'refresh_token' => Session::get('spotify_refresh_token'),
            ]);



        $data = $response->json();

        if (!isset($data['item'])) {
            return response()->json(['playing' => false]);
        }

        $releaseDate = $data['item']['album']['release_date'];
        $year = substr($releaseDate, 0, 4);

        return response()->json([
            'playing' => true,
            'track' => $data['item']['name'],
            'artist' => $data['item']['artists'][0]['name'],
            'year' => $year
        ]);
    }

    private function getValidAccessToken()
    {
        if (Session::get('spotify_expires_at') > now()) {
            return Session::get('spotify_access_token');
        }

        // Refresh token
        $response = Http::asForm()
            ->withBasicAuth(
                config('services.spotify.client_id'),
                config('services.spotify.client_secret')
            )
            ->post('https://accounts.spotify.com/api/token', [
                'grant_type' => 'refresh_token',
                'refresh_token' => Session::get('spotify_refresh_token'),
            ]);

        if (!$response->ok()) {
            return null;
        }

        $data = $response->json();

        Session::put('spotify_access_token', $data['access_token']);
        Session::put('spotify_expires_at', now()->addSeconds($data['expires_in']));

        return $data['access_token'];
    }
}
