<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>CoderStory - Giving developers a voice</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="/css/page.min.css" rel="stylesheet">
    <!-- <link href="/css/app.css" rel="stylesheet"> -->

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="/cs-dark.png">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118575748-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-118575748-3');
    </script>

      <!-- Share -->
      <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c386f19aea594001162d367&product=social-ab' async='async'></script>


</head>

<body data-aos-easing="ease" data-aos-duration="1500" data-aos-delay="0" class="">


    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">

            <div class="navbar-left">
                <button class="navbar-toggler" type="button">☰</button>
                <a class="navbar-brand text-white" href="/">
                    <svg width="60" height="60" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="60" height="60" />
                        <circle cx="50.5" cy="50.5" r="47.5" fill="#0D1F2D" />
                        <path d="M37.81 67.27C34.69 67.27 31.87 66.58 29.35 65.2C26.86 63.82 24.895 61.915 23.455 59.485C22.045 57.025 21.34 54.28 21.34 51.25C21.34 48.22 22.045 45.49 23.455 43.06C24.895 40.6 26.875 38.68 29.395 37.3C31.915 35.92 34.735 35.23 37.855 35.23C40.195 35.23 42.355 35.62 44.335 36.4C46.315 37.18 47.995 38.32 49.375 39.82L47.26 41.935C44.8 39.445 41.695 38.2 37.945 38.2C35.455 38.2 33.19 38.77 31.15 39.91C29.11 41.05 27.505 42.61 26.335 44.59C25.195 46.57 24.625 48.79 24.625 51.25C24.625 53.71 25.195 55.93 26.335 57.91C27.505 59.89 29.11 61.45 31.15 62.59C33.19 63.73 35.455 64.3 37.945 64.3C41.725 64.3 44.83 63.04 47.26 60.52L49.375 62.635C47.995 64.135 46.3 65.29 44.29 66.1C42.31 66.88 40.15 67.27 37.81 67.27ZM64.983 67.27C62.643 67.27 60.393 66.895 58.233 66.145C56.103 65.395 54.453 64.405 53.283 63.175L54.588 60.61C55.728 61.75 57.243 62.68 59.133 63.4C61.023 64.09 62.973 64.435 64.983 64.435C67.803 64.435 69.918 63.925 71.328 62.905C72.738 61.855 73.443 60.505 73.443 58.855C73.443 57.595 73.053 56.59 72.273 55.84C71.523 55.09 70.593 54.52 69.483 54.13C68.373 53.71 66.828 53.26 64.848 52.78C62.478 52.18 60.588 51.61 59.178 51.07C57.768 50.5 56.553 49.645 55.533 48.505C54.543 47.365 54.048 45.82 54.048 43.87C54.048 42.28 54.468 40.84 55.308 39.55C56.148 38.23 57.438 37.18 59.178 36.4C60.918 35.62 63.078 35.23 65.658 35.23C67.458 35.23 69.213 35.485 70.923 35.995C72.663 36.475 74.163 37.15 75.423 38.02L74.298 40.675C72.978 39.805 71.568 39.16 70.068 38.74C68.568 38.29 67.098 38.065 65.658 38.065C62.898 38.065 60.813 38.605 59.403 39.685C58.023 40.735 57.333 42.1 57.333 43.78C57.333 45.04 57.708 46.06 58.458 46.84C59.238 47.59 60.198 48.175 61.338 48.595C62.508 48.985 64.068 49.42 66.018 49.9C68.328 50.47 70.188 51.04 71.598 51.61C73.038 52.15 74.253 52.99 75.243 54.13C76.233 55.24 76.728 56.755 76.728 58.675C76.728 60.265 76.293 61.72 75.423 63.04C74.583 64.33 73.278 65.365 71.508 66.145C69.738 66.895 67.563 67.27 64.983 67.27Z"
                            fill="#FFF5F5" />
                    </svg>

                </a>
            </div>

            <section class="navbar-mobile">
                <nav class="nav nav-navbar ml-auto">
                    <!-- <a class="nav-link" href="/interviews"> Interviews</a>
                    <a class="nav-link" href="/blog">Blog</a> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#"> All Access <span class="arrow"></span></a>
                        <nav class="nav align-right">
                            <a class="nav-link disabled nav-dark"><strong>THE CONTENT</strong></a>
                            <a class="nav-link" href="/interviews"> 👩🏽‍💻 Interviews</a>
                            <a class="nav-link" href="/posts">📚 Blog</a>
                            <a class="nav-link" href="/resources">🎒 Resources</a>
                            <div class="dropdown-divider" style="margin-left: 0rem; margin-right: 0rem;"></div>
                            <a class="nav-link disabled nav-dark"><strong>OUR STORY</strong></a>
                            <a class="nav-link" href="/about"> 🕶 About</a>
                            <a class="nav-link" target="_blank" href="https://coderstory.nolt.io"> 🚧 Roadmap</a>
                            <div class="dropdown-divider" style="margin-left: 0rem; margin-right: 0rem;"></div>
                            <a class="nav-link disabled nav-dark"><strong>BE INVOLVED</strong></a>
                            <a class="nav-link" href="/contribute"> 🖋 Contribute</a>
                            <a class="nav-link" href="/faq"> ❓ FAQ</a>
                            <a class="nav-link" href="/privacy"> 🤫 Privacy</a>
                        </nav>
                    </li>

                    @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="#"> {{ Auth::user()->name }} <span class="arrow"></span></a>
                        <nav class="nav align-right">
                            <a class="nav-link" href="/home"> 👩🏽‍💻 Dashboard</a>
                            <div class="dropdown-divider" style="margin-left: 0rem; margin-right: 0rem;"></div>
                            <a class="nav-link" href="/logout">Logout</a>
                        </nav>
                    </li>
                    @endif
                </nav>
            </section>

        </div>
    </nav><!-- /.navbar -->

    </div>
    </nav><!-- /.navbar -->

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
