<?php include ('sess.php');?>
<?php include ('head.php');?>

<body>

    <div id="wrapper">

      
              <?php include ('view_banner.php');?>
        <div id="page-wrapper">

    <heading class="menue-select">
            <center>
                <select onchange = "page(this.value)">
                <option disabled selected>Select Candidate Group</option>
                <option value = "candidates/hb.php">Head Boy</option>
                <option value = "candidates/hg.php">Head Girl</option>
                <option value = "candidates/hp.php">Health Prefect</option>
                <option value = "candidates/sp.php">Social Prefect</option>
                <option value = "candidates/cp.php">Chapel Prefect</option>
                <option value = "candidates/sprt.php">Sport Prefect</option>
                <option value = "candidates/lab.php">Labour Prefect</option>
                <option value = "candidates/lbt.php">Laboratory Prefect</option>
                <option value = "candidates/lib.php">Library Prefect</option>
                <option value = "candidates/din.php">Dining Hall Prefect</option>
                <option value = "candidates/tk.php">Time Keeper</option>
                </select>
            </center>

    </heading> 
        </div>
        

    </div>
    
    <?php    
        include ('footer.php');
        ?>

    <script>
    function page (src){
        window.location=src;
    }
    </script>

</body>

</html>

