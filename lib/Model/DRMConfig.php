<?php
/**
 * DRMConfig
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
 * DRMConfig Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DRMConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DRMConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'buy_drm_protect_mpeg_dash_streaming' => 'bool',
        'server_name' => 'string',
        'buy_drm_protect_cupertino_streaming' => 'bool',
        'version' => 'string',
        'verimatrix_cupertino_key_server_port' => 'int',
        'verimatrix_smooth_key_server_port' => 'int',
        'verimatrix_stream_maps' => '\Swagger\Client\Model\VerimatrixStreamMapsConfig',
        'verimatrix_smooth_key_server_ıp_address' => 'string',
        'license_type' => 'string',
        'verimatrix_cupertino_key_server_ıp_address' => 'string',
        'buy_drm_protect_smooth_streaming' => 'bool',
        'buy_drm_user_key' => 'string',
        'in_use' => 'bool',
        'ez_drm_username' => 'string',
        'verimatrix_protect_smooth_streaming' => 'bool',
        'buy_drm_stream_maps' => '\Swagger\Client\Model\BuyDRMStreamMapsConfig',
        'verimatrix_cupertino_vod_per_session_keys' => 'bool',
        'save_field_list' => 'string[]',
        'ez_drm_password' => 'string',
        'verimatrix_protect_cupertino_streaming' => 'bool',
        'cupertino_encryption_apı_based' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'buy_drm_protect_mpeg_dash_streaming' => null,
        'server_name' => null,
        'buy_drm_protect_cupertino_streaming' => null,
        'version' => null,
        'verimatrix_cupertino_key_server_port' => 'int32',
        'verimatrix_smooth_key_server_port' => 'int32',
        'verimatrix_stream_maps' => null,
        'verimatrix_smooth_key_server_ıp_address' => null,
        'license_type' => null,
        'verimatrix_cupertino_key_server_ıp_address' => null,
        'buy_drm_protect_smooth_streaming' => null,
        'buy_drm_user_key' => null,
        'in_use' => null,
        'ez_drm_username' => null,
        'verimatrix_protect_smooth_streaming' => null,
        'buy_drm_stream_maps' => null,
        'verimatrix_cupertino_vod_per_session_keys' => null,
        'save_field_list' => null,
        'ez_drm_password' => null,
        'verimatrix_protect_cupertino_streaming' => null,
        'cupertino_encryption_apı_based' => null
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
        'buy_drm_protect_mpeg_dash_streaming' => 'buyDRMProtectMpegDashStreaming',
        'server_name' => 'serverName',
        'buy_drm_protect_cupertino_streaming' => 'buyDRMProtectCupertinoStreaming',
        'version' => 'version',
        'verimatrix_cupertino_key_server_port' => 'verimatrixCupertinoKeyServerPort',
        'verimatrix_smooth_key_server_port' => 'verimatrixSmoothKeyServerPort',
        'verimatrix_stream_maps' => 'verimatrixStreamMaps',
        'verimatrix_smooth_key_server_ıp_address' => 'verimatrixSmoothKeyServerIpAddress',
        'license_type' => 'licenseType',
        'verimatrix_cupertino_key_server_ıp_address' => 'verimatrixCupertinoKeyServerIpAddress',
        'buy_drm_protect_smooth_streaming' => 'buyDRMProtectSmoothStreaming',
        'buy_drm_user_key' => 'buyDRMUserKey',
        'in_use' => 'inUse',
        'ez_drm_username' => 'ezDRMUsername',
        'verimatrix_protect_smooth_streaming' => 'verimatrixProtectSmoothStreaming',
        'buy_drm_stream_maps' => 'buyDRMStreamMaps',
        'verimatrix_cupertino_vod_per_session_keys' => 'verimatrixCupertinoVODPerSessionKeys',
        'save_field_list' => 'saveFieldList',
        'ez_drm_password' => 'ezDRMPassword',
        'verimatrix_protect_cupertino_streaming' => 'verimatrixProtectCupertinoStreaming',
        'cupertino_encryption_apı_based' => 'cupertinoEncryptionAPIBased'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buy_drm_protect_mpeg_dash_streaming' => 'setBuyDrmProtectMpegDashStreaming',
        'server_name' => 'setServerName',
        'buy_drm_protect_cupertino_streaming' => 'setBuyDrmProtectCupertinoStreaming',
        'version' => 'setVersion',
        'verimatrix_cupertino_key_server_port' => 'setVerimatrixCupertinoKeyServerPort',
        'verimatrix_smooth_key_server_port' => 'setVerimatrixSmoothKeyServerPort',
        'verimatrix_stream_maps' => 'setVerimatrixStreamMaps',
        'verimatrix_smooth_key_server_ıp_address' => 'setVerimatrixSmoothKeyServerIpAddress',
        'license_type' => 'setLicenseType',
        'verimatrix_cupertino_key_server_ıp_address' => 'setVerimatrixCupertinoKeyServerIpAddress',
        'buy_drm_protect_smooth_streaming' => 'setBuyDrmProtectSmoothStreaming',
        'buy_drm_user_key' => 'setBuyDrmUserKey',
        'in_use' => 'setInUse',
        'ez_drm_username' => 'setEzDrmUsername',
        'verimatrix_protect_smooth_streaming' => 'setVerimatrixProtectSmoothStreaming',
        'buy_drm_stream_maps' => 'setBuyDrmStreamMaps',
        'verimatrix_cupertino_vod_per_session_keys' => 'setVerimatrixCupertinoVodPerSessionKeys',
        'save_field_list' => 'setSaveFieldList',
        'ez_drm_password' => 'setEzDrmPassword',
        'verimatrix_protect_cupertino_streaming' => 'setVerimatrixProtectCupertinoStreaming',
        'cupertino_encryption_apı_based' => 'setCupertinoEncryptionApıBased'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buy_drm_protect_mpeg_dash_streaming' => 'getBuyDrmProtectMpegDashStreaming',
        'server_name' => 'getServerName',
        'buy_drm_protect_cupertino_streaming' => 'getBuyDrmProtectCupertinoStreaming',
        'version' => 'getVersion',
        'verimatrix_cupertino_key_server_port' => 'getVerimatrixCupertinoKeyServerPort',
        'verimatrix_smooth_key_server_port' => 'getVerimatrixSmoothKeyServerPort',
        'verimatrix_stream_maps' => 'getVerimatrixStreamMaps',
        'verimatrix_smooth_key_server_ıp_address' => 'getVerimatrixSmoothKeyServerIpAddress',
        'license_type' => 'getLicenseType',
        'verimatrix_cupertino_key_server_ıp_address' => 'getVerimatrixCupertinoKeyServerIpAddress',
        'buy_drm_protect_smooth_streaming' => 'getBuyDrmProtectSmoothStreaming',
        'buy_drm_user_key' => 'getBuyDrmUserKey',
        'in_use' => 'getInUse',
        'ez_drm_username' => 'getEzDrmUsername',
        'verimatrix_protect_smooth_streaming' => 'getVerimatrixProtectSmoothStreaming',
        'buy_drm_stream_maps' => 'getBuyDrmStreamMaps',
        'verimatrix_cupertino_vod_per_session_keys' => 'getVerimatrixCupertinoVodPerSessionKeys',
        'save_field_list' => 'getSaveFieldList',
        'ez_drm_password' => 'getEzDrmPassword',
        'verimatrix_protect_cupertino_streaming' => 'getVerimatrixProtectCupertinoStreaming',
        'cupertino_encryption_apı_based' => 'getCupertinoEncryptionApıBased'
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
        $this->container['buy_drm_protect_mpeg_dash_streaming'] = isset($data['buy_drm_protect_mpeg_dash_streaming']) ? $data['buy_drm_protect_mpeg_dash_streaming'] : null;
        $this->container['server_name'] = isset($data['server_name']) ? $data['server_name'] : null;
        $this->container['buy_drm_protect_cupertino_streaming'] = isset($data['buy_drm_protect_cupertino_streaming']) ? $data['buy_drm_protect_cupertino_streaming'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['verimatrix_cupertino_key_server_port'] = isset($data['verimatrix_cupertino_key_server_port']) ? $data['verimatrix_cupertino_key_server_port'] : null;
        $this->container['verimatrix_smooth_key_server_port'] = isset($data['verimatrix_smooth_key_server_port']) ? $data['verimatrix_smooth_key_server_port'] : null;
        $this->container['verimatrix_stream_maps'] = isset($data['verimatrix_stream_maps']) ? $data['verimatrix_stream_maps'] : null;
        $this->container['verimatrix_smooth_key_server_ıp_address'] = isset($data['verimatrix_smooth_key_server_ıp_address']) ? $data['verimatrix_smooth_key_server_ıp_address'] : null;
        $this->container['license_type'] = isset($data['license_type']) ? $data['license_type'] : null;
        $this->container['verimatrix_cupertino_key_server_ıp_address'] = isset($data['verimatrix_cupertino_key_server_ıp_address']) ? $data['verimatrix_cupertino_key_server_ıp_address'] : null;
        $this->container['buy_drm_protect_smooth_streaming'] = isset($data['buy_drm_protect_smooth_streaming']) ? $data['buy_drm_protect_smooth_streaming'] : null;
        $this->container['buy_drm_user_key'] = isset($data['buy_drm_user_key']) ? $data['buy_drm_user_key'] : null;
        $this->container['in_use'] = isset($data['in_use']) ? $data['in_use'] : null;
        $this->container['ez_drm_username'] = isset($data['ez_drm_username']) ? $data['ez_drm_username'] : null;
        $this->container['verimatrix_protect_smooth_streaming'] = isset($data['verimatrix_protect_smooth_streaming']) ? $data['verimatrix_protect_smooth_streaming'] : null;
        $this->container['buy_drm_stream_maps'] = isset($data['buy_drm_stream_maps']) ? $data['buy_drm_stream_maps'] : null;
        $this->container['verimatrix_cupertino_vod_per_session_keys'] = isset($data['verimatrix_cupertino_vod_per_session_keys']) ? $data['verimatrix_cupertino_vod_per_session_keys'] : null;
        $this->container['save_field_list'] = isset($data['save_field_list']) ? $data['save_field_list'] : null;
        $this->container['ez_drm_password'] = isset($data['ez_drm_password']) ? $data['ez_drm_password'] : null;
        $this->container['verimatrix_protect_cupertino_streaming'] = isset($data['verimatrix_protect_cupertino_streaming']) ? $data['verimatrix_protect_cupertino_streaming'] : null;
        $this->container['cupertino_encryption_apı_based'] = isset($data['cupertino_encryption_apı_based']) ? $data['cupertino_encryption_apı_based'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['buy_drm_protect_mpeg_dash_streaming'] === null) {
            $invalidProperties[] = "'buy_drm_protect_mpeg_dash_streaming' can't be null";
        }
        if ($this->container['server_name'] === null) {
            $invalidProperties[] = "'server_name' can't be null";
        }
        if ($this->container['buy_drm_protect_cupertino_streaming'] === null) {
            $invalidProperties[] = "'buy_drm_protect_cupertino_streaming' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['verimatrix_cupertino_key_server_port'] === null) {
            $invalidProperties[] = "'verimatrix_cupertino_key_server_port' can't be null";
        }
        if ($this->container['verimatrix_smooth_key_server_port'] === null) {
            $invalidProperties[] = "'verimatrix_smooth_key_server_port' can't be null";
        }
        if ($this->container['verimatrix_stream_maps'] === null) {
            $invalidProperties[] = "'verimatrix_stream_maps' can't be null";
        }
        if ($this->container['verimatrix_smooth_key_server_ıp_address'] === null) {
            $invalidProperties[] = "'verimatrix_smooth_key_server_ıp_address' can't be null";
        }
        if ($this->container['license_type'] === null) {
            $invalidProperties[] = "'license_type' can't be null";
        }
        if ($this->container['verimatrix_cupertino_key_server_ıp_address'] === null) {
            $invalidProperties[] = "'verimatrix_cupertino_key_server_ıp_address' can't be null";
        }
        if ($this->container['buy_drm_protect_smooth_streaming'] === null) {
            $invalidProperties[] = "'buy_drm_protect_smooth_streaming' can't be null";
        }
        if ($this->container['buy_drm_user_key'] === null) {
            $invalidProperties[] = "'buy_drm_user_key' can't be null";
        }
        if ($this->container['in_use'] === null) {
            $invalidProperties[] = "'in_use' can't be null";
        }
        if ($this->container['ez_drm_username'] === null) {
            $invalidProperties[] = "'ez_drm_username' can't be null";
        }
        if ($this->container['verimatrix_protect_smooth_streaming'] === null) {
            $invalidProperties[] = "'verimatrix_protect_smooth_streaming' can't be null";
        }
        if ($this->container['buy_drm_stream_maps'] === null) {
            $invalidProperties[] = "'buy_drm_stream_maps' can't be null";
        }
        if ($this->container['verimatrix_cupertino_vod_per_session_keys'] === null) {
            $invalidProperties[] = "'verimatrix_cupertino_vod_per_session_keys' can't be null";
        }
        if ($this->container['ez_drm_password'] === null) {
            $invalidProperties[] = "'ez_drm_password' can't be null";
        }
        if ($this->container['verimatrix_protect_cupertino_streaming'] === null) {
            $invalidProperties[] = "'verimatrix_protect_cupertino_streaming' can't be null";
        }
        if ($this->container['cupertino_encryption_apı_based'] === null) {
            $invalidProperties[] = "'cupertino_encryption_apı_based' can't be null";
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
     * Gets buy_drm_protect_mpeg_dash_streaming
     *
     * @return bool
     */
    public function getBuyDrmProtectMpegDashStreaming()
    {
        return $this->container['buy_drm_protect_mpeg_dash_streaming'];
    }

    /**
     * Sets buy_drm_protect_mpeg_dash_streaming
     *
     * @param bool $buy_drm_protect_mpeg_dash_streaming buy_drm_protect_mpeg_dash_streaming
     *
     * @return $this
     */
    public function setBuyDrmProtectMpegDashStreaming($buy_drm_protect_mpeg_dash_streaming)
    {
        $this->container['buy_drm_protect_mpeg_dash_streaming'] = $buy_drm_protect_mpeg_dash_streaming;

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
     * Gets buy_drm_protect_cupertino_streaming
     *
     * @return bool
     */
    public function getBuyDrmProtectCupertinoStreaming()
    {
        return $this->container['buy_drm_protect_cupertino_streaming'];
    }

    /**
     * Sets buy_drm_protect_cupertino_streaming
     *
     * @param bool $buy_drm_protect_cupertino_streaming buy_drm_protect_cupertino_streaming
     *
     * @return $this
     */
    public function setBuyDrmProtectCupertinoStreaming($buy_drm_protect_cupertino_streaming)
    {
        $this->container['buy_drm_protect_cupertino_streaming'] = $buy_drm_protect_cupertino_streaming;

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
     * Gets verimatrix_cupertino_key_server_port
     *
     * @return int
     */
    public function getVerimatrixCupertinoKeyServerPort()
    {
        return $this->container['verimatrix_cupertino_key_server_port'];
    }

    /**
     * Sets verimatrix_cupertino_key_server_port
     *
     * @param int $verimatrix_cupertino_key_server_port verimatrix_cupertino_key_server_port
     *
     * @return $this
     */
    public function setVerimatrixCupertinoKeyServerPort($verimatrix_cupertino_key_server_port)
    {
        $this->container['verimatrix_cupertino_key_server_port'] = $verimatrix_cupertino_key_server_port;

        return $this;
    }

    /**
     * Gets verimatrix_smooth_key_server_port
     *
     * @return int
     */
    public function getVerimatrixSmoothKeyServerPort()
    {
        return $this->container['verimatrix_smooth_key_server_port'];
    }

    /**
     * Sets verimatrix_smooth_key_server_port
     *
     * @param int $verimatrix_smooth_key_server_port verimatrix_smooth_key_server_port
     *
     * @return $this
     */
    public function setVerimatrixSmoothKeyServerPort($verimatrix_smooth_key_server_port)
    {
        $this->container['verimatrix_smooth_key_server_port'] = $verimatrix_smooth_key_server_port;

        return $this;
    }

    /**
     * Gets verimatrix_stream_maps
     *
     * @return \Swagger\Client\Model\VerimatrixStreamMapsConfig
     */
    public function getVerimatrixStreamMaps()
    {
        return $this->container['verimatrix_stream_maps'];
    }

    /**
     * Sets verimatrix_stream_maps
     *
     * @param \Swagger\Client\Model\VerimatrixStreamMapsConfig $verimatrix_stream_maps verimatrix_stream_maps
     *
     * @return $this
     */
    public function setVerimatrixStreamMaps($verimatrix_stream_maps)
    {
        $this->container['verimatrix_stream_maps'] = $verimatrix_stream_maps;

        return $this;
    }

    /**
     * Gets verimatrix_smooth_key_server_ıp_address
     *
     * @return string
     */
    public function getVerimatrixSmoothKeyServerIpAddress()
    {
        return $this->container['verimatrix_smooth_key_server_ıp_address'];
    }

    /**
     * Sets verimatrix_smooth_key_server_ıp_address
     *
     * @param string $verimatrix_smooth_key_server_ıp_address verimatrix_smooth_key_server_ıp_address
     *
     * @return $this
     */
    public function setVerimatrixSmoothKeyServerIpAddress($verimatrix_smooth_key_server_ıp_address)
    {
        $this->container['verimatrix_smooth_key_server_ıp_address'] = $verimatrix_smooth_key_server_ıp_address;

        return $this;
    }

    /**
     * Gets license_type
     *
     * @return string
     */
    public function getLicenseType()
    {
        return $this->container['license_type'];
    }

    /**
     * Sets license_type
     *
     * @param string $license_type license_type
     *
     * @return $this
     */
    public function setLicenseType($license_type)
    {
        $this->container['license_type'] = $license_type;

        return $this;
    }

    /**
     * Gets verimatrix_cupertino_key_server_ıp_address
     *
     * @return string
     */
    public function getVerimatrixCupertinoKeyServerIpAddress()
    {
        return $this->container['verimatrix_cupertino_key_server_ıp_address'];
    }

    /**
     * Sets verimatrix_cupertino_key_server_ıp_address
     *
     * @param string $verimatrix_cupertino_key_server_ıp_address verimatrix_cupertino_key_server_ıp_address
     *
     * @return $this
     */
    public function setVerimatrixCupertinoKeyServerIpAddress($verimatrix_cupertino_key_server_ıp_address)
    {
        $this->container['verimatrix_cupertino_key_server_ıp_address'] = $verimatrix_cupertino_key_server_ıp_address;

        return $this;
    }

    /**
     * Gets buy_drm_protect_smooth_streaming
     *
     * @return bool
     */
    public function getBuyDrmProtectSmoothStreaming()
    {
        return $this->container['buy_drm_protect_smooth_streaming'];
    }

    /**
     * Sets buy_drm_protect_smooth_streaming
     *
     * @param bool $buy_drm_protect_smooth_streaming buy_drm_protect_smooth_streaming
     *
     * @return $this
     */
    public function setBuyDrmProtectSmoothStreaming($buy_drm_protect_smooth_streaming)
    {
        $this->container['buy_drm_protect_smooth_streaming'] = $buy_drm_protect_smooth_streaming;

        return $this;
    }

    /**
     * Gets buy_drm_user_key
     *
     * @return string
     */
    public function getBuyDrmUserKey()
    {
        return $this->container['buy_drm_user_key'];
    }

    /**
     * Sets buy_drm_user_key
     *
     * @param string $buy_drm_user_key buy_drm_user_key
     *
     * @return $this
     */
    public function setBuyDrmUserKey($buy_drm_user_key)
    {
        $this->container['buy_drm_user_key'] = $buy_drm_user_key;

        return $this;
    }

    /**
     * Gets in_use
     *
     * @return bool
     */
    public function getInUse()
    {
        return $this->container['in_use'];
    }

    /**
     * Sets in_use
     *
     * @param bool $in_use in_use
     *
     * @return $this
     */
    public function setInUse($in_use)
    {
        $this->container['in_use'] = $in_use;

        return $this;
    }

    /**
     * Gets ez_drm_username
     *
     * @return string
     */
    public function getEzDrmUsername()
    {
        return $this->container['ez_drm_username'];
    }

    /**
     * Sets ez_drm_username
     *
     * @param string $ez_drm_username ez_drm_username
     *
     * @return $this
     */
    public function setEzDrmUsername($ez_drm_username)
    {
        $this->container['ez_drm_username'] = $ez_drm_username;

        return $this;
    }

    /**
     * Gets verimatrix_protect_smooth_streaming
     *
     * @return bool
     */
    public function getVerimatrixProtectSmoothStreaming()
    {
        return $this->container['verimatrix_protect_smooth_streaming'];
    }

    /**
     * Sets verimatrix_protect_smooth_streaming
     *
     * @param bool $verimatrix_protect_smooth_streaming verimatrix_protect_smooth_streaming
     *
     * @return $this
     */
    public function setVerimatrixProtectSmoothStreaming($verimatrix_protect_smooth_streaming)
    {
        $this->container['verimatrix_protect_smooth_streaming'] = $verimatrix_protect_smooth_streaming;

        return $this;
    }

    /**
     * Gets buy_drm_stream_maps
     *
     * @return \Swagger\Client\Model\BuyDRMStreamMapsConfig
     */
    public function getBuyDrmStreamMaps()
    {
        return $this->container['buy_drm_stream_maps'];
    }

    /**
     * Sets buy_drm_stream_maps
     *
     * @param \Swagger\Client\Model\BuyDRMStreamMapsConfig $buy_drm_stream_maps buy_drm_stream_maps
     *
     * @return $this
     */
    public function setBuyDrmStreamMaps($buy_drm_stream_maps)
    {
        $this->container['buy_drm_stream_maps'] = $buy_drm_stream_maps;

        return $this;
    }

    /**
     * Gets verimatrix_cupertino_vod_per_session_keys
     *
     * @return bool
     */
    public function getVerimatrixCupertinoVodPerSessionKeys()
    {
        return $this->container['verimatrix_cupertino_vod_per_session_keys'];
    }

    /**
     * Sets verimatrix_cupertino_vod_per_session_keys
     *
     * @param bool $verimatrix_cupertino_vod_per_session_keys verimatrix_cupertino_vod_per_session_keys
     *
     * @return $this
     */
    public function setVerimatrixCupertinoVodPerSessionKeys($verimatrix_cupertino_vod_per_session_keys)
    {
        $this->container['verimatrix_cupertino_vod_per_session_keys'] = $verimatrix_cupertino_vod_per_session_keys;

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
     * Gets ez_drm_password
     *
     * @return string
     */
    public function getEzDrmPassword()
    {
        return $this->container['ez_drm_password'];
    }

    /**
     * Sets ez_drm_password
     *
     * @param string $ez_drm_password ez_drm_password
     *
     * @return $this
     */
    public function setEzDrmPassword($ez_drm_password)
    {
        $this->container['ez_drm_password'] = $ez_drm_password;

        return $this;
    }

    /**
     * Gets verimatrix_protect_cupertino_streaming
     *
     * @return bool
     */
    public function getVerimatrixProtectCupertinoStreaming()
    {
        return $this->container['verimatrix_protect_cupertino_streaming'];
    }

    /**
     * Sets verimatrix_protect_cupertino_streaming
     *
     * @param bool $verimatrix_protect_cupertino_streaming verimatrix_protect_cupertino_streaming
     *
     * @return $this
     */
    public function setVerimatrixProtectCupertinoStreaming($verimatrix_protect_cupertino_streaming)
    {
        $this->container['verimatrix_protect_cupertino_streaming'] = $verimatrix_protect_cupertino_streaming;

        return $this;
    }

    /**
     * Gets cupertino_encryption_apı_based
     *
     * @return bool
     */
    public function getCupertinoEncryptionApıBased()
    {
        return $this->container['cupertino_encryption_apı_based'];
    }

    /**
     * Sets cupertino_encryption_apı_based
     *
     * @param bool $cupertino_encryption_apı_based cupertino_encryption_apı_based
     *
     * @return $this
     */
    public function setCupertinoEncryptionApıBased($cupertino_encryption_apı_based)
    {
        $this->container['cupertino_encryption_apı_based'] = $cupertino_encryption_apı_based;

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


