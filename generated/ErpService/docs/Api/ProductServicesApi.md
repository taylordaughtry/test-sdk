# HappyCog\OsborneApi\ErpService\ProductServicesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productServicesGet**](ProductServicesApi.md#productServicesGet) | **GET** /product-services | Get a list of Product Services
[**productServicesProductServiceIdDisclaimersGet**](ProductServicesApi.md#productServicesProductServiceIdDisclaimersGet) | **GET** /product-services/{productServiceId}/disclaimers | Get a list of Product Service Disclaimers
[**productServicesProductServiceIdGet**](ProductServicesApi.md#productServicesProductServiceIdGet) | **GET** /product-services/{productServiceId} | Get info about a Product Service
[**productServicesProductServiceIdMaterialsGet**](ProductServicesApi.md#productServicesProductServiceIdMaterialsGet) | **GET** /product-services/{productServiceId}/materials | Get a list of Materials that a Product Service can be applied to


# **productServicesGet**
> \HappyCog\OsborneApi\ErpService\Model\ProductService[] productServicesGet()

Get a list of Product Services

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ProductServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->productServicesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductServicesApi->productServicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\ProductService[]**](../Model/ProductService.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productServicesProductServiceIdDisclaimersGet**
> \HappyCog\OsborneApi\ErpService\Model\Disclaimer[] productServicesProductServiceIdDisclaimersGet($productServiceId)

Get a list of Product Service Disclaimers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ProductServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productServiceId = 56; // int | Product Service Id

try {
    $result = $apiInstance->productServicesProductServiceIdDisclaimersGet($productServiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductServicesApi->productServicesProductServiceIdDisclaimersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productServiceId** | **int**| Product Service Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Disclaimer[]**](../Model/Disclaimer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productServicesProductServiceIdGet**
> \HappyCog\OsborneApi\ErpService\Model\ProductService productServicesProductServiceIdGet($productServiceId)

Get info about a Product Service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ProductServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productServiceId = 56; // int | Product Service Id

try {
    $result = $apiInstance->productServicesProductServiceIdGet($productServiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductServicesApi->productServicesProductServiceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productServiceId** | **int**| Product Service Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\ProductService**](../Model/ProductService.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productServicesProductServiceIdMaterialsGet**
> \HappyCog\OsborneApi\ErpService\Model\Material[] productServicesProductServiceIdMaterialsGet($productServiceId)

Get a list of Materials that a Product Service can be applied to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ProductServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productServiceId = 56; // int | Product Service Id

try {
    $result = $apiInstance->productServicesProductServiceIdMaterialsGet($productServiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductServicesApi->productServicesProductServiceIdMaterialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productServiceId** | **int**| Product Service Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Material[]**](../Model/Material.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

