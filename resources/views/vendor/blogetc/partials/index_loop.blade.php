@php
    /** @var \WebDevEtc\BlogEtc\Models\Post $post */
    /** @var \WebDevEtc\BlogEtc\Models\Comment[] $comments */
    use WebDevEtc\BlogEtc\Models\Comment;
@endphp


<div class="single-news">
    <div class="news-head overlay">
        <span class="news-img" style="background-image:url('storage/blog/{{ $post->image_medium }}'); background-color: #f4f9fc;"></span>
        <a href="{{$post->url()}}" class="bizwheel-btn theme-2">Read more</a>
    </div>
    <div class="news-body">
        <div class="news-content">
            <h3 class="news-title"><a href="blog-single.html">{{$post->title}}</a></h3>
            <div class="news-text"><p>{!! $post->generateIntroduction(300) !!}</p></div>
            <ul class="news-meta">
                <li class="date"><i class="fa fa-calendar"></i>{{ $post->posted_at->diffForHumans() }}</li>
                <li class="view"><i class="fa fa-comments"></i>
                    <?php $commentCount = Comment::withoutGlobalScopes()
                    ->where('blog_etc_post_id', $post->id)
                    ->where('approved', true)
                    ->count();?>
                {{$commentCount}}</li>
                <!-- <li class="heart"><i class="fa fa-heart"></i>20</li> -->
                <li><a href="{{ $post->url() }}" class="more">Continue reading <i class="fa fa-angle-double-right.html" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>
