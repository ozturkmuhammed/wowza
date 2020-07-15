# Swagger\Client\V2serversserverNametuneApi

All URIs are relative to *http://10.0.1.56:8087*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getServerTuneConfig**](V2serversserverNametuneApi.md#getServerTuneConfig) | **GET** /v2/servers/{serverName}/tune | Retrieves the server Tuning configuration
[**putServerTuneConfig**](V2serversserverNametuneApi.md#putServerTuneConfig) | **PUT** /v2/servers/{serverName}/tune | Updates the server Tuning configuration


# **getServerTuneConfig**
> \Swagger\Client\Model\ServerTuneConfig getServerTuneConfig($server_name)

Retrieves the server Tuning configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNametuneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getServerTuneConfig($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNametuneApi->getServerTuneConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\ServerTuneConfig**](../Model/ServerTuneConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putServerTuneConfig**
> putServerTuneConfig($server_name, $body)

Updates the server Tuning configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNametuneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$body = new \Swagger\Client\Model\ServerTuneConfig(); // \Swagger\Client\Model\ServerTuneConfig | 

try {
    $apiInstance->putServerTuneConfig($server_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNametuneApi->putServerTuneConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **body** | [**\Swagger\Client\Model\ServerTuneConfig**](../Model/ServerTuneConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

