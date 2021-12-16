<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/console_manage.css">
        <title>SMU VPS - Console</title>
    </head>

    <body>
        <?php include "header.php"; 

        $server_num = $_GET["num"];
        
        
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
                    <div class="price-core">Manage server</div>
                    <?php
                        $sql = "select * from core_server where num='$server_num'";
                        $result = mysqli_query($con, $sql);

                        $result_fetch = mysqli_fetch_array($result);
                        $server_num = $result_fetch["num"];
                        $server_name = $result_fetch["name"];
                        $server_status = $result_fetch["status"];
                        $server_region = $result_fetch["region"];
                        $server_type = $result_fetch["type"];
                        $server_owner = $result_fetch["owner"];
                    ?>
                    <!-- 제품-1 -->
                    <div class="products">
                        <div class="product-1">
                            <div class="price"><?= $server_name ?></span></div>
                            <?php if($server_status == 1){ ?>
                            <div class="status">Status : <span class="on">ON</span>
                                <a href="/phponly/turnonoff_server.php?num=<?= $server_num ?>&turn=off" class="get-started">Turn off</a>
                            </div>
                            <?php } else { ?>
                            <div class="status">Status : <span class="off">OFF</span>
                                <a href="/phponly/turnonoff_server.php?num=<?= $server_num ?>&turn=on" class="get-started">Turn on</a>
                            </div>
                            <?php } ?>
                            <div class="status">Server type : <?= $server_type ?></div>
                            <div class="status">Region : <?= $server_region ?></div>
                            <div class="status">Owner : <?= $server_owner ?></div>

                        </div>
                    </div>
                    <div style="width: 20px"></div>
                    <?php } ?>
                    <div class="price-core">Member list</div>
                    <div class="products">
                        <div class="product-1">
                            <?php if($server_owner === $logined_email) { ?>
                            <form name="addmember" action="/phponly/addmember_server.php?num=<?= $server_num ?>" method="POST">
                                <label>
                                    Add member email : 
                                    <input name="email" class="just-input" type=text></input>
                                    <a href="javascript:{}" onclick="document.addmember.submit();" class="get-started">Add</a>
                                </label>
                            </form>
                            <?php } ?>
                            <?php
                                $sql2="select * from core_server_member where server_num=$server_num";
                                $result2 = mysqli_query($con, $sql2);
                                $total_record2 = mysqli_num_rows($result2);

                                if($total_record2){

                                    $result_fetch2 = mysqli_fetch_array($result2);
                                    $email = $result_fetch2["member_email"];
                                    for($i=0; $i<$total_record2; $i++) {
                            ?>
                            <div class="member"><?= $email ?> <?php if($server_owner === $logined_email) { ?><a href="/phponly/delete_member_server.php?server_num=<?= $server_num ?>&email=<?= $email ?>" class="get-started">Delete</a><?php } ?></span>

                            <?php }
                            } else { ?>
                                <div class="member">No member</div>

                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>

    </body>
</html>