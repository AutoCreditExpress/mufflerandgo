<?php
include("inc/config.php");
?>
    <!doctype html>
    <html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="iNHXd8EvGMqZs0C7DjfDB01axK6foCBU4BlfR4FkRHs" />
    <title>Complete Auto Repair |  Muffler & Go | Fenton, MI </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-68791406-1', 'auto');
        ga('send', 'pageview');

    </script>
    <link href="<?php echo $webPath;?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo $webPath;?>css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo $webPath;?>css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo $webPath;?>css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo $webPath;?>css/ytplayer.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo $webPath;?>css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo $webPath;?>css/custom.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <style type="text/css">
        .thecontainer {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
        }
    </style>
</head>
<body>
<?php ?>
    <!--chooseReview Modal-->
<div class="" style="height:100%; width:100%;padding:15% 25% 0% 25%;">
    <div>

    <div class="chooseReview" id="" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;margin-left:-15px;">
    <div class="dialog">
        <div class="content">
            <div class="header">
                <h2 class="StepTitle">Would you be willing to write a review?</h2>
            </div>
            <div class="body">
                <form action="" class="row" id="chooseReveiewForm">
                    <div class="col-sm-12" style="">
                        <div class="userFields">
                            <div class="col-xs-12 text-center">
                                <a href="javascript:void(0);" target="_blank"><input type="button" class="btn btn-default" name="googleReview" id="googleReview" value="Google +"></a>
                            </div>
                            <div class="col-xs-12 text-center">
                                <input type="button"  class="btn btn-default" name="otherReview" id="otherReview" value="Other">
                            </div>
                        </div>
                        <div class="col-xs-12 text-center modalLoading" style="display:none;">
                            <img src="<?php echo $webPath2;?>img/loading.gif">
                        </div>
                    </div>
                </form>
            </div>
            <div class="clear footer">
                <div class="col-xs-12 text-center">
                    <input type="button" data-dismiss="modal" class="btn btn-danger" name="otherReview" id="otherReview" value="No" style="color:white;">
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!--chooseReview Times Popup Modal-->
<!--yourThoughts Modal-->
<div class="yourThoughts" id="" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;margin-left:-15px;">
    <div class="dialog">
        <div class="content">
            <div class="header">
                <h2 class="StepTitle">What are your thoughts?</h2>
            </div>
            <div class="body">
                <form action="" class="row" id="yourThoughtForm">
                    <div class="col-sm-12" style="">
                        <div class="userFields">
                            <textarea name="yourThoughtsContent" id="yourThoughtsContent" style="width:100%;height:200px;" placeholder="enter message here..."></textarea>
                        </div>
                        <div class="col-xs-12 text-center modalLoading" style="display:none;">
                            <img src="<?php echo $webPath2;?>img/loading.gif">
                        </div>
                    </div>
                </form>
            </div>
            <div class="clear footer text-center">
                <button type="button" id="submit-your-thoughts" class="btn btn-default">
                    Submit
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!--yourThoughts Times Popup Modal-->
<!--doBetter Times Modal-->
<div class="doBetter" id="" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;margin-left:-15px;">
    <div class="dialog">
        <div class="content">
            <div class="header">
                <h2 class="StepTitle">How could we do better?</h2>
            </div>
            <div class="body">
                <form action="" class="row" id="doBetterForm">
                    <div class="col-sm-12" style="">
                        <div class="userFields">
                            <input type="text" name="passedId" id="passedId" placeholder="Rating" style="display:none;">
                            <textarea name="doBetterContent" id="doBetterContent" style="width:100%;height:200px;" placeholder="enter message here..."></textarea>
                        </div>
                        <div class="col-xs-12 text-center modalLoading" style="display:none;">
                            <img src="<?php echo $webPath2;?>img/loading.gif">
                        </div>
                    </div>
                </form>
            </div>
            <div class="clear footer text-center">
                <button type="button" id="submit-do-better" class="btn btn-default">
                    Submit
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!--doBetter Times Popup Modal-->
<!--customerInfo Times Modal-->
<div class="customerInfo" id="" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;margin-left:-15px;">
    <div class="dialog">
        <div class="content">
            <div class="header">
                <h2 class="StepTitle">Enter Your Info</h2>
            </div>
            <div class="body">
                <form action="" class="row" id="">
                    <div class="col-sm-12" style="" id="">
                        <div id="customerInfo">
                            <input type="text" name="userName" id="userName" placeholder="Name">
                            <input type="text" name="userEmail" id="userEmail" placeholder="Email">
                            <input type="text" name="userPhone" id="userPhone" placeholder="Phone: optional">
                            <input type="text" name="userRating" id="passedRating" placeholder="Rating" style="display:none;">
                        </div>
                        <div class="col-xs-12 text-center modalLoading" style="display:none;">
                            <img src="<?php echo $webPath2;?>img/loading.gif">
                        </div>
                    </div>
                </form>
            </div>
            <div class="clear footer text-center">
                <button type="button" id="submit-customer-info" class="btn btn-default">
                    Submit
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!--customerInfo Times Popup Modal-->
<!--starRating Modal-->
<div class="theStarRating" id="" tabindex="-1" role="dialog" aria-hidden="false" style="margin-left:-15px;">
    <div class="dialog">
        <div class="content">
            <div class="body">
                <style>

                    p{
                        margin  : 0 0 1.5em;
                        padding : 0;
                    }

                    a{
                        color           : #9c3;
                        text-decoration : none;
                    }
                    .starRating:not(old){
                        display        : inline-block;
                        width          : 30em;
                        height         : 3em;
                        overflow       : hidden;
                        vertical-align : bottom;
                    }

                    .starRating:not(old) > input{
                        margin-right : -100%;
                        opacity      : 0;
                    }

                    .starRating:not(old) > label{
                        display         : block;
                        float           : right;
                        position        : relative;
                        background      : url('<?php echo $webPath;?>img/star-off.svg');
                        background-size : contain;
                    }

                    .starRating:not(old) > label:before{
                        content         : '';
                        display         : block;
                        width           : 3em;
                        height          : 3em;
                        background      : url('<?php echo $webPath;?>img/star-on-red.png');
                        background-size : contain;
                        opacity         : 0;
                        transition      : opacity 0.2s linear;
                        color :  blue;
                    }

                    .starRating:not(old) > label:hover:before,
                    .starRating:not(old) > label:hover ~ label:before,
                    .starRating:not(:hover) > :checked ~ label:before{
                        opacity : 1;
                    }
                    label:hover {cursor:pointer;}
                </style>
                <h1 style="text-align:center;">How would you rate your service today?</h1><br>
                <div style="margin-left:30px;">
                Rating:
                                          <span class="starRating">
                                            <input id="rating10" class="theStar" type="radio" name="rating" value="10">
                                            <label for="rating10">10</label>
                                            <input id="rating9" class="theStar" type="radio" name="rating" value="9">
                                            <label for="rating9">9</label>
                                            <input id="rating8" class="theStar" type="radio" name="rating" value="8">
                                            <label for="rating8">8</label>
                                            <input id="rating7" class="theStar" type="radio" name="rating" value="7" checked>
                                            <label for="rating7">7</label>
                                            <input id="rating6" class="theStar" type="radio" name="rating" value="6">
                                            <label for="rating6">6</label>
                                            <input id="rating5" class="theStar" type="radio" name="rating" value="5">
                                            <label for="rating5">5</label>
                                            <input id="rating4" class="theStar" type="radio" name="rating" value="4">
                                            <label for="rating4">4</label>
                                            <input id="rating3" class="theStar" type="radio" name="rating" value="3">
                                            <label for="rating3">3</label>
                                            <input id="rating2" class="theStar" type="radio" name="rating" value="2">
                                            <label for="rating2">2</label>
                                            <input id="rating1" class="theStar" type="radio" name="rating" value="1">
                                            <label for="rating1">1</label>
                                          </span>
                    </div>
            </div>
            <div class="clear footer text-center">
                <button type="button" id="submit-userRating" class="btn btn-default" style="margin-top:45px;">
                    Submit
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
    </div>
