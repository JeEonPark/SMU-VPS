<?php
    include "phponly/server_info.php";
?>
<link rel="stylesheet" href="css/header.css">
<div class="navbar">
    <div class="logo">
        <a href="/index.php" id="logo">
            <img src="images/logo.png" width="50px">
        </a>
    </div>
    <div style="width: 20px"></div>
    <div class="navbar-items">
        <ul id="menu">
            <li><a href="#">Notice</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Console</a></li>
            <li><a href="#">Community</a></li>
            <li><a href="#">Support</a></li>
        </ul>
    </div>
    <?php
        if($logined_email == "") {
    ?>
    <div style="width: 300px"></div>
    <div class="navbar-login">
        <a href="/signin.php" class="signin-button">Sign in</a>
        <a href="/signup.php" class="signup-button">Sign up</a>
    </div>
    <?php } else { ?>
    <div style="width: 285px"></div>
    <div class="navbar-logined">
        <span>Hello, <?= $logined_username ?></span>
        <a href="phponly/logout.php" class="logout-button">Logout</a>
    </div>
    <?php } ?>

</div>