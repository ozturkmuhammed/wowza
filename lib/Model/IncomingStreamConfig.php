<?php
/**
 * IncomingStreamConfig
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
 * IncomingStreamConfig Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IncomingStreamConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IncomingStreamConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ptz_polling_ınterval_minimum' => 'int',
        'application_ınstance' => 'string',
        'is_ptz_enabled' => 'bool',
        'is_connected' => 'bool',
        'server_name' => 'string',
        'version' => 'string',
        'ptz_polling_ınterval' => 'int',
        'is_recording_set' => 'bool',
        'source_ıp' => 'string',
        'name' => 'string',
        'is_published_to_vod' => 'bool',
        'save_field_list' => 'string[]',
        'is_stream_manager_stream' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ptz_polling_ınterval_minimum' => 'int32',
        'application_ınstance' => null,
        'is_ptz_enabled' => null,
        'is_connected' => null,
        'server_name' => null,
        'version' => null,
        'ptz_polling_ınterval' => 'int32',
        'is_recording_set' => null,
        'source_ıp' => null,
        'name' => null,
        'is_published_to_vod' => null,
        'save_field_list' => null,
        'is_stream_manager_stream' => null
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
        'ptz_polling_ınterval_minimum' => 'ptzPollingIntervalMinimum',
        'application_ınstance' => 'applicationInstance',
        'is_ptz_enabled' => 'isPTZEnabled',
        'is_connected' => 'isConnected',
        'server_name' => 'serverName',
        'version' => 'version',
        'ptz_polling_ınterval' => 'ptzPollingInterval',
        'is_recording_set' => 'isRecordingSet',
        'source_ıp' => 'sourceIp',
        'name' => 'name',
        'is_published_to_vod' => 'isPublishedToVOD',
        'save_field_list' => 'saveFieldList',
        'is_stream_manager_stream' => 'isStreamManagerStream'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ptz_polling_ınterval_minimum' => 'setPtzPollingIntervalMinimum',
        'application_ınstance' => 'setApplicationInstance',
        'is_ptz_enabled' => 'setIsPtzEnabled',
        'is_connected' => 'setIsConnected',
        'server_name' => 'setServerName',
        'version' => 'setVersion',
        'ptz_polling_ınterval' => 'setPtzPollingInterval',
        'is_recording_set' => 'setIsRecordingSet',
        'source_ıp' => 'setSourceIp',
        'name' => 'setName',
        'is_published_to_vod' => 'setIsPublishedToVod',
        'save_field_list' => 'setSaveFieldList',
        'is_stream_manager_stream' => 'setIsStreamManagerStream'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ptz_polling_ınterval_minimum' => 'getPtzPollingIntervalMinimum',
        'application_ınstance' => 'getApplicationInstance',
        'is_ptz_enabled' => 'getIsPtzEnabled',
        'is_connected' => 'getIsConnected',
        'server_name' => 'getServerName',
        'version' => 'getVersion',
        'ptz_polling_ınterval' => 'getPtzPollingInterval',
        'is_recording_set' => 'getIsRecordingSet',
        'source_ıp' => 'getSourceIp',
        'name' => 'getName',
        'is_published_to_vod' => 'getIsPublishedToVod',
        'save_field_list' => 'getSaveFieldList',
        'is_stream_manager_stream' => 'getIsStreamManagerStream'
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
        $this->container['ptz_polling_ınterval_minimum'] = isset($data['ptz_polling_ınterval_minimum']) ? $data['ptz_polling_ınterval_minimum'] : null;
        $this->container['application_ınstance'] = isset($data['application_ınstance']) ? $data['application_ınstance'] : null;
        $this->container['is_ptz_enabled'] = isset($data['is_ptz_enabled']) ? $data['is_ptz_enabled'] : null;
        $this->container['is_connected'] = isset($data['is_connected']) ? $data['is_connected'] : null;
        $this->container['server_name'] = isset($data['server_name']) ? $data['server_name'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['ptz_polling_ınterval'] = isset($data['ptz_polling_ınterval']) ? $data['ptz_polling_ınterval'] : null;
        $this->container['is_recording_set'] = isset($data['is_recording_set']) ? $data['is_recording_set'] : null;
        $this->container['source_ıp'] = isset($data['source_ıp']) ? $data['source_ıp'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['is_published_to_vod'] = isset($data['is_published_to_vod']) ? $data['is_published_to_vod'] : null;
        $this->container['save_field_list'] = isset($data['save_field_list']) ? $data['save_field_list'] : null;
        $this->container['is_stream_manager_stream'] = isset($data['is_stream_manager_stream']) ? $data['is_stream_manager_stream'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ptz_polling_ınterval_minimum'] === null) {
            $invalidProperties[] = "'ptz_polling_ınterval_minimum' can't be null";
        }
        if ($this->container['application_ınstance'] === null) {
            $invalidProperties[] = "'application_ınstance' can't be null";
        }
        if ($this->container['is_ptz_enabled'] === null) {
            $invalidProperties[] = "'is_ptz_enabled' can't be null";
        }
        if ($this->container['is_connected'] === null) {
            $invalidProperties[] = "'is_connected' can't be null";
        }
        if ($this->container['server_name'] === null) {
            $invalidProperties[] = "'server_name' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['ptz_polling_ınterval'] === null) {
            $invalidProperties[] = "'ptz_polling_ınterval' can't be null";
        }
        if ($this->container['is_recording_set'] === null) {
            $invalidProperties[] = "'is_recording_set' can't be null";
        }
        if ($this->container['source_ıp'] === null) {
            $invalidProperties[] = "'source_ıp' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['is_published_to_vod'] === null) {
            $invalidProperties[] = "'is_published_to_vod' can't be null";
        }
        if ($this->container['is_stream_manager_stream'] === null) {
            $invalidProperties[] = "'is_stream_manager_stream' can't be null";
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
     * Gets ptz_polling_ınterval_minimum
     *
     * @return int
     */
    public function getPtzPollingIntervalMinimum()
    {
        return $this->container['ptz_polling_ınterval_minimum'];
    }

    /**
     * Sets ptz_polling_ınterval_minimum
     *
     * @param int $ptz_polling_ınterval_minimum ptz_polling_ınterval_minimum
     *
     * @return $this
     */
    public function setPtzPollingIntervalMinimum($ptz_polling_ınterval_minimum)
    {
        $this->container['ptz_polling_ınterval_minimum'] = $ptz_polling_ınterval_minimum;

        return $this;
    }

    /**
     * Gets application_ınstance
     *
     * @return string
     */
    public function getApplicationInstance()
    {
        return $this->container['application_ınstance'];
    }

    /**
     * Sets application_ınstance
     *
     * @param string $application_ınstance application_ınstance
     *
     * @return $this
     */
    public function setApplicationInstance($application_ınstance)
    {
        $this->container['application_ınstance'] = $application_ınstance;

        return $this;
    }

    /**
     * Gets is_ptz_enabled
     *
     * @return bool
     */
    public function getIsPtzEnabled()
    {
        return $this->container['is_ptz_enabled'];
    }

    /**
     * Sets is_ptz_enabled
     *
     * @param bool $is_ptz_enabled is_ptz_enabled
     *
     * @return $this
     */
    public function setIsPtzEnabled($is_ptz_enabled)
    {
        $this->container['is_ptz_enabled'] = $is_ptz_enabled;

        return $this;
    }

    /**
     * Gets is_connected
     *
     * @return bool
     */
    public function getIsConnected()
    {
        return $this->container['is_connected'];
    }

    /**
     * Sets is_connected
     *
     * @param bool $is_connected is_connected
     *
     * @return $this
     */
    public function setIsConnected($is_connected)
    {
        $this->container['is_connected'] = $is_connected;

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
     * Gets ptz_polling_ınterval
     *
     * @return int
     */
    public function getPtzPollingInterval()
    {
        return $this->container['ptz_polling_ınterval'];
    }

    /**
     * Sets ptz_polling_ınterval
     *
     * @param int $ptz_polling_ınterval ptz_polling_ınterval
     *
     * @return $this
     */
    public function setPtzPollingInterval($ptz_polling_ınterval)
    {
        $this->container['ptz_polling_ınterval'] = $ptz_polling_ınterval;

        return $this;
    }

    /**
     * Gets is_recording_set
     *
     * @return bool
     */
    public function getIsRecordingSet()
    {
        return $this->container['is_recording_set'];
    }

    /**
     * Sets is_recording_set
     *
     * @param bool $is_recording_set is_recording_set
     *
     * @return $this
     */
    public function setIsRecordingSet($is_recording_set)
    {
        $this->container['is_recording_set'] = $is_recording_set;

        return $this;
    }

    /**
     * Gets source_ıp
     *
     * @return string
     */
    public function getSourceIp()
    {
        return $this->container['source_ıp'];
    }

    /**
     * Sets source_ıp
     *
     * @param string $source_ıp source_ıp
     *
     * @return $this
     */
    public function setSourceIp($source_ıp)
    {
        $this->container['source_ıp'] = $source_ıp;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets is_published_to_vod
     *
     * @return bool
     */
    public function getIsPublishedToVod()
    {
        return $this->container['is_published_to_vod'];
    }

    /**
     * Sets is_published_to_vod
     *
     * @param bool $is_published_to_vod is_published_to_vod
     *
     * @return $this
     */
    public function setIsPublishedToVod($is_published_to_vod)
    {
        $this->container['is_published_to_vod'] = $is_published_to_vod;

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
     * Gets is_stream_manager_stream
     *
     * @return bool
     */
    public function getIsStreamManagerStream()
    {
        return $this->container['is_stream_manager_stream'];
    }

    /**
     * Sets is_stream_manager_stream
     *
     * @param bool $is_stream_manager_stream is_stream_manager_stream
     *
     * @return $this
     */
    public function setIsStreamManagerStream($is_stream_manager_stream)
    {
        $this->container['is_stream_manager_stream'] = $is_stream_manager_stream;

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

