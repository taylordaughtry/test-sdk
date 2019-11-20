# HappyCog\OsborneApi\ErpService\OrderServicesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderServicesGet**](OrderServicesApi.md#orderservicesget) | **GET** /order-services | Get a list of Buying Groups
[**orderServicesOrderServiceIdDisclaimersGet**](OrderServicesApi.md#orderservicesorderserviceiddisclaimersget) | **GET** /order-services/{orderServiceId}/disclaimers | Get a list of Order Service Disclaimers
[**orderServicesOrderServiceIdExclusiveGet**](OrderServicesApi.md#orderservicesorderserviceidexclusiveget) | **GET** /order-services/{orderServiceId}/exclusive | Get a list of Mutually Exclusive Order Services to an Order Service
[**orderServicesOrderServiceIdGet**](OrderServicesApi.md#orderservicesorderserviceidget) | **GET** /order-services/{orderServiceId} | Get info about a Buying Group

# **orderServicesGet**
> \HappyCog\OsborneApi\ErpService\Model\OrderService[] orderServicesGet()

Get a list of Buying Groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrderServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->orderServicesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderServicesApi->orderServicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\OrderService[]**](../Model/OrderService.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderServicesOrderServiceIdDisclaimersGet**
> \HappyCog\OsborneApi\ErpService\Model\Disclaimer[] orderServicesOrderServiceIdDisclaimersGet($orderServiceId)

Get a list of Order Service Disclaimers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrderServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderServiceId = 56; // int | Order Service Id

try {
    $result = $apiInstance->orderServicesOrderServiceIdDisclaimersGet($orderServiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderServicesApi->orderServicesOrderServiceIdDisclaimersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderServiceId** | **int**| Order Service Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Disclaimer[]**](../Model/Disclaimer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderServicesOrderServiceIdExclusiveGet**
> \HappyCog\OsborneApi\ErpService\Model\OrderService[] orderServicesOrderServiceIdExclusiveGet($orderServiceId)

Get a list of Mutually Exclusive Order Services to an Order Service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrderServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderServiceId = 56; // int | Order Service Id

try {
    $result = $apiInstance->orderServicesOrderServiceIdExclusiveGet($orderServiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderServicesApi->orderServicesOrderServiceIdExclusiveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderServiceId** | **int**| Order Service Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\OrderService[]**](../Model/OrderService.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderServicesOrderServiceIdGet**
> \HappyCog\OsborneApi\ErpService\Model\OrderService orderServicesOrderServiceIdGet($orderServiceId)

Get info about a Buying Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrderServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderServiceId = 56; // int | Order Service Id

try {
    $result = $apiInstance->orderServicesOrderServiceIdGet($orderServiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderServicesApi->orderServicesOrderServiceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderServiceId** | **int**| Order Service Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\OrderService**](../Model/OrderService.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

