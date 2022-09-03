<?php

namespace Api;

/**
 * class ApiResults
 */
class ApiResults {

    /**
     * class constructor
     * @param $url
     * @return void
     */
    /*public function construnct(
        $url = null
    ){
        $url = "";
    }*/


    /**
     * A function that calls a specific REST Api and returns the raw result
     * @param $apiCallUrl
     * @return bool|string
     */
    public function getApi($apiCallUrl){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            //CURLOPT_URL => "https://api.publicapis.org/categories",
            CURLOPT_URL => $apiCallUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $response;
    }

}

