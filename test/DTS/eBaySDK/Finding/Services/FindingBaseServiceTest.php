<?php
use DTS\eBaySDK\Finding\Services\FindingBaseService;
use DTS\eBaySDK\Mocks\HttpClient;

class FindingBaseServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->obj = new FindingBaseService(new HttpClient());
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
