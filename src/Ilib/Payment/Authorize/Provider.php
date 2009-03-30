<?php
/**
 * Abstract for all providers
 * 
 * @author sune
 *
 */

/**
 * Abstract for all providers
 * 
 * @author sune
 *
 */
abstract class Ilib_Payment_Authorize_Provider extends Ilib_Payment_Authorize
{
    
    /**
     * 
     * @var object prepare
     */
    protected $prepare;
    
    /**
     * 
     * @var object input
     */
    protected $form;
    
    /**
     * @var object PostProcess
     */
    protected $post_process;
    
    
    /**
     * Constructer
     * 
     * @param string $merchant merchant number
     * @param string $verification_key verification key
     */
    public function __construct($merchant, $verification_key)
    {
        parent::__construct($merchant, $verification_key);
    }
    
    /**
     * Returns redirect url to payment page.
     * 
     * @param $identifier payment identifier
     * @param $receipt_url the url to the receipt page
     * @return string url
     */
    abstract public function getRedirectUrlToPayment($identifier, $receipt_url);
    
    /**
     * Prepare object
     * 
     * @param string $order_identifier order identifier
     * @param integer $order_number order number
     * @param integer $amount amount
     * @param float $currency currency
     * @param string $language 2 letter languagage
     * @param string $okpage url to ok page
     * @param string $errorpage url to error page
     * @param string $resultpage url to result page
     * @param string $inputpage url to input page
     * @param array $get_vars GET vars
     * @param array $post_vars POST vars
     * @return object post form
     */
    abstract public function getPrepare($order_identifier, $order_number, $amount, $currency, $language, $okpage, $errorpage, $resultpage, $inputpage, $get_vars, $post_vars);
    
    /**
     * Form object
     * 
     * @param integer $order_number order number
     * @param float $amount amount
     * @param string $currency currency
     * @param string $language 2 letter languagage
     * @param string $okpage url to ok page
     * @param string $errorpage url to error page
     * @param string $resultpage url to result page
     * @param array $get_vars GET vars
     * @param array $post_vars POST vars
     * @return object post form
     */
    abstract public function getForm($order_number, $amount, $currency, $language, $okpage, $errorpage, $resultpage, $get_vars, $post_vars);
    
    /**
     * Returns post process object 
     * 
     * @param array $get
     * @param array $post
     * @param array $session
     * @param array $payment_target
     * @return object
     */
    abstract public function getPostProcess($get, $post, $session, $payment_target);    
}