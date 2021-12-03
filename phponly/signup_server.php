<?php
    include "server_info.php";

    $email= $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $reg_date = date("Y-m-d (H:i)");



    // Checking email bool
    $check_email=filter_var($email, FILTER_VALIDATE_EMAIL);

    // Checking
    if($email == ""){
        echo "
            <script>
                alert('Please enter Email!');
                history.go(-1);
            </script>
            ";
    } else if ($username == "") {
        echo "
        <script>
            alert('Please enter Username!');
            history.go(-1);
        </script>
        ";
    } else if ($password == "") {
        echo "
        <script>
            alert('Please enter Password!');
            history.go(-1);
        </script>
        ";
    } else if ($confirmpassword == "") {
        echo "
        <script>
            alert('Please enter Confirm Password!');
            history.go(-1);
        </script>
        ";
    } else if ($password !== $confirmpassword) {
        echo "
        <script>
            alert('Confirm Password does not match!');
            history.go(-1);
        </script>
        ";
    } else if($check_email == false){
        echo "
            <script>
                alert('Please enter valid Email!');
                history.go(-1);
            </script>
            ";
    } else {
        $sql = "select email from members where email='$email'";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);
        
        if($num) {
            echo "
            <script>
                alert('Email already exist!');
                history.go(-1);
            </script>
            ";
        } else {

            $sql = "insert into members (email, username, password, reg_date, admin) values('$email', '$username', '$password', '$reg_date', 0)";
            $result = mysqli_query($con, $sql);

            mysqli_close($con);

            echo "
                <script>
                    alert('Signed up successfully! Please login!');
                    location.href='../signin.php';
                </script>
            ";
        }
    }


?>