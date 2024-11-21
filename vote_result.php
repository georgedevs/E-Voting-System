<?php 
// Include necessary files
include('head.php'); 
include('sess.php'); 
?>

<body>
<?php include 'side_bar.php'; ?>

<div id="row">
    <?php
    // Fetch the voter's gender and year level from the database using their user ID
    $voters_id = $_SESSION['voters_id'];
    $result = $conn->query("SELECT gender, year_level FROM voters WHERE voters_id='$voters_id'");
    $row = $result->fetch_assoc();
    $gender = $row['gender'];
    $year_level = $row['year_level'];
    $_SESSION['gender'] = $gender;
    $_SESSION['year_level'] = $year_level;

    if (isset($_POST['submit'])) {
        $keys = ['hb_id','hg_id' ,'hp_id', 'sp_id', 'sprt_id', 'cp_id', 'lib_id', 'lbt_id', 'lab_id', 'tk_id', 'din_id'];

        foreach ($keys as $key) {
            $_SESSION[$key] = isset($_POST[$key]) ? $_POST[$key] : "";
        }

        

    }
    ?>
    <div>
        <center>
            <div class="col-lg-8" style="margin-left:25%; margin-right:25%;">
                <?php
                $prefects = [
                    'hb_id' => 'Head Boy',
                    'hg_id' => 'Head Girl',
                    'hp_id' => 'Health Prefect',
                    'sp_id' => 'Social Prefect',
                    'sprt_id' => 'Sport Prefect',
                    'cp_id' => 'Chapel Prefect',
                    'lab_id' => 'Labour Prefect',
                    'lbt_id' => 'Laboratory Prefect',
                    'lib_id' => 'Library Prefect',
                    'din_id' => 'Dining Hall Prefect',
                    'tk_id' => 'Time Keeper'
                ];

                foreach ($prefects as $key => $title) {
                    echo "<div class='col-lg-8' style='margin-left:25%; margin-right:25%;'>
                            <div class='panel pane-primary' style='border: 10px solid #780A14; width:500px; margin-left:-31%;'>
                                <div class='panel-heading' style='background-color:#780A14; border-radius: 0;'><center>$title</center></div>
                                <br />";
                    if (!$_SESSION[$key]) {
                        // No candidate selected for this prefect
                    } else {
                        $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[$key]'")->fetch_array();
                        echo "<strong>" . $fetch['firstname'] . " " . $fetch['lastname'] . "</strong>
                            <img src='admin/" . $fetch['img'] . "' style='height:200px; width:200px; border-radius:10px; margin-bottom:10px;' />";
                    }
                    echo "</div>
                            </div>
                            <br />";
                }
                ?>
            </div>
        </center>
        <div class="modal-body" style="font-size:20px ;">
            <p><center>Are you sure you want to submit your Votes?</center></p>
        </div>
        <div class="modal-footer" style="margin-left:50px;">
        <center>
            <a href="submit_vote.php"><button type="submit"  style="background-color:#003C00; border:2px solid #003C00; width:60px;" class="btn btn-success"><i class="icon-check"></i>&nbsp;Yes</button></a>
            <a href="vote.php"><button class="btn btn-danger" style="background-color:#780A14;  border:2px solid #780A14; " aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Back</button></a>
        </center>
        </div>
        <!-- /.modal-content -->
        <!-- /.modal-dialog -->
    </div>

    <?php 
    include('script.php'); 
    include('footer.php'); 
    ?>

</div>
</body>
</html>
