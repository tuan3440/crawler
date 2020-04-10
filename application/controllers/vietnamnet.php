<?php

namespace Controllers;
use core\Controller;

class Vietnamnet extends Page {

    public $regexTitle = "/<h3><a[^>]*>(.*?)<\/a><\/h3>/";
    public $regexContent = "/<div id=\"ArticleContent\" class=\"ArticleContent\">(.*?)<div class=\"inner-article\">/";
    public $regexDate = "/<p class=\"time-zone\">(.*?)+(\n|\r)?\s+<\/p>/";
    public $regexLink = "/<h3><a href=\"(.*?)\"[^>]*>(.*?)<\/a><\/h3>/";



 }