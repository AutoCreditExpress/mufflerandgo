<!--Header -->
<?php
include('inc/config.php');
include($docPath.'inc/header.php');
?>

<div class="main-container">
        	<section class="image-bg parallax pt240 pb180 pt-xs-80 pb-xs-80">
            	<div class="background-image-holder">
					<img alt="image" class="background-image" src="<?php echo $webPath;?>img/transmission-main.jpg" />
				</div>

				<div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12" style="text-align: right;">
                            <h1>Transmission <br/>Service</h1>
							<p class="lead mb48 mb-xs-32">
								Muffler & Go is your source for the most reliable<br/>
                                Transmission repair, maintenance, diagnostics<br/> and replacement
                                in Michigan.
							</p>
                            <a class="btn btn-lg" href="<?php echo $webPath;?>contact/?sch=transmission">Schedule an appointment</a>
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
                                        <img alt="Oil" src="<?php echo $webPath;?>img/transmission.jpg" />
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-md-pull-6">
                            <div class="mt80 mt-xs-80 text-right text-left-xs">
                                <h5 class="uppercase bold mb16">Get a FREE Performance Check.</h5>
                                <p class="fade-1-4">
                                    Our comprehensive Performance Check consists of a fluid check, road test, pan examination and lift inspection/diagnosis.
                                </p>
                                <a class="btn" href="<?php echo $webPath;?>contact/?sch=transmission">Schedule FREE Check</a>
                            </div>

                            <div class="mt80 mt-xs-80 text-right text-left-xs">
                                <h5 class="uppercase bold mb16">Prevent Issues With Our Regular Maintenance Service.</h5>
                                <p class="fade-1-4">
                                    Our transmission maintenance helps keep your transmission fluid clean and running smoothly.
                                </p>
                                <a class="btn" href="<?php echo $webPath;?>contact/?sch=transmission">Transmission Maintenance</a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mt80 mt-xs-0">
                                <h5 class="uppercase bold mb16">Already Have a Problem? We Can Repair It.</h5>
                                <p class="fade-1-4">
                                    Get your transmission repaired back to OEM specifications without paying an arm and a leg.
                                </p>
                                <a class="btn" href="<?php echo $webPath;?>contact/?sch=transmission">Transmission Repair</a>
                            </div>

                            <div class="mt80 mt-xs-0">
                                <h5 class="uppercase bold mb16">Transmission Beyond Repair? Get It Replaced By Our Master Mechanics.</h5>
                                <p class="fade-1-4">
                                    Muffler & Go is proud to be one of the best places in Michigan to repair and replace transmission - so if you one replace, let us help!
                                </p>
                                <a class="btn" href="<?php echo $webPath;?>contact/?sch=transmission">Transmission Replacement</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end of container-->
            </section>



            <section class="image-bg overlay pt180 pb180 pt-xs-80 pb-xs-80">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="<?php echo $webPath;?>img/app9.jpg" />
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h2>Available Limited Warranties</h2>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>

            <section>
                <div class="container">
                    <div class="row v-align-children">
                        <div class="col-sm-4 col-md-offset-1 mb-xs-24">
                            <div class="mb40 mb-xs-24">
                                <h5 class="uppercase bold mb16">90 Day</h5>
                                <p class="fade-1-4">
                                    This warranty may cover a resealed/recondition transmission, standard-clutch assembly and torque converter (if applicable) against failure of materials and workmanship for 90 days from the date of delivery.
                                </p>
                            </div>
                            <div class="mb40 mb-xs-24">
                                <h5 class="uppercase bold mb16">6 Month Warranty/Unlimited Mileage</h5>
                                <p class="fade-1-4">
                                    This warranty covers repairs and/or replacement of the transmission, parts or repairs listed on the front of the repair order against material defects and workmanship for 6 months from the date of delivery.                                </p>
                            </div>
                            <div class="mb40 mb-xs-24">
                                <h5 class="uppercase bold mb16"> 12 Month/12,000 Mile Warranty</h5>
                                <p class="fade-1-4">
                                    This warranty covers repairs and/or replacement of the transmission, parts or repairs listed on the front of the repair order against material defects and workmanship for 1 year from the date of delivery or 12,000 miles, whichever occurs first.
                            </div>
                        </div>
                        <div class="col-sm-5 col-sm-6 col-sm-offset-1 text-center">
                            <img alt="Screenshot" src="<?php echo $webPath;?>img/trans-warranty.jpg" />
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>

            <section class="pt64 pb64 bg-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center" style="margin-bottom: 50px;">
                            <h2 class="mb8">Check For Appointment Openings</h2>
                            <a class="btn btn-filled btn-lg" style="background-color: red; border-color: red;" href="<?php echo $webPath;?>contact/?serv=transmission">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
<?php include($docPath.'inc/footer.php');