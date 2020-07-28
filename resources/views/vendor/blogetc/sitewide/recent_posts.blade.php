{{--<h5>Recent Posts</h5>--}}
{{--<ul class="nav">--}}
{{--    --}}{{-- TODO replace with repo--}}
{{--    @foreach(\WebDevEtc\BlogEtc\Models\Post::orderBy('posted_at','desc')->limit(5)->get() as $post)--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="{{ $post->url() }}">--}}
{{--                {{ $post->title }}--}}
{{--            </a>--}}
{{--        </li>--}}
{{--    @endforeach--}}
{{--</ul>--}}

@foreach(\WebDevEtc\BlogEtc\Models\Post::orderBy('posted_at','desc')->limit(4)->get() as $post)
 <div class="single-f-news">
    <div class="post-thumb"><a href="{{ $post->url() }}"><?=$post->imageTag('thumbnail', true, 'style="background-color: #000;"'); ?></a></div>
    <div class="content">
        <p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>{{ $post->posted_at->diffForHumans() }}</time></p>
        <h4 class="title"><a href="{{ $post->url() }}">{{ $post->title }}</a></h4>
    </div>
</div>
@endforeach
