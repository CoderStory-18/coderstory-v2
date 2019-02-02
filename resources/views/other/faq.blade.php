@extends('layouts.app')

@section('content')

<header class="header text-white" style="background-image: url(../img/bg.jpg)" data-overlay="1">
    <div class="overlay opacity-95" style="background-color: #0D1F2D"></div>
    <div class="container">
        <div class="row align-items-center h-100">

            <div class="col-md-10 pb-1">
                <h3 class="display-4">❓ Frequently Asked Questions </h3>
                <p class="lead-2 fw-400 mb-3">
                    We want to get ahead and answer any questions we anticipate being asked in the near future. 
                    If you still have any questions then feel free to contact us at the email in the footer!
                </p>
            </div>

        </div>
    </div>
</header>

<main class="main-content">

    <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Breadcrumbs
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
    <nav class="bb-1 bg-gray" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb px-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">FAQ</li>
            </ol>
        </div>
    </nav>


    <div class="container">
        <div class="row">

            <div class="col-md-10 col-xl-12 mr-md-auto py-8">
                <article>
                    <h6>🔎 What is CoderStory?</h6>
                    <p>
                        First and foremost we are a community. We are providing a platform to share every story. We bring you 
                        exclusive interviews from creators with the focus on bringing you new ways to learn. Everyone has a story to tell, 
                        and you can find or start yours with us.
                    </p>

                    <hr class="hr-dash">

                    <h6>🎥 Why did you build CoderStory?</h6>

                    <p>
                        CoderStory was built out of the <a href="https://24hrstartup.com/">#24hrstartup Challenge</a> organised by 
                        <a href="https://twitter.com/thepatwalls">Pat Walls</a>, <a href="https://twitter.com/arminulrich">Armin Ulrich</a> and <a href="https://twitter.com/_feloidea">Melanie Massinger</a>. The aim of the game was that participants had one day to build a product from scratch and live stream
                        the creation of their product from start to finish. It offered the opportunity to build in public 
                        and develop relationships with the ever growing community. Then the next stage was all the products were 
                        voted on by participants and the people they shared it with! 

                        <br><br>

                        I never expected what happened next - a few days after the challenge finished they announced the results. 
                        From the 96 products that launched, CoderStory placed #7 and earned it's first bit of cash from the prize 
                        money of $250 that was generously donated by the sponsors! 

                        <br><br>

                        I had such incredible feedback following the event that I have continued to pursue the on-going developement 
                        of CoderStory to provide a platform for you share your story with the world. 

                    </p>
                    <hr class="hr-dash">

                    <h6>💻 How did you build CoderStory? </h6>
                    <p>
                       CoderStory was built using the Laravel Framework (PHP) and a lot of Google-ing!
                    </p>
                    <hr class="hr-dash">

                    <h6>💸 How do you make money?</h6>
                    <p>
                       We do not want to bother you with lots of ads floating around the website. We want to make the experience 
                       as clean and ad-free as possible. In order to help keep us CoderStory going and keep the site up, some of 
                       our content may contain affiliate links which means we receive a commission if you click a link and subsequently 
                       purchase the product we recommend. These links will not cost you any money, just helps us keep moving forward. 
                       Thank you for all your support on CoderStory!

                    </p>

                    <hr class="hr-dash">

                    <h6>📨 Want to contact us?</h6>
                    <p>
                        If you have any questions - please feel free to email us at hello@coderstory.io 
                    </p>
                </article>
            </div>


        </div>
    </div>


</main>

@endsection
