<?php

namespace App\Curl;

class Curl
{
    public $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getContentPage()
    {
        // Initialize CURL
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->url);
        // Set return
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setOpt($curl, CURLOPT_FOLLOWLOCATION, true);
        $result = curl_exec($curl);
        // Disconnect CURL, free
        curl_close($curl);
        return $result;
    }
}
