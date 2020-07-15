# Swagger\Client\V2serversserverNametranscoderApi

All URIs are relative to *http://10.0.1.56:8087*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTranscoderConfig**](V2serversserverNametranscoderApi.md#getTranscoderConfig) | **GET** /v2/servers/{serverName}/transcoder | Retrieves the Transcoder information


# **getTranscoderConfig**
> \Swagger\Client\Model\TranscoderConfig getTranscoderConfig($server_name)

Retrieves the Transcoder information

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNametranscoderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getTranscoderConfig($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNametranscoderApi->getTranscoderConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\TranscoderConfig**](../Model/TranscoderConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

