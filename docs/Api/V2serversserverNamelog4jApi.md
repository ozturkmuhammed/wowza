# Swagger\Client\V2serversserverNamelog4jApi

All URIs are relative to *http://10.0.1.56:8087*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLog4js**](V2serversserverNamelog4jApi.md#getLog4js) | **GET** /v2/servers/{serverName}/log4j | Retrieves the Server log4j configuration
[**putLog4jAction**](V2serversserverNamelog4jApi.md#putLog4jAction) | **PUT** /v2/servers/{serverName}/log4j/{loggerName}/actions/{action} | Tells the specified log4j logger to perform an action
[**putLog4jsAction**](V2serversserverNamelog4jApi.md#putLog4jsAction) | **PUT** /v2/servers/{serverName}/log4j/actions/{action} | Tells the log4j system to perform an action


# **getLog4js**
> \Swagger\Client\Model\Log4js getLog4js($server_name)

Retrieves the Server log4j configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamelog4jApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getLog4js($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamelog4jApi->getLog4js: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\Log4js**](../Model/Log4js.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putLog4jAction**
> putLog4jAction($server_name, $action, $logger_name)

Tells the specified log4j logger to perform an action

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamelog4jApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$logger_name = "logger_name_example"; // string | The logger name needed for this REST call

try {
    $apiInstance->putLog4jAction($server_name, $action, $logger_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamelog4jApi->putLog4jAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **logger_name** | **string**| The logger name needed for this REST call |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putLog4jsAction**
> putLog4jsAction($server_name, $action)

Tells the log4j system to perform an action

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamelog4jApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server

try {
    $apiInstance->putLog4jsAction($server_name, $action);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamelog4jApi->putLog4jsAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

