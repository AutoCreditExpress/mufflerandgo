<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                              
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


class ReviewDAO {

    protected $db = '';

    function __construct($pdo){
        $this->db = $pdo;
    }

    function getAllReviews(){
        $sql = "SELECT * FROM review WHERE review_content!='' and review_name!=''";
        $results = $this->fetchSql($sql);
        return $results;
    }

    function getReviewsByPage($page=null){
        if($page){
            $min=trim(($page-1).'0');
            $max=($page*10);
            $sql = "SELECT * FROM review WHERE review_content!='' and review_name!='' LIMIT ".$min.','.$max;
            //var_dump($sql);
        }else{
            $sql = "SELECT * FROM review WHERE review_content!='' and review_name!='' LIMIT 10";
        }
        $results = $this->fetchSql($sql);
        return $results;
    }

    function getTotalReviewCount(){
        $sql = "SELECT * FROM review WHERE review_content!='' and review_name!=''";
        $results = $this->fetchSql($sql);
        $counter=0;
        foreach($results as $result){
            $counter=$counter+1;
        }
        return $counter;
    }
    function createGooglePlusEmail($user_email, $passedLink=null){
            // the link to your register.php, please set this value in config/email_verification.php
            $thenewmessage = '<a href="https://plus.google.com/101403984914767073452/about?gl=US&hl=en-US&review=1">Review us on google +</a>';

        $mandrill = new Mandrill('guOaBcd_BIv5XjvNoe8--g');

        $message = new stdClass();
        $message->html = $thenewmessage;
        $message->subject = 'MufflerAndGo.com Google + Review Link';
        $message->from_email = 'info@mufflerandgo.com';
        $message->from_name  = 'MufflerAndGo.com';
        $message->to = array(array("email" => $user_email));
        $message->track_opens = true;                        // Enable encryption, 'ssl' also accepted
        $response = $mandrill->messages->send($message);

        if($response[0]['status'] = 'sent'){
            return true;
        }else{
            return false;
        }
    }
    function createReviewNotification($user_email){
        // the link to your register.php, please set this value in config/email_verification.php
        $thenewmessage = 'There should be some review details here.';

        $mandrill = new Mandrill('guOaBcd_BIv5XjvNoe8--g');

        $message = new stdClass();
        $message->html = $thenewmessage;
        $message->subject = 'Your recent MufflerAndGo.com Review';
        $message->from_email = 'info@mufflerandgo.com';
        $message->from_name  = 'MufflerAndGo.com';
        $message->to = array(array("email" => $user_email));
        $message->track_opens = true;                        // Enable encryption, 'ssl' also accepted
        $response = $mandrill->messages->send($message);

        if($response[0]['status'] = 'sent'){
            return true;
        }else{
            return false;
        }
    }
    function createWeakReviewEmail($user_email){
        // the link to your register.php, please set this value in config/email_verification.php
        $thenewmessage = 'Sorry, heres a coupon';

        $mandrill = new Mandrill('guOaBcd_BIv5XjvNoe8--g');

        $message = new stdClass();
        $message->html = $thenewmessage;
        $message->subject = 'This is personal email about a weak review';
        $message->from_email = 'info@mufflerandgo.com';
        $message->from_name  = 'MufflerAndGo.com';
        $message->to = array(array("email" => $user_email));
        $message->track_opens = true;                        // Enable encryption, 'ssl' also accepted
        $response = $mandrill->messages->send($message);

        if($response[0]['status'] = 'sent'){
            return true;
        }else{
            return false;
        }
    }
    function createReview($name,$email,$rating,$phone=null){

        $createReview = $this->db->prepare("INSERT INTO review (review_name, review_email, review_phone, review_rating) VALUES ('".$name."','".$email."','".$rating."','".$phone."')");
        try{
            $createReview->execute();
            // return the id of the review

            $lastId=$this->db->lastInsertId();

            return $lastId;
        }catch (PDOException $e){
            return 'false';
        }
    }
    function updateReviewContent($id, $content){

        $updateReview = $this->db->prepare("UPDATE review SET review_content='".$content."' WHERE review_id='".$id."'");
        try{
            $updateReview->execute();
            // return the id of the review

            return 'true';
        }catch (PDOException $e){
            return 'false';
        }
    }
    function fetchSql($sql){

        $query = $this->db->prepare($sql);
        $query->execute();
        try{
            $results = $this->mapGohToObjects($query);

            return $results;

        }
        catch(PDOException $e){
            return FALSE;
        }
    }

    public function mapGohToObjects(PDOStatement $stmt){
        $review = array();
        try{

            if( ($aRow = $stmt->fetch()) === false) {
                return array();
            }

            $reviewArray = array();

            do{

                if(!in_array($aRow['review_id'],$reviewArray)){
                    $review = new Review();
                    $review->setId($aRow['review_id']);
                    $reviewArray[] = $aRow['review_id'];
                    $review->setName($aRow['review_name']);
                    $review->setEmail($aRow['review_email']);
                    $review->setPhone($aRow['review_phone']);
                    $review->setRating($aRow['review_rating']);
                    $review->setPhone($aRow['review_phone']);
                    $review->setContent($aRow['review_content']);
                    $reviews[] = $review;
                }

            } while(($aRow = $stmt->fetch()) !== false);

        } catch(\Exception $e){
            return false;
        }

        $count = count($reviews);

        if($count == 1){
            return $reviews[0];
        }
        else{
            return $reviews;
        }



    }

} 