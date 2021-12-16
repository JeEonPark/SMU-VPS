<?php

    include "server_info.php";

    $num = $_GET["num"];
    $turn = $_GET["turn"];

    if($turn == "on") {
        $sql = "update core_server set status=1 where num=$num";
        mysqli_query($con, $sql);
    } else {
        $sql = "update core_server set status=0 where num=$num";
        mysqli_query($con, $sql);
    }

    echo "
        <script>
            alert('Success');
            location.href='../console_manage.php?num=$num';
        </script>
    ";


?>