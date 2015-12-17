<?php

class Autoloader{
    protected $basePath = '';
    protected $classes = array(
        'Stripe'                          => 'lib/Stripe.php',
        'SubscriberDAO'                   => 'classes/subscriber/SubscriberDAO.php',
        'StripeWebhookHandler'            => 'classes/stripe_webhook/StripeWebhookHandler.php',
        'Login'                           => 'classes/login/Login.php',
		'Mandrill'                        => 'classes/mandrill/Mandrill.php',
        'Review'                          =>'classes/review/review.php',
        'ReviewDAO'                       =>'classes/review/reviewDAO.php',

        //Libraries
        'PHPMailer'             => '/libraries/PHPMailer.php',
        'SMTP'                  => '/libraries/class.smtp.php',
    );

    public function __construct($basePath) {
        $this->setBasePath($basePath);
    }
    public function setBasePath($basePath) {
        $this->basePath = $basePath;
    }
    public function getBasePath() {
        return $this->basePath;
    }
    public function autoload($className) {

        if( isset($this->classes[$className])) {
            require_once ($this->getBasePath() . $this->classes[$className]);
        }
    }
}