<?php include('head.php'); ?>
<body>
    <?php include('index_banner.php'); ?>

    <div id="wrapper">
        <div class="container">
            <div class="row">
                <div class="menue"></div>
                
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel">
                        <br>
                        <div class="form-panel">
                            <center>
                                <i>Login As:</i>
                                <select onchange="page(this.value)">
                                    <option selected disabled>System Admin</option>
                                    <option value="../login.php">Student Voter</option> 
                                </select>
                                <p></p>
                            </center>
                            <form role="form" method="post" enctype="multipart/form-data" class="index-form">
                                <div class="form-heading">
                                    <center>Admin Login</center>
                                </div>
                                
                                <div class="form-field">
                                    <label for="login_id">Login ID:</label>
                                    <input class="form-control" placeholder="Enter Login ID" name="login_id" type="text" autofocus>
                                </div>

                                <br>
                                <div class="form-field">
                                    <label for="username">Username:</label>
                                    <input class="form-control" placeholder="Enter Username" name="username" type="text" autofocus>
                                </div>

                                <br>
                                <div class="form-field">
                                    <label for="password">Password:</label>
                                    <input class="form-control" placeholder="Enter Password" name="password" type="password">
                                </div>

                                <br><br>
                                <button class="btn btn-lg btn-success btn-block" name="login" style="background-color:#780A14; border-color:#780A14; margin-bottom:0px; width:700px;">Login</button>

                                &nbsp;

                                <?php include('login_query.php'); ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
    <?php include('script.php'); ?>

    <script type="text/javascript">
        function page(src) {
            window.location = src;
        }
    </script>
</body>
</html>
