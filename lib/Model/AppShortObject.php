<?php
/**
 * AppShortObject
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
 * AppShortObject Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppShortObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AppShortObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'drm_enabled' => 'bool',
        'stream_targets_enabled' => 'bool',
        'app_type' => 'string',
        'transcoder_enabled' => 'bool',
        'dvr_enabled' => 'bool',
        'id' => 'string',
        'href' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'drm_enabled' => null,
        'stream_targets_enabled' => null,
        'app_type' => null,
        'transcoder_enabled' => null,
        'dvr_enabled' => null,
        'id' => null,
        'href' => null
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
        'drm_enabled' => 'drmEnabled',
        'stream_targets_enabled' => 'streamTargetsEnabled',
        'app_type' => 'appType',
        'transcoder_enabled' => 'transcoderEnabled',
        'dvr_enabled' => 'dvrEnabled',
        'id' => 'id',
        'href' => 'href'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'drm_enabled' => 'setDrmEnabled',
        'stream_targets_enabled' => 'setStreamTargetsEnabled',
        'app_type' => 'setAppType',
        'transcoder_enabled' => 'setTranscoderEnabled',
        'dvr_enabled' => 'setDvrEnabled',
        'id' => 'setId',
        'href' => 'setHref'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'drm_enabled' => 'getDrmEnabled',
        'stream_targets_enabled' => 'getStreamTargetsEnabled',
        'app_type' => 'getAppType',
        'transcoder_enabled' => 'getTranscoderEnabled',
        'dvr_enabled' => 'getDvrEnabled',
        'id' => 'getId',
        'href' => 'getHref'
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
        $this->container['drm_enabled'] = isset($data['drm_enabled']) ? $data['drm_enabled'] : null;
        $this->container['stream_targets_enabled'] = isset($data['stream_targets_enabled']) ? $data['stream_targets_enabled'] : null;
        $this->container['app_type'] = isset($data['app_type']) ? $data['app_type'] : null;
        $this->container['transcoder_enabled'] = isset($data['transcoder_enabled']) ? $data['transcoder_enabled'] : null;
        $this->container['dvr_enabled'] = isset($data['dvr_enabled']) ? $data['dvr_enabled'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['drm_enabled'] === null) {
            $invalidProperties[] = "'drm_enabled' can't be null";
        }
        if ($this->container['stream_targets_enabled'] === null) {
            $invalidProperties[] = "'stream_targets_enabled' can't be null";
        }
        if ($this->container['app_type'] === null) {
            $invalidProperties[] = "'app_type' can't be null";
        }
        if ($this->container['transcoder_enabled'] === null) {
            $invalidProperties[] = "'transcoder_enabled' can't be null";
        }
        if ($this->container['dvr_enabled'] === null) {
            $invalidProperties[] = "'dvr_enabled' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['href'] === null) {
            $invalidProperties[] = "'href' can't be null";
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
     * Gets drm_enabled
     *
     * @return bool
     */
    public function getDrmEnabled()
    {
        return $this->container['drm_enabled'];
    }

    /**
     * Sets drm_enabled
     *
     * @param bool $drm_enabled drm_enabled
     *
     * @return $this
     */
    public function setDrmEnabled($drm_enabled)
    {
        $this->container['drm_enabled'] = $drm_enabled;

        return $this;
    }

    /**
     * Gets stream_targets_enabled
     *
     * @return bool
     */
    public function getStreamTargetsEnabled()
    {
        return $this->container['stream_targets_enabled'];
    }

    /**
     * Sets stream_targets_enabled
     *
     * @param bool $stream_targets_enabled stream_targets_enabled
     *
     * @return $this
     */
    public function setStreamTargetsEnabled($stream_targets_enabled)
    {
        $this->container['stream_targets_enabled'] = $stream_targets_enabled;

        return $this;
    }

    /**
     * Gets app_type
     *
     * @return string
     */
    public function getAppType()
    {
        return $this->container['app_type'];
    }

    /**
     * Sets app_type
     *
     * @param string $app_type app_type
     *
     * @return $this
     */
    public function setAppType($app_type)
    {
        $this->container['app_type'] = $app_type;

        return $this;
    }

    /**
     * Gets transcoder_enabled
     *
     * @return bool
     */
    public function getTranscoderEnabled()
    {
        return $this->container['transcoder_enabled'];
    }

    /**
     * Sets transcoder_enabled
     *
     * @param bool $transcoder_enabled transcoder_enabled
     *
     * @return $this
     */
    public function setTranscoderEnabled($transcoder_enabled)
    {
        $this->container['transcoder_enabled'] = $transcoder_enabled;

        return $this;
    }

    /**
     * Gets dvr_enabled
     *
     * @return bool
     */
    public function getDvrEnabled()
    {
        return $this->container['dvr_enabled'];
    }

    /**
     * Sets dvr_enabled
     *
     * @param bool $dvr_enabled dvr_enabled
     *
     * @return $this
     */
    public function setDvrEnabled($dvr_enabled)
    {
        $this->container['dvr_enabled'] = $dvr_enabled;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param string $href href
     *
     * @return $this
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

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


