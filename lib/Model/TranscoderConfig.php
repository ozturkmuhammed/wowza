<?php
/**
 * TranscoderConfig
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
 * TranscoderConfig Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TranscoderConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TranscoderConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'licenses' => 'int',
        'licensed' => 'bool',
        'licenses_ın_use' => 'int',
        'templates' => '\Swagger\Client\Model\TranscoderTemplatesConfig',
        'available' => 'bool',
        'server_name' => 'string',
        'save_field_list' => 'string[]',
        'version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'licenses' => 'int32',
        'licensed' => null,
        'licenses_ın_use' => 'int32',
        'templates' => null,
        'available' => null,
        'server_name' => null,
        'save_field_list' => null,
        'version' => null
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
        'licenses' => 'licenses',
        'licensed' => 'licensed',
        'licenses_ın_use' => 'licensesInUse',
        'templates' => 'templates',
        'available' => 'available',
        'server_name' => 'serverName',
        'save_field_list' => 'saveFieldList',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'licenses' => 'setLicenses',
        'licensed' => 'setLicensed',
        'licenses_ın_use' => 'setLicensesInUse',
        'templates' => 'setTemplates',
        'available' => 'setAvailable',
        'server_name' => 'setServerName',
        'save_field_list' => 'setSaveFieldList',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'licenses' => 'getLicenses',
        'licensed' => 'getLicensed',
        'licenses_ın_use' => 'getLicensesInUse',
        'templates' => 'getTemplates',
        'available' => 'getAvailable',
        'server_name' => 'getServerName',
        'save_field_list' => 'getSaveFieldList',
        'version' => 'getVersion'
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
        $this->container['licenses'] = isset($data['licenses']) ? $data['licenses'] : null;
        $this->container['licensed'] = isset($data['licensed']) ? $data['licensed'] : null;
        $this->container['licenses_ın_use'] = isset($data['licenses_ın_use']) ? $data['licenses_ın_use'] : null;
        $this->container['templates'] = isset($data['templates']) ? $data['templates'] : null;
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['server_name'] = isset($data['server_name']) ? $data['server_name'] : null;
        $this->container['save_field_list'] = isset($data['save_field_list']) ? $data['save_field_list'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['licenses'] === null) {
            $invalidProperties[] = "'licenses' can't be null";
        }
        if ($this->container['licensed'] === null) {
            $invalidProperties[] = "'licensed' can't be null";
        }
        if ($this->container['licenses_ın_use'] === null) {
            $invalidProperties[] = "'licenses_ın_use' can't be null";
        }
        if ($this->container['templates'] === null) {
            $invalidProperties[] = "'templates' can't be null";
        }
        if ($this->container['available'] === null) {
            $invalidProperties[] = "'available' can't be null";
        }
        if ($this->container['server_name'] === null) {
            $invalidProperties[] = "'server_name' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
     * Gets licenses
     *
     * @return int
     */
    public function getLicenses()
    {
        return $this->container['licenses'];
    }

    /**
     * Sets licenses
     *
     * @param int $licenses licenses
     *
     * @return $this
     */
    public function setLicenses($licenses)
    {
        $this->container['licenses'] = $licenses;

        return $this;
    }

    /**
     * Gets licensed
     *
     * @return bool
     */
    public function getLicensed()
    {
        return $this->container['licensed'];
    }

    /**
     * Sets licensed
     *
     * @param bool $licensed licensed
     *
     * @return $this
     */
    public function setLicensed($licensed)
    {
        $this->container['licensed'] = $licensed;

        return $this;
    }

    /**
     * Gets licenses_ın_use
     *
     * @return int
     */
    public function getLicensesInUse()
    {
        return $this->container['licenses_ın_use'];
    }

    /**
     * Sets licenses_ın_use
     *
     * @param int $licenses_ın_use licenses_ın_use
     *
     * @return $this
     */
    public function setLicensesInUse($licenses_ın_use)
    {
        $this->container['licenses_ın_use'] = $licenses_ın_use;

        return $this;
    }

    /**
     * Gets templates
     *
     * @return \Swagger\Client\Model\TranscoderTemplatesConfig
     */
    public function getTemplates()
    {
        return $this->container['templates'];
    }

    /**
     * Sets templates
     *
     * @param \Swagger\Client\Model\TranscoderTemplatesConfig $templates templates
     *
     * @return $this
     */
    public function setTemplates($templates)
    {
        $this->container['templates'] = $templates;

        return $this;
    }

    /**
     * Gets available
     *
     * @return bool
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     *
     * @param bool $available available
     *
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;

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


