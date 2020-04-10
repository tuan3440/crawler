<?php
namespace Controllers;
use core\Controller;

    class Page {

         public $html;
         protected $regexTitle;
         protected $regexContent;
         protected $regexDate;
         protected $regexLink;

         function __construct($url) {
            $curl = new Curl($url);
            $this->html = $curl->getContentPage();
            
         }

         

         public function getTitle() {
        
            preg_match_all($this->regexTitle, $this->html, $title);
             return $title[1];
  
         }
  
  
         public function getLink() {
          preg_match_all($this->regexLink, $this->html, $link);
          return $link[1];
        }
  
         public function getDate($data) {
          preg_match_all($this->regexDate, $data, $date);

          return $date[0][0];
        }
  
  
         public function getContent($data) {
         preg_match_all($this->regexContent, $data, $content);
         
        return $content[0][0];
       
     
     }

      
         public function getData($url) {
           
     
               $title = $this->getTitle();
               $link = $this->getLink();

               foreach(array_combine($title, $link) as $title => $link) {
               
                  $suburl = $url.$link;
                  
                  $sub = new Curl($suburl);
                  $contentPage = $sub->getContentPage();
                  
                  $content = $this->getContent($contentPage);
                  
                  $date = $this->getDate($contentPage);
               
                  $database = new Controller();
                  $database->addToTheDatabase($title, $link, $content, $date);
                  
               }

               echo "Insert success";
  }

  
 
       }