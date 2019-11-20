# HappyCog\OsborneApi\ErpService\ProductsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productsGet**](ProductsApi.md#productsget) | **GET** /products | Get a list of all Products
[**productsProductIdCategoriesGet**](ProductsApi.md#productsproductidcategoriesget) | **GET** /products/{productId}/categories | Get a list of Categories that belong to a Product
[**productsProductIdCustomersGet**](ProductsApi.md#productsproductidcustomersget) | **GET** /products/{productId}/customers | Get a list of Customers that can order this Product
[**productsProductIdDisclaimersGet**](ProductsApi.md#productsproductiddisclaimersget) | **GET** /products/{productId}/disclaimers | Get a list of Product Disclaimers
[**productsProductIdDrawingsGet**](ProductsApi.md#productsproductiddrawingsget) | **GET** /products/{productId}/drawings | Get a list of Product Drawings
[**productsProductIdDrawingsProductDrawingIdGet**](ProductsApi.md#productsproductiddrawingsproductdrawingidget) | **GET** /products/{productId}/drawings/{productDrawingId} | Get info about a Product Drawing
[**productsProductIdGet**](ProductsApi.md#productsproductidget) | **GET** /products/{productId} | Get info about a Product
[**productsProductIdImageGet**](ProductsApi.md#productsproductidimageget) | **GET** /products/{productId}/image | Get a Product Image
[**productsProductIdMaterialsGet**](ProductsApi.md#productsproductidmaterialsget) | **GET** /products/{productId}/materials | Get a list of Materials related directly to a Product
[**productsProductIdMaterialsProductMaterialIdGet**](ProductsApi.md#productsproductidmaterialsproductmaterialidget) | **GET** /products/{productId}/materials/{productMaterialId} | Get info about a Product Material
[**productsProductIdMaterialsProductMaterialIdImageGet**](ProductsApi.md#productsproductidmaterialsproductmaterialidimageget) | **GET** /products/{productId}/materials/{productMaterialId}/image | Get a Product Material Image
[**productsProductIdMaterialsProductMaterialIdMaterialsGet**](ProductsApi.md#productsproductidmaterialsproductmaterialidmaterialsget) | **GET** /products/{productId}/materials/{productMaterialId}/materials | Get a list of Sub Materials related to a Product Material
[**productsProductIdPromotionsGet**](ProductsApi.md#productsproductidpromotionsget) | **GET** /products/{productId}/promotions | Get a list of Promotions for a Product
[**productsProductIdRelatedProductsGet**](ProductsApi.md#productsproductidrelatedproductsget) | **GET** /products/{productId}/related-products | Get a list of Products for a Product
[**productsProductIdServicesGet**](ProductsApi.md#productsproductidservicesget) | **GET** /products/{productId}/services | Get a list of Product Services
[**productsProductIdServicesProductServiceIdGet**](ProductsApi.md#productsproductidservicesproductserviceidget) | **GET** /products/{productId}/services/{productServiceId} | Get info about a Product Service

# **productsGet**
> \HappyCog\OsborneApi\ErpService\Model\Product[] productsGet()

Get a list of all Products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->productsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Product[]**](../Model/Product.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsProductIdCategoriesGet**
> \HappyCog\OsborneApi\ErpService\Model\ProductCategory[] productsProductIdCategoriesGet($productId)

Get a list of Categories that belong to a Product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productId = 56; // int | Product Id

try {
    $result = $apiInstance->productsProductIdCategoriesGet($productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsProductIdCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| Product Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\ProductCategory[]**](../Model/ProductCategory.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsProductIdCustomersGet**
> \HappyCog\OsborneApi\ErpService\Model\Customer[] productsProductIdCustomersGet($productId)

Get a list of Customers that can order this Product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productId = 56; // int | Product Id

try {
    $result = $apiInstance->productsProductIdCustomersGet($productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsProductIdCustomersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| Product Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Customer[]**](../Model/Customer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsProductIdDisclaimersGet**
> \HappyCog\OsborneApi\ErpService\Model\Disclaimer[] productsProductIdDisclaimersGet($productId)

Get a list of Product Disclaimers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productId = 56; // int | Product Id

try {
    $result = $apiInstance->productsProductIdDisclaimersGet($productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsProductIdDisclaimersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| Product Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Disclaimer[]**](../Model/Disclaimer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsProductIdDrawingsGet**
> \HappyCog\OsborneApi\ErpService\Model\ProductDrawing[] productsProductIdDrawingsGet($productId)

Get a list of Product Drawings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productId = 56; // int | Product Id

try {
    $result = $apiInstance->productsProductIdDrawingsGet($productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsProductIdDrawingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| Product Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\ProductDrawing[]**](../Model/ProductDrawing.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsProductIdDrawingsProductDrawingIdGet**
> \HappyCog\OsborneApi\ErpService\Model\ProductDrawing productsProductIdDrawingsProductDrawingIdGet($productId, $productDrawingId)

Get info about a Product Drawing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productId = 56; // int | Product Id
$productDrawingId = 56; // int | Product Drawing Id

try {
    $result = $apiInstance->productsProductIdDrawingsProductDrawingIdGet($productId, $productDrawingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsProductIdDrawingsProductDrawingIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| Product Id |
 **productDrawingId** | **int**| Product Drawing Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\ProductDrawing**](../Model/ProductDrawing.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsProductIdGet**
> \HappyCog\OsborneApi\ErpService\Model\Product productsProductIdGet($productId)

Get info about a Product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productId = 56; // int | Product Id

try {
    $result = $apiInstance->productsProductIdGet($productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsProductIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| Product Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Product**](../Model/Product.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsProductIdImageGet**
> \HappyCog\OsborneApi\ErpService\Model\ProductImage productsProductIdImageGet($productId)

Get a Product Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productId = 56; // int | Product Id

try {
    $result = $apiInstance->productsProductIdImageGet($productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsProductIdImageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| Product Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\ProductImage**](../Model/ProductImage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsProductIdMaterialsGet**
> \HappyCog\OsborneApi\ErpService\Model\ProductMaterial[] productsProductIdMaterialsGet($productId)

Get a list of Materials related directly to a Product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productId = 56; // int | Product Id

try {
    $result = $apiInstance->productsProductIdMaterialsGet($productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsProductIdMaterialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| Product Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\ProductMaterial[]**](../Model/ProductMaterial.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsProductIdMaterialsProductMaterialIdGet**
> \HappyCog\OsborneApi\ErpService\Model\ProductMaterial productsProductIdMaterialsProductMaterialIdGet($productId, $productMaterialId)

Get info about a Product Material

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productId = 56; // int | Product Id
$productMaterialId = 56; // int | Product Material Id

try {
    $result = $apiInstance->productsProductIdMaterialsProductMaterialIdGet($productId, $productMaterialId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsProductIdMaterialsProductMaterialIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| Product Id |
 **productMaterialId** | **int**| Product Material Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\ProductMaterial**](../Model/ProductMaterial.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsProductIdMaterialsProductMaterialIdImageGet**
> \HappyCog\OsborneApi\ErpService\Model\ProductMaterialImage productsProductIdMaterialsProductMaterialIdImageGet($productId, $productMaterialId)

Get a Product Material Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productId = 56; // int | Product Id
$productMaterialId = 56; // int | Product Material Id

try {
    $result = $apiInstance->productsProductIdMaterialsProductMaterialIdImageGet($productId, $productMaterialId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsProductIdMaterialsProductMaterialIdImageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| Product Id |
 **productMaterialId** | **int**| Product Material Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\ProductMaterialImage**](../Model/ProductMaterialImage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsProductIdMaterialsProductMaterialIdMaterialsGet**
> \HappyCog\OsborneApi\ErpService\Model\ProductMaterial[] productsProductIdMaterialsProductMaterialIdMaterialsGet($productId, $productMaterialId)

Get a list of Sub Materials related to a Product Material

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productId = 56; // int | Product Id
$productMaterialId = 56; // int | Product Material Id

try {
    $result = $apiInstance->productsProductIdMaterialsProductMaterialIdMaterialsGet($productId, $productMaterialId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsProductIdMaterialsProductMaterialIdMaterialsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| Product Id |
 **productMaterialId** | **int**| Product Material Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\ProductMaterial[]**](../Model/ProductMaterial.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsProductIdPromotionsGet**
> \HappyCog\OsborneApi\ErpService\Model\Promotion[] productsProductIdPromotionsGet($productId)

Get a list of Promotions for a Product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productId = 56; // int | Product Id

try {
    $result = $apiInstance->productsProductIdPromotionsGet($productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsProductIdPromotionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| Product Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Promotion[]**](../Model/Promotion.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsProductIdRelatedProductsGet**
> \HappyCog\OsborneApi\ErpService\Model\Product[] productsProductIdRelatedProductsGet($productId)

Get a list of Products for a Product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productId = 56; // int | Product Id

try {
    $result = $apiInstance->productsProductIdRelatedProductsGet($productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsProductIdRelatedProductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| Product Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Product[]**](../Model/Product.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsProductIdServicesGet**
> \HappyCog\OsborneApi\ErpService\Model\ProductService[] productsProductIdServicesGet($productId)

Get a list of Product Services

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productId = 56; // int | Product Id

try {
    $result = $apiInstance->productsProductIdServicesGet($productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsProductIdServicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| Product Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\ProductService[]**](../Model/ProductService.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsProductIdServicesProductServiceIdGet**
> \HappyCog\OsborneApi\ErpService\Model\ProductService productsProductIdServicesProductServiceIdGet($productId, $productServiceId)

Get info about a Product Service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productId = 56; // int | Product Id
$productServiceId = 56; // int | Product Service Id

try {
    $result = $apiInstance->productsProductIdServicesProductServiceIdGet($productId, $productServiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsProductIdServicesProductServiceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| Product Id |
 **productServiceId** | **int**| Product Service Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\ProductService**](../Model/ProductService.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

