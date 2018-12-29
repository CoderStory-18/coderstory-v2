<div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title mb-0"><strong>Tags</strong></h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
    <a href="/posts" class="btn">All</a>
    </li>
    @foreach($tags as $tag)
    <li class="list-group-item">
    <a href="
          @if(in_array($tag, $selected_tags)){{
            '/posts/by_tags?' .
            join('&', array_map(function($item) { return 'tags[]=' . $item; }, array_diff($selected_tags, [$tag])))
          }}@else{{
            '/posts/by_tags?tags[]=' . $tag . '&' .
            join('&', array_map(function($item) { return 'tags[]=' . $item; }, $selected_tags))
          }}
          @endif
          "
          class="
          @if(in_array($tag, $selected_tags))
            btn btn-primary 
          @else
            btn
          
          @endif
          
          "
        >

        {{ $tag }}

        </a>
    </li>
    @endforeach
  </ul>
</div>
