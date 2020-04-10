<?php

namespace Controllers;
use core\Controller;

class Vnexpress extends Page {

    public $regexTitle = "/<a data-medium=\"Item[^>]*>(.*?)<\/a>/";
    public $regexContent = "/<div id=\"ArticleContent\" class=\"ArticleContent\">(.*?)<div class=\"inner-article\">/";
    public $regexDate = "/<span class=\"time left\">(.*?)<\/span>/";
    public $regexLink = "/<p class=\"Normal\">\n?(.*?)<\/p>/";

      

 }