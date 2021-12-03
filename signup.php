<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/signup.css">
    <title>SMU VPS - Sign up</title>

    <script>
        function check_input() {
            if (!document.signup-form.email.value) {
                alert("아이디를 입력하세요!");
                document.signup-form.id.focus();
                return;
            }

            if (!document.signup-form.username.value) {
                alert("이름을 입력하세요!");
                document.signup-form.name.focus();
                return;
            }

            if (!document.signup-form.password.value) {
                alert("비밀번호를 입력하세요!");
                document.signup-form.pass.focus();
                return;
            }

            if (!document.signup-form.confirmpassword.value) {
                alert("비밀번호확인을 입력하세요!");
                document.signup-form.pass_confirm.focus();
                return;
            }

            if (document.signup-form.password.value != document.signup-form.confirmpassword.value) {
                alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
                document.signup-form.password.focus();
                document.signup-form.password.select();
                return;
            }

            document.signup-form.submit();
        }
    </script>

</head>

<body>
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
                        <input type="text" name="password" placeholder="Password">
                    </div>
                    <div style="height: 20px"></div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="text" name="confirmpassword" placeholder="Confirm Password">
                    </div>
                    <div style="height: 40px"></div>
                    <button class="signup-button">
                        Sign up
                    </button>
                </div>
            </form>
        </div>

    </div>

</body>

</html>