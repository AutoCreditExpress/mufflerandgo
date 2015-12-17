<?php
include('../inc/config.php');

$Review = new ReviewDAO($db);
$TheReview = $Review->updateReviewContent($_POST['passedId'], $_POST['doBetterContent']);

if($TheReview=='false'){
    echo json_encode(array('status'=>'failed', 'message'=>$TheReview));
}elseif($TheReview!=''){
    echo json_encode(array('status'=>'complete'));
}

?>