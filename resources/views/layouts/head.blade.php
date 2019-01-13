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
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: '#create',
            plugins: "link, image, code",
        });
    </script>

    <!-- Styles -->
    <link href="/css/page.min.css" rel="stylesheet">
    <!-- <link href="/css/app.css" rel="stylesheet"> -->

    <!-- Javascript -->
    <script src="/js/page.min.js"></script>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.png">

    <!-- Facebook OG Image -->
    <meta property="og:image" content="https://placid.app/u/y0kqh?browser%7Cimage=%24DEFAULT%24&browser%7Curl=%24DEFAULT%24&title=%24DEFAULT%24" />
    <meta property="og:image:height" content="600" />
    <meta property="og:image:width" content="1200" />

    <!-- Twitter Card Image -->
    <meta property="twitter:image" content="https://placid.app/u/y0kqh?browser%7Cimage=%24DEFAULT%24&browser%7Curl=%24DEFAULT%24&title=%24DEFAULT%24" />
    <meta name="twitter:card" content="summary_large_image">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118575748-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-118575748-3');
    </script>

  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
  <script>
  window.addEventListener("load", function(){
  window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "#252e39"
      },
      "button": {
        "background": "#14a7d0"
      }
    },
    "theme": "classic",
    "position": "bottom-right"
  })});
  </script>

</head>

<body data-aos-easing="ease" data-aos-duration="1500" data-aos-delay="0" class="">


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">

            <div class="navbar-left">
                <button class="navbar-toggler" type="button">☰</button>
                <a class="navbar-brand text-white" href="/">
                    CoderStory
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
                            <a class="nav-link" href="/blog">📚 Our Blog</a>
                            <a class="nav-link" href="/resources">🎒 Resources</a>
                            <div class="dropdown-divider" style="margin-left: 0rem; margin-right: 0rem;"></div>
                            <a class="nav-link disabled nav-dark"><strong>OUR STORY</strong></a>
                            <a class="nav-link" href="/about"> 🕶 About</a>
                            <a class="nav-link" target="_blank" href="https://coderstory.nolt.io"> 🚧 Roadmap</a>
                            <div class="dropdown-divider" style="margin-left: 0rem; margin-right: 0rem;"></div>
                            <a class="nav-link disabled nav-dark"><strong>BE INVOLVED</strong></a>
                            <a class="nav-link" href="/about"> 🖋 Contribute</a>
                            <a class="nav-link" href="/faq"> ❓ FAQ</a>
                            <a class="nav-link" href="/privacy"> 🤫 Privacy</a>
                        </nav>
                    </li>
                </nav>
            </section>

        </div>
    </nav><!-- /.navbar -->
