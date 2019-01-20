@extends('blog.post-head')
@section('content')

<header class="header text-white" style="background-color: #0D1F2D;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center mt-2">
                    <h2>{{ $post->title }}</h2>

                    
                    <p>{{ $post->created_at->toFormattedDateString() }} - By <a href="{{ $post->author_link }}"> {{ $post->author }}</a></p>
                </div>
            </div>
        </div>
    </div>
</header>

<nav class="bb-1 bg-gray" aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb px-0">
            <li class="breadcrumb-item"><a href="/posts">Blog</a></li>
            <li class="breadcrumb-item">{{ $post->title }}</li>
        </ol>
    </div>
</nav>

<div class="section bg-gray" style="padding-top: 2rem; ">
    <div class="container">
        <div class="text-center">
            <img class="rounded-md" src="{{ $post->image }}" alt="...">
        </div>


        <div class="row">
            <div class="col-lg-8 mx-auto">
                <p>
                    {!! $post->body !!}
                </p>
                <div class="gap-xy-2 mt-4 mb-4">
                    @foreach($post->categories as $category)
                    <a class="badge badge-pill badge-secondary" href="/posts/by_category?categories[]={{ $category->name }}">{{
                        $category->name }}</a>
                    @endforeach
                </div>

                <div id="disqus_thread"></div>
                <script>
                    /**
                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

                     var disqus_config = function () {
                    this.page.url = '{{ Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = {{ $post->id }}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };

                    (function () { // DON'T EDIT BELOW THIS LINE
                        var d = document,
                            s = d.createElement('script');
                        s.src = 'https://coderstory.disqus.com/embed.js';
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

@endsection
