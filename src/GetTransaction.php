<?php 

namespace Transfast;
/**
 * Get Merchant Transaction
 *
 *
 * @package Transfast
 *
 * @property string percent
 * @property \Transfast\GetTransaction amount
 */
use Transfast\Transfast;

class GetTransaction
{
     /**
    * Merchant ID resources
    * @return string $url
    */
    private static $url = '/get_merchant_pending_orders?';
    
    
    /**
    * get the merchant pending Orders
    * @return string $merchantId
    */
    public static function getPendingOrders()
    {
        TransRequest::setMethod("GET");
        $merchantId =  Transfast::getMerchantId();
        $url_path = Transfast::$base_url.self::$url."apiKey=$merchantId";
        $request = new TransRequest($url_path);
        $request->makeRequest();
    }
}