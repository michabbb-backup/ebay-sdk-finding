<?php
namespace DTS\eBaySDK\Finding\Mocks;

class Service extends \DTS\eBaySDK\Finding\Services\FindingBaseService
{
    public function __construct($config = array(), \DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient = null)
    {
        parent::__construct($config, $httpClient);
    }

    public function testOperation()
    {
        return $this->callOperation(
            'testOperation',
            '',
            '\DTS\eBaySDK\Mocks\ComplexClass'
        );
    }
}
