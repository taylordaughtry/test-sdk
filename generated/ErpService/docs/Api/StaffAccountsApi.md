# HappyCog\OsborneApi\ErpService\StaffAccountsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**staffAccountsGet**](StaffAccountsApi.md#staffAccountsGet) | **GET** /staff-accounts | Get a list of Staff Accounts
[**staffAccountsStaffAccountIdGet**](StaffAccountsApi.md#staffAccountsStaffAccountIdGet) | **GET** /staff-accounts/{staffAccountId} | Get info about a Staff Account
[**staffAccountsStaffAccountIdPermissionsGet**](StaffAccountsApi.md#staffAccountsStaffAccountIdPermissionsGet) | **GET** /staff-accounts/{staffAccountId}/permissions | Get a list of Permissions for a Staff Account


# **staffAccountsGet**
> \HappyCog\OsborneApi\ErpService\Model\StaffAccount[] staffAccountsGet()

Get a list of Staff Accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\StaffAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->staffAccountsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffAccountsApi->staffAccountsGet: ', $e->getMessage(), PHP_EOL;
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

# **staffAccountsStaffAccountIdGet**
> \HappyCog\OsborneApi\ErpService\Model\StaffAccount staffAccountsStaffAccountIdGet($staffAccountId)

Get info about a Staff Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\StaffAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$staffAccountId = 56; // int | Staff Account Id

try {
    $result = $apiInstance->staffAccountsStaffAccountIdGet($staffAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffAccountsApi->staffAccountsStaffAccountIdGet: ', $e->getMessage(), PHP_EOL;
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

# **staffAccountsStaffAccountIdPermissionsGet**
> \HappyCog\OsborneApi\ErpService\Model\StaffAccountPermission[] staffAccountsStaffAccountIdPermissionsGet($staffAccountId)

Get a list of Permissions for a Staff Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

    // Configure HTTP bearer authorization: bearerAuth
    $config = HappyCog\OsborneApi\ErpService\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HappyCog\OsborneApi\ErpService\Api\StaffAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$staffAccountId = 56; // int | Staff Account Id

try {
    $result = $apiInstance->staffAccountsStaffAccountIdPermissionsGet($staffAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffAccountsApi->staffAccountsStaffAccountIdPermissionsGet: ', $e->getMessage(), PHP_EOL;
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

