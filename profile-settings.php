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
								<figure class="tg-directpostimg"> <a href="#"><img src="images/thumbnails/img-20.jpg" alt="image description"></a>
									<figcaption> <a class="tg-usericon tg-iconfeatured" href="#"> <em class="tg-usericonholder"> <i class="fa fa-bolt"></i> <span>featured</span> </em> </a> <a class="tg-usericon tg-iconvarified" href="#"> <em class="tg-usericonholder"> <i class="fa fa-shield"></i> <span>varified</span> </em> </a> </figcaption>
								</figure>
								<div class="tg-directposthead">
									<h3><a href="#">Dr. Steve Northrop</a></h3>
									<div class="tg-subjects">MDS - Paedodontics &amp; Preventive Dentistry</div>
									<ul class="tg-metadata">
										<li><span class="tg-stars"><span></span></span></li>
										<li><a href="#"><i class="fa fa-thumbs-o-up"></i> 99% (1009 votes)</a></li>
									</ul>
								</div>
								<a class="tg-btn tg-btn-lg" href="#">Edit Profile</a> </div>
							<nav id="tg-dashboardnav" class="tg-dashboardnav">
								<ul>
									
									<li class="tg-warningmessage tg-active"> <a href="profile-settings.php"> <i class="fa fa-user"></i> <span>Profile Settings</span> </a> </li>
									<li class="tg-successmessage"> <a href="appointments.php"> <i class="fa fa-calendar-check-o"></i> <span>Appointments</span> </a> </li>
									<li> <a href="#"> <i class="fa fa-sign-out"></i> <span>Logout</span> </a> </li>
								</ul>
							</nav>
						</div>
					
					</div>
					<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right">
						<div class="tg-dashboardtabs">
							<ul class="tg-dashboardtabnav" role="tablist">
								<li role="presentation" class="active"> <a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Overview</a> </li>
								
							</ul>
							<div class="tab-content tg-dashboardtabcontent">
								<div role="tabpanel" class="tab-pane active" id="overview">
									
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Basic Information</h2>
										</div>
										<div class="tg-box tg-basicinformation">
											<div class="row tg-rowmargin">
												<div class="col-md-4 col-sm-12 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"> <span class="tg-select">
														<select>
															<option>Title</option>
															<option>Title</option>
															<option>Title</option>
														</select>
														</span> </div>
												</div>
												<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="firstname" class="form-control" placeholder="First Name">
													</div>
												</div>
												<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="lastname" class="form-control" placeholder="Last Name">
													</div>
												</div>
												<div class="col-sm-12 col-xs-12 tg-columnpadding">
													<input type="text" name="subtitle" class="form-control" placeholder="Sub Title (MDS - Paedodontics &amp; Preventive Dentistry)">
												</div>
											</div>
										</div>
									</div>
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Profile Photo</h2>
										</div>
										<div class="tg-box tg-profilephoto">
											<div class="row tg-rowmargin">
												<div class="col-md-8 col-sm-12 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="firstname" class="form-control" placeholder="File_name01.html">
													</div>
												</div>
												<div class="col-md-2 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<button class="tg-btn tg-btn-lg" type="submit">Brows</button>
													</div>
												</div>
												<div class="col-md-2 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<button class="tg-btn tg-btn-lg" type="submit">upload</button>
													</div>
												</div>
											</div>
										</div>
										<div class="tg-dashboardboxtitle">
											<h2>Uploaded Photos</h2>
										</div>
										<div class="tg-box tg-uploadedphotos">
											<ul class="tg-uploadedimggallery">
												<li>
													<div class="tg-galleryimg">
														<figure> <img src="images/thumbnails/img-01.jpg" alt="image description">
															<figcaption><i class="fa fa-close"></i></figcaption>
														</figure>
														<span class="tg-filename">img-01.jpg</span> </div>
												</li>
											
												
											</ul>
										</div>
									</div>
								
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Specializations</h2>
										</div>
										<div class="tg-box tg-specializations tg-uiicons">
											<div class="row tg-rowmargin">
												<div class="col-md-10 col-sm-9 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"> <span class="tg-select">
														<select>
															<option>Select/Type Specializations</option>
															<option>Select/Type Specializations</option>
															<option>Select/Type Specializations</option>
														</select>
														</span> </div>
												</div>
												<div class="col-md-2 col-sm-3 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<button class="tg-btn tg-btn-lg" type="submit">add now</button>
													</div>
												</div>
											</div>
											<ul class="tg-threecolumns tg-liststyledot">
												<li> <span>Consectetur adipisicing</span> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
												<li> <span>Eiusmod tempor iidunt</span> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
												<li> <span>Laborei dolore magna</span> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
											
											</ul>
										</div>
									</div>
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Experience</h2>
										</div>
										<div class="tg-box tg-experience tg-uiicons">
											<div class="row tg-rowmargin">
												<div class="col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="designation" class="form-control" placeholder="Designation">
													</div>
												</div>
												<div class="col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="companyname" class="form-control" placeholder="Company Name">
													</div>
												</div>
												<div class="col-sm-5 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="startingdate" class="form-control" placeholder="Starting Date">
													</div>
												</div>
												<div class="col-sm-5 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="endingdate" class="form-control" placeholder="Ending Date">
													</div>
												</div>
												<div class="col-sm-2 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<button class="tg-btn tg-btn-lg" type="submit">Add Now</button>
													</div>
												</div>
											</div>
											<ul class="tg-themelist tg-liststyledot tg-listdatastyle">
												<li> <span>Senior Consultant</span> <span>Altrincham Group Of Company</span> <span>June 2015 - Present</span> </li>
												
											</ul>
										</div>
									</div>
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Education</h2>
										</div>
										<div class="tg-box tg-education tg-uiicons">
											<div class="row tg-rowmargin">
												<div class="col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="designation" class="form-control" placeholder="Designation">
													</div>
												</div>
												<div class="col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="companyname" class="form-control" placeholder="Company Name">
													</div>
												</div>
												<div class="col-sm-5 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="startingdate" class="form-control" placeholder="Starting Date">
													</div>
												</div>
												<div class="col-sm-5 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="endingdate" class="form-control" placeholder="Ending Date">
													</div>
												</div>
												<div class="col-sm-2 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<button class="tg-btn tg-btn-lg" type="submit">Add Now</button>
													</div>
												</div>
											</div>
											<ul class="tg-themelist tg-liststyledot tg-listdatastyle">
												<li> <span>Doctor of Pharmacy</span> <span>Manchester University</span> <span>June 2012 - June 2013</span> </li>
											
											</ul>
										</div>
									</div>
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Languages</h2>
										</div>
										<div class="tg-box tg-languages tg-uiicons">
											<div class="row tg-rowmargin">
												<div class="col-md-10 col-sm-9 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"> <span class="tg-select">
														<select>
															<option>Select/Type Languages</option>
															<option>Select/Type Languages</option>
															<option>Select/Type Languages</option>
														</select>
														</span> </div>
												</div>
												<div class="col-md-2 col-sm-3 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<button class="tg-btn tg-btn-lg" type="submit">add now</button>
													</div>
												</div>
											</div>
											<ul class="tg-threecolumns tg-liststyledot">
												<li> <span>English</span> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
												<li> <span>Arabic</span> <i class="fa fa-exclamation-circle tg-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="write your note here"></i> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
												<li> <span>Russian</span> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
										
											</ul>
										</div>
									</div>
								
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Memberships</h2>
										</div>
										<div class="tg-box tg-memberships tg-uiicons">
											<div class="row tg-rowmargin">
												<div class="col-md-4 col-sm-12 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"> <span class="tg-select">
														<select>
															<option>Memberships Title</option>
															<option>Memberships Title</option>
															<option>Memberships Title</option>
														</select>
														</span> </div>
												</div>
												<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"> <span class="tg-inputicon tg-geolocationicon">
														<input type="text" name="Location" class="form-control" placeholder="Location">
														</span> </div>
												</div>
												<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"> <span class="tg-inputicon tg-calendaricon">
														<input type="text" name="date" class="form-control" placeholder="Date">
														</span> </div>
												</div>
												<div class="col-md-2 col-sm-3 col-xs-12 pull-right tg-columnpadding">
													<div class="form-group tg-formgroup">
														<button class="tg-btn tg-btn-lg" type="submit">add now</button>
													</div>
												</div>
											</div>
											<ul class="tg-themelist tg-liststyledot tg-listdatastyle">
												<li> <span> <em>Society of Oral Implantologist</em> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </span> <span>Manchester, united Kingdom</span> <span>June 2010</span> </li>
												
											</ul>
										</div>
									</div>
									
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Accepted Insurance</h2>
										</div>
										<div class="tg-box tg-acceptedinsurance tg-uiicons">
											<div class="row tg-rowmargin">
												<div class="col-md-10 col-sm-9 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"> <span class="tg-select">
														<select>
															<option>Select/Type Specializations</option>
															<option>Select/Type Specializations</option>
															<option>Select/Type Specializations</option>
														</select>
														</span> </div>
												</div>
												<div class="col-md-2 col-sm-3 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<button class="tg-btn tg-btn-lg" type="submit">add now</button>
													</div>
												</div>
											</div>
											<ul class="tg-threecolumns tg-liststyledot">
												<li> <span>Consectetur adipisicing</span> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
												<li> <span>Tempor incididunt </span> <i class="fa fa-exclamation-circle tg-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="write your note here"></i> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
												<li> <span>Commodo consequat</span> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
											
											</ul>
										</div>
									</div>
									
									<div class="tg-updateall"> <span class="tg-note">* Click <strong>update all changes</strong> to update latest added detail (s).</span>
										<button class="tg-btn" type="submit">update now</button>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="services">
									<div class="tg-dashboardbox tg-profilesettings">
										<div class="tg-dashboardboxtitle">
											<h2>Services</h2>
										</div>
										<div class="tg-box tg-dashboardservices tg-uiicons">
											<div class="row tg-rowmargin">
												<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"> <span class="tg-select">
														<select>
															<option>Select/Type Category</option>
															<option>Select/Type Category</option>
															<option>Select/Type Category</option>
														</select>
														</span> </div>
												</div>
												<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"> <span class="tg-select">
														<select>
															<option>Select/Type Sub Category</option>
															<option>Select/Type Sub Category</option>
															<option>Select/Type Sub Category</option>
														</select>
														</span> </div>
												</div>
												<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="enterfeeperpatient" class="form-control" placeholder="Enter Fee Per Patient">
													</div>
												</div>
												<div class="col-md-2 col-sm-6 col-xs-12 pull-right tg-columnpadding">
													<button class="tg-btn tg-btn-lg" type="submit">add now</button>
												</div>
											</div>
											<div class="tg-dashboardboxtitle tg-margin">
												<h2>Services</h2>
											</div>
											<div class="tg-dashboardboxtitle tg-feetitle tg-margin">
												<h2>Fee Per Patient</h2>
											</div>
											
										</div>
									</div>
									<div class="tg-updateall"> <span class="tg-note">* Click <strong>update all changes</strong> to update latest added detail (s).</span>
										<button class="tg-btn" type="submit">update now</button>
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