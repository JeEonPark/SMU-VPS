<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/pricing.css">
        <title>SMU VPS - Pricing</title>
    </head>

    <body>
        <?php include "header.php"; ?>
        
        <div class="first-discription">
            <h4>Pricing</h4>
            <h1>Simple, flexible pricing</h1>
            <h5>Not sure where to start? Please contact to our <a href="/support.php">support team.</a></h5>
        </div>

        <div class="second-discription">
            <div class="price-box">
                <div class="price-server-title">Virtual servers</div>
                <div class="price-core">CORE</div>
                <div class="price-core-discription">CORE is a high-performance computing platform built for a range of interactive applications and web services.</div>
                <div class="price-core-products">

                    <!-- 제품-1 -->
                    <div class="products">
                        <div class="product-1">
                            <div class="standard">Standard</div>
                            <div class="price">$15<span style="font-size: 14px;"> / month</span></div>
                            <ul>
                                <li>Private projects</li>
                                <li>15GB storage</li>
                                <li>Mid-range instance</li>
                                <li>Faster free GPUs</li>
                            </ul>
                            <a href="/buy_server.php?product=standard" class="get-started">Get Started</a>
                        </div>
                    </div>
                    <div style="width: 20px"></div>

                    <!-- 제품-2 -->
                    <div class="products">
                        <div class="product-2">
                            <div class="pro">Pro</div>
                            <div class="price">$40<span style="font-size: 14px;"> / month</span></div>
                            <ul>
                                <li>Private projects</li>
                                <li>50GB storage</li>
                                <li>High-end instance</li>
                                <li>Fastest free GPUs</li>
                            </ul>
                            <a href="/buy_server.php?product=pro" class="get-started">Get Started</a>
                        </div>
                    </div>
                    <div style="width: 20px"></div>

                    <!-- 제품-3 -->
                    <div class="products">
                        <div class="product-3">
                            <div class="growth">Growth</div>
                            <div class="price">$120<span style="font-size: 14px;"> / month</span></div>
                            <ul>
                                <li>Private projects</li>
                                <li>200GB storage</li>
                                <li>Extreme instance</li>
                                <li>Dedicated GPUs</li>
                            </ul>
                            <a href="/buy_server.php?product=growth" class="get-started">Get Started</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>

    </body>
</html>