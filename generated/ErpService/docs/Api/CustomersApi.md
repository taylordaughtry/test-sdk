# HappyCog\OsborneApi\ErpService\CustomersApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customersCustomerIdBillingAddressGet**](CustomersApi.md#customerscustomeridbillingaddressget) | **GET** /customers/{customerId}/billing-address | Get info about the Billing Address for a Customer
[**customersCustomerIdDeleteDelete**](CustomersApi.md#customerscustomeriddeletedelete) | **DELETE** /customers/{customerId}/delete | Delete a Customer
[**customersCustomerIdGet**](CustomersApi.md#customerscustomeridget) | **GET** /customers/{customerId} | Get info about a Customer
[**customersCustomerIdNotesGet**](CustomersApi.md#customerscustomeridnotesget) | **GET** /customers/{customerId}/notes | Get a list of Notes for a Customer
[**customersCustomerIdOrderServicesGet**](CustomersApi.md#customerscustomeridorderservicesget) | **GET** /customers/{customerId}/order-services | Get a list of Order Services for a Customer
[**customersCustomerIdOrderServicesOrderServiceIdDeleteDelete**](CustomersApi.md#customerscustomeridorderservicesorderserviceiddeletedelete) | **DELETE** /customers/{customerId}/order-services/{orderServiceId}/delete | Remove an Order Service association for a Customer
[**customersCustomerIdOrderServicesPost**](CustomersApi.md#customerscustomeridorderservicespost) | **POST** /customers/{customerId}/order-services | Create a new Order Service association for a Customer
[**customersCustomerIdPaymentTermsGet**](CustomersApi.md#customerscustomeridpaymenttermsget) | **GET** /customers/{customerId}/payment-terms | Get a list of Payment Terms for a Customer
[**customersCustomerIdProductPricesGet**](CustomersApi.md#customerscustomeridproductpricesget) | **GET** /customers/{customerId}/product-prices | Get a list of Customer Product Prices for a Customer
[**customersCustomerIdProductPricesPost**](CustomersApi.md#customerscustomeridproductpricespost) | **POST** /customers/{customerId}/product-prices | Create a new Customer Product Price for a Customer
[**customersCustomerIdProductPricesProductIdDeleteDelete**](CustomersApi.md#customerscustomeridproductpricesproductiddeletedelete) | **DELETE** /customers/{customerId}/product-prices/{productId}/delete | Remove a Customer Product Price for a Customer
[**customersCustomerIdPromotionsGet**](CustomersApi.md#customerscustomeridpromotionsget) | **GET** /customers/{customerId}/promotions | Get a list of Promotions for a Customer
[**customersCustomerIdPromotionsPost**](CustomersApi.md#customerscustomeridpromotionspost) | **POST** /customers/{customerId}/promotions | Create a new Promotion association for a Customer
[**customersCustomerIdPromotionsPromotionIdDeleteDelete**](CustomersApi.md#customerscustomeridpromotionspromotioniddeletedelete) | **DELETE** /customers/{customerId}/promotions/{promotionId}/delete | Remove a Promotion association for a Customer
[**customersCustomerIdPut**](CustomersApi.md#customerscustomeridput) | **PUT** /customers/{customerId} | Update a Customer
[**customersCustomerIdShippingAddressesGet**](CustomersApi.md#customerscustomeridshippingaddressesget) | **GET** /customers/{customerId}/shipping-addresses | Get a list of Shipping Addresses for a Customer ( 5 most recent )
[**customersCustomerIdShippingAddressesShippingAddressIdGet**](CustomersApi.md#customerscustomeridshippingaddressesshippingaddressidget) | **GET** /customers/{customerId}/shipping-addresses/{shippingAddressId} | Get info about a Shipping Address for a Customer
[**customersGet**](CustomersApi.md#customersget) | **GET** /customers | Get a list of Customers
[**customersPost**](CustomersApi.md#customerspost) | **POST** /customers | Create a new Customer

# **customersCustomerIdBillingAddressGet**
> \HappyCog\OsborneApi\ErpService\Model\Address customersCustomerIdBillingAddressGet($customerId)

Get info about the Billing Address for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | Customer Id

try {
    $result = $apiInstance->customersCustomerIdBillingAddressGet($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdBillingAddressGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Customer Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Address**](../Model/Address.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdDeleteDelete**
> object customersCustomerIdDeleteDelete($customerId)

Delete a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | Customer Id

try {
    $result = $apiInstance->customersCustomerIdDeleteDelete($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Customer Id |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdGet**
> \HappyCog\OsborneApi\ErpService\Model\Customer customersCustomerIdGet($customerId)

Get info about a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | Customer Id

try {
    $result = $apiInstance->customersCustomerIdGet($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Customer Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Customer**](../Model/Customer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdNotesGet**
> \HappyCog\OsborneApi\ErpService\Model\CustomerNote[] customersCustomerIdNotesGet($customerId)

Get a list of Notes for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | Customer Id

try {
    $result = $apiInstance->customersCustomerIdNotesGet($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdNotesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Customer Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\CustomerNote[]**](../Model/CustomerNote.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdOrderServicesGet**
> \HappyCog\OsborneApi\ErpService\Model\OrderService[] customersCustomerIdOrderServicesGet($customerId)

Get a list of Order Services for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | Customer Id

try {
    $result = $apiInstance->customersCustomerIdOrderServicesGet($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdOrderServicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Customer Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\OrderService[]**](../Model/OrderService.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdOrderServicesOrderServiceIdDeleteDelete**
> object customersCustomerIdOrderServicesOrderServiceIdDeleteDelete($customerId, $orderServiceId)

Remove an Order Service association for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | Customer Id
$orderServiceId = 56; // int | Order Service Id

try {
    $result = $apiInstance->customersCustomerIdOrderServicesOrderServiceIdDeleteDelete($customerId, $orderServiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdOrderServicesOrderServiceIdDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Customer Id |
 **orderServiceId** | **int**| Order Service Id |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdOrderServicesPost**
> \HappyCog\OsborneApi\ErpService\Model\OrderService customersCustomerIdOrderServicesPost($customerId, $body)

Create a new Order Service association for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | Customer Id
$body = new \HappyCog\OsborneApi\ErpService\Model\OrderService(); // \HappyCog\OsborneApi\ErpService\Model\OrderService | 

try {
    $result = $apiInstance->customersCustomerIdOrderServicesPost($customerId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdOrderServicesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Customer Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\OrderService**](../Model/OrderService.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\OrderService**](../Model/OrderService.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdPaymentTermsGet**
> \HappyCog\OsborneApi\ErpService\Model\PaymentTerm[] customersCustomerIdPaymentTermsGet($customerId)

Get a list of Payment Terms for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | Customer Id

try {
    $result = $apiInstance->customersCustomerIdPaymentTermsGet($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdPaymentTermsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Customer Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\PaymentTerm[]**](../Model/PaymentTerm.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdProductPricesGet**
> \HappyCog\OsborneApi\ErpService\Model\CustomerProductPrice[] customersCustomerIdProductPricesGet($customerId)

Get a list of Customer Product Prices for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | Customer Id

try {
    $result = $apiInstance->customersCustomerIdProductPricesGet($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdProductPricesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Customer Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\CustomerProductPrice[]**](../Model/CustomerProductPrice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdProductPricesPost**
> \HappyCog\OsborneApi\ErpService\Model\CustomerProductPrice customersCustomerIdProductPricesPost($customerId, $body)

Create a new Customer Product Price for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | Customer Id
$body = new \HappyCog\OsborneApi\ErpService\Model\CustomerProductPrice(); // \HappyCog\OsborneApi\ErpService\Model\CustomerProductPrice | 

try {
    $result = $apiInstance->customersCustomerIdProductPricesPost($customerId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdProductPricesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Customer Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\CustomerProductPrice**](../Model/CustomerProductPrice.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\CustomerProductPrice**](../Model/CustomerProductPrice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdProductPricesProductIdDeleteDelete**
> object customersCustomerIdProductPricesProductIdDeleteDelete($customerId, $productId)

Remove a Customer Product Price for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | Customer Id
$productId = 56; // int | Product Id

try {
    $result = $apiInstance->customersCustomerIdProductPricesProductIdDeleteDelete($customerId, $productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdProductPricesProductIdDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Customer Id |
 **productId** | **int**| Product Id |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdPromotionsGet**
> \HappyCog\OsborneApi\ErpService\Model\Promotion[] customersCustomerIdPromotionsGet($customerId)

Get a list of Promotions for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | Customer Id

try {
    $result = $apiInstance->customersCustomerIdPromotionsGet($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdPromotionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Customer Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Promotion[]**](../Model/Promotion.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdPromotionsPost**
> \HappyCog\OsborneApi\ErpService\Model\Promotion customersCustomerIdPromotionsPost($customerId, $body)

Create a new Promotion association for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | Customer Id
$body = new \HappyCog\OsborneApi\ErpService\Model\Promotion(); // \HappyCog\OsborneApi\ErpService\Model\Promotion | 

try {
    $result = $apiInstance->customersCustomerIdPromotionsPost($customerId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdPromotionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Customer Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\Promotion**](../Model/Promotion.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Promotion**](../Model/Promotion.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdPromotionsPromotionIdDeleteDelete**
> object customersCustomerIdPromotionsPromotionIdDeleteDelete($customerId, $promotionId)

Remove a Promotion association for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | Customer Id
$promotionId = 56; // int | Promotion Id

try {
    $result = $apiInstance->customersCustomerIdPromotionsPromotionIdDeleteDelete($customerId, $promotionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdPromotionsPromotionIdDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Customer Id |
 **promotionId** | **int**| Promotion Id |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdPut**
> \HappyCog\OsborneApi\ErpService\Model\Customer customersCustomerIdPut($customerId, $body)

Update a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | Customer Id
$body = new \HappyCog\OsborneApi\ErpService\Model\Customer(); // \HappyCog\OsborneApi\ErpService\Model\Customer | 

try {
    $result = $apiInstance->customersCustomerIdPut($customerId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Customer Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\Customer**](../Model/Customer.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Customer**](../Model/Customer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdShippingAddressesGet**
> \HappyCog\OsborneApi\ErpService\Model\Address[] customersCustomerIdShippingAddressesGet($customerId)

Get a list of Shipping Addresses for a Customer ( 5 most recent )

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | Customer Id

try {
    $result = $apiInstance->customersCustomerIdShippingAddressesGet($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdShippingAddressesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Customer Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Address[]**](../Model/Address.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdShippingAddressesShippingAddressIdGet**
> \HappyCog\OsborneApi\ErpService\Model\Address customersCustomerIdShippingAddressesShippingAddressIdGet($customerId, $shippingAddressId)

Get info about a Shipping Address for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | Customer Id
$shippingAddressId = 56; // int | Shipping Address Id

try {
    $result = $apiInstance->customersCustomerIdShippingAddressesShippingAddressIdGet($customerId, $shippingAddressId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdShippingAddressesShippingAddressIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerId** | **int**| Customer Id |
 **shippingAddressId** | **int**| Shipping Address Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Address**](../Model/Address.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersGet**
> \HappyCog\OsborneApi\ErpService\Model\Customer[] customersGet()

Get a list of Customers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->customersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Customer[]**](../Model/Customer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersPost**
> \HappyCog\OsborneApi\ErpService\Model\Customer customersPost($body)

Create a new Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \HappyCog\OsborneApi\ErpService\Model\Customer(); // \HappyCog\OsborneApi\ErpService\Model\Customer | 

try {
    $result = $apiInstance->customersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\Customer**](../Model/Customer.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Customer**](../Model/Customer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

