# HappyCog\OsborneApi\ErpService\MaterialsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**materialsGet**](MaterialsApi.md#materialsget) | **GET** /materials | Get a list of Materials
[**materialsMaterialIdDisclaimersGet**](MaterialsApi.md#materialsmaterialiddisclaimersget) | **GET** /materials/{materialId}/disclaimers | Get a list of Material Disclaimers
[**materialsMaterialIdGet**](MaterialsApi.md#materialsmaterialidget) | **GET** /materials/{materialId} | Get info about a Material
[**materialsMaterialIdImageGet**](MaterialsApi.md#materialsmaterialidimageget) | **GET** /materials/{materialId}/image | Get a Material Image

# **materialsGet**
> \HappyCog\OsborneApi\ErpService\Model\Material[] materialsGet()

Get a list of Materials

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\MaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->materialsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialsApi->materialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Material[]**](../Model/Material.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **materialsMaterialIdDisclaimersGet**
> \HappyCog\OsborneApi\ErpService\Model\Disclaimer[] materialsMaterialIdDisclaimersGet($materialId)

Get a list of Material Disclaimers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\MaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$materialId = 56; // int | Material Id

try {
    $result = $apiInstance->materialsMaterialIdDisclaimersGet($materialId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialsApi->materialsMaterialIdDisclaimersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **materialId** | **int**| Material Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Disclaimer[]**](../Model/Disclaimer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **materialsMaterialIdGet**
> \HappyCog\OsborneApi\ErpService\Model\Material materialsMaterialIdGet($materialId)

Get info about a Material

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\MaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$materialId = 56; // int | Material Id

try {
    $result = $apiInstance->materialsMaterialIdGet($materialId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialsApi->materialsMaterialIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **materialId** | **int**| Material Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Material**](../Model/Material.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **materialsMaterialIdImageGet**
> \HappyCog\OsborneApi\ErpService\Model\MaterialImage materialsMaterialIdImageGet($materialId)

Get a Material Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\MaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$materialId = 56; // int | Material Id

try {
    $result = $apiInstance->materialsMaterialIdImageGet($materialId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialsApi->materialsMaterialIdImageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **materialId** | **int**| Material Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\MaterialImage**](../Model/MaterialImage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

