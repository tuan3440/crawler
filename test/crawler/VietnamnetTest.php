<?php

use PHPUnit\Framework\TestCase;
use App\Crawler\Vietnamnet;

class VietnamnetTest extends TestCase
{
    public $vietnamnet;
    public $url = "https://vietnamnet.vn/vn/kinh-doanh/tai-chinh/cho-vay-ho-tro-no-xau-cam-bay-chet-nguoi-636225.html";
    public function setUp(): void
    {
        $this->vietnamnet = new Vietnamnet($this->url);
    }
    public function testGetTitleVietnamnetIsNotNull()
    {
        $this->assertNotNull($this->vietnamnet->getTitle());
    }

    public function testGetContentVietnamnetIsNotNull()
    {
        $this->assertNotNull($this->vietnamnet->getContent());
    }

    public function testGetDateVietnamnetIsNotNull()
    {
        $this->assertNotNull($this->vietnamnet->getDate());
    }
}
