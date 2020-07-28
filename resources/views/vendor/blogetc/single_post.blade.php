@extends("layouts.web.app")
@section('title', $post->gen_seo_title())
@section("content")

<!-- Blog Single -->
        <section class="news-area archive blog-single section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="row">
                            <div class="col-12">
                                @include("blogetc::partials.show_errors")
                                @include("blogetc::partials.full_post_details")
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                @if(config("blogetc.comments.type_of_comments_to_show","built_in") !== 'disabled')
                                    @include("blogetc::partials.show_comments")
                                @else
                                    Comments are disabled
                                @endif
                            </div>                          
                        </div>                          
                    </div>

                    <div class="col-lg-4 col-12">
                        <!-- Blog Sidebar -->
                        <div class="blog-sidebar">
                            <!-- Single Sidebar -->
                            <div class="single-sidebar blog_search">
                                <form class="searchform" action="#">
                                    <input type="text" placeholder="Search anything.." value="" name="s" id="s">
                                    <button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <!--/ End Single Sidebar -->
                            <!-- News Tags -->
                            <div class="single-sidebar tagcloud">
                                <h2 class="sidebar-title">Categories</h2>
                                <ul>
                                  @include("blogetc::sitewide.show_all_categories")
                                </ul>
                            </div>
                            <!-- News Sidebar -->
                            <div class="single-sidebar bizwheel_latest_news_widget">
                                <h2 class="sidebar-title">Popular Posts</h2>
                                <!-- Single News -->
                                 @include("blogetc::sitewide.recent_posts")
                               
                                <!--/ End Single News -->
                            </div>
                            <!--/ End Single Sidebar -->

                            <!-- News Tags -->
                            <div class="single-sidebar subscribe-form">
                                <h2 class="sidebar-title">Subscribe Form</h2>
                                <form action="#" method="post">
                                    <input type="email" placeholder="Your email address">
                                    <button type="submit" value="send">Subscribe Now</button>
                                </form>
                            </div>
                            <!--/ End News Tags -->
                        </div>
                        <!--/ End Blog Sidebar -->
                    </div>  
                </div>
            </div>
        </section>  
        <!--/ End Services -->

@endsection

