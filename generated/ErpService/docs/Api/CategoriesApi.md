# HappyCog\OsborneApi\ErpService\CategoriesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**categoriesCategoryIdGet**](CategoriesApi.md#categoriescategoryidget) | **GET** /categories/{categoryId} | Get info about a Category
[**categoriesCategoryIdImageGet**](CategoriesApi.md#categoriescategoryidimageget) | **GET** /categories/{categoryId}/image | Get a Category Image
[**categoriesGet**](CategoriesApi.md#categoriesget) | **GET** /categories | Get a list of top level Categories

# **categoriesCategoryIdGet**
> \HappyCog\OsborneApi\ErpService\Model\Category categoriesCategoryIdGet($categoryId)

Get info about a Category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryId = 56; // int | Category Id

try {
    $result = $apiInstance->categoriesCategoryIdGet($categoryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesCategoryIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **int**| Category Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Category**](../Model/Category.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoriesCategoryIdImageGet**
> \HappyCog\OsborneApi\ErpService\Model\CategoryImage categoriesCategoryIdImageGet($categoryId)

Get a Category Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryId = 56; // int | Category Id

try {
    $result = $apiInstance->categoriesCategoryIdImageGet($categoryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesCategoryIdImageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **int**| Category Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\CategoryImage**](../Model/CategoryImage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoriesGet**
> \HappyCog\OsborneApi\ErpService\Model\Category[] categoriesGet()

Get a list of top level Categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->categoriesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Category[]**](../Model/Category.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

