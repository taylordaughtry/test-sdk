# HappyCog\OsborneApi\ErpService\DisclaimersApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**disclaimersDisclaimerIdGet**](DisclaimersApi.md#disclaimersDisclaimerIdGet) | **GET** /disclaimers/{disclaimerId} | Used for initial import only  Get info about a Disclaimer
[**disclaimersGet**](DisclaimersApi.md#disclaimersGet) | **GET** /disclaimers | Used for initial import only  Get a list of Disclaimers


# **disclaimersDisclaimerIdGet**
> \HappyCog\OsborneApi\ErpService\Model\Disclaimer disclaimersDisclaimerIdGet($disclaimerId)

Used for initial import only  Get info about a Disclaimer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\DisclaimersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$disclaimerId = 56; // int | Disclaimer Id

try {
    $result = $apiInstance->disclaimersDisclaimerIdGet($disclaimerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisclaimersApi->disclaimersDisclaimerIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **disclaimerId** | **int**| Disclaimer Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Disclaimer**](../Model/Disclaimer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disclaimersGet**
> \HappyCog\OsborneApi\ErpService\Model\Disclaimer[] disclaimersGet()

Used for initial import only  Get a list of Disclaimers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\DisclaimersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->disclaimersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisclaimersApi->disclaimersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\Disclaimer[]**](../Model/Disclaimer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

