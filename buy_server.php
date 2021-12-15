<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/buy_server.css">
        <title>SMU VPS - Pricing</title>
    </head>

    <body>
        <?php include "header.php"; 
        
        if($logined_email == ""){
            echo "
                <script>
                    alert('Please sign in before buy the server.');
                    location.href='/signin.php';
                </script>
            "; }
            else {
        ?>
        
        <div class="first-discription">
        </div>

        <div class="second-discription">
            <div class="price-box">
                <?php if($_GET["product"] == "standard") {
                    $servertype = "standard";?>
                <div class="price-core standard">Standard</div>
                <?php } ?>
                <?php if($_GET["product"] == "pro") {
                    $servertype = "pro";?>
                <div class="price-core pro">Pro</div>
                <?php } ?>
                <?php if($_GET["product"] == "growth") {
                    $servertype = "pro";?>
                <div class="price-core growth">Growth</div>
                <?php } ?>
                <div class="price-core-products">
                    <form name="server_info" method="POST" action="/phponly/buy_server_server.php?type=<?= $servertype ?>">
                        <div>
                            <label>Select region :</label>
                            <select name="region">
                                <option value="seoul">Seoul</option>
                                <option value="tokyo">Tokyo</option>
                                <option value="newyork">New York</option>
                                <option value="sanfrancisco">San Francisco</option>
                                <option value="Paris">Paris</option>
                            </select>
                        </div>
                        <div>
                            <label>Server name :</label>
                            <input name="name" class="just-input" type=text></input>
                        </div>
                    

                        <?php if($_GET["product"] == "standard") {?>
                        <!-- 제품-1 -->
                        <div class="products">
                            <div class="product-1">
                                <div class="price">$15<span style="font-size: 14px;"> / month</span></div>
                                <ul>
                                    <li>Private projects</li>
                                    <li>15GB storage</li>
                                    <li>Mid-range instance</li>
                                    <li>Faster free GPUs</li>
                                </ul>
                                <a href="javascript:{}" onclick="document.server_info.submit();" class="get-started">Create Server</a>
                            </div>
                        </div>
                        <div style="width: 20px"></div>
                        <?php } ?>

                        <?php if($_GET["product"] == "pro") {?>
                        <!-- 제품-2 -->
                        <div class="products">
                            <div class="product-2">
                                <div class="price">$40<span style="font-size: 14px;"> / month</span></div>
                                <ul>
                                    <li>Private projects</li>
                                    <li>50GB storage</li>
                                    <li>High-end instance</li>
                                    <li>Fastest free GPUs</li>
                                </ul>
                                <a href="javascript:{}" onclick="document.server_info.submit();" class="get-started">Create Server</a>
                            </div>
                        </div>
                        <div style="width: 20px"></div>
                        <?php } ?>

                        <?php if($_GET["product"] == "growth") {?>
                        <!-- 제품-3 -->
                        <div class="products">
                            <div class="product-3">
                                <div class="price">$120<span style="font-size: 14px;"> / month</span></div>
                                <ul>
                                    <li>Private projects</li>
                                    <li>200GB storage</li>
                                    <li>Extreme instance</li>
                                    <li>Dedicated GPUs</li>
                                </ul>
                                <a href="javascript:{}" onclick="document.server_info.submit();" class="get-started">Create Server</a>
                            </div>
                        </div>
                        <?php }} ?>
                    </form>


                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>

    </body>
</html>