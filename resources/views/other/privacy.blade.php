@extends('layouts.app')
@section('content')

<header class="header text-white" style="background-image: url(../img/bg.jpg)" data-overlay="1">
    <div class="overlay opacity-95" style="background-color: #0D1F2D"></div>
    <div class="container">
        <div class="row align-items-center h-100">

            <div class="col-md-10 pb-1">
                <h3 class="display-4">🤫 Privacy Policy </h3>
                <p class="lead-2 fw-400 mb-3">
                    Your privacy is important to us. Last update: November 18, 2018
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
                <li class="breadcrumb-item">Privacy</li>
            </ol>
        </div>
    </nav>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">

                    <h4>General Information</h4>
                    <p>
                        Your privacy is important to us. It is CoderStory's policy to respect your privacy regarding
                        any information we may collect from you across our website, https://www.coderstory.io/, and
                        other sites we own and operate.
                    </p>
                    <p>
                        We only ask for personal information when we truly need it to provide a service to you. We
                        collect it by fair and lawful means, with your knowledge and consent. We also let you know why
                        we’re collecting it and how it will be used.
                    </p>
                    <p>
                        We only retain collected information for as long as necessary to provide you with your
                        requested service. What data we store, we’ll protect within commercially acceptable means to
                        prevent loss and theft, as well as unauthorised access, disclosure, copying, use or
                        modification.
                    </p>
                    <p>
                        We don’t share any personally identifying information publicly or with third-parties, except
                        when required to by law.
                    </p>
                    <p>
                        Our website may link to external sites that are not operated by us. Please be aware that we
                        have no control over the content and practices of these sites, and cannot accept responsibility
                        or liability for their respective privacy policies.
                    </p>
                    <p>
                        You are free to refuse our request for your personal information, with the understanding that
                        we may be unable to provide you with some of your desired services.
                    </p>
                    <p>
                        Your continued use of our website will be regarded as acceptance of our practices around
                        privacy and personal information.
                    </p>
                    <br>
                    <h4>Question</h4>
                    <p>Any questions about this Privacy Policy should be addressed to hello@coderstory.io.</p>


                </div>
            </div>
        </div>
    </section>

</main>
@endsection
