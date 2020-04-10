<?php

namespace App\Crawler;

class Dantri extends Page implements CrawlerInterface {
   
   public $regexTitle = '/<h1 class=\"fon31 mgb15\">(.*?)<\/h1>/ms';
    public $regexContent = '/<div id=\"divNewsContent\".*?>(.*?)<style>/ms';
    public $regexDate = '/<span class=\"fr fon7 mr2 tt-capitalize\">(.*?)<\/span>/ms';

   
}