<?php
namespace DTS\eBaySDK\Finding\Mocks;

class Service extends \DTS\eBaySDK\Finding\Services\FindingBaseService
{
    public function __construct(\DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient, $config = array())
    {
        parent::__construct($httpClient, $config);
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
