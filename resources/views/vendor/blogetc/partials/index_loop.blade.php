@php
    /** @var \WebDevEtc\BlogEtc\Models\Post $post */
@endphp



<li>
    <div class="ho-ev-img">
        <?=$post->imageTag('medium', true, ''); ?>
    </div>
    <div class="ho-ev-link-blog">
        <a href="{{$post->url()}}" title="{{$post->title}}">
            <h4>{{$post->title}}</h4>
        </a>
        <span style="color: orange;">Posted {{ $post->posted_at->diffForHumans() }}</span>
        <p>{!! $post->generateIntroduction(300) !!}</p>
        <div class="pg-eve-reg-news">
            <a href="{{ $post->url() }}">Read more</a>
        </div>
    </div>
</li>

