# Swagger\Client\V2serversserverNamemediacastersApi

All URIs are relative to *http://10.0.1.56:8087*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMediaCasterConfig**](V2serversserverNamemediacastersApi.md#getMediaCasterConfig) | **GET** /v2/servers/{serverName}/mediacasters/{mediacastername} | Retrieves the specified MediaCaster configuration
[**getMediaCastersConfig**](V2serversserverNamemediacastersApi.md#getMediaCastersConfig) | **GET** /v2/servers/{serverName}/mediacasters | Retrieves the list of MediaCasters


# **getMediaCasterConfig**
> \Swagger\Client\Model\MediaCasterConfig getMediaCasterConfig($server_name, $mediacastername)

Retrieves the specified MediaCaster configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacastersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$mediacastername = "mediacastername_example"; // string | 

try {
    $result = $apiInstance->getMediaCasterConfig($server_name, $mediacastername);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacastersApi->getMediaCasterConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **mediacastername** | **string**|  |

### Return type

[**\Swagger\Client\Model\MediaCasterConfig**](../Model/MediaCasterConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaCastersConfig**
> \Swagger\Client\Model\MediaCastersConfig getMediaCastersConfig($server_name)

Retrieves the list of MediaCasters

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemediacastersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getMediaCastersConfig($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemediacastersApi->getMediaCastersConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\MediaCastersConfig**](../Model/MediaCastersConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

