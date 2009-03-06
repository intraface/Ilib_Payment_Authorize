<?php

abstract class Ilib_Payment_Authorize_PostForm extends Ilib_Payment_Authorize
{
    
    abstract public function getRedirectUrlToPayment($identifier);
    
    /**
     * returns merchant number
     *
     * @return string merchant number
     */
    abstract public function getMerchant();
    
    /**
     * returns the verification key
     *
     * @return string verification key
     */
    abstract public function getVerificationKey();
    
    
    /**
     * Post form object
     *
     * @return object post form
     */
    abstract public function getPost();
    
        
}