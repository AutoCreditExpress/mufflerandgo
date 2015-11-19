<!--Header -->
<?php
include('inc/config.php');
include($docPath.'inc/header.php');
?>
        <div class="main-container">
        	<section class="image-bg parallax pt180 pb180 pt-xs-80 pb-xs-80">
            	<div class="background-image-holder">
					<img alt="image" class="background-image" src="<?php echo $webPath;?>img/battery-main.jpg" />
				</div>
				
				<div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <h1>Battery Services</h1>
							<p class="lead mb48 mb-xs-32">
                                If you've got a battery problem, we'll get you on<br/>
                                your way in no time with a high-quality battery<br/> guaranteed by the manufacturer for up to 72 months.
							</p>
                            <a class="btn btn-lg" href="<?php echo $webPath;?>contact/?serv=battery">View Battery Check Openings</a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="image-edge">
                <div class="col-md-6 col-sm-4 p0 col-md-push-6 col-sm-push-8">
                    <img alt="Screenshot" class="mb-xs-24" src="<?php echo $webPath;?>img/battery.jpg">
                </div>
                <div class="container">
                    <div class="col-md-5 col-md-pull-0 col-sm-7 col-sm-pull-4 v-align-transform">
                        <h1 class="large mb40 mb-xs-16">What To Watch For.</h1>
                        <p class="lead mb40">
                            Be sure the battery is properly secured. Vibration caused by an unsecured battery can affect battery life.
                        </p>
                        <p class="lead mb40">
                            The cables to the battery terminals must be clean and tightly connected. Build up of corrosive elements on the terminals can seriously weaken starting power. (Be sure the side terminals aren't over-tightened as well.)
                        </p>

                        <a class="btn-lg btn" href="<?php echo $webPath;?>contact/?serv=battery">See Available Battery Appointments</a>
                    </div>
                </div>
                <!--end of container-->
            </section>

            <section class="pt64 pb64 bg-secondary">
                <!-- Footer -->
<?php include($docPath.'inc/footer.php');