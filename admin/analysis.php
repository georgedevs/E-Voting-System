<?php include ('session.php');?>
<?php include ('head.php');?>

<body>
    <div id="wrapper">

        <?php include ('side_bar.php');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12"></div>
                <hr/>

                <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading">
														Election Analysis
													</div>    
												</div>
											</h4>
                        </div>

                        <br/>
                       <form method="post" action="sorts.php">

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
            </div>

        </div>
    </div>
</body>
