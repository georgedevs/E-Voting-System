
<?php include ('session.php');?>
<?php include ('head.php');?>

<body>
    <div id="wrapper">

        
        <?php include ('side_bar.php');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Import From CSV Files</h3>

                    <div class="span6" id="form-login">
				<form class="form-horizontal well" action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<legend>Import CSV File</legend>
						<div class="control-group">
							
								<label>CSV :</label>
							
							<div class="controls">
								<input type="file" multiple name="filename" id="filename" class="input-large">
							</div>
						</div>
						<br/>	
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="submit" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
                </div>
				
				
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                               
		

		

								
								
								
								
								
                            </div>
                            
                            
                        </div>
                    
                    </div>
                    
              
            </div>
           
        </div>
        



    </div>
  

    <?php include ('script.php');?>

</body>

</html>

