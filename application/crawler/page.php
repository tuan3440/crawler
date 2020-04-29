<?php

namespace App\Crawler;

use App\Curl\Curl;
use App\Controllers\InsertDataController;

class Page
{
   public $html;
   protected $regexTitle;
   protected $regexContent;
   protected $regexDate;
   

   function __construct($url)
   {
      $curl = new Curl($url);
      $this->html = $curl->getContentPage();
   }

   public function getTitle()
   {
      preg_match_all($this->regexTitle, $this->html, $title);
      return $title[0][0];
   }

   public function getDate()
   {
      preg_match_all($this->regexDate, $this->html, $date);
      return $date[0][0];
   }

   public function getContent()
   {
      preg_match_all($this->regexContent, $this->html, $content);
      return $content[0][0];
   }

   public function getData()
   {
      $title = $this->getTitle();
      $content = $this->getContent();
      $date = $this->getDate();
      $data = new InsertDataController();
      $data->addToTheDatabase($title, $content, $date);
   }
}
