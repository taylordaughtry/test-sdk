# HappyCog\OsborneApi\ErpService\CustomersApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customersCustomerIdBillingAddressesGet**](CustomersApi.md#customersCustomerIdBillingAddressesGet) | **GET** /customers/{customerId}/billing-addresses | Get a list of Billing Addresses for a Customer
[**customersCustomerIdGet**](CustomersApi.md#customersCustomerIdGet) | **GET** /customers/{customerId} | Get info about a Customer
[**customersCustomerIdNotesGet**](CustomersApi.md#customersCustomerIdNotesGet) | **GET** /customers/{customerId}/notes | Used for initial import only  Get a list of Notes for a Customer
[**customersCustomerIdOrderServicesGet**](CustomersApi.md#customersCustomerIdOrderServicesGet) | **GET** /customers/{customerId}/order-services | Used for initial import only  Get a list of Order Services for a Customer
[**customersCustomerIdPaymentTermsGet**](CustomersApi.md#customersCustomerIdPaymentTermsGet) | **GET** /customers/{customerId}/payment-terms | Used for initial import only  Get a list of Payment Terms for a Customer
[**customersCustomerIdProductPricesGet**](CustomersApi.md#customersCustomerIdProductPricesGet) | **GET** /customers/{customerId}/product-prices | Used for initial import only  Get a list of Customer Product Prices for a Customer
[**customersCustomerIdPromotionsGet**](CustomersApi.md#customersCustomerIdPromotionsGet) | **GET** /customers/{customerId}/promotions | Used for initial import only  Get a list of Promotions for a Customer
[**customersCustomerIdPut**](CustomersApi.md#customersCustomerIdPut) | **PUT** /customers/{customerId} | Update a Customer
[**customersCustomerIdShippingAddressesGet**](CustomersApi.md#customersCustomerIdShippingAddressesGet) | **GET** /customers/{customerId}/shipping-addresses | Used for initial import only  Get a list of Shipping Addresses for a Customer ( 5 most recent )
[**customersGet**](CustomersApi.md#customersGet) | **GET** /customers | Get a list of Customers
[**customersPost**](CustomersApi.md#customersPost) | **POST** /customers | Create a new Customer


# **customersCustomerIdBillingAddressesGet**
> \HappyCog\OsborneApi\ErpService\Model\Address[] customersCustomerIdBillingAddressesGet($customerId)

Get a list of Billing Addresses for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 56; // int | Customer Id

try {
    $result = $apiInstance->customersCustomerIdBillingAddressesGet($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customersCustomerIdBillingAddressesGet: ', $e->getMessage(), PHP_EOL;
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

# **customersCustomerIdGet**
> \HappyCog\OsborneApi\ErpService\Model\Customer customersCustomerIdGet($customerId)

Get info about a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


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

Used for initial import only  Get a list of Notes for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


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

Used for initial import only  Get a list of Order Services for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


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

# **customersCustomerIdPaymentTermsGet**
> \HappyCog\OsborneApi\ErpService\Model\PaymentTerm[] customersCustomerIdPaymentTermsGet($customerId)

Used for initial import only  Get a list of Payment Terms for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


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

Used for initial import only  Get a list of Customer Product Prices for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


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

# **customersCustomerIdPromotionsGet**
> \HappyCog\OsborneApi\ErpService\Model\Promotion[] customersCustomerIdPromotionsGet($customerId)

Used for initial import only  Get a list of Promotions for a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


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

# **customersCustomerIdPut**
> \HappyCog\OsborneApi\ErpService\Model\Customer customersCustomerIdPut($customerId, $body)

Update a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


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

Used for initial import only  Get a list of Shipping Addresses for a Customer ( 5 most recent )

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


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

# **customersGet**
> \HappyCog\OsborneApi\ErpService\Model\Customer[] customersGet()

Get a list of Customers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


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

