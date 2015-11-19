<?php
include('../inc/config.php');
// Sending Account Settings - replace these details with an email account held on the SMTP server entered above.
// These 2 settings are only required if you choose 'smtp' for emailMethod above.
$sendingAccountUsername     = 'leads@mufflerandgo.com';

// Recipient (To:) Details  - Change this to the email details of who will receive all the emails from the website.
$recipientEmail             = 'leads@mufflerandgo.com'; // REQUIRED value.
$recipientName              = 'Muffler and Go Lead';             // REQUIRED value.

// Email details            - Change these to suit your website needs
$emailSubject               = 'New Lead'; // REQUIRED value. Subject of the email that the recipient will see
$websiteName                = 'mufflerandgo.com';                // REQUIRED value. This is used when a name or email is not collected from the website form
$name=$_POST['name'];
$phone=$_POST['phone'];
$theemail = $_POST['email'];
$themessage =$_POST['message'];

if(!$name){
	$error = 'Please input a Name';
}elseif(!$phone){
	$error = 'Please input a Phone';
}elseif(!$theemail){
	$error = 'Please input an Email';
}elseif(!$themessage){
	$error = 'Please input a Message';
}else{
$thenewmessage='<html><head></head><body>Name:'.$name.'<br>Phone:'.$phone.'<br>Email:  '.$theemail.'<br>They said: '.$themessage.'<br></body></html>';


        $mandrill = new Mandrill('guOaBcd_BIv5XjvNoe8--g');
		
        $message = new stdClass();
        $message->html = $thenewmessage;
        $message->subject = $emailSubject;
        $message->from_email = 'info@mufflerandgo.com';
        $message->from_name  = $recipientName;
        $message->to = array(array("email" => 'leads@mufflerandgo.com'));
        $message->track_opens = true;                        // Enable encryption, 'ssl' also accepted
        $response = $mandrill->messages->send($message);

        if($response[0]['status'] = 'sent'){
			//header("Location: http://www.mufflerandgo.com/contact/?success=Mail_Sent");
			$success= 'complete';
        }else{
			$error = $response->reject_reason;
        }
}	

echo $success.$error;
?>