<?php
include("includes/header.html");
?>


		<!--************************************
				Home Banner Start				
		*************************************-->
		<div id="tg-homebanner" class="tg-homebanner tg-haslayout">
			<figure class="tg-bannerbg">
				<img src="images/banner/image_bg.jpg" alt="image description">
			</figure>
			<div class="tg-bannercontent">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<form class="tg-formtheme tg-formsearch" action="listing.php" method="POST">
								<div class="tg-sectionhead">
									<div class="tg-sectiontitle">
									<?php

include 'test_connection.php';


?>
										<h1>Find a Medical Help!</h1>
										
									</div>
								</div>
								<fieldset>
								<div class="tg-select">
								
									
										<select>

											<option value="">Select Country</option>
											<?php while($row = mysqli_fetch_array($result)){ ?>
 
<option value="<?php echo $row[CountryName];?>">  <?php echo $row['CountryName'];?>

</option>

<?php }?> 
										
                                          </select>
									</div>
									<div class="tg-select">
									<?php
									include 'test_connection.php';?>
										<select>
											<option value ="">City</option>
											<?php while($row = mysqli_fetch_array($resultCity)){ ?>
 
<option value="<?php echo $row[CountryCity];?>">  <?php echo $row['CountryCity'];?>

</option>

<?php }?> 
											
										</select>
									</div>
									<input type="text" name="category" class="form-control" placeholder="Specialities">
									<button type="submit" class="tg-btnformsearch"><i class="fa fa-search"></i></button>
								</fieldset>
								<div class="tg-searchbulder">
									
									<div id="tg-subcategories" class="tg-subcategories">
										<div id="doctorscategory" class="tg-tabcontent tg-active">
											<span class="tg-checkbox tg-subcategorycheckbox">
												<input type="checkbox" id="dentist" name="subcategory" value="Dentist">
												<label for="dentist">
													<span><img src="images/icons/icon-16.png" alt="image description"></span>
													<span>Dentist</span>
												</label>
											</span>
											<span class="tg-checkbox tg-subcategorycheckbox">
												<input type="checkbox" id="ent" name="subcategory" value="Ear-Nose-Throat (ENT)">
												<label for="ent">
													<span><img src="images/icons/icon-17.png" alt="image description"></span>
													<span>Ear-Nose-Throat (ENT)</span>
												</label>
											</span>
											<span class="tg-checkbox tg-subcategorycheckbox">
												<input type="checkbox" id="gastroenterologist" name="subcategory" value="Gastroenterologist">
												<label for="gastroenterologist">
													<span><img src="images/icons/icon-18.png" alt="image description"></span>
													<span>Gastroenterologist</span>
												</label>
											</span>
											<span class="tg-checkbox tg-subcategorycheckbox">
												<input type="checkbox" id="psychiatrist" name="subcategory" value="Psychiatrist">
												<label for="psychiatrist">
													<span><img src="images/icons/icon-19.png" alt="image description"></span>
													<span>Psychiatrist</span>
												</label>
											</span>
											<span class="tg-checkbox tg-subcategorycheckbox">
												<input type="checkbox" id="urologist" name="subcategory" value="Urologist">
												<label for="urologist">
													<span><img src="images/icons/icon-20.png" alt="image description"></span>
													<span>Urologist</span>
												</label>
											</span>
											<span class="tg-checkbox tg-subcategorycheckbox">
												<input type="checkbox" id="homeopath" name="subcategory" value="Homeopath">
												<label for="homeopath">
													<span><img src="images/icons/icon-21.png" alt="image description"></span>
													<span>Homeopath</span>
												</label>
											</span>
											<span class="tg-checkbox tg-subcategorycheckbox">
												<input type="checkbox" id="ophthalmologist" name="subcategory" value="Ophthalmologist">
												<label for="ophthalmologist">
													<span><img src="images/icons/icon-22.png" alt="image description"></span>
													<span>Ophthalmologist</span>
												</label>
											</span>
											<span class="tg-checkbox tg-subcategorycheckbox">
												<input type="checkbox" id="ayurveda" name="subcategory" value="Ayurveda">
												<label for="ayurveda">
													<span><img src="images/icons/icon-23.png" alt="image description"></span>
													<span>Ayurveda</span>
												</label>
											</span>
											<span class="tg-checkbox tg-subcategorycheckbox">
												<input type="checkbox" id="dermatologist" name="subcategory" value="Dermatologist">
												<label for="dermatologist">
													<span><img src="images/icons/icon-24.png" alt="image description"></span>
													<span>Dermatologist</span>
												</label>
											</span>
											<span class="tg-checkbox tg-subcategorycheckbox">
												<input type="checkbox" id="neurologist" name="subcategory" value="Neurologist">
												<label for="neurologist">
													<span><img src="images/icons/icon-25.png" alt="image description"></span>
													<span>Neurologist</span>
												</label>
											</span>
										</div>
										
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>


			
<?php
include('includes/footer.html');
?>