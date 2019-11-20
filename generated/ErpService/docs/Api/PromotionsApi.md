# HappyCog\OsborneApi\ErpService\PromotionsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**promotionsGet**](PromotionsApi.md#promotionsget) | **GET** /promotions | Get a list of Promotions
[**promotionsPost**](PromotionsApi.md#promotionspost) | **POST** /promotions | Create a new Promotion
[**promotionsPromotionIdCustomersCustomerIdDeletePost**](PromotionsApi.md#promotionspromotionidcustomerscustomeriddeletepost) | **POST** /promotions/{promotionId}/customers/{customerId}/delete | Remove a Customer association from a Promotion
[**promotionsPromotionIdCustomersGet**](PromotionsApi.md#promotionspromotionidcustomersget) | **GET** /promotions/{promotionId}/customers | Get a list of Customers associated with the Promotion
[**promotionsPromotionIdCustomersPost**](PromotionsApi.md#promotionspromotionidcustomerspost) | **POST** /promotions/{promotionId}/customers | Create a Customer association with a Promotion
[**promotionsPromotionIdDeleteDelete**](PromotionsApi.md#promotionspromotioniddeletedelete) | **DELETE** /promotions/{promotionId}/delete | Delete a Promotion
[**promotionsPromotionIdGet**](PromotionsApi.md#promotionspromotionidget) | **GET** /promotions/{promotionId} | Get info about a Promotion
[**promotionsPromotionIdProductsGet**](PromotionsApi.md#promotionspromotionidproductsget) | **GET** /promotions/{promotionId}/products | Get a list of Products for a Promotion
[**promotionsPromotionIdProductsPost**](PromotionsApi.md#promotionspromotionidproductspost) | **POST** /promotions/{promotionId}/products | Create a new Product for a Promotion
[**promotionsPromotionIdProductsPromotionProductIdDeleteDelete**](PromotionsApi.md#promotionspromotionidproductspromotionproductiddeletedelete) | **DELETE** /promotions/{promotionId}/products/{promotionProductId}/delete | Delete a Product for a Promotion
[**promotionsPromotionIdProductsPromotionProductIdGet**](PromotionsApi.md#promotionspromotionidproductspromotionproductidget) | **GET** /promotions/{promotionId}/products/{promotionProductId} | Get info about a Product for a Promotion
[**promotionsPromotionIdProductsPromotionProductIdPut**](PromotionsApi.md#promotionspromotionidproductspromotionproductidput) | **PUT** /promotions/{promotionId}/products/{promotionProductId} | Update a Product for a Promotion
[**promotionsPromotionIdPut**](PromotionsApi.md#promotionspromotionidput) | **PUT** /promotions/{promotionId} | Update a Promotion
[**promotionsPromotionIdShippingMethodsGet**](PromotionsApi.md#promotionspromotionidshippingmethodsget) | **GET** /promotions/{promotionId}/shipping-methods | Get a list of Shipping Methods associated with the Promotion
[**promotionsPromotionIdShippingMethodsPost**](PromotionsApi.md#promotionspromotionidshippingmethodspost) | **POST** /promotions/{promotionId}/shipping-methods | Create a Shipping Method association with a Promotion
[**promotionsPromotionIdShippingMethodsShippingMethodIdDeletePost**](PromotionsApi.md#promotionspromotionidshippingmethodsshippingmethodiddeletepost) | **POST** /promotions/{promotionId}/shipping-methods/{shippingMethodId}/delete | Remove a Shipping Method association from a Promotion

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

# **promotionsPost**
> \HappyCog\OsborneApi\ErpService\Model\Promotion promotionsPost($body)

Create a new Promotion

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
$body = new \HappyCog\OsborneApi\ErpService\Model\Promotion(); // \HappyCog\OsborneApi\ErpService\Model\Promotion | 

try {
    $result = $apiInstance->promotionsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->promotionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\Promotion**](../Model/Promotion.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Promotion**](../Model/Promotion.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionsPromotionIdCustomersCustomerIdDeletePost**
> object promotionsPromotionIdCustomersCustomerIdDeletePost($promotionId, $customerId)

Remove a Customer association from a Promotion

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
$customerId = 56; // int | Customer Id

try {
    $result = $apiInstance->promotionsPromotionIdCustomersCustomerIdDeletePost($promotionId, $customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->promotionsPromotionIdCustomersCustomerIdDeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **int**| Promotion Id |
 **customerId** | **int**| Customer Id |

### Return type

**object**

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

# **promotionsPromotionIdCustomersPost**
> \HappyCog\OsborneApi\ErpService\Model\PromotionCustomer promotionsPromotionIdCustomersPost($promotionId, $body)

Create a Customer association with a Promotion

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
$body = new \HappyCog\OsborneApi\ErpService\Model\PromotionCustomer(); // \HappyCog\OsborneApi\ErpService\Model\PromotionCustomer | 

try {
    $result = $apiInstance->promotionsPromotionIdCustomersPost($promotionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->promotionsPromotionIdCustomersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **int**| Promotion Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\PromotionCustomer**](../Model/PromotionCustomer.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\PromotionCustomer**](../Model/PromotionCustomer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionsPromotionIdDeleteDelete**
> object promotionsPromotionIdDeleteDelete($promotionId)

Delete a Promotion

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
    $result = $apiInstance->promotionsPromotionIdDeleteDelete($promotionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->promotionsPromotionIdDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **int**| Promotion Id |

### Return type

**object**

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

Get a list of Products for a Promotion

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

# **promotionsPromotionIdProductsPost**
> \HappyCog\OsborneApi\ErpService\Model\PromotionProduct promotionsPromotionIdProductsPost($promotionId, $body)

Create a new Product for a Promotion

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
$body = new \HappyCog\OsborneApi\ErpService\Model\PromotionProduct(); // \HappyCog\OsborneApi\ErpService\Model\PromotionProduct | 

try {
    $result = $apiInstance->promotionsPromotionIdProductsPost($promotionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->promotionsPromotionIdProductsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **int**| Promotion Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\PromotionProduct**](../Model/PromotionProduct.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\PromotionProduct**](../Model/PromotionProduct.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionsPromotionIdProductsPromotionProductIdDeleteDelete**
> object promotionsPromotionIdProductsPromotionProductIdDeleteDelete($promotionId, $promotionProductId)

Delete a Product for a Promotion

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
    $result = $apiInstance->promotionsPromotionIdProductsPromotionProductIdDeleteDelete($promotionId, $promotionProductId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->promotionsPromotionIdProductsPromotionProductIdDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **int**| Promotion Id |
 **promotionProductId** | **int**| Promotion Product Id |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionsPromotionIdProductsPromotionProductIdGet**
> \HappyCog\OsborneApi\ErpService\Model\PromotionProduct promotionsPromotionIdProductsPromotionProductIdGet($promotionId, $promotionProductId)

Get info about a Product for a Promotion

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

# **promotionsPromotionIdProductsPromotionProductIdPut**
> \HappyCog\OsborneApi\ErpService\Model\PromotionProduct promotionsPromotionIdProductsPromotionProductIdPut($promotionId, $promotionProductId, $body)

Update a Product for a Promotion

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
$body = new \HappyCog\OsborneApi\ErpService\Model\PromotionProduct(); // \HappyCog\OsborneApi\ErpService\Model\PromotionProduct | 

try {
    $result = $apiInstance->promotionsPromotionIdProductsPromotionProductIdPut($promotionId, $promotionProductId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->promotionsPromotionIdProductsPromotionProductIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **int**| Promotion Id |
 **promotionProductId** | **int**| Promotion Product Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\PromotionProduct**](../Model/PromotionProduct.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\PromotionProduct**](../Model/PromotionProduct.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionsPromotionIdPut**
> \HappyCog\OsborneApi\ErpService\Model\Promotion promotionsPromotionIdPut($promotionId, $body)

Update a Promotion

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
$body = new \HappyCog\OsborneApi\ErpService\Model\Promotion(); // \HappyCog\OsborneApi\ErpService\Model\Promotion | 

try {
    $result = $apiInstance->promotionsPromotionIdPut($promotionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->promotionsPromotionIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **int**| Promotion Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\Promotion**](../Model/Promotion.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Promotion**](../Model/Promotion.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionsPromotionIdShippingMethodsGet**
> \HappyCog\OsborneApi\ErpService\Model\PromotionShippingMethod[] promotionsPromotionIdShippingMethodsGet($promotionId)

Get a list of Shipping Methods associated with the Promotion

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

# **promotionsPromotionIdShippingMethodsPost**
> \HappyCog\OsborneApi\ErpService\Model\PromotionShippingMethod promotionsPromotionIdShippingMethodsPost($promotionId, $body)

Create a Shipping Method association with a Promotion

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
$body = new \HappyCog\OsborneApi\ErpService\Model\PromotionShippingMethod(); // \HappyCog\OsborneApi\ErpService\Model\PromotionShippingMethod | 

try {
    $result = $apiInstance->promotionsPromotionIdShippingMethodsPost($promotionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->promotionsPromotionIdShippingMethodsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **int**| Promotion Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\PromotionShippingMethod**](../Model/PromotionShippingMethod.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\PromotionShippingMethod**](../Model/PromotionShippingMethod.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promotionsPromotionIdShippingMethodsShippingMethodIdDeletePost**
> object promotionsPromotionIdShippingMethodsShippingMethodIdDeletePost($promotionId, $shippingMethodId)

Remove a Shipping Method association from a Promotion

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
$shippingMethodId = 56; // int | Shipping Method Id

try {
    $result = $apiInstance->promotionsPromotionIdShippingMethodsShippingMethodIdDeletePost($promotionId, $shippingMethodId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->promotionsPromotionIdShippingMethodsShippingMethodIdDeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **int**| Promotion Id |
 **shippingMethodId** | **int**| Shipping Method Id |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

