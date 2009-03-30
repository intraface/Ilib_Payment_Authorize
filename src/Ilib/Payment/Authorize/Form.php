<?php
/**
 * Abstract for PostForm form object
 * @author sune
 *
 */

/**
 * Abstract for Postform form object
 * @author sune
 *
 */
abstract class Ilib_Payment_Authorize_Form extends Ilib_Payment_Authorize
{
    /**
     * 
     * @var string $order_number
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
     * @param integer $order_number order number
     * @param float $amount amount
     * @param string $currency currency
     * @param string $language 2 digit language code
     * @param string $okpage url to ok page
     * @param string $errorpage url to error page
     * @param string $resultpage url to result page
     * @param array $get_vars GET vars
     * @param array $post_vars POST vars
     * @return void
     */
    public function __construct($merchant, $verification_key, $order_number, $amount, $currency, $language, $okpage, $errorpage, $resultpage, $get_vars, $post_vars)
    {
        parent::__construct($merchant, $verification_key);
        $this->order_number = $order_number;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->language = $language;
        $this->okpage = $okpage;
        $this->errorpage = $errorpage;
        $this->resultpage = $resultpage;
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
     * Returns  secure tunnel
     * 
     * @return string secture tunnel
     */
    abstract public function getSecureTunnel();
    
    /**
     * Return the name of the card number field name
     * 
     * @return string
     */
    abstract public function getCardNumberFieldName();
    
    /**
     * Returns the name of the security number field name
     * 
     * @return unknown_type
     */
    abstract public function getSecurityNumberFieldName();
    
    /**
     * Returns the name of the expire month field name 
     * @return string 
     */
    abstract public function getExpireMonthFieldName();
    
    /**
     * Returns the name of the expire year field name
     * @return string
     */
    abstract public function getExpireYearFieldName();
    
    /**
     * return the currency
     * @return string
     */
    abstract public function getCurrency();
    
    /**
     * Returns the amount 
     * @return float
     */
    abstract public function getAmount();
    
    /**
     * Returns errore message if is set
     * @return string
     */
    abstract public function getErrorMessage();
    
}

