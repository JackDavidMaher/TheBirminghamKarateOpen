<!DOCTYPE HTML>
<html>

<head>
    <title>The Birmingham Karate Open</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="icon" href="{{ asset('images/Lion.png') }}" type="image/png" />
    <link rel="shortcut icon" href="{{ asset('images/Lion.png') }}" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('images/Lion.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}" />
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/noscript.css') }}" />
    </noscript>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper" class="fade-in">
        <div class="bg"></div>

        <!-- Intro (show only on home) -->
        @if(request()->routeIs('home'))
            <div id="intro">
                <div style="text-align:center; margin-bottom:18px;">
                    <img src="{{ asset('images/Lion.png') }}" alt="THE BKO"
                        style="max-width:220px; height:auto; display:inline-block;" />
                </div>
                <h1>THE BIRMINGHAM KARATE OPEN</h1>
                <p>Hosted by the University of Birmingham Karate Club</p>
            </div>
        @endif
        <header id="header">
            <a href="/" class="logo">
                THE BKO
            </a>
        </header>

        <!-- Nav -->
        <nav id="nav">
            <ul class="links">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('/home') ? 'active' : '' }}">Home</a>
                </li>

                <li><a href="{{ route('upcomingEvents') }}"
                        class="{{ request()->routeIs(patterns: '/upcomingEvents') ? 'active' : '' }}">Upcoming
                        Events</a></li>



                <!--
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('/about') ? 'active' : '' }}">About</a>
                </li>
-->
                <li><a href="{{ route('entries') }}"
                        class="{{ request()->routeIs('/entries') ? 'active' : '' }}">Entries</a></li>
                <li><a href="{{ route('mission') }}"
                        class="{{ request()->routeIs('/mission') ? 'active' : '' }}">Mission</a></li>
                <li><a href="{{ route('pastResults') }}"
                        class="{{ request()->routeIs(patterns: '/pastResults') ? 'active' : '' }}">Past Results</a></li>

            </ul>
            <ul class="icons">
                <li><a href="https://www.instagram.com/birminghamkarate/?hl=en" class="icon brands fa-instagram"><span
                            class="label">Instagram</span></a></li>
                <li><a href="https://www.facebook.com/UoBKarate/?locale=en_GB" class="icon brands fa-facebook-f"><span
                            class="label">Facebook</span></a></li>
            </ul>
        </nav>
        <div id="main">
            {{ $slot }}

            {{--
            @if(request()->routeIs('pastResults'))
            <footer>
                <div class="pagination">
                    <!--<a href="#" class="previous">Prev</a>-->
                    <a href="#" class="page active">1</a>
                    <a href="#" class="page">2</a>
                    <a href="#" class="page">3</a>
                    <span class="extra">&hellip;</span>
                    <a href="#" class="page">8</a>
                    <a href="#" class="page">9</a>
                    <a href="#" class="page">10</a>
                    <a href="#" class="next">Next</a>
                </div>
            </footer>
            @endif
            --}}

        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
    <script src="{{ asset('js/browser.min.js') }}"></script>
    <script src="{{ asset('js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('js/util.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>