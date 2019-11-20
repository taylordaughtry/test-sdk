# HappyCog\OsborneApi\ErpService\ShippingCarriersApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shippingCarriersGet**](ShippingCarriersApi.md#shippingcarriersget) | **GET** /shipping-carriers | Get a list of Shipping Carriers
[**shippingCarriersShippingCarrierIdGet**](ShippingCarriersApi.md#shippingcarriersshippingcarrieridget) | **GET** /shipping-carriers/{shippingCarrierId} | Get info about a Shipping Carrier

# **shippingCarriersGet**
> \HappyCog\OsborneApi\ErpService\Model\ShippingCarrier[] shippingCarriersGet()

Get a list of Shipping Carriers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ShippingCarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->shippingCarriersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingCarriersApi->shippingCarriersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\ShippingCarrier[]**](../Model/ShippingCarrier.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shippingCarriersShippingCarrierIdGet**
> \HappyCog\OsborneApi\ErpService\Model\ShippingCarrier shippingCarriersShippingCarrierIdGet($shippingCarrierId)

Get info about a Shipping Carrier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ShippingCarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shippingCarrierId = 56; // int | Shipping Carrier Id

try {
    $result = $apiInstance->shippingCarriersShippingCarrierIdGet($shippingCarrierId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingCarriersApi->shippingCarriersShippingCarrierIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shippingCarrierId** | **int**| Shipping Carrier Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\ShippingCarrier**](../Model/ShippingCarrier.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

