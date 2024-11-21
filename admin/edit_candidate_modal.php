
<?php
	if(!$bool){
?>

<div class="modal fade" id="edit_candidate<?php  echo $candidate_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">         
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <center>Edit Candidate</center>
                        </div>    
                    </div>
                </h4>
            </div>
            
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">    
                    <img src="<?php echo $row['img'] ?>" width="50" height="50" class="img-rounded">
                    <input type="hidden" name="candidate_id" value="<?php echo $row['candidate_id'] ?>">

                    <div class="form-group">
                        <label>Position</label>
                        <select class="form-control" name="position" required>
                            <option value="<?php echo $row['position'] ?>"><?php echo $row['position'] ?></option>
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
                
                    <div class="form-group">
                        <label>Firstname</label>
                        <input class="form-control" type="text" name="firstname" required value="<?php echo $row['firstname'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Lastname</label>
                        <input class="form-control" type="text" name="lastname" required value="<?php echo $row['lastname'] ?>">
                    </div>
                    
                    <div class="form-group">
                        <label>Year Level</label>
                        <select class="form-control" name="year_level" required>
                            <option value="<?php echo $row['year_level'] ?>"><?php echo $row['year_level'] ?></option>
                            <option>JS1</option>
                            <option>JS2</option>
                            <option>JS3</option>
                            <option>SS1</option>
                            <option>SS2</option>
                            <option>SS3</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control" name="gender" required>
                            <option value="<?php echo $row['gender'] ?>"><?php echo $row['gender'] ?></option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <button name="update" type="submit" class="btn btn-primary" style="background-color: rgba(70, 10, 20, 1); border-color: rgba(70, 10, 20, 1); color:white; margin-left:2px;">Save Data</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php
require 'dbcon.php';

if (isset($_POST['update'])) {
    $position = $_POST['position'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $year_level = $_POST['year_level'];
    $gender = $_POST['gender'];
    $candidate_id = $_POST['candidate_id'];

    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    $image_size = getimagesize($_FILES['image']['tmp_name']);
    move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
    $location = "upload/" . $_FILES["image"]["name"];

    $conn->query("UPDATE candidate SET position = '$position', firstname = '$firstname', lastname = '$lastname', year_level = '$year_level', gender = '$gender', img = '$location' WHERE candidate_id = '$candidate_id'") or die($conn->error);
    echo "<script> window.location='candidate.php' </script>";
}
?>
					
<?php
	}
?>