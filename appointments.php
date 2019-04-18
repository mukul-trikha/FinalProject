<?php
include("includes/header.html");
?>


<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div id="tg-content" class="tg-content tg-dashboard">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 pull-left">
							<div class="tg-widgetdashboard">
								<div class="tg-widgetprofile">
									<figure class="tg-directpostimg">
										<a href="#"><img src="images/thumbnails/img-20.jpg" alt="image description"></a>
										<figcaption>
											<a class="tg-usericon tg-iconfeatured" href="#">
												<em class="tg-usericonholder">
													<i class="fa fa-bolt"></i>
													<span>featured</span>
												</em>
											</a>
											<a class="tg-usericon tg-iconvarified" href="#">
												<em class="tg-usericonholder">
													<i class="fa fa-shield"></i>
													<span>varified</span>
												</em>
											</a>
										</figcaption>
									</figure>
									<div class="tg-directposthead">
										<h3><a href="#">Dr. Steve Northrop</a></h3>
										<div class="tg-subjects">MDS - Paedodontics &amp; Preventive Dentistry</div>
										<ul class="tg-metadata">
											<li><span class="tg-stars"><span></span></span></li>
											<li><a href="#"><i class="fa fa-thumbs-o-up"></i> 99% (1009 votes)</a></li>
										</ul>
									</div>
									<a class="tg-btn tg-btn-lg" href="#">Edit Profile</a>
								</div>
								<nav id="tg-dashboardnav" class="tg-dashboardnav">
									<ul>
										
										<li class="tg-warningmessage">
											<a href="profile-settings.php">
												<i class="fa fa-user"></i>
												<span>Profile Settings</span>
											</a>
										</li>
										
										<li class="tg-successmessage tg-active">
											<a href="appointments.php">
												<i class="fa fa-calendar-check-o"></i>
												<span>Appointments</span>
											</a>
										</li>
										
										<li>
											<a href="#">
												<i class="fa fa-sign-out"></i>
												<span>Logout</span>
											</a>
										</li>
									</ul>
								</nav>
							</div>
							
						</div>
						<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right">
							<div class="tg-dashboardappointments">
								<div class="tg-dashboardbox">
									<div class="tg-dashboardboxtitle">
										<h2>Your Appointments</h2>
									</div>
									<div id="tg-calendar" class="tg-calendar"></div>
									<div class="tg-dashboardinvoices tg-appointmentdetails">
										<div class="tg-tablescroll">
											<div class="tg-dashboardbox tg-appointmentdetailbox">
												<div class="tg-dashboardboxtitle">
													<h2>Appointments Of <span>Jan 11, 2017</span></h2>
												</div>
												<div class="tg-favoritlistingbox">
													<div class="tg-invoicestitle">
														<span>Title</span>
														<span class="tg-titleamount">Time</span>
														<span class="tg-titleaction">Action</span>
													</div>
													<ul class="tg-invoices">
														<li>
															<div class="tg-invoicesheading">
																<h3><a href="#">Reason For Visit Here</a></h3>
																<span>Appointment Type Here</span>
															</div>
															<div class="tg-amout">
																<em>15.00</em>
															</div>
															<div class="tg-btnaction">
																<a class="tg-btnview" href="#" data-toggle="modal" data-target="#tg-appointmentapprove"><i class="fa fa-check"></i></a>
																<a class="tg-btndelete" href="#" data-toggle="modal" data-target="#tg-appointmentreject"><i class="fa fa-minus"></i></a>
															</div>
														</li>
														<li>
															<div class="tg-invoicesheading">
																<h3><a href="#">Reason For Visit Here</a></h3>
																<span>Appointment Type Here</span>
															</div>
															<div class="tg-amout">
																<em>15.00</em>
															</div>
															<div class="tg-btnaction">
																<a class="tg-btnview" href="#" data-toggle="modal" data-target="#tg-appointmentapprove"><i class="fa fa-check"></i></a>
																<a class="tg-btndelete" href="#" data-toggle="modal" data-target="#tg-appointmentreject"><i class="fa fa-minus"></i></a>
															</div>
														</li>
														<li>
															<div class="tg-invoicesheading">
																<h3><a href="#">Reason For Visit Here</a></h3>
																<span>Appointment Type Here</span>
															</div>
															<div class="tg-amout">
																<em>10.00</em>
															</div>
															<div class="tg-btnaction">
																<a class="tg-btnview" href="#" data-toggle="modal" data-target="#tg-appointmentapprove"><i class="fa fa-check"></i></a>
																<a class="tg-btndelete" href="#" data-toggle="modal" data-target="#tg-appointmentreject"><i class="fa fa-minus"></i></a>
															</div>
														</li>
														<li>
															<div class="tg-invoicesheading">
																<h3><a href="#">Reason For Visit Here</a></h3>
																<span>Appointment Type Here</span>
															</div>
															<div class="tg-amout">
																<em>20.00</em>
															</div>
															<div class="tg-btnaction">
																<a class="tg-btnview" href="#" data-toggle="modal" data-target="#tg-appointmentapprove"><i class="fa fa-check"></i></a>
																<a class="tg-btndelete" href="#" data-toggle="modal" data-target="#tg-appointmentreject"><i class="fa fa-minus"></i></a>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

<?php
include('includes/footer.html');
?>