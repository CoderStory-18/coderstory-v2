@extends('layouts.app')

@section('content')

<header class="header text-white" style="background-image: url(../img/bg.jpg)" data-overlay="1">
    <div class="overlay opacity-95" style="background-color: #0D1F2D"></div>
    <div class="container">
        <div class="row align-items-center h-100">

            <div class="col-md-10 pb-1">
                <h3 class="display-4">🖋 Contribute to CoderStory </h3>
                <p class="lead-2 fw-400 mb-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>

                <nav class=" mt-1">
                    <a class="btn btn-glass border" href="#interview"> 👩🏽‍💻 Interview</a>
                    <a class="btn btn-glass border" href="#guestpost"> 📝 Guest Post</a>
                </nav>
            </div>

        </div>
    </div>
</header>
<!-- 
Share a story, explain a concept, write a guide, give some recommendations, or whatever you want to write about, as long as it keeps related to startups! We only accept unique content and the process is really simple.

You write it.

We read it and provide some feedback.

We improve it.

The article is published.

We all promote it and reach thousands of readers.

If you are looking to write a guest post on Failory, please email us to hello@failory.com. In the email, make sure to submit a few headlines of potential articles! -->

<section class="section">
    <div class="container">

        <div class="row" id="interview">
            <div class="col-lg-11 mx-auto">
                <h3>👩🏽‍💻 Be Interviewed</h3>

                <p>Interactively foster interoperable schemas rather than client-centric architectures. Progressively
                    drive collaborative human capital vis-a-vis optimal ideas. Monotonectally fashion cross-platform
                    leadership skills through high standards in manufactured products. Continually reintermediate.</p>

                <p>Interactively foster interoperable schemas rather than client-centric architectures. Progressively
                    drive collaborative human capital vis-a-vis optimal ideas. Monotonectally fashion cross-platform
                    leadership skills through high standards in manufactured products. Continually reintermediate.</p>

                <p>Interactively foster interoperable schemas rather than client-centric architectures. Progressively
                    drive collaborative human capital vis-a-vis optimal ideas. Monotonectally fashion cross-platform
                    leadership skills through high standards in manufactured products. Continually reintermediate.</p>

                <div class="row gap-y align-items-center text-center bg-light rounded p-5 mt-7">

                    <div class="col-md-auto">
                      <h3>Start your Interview</h3>
                        <p>
                            Answer a few questions that will help us write an interview that perfectly fits your case.
                            Then wait for us to reach you and send you the questions.
                        </p>
                        <a class="typeform-share button" href="https://coderstory.typeform.com/to/kfvOdb" data-mode="drawer_left"
                            style="display:inline-block;text-decoration:none;background-color:#0D1F2D;color:white;cursor:pointer;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:40px;text-align:center;margin:0;height:40px;padding:0px 26px;border-radius:20px;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;"
                            data-hide-footer=true data-submit-close-delay="5" target="_blank">👉🏽 Let's begin
                        </a>
                        <script>
                            (function () {
                                var qs, js, q, s, d = document,
                                    gi = d.getElementById,
                                    ce = d.createElement,
                                    gt = d.getElementsByTagName,
                                    id = "typef_orm_share",
                                    b = "https://embed.typeform.com/";
                                if (!gi.call(d, id)) {
                                    js = ce.call(d, "script");
                                    js.id = id;
                                    js.src = b + "embed.js";
                                    q = gt.call(d, "script")[0];
                                    q.parentNode.insertBefore(js, q)
                                }
                            })()

                        </script>
                    </div>
                </div>

            </div>
        </div>

        <hr class="my-8">
        <div class="row" id="guestpost">
            <div class="col-11 mx-auto col-md-11">
                <h3>📝 Write a Guest Post</h3>
                <p class="text-light my-6">
                    Share a story, explain a concept, write a guide, give some recommendations, or whatever you want to
                    write about, as long as it keeps related to startups! We only accept unique content and the process
                    is really simple.
                </p>
                <ul class="list-unstyled">
                    <li><span class="mr-1 ti-check text-success small-3"></span> You write it.</li>
                    <li><span class="mr-1 ti-check text-success small-3"></span> We review it and provide feedback.</li>
                    <li><span class="mr-1 ti-check text-success small-3"></span> We improve it</li>
                    <li><span class="mr-1 ti-check text-success small-3"></span> We publish the article.</li>
                    <li><span class="mr-1 ti-check text-success small-3"></span> We all promote it to reach thousands
                        of readers.</li>
                </ul>
                <p class="text-light my-6">
                    If you are looking to write a guest post on CoderStory, please email us to hello@coderstory.io. In
                    the email, make sure to submit a few headlines of potential articles!
                </p>

            </div>

        </div>





    </div>
</section>

@endsection
