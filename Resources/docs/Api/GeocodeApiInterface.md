# GoogleApi\Server\Api\GeocodeApiInterface

All URIs are relative to *https://maps.googleapis.com/maps/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInformation**](GeocodeApiInterface.md#getInformation) | **GET** /geocode/json | Gets Geo-Information about the specified place


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.geocode:
        class: Acme\MyBundle\Api\GeocodeApi
        tags:
            - { name: "google_api.api", api: "geocode" }
    # ...
```

## **getInformation**
> GoogleApi\Server\Model\InlineResponse200 getInformation($address, $latlng, $language, $key)

Gets Geo-Information about the specified place

Converts address to latlng and vice versa

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/GeocodeApiInterface.php

namespace Acme\MyBundle\Api;

use GoogleApi\Server\Api\GeocodeApiInterface;

class GeocodeApi implements GeocodeApiInterface
{

    // ...

    /**
     * Implementation of GeocodeApiInterface#getInformation
     */
    public function getInformation($address = null, $latlng = null, $language = null, $key = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Address to convert into the latlng | [optional]
 **latlng** | **string**| LatLng to convert into the address | [optional]
 **language** | **string**| Language to return the results in | [optional]
 **key** | **string**| Security key to use for authorization | [optional]

### Return type

[**GoogleApi\Server\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

