@extends("layouts.web.app",['title'=>$title])
@section('title', 'Blog')
@section("content")

        <section class="blog-layout blog-latest section-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="row">
                            @forelse($posts as $post)
                            <div class="col-12">
                                <!-- Single Blog -->
                                @include("blogetc::partials.index_loop")
                                <!--/ End Single Blog -->
                            </div>
                            @empty
                                <div class='alert alert-danger'>Oops! No post available.</div>
                            @endforelse
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Pagination -->
                                @include('web.includes.pagination')
                                <!--/ End Pagination -->
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
                            <div id="side-sticky">
                                <div class="single-sidebar subscribe-form">
                                    <h2 class="sidebar-title">Subscribe Form</h2>
                                    <form action="#" method="post">
                                        <input type="email" placeholder="Your email address">
                                        <button type="submit" value="send">Subscribe Now</button>
                                    </form>
                                </div>
                                <!--/ End News Tags -->
                            </div>
                        <!-- end sticky -->
                        </div>
                        <!--/ End Blog Sidebar -->
                    </div>
                </div>
            </div>
        </section>
    <!--SECTION END-->

@endsection
