<?php

namespace App\Crawler;

class Vnexpress extends Page implements CrawlerInterface
{
    public $regexTitle = '/<h1 class="title.*?">(.*?)<\/h1>/m';
    public $regexContent = '/<div class="sidebar-1".*?description">(.*?)<div class="sidebar-2">/ms';
    public $regexDate = '/<span class="date">(.*?)<\/span>/ms';
}
