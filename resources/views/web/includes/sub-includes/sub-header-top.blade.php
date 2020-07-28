<div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <!-- Top Contact -->
                            <div class="top-contact">
                                <div class="single-contact"><i class="fa fa-phone"></i>Phone: +(600) 125-4985-214</div> 
                                <div class="single-contact"><i class="fa fa-envelope-open"></i>Email: support@elitespaper.com</div>   
                                <div class="single-contact"><i class="fa fa-clock-o"></i>Opening: 08AM - 09PM</div> 
                            </div>
                            <!-- End Top Contact -->
                        </div>  
                        <div class="col-lg-4 col-12">
                            <div class="topbar-right">
                                <!-- Social Icons -->
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li>
                                        @guest
                                        <div class="button">
                                            <a href="/login" class="bizwheel-btn-signup">Sign In</a>
                                        </div>
                                        @else
                                        <div class="button">
                                            <a href="/dashboard" class="bizwheel-btn-signup">Dashboard</a>
                                        </div>
                                        @endguest
                                    </li>
                                </ul>                                                           
                                <div class="button">
                                    @guest
                                    <a href="/register" class="bizwheel-btn">Sign Up</a>
                                    @else
                                    <a class="bizwheel-btn" href="/logout" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                        @csrf
                                </form>
                                    @endguest
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>