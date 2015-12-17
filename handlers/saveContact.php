<?php

// include the config
require_once('../inc/config.php');

//start Contact class
$contact = new Contact();

//If contact is in post data, someone submitted a message. Check
if(isset($_POST['contact']))
{
    //JSON responses for registration process
    if ($contact->contact_save_success == TRUE)
    {
        echo json_encode(array('status' => 'success', 'message' => 'Thank you! <br /> We will be in touch soon.', 'mail' => $contact->contact_email_success));
    }
    elseif ($contact->contact_save_success == FALSE)
    {
        echo json_encode(array('status' => 'failure', 'message' => 'Oops! There was an error.', 'error' => $contact->errors, 'mail' => $contact->contact_email_success));
    }
}