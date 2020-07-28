@php
    /** @var \WebDevEtc\BlogEtc\Models\Post $post */
     /** @var \WebDevEtc\BlogEtc\Models\Comment[] $comments */
    use WebDevEtc\BlogEtc\Models\Comment;
@endphp

<div class="blog-single-main">
    <div class="main-image">
        <?=$post->imageTag('medium', false, ''); ?>
    </div>
    <div class="blog-detail">
        <!-- News meta -->
        <ul class="news-meta"> 
            @includeWhen($post->categories, 'blogetc::partials.categories', ['post'=>$post])
            <li><i class="fa fa-pencil"></i>Posted {{ $post->posted_at->diffForHumans() }}</li>
            <li><i class="fa fa-comments"></i><?php $commentCount = Comment::withoutGlobalScopes()
                ->where('blog_etc_post_id', $post->id)
                ->where('approved', true)
                ->count();?>
                {{$commentCount}} comments</li>
        </ul>
        <h2 class="blog-title">{{$post->title}}</h2>
        <p>{!! $post->renderBody() !!}</p>
        <!-- Post Nav -->
        <div class="posts_nav">
            <div class="post-left"><a href="https://www.themelamp.com/templates/bizwheel/asdf">Previous Post</a></div>
            <div class="post-right"><a href="https://www.themelamp.com/templates/bizwheel/asdf">Next Post</a></div>
        </div>
    </div>
</div>
                                        