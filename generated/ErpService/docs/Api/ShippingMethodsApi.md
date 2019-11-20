# HappyCog\OsborneApi\ErpService\ShippingMethodsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shippingMethodsGet**](ShippingMethodsApi.md#shippingmethodsget) | **GET** /shipping-methods | Get a list of available Shipping Methods
[**shippingMethodsShippingMethodIdGet**](ShippingMethodsApi.md#shippingmethodsshippingmethodidget) | **GET** /shipping-methods/{shippingMethodId} | Get info about a Shipping Method

# **shippingMethodsGet**
> \HappyCog\OsborneApi\ErpService\Model\ShippingMethod[] shippingMethodsGet()

Get a list of available Shipping Methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ShippingMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->shippingMethodsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingMethodsApi->shippingMethodsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\ShippingMethod[]**](../Model/ShippingMethod.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shippingMethodsShippingMethodIdGet**
> \HappyCog\OsborneApi\ErpService\Model\ShippingMethod shippingMethodsShippingMethodIdGet($shippingMethodId)

Get info about a Shipping Method

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ShippingMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shippingMethodId = 56; // int | Shipping Method Id

try {
    $result = $apiInstance->shippingMethodsShippingMethodIdGet($shippingMethodId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingMethodsApi->shippingMethodsShippingMethodIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shippingMethodId** | **int**| Shipping Method Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\ShippingMethod**](../Model/ShippingMethod.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

