# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | 
**customerId** | **int** |  | 
**email** | **string** |  | 
**status** | **string** |  | 
**scheduledShipDate** | **string** | ISO 8601 format | [optional] 
**billingAddress** | [**\HappyCog\OsborneApi\ErpService\Model\Address**](Address.md) |  | [optional] 
**shippingAddress** | [****](.md) |  | [optional] 
**taxZoneId** | **int** |  | [optional] 
**buyingGroupId** | **int** |  | [optional] 
**purchaseOrderNumber** | **string** |  | [optional] 
**appliedCouponCode** | **string** |  | [optional] 
**enteredById** | **int** |  | [optional] 
**instructions** | **string** |  | [optional] 
**shippingCarrierId** | **int** |  | [optional] 
**shippingMethodId** | **int** |  | [optional] 
**paymentMethodId** | **int** |  | [optional] 
**creditCardLastFour** | **string** |  | [optional] 
**subtotal** | **float** |  | [optional] 
**discount** | **float** |  | [optional] 
**tax** | **float** |  | [optional] 
**shipping** | **float** |  | [optional] 
**total** | **float** |  | [optional] 
**trackingNumber** | **string** | The tracking number provided by the shipping carrier | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


