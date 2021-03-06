<?php
/**
 * SecurityConfig
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
 * SecurityConfig Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SecurityConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SecurityConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'play_maximum_connections' => 'int',
        'publish_block_duplicate_stream_names' => 'bool',
        'publish_ıp_white_list' => 'string',
        'play_authentication_method' => 'string',
        'server_name' => 'string',
        'client_stream_write_access' => 'string',
        'play_ıp_white_list' => 'string',
        'publish_require_password' => 'bool',
        'play_ıp_black_list' => 'string',
        'version' => 'string',
        'secure_token_version' => 'int',
        'publish_password_file' => 'string',
        'publish_valid_encoders' => 'string',
        'secure_token_query_parameters_prefix' => 'string',
        'secure_token_use_tea_for_rtmp' => 'bool',
        'publish_authentication_method' => 'string',
        'secure_token_hash_algorithm' => 'string',
        'publish_ıp_black_list' => 'string',
        'play_require_secure_connection' => 'bool',
        'secure_token_origin_shared_secret' => 'string',
        'save_field_list' => 'string[]',
        'secure_token_ınclude_client_ıp_ın_hash' => 'bool',
        'publish_rtmp_secure_url' => 'string',
        'secure_token_shared_secret' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'play_maximum_connections' => 'int32',
        'publish_block_duplicate_stream_names' => null,
        'publish_ıp_white_list' => null,
        'play_authentication_method' => null,
        'server_name' => null,
        'client_stream_write_access' => null,
        'play_ıp_white_list' => null,
        'publish_require_password' => null,
        'play_ıp_black_list' => null,
        'version' => null,
        'secure_token_version' => 'int32',
        'publish_password_file' => null,
        'publish_valid_encoders' => null,
        'secure_token_query_parameters_prefix' => null,
        'secure_token_use_tea_for_rtmp' => null,
        'publish_authentication_method' => null,
        'secure_token_hash_algorithm' => null,
        'publish_ıp_black_list' => null,
        'play_require_secure_connection' => null,
        'secure_token_origin_shared_secret' => null,
        'save_field_list' => null,
        'secure_token_ınclude_client_ıp_ın_hash' => null,
        'publish_rtmp_secure_url' => null,
        'secure_token_shared_secret' => null
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
        'play_maximum_connections' => 'playMaximumConnections',
        'publish_block_duplicate_stream_names' => 'publishBlockDuplicateStreamNames',
        'publish_ıp_white_list' => 'publishIPWhiteList',
        'play_authentication_method' => 'playAuthenticationMethod',
        'server_name' => 'serverName',
        'client_stream_write_access' => 'clientStreamWriteAccess',
        'play_ıp_white_list' => 'playIPWhiteList',
        'publish_require_password' => 'publishRequirePassword',
        'play_ıp_black_list' => 'playIPBlackList',
        'version' => 'version',
        'secure_token_version' => 'secureTokenVersion',
        'publish_password_file' => 'publishPasswordFile',
        'publish_valid_encoders' => 'publishValidEncoders',
        'secure_token_query_parameters_prefix' => 'secureTokenQueryParametersPrefix',
        'secure_token_use_tea_for_rtmp' => 'secureTokenUseTEAForRTMP',
        'publish_authentication_method' => 'publishAuthenticationMethod',
        'secure_token_hash_algorithm' => 'secureTokenHashAlgorithm',
        'publish_ıp_black_list' => 'publishIPBlackList',
        'play_require_secure_connection' => 'playRequireSecureConnection',
        'secure_token_origin_shared_secret' => 'secureTokenOriginSharedSecret',
        'save_field_list' => 'saveFieldList',
        'secure_token_ınclude_client_ıp_ın_hash' => 'secureTokenIncludeClientIPInHash',
        'publish_rtmp_secure_url' => 'publishRTMPSecureURL',
        'secure_token_shared_secret' => 'secureTokenSharedSecret'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'play_maximum_connections' => 'setPlayMaximumConnections',
        'publish_block_duplicate_stream_names' => 'setPublishBlockDuplicateStreamNames',
        'publish_ıp_white_list' => 'setPublishIpWhiteList',
        'play_authentication_method' => 'setPlayAuthenticationMethod',
        'server_name' => 'setServerName',
        'client_stream_write_access' => 'setClientStreamWriteAccess',
        'play_ıp_white_list' => 'setPlayIpWhiteList',
        'publish_require_password' => 'setPublishRequirePassword',
        'play_ıp_black_list' => 'setPlayIpBlackList',
        'version' => 'setVersion',
        'secure_token_version' => 'setSecureTokenVersion',
        'publish_password_file' => 'setPublishPasswordFile',
        'publish_valid_encoders' => 'setPublishValidEncoders',
        'secure_token_query_parameters_prefix' => 'setSecureTokenQueryParametersPrefix',
        'secure_token_use_tea_for_rtmp' => 'setSecureTokenUseTeaForRtmp',
        'publish_authentication_method' => 'setPublishAuthenticationMethod',
        'secure_token_hash_algorithm' => 'setSecureTokenHashAlgorithm',
        'publish_ıp_black_list' => 'setPublishIpBlackList',
        'play_require_secure_connection' => 'setPlayRequireSecureConnection',
        'secure_token_origin_shared_secret' => 'setSecureTokenOriginSharedSecret',
        'save_field_list' => 'setSaveFieldList',
        'secure_token_ınclude_client_ıp_ın_hash' => 'setSecureTokenIncludeClientIpInHash',
        'publish_rtmp_secure_url' => 'setPublishRtmpSecureUrl',
        'secure_token_shared_secret' => 'setSecureTokenSharedSecret'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'play_maximum_connections' => 'getPlayMaximumConnections',
        'publish_block_duplicate_stream_names' => 'getPublishBlockDuplicateStreamNames',
        'publish_ıp_white_list' => 'getPublishIpWhiteList',
        'play_authentication_method' => 'getPlayAuthenticationMethod',
        'server_name' => 'getServerName',
        'client_stream_write_access' => 'getClientStreamWriteAccess',
        'play_ıp_white_list' => 'getPlayIpWhiteList',
        'publish_require_password' => 'getPublishRequirePassword',
        'play_ıp_black_list' => 'getPlayIpBlackList',
        'version' => 'getVersion',
        'secure_token_version' => 'getSecureTokenVersion',
        'publish_password_file' => 'getPublishPasswordFile',
        'publish_valid_encoders' => 'getPublishValidEncoders',
        'secure_token_query_parameters_prefix' => 'getSecureTokenQueryParametersPrefix',
        'secure_token_use_tea_for_rtmp' => 'getSecureTokenUseTeaForRtmp',
        'publish_authentication_method' => 'getPublishAuthenticationMethod',
        'secure_token_hash_algorithm' => 'getSecureTokenHashAlgorithm',
        'publish_ıp_black_list' => 'getPublishIpBlackList',
        'play_require_secure_connection' => 'getPlayRequireSecureConnection',
        'secure_token_origin_shared_secret' => 'getSecureTokenOriginSharedSecret',
        'save_field_list' => 'getSaveFieldList',
        'secure_token_ınclude_client_ıp_ın_hash' => 'getSecureTokenIncludeClientIpInHash',
        'publish_rtmp_secure_url' => 'getPublishRtmpSecureUrl',
        'secure_token_shared_secret' => 'getSecureTokenSharedSecret'
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
        $this->container['play_maximum_connections'] = isset($data['play_maximum_connections']) ? $data['play_maximum_connections'] : null;
        $this->container['publish_block_duplicate_stream_names'] = isset($data['publish_block_duplicate_stream_names']) ? $data['publish_block_duplicate_stream_names'] : null;
        $this->container['publish_ıp_white_list'] = isset($data['publish_ıp_white_list']) ? $data['publish_ıp_white_list'] : null;
        $this->container['play_authentication_method'] = isset($data['play_authentication_method']) ? $data['play_authentication_method'] : null;
        $this->container['server_name'] = isset($data['server_name']) ? $data['server_name'] : null;
        $this->container['client_stream_write_access'] = isset($data['client_stream_write_access']) ? $data['client_stream_write_access'] : null;
        $this->container['play_ıp_white_list'] = isset($data['play_ıp_white_list']) ? $data['play_ıp_white_list'] : null;
        $this->container['publish_require_password'] = isset($data['publish_require_password']) ? $data['publish_require_password'] : null;
        $this->container['play_ıp_black_list'] = isset($data['play_ıp_black_list']) ? $data['play_ıp_black_list'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['secure_token_version'] = isset($data['secure_token_version']) ? $data['secure_token_version'] : null;
        $this->container['publish_password_file'] = isset($data['publish_password_file']) ? $data['publish_password_file'] : null;
        $this->container['publish_valid_encoders'] = isset($data['publish_valid_encoders']) ? $data['publish_valid_encoders'] : null;
        $this->container['secure_token_query_parameters_prefix'] = isset($data['secure_token_query_parameters_prefix']) ? $data['secure_token_query_parameters_prefix'] : null;
        $this->container['secure_token_use_tea_for_rtmp'] = isset($data['secure_token_use_tea_for_rtmp']) ? $data['secure_token_use_tea_for_rtmp'] : null;
        $this->container['publish_authentication_method'] = isset($data['publish_authentication_method']) ? $data['publish_authentication_method'] : null;
        $this->container['secure_token_hash_algorithm'] = isset($data['secure_token_hash_algorithm']) ? $data['secure_token_hash_algorithm'] : null;
        $this->container['publish_ıp_black_list'] = isset($data['publish_ıp_black_list']) ? $data['publish_ıp_black_list'] : null;
        $this->container['play_require_secure_connection'] = isset($data['play_require_secure_connection']) ? $data['play_require_secure_connection'] : null;
        $this->container['secure_token_origin_shared_secret'] = isset($data['secure_token_origin_shared_secret']) ? $data['secure_token_origin_shared_secret'] : null;
        $this->container['save_field_list'] = isset($data['save_field_list']) ? $data['save_field_list'] : null;
        $this->container['secure_token_ınclude_client_ıp_ın_hash'] = isset($data['secure_token_ınclude_client_ıp_ın_hash']) ? $data['secure_token_ınclude_client_ıp_ın_hash'] : null;
        $this->container['publish_rtmp_secure_url'] = isset($data['publish_rtmp_secure_url']) ? $data['publish_rtmp_secure_url'] : null;
        $this->container['secure_token_shared_secret'] = isset($data['secure_token_shared_secret']) ? $data['secure_token_shared_secret'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['play_maximum_connections'] === null) {
            $invalidProperties[] = "'play_maximum_connections' can't be null";
        }
        if ($this->container['publish_block_duplicate_stream_names'] === null) {
            $invalidProperties[] = "'publish_block_duplicate_stream_names' can't be null";
        }
        if ($this->container['publish_ıp_white_list'] === null) {
            $invalidProperties[] = "'publish_ıp_white_list' can't be null";
        }
        if ($this->container['play_authentication_method'] === null) {
            $invalidProperties[] = "'play_authentication_method' can't be null";
        }
        if ($this->container['server_name'] === null) {
            $invalidProperties[] = "'server_name' can't be null";
        }
        if ($this->container['client_stream_write_access'] === null) {
            $invalidProperties[] = "'client_stream_write_access' can't be null";
        }
        if ($this->container['play_ıp_white_list'] === null) {
            $invalidProperties[] = "'play_ıp_white_list' can't be null";
        }
        if ($this->container['publish_require_password'] === null) {
            $invalidProperties[] = "'publish_require_password' can't be null";
        }
        if ($this->container['play_ıp_black_list'] === null) {
            $invalidProperties[] = "'play_ıp_black_list' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['secure_token_version'] === null) {
            $invalidProperties[] = "'secure_token_version' can't be null";
        }
        if ($this->container['publish_password_file'] === null) {
            $invalidProperties[] = "'publish_password_file' can't be null";
        }
        if ($this->container['publish_valid_encoders'] === null) {
            $invalidProperties[] = "'publish_valid_encoders' can't be null";
        }
        if ($this->container['secure_token_query_parameters_prefix'] === null) {
            $invalidProperties[] = "'secure_token_query_parameters_prefix' can't be null";
        }
        if ($this->container['secure_token_use_tea_for_rtmp'] === null) {
            $invalidProperties[] = "'secure_token_use_tea_for_rtmp' can't be null";
        }
        if ($this->container['publish_authentication_method'] === null) {
            $invalidProperties[] = "'publish_authentication_method' can't be null";
        }
        if ($this->container['secure_token_hash_algorithm'] === null) {
            $invalidProperties[] = "'secure_token_hash_algorithm' can't be null";
        }
        if ($this->container['publish_ıp_black_list'] === null) {
            $invalidProperties[] = "'publish_ıp_black_list' can't be null";
        }
        if ($this->container['play_require_secure_connection'] === null) {
            $invalidProperties[] = "'play_require_secure_connection' can't be null";
        }
        if ($this->container['secure_token_origin_shared_secret'] === null) {
            $invalidProperties[] = "'secure_token_origin_shared_secret' can't be null";
        }
        if ($this->container['secure_token_ınclude_client_ıp_ın_hash'] === null) {
            $invalidProperties[] = "'secure_token_ınclude_client_ıp_ın_hash' can't be null";
        }
        if ($this->container['publish_rtmp_secure_url'] === null) {
            $invalidProperties[] = "'publish_rtmp_secure_url' can't be null";
        }
        if ($this->container['secure_token_shared_secret'] === null) {
            $invalidProperties[] = "'secure_token_shared_secret' can't be null";
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
     * Gets play_maximum_connections
     *
     * @return int
     */
    public function getPlayMaximumConnections()
    {
        return $this->container['play_maximum_connections'];
    }

    /**
     * Sets play_maximum_connections
     *
     * @param int $play_maximum_connections play_maximum_connections
     *
     * @return $this
     */
    public function setPlayMaximumConnections($play_maximum_connections)
    {
        $this->container['play_maximum_connections'] = $play_maximum_connections;

        return $this;
    }

    /**
     * Gets publish_block_duplicate_stream_names
     *
     * @return bool
     */
    public function getPublishBlockDuplicateStreamNames()
    {
        return $this->container['publish_block_duplicate_stream_names'];
    }

    /**
     * Sets publish_block_duplicate_stream_names
     *
     * @param bool $publish_block_duplicate_stream_names publish_block_duplicate_stream_names
     *
     * @return $this
     */
    public function setPublishBlockDuplicateStreamNames($publish_block_duplicate_stream_names)
    {
        $this->container['publish_block_duplicate_stream_names'] = $publish_block_duplicate_stream_names;

        return $this;
    }

    /**
     * Gets publish_ıp_white_list
     *
     * @return string
     */
    public function getPublishIpWhiteList()
    {
        return $this->container['publish_ıp_white_list'];
    }

    /**
     * Sets publish_ıp_white_list
     *
     * @param string $publish_ıp_white_list publish_ıp_white_list
     *
     * @return $this
     */
    public function setPublishIpWhiteList($publish_ıp_white_list)
    {
        $this->container['publish_ıp_white_list'] = $publish_ıp_white_list;

        return $this;
    }

    /**
     * Gets play_authentication_method
     *
     * @return string
     */
    public function getPlayAuthenticationMethod()
    {
        return $this->container['play_authentication_method'];
    }

    /**
     * Sets play_authentication_method
     *
     * @param string $play_authentication_method play_authentication_method
     *
     * @return $this
     */
    public function setPlayAuthenticationMethod($play_authentication_method)
    {
        $this->container['play_authentication_method'] = $play_authentication_method;

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
     * Gets client_stream_write_access
     *
     * @return string
     */
    public function getClientStreamWriteAccess()
    {
        return $this->container['client_stream_write_access'];
    }

    /**
     * Sets client_stream_write_access
     *
     * @param string $client_stream_write_access client_stream_write_access
     *
     * @return $this
     */
    public function setClientStreamWriteAccess($client_stream_write_access)
    {
        $this->container['client_stream_write_access'] = $client_stream_write_access;

        return $this;
    }

    /**
     * Gets play_ıp_white_list
     *
     * @return string
     */
    public function getPlayIpWhiteList()
    {
        return $this->container['play_ıp_white_list'];
    }

    /**
     * Sets play_ıp_white_list
     *
     * @param string $play_ıp_white_list play_ıp_white_list
     *
     * @return $this
     */
    public function setPlayIpWhiteList($play_ıp_white_list)
    {
        $this->container['play_ıp_white_list'] = $play_ıp_white_list;

        return $this;
    }

    /**
     * Gets publish_require_password
     *
     * @return bool
     */
    public function getPublishRequirePassword()
    {
        return $this->container['publish_require_password'];
    }

    /**
     * Sets publish_require_password
     *
     * @param bool $publish_require_password publish_require_password
     *
     * @return $this
     */
    public function setPublishRequirePassword($publish_require_password)
    {
        $this->container['publish_require_password'] = $publish_require_password;

        return $this;
    }

    /**
     * Gets play_ıp_black_list
     *
     * @return string
     */
    public function getPlayIpBlackList()
    {
        return $this->container['play_ıp_black_list'];
    }

    /**
     * Sets play_ıp_black_list
     *
     * @param string $play_ıp_black_list play_ıp_black_list
     *
     * @return $this
     */
    public function setPlayIpBlackList($play_ıp_black_list)
    {
        $this->container['play_ıp_black_list'] = $play_ıp_black_list;

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
     * Gets secure_token_version
     *
     * @return int
     */
    public function getSecureTokenVersion()
    {
        return $this->container['secure_token_version'];
    }

    /**
     * Sets secure_token_version
     *
     * @param int $secure_token_version secure_token_version
     *
     * @return $this
     */
    public function setSecureTokenVersion($secure_token_version)
    {
        $this->container['secure_token_version'] = $secure_token_version;

        return $this;
    }

    /**
     * Gets publish_password_file
     *
     * @return string
     */
    public function getPublishPasswordFile()
    {
        return $this->container['publish_password_file'];
    }

    /**
     * Sets publish_password_file
     *
     * @param string $publish_password_file publish_password_file
     *
     * @return $this
     */
    public function setPublishPasswordFile($publish_password_file)
    {
        $this->container['publish_password_file'] = $publish_password_file;

        return $this;
    }

    /**
     * Gets publish_valid_encoders
     *
     * @return string
     */
    public function getPublishValidEncoders()
    {
        return $this->container['publish_valid_encoders'];
    }

    /**
     * Sets publish_valid_encoders
     *
     * @param string $publish_valid_encoders publish_valid_encoders
     *
     * @return $this
     */
    public function setPublishValidEncoders($publish_valid_encoders)
    {
        $this->container['publish_valid_encoders'] = $publish_valid_encoders;

        return $this;
    }

    /**
     * Gets secure_token_query_parameters_prefix
     *
     * @return string
     */
    public function getSecureTokenQueryParametersPrefix()
    {
        return $this->container['secure_token_query_parameters_prefix'];
    }

    /**
     * Sets secure_token_query_parameters_prefix
     *
     * @param string $secure_token_query_parameters_prefix secure_token_query_parameters_prefix
     *
     * @return $this
     */
    public function setSecureTokenQueryParametersPrefix($secure_token_query_parameters_prefix)
    {
        $this->container['secure_token_query_parameters_prefix'] = $secure_token_query_parameters_prefix;

        return $this;
    }

    /**
     * Gets secure_token_use_tea_for_rtmp
     *
     * @return bool
     */
    public function getSecureTokenUseTeaForRtmp()
    {
        return $this->container['secure_token_use_tea_for_rtmp'];
    }

    /**
     * Sets secure_token_use_tea_for_rtmp
     *
     * @param bool $secure_token_use_tea_for_rtmp secure_token_use_tea_for_rtmp
     *
     * @return $this
     */
    public function setSecureTokenUseTeaForRtmp($secure_token_use_tea_for_rtmp)
    {
        $this->container['secure_token_use_tea_for_rtmp'] = $secure_token_use_tea_for_rtmp;

        return $this;
    }

    /**
     * Gets publish_authentication_method
     *
     * @return string
     */
    public function getPublishAuthenticationMethod()
    {
        return $this->container['publish_authentication_method'];
    }

    /**
     * Sets publish_authentication_method
     *
     * @param string $publish_authentication_method publish_authentication_method
     *
     * @return $this
     */
    public function setPublishAuthenticationMethod($publish_authentication_method)
    {
        $this->container['publish_authentication_method'] = $publish_authentication_method;

        return $this;
    }

    /**
     * Gets secure_token_hash_algorithm
     *
     * @return string
     */
    public function getSecureTokenHashAlgorithm()
    {
        return $this->container['secure_token_hash_algorithm'];
    }

    /**
     * Sets secure_token_hash_algorithm
     *
     * @param string $secure_token_hash_algorithm secure_token_hash_algorithm
     *
     * @return $this
     */
    public function setSecureTokenHashAlgorithm($secure_token_hash_algorithm)
    {
        $this->container['secure_token_hash_algorithm'] = $secure_token_hash_algorithm;

        return $this;
    }

    /**
     * Gets publish_ıp_black_list
     *
     * @return string
     */
    public function getPublishIpBlackList()
    {
        return $this->container['publish_ıp_black_list'];
    }

    /**
     * Sets publish_ıp_black_list
     *
     * @param string $publish_ıp_black_list publish_ıp_black_list
     *
     * @return $this
     */
    public function setPublishIpBlackList($publish_ıp_black_list)
    {
        $this->container['publish_ıp_black_list'] = $publish_ıp_black_list;

        return $this;
    }

    /**
     * Gets play_require_secure_connection
     *
     * @return bool
     */
    public function getPlayRequireSecureConnection()
    {
        return $this->container['play_require_secure_connection'];
    }

    /**
     * Sets play_require_secure_connection
     *
     * @param bool $play_require_secure_connection play_require_secure_connection
     *
     * @return $this
     */
    public function setPlayRequireSecureConnection($play_require_secure_connection)
    {
        $this->container['play_require_secure_connection'] = $play_require_secure_connection;

        return $this;
    }

    /**
     * Gets secure_token_origin_shared_secret
     *
     * @return string
     */
    public function getSecureTokenOriginSharedSecret()
    {
        return $this->container['secure_token_origin_shared_secret'];
    }

    /**
     * Sets secure_token_origin_shared_secret
     *
     * @param string $secure_token_origin_shared_secret secure_token_origin_shared_secret
     *
     * @return $this
     */
    public function setSecureTokenOriginSharedSecret($secure_token_origin_shared_secret)
    {
        $this->container['secure_token_origin_shared_secret'] = $secure_token_origin_shared_secret;

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
     * Gets secure_token_ınclude_client_ıp_ın_hash
     *
     * @return bool
     */
    public function getSecureTokenIncludeClientIpInHash()
    {
        return $this->container['secure_token_ınclude_client_ıp_ın_hash'];
    }

    /**
     * Sets secure_token_ınclude_client_ıp_ın_hash
     *
     * @param bool $secure_token_ınclude_client_ıp_ın_hash secure_token_ınclude_client_ıp_ın_hash
     *
     * @return $this
     */
    public function setSecureTokenIncludeClientIpInHash($secure_token_ınclude_client_ıp_ın_hash)
    {
        $this->container['secure_token_ınclude_client_ıp_ın_hash'] = $secure_token_ınclude_client_ıp_ın_hash;

        return $this;
    }

    /**
     * Gets publish_rtmp_secure_url
     *
     * @return string
     */
    public function getPublishRtmpSecureUrl()
    {
        return $this->container['publish_rtmp_secure_url'];
    }

    /**
     * Sets publish_rtmp_secure_url
     *
     * @param string $publish_rtmp_secure_url publish_rtmp_secure_url
     *
     * @return $this
     */
    public function setPublishRtmpSecureUrl($publish_rtmp_secure_url)
    {
        $this->container['publish_rtmp_secure_url'] = $publish_rtmp_secure_url;

        return $this;
    }

    /**
     * Gets secure_token_shared_secret
     *
     * @return string
     */
    public function getSecureTokenSharedSecret()
    {
        return $this->container['secure_token_shared_secret'];
    }

    /**
     * Sets secure_token_shared_secret
     *
     * @param string $secure_token_shared_secret secure_token_shared_secret
     *
     * @return $this
     */
    public function setSecureTokenSharedSecret($secure_token_shared_secret)
    {
        $this->container['secure_token_shared_secret'] = $secure_token_shared_secret;

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


