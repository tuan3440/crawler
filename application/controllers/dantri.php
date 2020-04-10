<?php

namespace Controllers;
class Dantri extends Page {
   
   public $regexTitle = "/<h2><a[^>]*>(.*?)<\/a><\/h2>/";
   public $regexContent = "/<div id=\"divNewsContent\" class=\"fon34 mt3 mr2 fon43 detail-content\">(.*?)<div id=\"div_tamlongnhanai\"><\/div>/s";
   public $regexDate = "/<span class=\"fr fon7 mr2 tt-capitalize\">(\n|\r)?\s+(.*?)(\n|\r)?\s+<\/span>/";
   public $regexLink = "/<h2><a[^>]*href=\"(.*?)\"[^>]*>(.*?)<\/a><\/h2>/";

   
}