# Swagger\Client\V2machinemonitoringcurrentApi

All URIs are relative to *http://10.0.1.56:8087*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCurrentMachineStatistics**](V2machinemonitoringcurrentApi.md#getCurrentMachineStatistics) | **GET** /v2/machine/monitoring/current | Retrieves current statictics for the machine


# **getCurrentMachineStatistics**
> \Swagger\Client\Model\CurrentMachineStatistics getCurrentMachineStatistics()

Retrieves current statictics for the machine

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2machinemonitoringcurrentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCurrentMachineStatistics();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2machinemonitoringcurrentApi->getCurrentMachineStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CurrentMachineStatistics**](../Model/CurrentMachineStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

