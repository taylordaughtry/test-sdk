# HappyCog\OsborneApi\ErpService\PromotionsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**promotionsGet**](PromotionsApi.md#promotionsGet) | **GET** /promotions | Get a list of Promotions
[**promotionsPromotionIdCustomersGet**](PromotionsApi.md#promotionsPromotionIdCustomersGet) | **GET** /promotions/{promotionId}/customers | Get a list of Customers associated with the Promotion
[**promotionsPromotionIdGet**](PromotionsApi.md#promotionsPromotionIdGet) | **GET** /promotions/{promotionId} | Get info about a Promotion
[**promotionsPromotionIdProductsGet**](PromotionsApi.md#promotionsPromotionIdProductsGet) | **GET** /promotions/{promotionId}/products | Used for initial import only  Get a list of Products for a Promotion
[**promotionsPromotionIdProductsPromotionProductIdGet**](PromotionsApi.md#promotionsPromotionIdProductsPromotionProductIdGet) | **GET** /promotions/{promotionId}/products/{promotionProductId} | Used for initial import only  Get info about a Product for a Promotion
[**promotionsPromotionIdShippingMethodsGet**](PromotionsApi.md#promotionsPromotionIdShippingMethodsGet) | **GET** /promotions/{promotionId}/shipping-methods | Used for initial import only  Get a list of Shipping Methods associated with the Promotion


# **promotionsGet**
> \HappyCog\OsborneApi\ErpService\Model\Promotion[] promotionsGet()

Get a list of Promotions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->promotionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->promotionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Promotion[]**](../Model/Promotion.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionsPromotionIdCustomersGet**
> \HappyCog\OsborneApi\ErpService\Model\PromotionCustomer[] promotionsPromotionIdCustomersGet($promotionId)

Get a list of Customers associated with the Promotion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionId = 56; // int | Promotion Id

try {
    $result = $apiInstance->promotionsPromotionIdCustomersGet($promotionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->promotionsPromotionIdCustomersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **int**| Promotion Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\PromotionCustomer[]**](../Model/PromotionCustomer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionsPromotionIdGet**
> \HappyCog\OsborneApi\ErpService\Model\Promotion promotionsPromotionIdGet($promotionId)

Get info about a Promotion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionId = 56; // int | Promotion Id

try {
    $result = $apiInstance->promotionsPromotionIdGet($promotionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->promotionsPromotionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **int**| Promotion Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Promotion**](../Model/Promotion.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionsPromotionIdProductsGet**
> \HappyCog\OsborneApi\ErpService\Model\PromotionProduct[] promotionsPromotionIdProductsGet($promotionId)

Used for initial import only  Get a list of Products for a Promotion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionId = 56; // int | Promotion Id

try {
    $result = $apiInstance->promotionsPromotionIdProductsGet($promotionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->promotionsPromotionIdProductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **int**| Promotion Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\PromotionProduct[]**](../Model/PromotionProduct.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionsPromotionIdProductsPromotionProductIdGet**
> \HappyCog\OsborneApi\ErpService\Model\PromotionProduct promotionsPromotionIdProductsPromotionProductIdGet($promotionId, $promotionProductId)

Used for initial import only  Get info about a Product for a Promotion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionId = 56; // int | Promotion Id
$promotionProductId = 56; // int | Promotion Product Id

try {
    $result = $apiInstance->promotionsPromotionIdProductsPromotionProductIdGet($promotionId, $promotionProductId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->promotionsPromotionIdProductsPromotionProductIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **int**| Promotion Id |
 **promotionProductId** | **int**| Promotion Product Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\PromotionProduct**](../Model/PromotionProduct.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionsPromotionIdShippingMethodsGet**
> \HappyCog\OsborneApi\ErpService\Model\PromotionShippingMethod[] promotionsPromotionIdShippingMethodsGet($promotionId)

Used for initial import only  Get a list of Shipping Methods associated with the Promotion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionId = 56; // int | Promotion Id

try {
    $result = $apiInstance->promotionsPromotionIdShippingMethodsGet($promotionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->promotionsPromotionIdShippingMethodsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **int**| Promotion Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\PromotionShippingMethod[]**](../Model/PromotionShippingMethod.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

