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
                <h3 class="page-header">Saved Election Results</h3>

                <?php
                $sql = "SELECT DISTINCT session_term FROM election_results";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        echo "<form method='post' action='view_results.php'>";
                        echo "<select name='session_term' class='form-control'>";
                        echo "<option>Select Session/Term</option>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['session_term'] . "'>" . $row['session_term'] . "</option>";
                        }
                        echo "</select>";
                        echo "<button type='submit' class='btn btn-success'>View Results</button>";
                        echo "</form>";
                    } else {
                        echo "<p>No saved results found.</p>";
                    }
                } else {
                    echo "Error: " . mysqli_error($conn);
                }

                mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
