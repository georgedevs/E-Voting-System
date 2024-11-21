<?php
require_once 'admin/dbcon.php';

if (isset($_POST['login'])) {
    $idno = $_POST['idno'];
    $password = $_POST['password'];

    // Query to check for active account that hasn't voted
    $query = "SELECT * FROM voters WHERE id_number = '$idno' AND password = '$password' AND account = 'active' AND status = 'Unvoted'";
    $result = $conn->query($query) or die(mysqli_error($conn));

    // Fetch the result row
    $row = $result->fetch_array();

    // Query to check if the user has already voted
    $votedQuery = "SELECT * FROM voters WHERE id_number = '$idno' AND password = '$password' AND status = 'Voted'";
    $voted = $conn->query($votedQuery)->num_rows;

    $numberOfRows = $result->num_rows;

    if ($numberOfRows > 0) {
        session_start();
        $_SESSION['voters_id'] = $row['voters_id'];
        header('location:vote.php');
        exit;
    }

    if ($voted == 1) {
        echo "<script type='text/javascript'>alert('Sorry, you already voted');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Your account is not activated');</script>";
    }
}
?>
