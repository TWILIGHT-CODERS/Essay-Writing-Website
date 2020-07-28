<!-- Main Menu -->
<nav class="navbar navbar-expand-lg">
    <div class="navbar-collapse">   
        <div class="nav-inner"> 
            <div class="menu-home-menu-container">
                <!-- Naviagiton -->
                <ul id="nav" class="nav main-menu menu navbar-nav">
                    <li>
                        <a href="/" class="active">Home</a>
                    </li>
                    <li class="icon-active"><a href="#">Our Work</a>
                        <ul class="sub-menu">
                            <!-- <li><a href="index.html">Homepage V1</a></li>
                            <li><a href="index2.html">Homepage V2</a></li> -->
                            <li><a href="/how-it-works" class="{{ request()->is('how-it-works') ? 'active' : '' }}">How It Works</a></li>
                            <li><a href="/faqs" class="{{ request()->is('faqs') ? 'active' : '' }}">FAQS</a></li>
                            <li><a href="/samples" class="{{ request()->is('samples') ? 'active' : '' }}">Samples</a></li>
                        </ul>
                    </li>
                    <li class="icon-active"><a href="#">Our Services</a>
                        <ul class="sub-menu">
                            <li><a href="/paraphrasing" class="{{ request()->is('paraphrasing') ? 'active' : '' }}">Paraphrasing & Writing</a></li>
                            <li><a href="/essay" class="{{ request()->is('essay') ? 'active' : '' }}">Essay Writing</a></li>
                            <li><a href="/assignment" class="{{ request()->is('assignment') ? 'active' : '' }}">Assignment Writing</a></li>
                            <li><a href="/grading" class="{{ request()->is('grading') ? 'active' : '' }}">Grading & Marking</a></li>
                            <li><a href="/resume" class="{{ request()->is('resume') ? 'active' : '' }}">Resume Writing</a></li>
                            <li><a href="/dissertation" class="{{ request()->is('dissertation') ? 'active' : '' }}">Dissertation Writing</a></li>
                            <li><a href="/proofreading" class="{{ request()->is('proofreading') ? 'active' : '' }}">Editing/Proofreading</a></li>
                            <li><a href="/problem-solving" class="{{ request()->is('problem-solving') ? 'active' : '' }}">Problem Solving</a></li>
                        </ul>                               
                    </li>
                    <li>
                        <a href="/reviews" class="{{ request()->is('reviews') ? 'active' : '' }}">Reviews</a>
                    </li>
                    <li>
                        <a href="/essays" class="{{ request()->is('essays') ? 'active' : '' }}">Essays</a>
                    </li>
                    <li>
                        <a href="/blog" class="{{ request()->is('blog') ? 'active' : '' }}">Blog</a>
                    </li>
                    <li>
                        <a href="/contact-us" class="{{ request()->is('contact-us') ? 'active' : '' }}">Contact us</a>
                    </li>
                </ul>
                <!--/ End Naviagiton -->
            </div>
        </div>
    </div>
</nav>
<!--/ End Main Menu --> 