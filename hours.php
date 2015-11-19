<!--Header -->
<?php
include('inc/config.php');
include($docPath.'inc/header.php');
?>        <div class="main-container">
            <section class="page-title page-title-4 image-bg overlay parallax">
                <div class="background-image-holder">
                    <img alt="Background Image" class="background-image" src="<?php echo $webPath;?>img/services.jpg" />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="uppercase mb0">Our Hours</h1>
                        </div>
                        <div class="col-md-6 text-right">
                            <ol class="breadcrumb breadcrumb-2">
                                <li>
                                    <a href="<?php echo $webPath;?>">Home</a>
                                </li>
                                <li class="active">Hours</li>
                            </ol>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
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
                    <div class="pricing-table pt-1 text-center emphasis" style="background-color: #47b475;">
                        <h5 class="uppercase">We're currently</h5>
                        <span class="price">Open</span>
                        <p class="lead">Until 6pm Tonight</p>
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

            <section class="pt64 pb64">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2 class="mb8">Find out when our next opening is</h2>
                            <p class="lead mb40">
                                find out the price of a service or check for appointment times here.
                            </p>
                            <a class="btn btn-filled btn-lg mb0" href="<?php echo $webPath;?>contact/?serv=hours">Check Next Available Opening</a>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="embelish-icons">
                        <i class="ti-marker"></i>
                        <i class="ti-layout"></i>
                        <i class="ti-ruler-alt-2"></i>
                        <i class="ti-eye"></i>
                        <i class="ti-signal"></i>
                        <i class="ti-pulse"></i>
                        <i class="ti-marker"></i>
                        <i class="ti-layout"></i>
                        <i class="ti-ruler-alt-2"></i>
                        <i class="ti-eye"></i>
                        <i class="ti-signal"></i>
                        <i class="ti-pulse"></i>
                    </div>
                </div>
                <!--end of container-->
            </section>
            <!-- Footer -->
<?php include($docPath.'inc/footer.php');