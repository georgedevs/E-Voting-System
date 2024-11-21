
<?php include ('session.php');?>
<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <?php include ('side_bar.php');?>

        
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    
					
                </div>
				
				
				<?php include ('add_candidate_modal.php');?>
                
				
				
				<hr/>
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
							<?php
									require 'dbcon.php';
									
									$position = $_POST['position'];
									$sort = $position;
									$query = $conn->query("SELECT * FROM candidate WHERE position = '$sort'");
									$fetch = $query->fetch_array();
									{
										
										
								?>
					<div class="panel-heading">
							<center><?php echo $fetch ['position'];?>
								<?php }?>
								
					</div>  </center>  
									
												</div>
											</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<a href = "canvassing.php" id="back" class = "btn btn-warning" style="background-color:rgba(70, 10, 20, 1); color:white; margin-bottom:12px; border:5px solid #460a14;"  ><i class = "fa fa-refresh" style="color:white;"> </i> Back</a>
						<button onclick="window.print();" style = "margin-right:14px; margin-bottom:12px; background-color:rgba(70, 10, 20, 1);" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> Print</button>	
                            <div class="table-responsive">
							<table class="table table-striped table-bordered table-hover " style="border:10px solid #460a14;" >
					<thead >
						<td style = "width:300px; background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;" class = "alert alert-success">Candidate for Head Boy</td>
						<td style = "width:200px; background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;"class = "alert alert-success">Image</td>
						<td class = "alert alert-success" style="width:100px;  background-color:rgba(70, 10, 20, 1); color:white; font-size:16px;">Total</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		
		$position = $_POST['position'];
		$sort = $position;
		$query = $conn->query("SELECT * FROM candidate WHERE position = '$sort'");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname']; ?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:100px; height:100px;margin-left:110px; border-radius:200px;" >
						<td style = "width:20px; text-align:center;"><button style="height:100px; width:100px; margin-left:-10px; background-color:#460a14; font-size:25px; font-weight:bold; color:white; "disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	
			
                            </div>
                            
                            
                        </div>
                        
                    </div>
                    
              
            </div>
            
        </div>
        



    </div>
    

    <?php include ('script.php');?>

</body>

</html>

