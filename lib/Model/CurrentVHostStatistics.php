<?php
/**
 * CurrentVHostStatistics
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.14
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
 * CurrentVHostStatistics Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CurrentVHostStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CurrentVHostStatistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total_connections' => '\Swagger\Client\Model\Long',
        'server_name' => 'string',
        'save_field_list' => 'string[]',
        'version' => 'string',
        'uptime' => '\Swagger\Client\Model\Long',
        'bytes_ın' => '\Swagger\Client\Model\Long',
        'bytes_out' => '\Swagger\Client\Model\Long'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'total_connections' => null,
        'server_name' => null,
        'save_field_list' => null,
        'version' => null,
        'uptime' => null,
        'bytes_ın' => null,
        'bytes_out' => null
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
        'total_connections' => 'totalConnections',
        'server_name' => 'serverName',
        'save_field_list' => 'saveFieldList',
        'version' => 'version',
        'uptime' => 'uptime',
        'bytes_ın' => 'bytesIn',
        'bytes_out' => 'bytesOut'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_connections' => 'setTotalConnections',
        'server_name' => 'setServerName',
        'save_field_list' => 'setSaveFieldList',
        'version' => 'setVersion',
        'uptime' => 'setUptime',
        'bytes_ın' => 'setBytesIn',
        'bytes_out' => 'setBytesOut'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_connections' => 'getTotalConnections',
        'server_name' => 'getServerName',
        'save_field_list' => 'getSaveFieldList',
        'version' => 'getVersion',
        'uptime' => 'getUptime',
        'bytes_ın' => 'getBytesIn',
        'bytes_out' => 'getBytesOut'
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
        $this->container['total_connections'] = isset($data['total_connections']) ? $data['total_connections'] : null;
        $this->container['server_name'] = isset($data['server_name']) ? $data['server_name'] : null;
        $this->container['save_field_list'] = isset($data['save_field_list']) ? $data['save_field_list'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['uptime'] = isset($data['uptime']) ? $data['uptime'] : null;
        $this->container['bytes_ın'] = isset($data['bytes_ın']) ? $data['bytes_ın'] : null;
        $this->container['bytes_out'] = isset($data['bytes_out']) ? $data['bytes_out'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['total_connections'] === null) {
            $invalidProperties[] = "'total_connections' can't be null";
        }
        if ($this->container['server_name'] === null) {
            $invalidProperties[] = "'server_name' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['uptime'] === null) {
            $invalidProperties[] = "'uptime' can't be null";
        }
        if ($this->container['bytes_ın'] === null) {
            $invalidProperties[] = "'bytes_ın' can't be null";
        }
        if ($this->container['bytes_out'] === null) {
            $invalidProperties[] = "'bytes_out' can't be null";
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
     * Gets total_connections
     *
     * @return \Swagger\Client\Model\Long
     */
    public function getTotalConnections()
    {
        return $this->container['total_connections'];
    }

    /**
     * Sets total_connections
     *
     * @param \Swagger\Client\Model\Long $total_connections total_connections
     *
     * @return $this
     */
    public function setTotalConnections($total_connections)
    {
        $this->container['total_connections'] = $total_connections;

        return $this;
    }

    /**
     * Gets server_name
     *
     * @return string
     */
    public function getServerName()
    {
        return $this->container['server_name'];
    }

    /**
     * Sets server_name
     *
     * @param string $server_name server_name
     *
     * @return $this
     */
    public function setServerName($server_name)
    {
        $this->container['server_name'] = $server_name;

        return $this;
    }

    /**
     * Gets save_field_list
     *
     * @return string[]
     */
    public function getSaveFieldList()
    {
        return $this->container['save_field_list'];
    }

    /**
     * Sets save_field_list
     *
     * @param string[] $save_field_list save_field_list
     *
     * @return $this
     */
    public function setSaveFieldList($save_field_list)
    {
        $this->container['save_field_list'] = $save_field_list;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets uptime
     *
     * @return \Swagger\Client\Model\Long
     */
    public function getUptime()
    {
        return $this->container['uptime'];
    }

    /**
     * Sets uptime
     *
     * @param \Swagger\Client\Model\Long $uptime uptime
     *
     * @return $this
     */
    public function setUptime($uptime)
    {
        $this->container['uptime'] = $uptime;

        return $this;
    }

    /**
     * Gets bytes_ın
     *
     * @return \Swagger\Client\Model\Long
     */
    public function getBytesIn()
    {
        return $this->container['bytes_ın'];
    }

    /**
     * Sets bytes_ın
     *
     * @param \Swagger\Client\Model\Long $bytes_ın bytes_ın
     *
     * @return $this
     */
    public function setBytesIn($bytes_ın)
    {
        $this->container['bytes_ın'] = $bytes_ın;

        return $this;
    }

    /**
     * Gets bytes_out
     *
     * @return \Swagger\Client\Model\Long
     */
    public function getBytesOut()
    {
        return $this->container['bytes_out'];
    }

    /**
     * Sets bytes_out
     *
     * @param \Swagger\Client\Model\Long $bytes_out bytes_out
     *
     * @return $this
     */
    public function setBytesOut($bytes_out)
    {
        $this->container['bytes_out'] = $bytes_out;

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

