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

class CreateOrder
{
     /**
    * Merchant ID resources
    * @return string $url
    */
    private static $url = '/create_merchant_order?';
    
    
    /**
    * get all merchant Customers
    * @return string $merchantId
    */
    public static function CreateOrder($amountInKobo, $customerEmail, $customerFullName, $customerPhoneNumber, $merchantOrderReference)
    {
        $method = TransRequest::$setMethod('POST');
        $merchantId =  Transfast::getMerchantId();
        $url_path = Transfast::$base_url.self::$url."apiKey=$merchantId";
        $request = new TransRequest($url_path);
        $request->makeRequest()
                ->addBody('amountInKobo',$amountInKobo * 100)
                ->addBody('customerEmail',$customerEmail)
                ->addBody('customerFullName',$customerFullName)
                ->addBody('customerPhoneNumber',$customerPhoneNumber)
                ->addBody('merchantOrderReference',$merchantOrderReference);
    }
}