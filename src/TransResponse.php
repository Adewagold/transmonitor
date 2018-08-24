<?php

namespace Transfast;

class TransResponse
{
  private $isSuccessfulResponse = false;
  private $statusCode;
  private $status = null;
  private $responseCode = null;
  private $responseMessage;
  private $responseData;
  private $requiresValidation = false;
    
    
    /**
    * return server response status code
    * @return int statusCode
    */

    public function getStatusCode() {
        return $this->statusCode;
    }


    /**
    * return server response status code
    * @return int responseCode
    */
    
    public function getResponseCode() {
        return $this->responseCode;
    }
        
    /**
    * return server response status code
    * @return string responseMessage
    */
    public function getResponseMessage() {
        return $this->responseMessage;
    }

    /**
    * return server response status code
    * @return string responseMessage
    */
    public function getResponseData() {
        return $this->responseData;
    }

    
    /**
    *  Get api response
    * @return responsebody
    */
    public static function processResponse($response)
    {
        
        $apiResponse = new TransResponse;
        $apiResponse->statusCode = $response->getStatusCode();
        var_dump($response);
        echo "<br> <br><br>";

        if ($apiResponse->statusCode < 500) {
            $data = json_decode($response->getBody(),true);
            
            if (isset($data['Status'])) {
                $apiResponse->status = $data['Status'];
            }

            if ($data['Status'] === "Failed" && $apiResponse->statusCode === 200) 
            {
                $data = json_decode($response->getBody(),true);
                var_dump($data);
                die();
              $apiResponse->isSuccessfulResponse = true;
            }
            if ($data['Status'] === "Success" && $apiResponse->statusCode === 200) 
            {
                $data = json_decode($response->getBody(),true);
                var_dump($data);
                die();
              $apiResponse->isSuccessfulResponse = true;
            }
            
            if ($data['Status'] === "Success" && $apiResponse->statusCode === 200
              && ($apiResponse->responseCode === "00" || $apiResponse->responseCode === "0" || $apiResponse->responseCode === "02")) {
              $apiResponse->isSuccessfulResponse = true;
            }
        }
    }


}