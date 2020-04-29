<?php

use PHPUnit\Framework\TestCase;
use App\Curl\Curl;

class CurlTest extends TestCase
{

    public function urlProvider()
    {
        return array(
            array('https://dantri.com.vn/phap-luat/khoi-to-bat-tam-giam-hang-loat-can-bo-so-y-te-dak-lak-20200428083148549.htm'),
            array('https://vietnamnet.vn/vn/kinh-doanh/tai-chinh/cho-vay-ho-tro-no-xau-cam-bay-chet-nguoi-636225.html'),
            array('https://vnexpress.net/trump-so-tien-doi-trung-quoc-boi-thuong-covid-19-se-rat-lon-4091131.html')

        );
    }

    /**
     * @dataProvider urlProvider
     */

    public function testgetDataUrlIsNotNull($url)
    {

        $curl = new Curl($url);
        $this->assertNotNull($curl->getContentPage());
    }
}
