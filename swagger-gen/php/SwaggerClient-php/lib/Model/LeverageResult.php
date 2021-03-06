<?php
/**
 * LeverageResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bybit API
 *
 * ## REST API for the Bybit Exchange. Base URI: [https://api-testnet.bybit.com]
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@bybit.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * LeverageResult Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LeverageResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LeverageResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'btcusd' => 'object',
        'eosusd' => 'object',
        'ethusd' => 'object',
        'xrpusd' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'btcusd' => null,
        'eosusd' => null,
        'ethusd' => null,
        'xrpusd' => null
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
        'btcusd' => 'BTCUSD',
        'eosusd' => 'EOSUSD',
        'ethusd' => 'ETHUSD',
        'xrpusd' => 'XRPUSD'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'btcusd' => 'setBtcusd',
        'eosusd' => 'setEosusd',
        'ethusd' => 'setEthusd',
        'xrpusd' => 'setXrpusd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'btcusd' => 'getBtcusd',
        'eosusd' => 'getEosusd',
        'ethusd' => 'getEthusd',
        'xrpusd' => 'getXrpusd'
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
        $this->container['btcusd'] = isset($data['btcusd']) ? $data['btcusd'] : null;
        $this->container['eosusd'] = isset($data['eosusd']) ? $data['eosusd'] : null;
        $this->container['ethusd'] = isset($data['ethusd']) ? $data['ethusd'] : null;
        $this->container['xrpusd'] = isset($data['xrpusd']) ? $data['xrpusd'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets btcusd
     *
     * @return object
     */
    public function getBtcusd()
    {
        return $this->container['btcusd'];
    }

    /**
     * Sets btcusd
     *
     * @param object $btcusd btcusd
     *
     * @return $this
     */
    public function setBtcusd($btcusd)
    {
        $this->container['btcusd'] = $btcusd;

        return $this;
    }

    /**
     * Gets eosusd
     *
     * @return object
     */
    public function getEosusd()
    {
        return $this->container['eosusd'];
    }

    /**
     * Sets eosusd
     *
     * @param object $eosusd eosusd
     *
     * @return $this
     */
    public function setEosusd($eosusd)
    {
        $this->container['eosusd'] = $eosusd;

        return $this;
    }

    /**
     * Gets ethusd
     *
     * @return object
     */
    public function getEthusd()
    {
        return $this->container['ethusd'];
    }

    /**
     * Sets ethusd
     *
     * @param object $ethusd ethusd
     *
     * @return $this
     */
    public function setEthusd($ethusd)
    {
        $this->container['ethusd'] = $ethusd;

        return $this;
    }

    /**
     * Gets xrpusd
     *
     * @return object
     */
    public function getXrpusd()
    {
        return $this->container['xrpusd'];
    }

    /**
     * Sets xrpusd
     *
     * @param object $xrpusd xrpusd
     *
     * @return $this
     */
    public function setXrpusd($xrpusd)
    {
        $this->container['xrpusd'] = $xrpusd;

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


