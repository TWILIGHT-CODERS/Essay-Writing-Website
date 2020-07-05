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

@foreach(\WebDevEtc\BlogEtc\Models\Post::orderBy('posted_at','desc')->limit(5)->get() as $post)
<li>
    <div class="ho-ev-img-sm">
        <?=$post->imageTag('thumbnail', true, ''); ?>
    </div>
    <div class="ho-ev-link-rt">
        <a href="{{ $post->url() }}" title="{{ $post->title }}">
            <h4>{{ $post->title }}</h4>
        </a>
        {{--                                            <p>Etiam ornare lacus nec lectus vestibulum aliquam.</p>--}}
        <span><small>Posted {{ $post->posted_at->diffForHumans() }}</small></span>
        <a href="{{ $post->url() }}" class="ad-st-view" style="float: right;">View Post</a>
    </div>
</li>
@endforeach
