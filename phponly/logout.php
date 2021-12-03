<?php
    session_start();
    unset($_SESSION['logined_email']);
    unset($_SESSION['logined_username']);

    echo "
    <script> location.href='../index.php'; </script>
    ";
?>