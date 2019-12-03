# HappyCog\OsborneApi\ErpService\ShippingEstimateApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shippingEstimatePost**](ShippingEstimateApi.md#shippingEstimatePost) | **POST** /shipping-estimate | Create a shipping estimate based on in progress Order information


# **shippingEstimatePost**
> \HappyCog\OsborneApi\ErpService\Model\ShippingEstimate shippingEstimatePost($body)

Create a shipping estimate based on in progress Order information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ShippingEstimateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \HappyCog\OsborneApi\ErpService\Model\ShippingEstimateRequest(); // \HappyCog\OsborneApi\ErpService\Model\ShippingEstimateRequest | 

try {
    $result = $apiInstance->shippingEstimatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingEstimateApi->shippingEstimatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\HappyCog\OsborneApi\ErpService\Model\ShippingEstimateRequest**](../Model/ShippingEstimateRequest.md)|  | [optional]

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\ShippingEstimate**](../Model/ShippingEstimate.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

