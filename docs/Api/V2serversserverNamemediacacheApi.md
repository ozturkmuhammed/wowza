# Swagger\Client\V2serversserverNamemediacacheApi

All URIs are relative to *http://10.0.1.56:8087*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteMediaCacheSourceConfig**](V2serversserverNamemediacacheApi.md#deleteMediaCacheSourceConfig) | **DELETE** /v2/servers/{serverName}/mediacache/sources/{sourceName} | Deletes the specified MediaCache Source configuration
[**deleteMediaCacheStoreConfig**](V2serversserverNamemediacacheApi.md#deleteMediaCacheStoreConfig) | **DELETE** /v2/servers/{serverName}/mediacache/stores/{storeName} | Deletes the specified MediaCache Store configuration
[**getMediaCacheConfig**](V2serversserverNamemediacacheApi.md#getMediaCacheConfig) | **GET** /v2/servers/{serverName}/mediacache | Retrieves the server MediaCache configuration
[**getMediaCacheConfigAdv**](V2serversserverNamemediacacheApi.md#getMediaCacheConfigAdv) | **GET** /v2/servers/{serverName}/mediacache/adv | Retrieves the advanced MediaCache configuration
[**getMediaCacheSourceConfig**](V2serversserverNamemediacacheApi.md#getMediaCacheSourceConfig) | **GET** /v2/servers/{serverName}/mediacache/sources/{sourceName} | Retrieves the specified MediaCache Source configuration
[**getMediaCacheSourceConfigAdv**](V2serversserverNamemediacacheApi.md#getMediaCacheSourceConfigAdv) | **GET** /v2/servers/{serverName}/mediacache/sources/{sourceName}/adv | Retrieves the specified advanced MediaCache Source configuration
[**getMediaCacheSourcesConfig**](V2serversserverNamemediacacheApi.md#getMediaCacheSourcesConfig) | **GET** /v2/servers/{serverName}/mediacache/sources | Retrieves the list of MediaCache Sources
[**getMediaCacheStoreConfig**](V2serversserverNamemediacacheApi.md#getMediaCacheStoreConfig) | **GET** /v2/servers/{serverName}/mediacache/stores/{storeName} | Retrieves the specified MediaCache Store configuration
[**getMediaCacheStoreConfigAdv**](V2serversserverNamemediacacheApi.md#getMediaCacheStoreConfigAdv) | **GET** /v2/servers/{serverName}/mediacache/stores/{storeName}/adv | Retrieves the specified advanced MediaCache Store configuration
[**getMediaCacheStoresConfig**](V2serversserverNamemediacacheApi.md#getMediaCacheStoresConfig) | **GET** /v2/servers/{serverName}/mediacache/stores | Retrieves the list of MediaCache Stores
[**postMediaCacheConfigAdv**](V2serversserverNamemediacacheApi.md#postMediaCacheConfigAdv) | **POST** /v2/servers/{serverName}/mediacache/adv | Adds an advanced MediaCache configuration
[**postMediaCacheSourceConfig**](V2serversserverNamemediacacheApi.md#postMediaCacheSourceConfig) | **POST** /v2/servers/{serverName}/mediacache/sources/{sourceName} | Adds the specified MediaCache Source configuration
[**postMediaCacheSourceConfigAdv**](V2serversserverNamemediacacheApi.md#postMediaCacheSourceConfigAdv) | **POST** /v2/servers/{serverName}/mediacache/sources/{sourceName}/adv | Adds the specified advanced MediaCache Source configuration
[**postMediaCacheSourcesConfig**](V2serversserverNamemediacacheApi.md#postMediaCacheSourcesConfig) | **POST** /v2/servers/{serverName}/mediacache/sources | Adds the specified MediaCache Source to the list
[**postMediaCacheStoreConfig**](V2serversserverNamemediacacheApi.md#postMediaCacheStoreConfig) | **POST** /v2/servers/{serverName}/mediacache/stores/{storeName} | Adds the specified MediaCache Store configuration
[**postMediaCacheStoreConfigAdv**](V2serversserverNamemediacacheApi.md#postMediaCacheStoreConfigAdv) | **POST** /v2/servers/{serverName}/mediacache/stores/{storeName}/adv | Adds the specified advanced MediaCache Store configuration
[**postMediaCacheStoresConfig**](V2serversserverNamemediacacheApi.md#postMediaCacheStoresConfig) | **POST** /v2/servers/{serverName}/mediacache/stores | Adds the specified MediaCache Store to the list
[**putMediaCacheConfig**](V2serversserverNamemediacacheApi.md#putMediaCacheConfig) | **PUT** /v2/servers/{serverName}/mediacache | Updates the server MediaCache configuration
[**putMediaCacheConfigAdv**](V2serversserverNamemediacacheApi.md#putMediaCacheConfigAdv) | **PUT** /v2/servers/{serverName}/mediacache/adv | Updates the advanced MediaCache configuration
[**putMediaCacheSourceConfig**](V2serversserverNamemediacacheApi.md#putMediaCacheSourceConfig) | **PUT** /v2/servers/{serverName}/mediacache/sources/{sourceName} | Updates the specified MediaCache Source configuration
[**putMediaCacheSourceConfigAdv**](V2serversserverNamemediacacheApi.md#putMediaCacheSourceConfigAdv) | **PUT** /v2/servers/{serverName}/mediacache/sources/{sourceName}/adv | Updates the specified advanced MediaCache Source configuration
[**putMediaCacheStoreConfig**](V2serversserverNamemediacacheApi.md#putMediaCacheStoreConfig) | **PUT** /v2/servers/{serverName}/mediacache/stores/{storeName} | Updates the specified MediaCache Store configuration
[**putMediaCacheStoreConfigAdv**](V2serversserverNamemediacacheApi.md#putMediaCacheStoreConfigAdv) | **PUT** /v2/servers/{serverName}/mediacache/stores/{storeName}/adv | Updates the specified advanced MediaCache Store configuration


# **deleteMediaCacheSourceConfig**
> deleteMediaCacheSourceConfig($server_name)

Deletes the specified MediaCache Source configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $apiInstance->deleteMediaCacheSourceConfig($server_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->deleteMediaCacheSourceConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMediaCacheStoreConfig**
> deleteMediaCacheStoreConfig($server_name)

Deletes the specified MediaCache Store configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $apiInstance->deleteMediaCacheStoreConfig($server_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->deleteMediaCacheStoreConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaCacheConfig**
> \Swagger\Client\Model\MediaCacheConfig getMediaCacheConfig($server_name)

Retrieves the server MediaCache configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getMediaCacheConfig($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->getMediaCacheConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\MediaCacheConfig**](../Model/MediaCacheConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaCacheConfigAdv**
> \Swagger\Client\Model\MediaCacheConfigAdv getMediaCacheConfigAdv($server_name)

Retrieves the advanced MediaCache configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getMediaCacheConfigAdv($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->getMediaCacheConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\MediaCacheConfigAdv**](../Model/MediaCacheConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaCacheSourceConfig**
> \Swagger\Client\Model\MediaCacheSourceConfig getMediaCacheSourceConfig($server_name)

Retrieves the specified MediaCache Source configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getMediaCacheSourceConfig($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->getMediaCacheSourceConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\MediaCacheSourceConfig**](../Model/MediaCacheSourceConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaCacheSourceConfigAdv**
> \Swagger\Client\Model\MediaCacheSourceConfigAdv getMediaCacheSourceConfigAdv($server_name, $source_name)

Retrieves the specified advanced MediaCache Source configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$source_name = "source_name_example"; // string | 

try {
    $result = $apiInstance->getMediaCacheSourceConfigAdv($server_name, $source_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->getMediaCacheSourceConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **source_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\MediaCacheSourceConfigAdv**](../Model/MediaCacheSourceConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaCacheSourcesConfig**
> \Swagger\Client\Model\MediaCacheSourcesConfig getMediaCacheSourcesConfig($server_name)

Retrieves the list of MediaCache Sources

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getMediaCacheSourcesConfig($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->getMediaCacheSourcesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\MediaCacheSourcesConfig**](../Model/MediaCacheSourcesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaCacheStoreConfig**
> \Swagger\Client\Model\MediaCacheStoreConfig getMediaCacheStoreConfig($server_name)

Retrieves the specified MediaCache Store configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getMediaCacheStoreConfig($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->getMediaCacheStoreConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\MediaCacheStoreConfig**](../Model/MediaCacheStoreConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaCacheStoreConfigAdv**
> \Swagger\Client\Model\MediaCacheStoreConfigAdv getMediaCacheStoreConfigAdv($server_name, $store_name)

Retrieves the specified advanced MediaCache Store configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$store_name = "store_name_example"; // string | 

try {
    $result = $apiInstance->getMediaCacheStoreConfigAdv($server_name, $store_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->getMediaCacheStoreConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **store_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\MediaCacheStoreConfigAdv**](../Model/MediaCacheStoreConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaCacheStoresConfig**
> \Swagger\Client\Model\MediaCacheStoresConfig getMediaCacheStoresConfig($server_name)

Retrieves the list of MediaCache Stores

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getMediaCacheStoresConfig($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->getMediaCacheStoresConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\MediaCacheStoresConfig**](../Model/MediaCacheStoresConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMediaCacheConfigAdv**
> postMediaCacheConfigAdv($server_name, $body)

Adds an advanced MediaCache configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$body = new \Swagger\Client\Model\MediaCacheConfigAdv(); // \Swagger\Client\Model\MediaCacheConfigAdv | 

try {
    $apiInstance->postMediaCacheConfigAdv($server_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->postMediaCacheConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **body** | [**\Swagger\Client\Model\MediaCacheConfigAdv**](../Model/MediaCacheConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMediaCacheSourceConfig**
> postMediaCacheSourceConfig($server_name, $body)

Adds the specified MediaCache Source configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$body = new \Swagger\Client\Model\MediaCacheSourceConfig(); // \Swagger\Client\Model\MediaCacheSourceConfig | 

try {
    $apiInstance->postMediaCacheSourceConfig($server_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->postMediaCacheSourceConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **body** | [**\Swagger\Client\Model\MediaCacheSourceConfig**](../Model/MediaCacheSourceConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMediaCacheSourceConfigAdv**
> postMediaCacheSourceConfigAdv($server_name, $source_name, $body)

Adds the specified advanced MediaCache Source configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$source_name = "source_name_example"; // string | 
$body = new \Swagger\Client\Model\MediaCacheSourceConfigAdv(); // \Swagger\Client\Model\MediaCacheSourceConfigAdv | 

try {
    $apiInstance->postMediaCacheSourceConfigAdv($server_name, $source_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->postMediaCacheSourceConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **source_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\MediaCacheSourceConfigAdv**](../Model/MediaCacheSourceConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMediaCacheSourcesConfig**
> postMediaCacheSourcesConfig($server_name, $body)

Adds the specified MediaCache Source to the list

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$body = new \Swagger\Client\Model\MediaCacheSourceConfig(); // \Swagger\Client\Model\MediaCacheSourceConfig | 

try {
    $apiInstance->postMediaCacheSourcesConfig($server_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->postMediaCacheSourcesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **body** | [**\Swagger\Client\Model\MediaCacheSourceConfig**](../Model/MediaCacheSourceConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMediaCacheStoreConfig**
> postMediaCacheStoreConfig($server_name, $body)

Adds the specified MediaCache Store configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$body = new \Swagger\Client\Model\MediaCacheStoreConfig(); // \Swagger\Client\Model\MediaCacheStoreConfig | 

try {
    $apiInstance->postMediaCacheStoreConfig($server_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->postMediaCacheStoreConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **body** | [**\Swagger\Client\Model\MediaCacheStoreConfig**](../Model/MediaCacheStoreConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMediaCacheStoreConfigAdv**
> postMediaCacheStoreConfigAdv($server_name, $store_name, $body)

Adds the specified advanced MediaCache Store configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$store_name = "store_name_example"; // string | 
$body = new \Swagger\Client\Model\MediaCacheStoreConfigAdv(); // \Swagger\Client\Model\MediaCacheStoreConfigAdv | 

try {
    $apiInstance->postMediaCacheStoreConfigAdv($server_name, $store_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->postMediaCacheStoreConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **store_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\MediaCacheStoreConfigAdv**](../Model/MediaCacheStoreConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMediaCacheStoresConfig**
> postMediaCacheStoresConfig($server_name, $body)

Adds the specified MediaCache Store to the list

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$body = new \Swagger\Client\Model\MediaCacheStoreConfig(); // \Swagger\Client\Model\MediaCacheStoreConfig | 

try {
    $apiInstance->postMediaCacheStoresConfig($server_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->postMediaCacheStoresConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **body** | [**\Swagger\Client\Model\MediaCacheStoreConfig**](../Model/MediaCacheStoreConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMediaCacheConfig**
> putMediaCacheConfig($server_name, $body)

Updates the server MediaCache configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$body = new \Swagger\Client\Model\MediaCacheConfig(); // \Swagger\Client\Model\MediaCacheConfig | 

try {
    $apiInstance->putMediaCacheConfig($server_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->putMediaCacheConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **body** | [**\Swagger\Client\Model\MediaCacheConfig**](../Model/MediaCacheConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMediaCacheConfigAdv**
> putMediaCacheConfigAdv($server_name, $body)

Updates the advanced MediaCache configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$body = new \Swagger\Client\Model\MediaCacheConfigAdv(); // \Swagger\Client\Model\MediaCacheConfigAdv | 

try {
    $apiInstance->putMediaCacheConfigAdv($server_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->putMediaCacheConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **body** | [**\Swagger\Client\Model\MediaCacheConfigAdv**](../Model/MediaCacheConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMediaCacheSourceConfig**
> putMediaCacheSourceConfig($server_name, $body)

Updates the specified MediaCache Source configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$body = new \Swagger\Client\Model\MediaCacheSourceConfig(); // \Swagger\Client\Model\MediaCacheSourceConfig | 

try {
    $apiInstance->putMediaCacheSourceConfig($server_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->putMediaCacheSourceConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **body** | [**\Swagger\Client\Model\MediaCacheSourceConfig**](../Model/MediaCacheSourceConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMediaCacheSourceConfigAdv**
> putMediaCacheSourceConfigAdv($server_name, $source_name, $body)

Updates the specified advanced MediaCache Source configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$source_name = "source_name_example"; // string | 
$body = new \Swagger\Client\Model\MediaCacheSourceConfigAdv(); // \Swagger\Client\Model\MediaCacheSourceConfigAdv | 

try {
    $apiInstance->putMediaCacheSourceConfigAdv($server_name, $source_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->putMediaCacheSourceConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **source_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\MediaCacheSourceConfigAdv**](../Model/MediaCacheSourceConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMediaCacheStoreConfig**
> putMediaCacheStoreConfig($server_name, $body)

Updates the specified MediaCache Store configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$body = new \Swagger\Client\Model\MediaCacheStoreConfig(); // \Swagger\Client\Model\MediaCacheStoreConfig | 

try {
    $apiInstance->putMediaCacheStoreConfig($server_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->putMediaCacheStoreConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **body** | [**\Swagger\Client\Model\MediaCacheStoreConfig**](../Model/MediaCacheStoreConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMediaCacheStoreConfigAdv**
> putMediaCacheStoreConfigAdv($server_name, $store_name, $body)

Updates the specified advanced MediaCache Store configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$store_name = "store_name_example"; // string | 
$body = new \Swagger\Client\Model\MediaCacheStoreConfigAdv(); // \Swagger\Client\Model\MediaCacheStoreConfigAdv | 

try {
    $apiInstance->putMediaCacheStoreConfigAdv($server_name, $store_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacacheApi->putMediaCacheStoreConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **store_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\MediaCacheStoreConfigAdv**](../Model/MediaCacheStoreConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

