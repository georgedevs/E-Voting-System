<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Add Candidate</center>
						</div>    
					</div>
				</h4>
			</div>
										
										
            <div class="modal-body">
				<form method = "post" enctype = "multipart/form-data">	
					<div class="form-groupp">
						<label>Position</label>
						<select class = "form-control" name = "position">
								<option selected disabled>Select Candidate Group</option>
								<option>Head Boy</option>
								<option>Head Girl</option>
								<option>Health Prefect</option>
								<option>Social Prefect</option>
								<option>Chapel Prefect</option>
								<option>Sport Prefect</option>
								<option>Labour Prefect</option>
								<option>Laboratory Prefect</option>
								<option>Library Prefect</option>
								<option>Dining Hall Prefect</option>
								<option>Time Keeper</option>
							</select>
					</div>
			
					<div class="form-groupp">
						<label>Firstname</label>
							<input class="form-control" type ="text" name = "firstname" placeholder="Please enter firstname" required="true">
					</div>
					<div class="form-groupp">
						<label>Lastname</label>
							<input class="form-control"  type = "text" name = "lastname" placeholder="Please enter lastname" required="true">
					</div>
											
					<div class="form-groupp">
						<label>Year_Level</label>
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
															
					<div class="form-groupp">
						<label>Gender</label>
							<select class = "form-control" name = "gender">
								<option></option>
								<option>Male</option>
								<option>Female</option>
							</select>
					</div>
											
											
					<div class="form-groupp">
                        <label>Image</label>
						<input type="file" name="image"required> <p>
                    </div> 
						<button name = "save" type="submit" class="btn btn-primary" style="margin-left:20px;background-color:rgba(70, 10, 20, 1); ">Save Data</button>
				</form>  
			</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal" style="color:white; background-color:#460a14;">Close</button> 
            </div>
										
										
										
										
			<?php 
				require_once 'dbcon.php';
				
				if (isset ($_POST ['save'])){
					$position=$_POST['position'];					
					$firstname=$_POST['firstname'];
					$lastname=$_POST['lastname'];
					$year_level=$_POST['year_level'];
					$gender=$_POST['gender'];
					$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
					$image_name= addslashes($_FILES['image']['name']);
					$image_size= getimagesize($_FILES['image']['tmp_name']);
		
					move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
					$location="upload/" . $_FILES["image"]["name"];
					
					
					$conn->query("INSERT INTO candidate(position,firstname,lastname,year_level,gender,img)values('$position','$firstname','$lastname','$year_level','$gender','$location')")or die($conn->error);
				}						
			?>					
        </div>
                                   

                                
	</div>
                               

								
</div>