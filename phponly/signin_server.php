<?php
    include "server_info.php";

    $email= $_POST["email"];
    $password = $_POST["password"];

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
    } else if ($password == "") {
        echo "
        <script>
            alert('Please enter Password!');
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
        
        if(!$num) {
            echo "
            <script>
                alert('Email does not exist!');
                history.go(-1);
            </script>
            ";
        } else {

            $sql = "select * from members where email='$email'";
            $result = mysqli_query($con, $sql);
            $num = mysqli_num_rows($result);

            if($num) { // email exist
                $userdata = mysqli_fetch_array($result);
                $db_password = $userdata["password"];
                $db_username = $userdata["username"];
                
                if($password != $db_password) {
                    echo "
                        <script>
                            alert('Incorrect password!');
                            history.go(-1);
                        </script>
                    ";
                } else {
                    $_SESSION["logined_email"] = $email;
                    $_SESSION["logined_username"] = $db_username;
                    echo "
                        <script>
                            location.href = '../index.php';
                        </script>
                    ";
                }

            } else {
                echo "
                    <script>
                        alert('Email does not exist!');
                        history.go(-1);
                    </script>
                ";
            }

            mysqli_close($con);

        }
    }


?>