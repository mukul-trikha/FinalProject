<?php # Script 3.4 - index.php
$page_title = 'Welcome to this Site!';
include('includes/header.html');
?>

<div class="tg-pageinnerbanner tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/banner/img-02.jpg">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-12 col-xs-12">
                              <div class="tg-pageheadcontent">
                                 <div class="tg-pagetitle">
                                    <h1>Login / Register</h1>
                                 </div>
                                 <ol class="tg-breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="tg-active">Become A Member</li>
                                 </ol>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                   
                       <main id="tg-main" class="tg-main tg-haslayout">
                     <div class="container">
                        <div class="row">
                           <div id="tg-twocolumns" class="tg-twocolumns">
                              <div class="col-md-4 col-sm-5 col-xs-12">
                                 <aside id="tg-sidebar" class="tg-sidebar">
                                    <div class="tg-widget tg-widgetlogin">
                                       <div class="tg-widgetcontent">
                                          <div class="tg-widgettitle">
                                             <h3>Login Now</h3>
                                          </div>
                                          <form class="tg-themeform tg-formsignin">
                                             <fieldset>
                                                <div class="form-group tg-formgroup">
                                                   <input type="text" name="name" class="form-control" placeholder="Username">
                                                </div>
                                                <div class="form-group tg-formgroup">
                                                   <input type="password" name="password" class="form-control" placeholder="Username">
                                                </div>
                                                <div class="tg-kepploginpassword">
                                                   <div class="tg-checkbox">
                                                      <input type="checkbox" name="name" id="keeplogin">
                                                      <label for="keeplogin">Remember me on this computer</label>
                                                   </div>
                                                </div>
                                                <button class="tg-btn tg-btn-lg" type="submit">Login Now</button>
                                             </fieldset>
                                          </form>
                                       </div>
                                    </div>
                                 </aside>
                              </div>
                              <div class="col-md-6 col-sm-7 col-xs-12 fright">
                                 <div id="tg-content" class="tg-content">
                                    <div class="tg-signinsignup">
                                       <div class="tg-title">
                                          <h2>Register Now As</h2>
                                       </div>
                                       <div class="tg-dashboardtabs">
                                          <ul class="tg-dashboardtabnav" role="tablist">
                                             <li role="presentation" class="active">
                                                <a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Doctor</a>
                                             </li>
                                             <li role="presentation">
                                                <a href="#services" aria-controls="services" role="tab" data-toggle="tab">Patient</a>
                                             </li>
                                          </ul>
                                          <div class="tab-content tg-dashboardtabcontent">
                                             <div role="tabpanel" class="tab-pane active" id="overview">
                                                <div class="tg-searchbulder">
                                                </div>
                                                <div id="tg-subcategories" class="tg-subcategories">
                                                   <div id="doctorscategory" class="tg-tabcontent tg-active">
                                                      <form class="tg-formtheme tg-formsigninsignup">
                                                         <fieldset>
                                                            <div class="row tg-rowmargin">
                                                               <div class="col-md-12 col-sm-12 col-xs-12 tg-columnpadding">
                                                                  <div class="tg-widget tg-widgetlogin">
                                                                     <div class="tg-widgetcontent">
                                                                        
                                                      
                                                      <fieldset>
                                                      <div class="form-group tg-formgroup">
                                                      <input type="text" name="name" class="form-control" placeholder="Username / Email">
                                                      </div>
                                                      <div class="form-group tg-formgroup">
                                                      <input type="password" name="password" class="form-control" placeholder="Password">
                                                      </div>
                                                      <div class="form-group tg-formgroup">
                                                      <input type="password" name="password" class="form-control" placeholder="Confirm Password">
                                                      </div>
                                                          <a class="button tg-btn tg-btn-lg" href="profile-settings.php">Register</a>

                                                      
                                                      </fieldset>
                                                      
                                                      </div>
                                                      </div>
                                                      </div>
                                                      
                                                      </div>
                                                      </fieldset></form>
                                                      
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
                     </div>
                  </main>
                    		<?php
 include('includes/footer.html');
 ?>