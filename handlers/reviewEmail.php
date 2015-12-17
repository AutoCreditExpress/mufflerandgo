<?php
require '../inc/config.php';

$Review = new ReviewDAO($db);
if($_GET['type']=='google'){
    $createReview=$Review->createGooglePlusEmail($_GET['userEmail']);
    echo 'complete';
}elseif($_GET['type']=='notification'){
    $createReview=$Review->createReviewNotification($_GET['userEmail']);
    echo 'complete';
}elseif($_GET['type']=='weak'){
    $createReview=$Review->createWeakReviewEmail($_GET['userEmail']);
    echo 'complete';
}


?>