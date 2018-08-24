<?php
/**
* A base class for transfast
*
* Class Transfast
*
* @package Transfast
*/
namespace Transfast;

class Transfast
{
     /**
    * Transfast Merchant Id
    * @return string $url
    */
    public static $merchantId ='00777898674';
    
    /**
    * Transfast Base Url
    * @return string $url
    */
    public static  $base_url='http://api.vela.com.ng';

    /**
    * Transfast Base URL
    * @param string $url
    * @return string
    */

    public static function getBaseUrl()
    {
        return  self::$base_url;
    }


    /**
    * construct the Transfast client
    * @param string $merchantKey
    * @param string $apiKey
    */

    public static function setMechantId($merchantId)
    {
        if (empty($merchantKey)) {
            throw new \InvalidArgumentException("Merchant Id can not be empty");
          }
          self::$merchantId = $merchantId;
    }


    /**
    * get the merchant key
    * @return string $merchantId
    */
    public static function getMerchantId()
    {
        return self::$merchantId;
    }



}