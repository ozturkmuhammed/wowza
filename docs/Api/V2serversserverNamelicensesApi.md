# Swagger\Client\V2serversserverNamelicensesApi

All URIs are relative to *http://10.0.1.56:8087*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getServerLicensesConfig**](V2serversserverNamelicensesApi.md#getServerLicensesConfig) | **GET** /v2/servers/{serverName}/licenses | Retrieves the list of server Licenses
[**putServerLicensesConfig**](V2serversserverNamelicensesApi.md#putServerLicensesConfig) | **PUT** /v2/servers/{serverName}/licenses | Updates the Server License list


# **getServerLicensesConfig**
> \Swagger\Client\Model\ServerLicensesConfig getServerLicensesConfig($server_name)

Retrieves the list of server Licenses

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamelicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getServerLicensesConfig($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamelicensesApi->getServerLicensesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\ServerLicensesConfig**](../Model/ServerLicensesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putServerLicensesConfig**
> putServerLicensesConfig($server_name, $body)

Updates the Server License list

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamelicensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$body = new \Swagger\Client\Model\ServerLicensesConfig(); // \Swagger\Client\Model\ServerLicensesConfig | 

try {
    $apiInstance->putServerLicensesConfig($server_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamelicensesApi->putServerLicensesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **body** | [**\Swagger\Client\Model\ServerLicensesConfig**](../Model/ServerLicensesConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

