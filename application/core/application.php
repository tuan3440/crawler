<?php

namespace App\Core;

use App\Crawler\Vietnamnet;
use App\Crawler\Vnexpress;
use App\Crawler\Dantri;
use App\Controllers\HomePage;
use App\Crawler\PageFactory;
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
            //simple Factory
            // $page = PageFactory::makeObject($url);
            //Abstract Factory
            $page = new PageFactory();
            $page = $page->getPage($url);
            if($page != null)  $page->getData($url);
             else die("Url not validate");
        }
    }
}
