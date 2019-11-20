# HappyCog\OsborneApi\ErpService\OrdersApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersGet**](OrdersApi.md#ordersget) | **GET** /orders | Get a list of Orders
[**ordersOrderIdDeleteDelete**](OrdersApi.md#ordersorderiddeletedelete) | **DELETE** /orders/{orderId}/delete | Delete a Order
[**ordersOrderIdFilesGet**](OrdersApi.md#ordersorderidfilesget) | **GET** /orders/{orderId}/files | Get a list of Files attached to an Order
[**ordersOrderIdFilesOrderFileIdDeleteDelete**](OrdersApi.md#ordersorderidfilesorderfileiddeletedelete) | **DELETE** /orders/{orderId}/files/{orderFileId}/delete | Delete a File for an Order
[**ordersOrderIdFilesOrderFileIdGet**](OrdersApi.md#ordersorderidfilesorderfileidget) | **GET** /orders/{orderId}/files/{orderFileId} | Get info about a File for an Order
[**ordersOrderIdFilesPost**](OrdersApi.md#ordersorderidfilespost) | **POST** /orders/{orderId}/files | Create a new File for an Order
[**ordersOrderIdGet**](OrdersApi.md#ordersorderidget) | **GET** /orders/{orderId} | Get info about a Order
[**ordersOrderIdLinesGet**](OrdersApi.md#ordersorderidlinesget) | **GET** /orders/{orderId}/lines | Get a list of Lines for an Order
[**ordersOrderIdLinesOrderLineIdDeleteDelete**](OrdersApi.md#ordersorderidlinesorderlineiddeletedelete) | **DELETE** /orders/{orderId}/lines/{orderLineId}/delete | Delete a Line for an Order
[**ordersOrderIdLinesOrderLineIdGet**](OrdersApi.md#ordersorderidlinesorderlineidget) | **GET** /orders/{orderId}/lines/{orderLineId} | Get info about a Line for an Order
[**ordersOrderIdLinesOrderLineIdPut**](OrdersApi.md#ordersorderidlinesorderlineidput) | **PUT** /orders/{orderId}/lines/{orderLineId} | Update a Line for an Order
[**ordersOrderIdLinesOrderLineIdServicesAppliedProductServiceIdDeleteDelete**](OrdersApi.md#ordersorderidlinesorderlineidservicesappliedproductserviceiddeletedelete) | **DELETE** /orders/{orderId}/lines/{orderLineId}/services/{appliedProductServiceId}/delete | Delete an Applied Product Service for an Order Line
[**ordersOrderIdLinesOrderLineIdServicesAppliedProductServiceIdGet**](OrdersApi.md#ordersorderidlinesorderlineidservicesappliedproductserviceidget) | **GET** /orders/{orderId}/lines/{orderLineId}/services/{appliedProductServiceId} | Get info about an Applied Product Service for an Order Line
[**ordersOrderIdLinesOrderLineIdServicesAppliedProductServiceIdPut**](OrdersApi.md#ordersorderidlinesorderlineidservicesappliedproductserviceidput) | **PUT** /orders/{orderId}/lines/{orderLineId}/services/{appliedProductServiceId} | Update an Applied Product Service for an Order Line
[**ordersOrderIdLinesOrderLineIdServicesGet**](OrdersApi.md#ordersorderidlinesorderlineidservicesget) | **GET** /orders/{orderId}/lines/{orderLineId}/services | Get a list of Applied Product Services for an Order Line
[**ordersOrderIdLinesOrderLineIdServicesPost**](OrdersApi.md#ordersorderidlinesorderlineidservicespost) | **POST** /orders/{orderId}/lines/{orderLineId}/services | Create a new Applied Product Service for an Order Line
[**ordersOrderIdLinesPost**](OrdersApi.md#ordersorderidlinespost) | **POST** /orders/{orderId}/lines | Create a new Line for an Order
[**ordersOrderIdNotesGet**](OrdersApi.md#ordersorderidnotesget) | **GET** /orders/{orderId}/notes | Get a list of Notes for an Order
[**ordersOrderIdNotesOrderNoteIdDeleteDelete**](OrdersApi.md#ordersorderidnotesordernoteiddeletedelete) | **DELETE** /orders/{orderId}/notes/{orderNoteId}/delete | Delete a Note for an Order
[**ordersOrderIdNotesOrderNoteIdGet**](OrdersApi.md#ordersorderidnotesordernoteidget) | **GET** /orders/{orderId}/notes/{orderNoteId} | Get info about a Note for an Order
[**ordersOrderIdNotesOrderNoteIdPut**](OrdersApi.md#ordersorderidnotesordernoteidput) | **PUT** /orders/{orderId}/notes/{orderNoteId} | Update a Note for an Order
[**ordersOrderIdNotesPost**](OrdersApi.md#ordersorderidnotespost) | **POST** /orders/{orderId}/notes | Create a new Note for an Order
[**ordersOrderIdPaymentsGet**](OrdersApi.md#ordersorderidpaymentsget) | **GET** /orders/{orderId}/payments | Get a list of Payments for an Order
[**ordersOrderIdPaymentsOrderPaymentIdDeleteDelete**](OrdersApi.md#ordersorderidpaymentsorderpaymentiddeletedelete) | **DELETE** /orders/{orderId}/payments/{orderPaymentId}/delete | Delete a Payment for an Order
[**ordersOrderIdPaymentsOrderPaymentIdGet**](OrdersApi.md#ordersorderidpaymentsorderpaymentidget) | **GET** /orders/{orderId}/payments/{orderPaymentId} | Get info about a Payment for an Order
[**ordersOrderIdPaymentsOrderPaymentIdPut**](OrdersApi.md#ordersorderidpaymentsorderpaymentidput) | **PUT** /orders/{orderId}/payments/{orderPaymentId} | Update a Payment for an Order
[**ordersOrderIdPaymentsPost**](OrdersApi.md#ordersorderidpaymentspost) | **POST** /orders/{orderId}/payments | Create a new Payment for an Order
[**ordersOrderIdPut**](OrdersApi.md#ordersorderidput) | **PUT** /orders/{orderId} | Update a Order
[**ordersOrderIdServicesAppliedOrderServiceIdDeleteDelete**](OrdersApi.md#ordersorderidservicesappliedorderserviceiddeletedelete) | **DELETE** /orders/{orderId}/services/{appliedOrderServiceId}/delete | Delete an Applied Order Service for an Order
[**ordersOrderIdServicesAppliedOrderServiceIdGet**](OrdersApi.md#ordersorderidservicesappliedorderserviceidget) | **GET** /orders/{orderId}/services/{appliedOrderServiceId} | Get info about an Applied Order Service for an Order
[**ordersOrderIdServicesAppliedOrderServiceIdPut**](OrdersApi.md#ordersorderidservicesappliedorderserviceidput) | **PUT** /orders/{orderId}/services/{appliedOrderServiceId} | Update an Applied Order Service for an Order
[**ordersOrderIdServicesGet**](OrdersApi.md#ordersorderidservicesget) | **GET** /orders/{orderId}/services | Get a list of Applied Order Services for an Order
[**ordersOrderIdServicesPost**](OrdersApi.md#ordersorderidservicespost) | **POST** /orders/{orderId}/services | Create a new Applied Order Service for an Order
[**ordersPost**](OrdersApi.md#orderspost) | **POST** /orders | Create a new Order

# **ordersGet**
> \HappyCog\OsborneApi\ErpService\Model\Order[] ordersGet()

Get a list of Orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->ordersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Order[]**](../Model/Order.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdDeleteDelete**
> object ordersOrderIdDeleteDelete($orderId)

Delete a Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id

try {
    $result = $apiInstance->ordersOrderIdDeleteDelete($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdFilesGet**
> \HappyCog\OsborneApi\ErpService\Model\OrderFile[] ordersOrderIdFilesGet($orderId)

Get a list of Files attached to an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id

try {
    $result = $apiInstance->ordersOrderIdFilesGet($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdFilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\OrderFile[]**](../Model/OrderFile.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdFilesOrderFileIdDeleteDelete**
> object ordersOrderIdFilesOrderFileIdDeleteDelete($orderId, $orderFileId)

Delete a File for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$orderFileId = 56; // int | Order File Id

try {
    $result = $apiInstance->ordersOrderIdFilesOrderFileIdDeleteDelete($orderId, $orderFileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdFilesOrderFileIdDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **orderFileId** | **int**| Order File Id |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdFilesOrderFileIdGet**
> \HappyCog\OsborneApi\ErpService\Model\OrderFile ordersOrderIdFilesOrderFileIdGet($orderId, $orderFileId)

Get info about a File for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$orderFileId = 56; // int | Order File Id

try {
    $result = $apiInstance->ordersOrderIdFilesOrderFileIdGet($orderId, $orderFileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdFilesOrderFileIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **orderFileId** | **int**| Order File Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\OrderFile**](../Model/OrderFile.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdFilesPost**
> \HappyCog\OsborneApi\ErpService\Model\OrderFile ordersOrderIdFilesPost($orderId, $body)

Create a new File for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$body = new \HappyCog\OsborneApi\ErpService\Model\OrderFile(); // \HappyCog\OsborneApi\ErpService\Model\OrderFile | 

try {
    $result = $apiInstance->ordersOrderIdFilesPost($orderId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdFilesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\OrderFile**](../Model/OrderFile.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\OrderFile**](../Model/OrderFile.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdGet**
> \HappyCog\OsborneApi\ErpService\Model\Order ordersOrderIdGet($orderId)

Get info about a Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id

try {
    $result = $apiInstance->ordersOrderIdGet($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Order**](../Model/Order.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdLinesGet**
> \HappyCog\OsborneApi\ErpService\Model\OrderLine[] ordersOrderIdLinesGet($orderId)

Get a list of Lines for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id

try {
    $result = $apiInstance->ordersOrderIdLinesGet($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdLinesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\OrderLine[]**](../Model/OrderLine.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdLinesOrderLineIdDeleteDelete**
> object ordersOrderIdLinesOrderLineIdDeleteDelete($orderId, $orderLineId)

Delete a Line for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$orderLineId = 56; // int | Order Line Id

try {
    $result = $apiInstance->ordersOrderIdLinesOrderLineIdDeleteDelete($orderId, $orderLineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdLinesOrderLineIdDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **orderLineId** | **int**| Order Line Id |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdLinesOrderLineIdGet**
> \HappyCog\OsborneApi\ErpService\Model\OrderLine ordersOrderIdLinesOrderLineIdGet($orderId, $orderLineId)

Get info about a Line for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$orderLineId = 56; // int | Order Line Id

try {
    $result = $apiInstance->ordersOrderIdLinesOrderLineIdGet($orderId, $orderLineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdLinesOrderLineIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **orderLineId** | **int**| Order Line Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\OrderLine**](../Model/OrderLine.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdLinesOrderLineIdPut**
> \HappyCog\OsborneApi\ErpService\Model\OrderLine ordersOrderIdLinesOrderLineIdPut($orderId, $orderLineId, $body)

Update a Line for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$orderLineId = 56; // int | Order Line Id
$body = new \HappyCog\OsborneApi\ErpService\Model\OrderLine(); // \HappyCog\OsborneApi\ErpService\Model\OrderLine | 

try {
    $result = $apiInstance->ordersOrderIdLinesOrderLineIdPut($orderId, $orderLineId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdLinesOrderLineIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **orderLineId** | **int**| Order Line Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\OrderLine**](../Model/OrderLine.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\OrderLine**](../Model/OrderLine.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdLinesOrderLineIdServicesAppliedProductServiceIdDeleteDelete**
> object ordersOrderIdLinesOrderLineIdServicesAppliedProductServiceIdDeleteDelete($orderId, $orderLineId, $appliedProductServiceId)

Delete an Applied Product Service for an Order Line

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$orderLineId = 56; // int | Order Line Id
$appliedProductServiceId = 56; // int | Applied Product Service Id

try {
    $result = $apiInstance->ordersOrderIdLinesOrderLineIdServicesAppliedProductServiceIdDeleteDelete($orderId, $orderLineId, $appliedProductServiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdLinesOrderLineIdServicesAppliedProductServiceIdDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **orderLineId** | **int**| Order Line Id |
 **appliedProductServiceId** | **int**| Applied Product Service Id |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdLinesOrderLineIdServicesAppliedProductServiceIdGet**
> \HappyCog\OsborneApi\ErpService\Model\AppliedProductService ordersOrderIdLinesOrderLineIdServicesAppliedProductServiceIdGet($orderId, $orderLineId, $appliedProductServiceId)

Get info about an Applied Product Service for an Order Line

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$orderLineId = 56; // int | Order Line Id
$appliedProductServiceId = 56; // int | Applied Product Service Id

try {
    $result = $apiInstance->ordersOrderIdLinesOrderLineIdServicesAppliedProductServiceIdGet($orderId, $orderLineId, $appliedProductServiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdLinesOrderLineIdServicesAppliedProductServiceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **orderLineId** | **int**| Order Line Id |
 **appliedProductServiceId** | **int**| Applied Product Service Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\AppliedProductService**](../Model/AppliedProductService.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdLinesOrderLineIdServicesAppliedProductServiceIdPut**
> \HappyCog\OsborneApi\ErpService\Model\AppliedProductService ordersOrderIdLinesOrderLineIdServicesAppliedProductServiceIdPut($orderId, $orderLineId, $appliedProductServiceId, $body)

Update an Applied Product Service for an Order Line

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$orderLineId = 56; // int | Order Line Id
$appliedProductServiceId = 56; // int | Applied Product Service Id
$body = new \HappyCog\OsborneApi\ErpService\Model\AppliedProductService(); // \HappyCog\OsborneApi\ErpService\Model\AppliedProductService | 

try {
    $result = $apiInstance->ordersOrderIdLinesOrderLineIdServicesAppliedProductServiceIdPut($orderId, $orderLineId, $appliedProductServiceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdLinesOrderLineIdServicesAppliedProductServiceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **orderLineId** | **int**| Order Line Id |
 **appliedProductServiceId** | **int**| Applied Product Service Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\AppliedProductService**](../Model/AppliedProductService.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\AppliedProductService**](../Model/AppliedProductService.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdLinesOrderLineIdServicesGet**
> \HappyCog\OsborneApi\ErpService\Model\AppliedProductService[] ordersOrderIdLinesOrderLineIdServicesGet($orderId, $orderLineId)

Get a list of Applied Product Services for an Order Line

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$orderLineId = 56; // int | Order Line Id

try {
    $result = $apiInstance->ordersOrderIdLinesOrderLineIdServicesGet($orderId, $orderLineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdLinesOrderLineIdServicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **orderLineId** | **int**| Order Line Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\AppliedProductService[]**](../Model/AppliedProductService.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdLinesOrderLineIdServicesPost**
> \HappyCog\OsborneApi\ErpService\Model\AppliedProductService ordersOrderIdLinesOrderLineIdServicesPost($orderId, $orderLineId, $body)

Create a new Applied Product Service for an Order Line

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$orderLineId = 56; // int | Order Line Id
$body = new \HappyCog\OsborneApi\ErpService\Model\AppliedProductService(); // \HappyCog\OsborneApi\ErpService\Model\AppliedProductService | 

try {
    $result = $apiInstance->ordersOrderIdLinesOrderLineIdServicesPost($orderId, $orderLineId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdLinesOrderLineIdServicesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **orderLineId** | **int**| Order Line Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\AppliedProductService**](../Model/AppliedProductService.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\AppliedProductService**](../Model/AppliedProductService.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdLinesPost**
> \HappyCog\OsborneApi\ErpService\Model\OrderLine ordersOrderIdLinesPost($orderId, $body)

Create a new Line for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$body = new \HappyCog\OsborneApi\ErpService\Model\OrderLine(); // \HappyCog\OsborneApi\ErpService\Model\OrderLine | 

try {
    $result = $apiInstance->ordersOrderIdLinesPost($orderId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdLinesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\OrderLine**](../Model/OrderLine.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\OrderLine**](../Model/OrderLine.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdNotesGet**
> \HappyCog\OsborneApi\ErpService\Model\OrderNote[] ordersOrderIdNotesGet($orderId)

Get a list of Notes for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id

try {
    $result = $apiInstance->ordersOrderIdNotesGet($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdNotesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\OrderNote[]**](../Model/OrderNote.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdNotesOrderNoteIdDeleteDelete**
> object ordersOrderIdNotesOrderNoteIdDeleteDelete($orderId, $orderNoteId)

Delete a Note for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$orderNoteId = 56; // int | Order Note Id

try {
    $result = $apiInstance->ordersOrderIdNotesOrderNoteIdDeleteDelete($orderId, $orderNoteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdNotesOrderNoteIdDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **orderNoteId** | **int**| Order Note Id |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdNotesOrderNoteIdGet**
> \HappyCog\OsborneApi\ErpService\Model\OrderNote ordersOrderIdNotesOrderNoteIdGet($orderId, $orderNoteId)

Get info about a Note for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$orderNoteId = 56; // int | Order Note Id

try {
    $result = $apiInstance->ordersOrderIdNotesOrderNoteIdGet($orderId, $orderNoteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdNotesOrderNoteIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **orderNoteId** | **int**| Order Note Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\OrderNote**](../Model/OrderNote.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdNotesOrderNoteIdPut**
> \HappyCog\OsborneApi\ErpService\Model\OrderNote ordersOrderIdNotesOrderNoteIdPut($orderId, $orderNoteId, $body)

Update a Note for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$orderNoteId = 56; // int | Order Note Id
$body = new \HappyCog\OsborneApi\ErpService\Model\OrderNote(); // \HappyCog\OsborneApi\ErpService\Model\OrderNote | 

try {
    $result = $apiInstance->ordersOrderIdNotesOrderNoteIdPut($orderId, $orderNoteId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdNotesOrderNoteIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **orderNoteId** | **int**| Order Note Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\OrderNote**](../Model/OrderNote.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\OrderNote**](../Model/OrderNote.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdNotesPost**
> \HappyCog\OsborneApi\ErpService\Model\OrderNote ordersOrderIdNotesPost($orderId, $body)

Create a new Note for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$body = new \HappyCog\OsborneApi\ErpService\Model\OrderNote(); // \HappyCog\OsborneApi\ErpService\Model\OrderNote | 

try {
    $result = $apiInstance->ordersOrderIdNotesPost($orderId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdNotesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\OrderNote**](../Model/OrderNote.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\OrderNote**](../Model/OrderNote.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdPaymentsGet**
> \HappyCog\OsborneApi\ErpService\Model\OrderPayment[] ordersOrderIdPaymentsGet($orderId)

Get a list of Payments for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id

try {
    $result = $apiInstance->ordersOrderIdPaymentsGet($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdPaymentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\OrderPayment[]**](../Model/OrderPayment.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdPaymentsOrderPaymentIdDeleteDelete**
> object ordersOrderIdPaymentsOrderPaymentIdDeleteDelete($orderId, $orderPaymentId)

Delete a Payment for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$orderPaymentId = 56; // int | Order Payment Id

try {
    $result = $apiInstance->ordersOrderIdPaymentsOrderPaymentIdDeleteDelete($orderId, $orderPaymentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdPaymentsOrderPaymentIdDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **orderPaymentId** | **int**| Order Payment Id |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdPaymentsOrderPaymentIdGet**
> \HappyCog\OsborneApi\ErpService\Model\OrderPayment ordersOrderIdPaymentsOrderPaymentIdGet($orderId, $orderPaymentId)

Get info about a Payment for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$orderPaymentId = 56; // int | Order Payment Id

try {
    $result = $apiInstance->ordersOrderIdPaymentsOrderPaymentIdGet($orderId, $orderPaymentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdPaymentsOrderPaymentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **orderPaymentId** | **int**| Order Payment Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\OrderPayment**](../Model/OrderPayment.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdPaymentsOrderPaymentIdPut**
> \HappyCog\OsborneApi\ErpService\Model\OrderPayment ordersOrderIdPaymentsOrderPaymentIdPut($orderId, $orderPaymentId, $body)

Update a Payment for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$orderPaymentId = 56; // int | Order Payment Id
$body = new \HappyCog\OsborneApi\ErpService\Model\OrderPayment(); // \HappyCog\OsborneApi\ErpService\Model\OrderPayment | 

try {
    $result = $apiInstance->ordersOrderIdPaymentsOrderPaymentIdPut($orderId, $orderPaymentId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdPaymentsOrderPaymentIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **orderPaymentId** | **int**| Order Payment Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\OrderPayment**](../Model/OrderPayment.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\OrderPayment**](../Model/OrderPayment.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdPaymentsPost**
> \HappyCog\OsborneApi\ErpService\Model\OrderPayment ordersOrderIdPaymentsPost($orderId, $body)

Create a new Payment for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$body = new \HappyCog\OsborneApi\ErpService\Model\OrderPayment(); // \HappyCog\OsborneApi\ErpService\Model\OrderPayment | 

try {
    $result = $apiInstance->ordersOrderIdPaymentsPost($orderId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdPaymentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\OrderPayment**](../Model/OrderPayment.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\OrderPayment**](../Model/OrderPayment.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdPut**
> \HappyCog\OsborneApi\ErpService\Model\Order ordersOrderIdPut($orderId, $body)

Update a Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$body = new \HappyCog\OsborneApi\ErpService\Model\Order(); // \HappyCog\OsborneApi\ErpService\Model\Order | 

try {
    $result = $apiInstance->ordersOrderIdPut($orderId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\Order**](../Model/Order.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Order**](../Model/Order.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdServicesAppliedOrderServiceIdDeleteDelete**
> object ordersOrderIdServicesAppliedOrderServiceIdDeleteDelete($orderId, $appliedOrderServiceId)

Delete an Applied Order Service for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$appliedOrderServiceId = 56; // int | Applied Order Service Id

try {
    $result = $apiInstance->ordersOrderIdServicesAppliedOrderServiceIdDeleteDelete($orderId, $appliedOrderServiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdServicesAppliedOrderServiceIdDeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **appliedOrderServiceId** | **int**| Applied Order Service Id |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdServicesAppliedOrderServiceIdGet**
> \HappyCog\OsborneApi\ErpService\Model\AppliedOrderService ordersOrderIdServicesAppliedOrderServiceIdGet($orderId, $appliedOrderServiceId)

Get info about an Applied Order Service for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$appliedOrderServiceId = 56; // int | Applied Order Service Id

try {
    $result = $apiInstance->ordersOrderIdServicesAppliedOrderServiceIdGet($orderId, $appliedOrderServiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdServicesAppliedOrderServiceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **appliedOrderServiceId** | **int**| Applied Order Service Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\AppliedOrderService**](../Model/AppliedOrderService.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdServicesAppliedOrderServiceIdPut**
> \HappyCog\OsborneApi\ErpService\Model\AppliedOrderService ordersOrderIdServicesAppliedOrderServiceIdPut($orderId, $appliedOrderServiceId, $body)

Update an Applied Order Service for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$appliedOrderServiceId = 56; // int | Applied Order Service Id
$body = new \HappyCog\OsborneApi\ErpService\Model\AppliedOrderService(); // \HappyCog\OsborneApi\ErpService\Model\AppliedOrderService | 

try {
    $result = $apiInstance->ordersOrderIdServicesAppliedOrderServiceIdPut($orderId, $appliedOrderServiceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdServicesAppliedOrderServiceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **appliedOrderServiceId** | **int**| Applied Order Service Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\AppliedOrderService**](../Model/AppliedOrderService.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\AppliedOrderService**](../Model/AppliedOrderService.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdServicesGet**
> \HappyCog\OsborneApi\ErpService\Model\AppliedOrderService[] ordersOrderIdServicesGet($orderId)

Get a list of Applied Order Services for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id

try {
    $result = $apiInstance->ordersOrderIdServicesGet($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdServicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\AppliedOrderService[]**](../Model/AppliedOrderService.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersOrderIdServicesPost**
> \HappyCog\OsborneApi\ErpService\Model\AppliedOrderService ordersOrderIdServicesPost($orderId, $body)

Create a new Applied Order Service for an Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 56; // int | Order Id
$body = new \HappyCog\OsborneApi\ErpService\Model\AppliedOrderService(); // \HappyCog\OsborneApi\ErpService\Model\AppliedOrderService | 

try {
    $result = $apiInstance->ordersOrderIdServicesPost($orderId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdServicesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| Order Id |
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\AppliedOrderService**](../Model/AppliedOrderService.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\AppliedOrderService**](../Model/AppliedOrderService.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersPost**
> \HappyCog\OsborneApi\ErpService\Model\Order ordersPost($body)

Create a new Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \HappyCog\OsborneApi\ErpService\Model\Order(); // \HappyCog\OsborneApi\ErpService\Model\Order | 

try {
    $result = $apiInstance->ordersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\Order**](../Model/Order.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Order**](../Model/Order.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

