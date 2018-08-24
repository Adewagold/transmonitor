<?php
namespace Transfast;
use GuzzleHttp\Client;
/**
* this is responsible for sending request and response to transfast server
*/
class TransRequest
{
    private $data = array();
    private $url;
    private static $method;
    function __construct($url) 
    {
        $this->url = $url;
    }


     /**
    * Method used
    * @param string $key
    * @param string $value
    * @return $this
    */
    public static function getMethod()
    {
        return self::$method;
    }

    /**
    * Set Post Method
    * @param string $key
    * @param string $value
    * @return $this
    */
    public static function setMethod($method)
    {
        self::$method = $method;
        return self::$method;
    }

    /**
    * responsible for adding form data to request
    * @param string $key
    * @param string $value
    * @return $this
    */
    public function addBody($key,$value)
    {
        $data[$key]=$value;
        return $this;
    }



    /**
    * send post request to the server
    * @return TransResponse
    */
    public function makeRequest()
    {
        
        $httpclient = new Client(['timeout'=>60]);
        $method = TransRequest::getMethod();
        $response = $httpclient->request("GET", $this->url, [
            'json' => $this->data,
            'headers' => [
              'Content-Type' => 'application/json'
            ]
        ]);
        // $data = json_decode($response->getBody(),true);
        // var_dump($data);
        // die();
        return TransResponse::processResponse($response);
    }




}