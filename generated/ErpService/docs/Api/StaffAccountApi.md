# HappyCog\OsborneApi\ErpService\StaffAccountApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**staffAccountGet**](StaffAccountApi.md#staffaccountget) | **GET** /staff-account | Get a list of Staff Accounts
[**staffAccountStaffAccountIdGet**](StaffAccountApi.md#staffaccountstaffaccountidget) | **GET** /staff-account/{staffAccountId} | Get info about a Staff Account
[**staffAccountStaffAccountIdPermissionsGet**](StaffAccountApi.md#staffaccountstaffaccountidpermissionsget) | **GET** /staff-account/{staffAccountId}/permissions | Get a list of Permissions for a Staff Account

# **staffAccountGet**
> \HappyCog\OsborneApi\ErpService\Model\StaffAccount[] staffAccountGet()

Get a list of Staff Accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\StaffAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->staffAccountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffAccountApi->staffAccountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\StaffAccount[]**](../Model/StaffAccount.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **staffAccountStaffAccountIdGet**
> \HappyCog\OsborneApi\ErpService\Model\StaffAccount staffAccountStaffAccountIdGet($staffAccountId)

Get info about a Staff Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\StaffAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$staffAccountId = 56; // int | Staff Account Id

try {
    $result = $apiInstance->staffAccountStaffAccountIdGet($staffAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffAccountApi->staffAccountStaffAccountIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staffAccountId** | **int**| Staff Account Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\StaffAccount**](../Model/StaffAccount.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **staffAccountStaffAccountIdPermissionsGet**
> \HappyCog\OsborneApi\ErpService\Model\StaffAccountPermission[] staffAccountStaffAccountIdPermissionsGet($staffAccountId)

Get a list of Permissions for a Staff Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\StaffAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$staffAccountId = 56; // int | Staff Account Id

try {
    $result = $apiInstance->staffAccountStaffAccountIdPermissionsGet($staffAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffAccountApi->staffAccountStaffAccountIdPermissionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staffAccountId** | **int**| Staff Account Id |

### Return type

[**\HappyCog\OsborneApi\ErpService\Model\StaffAccountPermission[]**](../Model/StaffAccountPermission.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

