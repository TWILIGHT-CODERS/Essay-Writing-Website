@php
    /** @var \WebDevEtc\BlogEtc\Models\Comment[] $comments */
    use WebDevEtc\BlogEtc\Models\Comment;
@endphp
<h3>All Comments <?php $commentCount = Comment::withoutGlobalScopes()
    ->where('blog_etc_post_id', $post->id)
    ->where('approved', true)
     ->count();?> ({{$commentCount}})</h3>
@forelse($comments as $comment)

<div class="col-md-12">
    <div>
        <div class="home-top-cour">
            <div class="col-md-12">
{{--                <a href="#">--}}
{{--                    <h3>By {{ $comment->author() }}</h3>--}}
{{--                </a>--}}
                <h4>
                    By {{ $comment->author() }} - <a href="mailto:{{$comment->author_email}}">{{$comment->author_email}}</a>
                    @if(config('blogetc.comments.ask_for_author_website') && $comment->author_website)
                        (<a href="{{ $comment->author_website }}" target="_blank" rel="noopener"> - Website</a>)
                    @endif
                </h4>
                <p><small>Posted {{ $comment->created_at->diffForHumans() }}</small></p>
                <p style="margin-top: 10px;">{!! nl2br(e($comment->comment)) !!}</p>
            </div>
        </div>
        <!--POPULAR COURSES-->
    </div>
</div>

@empty
    <div class="alert alert-info">
        No comments yet! Why don't you be the first?
    </div>
@endforelse

@if(count($comments) >= config('blogetc.comments.max_num_of_comments_to_show', 500))
    <p>
        <em>Only the first {{ config('blogetc.comments.max_num_of_comments_to_show', 500) }} comments are
            shown.</em>
    </p>
@endif


