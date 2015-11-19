<!--Header -->
<?php
include('inc/config.php');
include($docPath.'inc/header.php');
?>
        <div class="main-container">
        	<section class="image-bg parallax pt180 pb180 pt-xs-80 pb-xs-80">
            	<div class="background-image-holder">
					<img alt="image" class="background-image" src="<?php echo $webPath;?>img/brakes-main.jpg" />
				</div>
				
				<div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <h1>Brake Services</h1>
							<p class="lead mb48 mb-xs-32">
                                Our technicians know every part of your brake system<br/>
                                inside and out, so you can be sure that when you get work<br/>
                                done at Muffler & go its done right.
							</p>
                            <a class="btn btn-lg" href="<?php echo $webPath;?>contact/?sch=brakes">Schedule an appointment</a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="image-edge">
                <div class="col-md-6 col-sm-4 p0 col-md-push-6 col-sm-push-8">
                    <img alt="Screenshot" class="mb-xs-24" src="<?php echo $webPath;?>img/brakes.jpg">
                </div>
                <div class="container">
                    <div class="col-md-5 col-md-pull-0 col-sm-7 col-sm-pull-4 v-align-transform">
                        <h1 class="large mb40 mb-xs-16">With Brakes, We Do It All</h1>
                        <h6 class="uppercase mb16">Get 5 star brake service with reliable results</h6>
                        <p class="lead mb40">
                            No matter what your brake system needs, we got you covered. If you need brake work we would love you
                            have the opportunity to show you why our customers love us so much.
                        </p>
                        <a class="btn-lg btn" href="<?php echo $webPath;?>contact/?serv=brakes">See Available Brake Appointments</a>
                    </div>
                </div>
                <!--end of container-->
            </section>
            <section class="page-title page-title-3 bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h3 class="uppercase mb0">Are Your Brakes Bad?</h3>
                        </div>
                        <div class="text-center">
                            <h5>Know what signs to look for.</h5>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-push-3 text-center">
                            <div class="image-slider slider-paging-controls controls-outside">
                                <ul class="slides">
                                    <li class="mb32">
                                        <img alt="Oil" src="<?php echo $webPath;?>img/bad-brake.jpg" />
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-md-pull-6">
                            <div class="mt80 mt-xs-80 text-right text-left-xs">
                                <h6 class="uppercase bold mb16">A low or spongy pedal</h6>
                                <p>This could be a sign that there’s air in the hydraulic system</p>
                            </div>

                            <div class="mt80 mt-xs-80 text-right text-left-xs">
                                <h6 class="uppercase bold mb16">A red brake-warning light</h6>
                                <p>It is possible that this could indicate an imbalance in the system</p>
                            </div>

                            <div class="mt80 mt-xs-80 text-right text-left-xs">
                                <h6 class="uppercase bold mb16">An amber brake-warning light</h6>
                                <p>It is common for this to indicate a problem with the ABS system</p>
                            </div>

                            <div class="mt80 mt-xs-80 text-right text-left-xs">
                                <h6 class="uppercase bold mb16">Continuous squeals and grinding sounds</h6>
                                <p>These sounds may mean it’s time for new brake pads or shoes</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mt80 mt-xs-0">
                                <h6 class="uppercase bold mb16">Brake pad and rotor thickness</h6>
                                <p>worn pads or rotors that are too thin cannot dissipate the extreme heat produced during braking</p>
                            </div>

                            <div class="mt80 mt-xs-0">
                                <h6 class="uppercase bold mb16">Brake shoe and drum diameter</h6>
                                <p>worn shoes or drums not only dissipate less heat, they can cause greater brake pedal travel</p>
                            </div>

                            <div class="mt80 mt-xs-0">
                                <h6 class="uppercas e bold mb16">You may feel pulsation in the brake petal</h6>
                            </div>

                            <div class="mt80 mt-xs-0">
                                <h6 class="uppercase bold mb16">Your vehicle may steer or pull to one side when braking</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end of container-->
            </section>



            <section class="pt64 pb64 bg-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center" style="margin-bottom: 50px;">
                            <h2 class="mb8">Need Brake Work? Check For Openings</h2>
                            <a class="btn btn-filled btn-lg" style="background-color: red; border-color: red;" href="<?php echo $webPath;?>contact/?serv=brakes">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
<?php include($docPath.'inc/footer.php');