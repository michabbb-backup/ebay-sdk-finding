<?php

use DTS\eBaySDK\Finding\Services\FindingBaseService;

class FindingBaseServiceTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FindingBaseService();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Services\FindingBaseService', $this->obj);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->obj);
    }
}
