<?php
include('dbcon.php');
include('session.php');
include('head.php');
?>

<body>
    <?php include('side_bar.php'); ?>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h1 class="page-header">Election Analysis</h1>
                            <a href="javascript:history.back()" class="btn btn-primary" style="background-color: rgba(70, 10, 20, 1); border-color: rgba(70, 10, 20, 1); color:white;">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </div>

                        <?php
                        if (isset($_POST['position']) && !empty($_POST['position'])) {
                            $selectedPosition = mysqli_real_escape_string($conn, $_POST['position']);

                            // Query for votes by year level
                            $sqlYearLevel = "SELECT votes.candidate_id, CONCAT(candidate.firstname, ' ', candidate.lastname) AS candidate_name, voters.year_level AS voter_year_level, COUNT(*) AS vote_count
                                             FROM votes 
                                             JOIN voters ON votes.voters_id = voters.voters_id
                                             JOIN candidate ON votes.candidate_id = candidate.candidate_id
                                             WHERE candidate.position = '$selectedPosition'
                                             GROUP BY votes.candidate_id, voters.year_level";

                            $resultYearLevel = mysqli_query($conn, $sqlYearLevel);

                            // Query for votes by gender
                            $sqlGender = "SELECT votes.candidate_id, CONCAT(candidate.firstname, ' ', candidate.lastname) AS candidate_name, voters.gender AS voter_gender, COUNT(*) AS vote_count
                                          FROM votes 
                                          JOIN voters ON votes.voters_id = voters.voters_id
                                          JOIN candidate ON votes.candidate_id = candidate.candidate_id
                                          WHERE candidate.position = '$selectedPosition'
                                          GROUP BY votes.candidate_id, voters.gender";

                            $resultGender = mysqli_query($conn, $sqlGender);

                            $candidateVotesYearLevel = [];
                            $candidateVotesGender = [];
                            $yearLevels = ['JS1', 'JS2', 'JS3', 'SS1', 'SS2', 'SS3', 'Staff'];

                            // Process results for year level
                            if ($resultYearLevel && mysqli_num_rows($resultYearLevel) > 0) {
                                while ($row = mysqli_fetch_assoc($resultYearLevel)) {
                                    $candidateId = $row['candidate_id'];
                                    $candidateName = $row['candidate_name'];
                                    $voterYearLevel = $row['voter_year_level'];
                                    $voteCount = $row['vote_count'];

                                    if (!isset($candidateVotesYearLevel[$candidateId])) {
                                        $candidateVotesYearLevel[$candidateId] = [
                                            'candidate_id' => $candidateId,
                                            'candidate_name' => $candidateName,
                                            'votes' => array_fill_keys($yearLevels, 0)
                                        ];
                                    }

                                    $candidateVotesYearLevel[$candidateId]['votes'][$voterYearLevel] = $voteCount;
                                }

                                // Display year level data table
                                echo "<div class='card mb-4'>
                                        <div class='card-header'>
                                            <h3 class='mb-0'>Votes by Class for Candidates under $selectedPosition</h3>
                                        </div>
                                        <div class='card-body'>
                                            <div class='table-responsive'>
                                                <table class='table table-bordered table-hover'>
                                                    <thead class='thead-light'>
                                                        <tr>
                                                            <th>Candidate ID</th>
                                                            <th>Candidate Name</th>";
                                foreach ($yearLevels as $yearLevel) {
                                    echo "<th>$yearLevel Votes</th>";
                                }
                                echo "</tr>
                                    </thead>
                                    <tbody>";

                                foreach ($candidateVotesYearLevel as $candidateId => $votesData) {
                                    echo "<tr>
                                            <td>" . $votesData['candidate_id'] . "</td>
                                            <td>" . $votesData['candidate_name'] . "</td>";
                                    foreach ($yearLevels as $yearLevel) {
                                        echo "<td>" . $votesData['votes'][$yearLevel] . "</td>";
                                    }
                                    echo "</tr>";
                                }

                                echo "</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>";
                            } else {
                                echo "<div class='alert alert-info'>No votes found for candidates under $selectedPosition (Year Level).</div>";
                            }

                            // Process results for gender
                            if ($resultGender && mysqli_num_rows($resultGender) > 0) {
                                while ($row = mysqli_fetch_assoc($resultGender)) {
                                    $candidateId = $row['candidate_id'];
                                    $candidateName = $row['candidate_name'];
                                    $voterGender = $row['voter_gender'];
                                    $voteCount = $row['vote_count'];

                                    if (!isset($candidateVotesGender[$candidateId])) {
                                        $candidateVotesGender[$candidateId] = [
                                            'candidate_id' => $candidateId,
                                            'candidate_name' => $candidateName,
                                            'male_votes' => 0,
                                            'female_votes' => 0,
                                            'total_votes' => 0
                                        ];
                                    }

                                    $candidateVotesGender[$candidateId]['total_votes'] += $voteCount;
                                    if ($voterGender == 'Male') {
                                        $candidateVotesGender[$candidateId]['male_votes'] += $voteCount;
                                    } elseif ($voterGender == 'Female') {
                                        $candidateVotesGender[$candidateId]['female_votes'] += $voteCount;
                                    }
                                }
                                
                                // Display gender data table
                                echo "<div class='card mb-4'>
                                        <div class='card-header'>
                                            <h3 class='mb-0'>Votes by Gender for Candidates under $selectedPosition</h3>
                                        </div>
                                        <div class='card-body'>
                                            <div class='table-responsive'>
                                                <table class='table table-bordered table-hover'>
                                                    <thead class='thead-light'>
                                                        <tr>
                                                            <th>Candidate ID</th>
                                                            <th>Candidate Name</th>
                                                            <th>Male Votes</th>
                                                            <th>Female Votes</th>
                                                            <th>Male %</th>
                                                            <th>Female %</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>";

                                foreach ($candidateVotesGender as $candidateId => $votes) {
                                    $malePercentage = ($votes['male_votes'] / $votes['total_votes']) * 100;
                                    $femalePercentage = ($votes['female_votes'] / $votes['total_votes']) * 100;
                                    echo "<tr>
                                            <td>" . $votes['candidate_id'] . "</td>
                                            <td>" . $votes['candidate_name'] . "</td>
                                            <td>" . $votes['male_votes'] . "</td>
                                            <td>" . $votes['female_votes'] . "</td>
                                            <td>" . number_format($malePercentage, 2) . "%</td>
                                            <td>" . number_format($femalePercentage, 2) . "%</td>
                                        </tr>";
                                }

                                echo "</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>";
                            } else {
                                echo "<div class='alert alert-info'>No votes found for candidates under $selectedPosition (Gender).</div>";
                            }

                            mysqli_close($conn);
                        } else {
                            echo "<div class='alert alert-warning'>No position selected. Please go back and select a position.</div>";
                        }
                        ?>

                        <div id="charts" class="row"></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var chartDataYearLevel = <?php echo json_encode(array_values($candidateVotesYearLevel ?? [])); ?>;
            var yearLevels = <?php echo json_encode($yearLevels ?? []); ?>;
            var chartDataGender = <?php echo json_encode(array_values($candidateVotesGender ?? [])); ?>;

            var chartContainer = document.getElementById('charts');

            // Render Year Level Bar Charts
            chartDataYearLevel.forEach(function(data) {
                var container = document.createElement('div');
                container.className = 'col-md-6 mb-4';
                container.innerHTML = '<div class="card"><div class="card-body"><canvas id="chart-yearlevel-' + data.candidate_id + '"></canvas></div></div>';
                chartContainer.appendChild(container);

                var ctx = document.getElementById('chart-yearlevel-' + data.candidate_id).getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: yearLevels,
                        datasets: [{
                            label: 'Votes by Class',
                            data: Object.values(data.votes),
                            backgroundColor: ['#696969', '#780A14', '#13274F', '#8B4000', '#006400', '#8B8000', '#301934'],
                            borderColor: ['#696969', '#780A14', '#13274F', '#8B4000', '#006400', '#8B8000', '#301934'],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            title: {
                                display: true,
                                text: data.candidate_name + ' - Vote Distribution by Class'
                            }
                        }
                    }
                });
            });

            // Render Gender Pie Charts
            chartDataGender.forEach(function(data) {
                var container = document.createElement('div');
                container.className = 'col-md-6 mb-4';
                container.innerHTML = '<div class="card"><div class="card-body"><canvas id="chart-gender-' + data.candidate_id + '" style="max-width: 300px; max-height: 300px;"></canvas></div></div>';
                chartContainer.appendChild(container);

                var ctx = document.getElementById('chart-gender-' + data.candidate_id).getContext('2d');
                new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: ['Male Votes', 'Female Votes'],
                        datasets: [{
                            label: data.candidate_name,
                            data: [data.male_votes, data.female_votes],
                            backgroundColor: ['#696969', '#780A14'],
                            hoverOffset: 4
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            title: {
                                display: true,
                                text: data.candidate_name + ' - Gender Vote Distribution'
                            }
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>