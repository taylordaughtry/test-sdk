# HappyCog\OsborneApi\ErpService\CategoriesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**categoriesCategoryIdGet**](CategoriesApi.md#categoriesCategoryIdGet) | **GET** /categories/{categoryId} | Used for initial import only  Get info about a Category
[**categoriesCategoryIdImagesCategoryImageIdGet**](CategoriesApi.md#categoriesCategoryIdImagesCategoryImageIdGet) | **GET** /categories/{categoryId}/images/{categoryImageId} | Used for initial import only  Get info about a Category Image
[**categoriesCategoryIdImagesGet**](CategoriesApi.md#categoriesCategoryIdImagesGet) | **GET** /categories/{categoryId}/images | Used for initial import only  Get a list of Category Images
[**categoriesGet**](CategoriesApi.md#categoriesGet) | **GET** /categories | Used for initial import only  Get a list of top level Categories


# **categoriesCategoryIdGet**
> \HappyCog\OsborneApi\ErpService\Model\Category categoriesCategoryIdGet($categoryId)

Used for initial import only  Get info about a Category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


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

# **categoriesCategoryIdImagesCategoryImageIdGet**
> \HappyCog\OsborneApi\ErpService\Model\CategoryImage categoriesCategoryIdImagesCategoryImageIdGet($categoryId, $categoryImageId)

Used for initial import only  Get info about a Category Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryId = 56; // int | Category Id
$categoryImageId = 56; // int | Category Image Id

try {
    $result = $apiInstance->categoriesCategoryIdImagesCategoryImageIdGet($categoryId, $categoryImageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesCategoryIdImagesCategoryImageIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **int**| Category Id |
 **categoryImageId** | **int**| Category Image Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\CategoryImage**](../Model/CategoryImage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoriesCategoryIdImagesGet**
> \HappyCog\OsborneApi\ErpService\Model\CategoryImage[] categoriesCategoryIdImagesGet($categoryId)

Used for initial import only  Get a list of Category Images

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryId = 56; // int | Category Id

try {
    $result = $apiInstance->categoriesCategoryIdImagesGet($categoryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesCategoryIdImagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **int**| Category Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\CategoryImage[]**](../Model/CategoryImage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoriesGet**
> \HappyCog\OsborneApi\ErpService\Model\Category[] categoriesGet()

Used for initial import only  Get a list of top level Categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


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

