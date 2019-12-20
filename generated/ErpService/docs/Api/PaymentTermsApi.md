# HappyCog\OsborneApi\ErpService\PaymentTermsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentTermsGet**](PaymentTermsApi.md#paymentTermsGet) | **GET** /payment-terms | Used for initial import only  Get a list of Payment Terms
[**paymentTermsPaymentTermIdGet**](PaymentTermsApi.md#paymentTermsPaymentTermIdGet) | **GET** /payment-terms/{paymentTermId} | Used for initial import only  Get info about a Payment Term


# **paymentTermsGet**
> \HappyCog\OsborneApi\ErpService\Model\PaymentTerm[] paymentTermsGet()

Used for initial import only  Get a list of Payment Terms

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\PaymentTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->paymentTermsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermsApi->paymentTermsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\PaymentTerm[]**](../Model/PaymentTerm.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentTermsPaymentTermIdGet**
> \HappyCog\OsborneApi\ErpService\Model\PaymentTerm paymentTermsPaymentTermIdGet($paymentTermId)

Used for initial import only  Get info about a Payment Term

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\PaymentTermsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$paymentTermId = 56; // int | Payment Term Id

try {
    $result = $apiInstance->paymentTermsPaymentTermIdGet($paymentTermId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTermsApi->paymentTermsPaymentTermIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentTermId** | **int**| Payment Term Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\PaymentTerm**](../Model/PaymentTerm.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

