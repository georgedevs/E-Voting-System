<?php include ('head.php'); ?>
<?php include ('sess.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <style>
        body {
            background-color: white;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .position-container {
            width: 100%;
            margin-bottom: 40px;
        }

        .panel {
            border: 10px solid #780A14;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .panel-heading {
            background-color: #780A14;
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 15px;
            border-radius: 0;
            font-size: 1.2em;
        }

        .panel-body {
            padding: 30px;
        }

        .candidate-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .candidate-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 2px solid #780A14;
            border-radius: 10px;
            padding: 20px;
            width: calc(50% - 15px);
            max-width: 300px;
            box-sizing: border-box;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .candidate-card img {
            border-radius: 6px;
            height: 200px;
            width: 200px;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .candidate-info {
            text-align: center;
            width: 100%;
        }

        .candidate-card:hover {
            background-color: #F1F1F1;
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .candidate-card.selected {
            background-color: #780A14;
            color: white;
            border-color: #780A14;
        }

        .btn-success.ballot {
            background-color: #780A14;
            border: none;
            color: white;
            font-size: 18px;
            cursor: pointer;
            padding: 15px 30px;
            border-radius: 5px;
            margin: 30px 0;
            transition: background-color 0.3s ease;
        }

        .btn-success.ballot:hover {
            background-color: #5C0810;
        }

        /* Specific layouts */
        .candidate-grid-1 {
            justify-content: center;
        }

        .candidate-grid-1 .candidate-card {
            width: 100%;
            max-width: 400px;
        }

        .candidate-grid-2 .candidate-card,
        .candidate-grid-3 .candidate-card,
        .candidate-grid-4 .candidate-card,
        .candidate-grid-5 .candidate-card,
        .candidate-grid-6 .candidate-card {
            width: calc(50% - 15px);
            max-width: 400px;
        }

        .candidate-grid-3,
        .candidate-grid-5 {
            flex-direction: column;
            align-items: center;
        }

        .candidate-grid-3 .top-row,
        .candidate-grid-5 .top-row,
        .candidate-grid-5 .middle-row {
            display: flex;
            justify-content: center;
            gap: 30px;
            width: 100%;
        }

        .candidate-grid-3 .bottom-row,
        .candidate-grid-5 .bottom-row {
            margin-top: 30px;
            display: flex;
            justify-content: center;
        }

        .candidate-grid-3 .bottom-row .candidate-card {
            justify-content: center;
            width: 400px;
            
        }

        .candidate-grid-4,
        .candidate-grid-6 {
            flex-direction: column;
            align-items: center;
        }

        .candidate-grid-4 .top-row,
        .candidate-grid-4 .bottom-row,
        .candidate-grid-6 .top-row,
        .candidate-grid-6 .middle-row,
        .candidate-grid-6 .bottom-row {
            display: flex;
            justify-content: center;
            gap: 30px;
            width: 100%;
            margin-bottom: 30px;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.candidate-card').forEach(function(card) {
                card.addEventListener('click', function() {
                    const positionContainer = card.closest('.position-container');
                    positionContainer.querySelectorAll('.candidate-card').forEach(function(c) {
                        c.classList.remove('selected');
                    });
                    card.classList.add('selected');

                    let hiddenInput = positionContainer.querySelector('input[type="hidden"]');
                    if (!hiddenInput) {
                        hiddenInput = document.createElement('input');
                        hiddenInput.type = 'hidden';
                        hiddenInput.name = card.dataset.position;
                        positionContainer.appendChild(hiddenInput);
                    }

                    hiddenInput.value = card.dataset.candidateId;
                });
            });
        });
    </script>
</head>

<body>
    <?php include 'side_bar.php'; ?>
    <div id="wrapper"></div>

    <form method="POST" action="vote_result.php">
        <div class="container">
            <?php
            $positions = [
                'Head Boy' => 'hb_id',
                'Head Girl' => 'hg_id',
                'Health Prefect' => 'hp_id',
                'Social Prefect' => 'sp_id',
                'Sport Prefect' => 'sprt_id',
                'Chapel Prefect' => 'cp_id',
                'Labour Prefect' => 'lab_id',
                'Laboratory Prefect' => 'lbt_id',
                'Library Prefect' => 'lib_id',
                'Dining Hall Prefect' => 'din_id',
                'Time Keeper' => 'tk_id'
            ];

            foreach ($positions as $position => $position_id) {
                $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = '$position'") or die(mysqli_errno());
                $count = $query->num_rows;
                ?>
                <div class="position-container">
                    <div class="panel pane-primary">
                        <div class="panel-heading"><?php echo $position; ?></div>
                        <div class="panel-body">
                            <div class="candidate-grid candidate-grid-<?php echo $count; ?>">
                                <?php 
                                $candidates = $query->fetch_all(MYSQLI_ASSOC);
                                switch ($count) {
                                    case 1:
                                        displayCandidate($candidates[0], $position_id);
                                        break;
                                    case 2:
                                        foreach ($candidates as $candidate) {
                                            displayCandidate($candidate, $position_id);
                                        }
                                        break;
                                    case 3:
                                        echo '<div class="top-row">';
                                        displayCandidate($candidates[0], $position_id);
                                        displayCandidate($candidates[1], $position_id);
                                        echo '</div><div class="bottom-row">';
                                        displayCandidate($candidates[2], $position_id);
                                        echo '</div>';
                                        break;
                                    case 4:
                                        echo '<div class="top-row">';
                                        displayCandidate($candidates[0], $position_id);
                                        displayCandidate($candidates[1], $position_id);
                                        echo '</div><div class="bottom-row">';
                                        displayCandidate($candidates[2], $position_id);
                                        displayCandidate($candidates[3], $position_id);
                                        echo '</div>';
                                        break;
                                    case 5:
                                        echo '<div class="top-row">';
                                        displayCandidate($candidates[0], $position_id);
                                        displayCandidate($candidates[1], $position_id);
                                        echo '</div><div class="middle-row">';
                                        displayCandidate($candidates[2], $position_id);
                                        displayCandidate($candidates[3], $position_id);
                                        echo '</div><div class="bottom-row">';
                                        displayCandidate($candidates[4], $position_id);
                                        echo '</div>';
                                        break;
                                    case 6:
                                        echo '<div class="top-row">';
                                        displayCandidate($candidates[0], $position_id);
                                        displayCandidate($candidates[1], $position_id);
                                        echo '</div><div class="middle-row">';
                                        displayCandidate($candidates[2], $position_id);
                                        displayCandidate($candidates[3], $position_id);
                                        echo '</div><div class="bottom-row">';
                                        displayCandidate($candidates[4], $position_id);
                                        displayCandidate($candidates[5], $position_id);
                                        echo '</div>';
                                        break;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <center><button class="btn btn-success ballot" type="submit" name="submit">Submit Ballot</button></center>
   

    </form>

    <?php include ('script.php'); ?>
    <?php include ('footer.php'); ?>
</body>
</html>

<?php
function displayCandidate($candidate, $position_id) {
    ?>
    <div class="candidate-card" data-candidate-id="<?php echo $candidate['candidate_id']; ?>" data-position="<?php echo $position_id; ?>">
        <img src="admin/<?php echo $candidate['img']; ?>" class="candidate-img" alt="<?php echo $candidate['firstname'] . ' ' . $candidate['lastname']; ?>">
        <div class="candidate-info">
            <p><strong><?php echo $candidate['firstname'] . " " . $candidate['lastname']; ?></strong></p>
            <p>Gender: <?php echo $candidate['gender']; ?></p>
            <p>Level: <?php echo $candidate['year_level']; ?></p>
        </div>
    </div>
    <?php
}
?>