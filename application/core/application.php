<?php

namespace App\Core;

use App\Crawler\Vietnamnet;
use App\Crawler\Vnexpress;
use App\Crawler\Dantri;
use App\Controllers\HomePage;

class Application
{

    public function __construct()
    {
        $page = new HomePage();
        $page->index();
        $this->insertData();
    }

    public function insertData()
    {
        if (isset($_POST['submit'])) {
            $url = $_POST['urlPages'];
            if (empty($url)) {
                die("Error: Please Enter the Website URL<br> ");
            }
            // Remove all illegal characters from a url
            $url = filter_var($url, FILTER_SANITIZE_URL);
            //validate URL
            if (!filter_var($url, FILTER_VALIDATE_URL)) {
                die("Url not found");
            }
            if (strlen(strstr($url, 'vietnamnet')) > 0) {
                $vietnamnet = new Vietnamnet($url);
                $vietnamnet->getData();
            } else if (strlen(strstr($url, 'dantri')) > 0) {
                $dantri = new Dantri($url);
                $dantri->getData();
            } else if (strlen(strstr($url, 'vnexpress')) > 0) {
                $vnexpress = new Vnexpress($url);
                $vnexpress->getData();
            } else die("Url not validate");
        }
    }
}
