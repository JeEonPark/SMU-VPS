<?php
    include "server_info.php";

    $server_num = $_GET["server_num"];
    $email = $_GET["email"];

    $sql = "delete from core_server_member where server_num='$server_num' and member_email='$email'";
    $result = mysqli_query($con, $sql);

    echo "
        <script>
            alert('Success!');
            location.href='../console_manage.php?num=$server_num';
        </script>
    ";

?>