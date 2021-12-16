<?php
    include "server_info.php";

    $server_num = $_GET["num"];
    $email = $_POST["email"];

    // Checking
    if($email == ""){
        echo "
            <script>
                alert('Please enter email!');
                history.go(-1);
            </script>
            ";
    } else if ($email === $logined_email){
        echo "
            <script>
                alert('You can not add yourself!');
                history.go(-1);
            </script>
        ";
    } else {
        $sql2 = "select email from members where email='$email'";
        $result2 = mysqli_query($con, $sql2);
        $num2 = mysqli_num_rows($result2);

        if($num2){


            $sql = "select member_email from core_server_member where server_num='$server_num' and member_email='$email'";
            $result = mysqli_query($con, $sql);
            $num = mysqli_num_rows($result);
            
            if($num) {
                echo "
                    <script>
                        alert('$email is already member!');
                        history.go(-1);
                    </script>
                ";
            } else {

                $sql = "insert into core_server_member (server_num, member_email) values('$server_num', '$email')";
                $result = mysqli_query($con, $sql);

                mysqli_close($con);

                echo "
                    <script>
                        alert('Success!');
                        location.href='../console_manage.php?num=$server_num';
                    </script>
                ";
            }
        } else {
            echo "
                    <script>
                        alert('$email does not exist!');
                        history.go(-1);
                    </script>
                ";
        }
    }


?>