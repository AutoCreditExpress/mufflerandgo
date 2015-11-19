<?php
/**
 * Created by PhpStorm.
 * User: brianslaght
 * Date: 8/20/15
 * Time: 9:53 PM
 */
?>
<footer class="footer-1 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <img alt="Logo" class="logo" src="<?php echo $webPath;?>img/logo-light.png" />
                <p>
                    1478 N Leroy St, Fenton, MI 48430 <br/>
                    (810) 629-1066
                </p>

            </div>
            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h6 class="title">Company</h6>
                    <hr>
                    <ul class="link-list recent-posts">
                        <li>
                            <a href="<?php echo $webPath;?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo $webPath;?>about/">About</a>
                        </li>
                        <li>
                            <a href="<?php echo $webPath;?>hours/">Hours</a>
                        </li>
                        <li>
                            <a href="<?php echo $webPath;?>contact/">Contact</a>
                        </li>
                    </ul>
                </div>
                <!--end of widget-->
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h6 class="title">Services</h6>
                    <hr>
                    <ul class="link-list recent-posts">
                        <li>
                            <a href="#]<?php echo $webPath;?>brakes/">Brakes</a>
                        </li>
                        <li>
                            <a href="<?php echo $webPath;?>frontend/">Front End</a>
                        </li>
                        <li>
                            <a href="<?php echo $webPath;?>battery/">Batteries</a>
                        </li>
                        <li>
                            <a href="<?php echo $webPath;?>tuneup">Tune Up</a>
                        </li>
                        <li>
                            <a href="<?php echo $webPath;?>oil-change/">Oil Changes</a>
                        </li>
                        <li>
                            <a href="<?php echo $webPath;?>services/">All Services</a>
                        </li>
                    </ul>
                </div>
                <!--end of widget-->
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h6 class="title">Other</h6>
                    <hr>
                    <ul class="link-list recent-posts">
                        <li>
                            <a href="<?php echo $webPath;?>discounts/">Discounts</a>
                        </li>
                        <!--<li>
                            <a href="#">Blog</a>
                        </li> -
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="#">Site Map</a>
                        </li> -->
                    </ul>
                </div>
                <!--end of widget-->
            </div>

        </div>
        <!--end of row-->
        <div class="row">
            <div class="col-sm-6">
                <span class="sub">&copy; Copyright 2015 - Muffler & Go</span>
            </div>
            <div class="col-sm-6 text-right">
                <!--<ul class="list-inline social-list">
                    <li>
                        <a href="#">
                            <i class="ti-twitter-alt"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ti-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ti-vimeo-alt"></i>
                        </a>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>
    <!--end of container-->
    <a class="btn btn-sm fade-half back-to-top inner-link" href="#top">Top</a>
</footer>
</div>
<div class="modal-strip bg-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 overflow-hidden">
                <i class="ti-announcement icon icon-sm pull-left color-primary"></i>
                <p class="mb0 pull-left"><strong>Foundry 1.6 Update</strong> We've added some awesome modal functionality, as well as these handy dismisable notifications!</p>
                <a class="btn btn-sm btn-filled mb0" href="elements-modals.html">See More</a>
            </div>
        </div><!--end of row-->
    </div><!--end of container-->
</div><!--end modal strip-->
<script src="<?php echo $webPath;?>js/jquery.min.js"></script>
<script src="<?php echo $webPath;?>js/bootstrap.min.js"></script>
<script src="<?php echo $webPath;?>js/flexslider.min.js"></script>
<script src="<?php echo $webPath;?>js/lightbox.min.js"></script>
<script src="<?php echo $webPath;?>js/masonry.min.js"></script>
<script src="<?php echo $webPath;?>js/twitterfetcher.min.js"></script>
<script src="<?php echo $webPath;?>js/spectragram.min.js"></script>
<script src="<?php echo $webPath;?>js/ytplayer.min.js"></script>
<script src="<?php echo $webPath;?>js/countdown.min.js"></script>
<script src="<?php echo $webPath;?>js/smooth-scroll.min.js"></script>
<script src="<?php echo $webPath;?>js/parallax.js"></script>
<script src="<?php echo $webPath;?>js/scripts.js"></script>
<script>
$(document).ready(function(){
	//.ti-menu
	$('.ti-menu').click(function(){
		var navStuff = '.nav-bar, .nav-bar .module-group, .nav-bar .module';
		if($('.nav-bar .module-group').css('overflow')!='visible'){
			$(navStuff).css('overflow','visible');		
		}else{
			$(navStuff).css('overflow','hidden');			
		}
	});
			//contact form
			$('#submitButton').click(function(){
			$.ajax({
                type: "POST",
                url: "../mail/mandrillMail.php",
                data: $('.form-email').serialize(),
                success: function (response) {
					if(response=='complete'){
						$('.form-email').hide();
						$('#contactResponse').html('<span style="color:green;border:1px solid green;padding:7px;">Mail has been sent!!</span>');
					}else{
						$('.form-email').hide();
						$('#contactResponse').html('<span style="color:red;border:1px solid red;padding:7px;">'+response+'</span>');
						setTimeout(function(){
							$('#contactResponse').html('');
							$('.form-email').show();	
						},3000);
					}
                },
            });
		});
	//.nav-bar .module-group right overflow-hidden:visible;
});
</script>
</body>
</html>
