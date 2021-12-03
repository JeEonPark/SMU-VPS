<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/signin.css">
        <title>SMU VPS - Login</title>
        <?php
            include "phponly/server_info.php";
            if($logined_email != ""){
                echo "
                    <script>
                        alert('You already signed in.');
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
        <div class="login-form-container">
            <div class="login-main-logo">
                <a href="/index.php">
                    <img src="images/logo.png" width="50px">
                </a>
            </div>

            <h1>
                Sign in
            </h1>

            <h4>
                To access the web console
            </h4>

            <h5>
                No account? <a href="/signup.php">Sign up for free!</a>
            </h5>

            <div style="height: 20px"></div>

            <div style="width: 100%;">
                <form id="login-form" method="POST" action="/phponly/signin_server.php">
                    <div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="text" placeholder="Email">
                        </div>
                        <div style="height: 20px"></div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password" placeholder="Password">
                        </div>
                        <div style="height: 40px"></div>
                        <button class="login-button">
                            Log in
                        </button>
                    </div>
                </form>
            </div>



        </div>
        
        <?php } ?>

    </body>
</html>