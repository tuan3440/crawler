<?php

namespace App\Crawler;

class PageFactory extends AbstractPageFactory
{

    protected $url; 

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getPage()
    {
        if (strlen(strstr($this->url, 'vietnamnet')) > 0) {
            return new Vietnamnet($this->url);
        } else if (strlen(strstr($this->url, 'dantri')) > 0) {
            return new Dantri($this->url);
        } else if (strlen(strstr($this->url, 'vnexpress')) > 0) {
            return new Vnexpress($this->url);
        } else return null;
    }
}
