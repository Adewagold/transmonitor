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

class GetReconciledOrder
{
    /**
    * Merchant ID resources
    * @return string $url
    */
    private static $url = '/get_merchant_reconciled_orders?';
    
    
    /**
    * get all merchant Reconciled Orders
    * @return string $merchantId
    */
    public static function getMerchantReconciledOrders()
    {
        $method = TransRequest::$setMethod('GET');
        $merchantId = Transfast::getMerchantId();
        $url_path = Transfast::$base_url.self::$url."apiKey=$merchantId";
        $request = new TransRequest($url_path);
        $request->makeRequest();
    }
}