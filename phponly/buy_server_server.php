<?php
    include "server_info.php";

    $type= $_GET["type"];
    $region = $_POST["region"];
    $name = $_POST["name"];
    $owner = $logined_username;


    // Checking
    if($name == ""){
        echo "
            <script>
                alert('Please enter name!');
                history.go(-1);
            </script>
            ";
    } else {
        $sql = "select name from core_server where name='$name'";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);
        
        if($num) {
            echo "
            <script>
                alert('Name already exist!');
                history.go(-1);
            </script>
            ";
        } else {

            $sql = "insert into core_server (type, region, name, status, owner) values('$type', '$region', '$name', '1', '$owner')";
            $result = mysqli_query($con, $sql);

            mysqli_close($con);

            echo "
                <script>
                    alert('Server Created successfully!');
                    location.href='../signin.php';
                </script>
            ";
        }
    }


?>