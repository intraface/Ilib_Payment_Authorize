<?php
/**
 * Main class for Ilib_Payment_Authorize
 * 
 * @author sune
 *
 */

/**
 * Main class for Ilib_Payment_Authorize
 * @author sune
 *
 */
abstract class Ilib_Payment_Authorize
{
    
    /**
     * @param string merchant number
     */
    protected $merchant;
    
    
    /**
     * @param string verficiation string
     */
    protected $verification_key;
    
    /**
     * Constructer
     * 
     * @param string $merchant merchant number
     * @param string $verification_key verification key
     */
    public function __construct($merchant, $verification_key)
    {
        $this->merchant = $merchant;
        $this->verification_key = $verification_key;
    }
    
    /**
     * returns merchant number
     *
     * @return string merchant number
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * returns the verification key
     *
     * @return string verification key
     */
    public function getVerificationKey()
    {
        return $this->verification_key;
    }
    
        
}