@extends('layouts.app')

@section('content')

<header class="header text-white" style="background-color: #0D1F2D;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4">{{ $interview->title }}</h1>
                <p class="lead-2 opacity-90 mt-6">
                    {{ $interview->summary }}
                </p>
            </div>
        </div>
    </div>
</header>

<div class="section" id="section-content bg-gray" style="padding-top: 2rem;">
    <div class="container">

        <div class="row">
            <div class="col-lg-3 mx-auto">
                <div class="team-2 border shadow-2 rounded p-4">
                    <a href="#">
                        <img src="{{ $interview->interview_profile }}" alt="..." class="avatar-xl" height="100">
                    </a>
                    <h5>{{ $interview->interview_name }}</h5>
                    <small>{{ $interview->interview_location }}</small>
                    <div class="social social-brand">
                        <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
                        <a class="social-website" href="#"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 mx-auto border shadow-2 rounded p-4">
                <p>
                    {!! $interview->body !!}
                </p>

                <div class="gap-xy-2 mt-6 mb-4">
                    @foreach($interview->tags as $tag)
                    <a class="badge badge-pill badge-secondary" href="/tags/{{ $tag->name }}}">{{ $tag->name }}</a>
                    @endforeach
                </div>

                <div id="disqus_thread"></div>
                <script>
                    /**
                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    
                    var disqus_config = function () {
                    this.page.url = '{{ Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = {{ $interview->id }}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    
                    (function () { // DON'T EDIT BELOW THIS LINE
                        var d = document,
                            s = d.createElement('script');
                        s.src = 'https://coderstory-1.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();

                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                        powered by Disqus.</a></noscript>


            </div>
        </div>



    </div>
</div>


</div>
</div>



@endsection
