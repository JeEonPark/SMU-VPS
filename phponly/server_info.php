<?php
    // SQL info
    $con = mysqli_connect("localhost", "root", "root", "smu_vps", 8889);

    //Login info
    session_start();
    if(isset($_SESSION["logined_email"])) {
        $logined_email = $_SESSION["logined_email"];
        $logined_username = $_SESSION["logined_username"];
        $logined_admin = $_SESSION["logined_admin"];
    } else {
        $logined_email = "";
    }
?>