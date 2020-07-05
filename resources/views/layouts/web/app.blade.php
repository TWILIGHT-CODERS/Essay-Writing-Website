<!DOCTYPE html>
<html lang="@if(session()->has('locale')){{session()->get('locale')}}@else{{"en"}}@endif">
<head>
    <title>@yield('title') | Essay Writing paper at your service | Elitespaper.com</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ElitesPaper is one of the best online site with quality writing.">
    <meta name="keyword" content="essay writing website, Elites Paper, online writing, essay, essay help, writing help, buy paper online, academic assistance">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!!\WebDevEtc\BlogEtc\Helpers::rss_html_tag()!!}
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="{{ asset('assets/web/images/fav.ico') }}" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{ asset('css/web/font-awesome.min.css') }}">
    <!-- ALL CSS FILES -->
    <link href="{{ asset('css/web/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/web/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/web/style.css') }}" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{ asset('css/web/style-mob.css') }}" rel="stylesheet" />
    @yield('css')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

    <!-- SCROLL TO TOP -->
    <div id="back-top" class="back-top" style="display: block;">
        <a href="#top">
            <i class="fa fa-chevron-up"></i>
            <span class="d-block">Top</span>
        </a>
    </div>
    <!-- END SCROLL TO TOP -->

    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="index.html"><img src="{{ asset('assets/web/images/logo.png') }}" alt="" />
						</a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            <h4>MENU</h4>
                            <hr>
                            <h4>Account</h4>
                            <ul>
                                @guest
{{--                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a></li>--}}
{{--                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Register</a></li>--}}
                                    <a href="/login">Sign In</a></li>
                                    <a href="/register" data-toggle="modal" data-target="#modal1">Sign Up</a></li>
                                @else

                                <li>
                                    <a href="/dashboard">My Account</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/logout" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </li>
                                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                        @csrf
                                </form>
                                @endguest
                            </ul>

                            <ul>
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="price.html">Price</a></li>
                            </ul>


                            <h4>Our Work</h4>
                            <ul>
                                <li><a href="/how-it-works">How It Works</a></li>
                                <li><a href="/faqs">FAQS</a></li>
                                <li><a href="/samples">Samples</a></li>
                            </ul>


                            <h4>Our Services</h4>
                            <ul>
                                <li><a href="/paraphrasing">Paraphrasing & Writing</a></li>
                                <li><a href="/essay">Essay Writing</a></li>
                                <li><a href="/assignment">Assignment Writing</a></li>
                                <li><a href="/grading">Grading & Marking</a></li>
                                <li><a href="/resume">Resume Writing</a></li>
                                <li><a href="/dissertation">Dissertation Writing</a></li>
                                <li><a href="/proofreading">Editing/Proofreading</a></li>
                                <li><a href="/problem-solving">Problem Solving</a></li>
                            </ul>

                            <ul>
                                <li><a href="/reviews">Reviews</a></li>
                                <li><a href="/essays">Essays</a></li>
                                <li><a href="/blog">Blog</a></li>
                                <li><a href="/contact-us">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="#">Contact: Lake Road, Suite 180 Farmington Hills, U.S.A.</a>
                                </li>
                                <li><a href="#">Phone: +101-1231-1231</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                                @guest
{{--                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a>--}}
{{--                                </li>--}}
{{--                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Sign Up</a>--}}
{{--                                </li>--}}
                                    <li><a href="/login">Sign In</a></li>
                                    <li><a href="/register">Sign Up</a></li>
                                @else

                                <li>
                                    <a href="/dashboard">My Account</a>
                                </li>
                                
                                <li>
                                    <a class="dropdown-item" href="/logout" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </li>
                                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                        @csrf
                                </form>

                                @endguest
                            </ul>
                        </div>
                        <div class="ed-com-t1-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="index.html"><img src="{{ asset('assets/web/images/logo.png') }}" alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="/" class="active">Home</a></li>
                                <li><a href="/price" class="{{ request()->is('price') ? 'active' : '' }}">Price</a></li>
                                <li class="about-menu">
                                    <a href="#" class="mm-arr">Our Work <i class="fa fa-caret-down"></i></a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="about-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1">
                                                    <ul>
                                                        <li><a href="/how-it-works" class="{{ request()->is('how-it-works') ? 'active' : '' }}">How It Works</a></li>
                                                        <li><a href="/faqs" class="{{ request()->is('faqs') ? 'active' : '' }}">FAQS</a></li>
                                                        <li><a href="/samples" class="{{ request()->is('samples') ? 'active' : '' }}">Samples</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="cour-menu">
                                    <a href="#" class="mm-arr">Our Services  <i class="fa fa-caret-down"></i></a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="cour-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1">
                                                    <ul>
                                                        <li><a href="/paraphrasing" class="{{ request()->is('paraphrasing') ? 'active' : '' }}">Paraphrasing & Writing</a></li>
                                                        <li><a href="/essay" class="{{ request()->is('essay') ? 'active' : '' }}">Essay Writing</a></li>
                                                        <li><a href="/assignment" class="{{ request()->is('assignment') ? 'active' : '' }}">Assignment Writing</a></li>
                                                        <li><a href="/grading" class="{{ request()->is('grading') ? 'active' : '' }}">Grading & Marking</a></li>
                                                        <li><a href="/resume" class="{{ request()->is('resume') ? 'active' : '' }}">Resume Writing</a></li>
                                                        <li><a href="/dissertation" class="{{ request()->is('dissertation') ? 'active' : '' }}">Dissertation Writing</a></li>
                                                        <li><a href="/proofreading" class="{{ request()->is('proofreading') ? 'active' : '' }}">Editing/Proofreading</a></li>
                                                        <li><a href="/problem-solving" class="{{ request()->is('problem-solving') ? 'active' : '' }}">Problem Solving</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="/reviews" class="{{ request()->is('reviews') ? 'active' : '' }}">Reviews</a></li>

                                <li><a href="/essays" class="{{ request()->is('essays') ? 'active' : '' }}">Essays</a>
                                </li>
                                <li><a href="/blog" class="{{ request()->is('blog') ? 'active' : '' }}">Blog</a>
                                </li>
                                <li><a href="/contact-us" class="{{ request()->is('contact-us') ? 'active' : '' }}">Contact us</a>
                                </li>
                                <li>
                                    <a href="#" class="s-form">
                                        <span class="searchbox-icon">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </a>
                                    <!-- <a href="search.html"><i class="fa fa-search"></i></a> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="all-drop-down-menu">

                    </div>

                </div>
            </div>
        </div>
        <div class="search-top" id="search-top" style="display: none;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                            <form>
                                <div class="sf-type">
                                    <div class="sf-input">
                                        <input type="text" id="sf-box" placeholder="Search course and discount courses">
                                    </div>
                                    <div class="sf-list">
                                        <ul>
                                            <li><a href="course-details.html">Accounting/Finance</a></li>
                                            <li><a href="course-details.html">civil engineering</a></li>
                                            <li><a href="course-details.html">Art/Design</a></li>
                                            <li><a href="course-details.html">Marine Engineering</a></li>
                                            <li><a href="course-details.html">Business Management</a></li>
                                            <li><a href="course-details.html">Journalism/Writing</a></li>
                                            <li><a href="course-details.html">Physical Education</a></li>
                                            <li><a href="course-details.html">Political Science</a></li>
                                            <li><a href="course-details.html">Sciences</a></li>
                                            <li><a href="course-details.html">Statistics</a></li>
                                            <li><a href="course-details.html">Web Design/Development</a></li>
                                            <li><a href="course-details.html">SEO</a></li>
                                            <li><a href="course-details.html">Google Business</a></li>
                                            <li><a href="course-details.html">Graphics Design</a></li>
                                            <li><a href="course-details.html">Networking Courses</a></li>
                                            <li><a href="course-details.html">Information technology</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sf-submit">
                                    <input type="submit" value="Search Course">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->

    @yield('content')

        <!--SECTION START-->
    <section>
        <div class="full-bot-book">
            <div class="container">
                <div class="row">
                    <div class="bot-book">
                        <div class="col-md-2 bb-img">
                            <img src="{{ asset('assets/web/images/3.png') }}" alt="">
                        </div>
                        <div class="col-md-7 bb-text">
                            <h4>therefore always free from repetition</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                        </div>
                        <div class="col-md-3 bb-link">
                            <a href="course-details.html">Book This Course</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

    <!--HEADER SECTION-->
    <section class="wed-hom-footer">
        <div class="container">
            <!--<div class="row">
                <div class="col-md-12">
                <h4>About Wedding Planner</h4>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
                <p>more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                <p></p>
              </div>
              </div>-->
            <div class="row wed-foot-link">
                <div class="col-md-4 foot-tc-mar-t-o">
                    <h4>Top Courses</h4>
                    <ul>
                        <li><a href="course-details.html">Accounting/Finance</a></li>
                        <li><a href="course-details.html">civil engineering</a></li>
                        <li><a href="course-details.html">Art/Design</a></li>
                        <li><a href="course-details.html">Marine Engineering</a></li>
                        <li><a href="course-details.html">Business Management</a></li>
                        <li><a href="course-details.html">Journalism/Writing</a></li>
                        <li><a href="course-details.html">Physical Education</a></li>
                        <li><a href="course-details.html">Political Science</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>New Courses</h4>
                    <ul>
                        <li><a href="course-details.html">Sciences</a></li>
                        <li><a href="course-details.html">Statistics</a></li>
                        <li><a href="course-details.html">Web Design/Development</a></li>
                        <li><a href="course-details.html">SEO</a></li>
                        <li><a href="course-details.html">Google Business</a></li>
                        <li><a href="course-details.html">Graphics Design</a></li>
                        <li><a href="course-details.html">Networking Courses</a></li>
                        <li><a href="course-details.html">Information technology</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>HELP & SUPPORT</h4>
                    <ul>
                        <li><a href="#">24x7 Live help</a>
                        </li>
                        <li><a href="#">Contact us</a>
                        </li>
                        <li><a href="#">Feedback</a>
                        </li>
                        <li><a href="#">FAQs</a>
                        </li>
                        <li><a href="#">Safety Tips</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row wed-foot-link-1">
                <div class="col-md-4 foot-tc-mar-t-o">
                    <h4>Get In Touch</h4>
                    <p>Address: 28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p>
                    <p>Phone: <a href="#!">+101-1231-4321</a></p>
                    <p>Email: <a href="#!">info@educationmaster.com</a></p>
                </div>
                <div class="col-md-4">
                    <h4>DOWNLOAD OUR FREE MOBILE APPS</h4>
                    <ul>
                        <li><a href="#"><span class="sprite sprite-android"></span></a>
                        </li>
                        <li><a href="#"><span class="sprite sprite-ios"></span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>SOCIAL MEDIA</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->

    <!--HEADER SECTION-->
    <section class="wed-rights">
        <div class="container">
            <div class="row">
                <div class="copy-right">
                    <p>Copyrights © {{ now()->year }} ElitesPaper. All rights reserved.</p>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->

    <!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
    <section>
        <!-- LOGIN SECTION -->
        <div id="modal1" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello...</h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="{{ asset('assets/web/images/cancel.png') }}" alt="" />
                    </a>
                    <h4>Login</h4>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name" class="validate">
                                <label>User name</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate">
                                <label>Password</label>
                            </div>
                        </div>
                        <div>
                            <div class="s12 log-ch-bx">
                                <p>
                                    <input type="checkbox" id="test5" />
                                    <label for="test5">Remember me</label>
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Login" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal3">Forgot password</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- REGISTER SECTION -->
        <div id="modal2" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello...</h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="{{ asset('assets/web/images/cancel.png') }}" alt="" />
                    </a>
                    <h4>Create an Account</h4>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name1" class="validate">
                                <label>User name</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="email" class="validate">
                                <label>Email id</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate">
                                <label>Password</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate">
                                <label>Confirm password</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Register" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- FORGOT SECTION -->
        <div id="modal3" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello... </h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="{{ asset('assets/web/images/cancel.png') }}" alt="" />
                    </a>
                    <h4>Forgot password</h4>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name3" class="validate">
                                <label>User name or email id</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Submit" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="icon-float">
            <ul>
                <li><a href="#" class="sh">1k <br> Share</a> </li>
                <li><a href="#" class="fb1"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="gp1"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="tw1"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="li1"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="wa1"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="sh1"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> </li>
            </ul>
        </div>
    </section>

    <!-- Import jQuery before materialize.js-->
    <script src="{{ asset('js/web/main.min.js') }}"></script>
    <script src="{{ asset('js/web/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/web/materialize.min.js') }}"></script>
    <script src="{{ asset('js/web/custom.js') }}"></script>
    @yield('javascript')
</body>

</html>
