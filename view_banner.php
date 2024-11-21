<style type="text/css">
nav ul li{
    display: inline-block;
    padding-left: 15px;
    padding-top:10px;
    padding-bottom: 5px;
}
nav ul li:hover{
    text-decoration: none;
}
a:hover{
    text-decoration: none;
}

@media  (min-width: 1920px) and (min-height: 1080px) {
    nav ul li{ 
    padding-left: 4vw;
    padding-top:2vh;
    padding-bottom: 2vh;
    }
}
</style>
<body>
            <div class="text-center text-success animateuse" style="background-color:rgba(120, 10, 20, 1);font-size:25px;text-align:center; margin-top:-10px; padding-top:20px;">
                <a style="color:white; font-weight:bold; font-size:38px;">YHS Elections</a>
              
       <?php
$current_page = basename($_SERVER['PHP_SELF']);  
?>
<nav class="nav-menue">
    <ul>
        <li><a href="index.php" <?php echo ($current_page == "index.php") ? 'class="active"' : ''; ?>>Home</a></li>
        <li><a href="register/index.php" <?php echo ($current_page == "index.php" && dirname($_SERVER['PHP_SELF']) == "/register") ? 'class="active"' : ''; ?>>Register</a></li>
        <li><a href="voters.php" <?php echo ($current_page == "voters.php") ? 'class="active"' : ''; ?>>Voter List</a></li>
        <li><a href="login.php" <?php echo ($current_page == "login.php") ? 'class="active"' : ''; ?>>Login</a></li>
    </ul>
</nav>

					
</div>
</body>
</html>

