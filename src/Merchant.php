<?php
namespace Transfast;
/**
 * Class Configuration Details
 *
 * Get the Merchant Api Settings and pin
 *
 * @package Transfast\Api
 *
 * @property string percent
 * @property \Transfast\Merchant amount
 */
use Transfast\Config;

 Class Merchant
 {
     /**
     * Set the merchant ID
     *
     * @param string $merchantID
     * 
     * @return $this
     */

     private $merchantId;
     private $resource = 'get_merchant_pending_orders?';
    

    public function SetMerchantId($merchantId)
    {
        if(!is_numeric($merchantId))
        {
            return new Exception("$merchantId must be a number");
        }
        $this->merchantId = $merchantId;
        return  $this->merchantId;
    }
    
    /**
     * Get the merchant's ID
     *
     * @return number
     */

     public function GetMerchantId()
     {
         return $this->merchantId;
     }

 }


?>