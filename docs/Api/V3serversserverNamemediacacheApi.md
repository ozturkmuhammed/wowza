# Swagger\Client\V3serversserverNamemediacacheApi

All URIs are relative to *http://10.0.1.56:8087*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteMediaCacheSourceConfig3**](V3serversserverNamemediacacheApi.md#deleteMediaCacheSourceConfig3) | **DELETE** /v3/servers/{serverName}/mediacache/sources/{sourceName} | Deletes the specified MediaCache Source configuration
[**deleteMediaCacheStoreConfig3**](V3serversserverNamemediacacheApi.md#deleteMediaCacheStoreConfig3) | **DELETE** /v3/servers/{serverName}/mediacache/stores/{storeName} | Deletes the specified MediaCache Store configuration
[**getMediaCacheConfig3**](V3serversserverNamemediacacheApi.md#getMediaCacheConfig3) | **GET** /v3/servers/{serverName}/mediacache | Retrieves the server MediaCache configuration
[**getMediaCacheSourceConfig3**](V3serversserverNamemediacacheApi.md#getMediaCacheSourceConfig3) | **GET** /v3/servers/{serverName}/mediacache/sources/{sourceName} | Retrieves the specified MediaCache Source configuration
[**getMediaCacheSourceConfigAdv3**](V3serversserverNamemediacacheApi.md#getMediaCacheSourceConfigAdv3) | **GET** /v3/servers/{serverName}/mediacache/sources/{sourceName}/adv | Retrieves the specified advanced MediaCache Source configuration
[**getMediaCacheSourcesConfig3**](V3serversserverNamemediacacheApi.md#getMediaCacheSourcesConfig3) | **GET** /v3/servers/{serverName}/mediacache/sources | Retrieves the list of MediaCache Sources
[**getMediaCacheStoreConfig3**](V3serversserverNamemediacacheApi.md#getMediaCacheStoreConfig3) | **GET** /v3/servers/{serverName}/mediacache/stores/{storeName} | Retrieves the specified MediaCache Store configuration
[**getMediaCacheStoresConfig3**](V3serversserverNamemediacacheApi.md#getMediaCacheStoresConfig3) | **GET** /v3/servers/{serverName}/mediacache/stores | Retrieves the list of MediaCache Stores
[**postMediaCacheSourceConfig3**](V3serversserverNamemediacacheApi.md#postMediaCacheSourceConfig3) | **POST** /v3/servers/{serverName}/mediacache/sources/{sourceName} | Adds the specified MediaCache Source configuration
[**postMediaCacheSourceConfigAdv3**](V3serversserverNamemediacacheApi.md#postMediaCacheSourceConfigAdv3) | **POST** /v3/servers/{serverName}/mediacache/sources/{sourceName}/adv | Adds the specified advanced MediaCache Source configuration
[**postMediaCacheSourcesConfig3**](V3serversserverNamemediacacheApi.md#postMediaCacheSourcesConfig3) | **POST** /v3/servers/{serverName}/mediacache/sources | Adds the specified MediaCache Source to the list
[**postMediaCacheStoreConfig3**](V3serversserverNamemediacacheApi.md#postMediaCacheStoreConfig3) | **POST** /v3/servers/{serverName}/mediacache/stores/{storeName} | Adds the specified MediaCache Store configuration
[**postMediaCacheStoresConfig3**](V3serversserverNamemediacacheApi.md#postMediaCacheStoresConfig3) | **POST** /v3/servers/{serverName}/mediacache/stores | Adds the specified MediaCache Store to the list
[**putMediaCacheConfig3**](V3serversserverNamemediacacheApi.md#putMediaCacheConfig3) | **PUT** /v3/servers/{serverName}/mediacache | Updates the server MediaCache configuration
[**putMediaCacheSourceConfig3**](V3serversserverNamemediacacheApi.md#putMediaCacheSourceConfig3) | **PUT** /v3/servers/{serverName}/mediacache/sources/{sourceName} | Updates the specified MediaCache Source configuration
[**putMediaCacheSourceConfigAdv3**](V3serversserverNamemediacacheApi.md#putMediaCacheSourceConfigAdv3) | **PUT** /v3/servers/{serverName}/mediacache/sources/{sourceName}/adv | Updates the specified advanced MediaCache Source configuration
[**putMediaCacheStoreConfig3**](V3serversserverNamemediacacheApi.md#putMediaCacheStoreConfig3) | **PUT** /v3/servers/{serverName}/mediacache/stores/{storeName} | Updates the specified MediaCache Store configuration


# **deleteMediaCacheSourceConfig3**
> deleteMediaCacheSourceConfig3($server_name, $source_name)

Deletes the specified MediaCache Source configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$source_name = "source_name_example"; // string | 

try {
    $apiInstance->deleteMediaCacheSourceConfig3($server_name, $source_name);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamemediacacheApi->deleteMediaCacheSourceConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **source_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMediaCacheStoreConfig3**
> deleteMediaCacheStoreConfig3($server_name, $store_name)

Deletes the specified MediaCache Store configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$store_name = "store_name_example"; // string | 

try {
    $apiInstance->deleteMediaCacheStoreConfig3($server_name, $store_name);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamemediacacheApi->deleteMediaCacheStoreConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **store_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaCacheConfig3**
> \Swagger\Client\Model\MediaCacheConfig3 getMediaCacheConfig3($server_name)

Retrieves the server MediaCache configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getMediaCacheConfig3($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamemediacacheApi->getMediaCacheConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\MediaCacheConfig3**](../Model/MediaCacheConfig3.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaCacheSourceConfig3**
> \Swagger\Client\Model\MediaCacheSourceConfig3 getMediaCacheSourceConfig3($server_name, $source_name)

Retrieves the specified MediaCache Source configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$source_name = "source_name_example"; // string | 

try {
    $result = $apiInstance->getMediaCacheSourceConfig3($server_name, $source_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamemediacacheApi->getMediaCacheSourceConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **source_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\MediaCacheSourceConfig3**](../Model/MediaCacheSourceConfig3.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaCacheSourceConfigAdv3**
> \Swagger\Client\Model\MediaCacheSourceConfigAdv3 getMediaCacheSourceConfigAdv3($server_name, $source_name)

Retrieves the specified advanced MediaCache Source configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$source_name = "source_name_example"; // string | 

try {
    $result = $apiInstance->getMediaCacheSourceConfigAdv3($server_name, $source_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamemediacacheApi->getMediaCacheSourceConfigAdv3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **source_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\MediaCacheSourceConfigAdv3**](../Model/MediaCacheSourceConfigAdv3.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaCacheSourcesConfig3**
> \Swagger\Client\Model\MediaCacheSourcesConfig3 getMediaCacheSourcesConfig3($server_name)

Retrieves the list of MediaCache Sources

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getMediaCacheSourcesConfig3($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamemediacacheApi->getMediaCacheSourcesConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\MediaCacheSourcesConfig3**](../Model/MediaCacheSourcesConfig3.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaCacheStoreConfig3**
> \Swagger\Client\Model\MediaCacheStoreConfig3 getMediaCacheStoreConfig3($server_name, $store_name)

Retrieves the specified MediaCache Store configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$store_name = "store_name_example"; // string | 

try {
    $result = $apiInstance->getMediaCacheStoreConfig3($server_name, $store_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamemediacacheApi->getMediaCacheStoreConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **store_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\MediaCacheStoreConfig3**](../Model/MediaCacheStoreConfig3.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaCacheStoresConfig3**
> \Swagger\Client\Model\MediaCacheStoresConfig3 getMediaCacheStoresConfig3($server_name)

Retrieves the list of MediaCache Stores

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getMediaCacheStoresConfig3($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamemediacacheApi->getMediaCacheStoresConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\MediaCacheStoresConfig3**](../Model/MediaCacheStoresConfig3.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMediaCacheSourceConfig3**
> postMediaCacheSourceConfig3($server_name, $source_name, $body)

Adds the specified MediaCache Source configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$source_name = "source_name_example"; // string | 
$body = new \Swagger\Client\Model\MediaCacheSourceConfig3(); // \Swagger\Client\Model\MediaCacheSourceConfig3 | 

try {
    $apiInstance->postMediaCacheSourceConfig3($server_name, $source_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamemediacacheApi->postMediaCacheSourceConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **source_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\MediaCacheSourceConfig3**](../Model/MediaCacheSourceConfig3.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMediaCacheSourceConfigAdv3**
> postMediaCacheSourceConfigAdv3($server_name, $source_name, $body)

Adds the specified advanced MediaCache Source configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$source_name = "source_name_example"; // string | 
$body = new \Swagger\Client\Model\MediaCacheSourceConfigAdv3(); // \Swagger\Client\Model\MediaCacheSourceConfigAdv3 | 

try {
    $apiInstance->postMediaCacheSourceConfigAdv3($server_name, $source_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamemediacacheApi->postMediaCacheSourceConfigAdv3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **source_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\MediaCacheSourceConfigAdv3**](../Model/MediaCacheSourceConfigAdv3.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMediaCacheSourcesConfig3**
> postMediaCacheSourcesConfig3($server_name, $body)

Adds the specified MediaCache Source to the list

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$body = new \Swagger\Client\Model\MediaCacheSourceConfig(); // \Swagger\Client\Model\MediaCacheSourceConfig | 

try {
    $apiInstance->postMediaCacheSourcesConfig3($server_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamemediacacheApi->postMediaCacheSourcesConfig3: ', $e->getMessage(), PHP_EOL;
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

# **postMediaCacheStoreConfig3**
> postMediaCacheStoreConfig3($server_name, $store_name, $body)

Adds the specified MediaCache Store configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$store_name = "store_name_example"; // string | 
$body = new \Swagger\Client\Model\MediaCacheStoreConfig3(); // \Swagger\Client\Model\MediaCacheStoreConfig3 | 

try {
    $apiInstance->postMediaCacheStoreConfig3($server_name, $store_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamemediacacheApi->postMediaCacheStoreConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **store_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\MediaCacheStoreConfig3**](../Model/MediaCacheStoreConfig3.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMediaCacheStoresConfig3**
> postMediaCacheStoresConfig3($server_name, $body)

Adds the specified MediaCache Store to the list

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$body = new \Swagger\Client\Model\MediaCacheStoreConfig(); // \Swagger\Client\Model\MediaCacheStoreConfig | 

try {
    $apiInstance->postMediaCacheStoresConfig3($server_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamemediacacheApi->postMediaCacheStoresConfig3: ', $e->getMessage(), PHP_EOL;
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

# **putMediaCacheConfig3**
> putMediaCacheConfig3($server_name, $body)

Updates the server MediaCache configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$body = new \Swagger\Client\Model\MediaCacheConfig3(); // \Swagger\Client\Model\MediaCacheConfig3 | 

try {
    $apiInstance->putMediaCacheConfig3($server_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamemediacacheApi->putMediaCacheConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **body** | [**\Swagger\Client\Model\MediaCacheConfig3**](../Model/MediaCacheConfig3.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMediaCacheSourceConfig3**
> putMediaCacheSourceConfig3($server_name, $source_name, $body)

Updates the specified MediaCache Source configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$source_name = "source_name_example"; // string | 
$body = new \Swagger\Client\Model\MediaCacheSourceConfig3(); // \Swagger\Client\Model\MediaCacheSourceConfig3 | 

try {
    $apiInstance->putMediaCacheSourceConfig3($server_name, $source_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamemediacacheApi->putMediaCacheSourceConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **source_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\MediaCacheSourceConfig3**](../Model/MediaCacheSourceConfig3.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMediaCacheSourceConfigAdv3**
> putMediaCacheSourceConfigAdv3($server_name, $source_name, $body)

Updates the specified advanced MediaCache Source configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$source_name = "source_name_example"; // string | 
$body = new \Swagger\Client\Model\MediaCacheSourceConfigAdv3(); // \Swagger\Client\Model\MediaCacheSourceConfigAdv3 | 

try {
    $apiInstance->putMediaCacheSourceConfigAdv3($server_name, $source_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamemediacacheApi->putMediaCacheSourceConfigAdv3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **source_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\MediaCacheSourceConfigAdv3**](../Model/MediaCacheSourceConfigAdv3.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMediaCacheStoreConfig3**
> putMediaCacheStoreConfig3($server_name, $store_name, $body)

Updates the specified MediaCache Store configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamemediacacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$store_name = "store_name_example"; // string | 
$body = new \Swagger\Client\Model\MediaCacheStoreConfig3(); // \Swagger\Client\Model\MediaCacheStoreConfig3 | 

try {
    $apiInstance->putMediaCacheStoreConfig3($server_name, $store_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamemediacacheApi->putMediaCacheStoreConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **store_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\MediaCacheStoreConfig3**](../Model/MediaCacheStoreConfig3.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

