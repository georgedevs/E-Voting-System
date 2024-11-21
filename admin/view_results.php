<?php
include('dbcon.php');
include('session.php');
include('head.php');
?>
<?php include('side_bar.php'); ?>

<body>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Election Results</h3>

                <?php
                if (isset($_POST['session_term']) && !empty($_POST['session_term'])) {
                    $session_term = $_POST['session_term'];

                    $sql = "SELECT * FROM election_results WHERE session_term = '$session_term'";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        if (mysqli_num_rows($result) > 0) {
                            echo "<h3>Results for $session_term:</h3>";
                            echo "<table border='1'>
                                    <tr>
                                        <th>Position</th>
                                        <th>Candidate ID</th>
                                        <th>Candidate Name</th>
                                        <th>Male Votes</th>
                                        <th>Female Votes</th>
                                        <th>Male %</th>
                                        <th>Female %</th>
                                    </tr>";

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['position'] . "</td>";
                                echo "<td>" . $row['candidate_id'] . "</td>";
                                echo "<td>" . $row['candidate_name'] . "</td>";
                                echo "<td>" . $row['male_votes'] . "</td>";
                                echo "<td>" . $row['female_votes'] . "</td>";
                                echo "<td>" . number_format($row['male_percentage'], 2) . "%</td>";
                                echo "<td>" . number_format($row['female_percentage'], 2) . "%</td>";
                                echo "</tr>";
                            }

                            echo "</table>";
                        } else {
                            echo "<p>No results found for $session_term.</p>";
                        }
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }

                    mysqli_close($conn);
                } else {
                    echo "<p>No session/term selected. Please go back and select a session/term.</p>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
