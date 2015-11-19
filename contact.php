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
}elseif ($_GET['sch'] == 'elec') {
    $service = 'Electrical Service ';
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
                        <?php elseif ($_GET['sch'] == 'elec'): ?>
                        <h4 class="uppercase">We Need to know a little more information to set up an appointment...</h4>
                        <p>
                            Please let us know what is a good time for you to get your electrical assessment and we will
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
					<div id="contactResponse" style=color:red;"></div>
                    <form class="form-email" action="<?php echo $webPath; ?>mail/mandrillMail.php" method="post"
                          data-success="Thanks for your submission, we will be in touch shortly."
                          data-error="Please fill all fields correctly.">
                        <input type="text" class="validate-required" name="name" placeholder="Your Name" id="name" />
                        <input type="text" class="validate-required validate-email" name="email" id="email"
                               placeholder="Email Address" />
                        <input type="text" class="validate-required validate-phone" name="phone" placeholder="Phone" id="phone" />

                        <input type="hidden" name="coupon" value="<?php echo $_GET['cc']; ?>"/>

                        <textarea class="validate-required" name="message" rows="4" id="message"
                        <?php
                            if (isset($_GET['serv']))
                            {
                                echo 'placeholder="Description of service needed"';
                            }
                            elseif (isset($service))
                            {
                                echo 'placeholder="Description of '.$service.' Issue"';
                            }
                            else
                            {
                                echo 'placeholder="Message"';
                            }
                        ?>
                        ></textarea>

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

<?php include($docPath . 'inc/footer.php');