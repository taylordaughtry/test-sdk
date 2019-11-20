<?php
/**
 * Order
 *
 * PHP version 5
 *
 * @category Class
 * @package  HappyCog\OsborneApi\ErpService
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Osborne ERP Service API
 *
 * This specification outlines an ideal API built on the Osborne ERP that will provide an integraion for Craft CMS at osbornewood.com
 *
 * OpenAPI spec version: 1.0.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.13
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace HappyCog\OsborneApi\ErpService\Model;

use \ArrayAccess;
use \HappyCog\OsborneApi\ErpService\ObjectSerializer;

/**
 * Order Class Doc Comment
 *
 * @category Class
 * @package  HappyCog\OsborneApi\ErpService
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Order extends \HappyCog\OsborneApi\Resources\Base\Model implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'customerId' => 'int',
'email' => 'string',
'status' => 'string',
'scheduledShipDate' => 'string',
'billingAddress' => '\HappyCog\OsborneApi\ErpService\Model\Address',
'shippingAddress' => '',
'taxZoneId' => 'int',
'buyingGroupId' => 'int',
'purchaseOrderNumber' => 'string',
'appliedCouponCode' => 'string',
'enteredById' => 'int',
'instructions' => 'string',
'shippingCarrierId' => 'int',
'shippingMethodId' => 'int',
'paymentMethodId' => 'int',
'creditCardLastFour' => 'string',
'subtotal' => 'float',
'discount' => 'float',
'tax' => 'float',
'shipping' => 'float',
'total' => 'float',
'trackingNumber' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'customerId' => null,
'email' => null,
'status' => null,
'scheduledShipDate' => null,
'billingAddress' => null,
'shippingAddress' => null,
'taxZoneId' => null,
'buyingGroupId' => null,
'purchaseOrderNumber' => null,
'appliedCouponCode' => null,
'enteredById' => null,
'instructions' => null,
'shippingCarrierId' => null,
'shippingMethodId' => null,
'paymentMethodId' => null,
'creditCardLastFour' => null,
'subtotal' => null,
'discount' => null,
'tax' => null,
'shipping' => null,
'total' => null,
'trackingNumber' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'customerId' => 'customerId',
'email' => 'email',
'status' => 'status',
'scheduledShipDate' => 'scheduledShipDate',
'billingAddress' => 'billingAddress',
'shippingAddress' => 'shippingAddress',
'taxZoneId' => 'taxZoneId',
'buyingGroupId' => 'buyingGroupId',
'purchaseOrderNumber' => 'purchaseOrderNumber',
'appliedCouponCode' => 'appliedCouponCode',
'enteredById' => 'enteredById',
'instructions' => 'instructions',
'shippingCarrierId' => 'shippingCarrierId',
'shippingMethodId' => 'shippingMethodId',
'paymentMethodId' => 'paymentMethodId',
'creditCardLastFour' => 'creditCardLastFour',
'subtotal' => 'subtotal',
'discount' => 'discount',
'tax' => 'tax',
'shipping' => 'shipping',
'total' => 'total',
'trackingNumber' => 'trackingNumber'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'customerId' => 'setCustomerId',
'email' => 'setEmail',
'status' => 'setStatus',
'scheduledShipDate' => 'setScheduledShipDate',
'billingAddress' => 'setBillingAddress',
'shippingAddress' => 'setShippingAddress',
'taxZoneId' => 'setTaxZoneId',
'buyingGroupId' => 'setBuyingGroupId',
'purchaseOrderNumber' => 'setPurchaseOrderNumber',
'appliedCouponCode' => 'setAppliedCouponCode',
'enteredById' => 'setEnteredById',
'instructions' => 'setInstructions',
'shippingCarrierId' => 'setShippingCarrierId',
'shippingMethodId' => 'setShippingMethodId',
'paymentMethodId' => 'setPaymentMethodId',
'creditCardLastFour' => 'setCreditCardLastFour',
'subtotal' => 'setSubtotal',
'discount' => 'setDiscount',
'tax' => 'setTax',
'shipping' => 'setShipping',
'total' => 'setTotal',
'trackingNumber' => 'setTrackingNumber'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'customerId' => 'getCustomerId',
'email' => 'getEmail',
'status' => 'getStatus',
'scheduledShipDate' => 'getScheduledShipDate',
'billingAddress' => 'getBillingAddress',
'shippingAddress' => 'getShippingAddress',
'taxZoneId' => 'getTaxZoneId',
'buyingGroupId' => 'getBuyingGroupId',
'purchaseOrderNumber' => 'getPurchaseOrderNumber',
'appliedCouponCode' => 'getAppliedCouponCode',
'enteredById' => 'getEnteredById',
'instructions' => 'getInstructions',
'shippingCarrierId' => 'getShippingCarrierId',
'shippingMethodId' => 'getShippingMethodId',
'paymentMethodId' => 'getPaymentMethodId',
'creditCardLastFour' => 'getCreditCardLastFour',
'subtotal' => 'getSubtotal',
'discount' => 'getDiscount',
'tax' => 'getTax',
'shipping' => 'getShipping',
'total' => 'getTotal',
'trackingNumber' => 'getTrackingNumber'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['scheduledShipDate'] = isset($data['scheduledShipDate']) ? $data['scheduledShipDate'] : null;
        $this->container['billingAddress'] = isset($data['billingAddress']) ? $data['billingAddress'] : null;
        $this->container['shippingAddress'] = isset($data['shippingAddress']) ? $data['shippingAddress'] : null;
        $this->container['taxZoneId'] = isset($data['taxZoneId']) ? $data['taxZoneId'] : null;
        $this->container['buyingGroupId'] = isset($data['buyingGroupId']) ? $data['buyingGroupId'] : null;
        $this->container['purchaseOrderNumber'] = isset($data['purchaseOrderNumber']) ? $data['purchaseOrderNumber'] : null;
        $this->container['appliedCouponCode'] = isset($data['appliedCouponCode']) ? $data['appliedCouponCode'] : null;
        $this->container['enteredById'] = isset($data['enteredById']) ? $data['enteredById'] : null;
        $this->container['instructions'] = isset($data['instructions']) ? $data['instructions'] : null;
        $this->container['shippingCarrierId'] = isset($data['shippingCarrierId']) ? $data['shippingCarrierId'] : null;
        $this->container['shippingMethodId'] = isset($data['shippingMethodId']) ? $data['shippingMethodId'] : null;
        $this->container['paymentMethodId'] = isset($data['paymentMethodId']) ? $data['paymentMethodId'] : null;
        $this->container['creditCardLastFour'] = isset($data['creditCardLastFour']) ? $data['creditCardLastFour'] : null;
        $this->container['subtotal'] = isset($data['subtotal']) ? $data['subtotal'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['trackingNumber'] = isset($data['trackingNumber']) ? $data['trackingNumber'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['customerId'] === null) {
            $invalidProperties[] = "'customerId' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets customerId
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
     * Sets customerId
     *
     * @param int $customerId customerId
     *
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets scheduledShipDate
     *
     * @return string
     */
    public function getScheduledShipDate()
    {
        return $this->container['scheduledShipDate'];
    }

    /**
     * Sets scheduledShipDate
     *
     * @param string $scheduledShipDate ISO 8601 format
     *
     * @return $this
     */
    public function setScheduledShipDate($scheduledShipDate)
    {
        $this->container['scheduledShipDate'] = $scheduledShipDate;

        return $this;
    }

    /**
     * Gets billingAddress
     *
     * @return \HappyCog\OsborneApi\ErpService\Model\Address
     */
    public function getBillingAddress()
    {
        return $this->container['billingAddress'];
    }

    /**
     * Sets billingAddress
     *
     * @param \HappyCog\OsborneApi\ErpService\Model\Address $billingAddress billingAddress
     *
     * @return $this
     */
    public function setBillingAddress($billingAddress)
    {
        $this->container['billingAddress'] = $billingAddress;

        return $this;
    }

    /**
     * Gets shippingAddress
     *
     * @return 
     */
    public function getShippingAddress()
    {
        return $this->container['shippingAddress'];
    }

    /**
     * Sets shippingAddress
     *
     * @param  $shippingAddress shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->container['shippingAddress'] = $shippingAddress;

        return $this;
    }

    /**
     * Gets taxZoneId
     *
     * @return int
     */
    public function getTaxZoneId()
    {
        return $this->container['taxZoneId'];
    }

    /**
     * Sets taxZoneId
     *
     * @param int $taxZoneId taxZoneId
     *
     * @return $this
     */
    public function setTaxZoneId($taxZoneId)
    {
        $this->container['taxZoneId'] = $taxZoneId;

        return $this;
    }

    /**
     * Gets buyingGroupId
     *
     * @return int
     */
    public function getBuyingGroupId()
    {
        return $this->container['buyingGroupId'];
    }

    /**
     * Sets buyingGroupId
     *
     * @param int $buyingGroupId buyingGroupId
     *
     * @return $this
     */
    public function setBuyingGroupId($buyingGroupId)
    {
        $this->container['buyingGroupId'] = $buyingGroupId;

        return $this;
    }

    /**
     * Gets purchaseOrderNumber
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchaseOrderNumber'];
    }

    /**
     * Sets purchaseOrderNumber
     *
     * @param string $purchaseOrderNumber purchaseOrderNumber
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->container['purchaseOrderNumber'] = $purchaseOrderNumber;

        return $this;
    }

    /**
     * Gets appliedCouponCode
     *
     * @return string
     */
    public function getAppliedCouponCode()
    {
        return $this->container['appliedCouponCode'];
    }

    /**
     * Sets appliedCouponCode
     *
     * @param string $appliedCouponCode appliedCouponCode
     *
     * @return $this
     */
    public function setAppliedCouponCode($appliedCouponCode)
    {
        $this->container['appliedCouponCode'] = $appliedCouponCode;

        return $this;
    }

    /**
     * Gets enteredById
     *
     * @return int
     */
    public function getEnteredById()
    {
        return $this->container['enteredById'];
    }

    /**
     * Sets enteredById
     *
     * @param int $enteredById enteredById
     *
     * @return $this
     */
    public function setEnteredById($enteredById)
    {
        $this->container['enteredById'] = $enteredById;

        return $this;
    }

    /**
     * Gets instructions
     *
     * @return string
     */
    public function getInstructions()
    {
        return $this->container['instructions'];
    }

    /**
     * Sets instructions
     *
     * @param string $instructions instructions
     *
     * @return $this
     */
    public function setInstructions($instructions)
    {
        $this->container['instructions'] = $instructions;

        return $this;
    }

    /**
     * Gets shippingCarrierId
     *
     * @return int
     */
    public function getShippingCarrierId()
    {
        return $this->container['shippingCarrierId'];
    }

    /**
     * Sets shippingCarrierId
     *
     * @param int $shippingCarrierId shippingCarrierId
     *
     * @return $this
     */
    public function setShippingCarrierId($shippingCarrierId)
    {
        $this->container['shippingCarrierId'] = $shippingCarrierId;

        return $this;
    }

    /**
     * Gets shippingMethodId
     *
     * @return int
     */
    public function getShippingMethodId()
    {
        return $this->container['shippingMethodId'];
    }

    /**
     * Sets shippingMethodId
     *
     * @param int $shippingMethodId shippingMethodId
     *
     * @return $this
     */
    public function setShippingMethodId($shippingMethodId)
    {
        $this->container['shippingMethodId'] = $shippingMethodId;

        return $this;
    }

    /**
     * Gets paymentMethodId
     *
     * @return int
     */
    public function getPaymentMethodId()
    {
        return $this->container['paymentMethodId'];
    }

    /**
     * Sets paymentMethodId
     *
     * @param int $paymentMethodId paymentMethodId
     *
     * @return $this
     */
    public function setPaymentMethodId($paymentMethodId)
    {
        $this->container['paymentMethodId'] = $paymentMethodId;

        return $this;
    }

    /**
     * Gets creditCardLastFour
     *
     * @return string
     */
    public function getCreditCardLastFour()
    {
        return $this->container['creditCardLastFour'];
    }

    /**
     * Sets creditCardLastFour
     *
     * @param string $creditCardLastFour creditCardLastFour
     *
     * @return $this
     */
    public function setCreditCardLastFour($creditCardLastFour)
    {
        $this->container['creditCardLastFour'] = $creditCardLastFour;

        return $this;
    }

    /**
     * Gets subtotal
     *
     * @return float
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param float $subtotal subtotal
     *
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return float
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param float $discount discount
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return float
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param float $tax tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return float
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param float $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets trackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['trackingNumber'];
    }

    /**
     * Sets trackingNumber
     *
     * @param string $trackingNumber The tracking number provided by the shipping carrier
     *
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->container['trackingNumber'] = $trackingNumber;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}