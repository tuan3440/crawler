<?php

namespace core;

use Controllers\pages\vietnamnet;
use Controllers\pages\vnexpress;
use Controllers\pages\dantri;
use controllers\homepage;
class Application
{
    /** @var null The controller */
    private $url_controller = null;

    /** @var null The method (of the above controller), often also named "action" */
    private $url_action = null;

    /** @var array URL parameters */
    private $url_params = array();
    private $url;

    /**
     * "Start" the application:
     * Analyze the URL elements and calls the according controller/method or the fallback
     */
    public function __construct()
    {
       

           
            $page = new HomePage();
            $page->index();

            $this->insertData();

        } 


    public function insertData() 
    {
       
      
      
        if(isset($_POST['submit']))
        {
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
               $vietnamnet->getData($url);
            } 

            if (strlen(strstr($url, 'dantri')) > 0) {
                $dantri = new Dantri($url);
               $dantri->getData();
            }

            if (strlen(strstr($url, 'vnexpress')) > 0) {
                $vnexpress = new Vnexpress($url);
               $vnexpress->getData();
            }

           
            

        }

    }
       

    }
      
    

