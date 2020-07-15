# Swagger\Client\V2machinemonitoringhistoricApi

All URIs are relative to *http://10.0.1.56:8087*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHistoricMachineStatistics**](V2machinemonitoringhistoricApi.md#getHistoricMachineStatistics) | **GET** /v2/machine/monitoring/historic | Retrieves historic statictics for the machine


# **getHistoricMachineStatistics**
> \Swagger\Client\Model\HistoricMachineStatistics getHistoricMachineStatistics()

Retrieves historic statictics for the machine

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2machinemonitoringhistoricApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getHistoricMachineStatistics();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2machinemonitoringhistoricApi->getHistoricMachineStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\HistoricMachineStatistics**](../Model/HistoricMachineStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

