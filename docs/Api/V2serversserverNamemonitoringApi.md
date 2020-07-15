# Swagger\Client\V2serversserverNamemonitoringApi

All URIs are relative to *http://10.0.1.56:8087*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHistoricServerStatistics**](V2serversserverNamemonitoringApi.md#getHistoricServerStatistics) | **GET** /v2/servers/{serverName}/monitoring/historic | Retrieves the server historical statictics
[**getMonitoringConfig**](V2serversserverNamemonitoringApi.md#getMonitoringConfig) | **GET** /v2/servers/{serverName}/monitoring | Retrieves the server monitoring configuration
[**putMonitoringConfig**](V2serversserverNamemonitoringApi.md#putMonitoringConfig) | **PUT** /v2/servers/{serverName}/monitoring | Updates the server monitoring configuration


# **getHistoricServerStatistics**
> \Swagger\Client\Model\HistoricServerStatistics getHistoricServerStatistics($server_name)

Retrieves the server historical statictics

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getHistoricServerStatistics($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemonitoringApi->getHistoricServerStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\HistoricServerStatistics**](../Model/HistoricServerStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMonitoringConfig**
> \Swagger\Client\Model\MonitoringConfig getMonitoringConfig($server_name)

Retrieves the server monitoring configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getMonitoringConfig($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemonitoringApi->getMonitoringConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\MonitoringConfig**](../Model/MonitoringConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMonitoringConfig**
> putMonitoringConfig($server_name, $body)

Updates the server monitoring configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamemonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$body = new \Swagger\Client\Model\MonitoringConfig(); // \Swagger\Client\Model\MonitoringConfig | 

try {
    $apiInstance->putMonitoringConfig($server_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamemonitoringApi->putMonitoringConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **body** | [**\Swagger\Client\Model\MonitoringConfig**](../Model/MonitoringConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

