<?php

use PHPUnit\Framework\TestCase;
use App\Crawler\Dantri;

class DantriTest extends TestCase
{
    public $dantri;
    public $url = "https://dantri.com.vn/phap-luat/khoi-to-bat-tam-giam-hang-loat-can-bo-so-y-te-dak-lak-20200428083148549.htm";
    public function setUp(): void
    {
        $this->dantri = new Dantri($this->url);
    }
    public function testGetTitleDantriIsNotNull()
    {
        $this->assertNotNull($this->dantri->getTitle());
    }

    public function testGetContentDantriIsNotNull()
    {
        $this->assertNotNull($this->dantri->getContent());
    }

    public function testGetDateDantriIsNotNull()
    {
        $this->assertNotNull($this->dantri->getDate());
    }
}
