<?php

namespace App\Crawler;

class Vietnamnet extends Page implements CrawlerInterface
{
    public $regexTitle = '/<h1 class="title.*?>(.*?)<\/h1>/m';
    public $regexContent = '/<div id="ArticleContent" class="ArticleContent">(.*?)><div class="VnnAdsPos clearfix" data-pos="vt_article_bottom">/m';
    public $regexDate = '/<span class="ArticleDate  right">(.*?)<\/span>/ms';
}
