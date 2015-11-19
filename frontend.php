<!--Header -->
<?php
include('inc/config.php');
include($docPath.'inc/header.php');
?>
        <div class="main-container">
        	<section class="image-bg parallax pt180 pb180 pt-xs-80 pb-xs-80">
            	<div class="background-image-holder">
					<img alt="image" class="background-image" src="<?php echo $webPath;?>img/fontend-main.jpg" />
				</div>
				
				<div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <h1>Front End Services</h1>
							<p class="lead mb48 mb-xs-32">
                                Whether you need wheel alignment, suspension work,<br/>
                                front end, shock absorbers or brake work, you can rest<br/> assure of dealing with true specialists.
							</p>
                            <a class="btn btn-lg" href="<?php echo $webPath;?>contact/?serv=frontend">View Openings</a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="image-edge">
                <div class="col-md-6 col-sm-4 p0 col-md-push-6 col-sm-push-8">
                    <img alt="Screenshot" class="mb-xs-24" src="<?php echo $webPath;?>img/frontend.jpg">
                </div>
                <div class="container">
                    <div class="col-md-5 col-md-pull-0 col-sm-7 col-sm-pull-4 v-align-transform">
                        <h2 class="large mb40 mb-xs-16">Front End Service Symptoms</h2>
                        <ul>
                            <li style="margin-top: 10px;"><strong>Pulling</strong> - you may notice that your vehicle is pulling toward the right or the left. This can be a sign that you need an alignment. Please also note that you can get a false sense that your alignment is off when driving on uneven roads or on the highway where there is major drainage grades. </li>
                            <li style="margin-top: 10px;"><strong>Uneven Wear</strong> - If you check the wear pattern of both the front and back tires and notice that there is a significant difference, this can be a sign of alignment issues.</li>
                        </ul>

                        <a class="btn-lg btn" href="<?php echo $webPath;?>contact/?serv=suspension">See Openings</a>
                    </div>
                </div>
                <!--end of container-->
            </section>
            
            <section class="pt64 pb64 bg-secondary">

                <!-- Footer -->
<?php include($docPath.'inc/footer.php');