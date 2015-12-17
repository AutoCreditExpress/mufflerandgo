<?php
include('../inc/config.php');
$ClientDAO = new ClientDAO($db);
$CurrentAffiliate = $ClientDAO->getAffiliateContentByName($_GET['a']);
if($CurrentAffiliate!=''){
    echo $CurrentAffiliate;
}
?>