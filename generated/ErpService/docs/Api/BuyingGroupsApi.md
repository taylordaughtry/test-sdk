# HappyCog\OsborneApi\ErpService\BuyingGroupsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**buyingGroupsBuyingGroupIdGet**](BuyingGroupsApi.md#buyinggroupsbuyinggroupidget) | **GET** /buying-groups/{buyingGroupId} | Get info about a Buying Group
[**buyingGroupsGet**](BuyingGroupsApi.md#buyinggroupsget) | **GET** /buying-groups | Get a list of Buying Groups

# **buyingGroupsBuyingGroupIdGet**
> \HappyCog\OsborneApi\ErpService\Model\BuyingGroup buyingGroupsBuyingGroupIdGet($buyingGroupId)

Get info about a Buying Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\BuyingGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buyingGroupId = 56; // int | Buying Group Id

try {
    $result = $apiInstance->buyingGroupsBuyingGroupIdGet($buyingGroupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyingGroupsApi->buyingGroupsBuyingGroupIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buyingGroupId** | **int**| Buying Group Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\BuyingGroup**](../Model/BuyingGroup.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buyingGroupsGet**
> \HappyCog\OsborneApi\ErpService\Model\BuyingGroup[] buyingGroupsGet()

Get a list of Buying Groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\BuyingGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->buyingGroupsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyingGroupsApi->buyingGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\BuyingGroup[]**](../Model/BuyingGroup.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

