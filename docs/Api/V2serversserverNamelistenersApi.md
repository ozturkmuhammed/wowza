# Swagger\Client\V2serversserverNamelistenersApi

All URIs are relative to *http://10.0.1.56:8087*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getServerListenersConfig**](V2serversserverNamelistenersApi.md#getServerListenersConfig) | **GET** /v2/servers/{serverName}/listeners | Retrieves the list of server Listeners
[**putServerListenersConfig**](V2serversserverNamelistenersApi.md#putServerListenersConfig) | **PUT** /v2/servers/{serverName}/listeners | Updates the server Listeners list


# **getServerListenersConfig**
> \Swagger\Client\Model\ServerListenersConfig getServerListenersConfig($server_name)

Retrieves the list of server Listeners

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamelistenersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getServerListenersConfig($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamelistenersApi->getServerListenersConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\ServerListenersConfig**](../Model/ServerListenersConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putServerListenersConfig**
> putServerListenersConfig($server_name, $body)

Updates the server Listeners list

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamelistenersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$body = new \Swagger\Client\Model\ServerListenersConfig(); // \Swagger\Client\Model\ServerListenersConfig | 

try {
    $apiInstance->putServerListenersConfig($server_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamelistenersApi->putServerListenersConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **body** | [**\Swagger\Client\Model\ServerListenersConfig**](../Model/ServerListenersConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

