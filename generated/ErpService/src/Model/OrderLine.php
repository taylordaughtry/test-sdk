<?php
/**
 * OrderLine
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
 * OrderLine Class Doc Comment
 *
 * @category Class
 * @package  HappyCog\OsborneApi\ErpService
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderLine extends \HappyCog\OsborneApi\Resources\Base\Model implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'productId' => 'int',
'productMaterialId' => 'int',
'quantity' => 'int',
'originalPrice' => 'float',
'unitPrice' => 'float',
'totalPrice' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'productId' => null,
'productMaterialId' => null,
'quantity' => null,
'originalPrice' => null,
'unitPrice' => null,
'totalPrice' => null    ];

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
'productId' => 'productId',
'productMaterialId' => 'productMaterialId',
'quantity' => 'quantity',
'originalPrice' => 'originalPrice',
'unitPrice' => 'unitPrice',
'totalPrice' => 'totalPrice'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'productId' => 'setProductId',
'productMaterialId' => 'setProductMaterialId',
'quantity' => 'setQuantity',
'originalPrice' => 'setOriginalPrice',
'unitPrice' => 'setUnitPrice',
'totalPrice' => 'setTotalPrice'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'productId' => 'getProductId',
'productMaterialId' => 'getProductMaterialId',
'quantity' => 'getQuantity',
'originalPrice' => 'getOriginalPrice',
'unitPrice' => 'getUnitPrice',
'totalPrice' => 'getTotalPrice'    ];

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
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['productMaterialId'] = isset($data['productMaterialId']) ? $data['productMaterialId'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['originalPrice'] = isset($data['originalPrice']) ? $data['originalPrice'] : null;
        $this->container['unitPrice'] = isset($data['unitPrice']) ? $data['unitPrice'] : null;
        $this->container['totalPrice'] = isset($data['totalPrice']) ? $data['totalPrice'] : null;
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
        if ($this->container['productId'] === null) {
            $invalidProperties[] = "'productId' can't be null";
        }
        if ($this->container['productMaterialId'] === null) {
            $invalidProperties[] = "'productMaterialId' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['originalPrice'] === null) {
            $invalidProperties[] = "'originalPrice' can't be null";
        }
        if ($this->container['unitPrice'] === null) {
            $invalidProperties[] = "'unitPrice' can't be null";
        }
        if ($this->container['totalPrice'] === null) {
            $invalidProperties[] = "'totalPrice' can't be null";
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
     * Gets productId
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     *
     * @param int $productId productId
     *
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;

        return $this;
    }

    /**
     * Gets productMaterialId
     *
     * @return int
     */
    public function getProductMaterialId()
    {
        return $this->container['productMaterialId'];
    }

    /**
     * Sets productMaterialId
     *
     * @param int $productMaterialId productMaterialId
     *
     * @return $this
     */
    public function setProductMaterialId($productMaterialId)
    {
        $this->container['productMaterialId'] = $productMaterialId;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets originalPrice
     *
     * @return float
     */
    public function getOriginalPrice()
    {
        return $this->container['originalPrice'];
    }

    /**
     * Sets originalPrice
     *
     * @param float $originalPrice originalPrice
     *
     * @return $this
     */
    public function setOriginalPrice($originalPrice)
    {
        $this->container['originalPrice'] = $originalPrice;

        return $this;
    }

    /**
     * Gets unitPrice
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     *
     * @param float $unitPrice Original Price + Applied Product Service Costs
     *
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets totalPrice
     *
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->container['totalPrice'];
    }

    /**
     * Sets totalPrice
     *
     * @param float $totalPrice Unit Price * Quantity
     *
     * @return $this
     */
    public function setTotalPrice($totalPrice)
    {
        $this->container['totalPrice'] = $totalPrice;

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
