<?php
/**
 * VHostConfig
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
 * VHostConfig Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VHostConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VHostConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'test_player_ssl_enable' => 'string',
        'security_publish_valid_encoders' => 'string',
        'server_name' => 'string',
        'description' => 'string',
        'maximum_concurrent_transcodes' => 'int',
        'version' => 'string',
        'configuration_dir' => 'string',
        'test_player_port' => 'string',
        'running' => 'bool',
        'host_ports' => '\Swagger\Client\Model\HostPortConfig[]',
        'connection_limit' => 'int',
        'test_player_ıp_address' => 'string',
        'name' => 'string',
        'save_field_list' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'test_player_ssl_enable' => null,
        'security_publish_valid_encoders' => null,
        'server_name' => null,
        'description' => null,
        'maximum_concurrent_transcodes' => 'int32',
        'version' => null,
        'configuration_dir' => null,
        'test_player_port' => null,
        'running' => null,
        'host_ports' => null,
        'connection_limit' => 'int32',
        'test_player_ıp_address' => null,
        'name' => null,
        'save_field_list' => null
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
        'test_player_ssl_enable' => 'testPlayerSSLEnable',
        'security_publish_valid_encoders' => 'securityPublishValidEncoders',
        'server_name' => 'serverName',
        'description' => 'description',
        'maximum_concurrent_transcodes' => 'maximumConcurrentTranscodes',
        'version' => 'version',
        'configuration_dir' => 'configurationDir',
        'test_player_port' => 'testPlayerPort',
        'running' => 'running',
        'host_ports' => 'HostPorts',
        'connection_limit' => 'connectionLimit',
        'test_player_ıp_address' => 'testPlayerIPAddress',
        'name' => 'name',
        'save_field_list' => 'saveFieldList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'test_player_ssl_enable' => 'setTestPlayerSslEnable',
        'security_publish_valid_encoders' => 'setSecurityPublishValidEncoders',
        'server_name' => 'setServerName',
        'description' => 'setDescription',
        'maximum_concurrent_transcodes' => 'setMaximumConcurrentTranscodes',
        'version' => 'setVersion',
        'configuration_dir' => 'setConfigurationDir',
        'test_player_port' => 'setTestPlayerPort',
        'running' => 'setRunning',
        'host_ports' => 'setHostPorts',
        'connection_limit' => 'setConnectionLimit',
        'test_player_ıp_address' => 'setTestPlayerIpAddress',
        'name' => 'setName',
        'save_field_list' => 'setSaveFieldList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'test_player_ssl_enable' => 'getTestPlayerSslEnable',
        'security_publish_valid_encoders' => 'getSecurityPublishValidEncoders',
        'server_name' => 'getServerName',
        'description' => 'getDescription',
        'maximum_concurrent_transcodes' => 'getMaximumConcurrentTranscodes',
        'version' => 'getVersion',
        'configuration_dir' => 'getConfigurationDir',
        'test_player_port' => 'getTestPlayerPort',
        'running' => 'getRunning',
        'host_ports' => 'getHostPorts',
        'connection_limit' => 'getConnectionLimit',
        'test_player_ıp_address' => 'getTestPlayerIpAddress',
        'name' => 'getName',
        'save_field_list' => 'getSaveFieldList'
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
        $this->container['test_player_ssl_enable'] = isset($data['test_player_ssl_enable']) ? $data['test_player_ssl_enable'] : null;
        $this->container['security_publish_valid_encoders'] = isset($data['security_publish_valid_encoders']) ? $data['security_publish_valid_encoders'] : null;
        $this->container['server_name'] = isset($data['server_name']) ? $data['server_name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['maximum_concurrent_transcodes'] = isset($data['maximum_concurrent_transcodes']) ? $data['maximum_concurrent_transcodes'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['configuration_dir'] = isset($data['configuration_dir']) ? $data['configuration_dir'] : null;
        $this->container['test_player_port'] = isset($data['test_player_port']) ? $data['test_player_port'] : null;
        $this->container['running'] = isset($data['running']) ? $data['running'] : null;
        $this->container['host_ports'] = isset($data['host_ports']) ? $data['host_ports'] : null;
        $this->container['connection_limit'] = isset($data['connection_limit']) ? $data['connection_limit'] : null;
        $this->container['test_player_ıp_address'] = isset($data['test_player_ıp_address']) ? $data['test_player_ıp_address'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['save_field_list'] = isset($data['save_field_list']) ? $data['save_field_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['test_player_ssl_enable'] === null) {
            $invalidProperties[] = "'test_player_ssl_enable' can't be null";
        }
        if ($this->container['security_publish_valid_encoders'] === null) {
            $invalidProperties[] = "'security_publish_valid_encoders' can't be null";
        }
        if ($this->container['server_name'] === null) {
            $invalidProperties[] = "'server_name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['maximum_concurrent_transcodes'] === null) {
            $invalidProperties[] = "'maximum_concurrent_transcodes' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['configuration_dir'] === null) {
            $invalidProperties[] = "'configuration_dir' can't be null";
        }
        if ($this->container['test_player_port'] === null) {
            $invalidProperties[] = "'test_player_port' can't be null";
        }
        if ($this->container['running'] === null) {
            $invalidProperties[] = "'running' can't be null";
        }
        if ($this->container['host_ports'] === null) {
            $invalidProperties[] = "'host_ports' can't be null";
        }
        if ($this->container['connection_limit'] === null) {
            $invalidProperties[] = "'connection_limit' can't be null";
        }
        if ($this->container['test_player_ıp_address'] === null) {
            $invalidProperties[] = "'test_player_ıp_address' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets test_player_ssl_enable
     *
     * @return string
     */
    public function getTestPlayerSslEnable()
    {
        return $this->container['test_player_ssl_enable'];
    }

    /**
     * Sets test_player_ssl_enable
     *
     * @param string $test_player_ssl_enable test_player_ssl_enable
     *
     * @return $this
     */
    public function setTestPlayerSslEnable($test_player_ssl_enable)
    {
        $this->container['test_player_ssl_enable'] = $test_player_ssl_enable;

        return $this;
    }

    /**
     * Gets security_publish_valid_encoders
     *
     * @return string
     */
    public function getSecurityPublishValidEncoders()
    {
        return $this->container['security_publish_valid_encoders'];
    }

    /**
     * Sets security_publish_valid_encoders
     *
     * @param string $security_publish_valid_encoders security_publish_valid_encoders
     *
     * @return $this
     */
    public function setSecurityPublishValidEncoders($security_publish_valid_encoders)
    {
        $this->container['security_publish_valid_encoders'] = $security_publish_valid_encoders;

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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets maximum_concurrent_transcodes
     *
     * @return int
     */
    public function getMaximumConcurrentTranscodes()
    {
        return $this->container['maximum_concurrent_transcodes'];
    }

    /**
     * Sets maximum_concurrent_transcodes
     *
     * @param int $maximum_concurrent_transcodes maximum_concurrent_transcodes
     *
     * @return $this
     */
    public function setMaximumConcurrentTranscodes($maximum_concurrent_transcodes)
    {
        $this->container['maximum_concurrent_transcodes'] = $maximum_concurrent_transcodes;

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
     * Gets configuration_dir
     *
     * @return string
     */
    public function getConfigurationDir()
    {
        return $this->container['configuration_dir'];
    }

    /**
     * Sets configuration_dir
     *
     * @param string $configuration_dir configuration_dir
     *
     * @return $this
     */
    public function setConfigurationDir($configuration_dir)
    {
        $this->container['configuration_dir'] = $configuration_dir;

        return $this;
    }

    /**
     * Gets test_player_port
     *
     * @return string
     */
    public function getTestPlayerPort()
    {
        return $this->container['test_player_port'];
    }

    /**
     * Sets test_player_port
     *
     * @param string $test_player_port test_player_port
     *
     * @return $this
     */
    public function setTestPlayerPort($test_player_port)
    {
        $this->container['test_player_port'] = $test_player_port;

        return $this;
    }

    /**
     * Gets running
     *
     * @return bool
     */
    public function getRunning()
    {
        return $this->container['running'];
    }

    /**
     * Sets running
     *
     * @param bool $running running
     *
     * @return $this
     */
    public function setRunning($running)
    {
        $this->container['running'] = $running;

        return $this;
    }

    /**
     * Gets host_ports
     *
     * @return \Swagger\Client\Model\HostPortConfig[]
     */
    public function getHostPorts()
    {
        return $this->container['host_ports'];
    }

    /**
     * Sets host_ports
     *
     * @param \Swagger\Client\Model\HostPortConfig[] $host_ports host_ports
     *
     * @return $this
     */
    public function setHostPorts($host_ports)
    {
        $this->container['host_ports'] = $host_ports;

        return $this;
    }

    /**
     * Gets connection_limit
     *
     * @return int
     */
    public function getConnectionLimit()
    {
        return $this->container['connection_limit'];
    }

    /**
     * Sets connection_limit
     *
     * @param int $connection_limit connection_limit
     *
     * @return $this
     */
    public function setConnectionLimit($connection_limit)
    {
        $this->container['connection_limit'] = $connection_limit;

        return $this;
    }

    /**
     * Gets test_player_ıp_address
     *
     * @return string
     */
    public function getTestPlayerIpAddress()
    {
        return $this->container['test_player_ıp_address'];
    }

    /**
     * Sets test_player_ıp_address
     *
     * @param string $test_player_ıp_address test_player_ıp_address
     *
     * @return $this
     */
    public function setTestPlayerIpAddress($test_player_ıp_address)
    {
        $this->container['test_player_ıp_address'] = $test_player_ıp_address;

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


