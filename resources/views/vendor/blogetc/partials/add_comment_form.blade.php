@php
    use WebDevEtc\BlogEtc\Captcha\CaptchaAbstract;
    use WebDevEtc\BlogEtc\Models\Post;
    /** @var Post $post */
    /** @var CaptchaAbstract $captcha */
@endphp
{{--<div class="add_comment_area">--}}
{{--    <h5 class="text-center">Add a comment</h5>--}}
{{--    <form method="post" action="{{ route('blogetc.comments.add_new_comment', $post->slug) }}">--}}
{{--        @csrf--}}

{{--        <div class="form-group">--}}

{{--            <label id="comment_label" for="comment">Your Comment</label>--}}
{{--            <textarea--}}
{{--                    class="form-control"--}}
{{--                    name="comment"--}}
{{--                    required--}}
{{--                    id="comment"--}}
{{--                    placeholder="Write your comment here"--}}
{{--                    rows="7">{{ old('comment') }}</textarea>--}}

{{--        </div>--}}

{{--        <div class='container-fluid'>--}}
{{--            <div class='row'>--}}

{{--                @if(config("blogetc.comments.save_user_id_if_logged_in", true) == false || !Auth::check())--}}

{{--                    <div class='col'>--}}
{{--                        <div class="form-group ">--}}
{{--                            <label id="author_name_label" for="author_name">Your Name </label>--}}
{{--                            <input--}}
{{--                                    type='text'--}}
{{--                                    class="form-control"--}}
{{--                                    name='author_name'--}}
{{--                                    id="author_name"--}}
{{--                                    placeholder="Your name"--}}
{{--                                    required--}}
{{--                                    value="{{old("author_name")}}">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    @if(config("blogetc.comments.ask_for_author_email"))--}}
{{--                        <div class='col'>--}}
{{--                            <div class="form-group">--}}
{{--                                <label id="author_email_label" for="author_email">Your Email--}}
{{--                                    <small>(won't be displayed publicly)</small>--}}
{{--                                </label>--}}
{{--                                <input--}}
{{--                                        type='email'--}}
{{--                                        class="form-control"--}}
{{--                                        name='author_email'--}}
{{--                                        id="author_email"--}}
{{--                                        placeholder="Your Email"--}}
{{--                                        required--}}
{{--                                        value="{{old("author_email")}}">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                @endif--}}


{{--                @if(config("blogetc.comments.ask_for_author_website"))--}}
{{--                    <div class='col'>--}}
{{--                        <div class="form-group">--}}
{{--                            <label id="author_website_label" for="author_website">Your Website--}}
{{--                                <small>(Will be displayed)</small>--}}
{{--                            </label>--}}
{{--                            <input--}}
{{--                                    type='url'--}}
{{--                                    class="form-control"--}}
{{--                                    name='author_website'--}}
{{--                                    id="author_website"--}}
{{--                                    placeholder="Your Website URL"--}}
{{--                                    value="{{old("author_website")}}">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                @endif--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        @if($captcha)--}}
{{--             Captcha is enabled. Load the type class and then include the view as defined in the captcha class.--}}
{{--            @include($captcha->view())--}}
{{--        @endif--}}

{{--        <div class="form-group">--}}
{{--            <input type="submit" class="form-control input-sm btn btn-success" value="Add Comment">--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</div>--}}






<div class="blog-comments-form">
    <div class="bottom-title">
    <form class="form" method="post" action="{{ route('blogetc.comments.add_new_comment', $post->slug) }}">
        <h2>Leave a comment</h2>
            @csrf

        @if(config("blogetc.comments.save_user_id_if_logged_in", true) == false || !Auth::check())
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                                <label>Your Name<span>*</span></label>
                                <input type="text" name="author_name" value="{{old("author_name")}}" class="validate">
                        </div>
                </div>
                @if(config("blogetc.comments.ask_for_author_email"))
                <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                                <label>Your Email<span>*</span></label>
                                <input type="email" name="author_email" class="validate" value="{{old("author_email")}}">
                        </div>
                </div>
            </div>
            @endif
        @endif
        <div class="row">
            <div class="input-field col s12">
                <div class="form-group">
                    <label>Your Comment<span>*</span></label>
                    <textarea name="comment" rows="6">{{ old('comment') }}</textarea>
                </div>
            </div>
        </div>
        @if($captcha)
            Captcha is enabled. Load the type class and then include the view as defined in the captcha class.
            @include($captcha->view())
        @endif
        <div class="form-group button"> 
            <button type="submit" class="bizwheel-btn primary effect">Submit Comment<i class="fa fa-paper-plane"></i></button>
        </div>
    </form>
</div>
</div>

