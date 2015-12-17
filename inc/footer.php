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
                            <a href="<?php echo $webPath;?>why-us/">Why Us?</a>
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
                            <a href="<?php echo $webPath;?>brakes/">Brakes</a>
                        </li>
                        <li>
                            <a href="<?php echo $webPath;?>frontend/">Front End</a>
                        </li>
                        <li>
                            <a href="<?php echo $webPath;?>electrical-services/">Electrical Services</a>
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

                var name = $('#name').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var message = $('#message').val();

                if (name==''){
                    $('#contactResponse').html('Please input name');
                } else if (email==''){
                    $('#contactResponse').html('Please input email');
                } else if (phone==''){
                    $('#contactResponse').html('Please input phone');
                } else if (message==''){
                    $('#contactResponse').html('Please input message');
                } else {
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
                }


		});

    $('.theStar').click(function(){
        var starValue=$(this).val();
        $('#userRating').val(starValue);
        $('.theStarRating').modal('hide');
        $('#passedRating').val(starValue);
        $('.customerInfo').modal('show');
    });
    $('#submit-customer-info').click(function(){
        var starValue=$('#userRating').val();
        var userName=$('#userName').val();
        var userEmail=$('#userEmail').val();
        var userPhone=$('#userPhone').val();
        if(userName=='') {
            alert('Please enter a name');
        }else if(userEmail=='' || userEmail.indexOf('@')==-1){
            alert('Please enter a valid email address');
        }else{
            $('#customerInfo').hide();
            $('.modalLoading').show();
            console.log('test1');
            $.ajax({
                method: 'POST',
                url: "<?php echo $webPath;?>handlers/saveCustomerInfo.php",
                data: {userName: userName,userEmail: userEmail, userPhone: userPhone,userRating: starValue},
                success: function(data){
                    console.log('test2');
                    $('.modalLoading').hide();
                    $('#customerInfo').show();
                    $('.customerInfo').modal('hide');
                    var theData=JSON.parse(data);
                    if(theData.status=='complete'){
                        console.log('test3');
                        //return the id to save the message later
                        if(starValue<=6){
                            $('#passedId').val(theData.id);
                            $('.doBetter').modal('show');
                        }else{
                            $('#passedId').val(theData.id);
                            $('.chooseReview').modal('show');
                        }
                    }else{
                        alert('internal error occurred on review page - save customer info handler');
                    }
                }
            });
        }
    });
    $('#submit-do-better').click(function(){
        $('.userFields').hide();
        $('.modalLoading').show();
        var userEmail = $('#userEmail').val();
        $.ajax({
            method: 'GET',
            url: "<?php echo $webPath;?>handlers/reviewEmail.php?userEmail="+userEmail+"&type=notification",
            success: function(data){
                if(data=='complete'){
                    var passedId=$('#passedId').val();
                    var content = $('#doBetterContent').val();
                    $.ajax({
                        method: 'POST',
                        url: "<?php echo $webPath;?>handlers/saveDoBetterContent.php",
                        data: {passedId: passedId, doBetterContent: content},
                        success: function(data){
                            var theData=JSON.parse(data);
                            console.log(theData);
                            if(theData.status=='complete'){
                                $.ajax({
                                    method: 'POST',
                                    url: "<?php echo $webPath;?>handlers/reviewEmail.php?userEmail="+userEmail+"&type=weak",
                                    success: function(data){
                                        if(data=='complete'){
                                            $('.modalLoading').hide();
                                            $('.userFields').show();
                                        }else{
                                            alert('there was an internal error on the google review handler');
                                        }
                                    }
                                });
                                //ajax call to review email type=weak
                                $('.doBetter').modal('hide');
                                alert('Thank you for your submission');
                            }else{
                                alert('internal error occurred on review page - do better event handler');
                                $('.modalLoading').hide();
                                $('.userFields').show();
                                $(this).modal('hide');
                            }
                        }
                    });
                }else{
                    alert('there was an internal error on the google review handler');
                }
            }
        });

    });
    $('#submit-your-thoughts').click(function(){
        $('.userFields').hide();
        $('.modalLoading').show();
        var userEmail = $('#userEmail').val();
        $.ajax({
            method: 'GET',
            url: "<?php echo $webPath;?>handlers/reviewEmail.php?userEmail="+userEmail+"&type=notification",
            success: function(data){
                console.log(data);
                if(data=='complete'){
                    var passedId=$('#passedId').val();
                    var content = $('#yourThoughtsContent').val();
                    $.ajax({
                        method: 'POST',
                        url: "<?php echo $webPath;?>handlers/saveYourThoughtsContent.php",
                        data: {passedId: passedId, yourThoughtsContent: content},
                        success: function(data){
                            $('.modalLoading').hide();
                            $('.userFields').show();
                            var theData=JSON.parse(data);
                            console.log(theData);
                            if(theData.status=='complete'){
                                $('.yourThoughts').modal('hide');
                                alert('Thank you for your submission');
                            }else{
                                alert('internal error occurred on review page - your thoughts event handler');
                                $('.userFields').show();
                                $('.modalLoading').hide();
                                $(this).modal('hide');
                            }
                        }
                    });
                }else{
                    alert('there was an internal error on the notification handler');
                }
            }
        });
    });
    $('#otherReview').click(function(){
        $('.chooseReview').modal('hide');
        $('.yourThoughts').modal('show');
    });
    $('#googleReview').click(function(){
        var userEmail = $('#userEmail').val();
        $.ajax({
            method: 'GET',
            url: "<?php echo $webPath;?>handlers/reviewEmail.php?userEmail="+userEmail+"&type=google",
            success: function(data){
                if(data=='complete'){
                    $('.chooseReview').modal('hide');
                    $('.yourThoughts').modal('show');
                }else{
                    alert('there was an internal error on the google review handler');
                }
            }
        });
    });

});
</script>
</body>
</html>
