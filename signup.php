<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/signup.css">
        <title>SMU VPS - Sign up</title>
        <?php
            include "phponly/server_info.php";
            if($logined_email != ""){
                echo "
                    <script>
                        alert('Please logout before sign up.');
                        history.go(-1);
                    </script>
                    ";
            }
        ?>


    </head>

    <body>
        <?php
            if($logined_email == "") {
        ?>
        <div class="signup-form-container">
            <div class="signup-main-logo">
                <a href="/index.php">
                    <img src="images/logo.png" width="50px">
                </a>
            </div>

            <h1>
                Sign up
            </h1>

            <h4>
                Join SMU VPS for free!
            </h4>

            <h5>
                Already have account? <a href="/signin.php">Sign in</a>
            </h5>

            <div style="height: 20px"></div>

            <div style="width: 100%;">
                <form name="signup-form" id="signup-form" method="POST" action="/phponly/signup_server.php">
                    <div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Email">
                        </div>
                        <div style="height: 20px"></div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" placeholder="Username">
                        </div>
                        <div style="height: 20px"></div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div style="height: 20px"></div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="confirmpassword" placeholder="Confirm Password">
                        </div>
                        <div style="height: 40px"></div>
                        <button class="signup-button">
                            Sign up
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <?php } ?>

    </body>

</html>