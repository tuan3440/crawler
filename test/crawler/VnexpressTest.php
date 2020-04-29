<?php

use PHPUnit\Framework\TestCase;
use App\Crawler\Vnexpress;

class VnexpressTest extends TestCase
{
    public $vnexpress;
    public $url = "https://vnexpress.net/trump-so-tien-doi-trung-quoc-boi-thuong-covid-19-se-rat-lon-4091131.html";
    public function setUp(): void
    {
        $this->vnexpress = new Vnexpress($this->url);
    }
    public function testGetTitleVnexpressIsNotNull()
    {
        $this->assertNotNull($this->vnexpress->getTitle());
    }

    public function testGetContentVnexpressIsNotNull()
    {
        $this->assertNotNull($this->vnexpress->getContent());
    }

    public function testGetDateVnexpressIsNotNull()
    {
        $this->assertNotNull($this->vnexpress->getDate());
    }
}
