<!--Header -->
<?php
include('inc/config.php');
include($docPath.'inc/header.php');
?>
        <div class="main-container">
        	<section class="image-bg parallax pt180 pb180 pt-xs-80 pb-xs-80">
            	<div class="background-image-holder">
					<img alt="image" class="background-image" src="<?php echo $webPath;?>img/car-alt-main.jpg" />
				</div>
				
				<div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <h1>Alternator Services</h1>
							<p class="lead mb48 mb-xs-32">
                                It is important that your alternator be working properly<br/>
                                because it keeps your battery charged. If you think<br/>
                                there might be something wrong with yours, we would<br/>
                                be more than happy to have are experts take a look.
							</p>
                            <a class="btn btn-lg" href="<?php echo $webPath;?>contact/?serv=alternator">View Alternator Openings</a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="image-edge" style="height: auto !important;">
                <div class="col-md-6 col-sm-4 p0 col-md-push-6 col-sm-push-8">
                    <img alt="Screenshot" class="mb-xs-24" src="<?php echo $webPath;?>img/car-alt.jpg">
                </div>
                <div class="container">
                    <div class="col-md-5 col-md-pull-0 col-sm-5 col-sm-pull-4 ">
                        <h1 class="large mb40 mb-xs-16">Problem Signs</h1>
                        <ul class="accordion accordion-1">
                            <li>
                                <div class="title">
                                    <span>Warning Light</span>
                                </div>
                                <div class="content">
                                    <p>
                                        Some vehicles have built in warnings that can indicate when something is not working properly. What that indicator is can vary from vehicle to vehicle, but typically it will be something that says "ALT" or "GEN" on the main dash. If you see one of this lights it is time to bring your car in.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <span>Dim Headlights</span>
                                </div>
                                <div class="content">
                                    <p>
                                        There are a few reasons that your headlights could dimmer than expected, but one of those reason is because your alternator is not producing enough power to fully supply your lights.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <span>Weak or Dead Battery</span>
                                </div>
                                <div class="content">
                                    <p>
                                        One of the primary functions of the alternator is to keep your battery changed, and if it not working right you may notice you have to jump your vehicle a lot or your car will just not start. It is possible for this to be a bad battery, but if this is happening, it would be a good idea to have one of Muffler and Go's alternator experts take a look.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <span>Weird Sounds</span>
                                </div>
                                <div class="content">
                                    <p>
                                        When the Alternator is running it has many moving parts inside of it, and sometimes these parts get worn and begin to make a grinding or winning noise.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <span>Weird Smells</span>
                                </div>
                                <div class="content">
                                    <p>
                                        Because the alternator is powered by a belt system, it is possible that those belts begin to smell because there is too much friction. This friction can be created because the belts are not turning freely or slipping.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <!--end of accordion-->




                        <a class="btn-lg btn" href="<?php echo $webPath;?>contact/?serv=alternator">See Available Appointments</a>
                    </div>
                    <div style="float: right; clear: both;">
                </div>
                <!--end of container-->
            </section>
            
            <section class="pt64 pb64 bg-secondary">
                <!-- Footer -->
<?php include($docPath.'inc/footer.php');