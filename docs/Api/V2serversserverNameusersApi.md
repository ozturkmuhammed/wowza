# Swagger\Client\V2serversserverNameusersApi

All URIs are relative to *http://10.0.1.56:8087*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUserConfig**](V2serversserverNameusersApi.md#deleteUserConfig) | **DELETE** /v2/servers/{serverName}/users/{userName} | Deletes the specified User configuration
[**getUserConfig**](V2serversserverNameusersApi.md#getUserConfig) | **GET** /v2/servers/{serverName}/users/{userName} | Retrieves the specified User configuration
[**getUsersConfig**](V2serversserverNameusersApi.md#getUsersConfig) | **GET** /v2/servers/{serverName}/users | Retrieves the list of server Users
[**postUserConfig**](V2serversserverNameusersApi.md#postUserConfig) | **POST** /v2/servers/{serverName}/users/{userName} | Adds the specified User configuration
[**postUsersConfig**](V2serversserverNameusersApi.md#postUsersConfig) | **POST** /v2/servers/{serverName}/users | Adds a new server User to the list
[**putUserConfig**](V2serversserverNameusersApi.md#putUserConfig) | **PUT** /v2/servers/{serverName}/users/{userName} | Updates the specified User configuration


# **deleteUserConfig**
> deleteUserConfig($server_name, $user_name)

Deletes the specified User configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNameusersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$user_name = "user_name_example"; // string | The user name

try {
    $apiInstance->deleteUserConfig($server_name, $user_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNameusersApi->deleteUserConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **user_name** | **string**| The user name |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserConfig**
> \Swagger\Client\Model\UserConfig getUserConfig($server_name, $user_name)

Retrieves the specified User configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNameusersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$user_name = "user_name_example"; // string | The user name

try {
    $result = $apiInstance->getUserConfig($server_name, $user_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNameusersApi->getUserConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **user_name** | **string**| The user name |

### Return type

[**\Swagger\Client\Model\UserConfig**](../Model/UserConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersConfig**
> \Swagger\Client\Model\UsersConfig getUsersConfig($server_name)

Retrieves the list of server Users

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNameusersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getUsersConfig($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNameusersApi->getUsersConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\UsersConfig**](../Model/UsersConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserConfig**
> postUserConfig($server_name, $user_name, $body)

Adds the specified User configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNameusersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$user_name = "user_name_example"; // string | The user name
$body = new \Swagger\Client\Model\UserConfig(); // \Swagger\Client\Model\UserConfig | 

try {
    $apiInstance->postUserConfig($server_name, $user_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNameusersApi->postUserConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **user_name** | **string**| The user name |
 **body** | [**\Swagger\Client\Model\UserConfig**](../Model/UserConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUsersConfig**
> postUsersConfig($server_name, $body)

Adds a new server User to the list

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNameusersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$body = new \Swagger\Client\Model\UserConfig(); // \Swagger\Client\Model\UserConfig | 

try {
    $apiInstance->postUsersConfig($server_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNameusersApi->postUsersConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **body** | [**\Swagger\Client\Model\UserConfig**](../Model/UserConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUserConfig**
> putUserConfig($server_name, $user_name, $body)

Updates the specified User configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNameusersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$user_name = "user_name_example"; // string | The user name
$body = new \Swagger\Client\Model\UserConfig(); // \Swagger\Client\Model\UserConfig | 

try {
    $apiInstance->putUserConfig($server_name, $user_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNameusersApi->putUserConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **user_name** | **string**| The user name |
 **body** | [**\Swagger\Client\Model\UserConfig**](../Model/UserConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