</div>
<?php
//Include footer
//include_once($docPath.'inc/footer.php');
?>
<script src="<?php echo $webPath;?>js/jquery.min.js"></script>
<script src="<?php echo $webPath;?>js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
/*
// old star click reference
        $('.theStar').click(function(){
            var starValue=$(this).val();
            $('#userRating').val(starValue);
            $('.theStarRating').hide();
            $('#passedRating').val(starValue);
            $('.customerInfo').show();
        });
  */
        $('#submit-userRating').click(function(){
            var starValue=$(this).val();
            $('#userRating').val(starValue);
            $('.theStarRating').hide();
            $('#passedRating').val(starValue);
            $('.customerInfo').show();
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
                        $('.customerInfo').hide();
                        var theData=JSON.parse(data);
                        if(theData.status=='complete'){
                            console.log('test3');
                            //return the id to save the message later
                            if(starValue<=6){
                                $('#passedId').val(theData.id);
                                $('.doBetter').show();
                            }else{
                                $('#passedId').val(theData.id);
                                $('.chooseReview').show();
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
                                    $('.doBetter').hide();
                                    alert('Thank you for your submission');
                                    location.assign('http://www.mufflerandgo.com/reviews.php');
                                }else{
                                    alert('internal error occurred on review page - do better event handler');
                                    $('.modalLoading').hide();
                                    $('.userFields').show();
                                    $(this).hide();
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
                                    $('.yourThoughts').hide();
                                    alert('Thank you for your submission');
                                    location.assign('http://www.mufflerandgo.com/reviews.php');
                                }else{
                                    alert('internal error occurred on review page - your thoughts event handler');
                                    $('.userFields').show();
                                    $('.modalLoading').hide();
                                    $(this).hide();
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
            $('.chooseReview').hide();
            $('.yourThoughts').show();
        });
        $('#googleReview').click(function(){
            var userEmail = $('#userEmail').val();
            $.ajax({
                method: 'GET',
                url: "<?php echo $webPath;?>handlers/reviewEmail.php?userEmail="+userEmail+"&type=google",
                success: function(data){
                    if(data=='complete'){
                        alert('Our Google+ review link has been emailed to your address.');
                        location.assign('http://www.mufflerandgo.com/reviews.php');
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
