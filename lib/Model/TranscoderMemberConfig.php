<?php
/**
 * TranscoderMemberConfig
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
 * TranscoderMemberConfig Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TranscoderMemberConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TranscoderMemberConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'wowza_video_only' => 'bool',
        'encode_name' => 'string',
        'wowza_audio_only' => 'bool',
        'server_name' => 'string',
        'member_name' => 'string',
        'save_field_list' => 'string[]',
        'version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'wowza_video_only' => null,
        'encode_name' => null,
        'wowza_audio_only' => null,
        'server_name' => null,
        'member_name' => null,
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
        'wowza_video_only' => 'wowzaVideoOnly',
        'encode_name' => 'encodeName',
        'wowza_audio_only' => 'wowzaAudioOnly',
        'server_name' => 'serverName',
        'member_name' => 'memberName',
        'save_field_list' => 'saveFieldList',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'wowza_video_only' => 'setWowzaVideoOnly',
        'encode_name' => 'setEncodeName',
        'wowza_audio_only' => 'setWowzaAudioOnly',
        'server_name' => 'setServerName',
        'member_name' => 'setMemberName',
        'save_field_list' => 'setSaveFieldList',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'wowza_video_only' => 'getWowzaVideoOnly',
        'encode_name' => 'getEncodeName',
        'wowza_audio_only' => 'getWowzaAudioOnly',
        'server_name' => 'getServerName',
        'member_name' => 'getMemberName',
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
        $this->container['wowza_video_only'] = isset($data['wowza_video_only']) ? $data['wowza_video_only'] : null;
        $this->container['encode_name'] = isset($data['encode_name']) ? $data['encode_name'] : null;
        $this->container['wowza_audio_only'] = isset($data['wowza_audio_only']) ? $data['wowza_audio_only'] : null;
        $this->container['server_name'] = isset($data['server_name']) ? $data['server_name'] : null;
        $this->container['member_name'] = isset($data['member_name']) ? $data['member_name'] : null;
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

        if ($this->container['wowza_video_only'] === null) {
            $invalidProperties[] = "'wowza_video_only' can't be null";
        }
        if ($this->container['encode_name'] === null) {
            $invalidProperties[] = "'encode_name' can't be null";
        }
        if ($this->container['wowza_audio_only'] === null) {
            $invalidProperties[] = "'wowza_audio_only' can't be null";
        }
        if ($this->container['server_name'] === null) {
            $invalidProperties[] = "'server_name' can't be null";
        }
        if ($this->container['member_name'] === null) {
            $invalidProperties[] = "'member_name' can't be null";
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
     * Gets wowza_video_only
     *
     * @return bool
     */
    public function getWowzaVideoOnly()
    {
        return $this->container['wowza_video_only'];
    }

    /**
     * Sets wowza_video_only
     *
     * @param bool $wowza_video_only wowza_video_only
     *
     * @return $this
     */
    public function setWowzaVideoOnly($wowza_video_only)
    {
        $this->container['wowza_video_only'] = $wowza_video_only;

        return $this;
    }

    /**
     * Gets encode_name
     *
     * @return string
     */
    public function getEncodeName()
    {
        return $this->container['encode_name'];
    }

    /**
     * Sets encode_name
     *
     * @param string $encode_name encode_name
     *
     * @return $this
     */
    public function setEncodeName($encode_name)
    {
        $this->container['encode_name'] = $encode_name;

        return $this;
    }

    /**
     * Gets wowza_audio_only
     *
     * @return bool
     */
    public function getWowzaAudioOnly()
    {
        return $this->container['wowza_audio_only'];
    }

    /**
     * Sets wowza_audio_only
     *
     * @param bool $wowza_audio_only wowza_audio_only
     *
     * @return $this
     */
    public function setWowzaAudioOnly($wowza_audio_only)
    {
        $this->container['wowza_audio_only'] = $wowza_audio_only;

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
     * Gets member_name
     *
     * @return string
     */
    public function getMemberName()
    {
        return $this->container['member_name'];
    }

    /**
     * Sets member_name
     *
     * @param string $member_name member_name
     *
     * @return $this
     */
    public function setMemberName($member_name)
    {
        $this->container['member_name'] = $member_name;

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


