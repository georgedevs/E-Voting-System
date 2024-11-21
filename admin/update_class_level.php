<?php
require 'dbcon.php'; // Ensure you have the database connection

// Fetch all students except Staff
$query = $conn->query("SELECT * FROM voters WHERE year_level != 'Staff'");

while($row = $query->fetch_array()){
    $voters_id = $row['voters_id'];
    $year_level = $row['year_level'];

    switch ($year_level) {
        case "JS1":
            $new_year_level = "JS2";
            break;
        case "JS2":
            $new_year_level = "JS3";
            break;
        case "JS3":
            $new_year_level = "SS1";
            break;
        case "SS1":
            $new_year_level = "SS2";
            break;
        case "SS2":
            $new_year_level = "SS3";
            break;
        case "SS3":
            $conn->query("DELETE FROM voters WHERE voters_id = '$voters_id'");
            continue 2; 
        default:
            $new_year_level = $year_level; // If somehow an unknown class level exists
            break;
    }

    // Update the year_level
    $conn->query("UPDATE voters SET year_level = '$new_year_level' WHERE voters_id = '$voters_id'");
}

// Once done, redirect back to the student voter list page
header("Location: voters.php"); 
?>
