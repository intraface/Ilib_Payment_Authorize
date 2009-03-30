<?php
/**
 * Abstract class for prepare of onlinepayments
 * 
 * @author sune
 *
 */

/**
 * Abstract class for prepare of onlinepayments
 * 
 * @author sune
 *
 */
abstract class Ilib_Payment_Authorize_Prepare extends Ilib_Payment_Authorize
{
    
    /**
     * 
     * @var string $order_identifier
     */
    protected $order_identifier;
    
    /**
     * 
     * @var integer $order_number
     */
    protected $order_number;
    
    /**
     * 
     * @var float $amount
     */
    protected $amount;
    
    /**
     * 
     * @var string $currency
     */
    protected $currency;
    
    /**
     * 
     * @var string $language
     */
    protected $language;
    
    /**
     * 
     * @var string $okpage
     */
    protected $okpage;
    
    /**
     * 
     * @var string $errorpage
     */
    protected $errorpage;
    
    /**
     * 
     * @var string $resultpage
     */
    protected $resultpage;
    
    /**
     * 
     * @var string $inputpage
     */
    protected $inputpage;
    
    /**
     * 
     * @var array $get_vars
     */
    protected $get_vars;
    
    /**
     * 
     * @var array $post_vars
     */
    protected $post_vars;
    
    /**
     * Constructor 
     * 
     * @param string $merchant merchant
     * @param string $verification_key verification key
     * @param string $order_identifier order identifier
     * @param integer $order_number order number
     * @param float $amount amount
     * @param string $currency currency
     * @param string $language 2 digit language code
     * @param string $okpage
     * @param string $errorpage
     * @param string $resultpage
     * @param string $inputpage
     * @param array $get_vars
     * @param array $post_vars
     * @return void
     */
    public function __construct($merchant, $verification_key, $order_identifier, $order_number, $amount, $currency, $language, $okpage, $errorpage, $resultpage, $inputpage, $get_vars, $post_vars)
    {
        parent::__construct($merchant, $verification_key);
        $this->order_identifier = $order_identifier;
        $this->order_number = $order_number;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->language = $language;
        $this->okpage = $okpage;
        $this->errorpage = $errorpage;
        $this->resultpage = $resultpage;
        $this->inputpage = $inputpage;
        $this->get_vars = $get_vars;
        $this->post_vars = $post_vars;
        
        
    }
    
    /**
     * Returns the hidden fields for the form to post to the authorize page.
     * 
     * @return array with hidden post fields.
     */
    abstract public function getHiddenFields();
    
    /**
     * Returns the form action
     * 
     * @return string form action
     */
    abstract public function getAction();
    
    /**
     * Returns the name of the provider. Needs to be overridden in extends.
     * 
     * @return string name of provider
     */
    abstract public function getProviderName();
    
    /**
     * returns error message
     * 
     * @return string errormessage
     */
    abstract public function getErrorMessage();
    
    /**
     * Returns amount
     * @return float amount
     */
    public function getAmount()
    {
        return $this->amount;
    }
    
    /**
     * Returns currency
     * @return string currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    
}
