# HappyCog\OsborneApi\ErpService\ShippingEstimatesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shippingEstimatesPost**](ShippingEstimatesApi.md#shippingEstimatesPost) | **POST** /shipping-estimates | Create a shipping estimate based on in progress Order information


# **shippingEstimatesPost**
> \HappyCog\OsborneApi\ErpService\Model\ShippingEstimate shippingEstimatesPost($body)

Create a shipping estimate based on in progress Order information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\ShippingEstimatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \HappyCog\OsborneApi\ErpService\Model\ShippingEstimateRequest(); // \HappyCog\OsborneApi\ErpService\Model\ShippingEstimateRequest | 

try {
    $result = $apiInstance->shippingEstimatesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingEstimatesApi->shippingEstimatesPost: ', $e->getMessage(), PHP_EOL;
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

