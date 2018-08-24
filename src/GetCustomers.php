<?php 

namespace Transfast;
/**
 * Get Merchant Transaction
 *
 *
 * @package Transfast
 *
 * @property string percent
 * @property \Transfast\GetCustomers amount
 */
use Transfast\Transfast;

class GetCustomers
{
     /**
    * Merchant ID resources
    * @return string $url
    */
    private static $url = '/get_merchant_customer_payments?';
    
    
    /**
    * get all merchant Customers
    * @return string $merchantId
    */
    public static function getMerchantCustomers()
    {
        $method = TransRequest::$setMethod('GET');
        $merchantId =  Transfast::getMerchantId();
        $url_path = Transfast::$base_url.self::$url."apiKey=$merchantId";
        $request = new TransRequest($url_path);
        $request->makeRequest();
    }
}