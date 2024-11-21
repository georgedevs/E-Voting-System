
<?php include ('session.php');?>
<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <?php include ('side_bar.php');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Election Report</h3>
					
                </div>
						
					<br/>
                       <form method="post" action="sort.php">
			
			<select name="position" id="position" class = "form-control pull-left" style = "width:300px;margin-left:19px; ">
				<option></option>
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
			
			&nbsp;
			&nbsp;
			<button id ="sort" class = "btn btn-success" style="margin-left:-15px; height:35px; width:60px;">Sort</button>
			<button type="button" onclick="window.print();" style = "margin-right:14px; background-color:rgba(70, 10, 20, 1);" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> Print</button>
			<a href="excel.php"><button type="button" style = "margin-right:104px; background-color:rgba(70, 10, 20, 1);" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i>Export to Excel</button></a>
			
                	<br>
					<p>
</form>	
                        <div class="panel-body">
                            
						
			<table class="table table-striped table-bordered table-hover " style="border:10px solid #460a14;" >
					<thead >
						<td style = "width:300px; background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;" class = "alert alert-success">Candidate for Head Boy</td>
						<td style = "width:200px; background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;"class = "alert alert-success">Image</td>
						<td class = "alert alert-success" style="width:100px;  background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;">Total</td>
					
					</thead>
					<?php
		require 'dbcon.php';
			$query = $conn->query("SELECT * FROM candidate WHERE position = 'Head Boy'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td style="background-color:white;"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td style=" background-color:white;"><img src = "<?php echo $fetch ['img'];?>" style = "width:100px; height:100px;margin-left:110px; border-radius:200px; background-color:white;" >
						<td style = "width:20px; text-align:center; background-color:white;"><button style="height:100px; width:100px; margin-left:-10px; background-color:#460a14; font-size:25px; font-weight:bold; color:white; "disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	

			<table class="table table-striped table-bordered table-hover " style="border:10px solid #460a14;" >
					<thead >
						<td style = "width:300px; background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;" class = "alert alert-success">Candidate for Head Girl</td>
						<td style = "width:200px; background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;"class = "alert alert-success">Image</td>
						<td class = "alert alert-success" style="width:100px;  background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;">Total</td>
					
					</thead>
					<?php
		require 'dbcon.php';
			$query = $conn->query("SELECT * FROM candidate WHERE position = 'Head Girl'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td style="background-color:white;"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td style=" background-color:white;"><img src = "<?php echo $fetch ['img'];?>" style = "width:100px; height:100px;margin-left:110px; border-radius:200px; background-color:white;" >
						<td style = "width:20px; text-align:center; background-color:white;"><button style="height:100px; width:100px; margin-left:-10px; background-color:#460a14; font-size:25px; font-weight:bold; color:white; "disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	
			
				
			<table class="table table-striped table-bordered table-hover " style="border:10px solid #460a14;" >
					<thead>
						<td style = "width:300px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px; "class = "alert alert-success">Candidate for Health Prefect</td>
						<td style = "width:200px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success"style="width:100px;  background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;" >Total</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Health Prefect'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
						<tbody> 
						<td style="background-color:white;"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td style=" background-color:white;"><img src = "<?php echo $fetch ['img'];?>" style = "width:100px; height:100px;margin-left:110px; border-radius:200px; background-color:white;" >
						<td style = "width:20px; text-align:center; background-color:white;"><button style="height:100px; width:100px; margin-left:-10px; background-color:#460a14; font-size:25px; font-weight:bold; color:white; "disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
					
			</table>	
			
						
			<table class="table table-striped table-bordered table-hover " style="border:10px solid #460a14;" >
					<thead>
						<td style = "width:300px;   background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;"class = "alert alert-success">Candidate for Social Prefect</td>
						<td style = "width:200px;  background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success" style="width:100px;  background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;">Total</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Social Prefect'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
						<tbody> 
						<td style="background-color:white;"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td style=" background-color:white;"><img src = "<?php echo $fetch ['img'];?>" style = "width:100px; height:100px;margin-left:110px; border-radius:200px; background-color:white;" >
						<td style = "width:20px; text-align:center; background-color:white;"><button style="height:100px; width:100px; margin-left:-10px; background-color:#460a14; font-size:25px; font-weight:bold; color:white; "disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
					
			</table>		
							
			<table class="table table-striped table-bordered table-hover " style="border:10px solid #460a14;" >
					<thead>
						<td style = "width:300px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;"class = "alert alert-success">Candidate for Chapel Prefect</td>
						<td style = "width:200px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success" style="width:100px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;">Total</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Chapel Prefect'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
						<tbody> 
						<td style="background-color:white;"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td style=" background-color:white;"><img src = "<?php echo $fetch ['img'];?>" style = "width:100px; height:100px;margin-left:110px; border-radius:200px; background-color:white;" >
						<td style = "width:20px; text-align:center; background-color:white;"><button style="height:100px; width:100px; margin-left:-10px; background-color:#460a14; font-size:25px; font-weight:bold; color:white; "disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	
			
							
			<table class="table table-striped table-bordered table-hover " style="border:10px solid #460a14;" >
					<thead>
						<td style = "width:300px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;"class = "alert alert-success">Candidate for Sport Prefect</td>
						<td style = "width:200px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success" style="width:100px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;">Total</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Sport prefect'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td style="background-color:white;"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td style=" background-color:white;"><img src = "<?php echo $fetch ['img'];?>" style = "width:100px; height:100px;margin-left:110px; border-radius:200px; background-color:white;" >
						<td style = "width:20px; text-align:center; background-color:white;"><button style="height:100px; width:100px; margin-left:-10px; background-color:#460a14; font-size:25px; font-weight:bold; color:white; "disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
					
			</table>	
			
			
							
			<table class="table table-striped table-bordered table-hover " style="border:10px solid #460a14;" >
					<thead>
						<td style = "width:300px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;"class = "alert alert-success">Candidate for Laboratory Prefect</td>
						<td style = "width:200px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success" style="width:100px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;">Total</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Laboratory Prefect'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
						<tbody> 
						<td style="background-color:white;"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td style=" background-color:white;"><img src = "<?php echo $fetch ['img'];?>" style = "width:100px; height:100px;margin-left:110px; border-radius:200px; background-color:white;" >
						<td style = "width:20px; text-align:center; background-color:white;"><button style="height:100px; width:100px; margin-left:-10px; background-color:#460a14; font-size:25px; font-weight:bold; color:white; "disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	
			
							
			<table class="table table-striped table-bordered table-hover " style="border:10px solid #460a14;" >
					<thead>
						<td style = "width:300px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;"class = "alert alert-success">Candidate for Labour Prefect</td>
						<td style = "width:200px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success " style="width:100px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;">Total</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Labour Prefect'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
						<tbody> 
						<td style="background-color:white;"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td style=" background-color:white;"><img src = "<?php echo $fetch ['img'];?>" style = "width:100px; height:100px;margin-left:110px; border-radius:200px; background-color:white;" >
						<td style = "width:20px; text-align:center; background-color:white;"><button style="height:100px; width:100px; margin-left:-10px; background-color:#460a14; font-size:25px; font-weight:bold; color:white; "disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
					
			</table>	
			
							
			<table class="table table-striped table-bordered table-hover " style="border:10px solid #460a14;" >
					<thead>
						<td style = "width:300px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;"class = "alert alert-success">Candidate for Library Prefect</td>
						<td style = "width:200px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success" style="width:100px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;">Total</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Library Prefect'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td style="background-color:white;"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td style=" background-color:white;"><img src = "<?php echo $fetch ['img'];?>" style = "width:100px; height:100px;margin-left:110px; border-radius:200px; background-color:white;" >
						<td style = "width:20px; text-align:center; background-color:white;"><button style="height:100px; width:100px; margin-left:-10px; background-color:#460a14; font-size:25px; font-weight:bold; color:white; "disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>

				
			<table class="table table-striped table-bordered table-hover " style="border:10px solid #460a14;" >
					<thead>
						<td style = "width:300px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;"class = "alert alert-success">Candidate for Dining Hall Prefect </td>
						<td style = "width:200px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success" style="width:100px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;">Total</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Dining Hall Prefect'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
						<tbody> 
						<td style="background-color:white;"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td style=" background-color:white;"><img src = "<?php echo $fetch ['img'];?>" style = "width:100px; height:100px;margin-left:110px; border-radius:200px; background-color:white;" >
						<td style = "width:20px; text-align:center; background-color:white;"><button style="height:100px; width:100px; margin-left:-10px; background-color:#460a14; font-size:25px; font-weight:bold; color:white; "disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>				
			
			
			

				
			<table class="table table-striped table-bordered table-hover " style="border:10px solid #460a14;" >
					<thead>
						<td style = "width:300px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;"class = "alert alert-success">Candidate for Time Keeper</td>
						<td style = "width:200px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success" style="width:100px;background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;"	>Total</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		$query = $conn->query("SELECT * FROM candidate WHERE position = 'Time Keeper'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
						<tbody> 
						<td style="background-color:white;"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td style=" background-color:white;"><img src = "<?php echo $fetch ['img'];?>" style = "width:100px; height:100px;margin-left:110px; border-radius:200px; background-color:white;" >
						<td style = "width:20px; text-align:center; background-color:white;"><button style="height:100px; width:100px; margin-left:-10px; background-color:#460a14; font-size:25px; font-weight:bold; color:white; "disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>				
			
			
			
			
			
			
			
			
			
							</div>				
		    </div>
                            
                        </div>
                      
                    </div>

              
            </div>

        </div>




    </div>


    <?php include ('script.php');?>

</body>

</html>

