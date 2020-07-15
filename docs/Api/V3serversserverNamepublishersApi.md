# Swagger\Client\V3serversserverNamepublishersApi

All URIs are relative to *http://10.0.1.56:8087*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePublisherConfig3**](V3serversserverNamepublishersApi.md#deletePublisherConfig3) | **DELETE** /v3/servers/{serverName}/publishers/{publisher} | Deletes the specified Publisher configuration
[**getPublisherConfig3**](V3serversserverNamepublishersApi.md#getPublisherConfig3) | **GET** /v3/servers/{serverName}/publishers/{publisher} | Retrieves the specified Publisher configuration
[**getPublishersConfig3**](V3serversserverNamepublishersApi.md#getPublishersConfig3) | **GET** /v3/servers/{serverName}/publishers | Retrieves the list of server Publishers
[**postPublisherConfig3**](V3serversserverNamepublishersApi.md#postPublisherConfig3) | **POST** /v3/servers/{serverName}/publishers/{publisher} | Adds the specified Publisher configuration
[**postPublishersConfig3**](V3serversserverNamepublishersApi.md#postPublishersConfig3) | **POST** /v3/servers/{serverName}/publishers | Adds a new Publisher to the list
[**putPublisherConfig3**](V3serversserverNamepublishersApi.md#putPublisherConfig3) | **PUT** /v3/servers/{serverName}/publishers/{publisher} | 


# **deletePublisherConfig3**
> deletePublisherConfig3($server_name, $publisher)

Deletes the specified Publisher configuration

This API is available in builds 20064 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamepublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$publisher = "publisher_example"; // string | 

try {
    $apiInstance->deletePublisherConfig3($server_name, $publisher);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamepublishersApi->deletePublisherConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **publisher** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublisherConfig3**
> \Swagger\Client\Model\PublisherConfig3 getPublisherConfig3($server_name, $publisher)

Retrieves the specified Publisher configuration

This API is available in builds 20064 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamepublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$publisher = "publisher_example"; // string | 

try {
    $result = $apiInstance->getPublisherConfig3($server_name, $publisher);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamepublishersApi->getPublisherConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **publisher** | **string**|  |

### Return type

[**\Swagger\Client\Model\PublisherConfig3**](../Model/PublisherConfig3.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublishersConfig3**
> \Swagger\Client\Model\PublishersConfig3 getPublishersConfig3($server_name)

Retrieves the list of server Publishers

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamepublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getPublishersConfig3($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamepublishersApi->getPublishersConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\PublishersConfig3**](../Model/PublishersConfig3.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPublisherConfig3**
> postPublisherConfig3($server_name, $publisher, $body)

Adds the specified Publisher configuration

This API is available in builds 20064 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamepublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$publisher = "publisher_example"; // string | 
$body = new \Swagger\Client\Model\PublisherConfig3(); // \Swagger\Client\Model\PublisherConfig3 | 

try {
    $apiInstance->postPublisherConfig3($server_name, $publisher, $body);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamepublishersApi->postPublisherConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **publisher** | **string**|  |
 **body** | [**\Swagger\Client\Model\PublisherConfig3**](../Model/PublisherConfig3.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPublishersConfig3**
> postPublishersConfig3($server_name, $body)

Adds a new Publisher to the list

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamepublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$body = new \Swagger\Client\Model\PublisherConfig(); // \Swagger\Client\Model\PublisherConfig | 

try {
    $apiInstance->postPublishersConfig3($server_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamepublishersApi->postPublishersConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **body** | [**\Swagger\Client\Model\PublisherConfig**](../Model/PublisherConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPublisherConfig3**
> putPublisherConfig3($server_name, $publisher, $body)



This API is available in builds 20064 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V3serversserverNamepublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$publisher = "publisher_example"; // string | 
$body = new \Swagger\Client\Model\PublisherConfig3(); // \Swagger\Client\Model\PublisherConfig3 | 

try {
    $apiInstance->putPublisherConfig3($server_name, $publisher, $body);
} catch (Exception $e) {
    echo 'Exception when calling V3serversserverNamepublishersApi->putPublisherConfig3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **publisher** | **string**|  |
 **body** | [**\Swagger\Client\Model\PublisherConfig3**](../Model/PublisherConfig3.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

