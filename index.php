<!--Header -->
<?php
include('inc/config.php');
include($docPath.'inc/header.php');
?>

        <div class="main-container">
            <section class="cover fullscreen image-slider slider-all-controls controls-inside parallax">
                <ul class="slides">
                	<li class="overlay image-bg">
                        <div class="background-image-holder">
                            <img alt="image" class="background-image" src="<?php echo $webPath;?>img/main1.jpg" />
                        </div>
                        <div class="container v-align-transform">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1 text-center">
                                    <h1 class="mb40 mb-xs-16 large">Welcome to Muffler & Go!</h1>
                                    <h4 class="uppercase mb16">Your Complete Auto Repair Solution</h4>
                                    <a style="margin-top:25px;" class="btn btn-lg btn-filled" href="<?php echo $webPath;?>services/">View Our Services</a>
                                </div>
                            </div>
                            <!--end of row-->
                        </div>
                        <!--end of container-->
                    </li>
                </ul>
            </section>
            <?php

            $currentDay = date("w");
            //echo $currentDay;
            $todaysHours = $db->prepare("SELECT * FROM hours WHERE day = '".$currentDay."'");
            $todaysHours->execute();

            $currentTime = date("H:i:s");

            //echo "time: ".$currentTime;



           $today = $todaysHours->fetch();
            //print_r($today);
           $closeTime = date("g:i a", strtotime($today['close']));

            if($currentTime > $today['open'] && $currentTime < $today['close']){
                $color = "#47b475";
                $status = "Open";
                $text = 'Until '.$closeTime.' Today';
            }
            else{
                $color = "#b40700";
                $status = "Closed";
                $text = "We Will Be Open Again Soon!";
            }

            ?>

            <section>
                <div class="container">
                    <div class="row v-align-children">
                        <div class="col-sm-5">
                            <h3>Need to have some work done?</h3>
                            <p class="lead mb40">
                                Here is our hours of operation:
                            </p>
                            <div class="overflow-hidden mb32 mb-xs-24">
                                <i class="ti-time icon icon-sm pull-left"></i>
                                <h6 class="uppercase mb0 inline-block p32">Mon - Fri: 8am to 6pm</h6>
                            </div>
                            <div class="overflow-hidden mb32 mb-xs-24">
                                <i class="ti-time icon icon-sm pull-left"></i>
                                <h6 class="uppercase mb0 inline-block p32">Saturday: 8am to 3pm</h6>
                            </div>
                            <div class="overflow-hidden mb32 mb-xs-24">
                                <i class="ti-close icon icon-sm pull-left"></i>
                                <h6 class="uppercase mb0 inline-block p32">Sunday: Closed</h6>
                            </div>

                            We are location here: <a href="//www.google.com/url?sa=D&amp;oi=plus&amp;q=https://www.google.com/maps/place/Muffler%2B%2526%2BGo/data%3D!4m2!3m1!1s0x882364f033bb5071:0x9322eedefb714540?gl%3DUS%26hl%3Den" target="_blank" class="d-s YKa" tabindex="0">1478 N Leroy St, Fenton, MI 48430</a>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="pricing-table pt-1 text-center emphasis" style="background-color: <?php echo $color;?>;">
                                <h5 class="uppercase">We're currently</h5>
                                <span class="price"><?php echo $status;?></span>
                                <p class="lead"><?php echo $text;?></p>
                                <a class="btn btn-white btn-lg" href="tel:+8106291066">Give Us a Call</a>
                                <p>
                                    OR -
                                    <a href="<?php echo $webPath.'contact/';?>">Send us a message</a>

                                </p>
                            </div>
                            <!--end of pricing table-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>

            <section class="bg-secondary">
                <div class="container">
                    <div class="row mb80 mb-xs-0">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h2>Fenton Auto Repair Done Right, The First Time.</h2>
                            <p>
                                We understand that time and money are two of the most important things in your life,
                                that is why it is our top priority to make sure you don't have to spend too much of
                                either of them when getting your vehicle repaired at our <strong>auto repair shop in Fenton, MI</strong>. We do this by leveraging the latest technology to
                                strategically diagnose vehicle issues correctly the first time, and by extending the low
                                prices we receive from our extensive supply network onto our customers.
                                <br /><br />
                                Let us show you why you should <a href="/why-us/">choose Muffler &amp; Go</a> for all your vehicle maintenance and repair needs!
                            </p>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row v-align-children">
                        <div class="col-md-7 col-sm-6 text-center mb-xs-24">

                                <div class="embed-video-container embed-responsive embed-responsive-16by9">
                                    <img src="<?php echo $webPath;?>img/homeshop.jpg">
                                </div>
                                <!--end of embed video container-->

                        </div>
                        <div class="col-md-4 col-md-offset-1 col-sm-5 col-sm-offset-1">
                            <h3>We say we're good, but what do others think?</h3>
                            <p>
                                According to what people are saying on Google, our customers are really happy with us. If you're curious about what it is like to work with us, take a look for yourself.
                            </p>
                            <a class="btn btn-lg" rel="nofollow" href="https://plus.google.com/101403984914767073452/about">View Google Reviews</a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section>
                <div class="container">
                    <div class="row mb64 mb-xs-24">
                        <div class="col-sm-12 col-md-10 col-md-offset-1 text-center">
                            <h3>Just for stopping by, here are some discounts</h3>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <div class="feature">
                                <div class="text-center">
                                    <i class="ti-heart icon-lg mb40 mb-xs-24 inline-block color-primary"></i>
                                    <h5 class="uppercase">Featured Discount - Customer Appreciation</h5>
                                </div>
                                <p>
                                    <span style="font-size: medium;"><strong>Get 10% off service - </strong></span>
                                    If you're looking for the right Repair Shop for you vehicles repairs, you've found the right one. Not only will you receive professional service but you will enjoy 10% off just for bringing it in.
                                </p>

                                <a class="btn btn-filled btn-lg" href="<?php echo $webPath;?>contact/?cc=10serv">Redeem Coupon</a>
                            </div>
                            <!--end of feature-->
                        </div>

                        <div class="col-sm-6 text-center">
                            <div class="feature">
                                <div class="text-center">
                                    <i class="ti-layout-grid2 icon-lg mb40 mb-xs-24 inline-block color-primary"></i>
                                    <h5 class="uppercase">Other Discounts</h5>
                                </div>
                                <p>
                                    We love our customers, that is why we are always finding way for our customers to save, because you're the most important thing to us. So if you're in the need of some service, you should check out our full list of discounts.
                                </p>
                                <a class="btn btn-filled btn-lg" href="<?php echo $webPath;?>discounts/">View All Discounts</a>
                            </div>
                            <!--end of feature-->
                        </div>

                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>

            <section class="bg-secondary">
                <div class="container">
                    <div class="row v-align-children">
                        <div class="col-md-7 col-sm-6 text-center mb-xs-24">

                            <div class="embed-video-container embed-responsive embed-responsive-16by9">
                                <img src="<?php echo $webPath;?>img/local-service.jpg">
                            </div>
                            <!--end of embed video container-->

                        </div>
                        <div class="col-md-4 col-md-offset-1 col-sm-5 col-sm-offset-1">
                            <h3>Local Service Area</h3>
                            <p>
                                We are proud to service local areas around Southeast Michigan, including:
                            </p>
                            <ul>
                                <li><a href="<?php echo $webPath;?>auto-repair-holly-mi/">Holly, MI</a></li>
                                <li><a href="<?php echo $webPath;?>auto-repair-fenton-mi/">Fenton, MI</a></li>
                                <li>Davisburg, MI</li>
                                <li>Grand Blanc, MI</li>
                                <li>Brandon, MI</li>
                                <li>Springfield, MI</li>
                                <li>Linden, MI</li>
                                <li>Flint, MI</li>
                            </ul>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>

<!-- Footer -->
            <?php include($docPath.'inc/footer.php');