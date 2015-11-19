<!--Header -->
<?php
include('inc/config.php');
include($docPath . 'inc/header.php');

if ($_GET['sch'] == 'oil') {
    $service = 'Oil Change ';
} elseif ($_GET['sch'] == 'susp-asse') {
    $service = 'Suspension Assessment ';
} elseif ($_GET['sch'] == 'transmission') {
    $service = 'Transmission Service  ';
} elseif ($_GET['sch'] == 'brakes') {
    $service = 'Brake ';
}
?>
<div class="main-container">
    <section class="image-bg parallax pt180 pb180 pt-xs-80 pb-xs-80">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="<?php echo $webPath; ?>img/contact.jpg"/>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <?php if ($_GET['serv']): ?>
                        <h1>See Available Openings</h1>
                    <?php elseif ($_GET['sch']): ?>
                        <h1> Schedule a <?php echo $service; ?>Appointment </h1>
                    <?php elseif ($_GET['cc'] == '10serv'): ?>
                        <h1>Save 10% On A Service!</h1>
                        <?php elseif ($_GET['success'] == 1): ?>
                            <h1>Thank You! We will be in touch shortly.</h1>
                    <?php else: ?>
                        <h1>Contact Us</h1>
                    <?php endif; ?>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-5">
                    <?php if ($_GET['serv']): ?>
                        <h4 class="uppercase">We Need a Little More Information...</h4>
                        <p>
                            In order to let you know the best availability, we will need to know a little more about
                            what you need done. It only takes one minute.
                        </p>
                    <?php elseif ($_GET['cc'] == '10serv'): ?>
                        <h4 class="uppercase">We Just Need To Know What Services You Need...</h4>
                        <p>
                            Fill out the information to let us know what services you need. We will be back in contact
                            with you right away - you discount will be applied on your service.
                        </p>
                    <?php elseif ($_GET['sch'] == 'oil'): ?>
                        <h4 class="uppercase">We Need to know a little more information to set up an appointment...</h4>
                        <p>
                            Please let us know what is a good time for you to get your oil changed and we will be back
                            in contact with you right away to let you know if we have an opening on your requested date
                            and time.
                        </p>
                    <?php elseif ($_GET['sch'] == 'transmission'): ?>
                        <h4 class="uppercase">We Need to know a little more information to set up an appointment...</h4>
                        <p>
                            Please let us know what is a good time for you to set up your transmission service
                            appointment and we will be back in contact with you right away to let you know if we have an
                            opening on your requested date and time.
                        </p>
                    <?php elseif ($_GET['sch'] == 'brakes'): ?>
                        <h4 class="uppercase">We Need to know a little more information to set up an appointment...</h4>
                        <p>
                            Please let us know what is a good time for you to set up your brake appointment and we will
                            be back in contact with you right away to let you know if we have an opening on your
                            requested date and time.
                        </p>
                    <?php elseif ($_GET['sch'] == 'susp-asse'): ?>
                        <h4 class="uppercase">We Need to know a little more information to set up an appointment...</h4>
                        <p>
                            Please let us know what is a good time for you to get your suspension assessment and we will
                            be back in contact with you right away to let you know if we have an opening on your
                            requested date and time.
                        </p>
                    <?php else: ?>
                        <h4 class="uppercase">Get In Touch</h4>
                        <p>
                            We would love to hear from you! Fill out the information to the right and we will get back
                            to you right away.
                        </p>
                    <?php endif; ?>

                    <hr>
                    <p>
                        1478 N. Leroy St.<br/>
                        Fenton, MI, 48430, USA
                    </p>
                    <hr>
                    <p>
                        <strong>E:</strong> support@mufflerandgo.com
                        <br/>
                        <strong>P:</strong> (810) 629-1066
                        <br/>
                    </p>
                </div>
                <div class="col-sm-6 col-md-5 col-md-offset-1">
					<div id="contactResponse"></div>
                    <form class="form-email" action="<?php echo $webPath; ?>mail/mandrillMail.php" method="post"
                          data-success="Thanks for your submission, we will be in touch shortly."
                          data-error="Please fill all fields correctly.">
                        <input type="text" class="validate-required" name="name" placeholder="Your Name"/>
                        <input type="text" class="validate-required validate-email" name="email"
                               placeholder="Email Address"/>
                        <input type="text" class="validate-required validate-phone" name="phone" placeholder="Phone"/>
                        <?php if ($_GET['sch']): ?>
                            <label>Date and Time</label><br/>
                            <input type="datetime-local" class="validate-required validate-date" name="date"/>
                        <?php endif; ?>
                        <input type="hidden" name="coupon" value="<?php echo $_GET['cc']; ?>"/>
                        <?php if (!$_GET['sch']): ?>
                            <textarea class="validate-required" name="message" rows="4"
                                      placeholder=" <?php if ($_GET['cc'] == '10serv') {
                                          echo 'Services Needed...';
                                      } else if ($_GET['serv']) {
                                          echo 'Description of service needed';
                                      } else {
                                          echo 'Message';
                                      } ?>"></textarea>
                        <?php endif; ?>
                        <input id="submitButton" type="button" value="<?php if ($_GET['serv']) {
                            echo 'Check Availability';
                        } elseif ($_GET['sch']) {
                            echo 'Schedule Appointment';
                        } else {
                            echo 'Send Message';
                        }; ?>"/>
                    </form>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <!-- Footer -->
	<!--
    <script type="text/javascript">
        $('form.form-email, form.form-newsletter').submit(function (e) {
            jQuery.ajax({
                type: "POST",
                url: "mail/mandrillMail.php",
                data: thisForm.serialize(),
                success: function (response) {
                    // Swiftmailer always sends back a number representing numner of emails sent.
                    // If this is numeric (not Swift Mailer error text) AND greater than 0 then show success message.
                    $(thisForm).find('.form-loading').remove();

                    $(thisForm).find('input[type="submit"]').show();
                    if ($.isNumeric(response)) {
                        if (parseInt(response) > 0) {
                            // For some browsers, if empty 'successRedirect' is undefined; for others,
                            // 'successRedirect' is false.  Check for both.
                            successRedirect = thisForm.attr('success-redirect');
                            if (typeof successRedirect !== typeof undefined && successRedirect !== false && successRedirect !== "") {
                                window.location = successRedirect;
                            }
                            thisForm.find('input[type="text"]').val("");
                            thisForm.find('textarea').val("");
                            thisForm.find('.form-success').fadeIn(1000);

                            thisForm.find('.form-error').fadeOut(1000);
                            setTimeout(function () {
                                thisForm.find('.form-success').fadeOut(500);
                            }, 5000);
                        }
                    }
                    // If error text was returned, put the text in the .form-error div and show it.
                    else {
                        // Keep the current error text in a data attribute on the form
                        //thisForm.find('.form-error').attr('original-error', thisForm.find('.form-error').text());
                        // Show the error with the returned error text.
                        //thisForm.find('.form-error').text(response).fadeIn(1000);
                        //thisForm.find('.form-success').fadeOut(1000);
                    }
                },
                /*error: function(errorObject, errorText, errorHTTP) {
                 // Keep the current error text in a data attribute on the form
                 thisForm.find('.form-error').attr('original-error', thisForm.find('.form-error').text());
                 // Show the error with the returned error text.
                 thisForm.find('.form-error').text(errorHTTP).fadeIn(1000);
                 thisForm.find('.form-success').fadeOut(1000);
                 $(thisForm).find('.form-loading').remove();
                 $(thisForm).find('input[type="submit"]').show();
                 } **/
            });
        }
        }
        return false;
        })
        ;

    </script>  -->
<?php include($docPath . 'inc/footer.php');