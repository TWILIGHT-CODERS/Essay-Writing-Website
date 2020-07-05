@extends("layouts.web.app",['title'=>'Saved comment'])
@section("content")
{{--    <div class="text-center">--}}
{{--        <h3>--}}
{{--            Thanks! Your comment has been saved!--}}
{{--        </h3>--}}

{{--        @if(!config('blogetc.comments.auto_approve_comments', false))--}}
{{--            <p>--}}
{{--                After an admin user approves the comment, it'll appear on the site!--}}
{{--            </p>--}}
{{--        @endif--}}

{{--        <a href="{{ $blog_post->url() }}" class="btn btn-primary">--}}
{{--            Back to blog post--}}
{{--        </a>--}}
{{--    </div>--}}


    <section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn head-2-inn-padd-top">
                    <h1>Thanks! Your comment has been saved!</h1>
                    <p>We will review your comment and once approved, it'll appear on this site!</p>
                    <div class="event-head-sub">
                        <style>
                            .thank_you{
                                color: #fff;
                                padding: 10px 10px 10px 10px;
                            }
                            .thank_you:hover{color:#e66030 !important;}
                        </style>
                        <ul>
                            <li>
                                <a href="{{ $blog_post->url() }}" class="thank_you">
                                    Back to blog post
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

