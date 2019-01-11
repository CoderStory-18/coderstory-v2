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
            selector: '#interviewcreate',
            plugins: "link, image, code",
        });
    </script>  

  <!-- Styles -->
  <link href="/css/page.min.css" rel="stylesheet">
  <!-- <link href="/css/app.css" rel="stylesheet"> -->

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
  <link rel="icon" href="assets/img/favicon.png">

  <!--  Open Graph Tags -->
  <meta property="og:title" content="CoderStory">
  <meta property="og:description" content="A responsive, professional, and multipurpose SaaS, Software, Startup and WebApp landing template powered by Bootstrap 4.">
  <meta property="og:image" content="https://coderstory.io/thesaas/assets/img/og-img.jpg">
  <meta property="og:url" content="https://coderstory.io/">
  <meta name="twitter:card" content="summary_large_image">

      <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118575748-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-118575748-3');
    </script>

<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5c386f19aea594001162d367&product=social-ab' async='async'></script>

</head>

<body data-aos-easing="ease" data-aos-duration="1500" data-aos-delay="0" class="">


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">

      <div class="navbar-left">
        <button class="navbar-toggler" type="button">☰</button>
        <a class="navbar-brand text-white" href="#">
          CoderStory
        </a>
      </div>

      <section class="navbar-mobile">
        <nav class="nav nav-navbar ml-auto">
            <a class="nav-link" href="/interviews">Interviews</a>
            <a class="nav-link" href="/posts">Blog</a>
            <li class="nav-item">
            <a class="nav-link" href="#">More<span class="arrow"></span></a>
                <nav class="nav align-right">
                    <a class="nav-link" href="/about">About</a>
                    <a class="nav-link" href="/resources">Resources</a>
                </nav>
            </li>

          <!-- <a class="nav-link" href="/posts">Interviews</a>
          <a class="nav-link" href="/posts">
            Submit
          </a> -->
         
        </nav>
      </section>

    </div>
  </nav><!-- /.navbar -->