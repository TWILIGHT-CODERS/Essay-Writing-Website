@php
    /** @var \WebDevEtc\BlogEtc\Models\Post $post */
@endphp

{{--<div class="" style='max-width:600px; margin: 50px auto; background: #fffbea;border-radius:3px;padding:0;'>--}}

{{--    <div class='text-center'>--}}
{{--        <?=$post->imageTag('medium', true, ''); ?>--}}
{{--    </div>--}}
{{--    <div style='padding:10px;'>--}}
{{--        <h3 class=''><a href='{{$post->url()}}'>{{$post->title}}</a></h3>--}}
{{--        <h5 class=''>{{$post->subtitle}}</h5>--}}

{{--        <p>{!! $post->generateIntroduction(400) !!}</p>--}}

{{--        <div class="text-center">--}}
{{--            <a href="{{ $post->url() }}" class="btn btn-primary">View Post</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


{{--<div class="ed-rese-grid">--}}
{{--    <div class="ed-rsear-img ed-faci-full-top">--}}
{{--        <?=$post->imageTag('medium', true, ''); ?>--}}
{{--    </div>--}}
{{--    <div class="ed-rsear-dec ed-faci-full-bot">--}}
{{--        <h4><a href="{{$post->url()}}">{{$post->title}}</a></h4>--}}
{{--        <p>{!! $post->generateIntroduction(400) !!} </p>--}}
{{--        <a href="{{ $post->url() }}" class="read-line-btn">Read more</a>--}}
{{--    </div>--}}
{{--</div>--}}


<li>
    <div class="ho-ev-img">
        <?=$post->imageTag('medium', true, ''); ?>
    </div>
    <div class="ho-ev-link-blog">
        <a href="{{$post->url()}}" title="{{$post->title}}">
            <h4>{{$post->title}}</h4>
        </a>
        <span>Posted on 7-07-2020</span>
        <p>{!! $post->generateIntroduction(300) !!}</p>
        <div class="pg-eve-reg-news">
            <a href="{{ $post->url() }}">Read more</a>
        </div>
    </div>
</li>

