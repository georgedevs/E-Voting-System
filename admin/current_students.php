
<?php include ('session.php');?>
<?php include ('head.php');?>

<body>
    <div id="wrapper">

        <?php include ('side_bar.php');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Current Students</h3>
				<a href="download.php" class="btn btn-success btn-outline"><i class = "fa fa-arrow-down"></i> Import Students Data</a>
                <a href="add_student_id.php" class="btn btn-success btn-outline"><i class="fa fa-arrow-up"></i> Add Student ID</a>	
               
				<hr/>
                
                
                
				
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         
                                            <th>Student ID</th>
                                            <th>Names</th>
                                            <th>Year Registered</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php 
											require 'dbcon.php';
											
											$query = $conn->query("SELECT * FROM ids ORDER BY id_number DESC");
											while($row1 = $query->fetch_array()){
											$voters_id=$row1['id_number'];
										?>
                                      
											<tr>
												<td><?php echo $row1 ['id_number'];?></td>
												<td><?php echo $row1 ['names'];?></td>
												<td><?php echo $row1 ['started'];?></td>		
											</tr>
										
                                       <?php } ?>
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

