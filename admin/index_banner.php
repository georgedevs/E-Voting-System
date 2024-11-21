<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<div class="side-bar" 
            style="background-color:#780A14; font-size:25px; text-align:center; margin-top:0px; padding-top:0px; padding-bottom:0px;">

                <a style="color:white; font-weight:bold; font-size:38px;">YHS Voting System</a>
                </a>

                <nav class="nav-menue">
    <ul>
        <li>
            <a href="../index.php" <?php echo ($current_page == "login.php") ? 'class="active"' : ''; ?>>Home</a>
        </li>
        <li>
            <a href="../login.php" <?php echo ($current_page == "index.php") ? 'class="active"' : ''; ?>>Login</a>
        </li>
        <li>
            <a href="../voters.php" <?php echo ($current_page == "voters.php") ? 'class="active"' : ''; ?>>Voter List</a>
        </li>
    </ul>
</nav>

    </div>
					
</div>