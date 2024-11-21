
<?php include ('head.php');?>
		<body>

			<div id="wrapper">
				<?php    
				include ('index_banner.php');
				?>
				<!-- Page Content -->
				<div id="page-wrapper">
					<div class="row">
					
							<div class="form-panel">
							
								<div class="form-body"> 

								<form method = "post" enctype = "multipart/form-data">
									
										<div class="form-heading">
										<center>Voter Registration</center>
										</div>
													<div class="form-field">
														<label>Student ID</label><br/>
														<input class ="form-control" type = "text" name = "id_number" placeholder = "Student ID" required="true">
															
													</div>
													
													<div class="form-field">
														<label>First Name</label><br/>
															<input class="form-control" type ="text" name = "firstname" placeholder="First Name" required="true">
													</div>
													
													<div class="form-field">
														<label>Last Name</label><br/>
															<input class="form-control"  type = "text" name = "lastname" placeholder="Last Name" required="true">
													</div>

													<div class="form-field">
														<label>Gender</label> <br/>
															<select class = "form-control" name = "gender">
																<option></option>
																<option >Male</option>
																<option >Female</option>														
															</select>
													</div>

													<div class="form-field">											
														<label>Password</label><br/>
															<input class="form-control"  type = "password" name = "password" id = "pass" placeholder="Password" required="true"/>
													</div>
													<div class="form-field">											
														<label>Retype Password</label><br/>
															<input class="form-control"  type = "password" name = "password1" id = "pass" placeholder="Retype Password" required="true"/>
													</div>

													<div class="form-field">
														<label>Select Study Level</label> <br/>
															<select class = "form-control" name = "year_level">
																<option></option>
																<option>JS1</option>
																<option>JS2</option>
																<option>JS3</option>
																<option>SS1</option>
																<option>SS2</option>
																<option>SS3</option>
																<option>Staff</option>
															</select>
													</div>
														<p>		
														<p>			
														<button class="btn btn-lg btn-success btn-block" name="save" style="background-color:#780A14; width:28vw; border-color:#780A14; margin-bottom:0px; margin-right:100px;">Create My Account</button>
													<p>
													<P>
													 <a href="../login.php" style="color:transparent;"><button type="button" class="btn btn-lg btn-success btn-block" data-dismiss="modal" style="background-color:#780A14; border-color:#780A14; margin-bottom:0px; width:28vw; margin-right:100px;">Login</button></a>
												

												</div>
											
												
												</form>
										
									<?php //PHP script to insert signup data into database
										require 'signUpData.php';
										
									?>

								</div>
									
							</form>
							
							</div>
						</div>
					
					<!-- /.row -->
				</div>
				<!-- /#page-wrapper -->
				<?php 
				include ('footer.php');
				?>

			</div>
			<!-- /#wrapper -->
		
		</body>

		</html>

