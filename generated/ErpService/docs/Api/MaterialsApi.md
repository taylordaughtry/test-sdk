# HappyCog\OsborneApi\ErpService\MaterialsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**materialsGet**](MaterialsApi.md#materialsGet) | **GET** /materials | Get a list of Materials
[**materialsMaterialIdDisclaimersGet**](MaterialsApi.md#materialsMaterialIdDisclaimersGet) | **GET** /materials/{materialId}/disclaimers | Get a list of Material Disclaimers
[**materialsMaterialIdGet**](MaterialsApi.md#materialsMaterialIdGet) | **GET** /materials/{materialId} | Get info about a Material
[**materialsMaterialIdImagesGet**](MaterialsApi.md#materialsMaterialIdImagesGet) | **GET** /materials/{materialId}/images | Get a list of Material Images
[**materialsMaterialIdImagesMaterialImageIdGet**](MaterialsApi.md#materialsMaterialIdImagesMaterialImageIdGet) | **GET** /materials/{materialId}/images/{materialImageId} | Get info about a Material Image


# **materialsGet**
> \HappyCog\OsborneApi\ErpService\Model\Material[] materialsGet()

Get a list of Materials

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


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

# **materialsMaterialIdImagesGet**
> \HappyCog\OsborneApi\ErpService\Model\MaterialImage[] materialsMaterialIdImagesGet($materialId)

Get a list of Material Images

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\MaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$materialId = 56; // int | Material Id

try {
    $result = $apiInstance->materialsMaterialIdImagesGet($materialId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialsApi->materialsMaterialIdImagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **materialId** | **int**| Material Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\MaterialImage[]**](../Model/MaterialImage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **materialsMaterialIdImagesMaterialImageIdGet**
> \HappyCog\OsborneApi\ErpService\Model\MaterialImage materialsMaterialIdImagesMaterialImageIdGet($materialId, $materialImageId)

Get info about a Material Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\MaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$materialId = 56; // int | Material Id
$materialImageId = 56; // int | Material Image Id

try {
    $result = $apiInstance->materialsMaterialIdImagesMaterialImageIdGet($materialId, $materialImageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialsApi->materialsMaterialIdImagesMaterialImageIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **materialId** | **int**| Material Id |
 **materialImageId** | **int**| Material Image Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\MaterialImage**](../Model/MaterialImage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

