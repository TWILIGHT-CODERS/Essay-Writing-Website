@extends("layouts.web.app")
@section('title', $post->gen_seo_title())
@section("content")

    <!-- PAGE HEADING SECTION -->
    <section id="page-heading">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="page-content">
                        <!-- <div class="col-md-2 bb-img">
                            <img src="images/3.png" alt="">
                        </div> -->
                        <div class="col-md-12">
                            <h3>Blog Detail</h3>
                            <a href="index.html">Home</a> /
                            <a href="/blog">Blog</a> /
                            <a href="#" class="active">Blog Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END PAGEHEADING SECTION -->

    <!--SECTION START-->
{{--    <section>--}}
{{--        <div class="container com-sp">--}}
{{--            <div class="row">--}}
{{--                @include("blogetc::partials.show_errors")--}}
{{--                @include("blogetc::partials.full_post_details")--}}


{{--                @if(config("blogetc.comments.type_of_comments_to_show","built_in") !== 'disabled')--}}
{{--                    <div class="col-lg-offset-2 col-lg-8" id='maincommentscontainer'>--}}
{{--                        <h2 class='text-center' id='blogetccomments'>Comments</h2>--}}
{{--                        @include("blogetc::partials.show_comments")--}}
{{--                    </div>--}}
{{--                @else--}}
{{--                    --}}{{--Comments are disabled--}}
{{--                @endif--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!--SECTION END-->


    <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70 pg-inn"style="display: flex;">
            <div class="row">
                <div class="cor">
                    <div class="col-md-8">
                        @include("blogetc::partials.show_errors")
                        <div class="cor-con-mid">
                            @include("blogetc::partials.full_post_details")
                            <div class="cor-p6">
                                @if(config("blogetc.comments.type_of_comments_to_show","built_in") !== 'disabled')
                                    @include("blogetc::partials.show_comments")
                                @else
                                    Comments are disabled
                                @endif
                                                      
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cor-side-com">
                            <div class="">
                                <div class="de-left-tit">
                                    <h4>All Categories</h4>
                                </div>
                            </div>
                            <div class="ho-event">
                                <ul>
                                    @include("blogetc::sitewide.show_all_categories")
                                </ul>
                            </div>
                        </div>
                        <div class="cor-p6">
                            <div class="ho-ev-latest ho-ev-latest-bg-2">
                                <div class="ho-lat-ev">
                                    <h4>Recent News</h4>
                                    <p>All of the latest amazing news from our blog.</p>
                                </div>
                            </div>
                            <div class="ho-event ho-event-mob-bot-sp">
                                <ul>
                                    @include("blogetc::sitewide.recent_posts")
                                </ul>
                            </div>


                            <div class="cor-side-com">
                                <div class="ho-ev-latest ho-ev-latest-bg-3">
                                    <div class="ho-lat-ev">
                                        <h4>Be Notified First.</h4>
                                        <p>Please subscribe newsletter to get our latest news and updates</p>
                                        <p style="color: #e25f30;">
                                            <small>
                                                <b>N/B</b> We will not spam you. You can always unsubscribe whenever you want.
                                            </small>
                                        </p>
                                    </div>
                                </div>
                                <div class="ho-st-login">
                                    <div class="col s12">
                                        <form class="col s12">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="email" class="validate">
                                                    <label>Your Email</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <style type="text/css">
                                                    .subcribe p,.subcribe a{font-size: small; font-weight: bold;}
                                                    .subcribe a:hover{color: #e25f30;}
                                                </style>
                                                <div class="col s12 subcribe">
                                                    <p class="text-muted">By subscribing, you agree with our <a href="#">terms and conditions</a></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="submit" value="Subscribe" class="waves-effect waves-light light-btn">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- sticky -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->



@endsection

