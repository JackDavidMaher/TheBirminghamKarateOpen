<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
	$dir = resource_path('views/homePageArticles');
	$available = [];

	if (File::exists($dir)) {
		$available = collect(File::files($dir))
			->map(fn($f) => $f->getBasename('.blade.php'))
			->values()
			->toArray();
	}

	// Allow manual override via query param `preview` or `order`, e.g. ?preview=promo,article
	$preview = request()->query('preview', null) ?: request()->query('order', null);
	if ($preview) {
		$ordered = array_filter(array_map('trim', explode(',', $preview)));
	} else {
		$ordered = config('homepage.articles', []);
	}
	$homeArticles = []; // Default article if config is empty

	foreach ($ordered as $name) {
		if (in_array($name, $available)) {
			$homeArticles[] = 'homePageArticles.' . $name;
		}
	}

	return view('home', ['homeArticles' => $homeArticles, 'availableHomeArticles' => $available]);
})->name('home');

Route::get('/about', fn() => view('about'))->name('about');
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::get('/entries', fn() => view('entries'))->name('entries');
Route::get('/pastResults', fn() => view('pastResults'))->name('pastResults');
Route::get('/upcomingEvents', fn() => view('upcomingEvents'))->name('upcomingEvents');
