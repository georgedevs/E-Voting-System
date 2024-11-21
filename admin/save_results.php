<?php
include('dbcon.php');
include('session.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $session_term = $_POST['session_term'];
    $position = $_POST['position'];
    $candidateVotes = json_decode($_POST['candidateVotes'], true);

    foreach ($candidateVotes as $votes) {
        $candidate_id = $votes['candidate_id'];
        $candidate_name = $votes['candidate_name'];
        $male_votes = $votes['male_votes'];
        $female_votes = $votes['female_votes'];
        $total_votes = $votes['total_votes'];
        $male_percentage = ($male_votes / $total_votes) * 100;
        $female_percentage = ($female_votes / $total_votes) * 100;

        $sql = "INSERT INTO election_results (session_term, position, candidate_id, candidate_name, male_votes, female_votes, total_votes, male_percentage, female_percentage)
                VALUES ('$session_term', '$position', '$candidate_id', '$candidate_name', '$male_votes', '$female_votes', '$total_votes', '$male_percentage', '$female_percentage')";

        if (!mysqli_query($conn, $sql)) {
            echo "Error: " . mysqli_error($conn);
        }
    }

    // Clear current votes from the `votes` table
    $clearVotesSql = "DELETE FROM votes";
    if (!mysqli_query($conn, $clearVotesSql)) {
        echo "Error clearing votes: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: election_analysis.php");
    exit();
}
?>
