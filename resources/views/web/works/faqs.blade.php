@extends('layouts.web.app')

@section('content')

<!-- Faqs -->
	<section class="faqs section-space">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12">
					<div class="faqs-main m-top-30">
						<div class="row">
							<div class="col-12">
								<div id="accordion" role="tablist">
									<!-- Single Faq -->
									<div class="single-faq">
										<div class="faq-heading" role="tab" id="faq1">
											<h4 class="faq-title">
												<a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												<i class="fa fa-pencil"></i>Is your service confidential?
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="faq1" data-parent="#accordion">
											<div class="faq-body">
												<p>Yes, Elites Paper guarantees non-disclosure of all personal information you submit through our website. For more details please check our Confidentiality Policy.</p>
											</div>
										</div>
									</div>
									<!--/ End Single Faq -->
									<!-- Single Faq -->
									<div class="single-faq">
										<div class="faq-heading" role="tab" id="faq2">
											<h4 class="faq-title">
												<a class="collapsed" data-toggle="collapse"  href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
												<i class="fa fa-pencil"></i> Who will be working on my paper?
												</a>
											</h4>
										</div>
										<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="faq2" data-parent="#accordion">
											<div class="faq-body">
												<p>A person with a Bachelor, Master or PhD degree<br> A person with a GPA of at least 3.0<br> A person who passed all our tests with a score over 80%<br> A person with sample of work that scored over 80 on grammarly.com<br> A person who applies for orders with a 100% confidence in its successful completion<br> A person with an excellent command of English, whether being an ENL or ESL writer</p>
											</div>
										</div>
									</div>
									<!--/ End Single Faq -->
									<!-- Single Faq -->
									<div class="single-faq">
										<div class="faq-heading" role="tab" id="faq3">
											<h4 class="faq-title">
												<a class="collapsed" data-toggle="collapse"  href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
												<i class="fa fa-pencil"></i>What if I am not satisfied with my paper?
												</a>
											</h4>
										</div>
										<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="faq3" data-parent="#accordion">
											<div class="faq-body">
												<p>In case you are not satisfied with the work done, our company guarantees up to 3 free revisions in accordance with our Revision Policy. If you find that revisions do not help, you can always change the writer simply by contacting the support team. Should the final product be not up to your standards, you can always ask the Manager to contact you and discuss the issue and possible solutions to your problem.</p>
											</div>
										</div>
									</div>
									<!--/ End Single Faq -->
									<!-- Single Faq -->
									<div class="single-faq">
										<div class="faq-heading" role="tab" id="faq4">
											<h4 class="faq-title">
												<a class="collapsed" data-toggle="collapse"  href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
												<i class="fa fa-pencil"></i>Is my paper plagiarism free?
												</a>
											</h4>
										</div>
										<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="faq4" data-parent="#accordion">
											<div class="faq-body">
												<p>Absolutely. Unlike our competitors who use cheap and ineffective plagiarism software, SpeedyPaper.com uses credible software to check your paper originality. We guarantee that your paper will pass TurnItIn and SafeAssign checks with a low percentage of similarity. In addition, our writers are trained to cite all the information properly to avoid indirect or unintentional plagiarism.</p>
											</div>
										</div>
									</div>
									<!--/ End Single Faq -->
									<!-- Single Faq -->
									<div class="single-faq">
										<div class="faq-heading" role="tab" id="faq5">
											<h4 class="faq-title">
												<a class="collapsed" data-toggle="collapse"  href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
												<i class="fa fa-pencil"></i>How do I receive my paper?
												</a>
											</h4>
										</div>
										<div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="faq5" data-parent="#accordion">
											<div class="faq-body">
												<p>After the writer completes the paper, you will receive a preview version in secured PDF format to see if any corrections are needed. In case you are satisfied with the product, you can approve the order and either download the paper directly from your control panel, or have it sent to your email in word.doc format.</p>
											</div>
										</div>
									</div>
									<!--/ End Single Faq -->
									<!-- Single Faq -->
									<div class="single-faq">
										<div class="faq-heading" role="tab" id="faq6">
											<h4 class="faq-title">
												<a class="collapsed" data-toggle="collapse"  href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
												<i class="fa fa-pencil"></i>Do you have a money back guarantee?
												</a>
											</h4>
										</div>
										<div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="faq6" data-parent="#accordion">
											<div class="faq-body">
												<p>Yes, our company guarantees partial and full refunds in cases defined by our Money Back Guarantee.</p>
											</div>
										</div>
									</div>
									<!--/ End Single Faq -->
									<!-- Single Faq -->
									<div class="single-faq">
										<div class="faq-heading" role="tab" id="faq7">
											<h4 class="faq-title">
												<a class="collapsed" data-toggle="collapse"  href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
												<i class="fa fa-pencil"></i>Will you save my paper to your database?
												</a>
											</h4>
										</div>
										<div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="faq7" data-parent="#accordion">
											<div class="faq-body">
												<p>All works delivered to our clients are kept in our system to ensure that all of them are plagiarism free. After approving the paper you become the sole owner of the original product.</p>
											</div>
										</div>
									</div>
									<!--/ End Single Faq -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-12">
					<img src="{{ asset('assets/web/img/faq.png') }}" alt="#">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
					<div class="section-title default text-center">
						<div class="section-top">
							<h1><span>Contact</span><b> Still No luck?</b></h1>
						</div>
						<div class="section-bottom">
							<div class="text">
								<p>Contact Us for any queries. Be sure we will respond to you via the email you provide below.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12">
					<!-- Contact Form -->
					<div class="contact-form-area faq-form m-top-30">
						<div class="form-inner">
							<div class="form-title">
								<h4>Get In Touch</h4>
								<p>Contact with us if you got any issue!</p>
							</div>
							<form class="form" action="#" method="post">
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-user"></i></div>
											<input type="text" name="user-name" placeholder="Full name">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-envelope"></i></div>
											<input type="email" name="email" placeholder="Type email">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-tag"></i></div>
											<input type="text" name="subject" placeholder="Type subject">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group textarea">
											<div class="icon"><i class="fa fa-pencil"></i></div>
											<textarea type="textarea" placeholder="Your message" rows="5"></textarea>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group button">
											<button type="submit" class="bizwheel-btn theme-2">Send Now</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!--/ End contact Form -->
				</div>
			</div>
		</div>
	</section>	
<!--/ End Faqs -->

@endsection

@section('javascript')
@endsection