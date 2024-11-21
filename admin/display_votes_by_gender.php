<?php
include('dbcon.php');
include('session.php');
include('head.php');
?>

<body>
<?php include('side_bar.php'); ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Election Analysis</h3>
            </div>
            <br/>
            <form method="post" action="sorts.php">
                <select name="position" id="position" class="form-control pull-left" style="width:300px;margin-left:19px;" required>
                    <option value="">Select a position</option>
                    <option value="Head Boy">Head Boy</option>
                    <option value="Head Girl">Head Girl</option>
                    <option value="Health Prefect">Health Prefect</option>
                    <option value="Social Prefect">Social Prefect</option>
                    <option value="Chapel Prefect">Chapel Prefect</option>
                    <option value="Sport Prefect">Sport Prefect</option>
                    <option value="Labour Prefect">Labour Prefect</option>
                    <option value="Laboratory Prefect">Laboratory Prefect</option>
                    <option value="Library Prefect">Library Prefect</option>
                    <option value="Dining Hall Prefect">Dining Hall Prefect</option>
                    <option value="Time Keeper">Time Keeper</option>
                </select>
                &nbsp;
                &nbsp;
                <button type="submit" id="sort" class="btn btn-success" style="margin-left:-15px; height:35px; width:80px;">Sort</button>
                <br>
                <p></p>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        var position = document.getElementById('position').value;
        if (!position) {
            e.preventDefault();
            alert('Please select a position before submitting.');
        }
    });
});
</script>

</body>
</html>