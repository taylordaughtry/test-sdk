# HappyCog\OsborneApi\ErpService\TaxZonesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taxZonesGet**](TaxZonesApi.md#taxzonesget) | **GET** /tax-zones | Get a list of Tax Zones
[**taxZonesTaxZoneIdGet**](TaxZonesApi.md#taxzonestaxzoneidget) | **GET** /tax-zones/{taxZoneId} | Get info about a Tax Zone

# **taxZonesGet**
> \HappyCog\OsborneApi\ErpService\Model\TaxZone[] taxZonesGet()

Get a list of Tax Zones

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\TaxZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->taxZonesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxZonesApi->taxZonesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\TaxZone[]**](../Model/TaxZone.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxZonesTaxZoneIdGet**
> \HappyCog\OsborneApi\ErpService\Model\TaxZone taxZonesTaxZoneIdGet($taxZoneId)

Get info about a Tax Zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\TaxZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taxZoneId = 56; // int | Tax Zone Id

try {
    $result = $apiInstance->taxZonesTaxZoneIdGet($taxZoneId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxZonesApi->taxZonesTaxZoneIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taxZoneId** | **int**| Tax Zone Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\TaxZone**](../Model/TaxZone.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

