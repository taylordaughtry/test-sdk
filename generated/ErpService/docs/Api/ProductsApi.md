# HappyCog\OsborneApi\ErpService\ProductsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productsGet**](ProductsApi.md#productsGet) | **GET** /products | Get a list of all Products
[**productsProductIdCategoriesGet**](ProductsApi.md#productsProductIdCategoriesGet) | **GET** /products/{productId}/categories | Used for initial import only  Get a list of Categories that belong to a Product
[**productsProductIdCustomersGet**](ProductsApi.md#productsProductIdCustomersGet) | **GET** /products/{productId}/customers | Used for initial import only  Get a list of Customers that can order this Product
[**productsProductIdDisclaimersGet**](ProductsApi.md#productsProductIdDisclaimersGet) | **GET** /products/{productId}/disclaimers | Used for initial import only  Get a list of Product Disclaimers
[**productsProductIdDrawingsGet**](ProductsApi.md#productsProductIdDrawingsGet) | **GET** /products/{productId}/drawings | Get a list of Product Drawings
[**productsProductIdDrawingsProductDrawingIdGet**](ProductsApi.md#productsProductIdDrawingsProductDrawingIdGet) | **GET** /products/{productId}/drawings/{productDrawingId} | Get info about a Product Drawing
[**productsProductIdGet**](ProductsApi.md#productsProductIdGet) | **GET** /products/{productId} | Get info about a Product
[**productsProductIdImagesGet**](ProductsApi.md#productsProductIdImagesGet) | **GET** /products/{productId}/images | Used for initial import only  Get a list of Product Images
[**productsProductIdImagesProductImageIdGet**](ProductsApi.md#productsProductIdImagesProductImageIdGet) | **GET** /products/{productId}/images/{productImageId} | Used for initial import only  Get info about a Product Image
[**productsProductIdMaterialsGet**](ProductsApi.md#productsProductIdMaterialsGet) | **GET** /products/{productId}/materials | Get a list of Materials related directly to a Product
[**productsProductIdMaterialsProductMaterialIdGet**](ProductsApi.md#productsProductIdMaterialsProductMaterialIdGet) | **GET** /products/{productId}/materials/{productMaterialId} | Get info about a Product Material
[**productsProductIdMaterialsProductMaterialIdImagesGet**](ProductsApi.md#productsProductIdMaterialsProductMaterialIdImagesGet) | **GET** /products/{productId}/materials/{productMaterialId}/images | Used for initial import only  Get a list of Product Material Images
[**productsProductIdMaterialsProductMaterialIdImagesProductMaterialImageIdGet**](ProductsApi.md#productsProductIdMaterialsProductMaterialIdImagesProductMaterialImageIdGet) | **GET** /products/{productId}/materials/{productMaterialId}/images/{productMaterialImageId} | Used for initial import only  Get info about a Product Material Image
[**productsProductIdMaterialsProductMaterialIdMaterialsGet**](ProductsApi.md#productsProductIdMaterialsProductMaterialIdMaterialsGet) | **GET** /products/{productId}/materials/{productMaterialId}/materials | Get a list of Sub Materials related to a Product Material
[**productsProductIdPromotionsGet**](ProductsApi.md#productsProductIdPromotionsGet) | **GET** /products/{productId}/promotions | Used for initial import only  Get a list of Promotions for a Product
[**productsProductIdServicesGet**](ProductsApi.md#productsProductIdServicesGet) | **GET** /products/{productId}/services | Get a list of Product Services
[**productsProductIdServicesProductServiceIdGet**](ProductsApi.md#productsProductIdServicesProductServiceIdGet) | **GET** /products/{productId}/services/{productServiceId} | Get info about a Product Service


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

Used for initial import only  Get a list of Categories that belong to a Product

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

Used for initial import only  Get a list of Customers that can order this Product

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

Used for initial import only  Get a list of Product Disclaimers

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

# **productsProductIdImagesGet**
> \HappyCog\OsborneApi\ErpService\Model\ProductImage[] productsProductIdImagesGet($productId)

Used for initial import only  Get a list of Product Images

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
    $result = $apiInstance->productsProductIdImagesGet($productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsProductIdImagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| Product Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\ProductImage[]**](../Model/ProductImage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsProductIdImagesProductImageIdGet**
> \HappyCog\OsborneApi\ErpService\Model\ProductImage productsProductIdImagesProductImageIdGet($productId, $productImageId)

Used for initial import only  Get info about a Product Image

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
$productImageId = 56; // int | Product Image Id

try {
    $result = $apiInstance->productsProductIdImagesProductImageIdGet($productId, $productImageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsProductIdImagesProductImageIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| Product Id |
 **productImageId** | **int**| Product Image Id |

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

# **productsProductIdMaterialsProductMaterialIdImagesGet**
> \HappyCog\OsborneApi\ErpService\Model\ProductMaterialImage[] productsProductIdMaterialsProductMaterialIdImagesGet($productId, $productMaterialId)

Used for initial import only  Get a list of Product Material Images

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
    $result = $apiInstance->productsProductIdMaterialsProductMaterialIdImagesGet($productId, $productMaterialId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsProductIdMaterialsProductMaterialIdImagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| Product Id |
 **productMaterialId** | **int**| Product Material Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\ProductMaterialImage[]**](../Model/ProductMaterialImage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsProductIdMaterialsProductMaterialIdImagesProductMaterialImageIdGet**
> \HappyCog\OsborneApi\ErpService\Model\ProductMaterialImage productsProductIdMaterialsProductMaterialIdImagesProductMaterialImageIdGet($productId, $productMaterialId, $productMaterialImageId)

Used for initial import only  Get info about a Product Material Image

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
$productMaterialImageId = 56; // int | Product Material Image Id

try {
    $result = $apiInstance->productsProductIdMaterialsProductMaterialIdImagesProductMaterialImageIdGet($productId, $productMaterialId, $productMaterialImageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsProductIdMaterialsProductMaterialIdImagesProductMaterialImageIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| Product Id |
 **productMaterialId** | **int**| Product Material Id |
 **productMaterialImageId** | **int**| Product Material Image Id |

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

Used for initial import only  Get a list of Promotions for a Product

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

