<?php

namespace App\Crawler;

class PageFactory extends AbstractPageFactory
{

    //Simple Factory
    // public static function makeObject($url)
    // {
    //     if (strlen(strstr($url, 'vietnamnet')) > 0) {
    //         return new Vietnamnet($url);

    //     } else if (strlen(strstr($url, 'dantri')) > 0) {
    //         return new Dantri($url);

    //     } else if (strlen(strstr($url, 'vnexpress')) > 0) {
    //         return new Vnexpress($url);

    //     } else return null;
    // }

    //Abstract Factory
    public function getPage($url)
    {
        if (strlen(strstr($url, 'vietnamnet')) > 0) {
            return new Vietnamnet($url);
        } else if (strlen(strstr($url, 'dantri')) > 0) {
            return new Dantri($url);
        } else if (strlen(strstr($url, 'vnexpress')) > 0) {
            return new Vnexpress($url);
        } else return null;
    }
}
