<?php

use DTS\eBaySDK\Finding\Services\FindingService;
use DTS\eBaySDK\HttpClient\HttpClient;

class FindingServiceTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FindingService(new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Services\FindingService', $this->obj);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Services\FindingBaseService', $this->obj);
    }
}
