@extends("layouts.web.app",['title'=>$title])
@section('title', 'Blog')
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
                            <h3>Blog</h3>
                            <a href="/">Home</a> /
                            <a href="#" class="active">Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END PAGEHEADING SECTION -->

    <!--SECTION START-->
    
    <section>
        <div class="container com-sp pad-bot-70 pg-inn">
            <div class="row">
                <div class="cor">
                    <div class="col-md-8">
                        <div class="cor-con-mid">
                            <div class="con-title">
                                <h2>All Our featured<span> Blog Posts</span></h2>
                            </div>
                            <div class="cor-p1" style="text-align: center">
{{--                                <h3>@include("blogetc::sitewide.search_form")</h3>--}}

                                @if(Auth::check() && Auth::user()->canManageBlogEtcPosts())
                                <div class="share-btn">
                                    <ul>
                                        <li><a href="{{route("blogetc.admin.index")}}"><i class="fa fa-cog"></i> Go to Blog Admin panel</a>
                                        </li>
                                    </ul>
                                </div>
                                @endif

                                @if(isset($blogetc_category) && $blogetc_category)

                                    <div style="margin-top: 10px;">
                                        <span style="color:#203245">Viewing Category : <a href="#" class="ad-st-view"><i class="fa fa-tag"></i> {{$blogetc_category->category_name}}</a></span>
                                        <p class='text-center'>{{$blogetc_category->category_description}}</p>
                                    </div>

                                @endif
                            </div>

                            <div class="ho-event ho-event-mob-bot-sp">
                                @forelse($posts as $post)
                                <ul>
                                    @include("blogetc::partials.index_loop")
                                </ul>
                                @empty
                                    <div class='alert alert-danger'>Oops! No post available.</div>
                                @endforelse
                            </div>
                            
                            <div class="pagination">
                            <!--     <ul class="pagination">

                                    <li class="disabled"><a href="#!"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                    <li class="active"><a href="#!">1</a></li>
                                    <li class="waves-effect"><a href="#!">2</a></li>
                                    <li class="waves-effect"><a href="#!">3</a></li>
                                    <li class="waves-effect"><a href="#!">4</a></li>
                                    <li class="waves-effect"><a href="#!">5</a></li>
                                    <li class="waves-effect"><a href="#!"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

                                    <li class="active">
                                        {{$posts->links()}}
                                    </li>
                                </ul> -->
                                @if ($posts->hasPages())
  
                                <ul class="pagination">
                                    {{-- Previous Page Link --}}
                                    @if ($posts->onFirstPage())
                                        <li class="page-item disabled" aria-disabled="true">
                                            <span class="page-link">@lang('pagination.previous')</span>
                                        </li>
                                    @else
                                        <li class="active">
                                            <a class="waves" href="{{ $posts->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                                        </li>
                                    @endif

                                    {{-- Next Page Link --}}
                                    @if ($posts->hasMorePages())
                                        <li class="active">
                                            <a class="waves" href="{{ $posts->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled" aria-disabled="true">
                                            <span class="page-link">@lang('pagination.next')</span>
                                        </li>
                                    @endif
                                </ul>
                           
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
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

@endsection
