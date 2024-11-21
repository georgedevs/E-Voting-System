<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
            <div class="side-bar" 
            style="background-color:#780A14; font-size:25px; text-align:center; margin-top:-20px; padding-top:20px;">

                <p href="#" style="color:white; font-weight:bold; font-size:30px;">YHS Election Registeration</p>
                </a>
                <nav class="nav-menue">
    <ul>
        <li>
            <a href="../index.php" <?php echo ($current_page == "../index.php") ? 'class="active"' : ''; ?>>Home</a>
        </li>
        <li>
            <a href="index.php" <?php echo ($current_page == "index.php") ? 'class="active"' : ''; ?>>Register</a>
        </li>
        <li>
            <a href="../voters.php" <?php echo ($current_page == "../voters.php") ? 'class="active"' : ''; ?>>Voter List</a>
        </li>
    
    </ul>
</nav>
    </div>