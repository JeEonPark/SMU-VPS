<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/console.css">
        <title>SMU VPS - Console</title>
    </head>

    <body>
        <?php include "header.php"; 

        
        
        if($logined_email == ""){
            echo "
                <script>
                    alert('Please sign in before to manage console.');
                    location.href='/signin.php';
                </script>
            "; }
            else {
        ?>
        
        <div class="first-discription">
        </div>

        <div class="second-discription">
            <div class="price-box">
                <div class="price-core-products">
                    <div class="price-core">Server List</div>
                    <?php
                        $sql = "select * from core_server where owner='$logined_email'";
                        $result = mysqli_query($con, $sql);
	                    $total_record = mysqli_num_rows($result); //내가 owned 인 서버 갯수

                        $sql2 = "select * from core_server_member where member_email='$logined_email'";
                        $result2 = mysqli_query($con, $sql2);
                        $total_record2 = mysqli_num_rows($result2);

                        if($total_record + $total_record2 == 0){
                            echo '<div class="price-core">No server</div>';
                        }
                        

                        for($i=0; $i<$total_record; $i++) {
                            $result_fetch = mysqli_fetch_array($result);
                            $server_num = $result_fetch["num"];
                            $server_name = $result_fetch["name"];
                            $server_status = $result_fetch["status"];
                    ?>
                    <!-- 제품-1 -->
                    <div class="products">
                        <div class="product-1">
                            <div class="price"><?= $server_name ?></span></div>
                            <?php if($server_status == 1){ ?>
                            <div class="status">Status : <span class="on">ON</span></div>
                            <?php } else { ?>
                            <div class="status">Status : <span class="off">OFF</span></div>
                            <?php } ?>
                            <a href="/console_manage.php?num=<?= $server_num ?>" class="get-started">Manage</a>
                        </div>
                    </div>
                    <div style="width: 20px"></div>
                    <?php }
                        
                        
                        for($i=0; $i<$total_record2; $i++){
                            $result2_fetch = mysqli_fetch_array($result2);
                            $server_num2 = $result2_fetch["server_num"];
                            $sql3 = "select * from core_server where num='$server_num2'";
                            $result3 = mysqli_query($con, $sql3);
                            $result3_fetch = mysqli_fetch_array($result3);
                            $server_num3 = $result3_fetch["num"];
                            $server_name3 = $result3_fetch["name"];
                            $server_status3 = $result3_fetch["status"];
                            ?>
                    <!-- 제품-1 -->
                    <div class="products">
                        <div class="product-1">
                            <div class="price"><?= $server_name3 ?></span></div>
                            <?php if($server_status3 == 1){ ?>
                            <div class="status">Status : <span class="on">ON</span></div>
                            <?php } else { ?>
                            <div class="status">Status : <span class="off">OFF</span></div>
                            <?php } ?>
                            <a href="/console_manage.php?num=<?= $server_num3 ?>" class="get-started">Manage</a>
                        </div>
                    </div>
                    <div style="width: 20px"></div>
                    <?php


                        }
                    
                    ?>
                    
                    
                    <?php } ?>

                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>

    </body>
</html>