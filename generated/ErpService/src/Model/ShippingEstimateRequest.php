<?php
/**
 * ShippingEstimateRequest
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
 * OpenAPI spec version: 1.0.5
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
 * ShippingEstimateRequest Class Doc Comment
 *
 * @category Class
 * @description Estimate for shipping an unfinished order to a customer address  Note: Either zipcode or destinationAddress is required
 * @package  HappyCog\OsborneApi\ErpService
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingEstimateRequest extends \HappyCog\OsborneApi\Resources\Base\Model implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShippingEstimateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'orderLines' => '\HappyCog\OsborneApi\ErpService\Model\OrderLine[]',
        'orderServices' => '\HappyCog\OsborneApi\ErpService\Model\OrderService[]',
        'zipcode' => 'string',
        'destinationAddress' => '\HappyCog\OsborneApi\ErpService\Model\Address'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'orderLines' => null,
        'orderServices' => null,
        'zipcode' => null,
        'destinationAddress' => null
    ];

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
        'orderLines' => 'orderLines',
        'orderServices' => 'orderServices',
        'zipcode' => 'zipcode',
        'destinationAddress' => 'destinationAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orderLines' => 'setOrderLines',
        'orderServices' => 'setOrderServices',
        'zipcode' => 'setZipcode',
        'destinationAddress' => 'setDestinationAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orderLines' => 'getOrderLines',
        'orderServices' => 'getOrderServices',
        'zipcode' => 'getZipcode',
        'destinationAddress' => 'getDestinationAddress'
    ];

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
        $this->container['orderLines'] = isset($data['orderLines']) ? $data['orderLines'] : null;
        $this->container['orderServices'] = isset($data['orderServices']) ? $data['orderServices'] : null;
        $this->container['zipcode'] = isset($data['zipcode']) ? $data['zipcode'] : null;
        $this->container['destinationAddress'] = isset($data['destinationAddress']) ? $data['destinationAddress'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['orderLines'] === null) {
            $invalidProperties[] = "'orderLines' can't be null";
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
     * Gets orderLines
     *
     * @return \HappyCog\OsborneApi\ErpService\Model\OrderLine[]
     */
    public function getOrderLines()
    {
        return $this->container['orderLines'];
    }

    /**
     * Sets orderLines
     *
     * @param \HappyCog\OsborneApi\ErpService\Model\OrderLine[] $orderLines orderLines
     *
     * @return $this
     */
    public function setOrderLines($orderLines)
    {
        $this->container['orderLines'] = $orderLines;

        return $this;
    }

    /**
     * Gets orderServices
     *
     * @return \HappyCog\OsborneApi\ErpService\Model\OrderService[]
     */
    public function getOrderServices()
    {
        return $this->container['orderServices'];
    }

    /**
     * Sets orderServices
     *
     * @param \HappyCog\OsborneApi\ErpService\Model\OrderService[] $orderServices orderServices
     *
     * @return $this
     */
    public function setOrderServices($orderServices)
    {
        $this->container['orderServices'] = $orderServices;

        return $this;
    }

    /**
     * Gets zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    /**
     * Sets zipcode
     *
     * @param string $zipcode zipcode
     *
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->container['zipcode'] = $zipcode;

        return $this;
    }

    /**
     * Gets destinationAddress
     *
     * @return \HappyCog\OsborneApi\ErpService\Model\Address
     */
    public function getDestinationAddress()
    {
        return $this->container['destinationAddress'];
    }

    /**
     * Sets destinationAddress
     *
     * @param \HappyCog\OsborneApi\ErpService\Model\Address $destinationAddress destinationAddress
     *
     * @return $this
     */
    public function setDestinationAddress($destinationAddress)
    {
        $this->container['destinationAddress'] = $destinationAddress;

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


