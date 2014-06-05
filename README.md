# EBAY-SDK-FINDING

[![Build Status](https://travis-ci.org/davidtsadler/ebay-sdk-finding.png?branch=develop)](https://travis-ci.org/davidtsadler/ebay-sdk-finding)

An eBay SDK for PHP. Use the eBay Finding API in your PHP projects.

More information can be found in the [wiki](https://github.com/davidtsadler/ebay-sdk-finding/wiki).

## Requirements

- PHP 5.3 or greater.
- cUrl extension enabled.
- [dts/ebay-sdk](https://github.com/davidtsadler/ebay-sdk).

## Installation

This package can be installed with [Composer](http://getcomposer.org/).

1. Add "dts/ebay-sdk-finding" as a dependency in your project's composer.json file.

   ```javascript
   {
       "require": {
           "dts/ebay-sdk-finding": "~0.0.0"
       }
   }
   ```

1. Install Composer.

   ```
   curl -sS https://getcomposer.org/installer | php
   ```

1. Install the dependencies.

   ```
   php composer.phar install
   ```

1. Require Composer's autoloader by adding the following line to your code.

   ```php
   require 'vendor/autoload.php';
   ```

## Example

#### Keyword search

```php
<?php

require 'vendor/autoload.php';

use \DTS\eBaySDK\Finding\Services\FindingService;
use \DTS\eBaySDK\Finding\Types\FindItemsByKeywordsRequest;
use \DTS\eBaySDK\Finding\Types\PaginationInput;
use \DTS\eBaySDK\Finding\Types\ItemFilter;
use \DTS\eBaySDK\Constants\GlobalIds;

// Instantiate an eBay service.
$service = new FindingService(array(
    'appId' => <enter your eBay App Id>,
    'globalId' => GlobalIds::US
));

// Create the API request object.
$request = new FindItemsByKeywordsRequest();

$request->keywords = 'Harry Potter';

// Ask for the first 25 items.
$request->paginationInput = new PaginationInput();
$request->paginationInput->entriesPerPage = 25;
$request->paginationInput->pageNumber = 1;

// Filter results to just fixed price items that are no more than $10.
$filter = new ItemFilter();
$filter->name = 'ListingType';
$filter->value[] = 'FixedPrice';
$request->itemFilter[] = $filter;

$filter = new ItemFilter();
$filter->name = 'MaxPrice';
$filter->value[] = '10.00';
$request->itemFilter[] = $filter;

// Sort results from high to low price.
$request->sortOrder = 'CurrentPriceHighest';

// Send the request.
$response = $service->findItemsByKeywords($request);

// Output the response from the API.
foreach ($response->searchResult->item as $item) {
    printf("(%s) %s : %.2f\n", $item->itemId, $item->title, $item->sellingStatus->currentPrice->value);
}
```

## SDK and eBay API versions.

As eBay release new versions of their API the corresponding SDK version will be shown [here](https://github.com/davidtsadler/ebay-sdk/wiki/SDK-and-eBay-API-Versions#wiki-finding).
