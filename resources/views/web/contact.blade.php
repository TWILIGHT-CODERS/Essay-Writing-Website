@extends('layouts.web.app')
@section('content')

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
                            <h3>Contact Us</h3>
                            <a href="index.html">Home</a> /
                            <!-- <a href="/contact">Contact Us</a> / -->
                            <a href="/contact" class="active">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END PAGEHEADING SECTION -->
    <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Contact <span> Us</span></h2>
                            <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                        </div>
                    </div>
                    <div class="pg-contact">
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1">
                            <h2>Educate <span>Master</span></h2>
                            <p>We Provide Outsourced Software Development Services To Over 50 Clients From 21 Countries.</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1"> <img src="img/contact/1.html" alt="">
                            <h4>Address</h4>
                            <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.
                                <br>Landmark : Next To Airport</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con3"> <img src="img/contact/2.html" alt="">
                            <h4>CONTACT INFO:</h4>
                            <p> <a href="tel://0099999999" class="contact-icon">Phone: 01 234874 965478</a>
                                <br> <a href="tel://0099999999" class="contact-icon">Mobile: 01 654874 965478</a>
                                <br> <a href="mailto:mytestmail@gmail.com" class="contact-icon">Email: info@company.com</a> </p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con4"> <img src="img/contact/3.html" alt="">
                            <h4>Website</h4>
                            <p> <a href="#">Website: www.mycompany.com</a>
                                <br> <a href="#">Facebook: www.facebook/my</a>
                                <br> <a href="#">Blog: www.blog.mycompany.com</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
     <!--SECTION END-->

    <section id="map">
        <div class="row contact-map">
            <div class="container">
                <div class="overlay-contact footer-part footer-part-form">
                    <div class="map-head">
                        <p>Send Us Now</p>
                        <h2>GetIn Touch</h2> <span class="footer-ser-re">Service Request Form</span> </div>
                    <!-- ENQUIRY FORM -->
                    <form id="contact_form" name="contact_form" action="http://rn53themes.net/themes/demo/education-master/send.php">
                        <ul>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f1" value="" name="f1" placeholder="Name" required=""> </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f2" value="" name="f2" placeholder="Phone" required=""> </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f3" value="" name="f3" placeholder="City" required=""> </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f4" value="" name="f4" placeholder="Country" required=""> </li>
                            <li class="col-md-12 col-sm-12 col-xs-12 contact-input-spac">
                                <textarea id="f5" name="f5" required=""></textarea>
                            </li>
                            <li class="col-md-6">
                                <input type="submit" value="SUBMIT"> </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('javascript')
@endsection