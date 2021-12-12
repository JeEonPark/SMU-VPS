<?php
    include "server_info.php";

    $topic= $_POST["topic"];
    $write = $_POST["write"];
    $date = date("Y-m-d (H:i)");

    if($topic == ""){
        echo "
            <script>
                alert('Please enter Topic name!');
                history.go(-1);
            </script>
            ";
    } else if($write == ""){
        echo "
            <script>
                alert('Please write texts!');
                history.go(-1);
            </script>
            ";
    } else {

        $sql = "insert into notice (topic, words, auther, date, view) values('$topic', '$write', '$logined_username', '$date', 0)";
        $result = mysqli_query($con, $sql);

        mysqli_close($con);

        echo "
            <script>
                location.href='../notice.php';
            </script>
        ";
        
    }


?>