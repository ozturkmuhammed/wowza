<?php
/**
 * TranscoderAppConfig
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
 * TranscoderAppConfig Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TranscoderAppConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TranscoderAppConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'profile_dir' => 'string',
        'licensed' => 'bool',
        'templates' => '\Swagger\Client\Model\TranscoderTemplatesConfig',
        'available' => 'bool',
        'server_name' => 'string',
        'template_dir' => 'string',
        'version' => 'string',
        'create_template_dir' => 'bool',
        'licenses' => 'int',
        'live_stream_transcoder' => 'string',
        'templates_ın_use' => 'string',
        'licenses_ın_use' => 'int',
        'save_field_list' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'profile_dir' => null,
        'licensed' => null,
        'templates' => null,
        'available' => null,
        'server_name' => null,
        'template_dir' => null,
        'version' => null,
        'create_template_dir' => null,
        'licenses' => 'int32',
        'live_stream_transcoder' => null,
        'templates_ın_use' => null,
        'licenses_ın_use' => 'int32',
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
        'profile_dir' => 'profileDir',
        'licensed' => 'licensed',
        'templates' => 'templates',
        'available' => 'available',
        'server_name' => 'serverName',
        'template_dir' => 'templateDir',
        'version' => 'version',
        'create_template_dir' => 'createTemplateDir',
        'licenses' => 'licenses',
        'live_stream_transcoder' => 'liveStreamTranscoder',
        'templates_ın_use' => 'templatesInUse',
        'licenses_ın_use' => 'licensesInUse',
        'save_field_list' => 'saveFieldList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'profile_dir' => 'setProfileDir',
        'licensed' => 'setLicensed',
        'templates' => 'setTemplates',
        'available' => 'setAvailable',
        'server_name' => 'setServerName',
        'template_dir' => 'setTemplateDir',
        'version' => 'setVersion',
        'create_template_dir' => 'setCreateTemplateDir',
        'licenses' => 'setLicenses',
        'live_stream_transcoder' => 'setLiveStreamTranscoder',
        'templates_ın_use' => 'setTemplatesInUse',
        'licenses_ın_use' => 'setLicensesInUse',
        'save_field_list' => 'setSaveFieldList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'profile_dir' => 'getProfileDir',
        'licensed' => 'getLicensed',
        'templates' => 'getTemplates',
        'available' => 'getAvailable',
        'server_name' => 'getServerName',
        'template_dir' => 'getTemplateDir',
        'version' => 'getVersion',
        'create_template_dir' => 'getCreateTemplateDir',
        'licenses' => 'getLicenses',
        'live_stream_transcoder' => 'getLiveStreamTranscoder',
        'templates_ın_use' => 'getTemplatesInUse',
        'licenses_ın_use' => 'getLicensesInUse',
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
        $this->container['profile_dir'] = isset($data['profile_dir']) ? $data['profile_dir'] : null;
        $this->container['licensed'] = isset($data['licensed']) ? $data['licensed'] : null;
        $this->container['templates'] = isset($data['templates']) ? $data['templates'] : null;
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['server_name'] = isset($data['server_name']) ? $data['server_name'] : null;
        $this->container['template_dir'] = isset($data['template_dir']) ? $data['template_dir'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['create_template_dir'] = isset($data['create_template_dir']) ? $data['create_template_dir'] : null;
        $this->container['licenses'] = isset($data['licenses']) ? $data['licenses'] : null;
        $this->container['live_stream_transcoder'] = isset($data['live_stream_transcoder']) ? $data['live_stream_transcoder'] : null;
        $this->container['templates_ın_use'] = isset($data['templates_ın_use']) ? $data['templates_ın_use'] : null;
        $this->container['licenses_ın_use'] = isset($data['licenses_ın_use']) ? $data['licenses_ın_use'] : null;
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

        if ($this->container['profile_dir'] === null) {
            $invalidProperties[] = "'profile_dir' can't be null";
        }
        if ($this->container['licensed'] === null) {
            $invalidProperties[] = "'licensed' can't be null";
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
        if ($this->container['template_dir'] === null) {
            $invalidProperties[] = "'template_dir' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['create_template_dir'] === null) {
            $invalidProperties[] = "'create_template_dir' can't be null";
        }
        if ($this->container['licenses'] === null) {
            $invalidProperties[] = "'licenses' can't be null";
        }
        if ($this->container['live_stream_transcoder'] === null) {
            $invalidProperties[] = "'live_stream_transcoder' can't be null";
        }
        if ($this->container['templates_ın_use'] === null) {
            $invalidProperties[] = "'templates_ın_use' can't be null";
        }
        if ($this->container['licenses_ın_use'] === null) {
            $invalidProperties[] = "'licenses_ın_use' can't be null";
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
     * Gets profile_dir
     *
     * @return string
     */
    public function getProfileDir()
    {
        return $this->container['profile_dir'];
    }

    /**
     * Sets profile_dir
     *
     * @param string $profile_dir profile_dir
     *
     * @return $this
     */
    public function setProfileDir($profile_dir)
    {
        $this->container['profile_dir'] = $profile_dir;

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
     * Gets template_dir
     *
     * @return string
     */
    public function getTemplateDir()
    {
        return $this->container['template_dir'];
    }

    /**
     * Sets template_dir
     *
     * @param string $template_dir template_dir
     *
     * @return $this
     */
    public function setTemplateDir($template_dir)
    {
        $this->container['template_dir'] = $template_dir;

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
     * Gets create_template_dir
     *
     * @return bool
     */
    public function getCreateTemplateDir()
    {
        return $this->container['create_template_dir'];
    }

    /**
     * Sets create_template_dir
     *
     * @param bool $create_template_dir create_template_dir
     *
     * @return $this
     */
    public function setCreateTemplateDir($create_template_dir)
    {
        $this->container['create_template_dir'] = $create_template_dir;

        return $this;
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
     * Gets live_stream_transcoder
     *
     * @return string
     */
    public function getLiveStreamTranscoder()
    {
        return $this->container['live_stream_transcoder'];
    }

    /**
     * Sets live_stream_transcoder
     *
     * @param string $live_stream_transcoder live_stream_transcoder
     *
     * @return $this
     */
    public function setLiveStreamTranscoder($live_stream_transcoder)
    {
        $this->container['live_stream_transcoder'] = $live_stream_transcoder;

        return $this;
    }

    /**
     * Gets templates_ın_use
     *
     * @return string
     */
    public function getTemplatesInUse()
    {
        return $this->container['templates_ın_use'];
    }

    /**
     * Sets templates_ın_use
     *
     * @param string $templates_ın_use templates_ın_use
     *
     * @return $this
     */
    public function setTemplatesInUse($templates_ın_use)
    {
        $this->container['templates_ın_use'] = $templates_ın_use;

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


