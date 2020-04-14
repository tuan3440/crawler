<?php

namespace App\Crawler;

interface CrawlerInterface
{
    public function getTitle();
    public function getDate();
    public function getContent();
}
