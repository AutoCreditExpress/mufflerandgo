<?php
include('../inc/config.php');

$Review = new ReviewDAO($db);
$TheReview = $Review->createReview($_POST['userName'], $_POST['userEmail'], $_POST['userRating'], $_POST['userPhone']);
if($TheReview=='false'){
    echo json_encode(array('status'=>'failed', 'message'=>$TheReview));
}elseif($TheReview!=''){
    echo json_encode(array('status'=>'complete', 'id'=>$TheReview));
}
?>