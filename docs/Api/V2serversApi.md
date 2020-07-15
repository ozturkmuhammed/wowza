# Swagger\Client\V2serversApi

All URIs are relative to *http://10.0.1.56:8087*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getServerConfig**](V2serversApi.md#getServerConfig) | **GET** /v2/servers/{serverName} | Retrieves the Server configuration
[**getServerConfigAdv**](V2serversApi.md#getServerConfigAdv) | **GET** /v2/servers/{serverName}/adv | Retrieves the advanced Server configuration
[**getServerLogFileConfig**](V2serversApi.md#getServerLogFileConfig) | **GET** /v2/servers/{serverName}/logfiles/{logName} | Retrieves the contents of a Server Log with the specified log name
[**getServerLogFileDownloadConfig**](V2serversApi.md#getServerLogFileDownloadConfig) | **GET** /v2/servers/{serverName}/logfiles/{logName}/download | Retrieves the Server Log file for the specified log name, zipped
[**getServerLogFilesConfig**](V2serversApi.md#getServerLogFilesConfig) | **GET** /v2/servers/{serverName}/logfiles | Retrieves the list of server log files
[**getServerLogTypesConfig**](V2serversApi.md#getServerLogTypesConfig) | **GET** /v2/servers/{serverName}/logs | Retrieves the list of available server Log Types
[**getServerLogsConfig**](V2serversApi.md#getServerLogsConfig) | **GET** /v2/servers/{serverName}/logs/{logType} | Retrieves the contents of multiple Server Logs with the specified type in the log name
[**getServersConfig**](V2serversApi.md#getServersConfig) | **GET** /v2/servers | Retrieves the list of Servers
[**getSourceDriverNamesList**](V2serversApi.md#getSourceDriverNamesList) | **GET** /v2/servers/{serverName}/sourcecontrol/drivernames | Get the list of source control drivers
[**putServerAction**](V2serversApi.md#putServerAction) | **PUT** /v2/servers/{serverName}/actions/{action} | Tells the Server to perform an action
[**putServerConfig**](V2serversApi.md#putServerConfig) | **PUT** /v2/servers/{serverName} | Updates the Server configuration
[**putServerConfigAdv**](V2serversApi.md#putServerConfigAdv) | **PUT** /v2/servers/{serverName}/adv | Updates the advanced Server configuration


# **getServerConfig**
> \Swagger\Client\Model\ServerConfig getServerConfig($server_name)

Retrieves the Server configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getServerConfig($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversApi->getServerConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\ServerConfig**](../Model/ServerConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServerConfigAdv**
> \Swagger\Client\Model\ServerConfigAdv getServerConfigAdv($server_name)

Retrieves the advanced Server configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getServerConfigAdv($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversApi->getServerConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\ServerConfigAdv**](../Model/ServerConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServerLogFileConfig**
> \Swagger\Client\Model\ServerLogFileConfig getServerLogFileConfig($server_name, $log_name, $line_count, $start_offset, $filter, $search, $regex_search, $head, $tail)

Retrieves the contents of a Server Log with the specified log name

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$log_name = "log_name_example"; // string | The name of the log
$line_count = "100"; // string | The number of log lines requested, where a postive number indicates log lines after startOffset and a negative number indicate log lines before startOffset
$start_offset = "start_offset_example"; // string | The byte offset in the file at which to begin getting log lines
$filter = "filter_example"; // string | A string containing a list of predefined search filters separated by | where valid strings are noDebug,noInfo,noWarn,noError,noHeader,noColumnHeadings
$search = "search_example"; // string | A string containing a literal string on which to filter or a regex
$regex_search = "false"; // string | Indicates if the 'search' parameter is a regex or a literal string
$head = "head_example"; // string | Returns the first x lines from the requested log file, the overrides the startoffset and linecount values
$tail = "tail_example"; // string | Returns the last x lines from the requested log file, the overrides the startoffset and linecount values

try {
    $result = $apiInstance->getServerLogFileConfig($server_name, $log_name, $line_count, $start_offset, $filter, $search, $regex_search, $head, $tail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversApi->getServerLogFileConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **log_name** | **string**| The name of the log |
 **line_count** | **string**| The number of log lines requested, where a postive number indicates log lines after startOffset and a negative number indicate log lines before startOffset | [optional] [default to 100]
 **start_offset** | **string**| The byte offset in the file at which to begin getting log lines | [optional]
 **filter** | **string**| A string containing a list of predefined search filters separated by | where valid strings are noDebug,noInfo,noWarn,noError,noHeader,noColumnHeadings | [optional]
 **search** | **string**| A string containing a literal string on which to filter or a regex | [optional]
 **regex_search** | **string**| Indicates if the &#39;search&#39; parameter is a regex or a literal string | [optional] [default to false]
 **head** | **string**| Returns the first x lines from the requested log file, the overrides the startoffset and linecount values | [optional]
 **tail** | **string**| Returns the last x lines from the requested log file, the overrides the startoffset and linecount values | [optional]

### Return type

[**\Swagger\Client\Model\ServerLogFileConfig**](../Model/ServerLogFileConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServerLogFileDownloadConfig**
> \Swagger\Client\Model\ServerLogFileDownloadConfig getServerLogFileDownloadConfig($server_name, $log_name)

Retrieves the Server Log file for the specified log name, zipped

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$log_name = "log_name_example"; // string | The name of the log

try {
    $result = $apiInstance->getServerLogFileDownloadConfig($server_name, $log_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversApi->getServerLogFileDownloadConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **log_name** | **string**| The name of the log |

### Return type

[**\Swagger\Client\Model\ServerLogFileDownloadConfig**](../Model/ServerLogFileDownloadConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServerLogFilesConfig**
> \Swagger\Client\Model\ServerLogFilesConfig getServerLogFilesConfig($server_name, $order)

Retrieves the list of server log files

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$order = "newestFirst"; // string | The order of files in serverLogs list

try {
    $result = $apiInstance->getServerLogFilesConfig($server_name, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversApi->getServerLogFilesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **order** | **string**| The order of files in serverLogs list | [optional] [default to newestFirst]

### Return type

[**\Swagger\Client\Model\ServerLogFilesConfig**](../Model/ServerLogFilesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServerLogTypesConfig**
> \Swagger\Client\Model\ServerLogTypesConfig getServerLogTypesConfig($server_name)

Retrieves the list of available server Log Types

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getServerLogTypesConfig($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversApi->getServerLogTypesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\ServerLogTypesConfig**](../Model/ServerLogTypesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServerLogsConfig**
> \Swagger\Client\Model\ServerLogsConfig getServerLogsConfig($server_name, $log_type, $line_count, $start_offset, $filter, $search, $regex_search, $head, $tail, $start_date, $end_date)

Retrieves the contents of multiple Server Logs with the specified type in the log name

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$log_type = "log_type_example"; // string | The type of the log
$line_count = "100"; // string | The number of log lines requested, where a postive number indicates log lines after startOffset and a negative number indicate log lines before startOffset
$start_offset = "start_offset_example"; // string | The byte offset in the file at which to begin getting log lines
$filter = "filter_example"; // string | A string containing a list of predefined search filters separated by | where valid strings are noDebug,noInfo,noWarn,noError,noHeader,noColumnHeadings
$search = "search_example"; // string | A string containing a literal string on which to filter or a regex
$regex_search = "false"; // string | Indicates if the 'search' parameter is a regex or a literal string
$head = "head_example"; // string | Returns the first x lines from the requested log file, the overrides the startoffset and linecount values
$tail = "tail_example"; // string | Returns the last x lines from the requested log file, the overrides the startoffset and linecount values
$start_date = "start_date_example"; // string | The start date to filter on (UTC milliseconds)
$end_date = "end_date_example"; // string | The end date to filter on (UTC milliseconds)

try {
    $result = $apiInstance->getServerLogsConfig($server_name, $log_type, $line_count, $start_offset, $filter, $search, $regex_search, $head, $tail, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversApi->getServerLogsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **log_type** | **string**| The type of the log |
 **line_count** | **string**| The number of log lines requested, where a postive number indicates log lines after startOffset and a negative number indicate log lines before startOffset | [optional] [default to 100]
 **start_offset** | **string**| The byte offset in the file at which to begin getting log lines | [optional]
 **filter** | **string**| A string containing a list of predefined search filters separated by | where valid strings are noDebug,noInfo,noWarn,noError,noHeader,noColumnHeadings | [optional]
 **search** | **string**| A string containing a literal string on which to filter or a regex | [optional]
 **regex_search** | **string**| Indicates if the &#39;search&#39; parameter is a regex or a literal string | [optional] [default to false]
 **head** | **string**| Returns the first x lines from the requested log file, the overrides the startoffset and linecount values | [optional]
 **tail** | **string**| Returns the last x lines from the requested log file, the overrides the startoffset and linecount values | [optional]
 **start_date** | **string**| The start date to filter on (UTC milliseconds) | [optional]
 **end_date** | **string**| The end date to filter on (UTC milliseconds) | [optional]

### Return type

[**\Swagger\Client\Model\ServerLogsConfig**](../Model/ServerLogsConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServersConfig**
> \Swagger\Client\Model\ServersConfig getServersConfig()

Retrieves the list of Servers

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getServersConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversApi->getServersConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ServersConfig**](../Model/ServersConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSourceDriverNamesList**
> \Swagger\Client\Model\SourceDriverNamesList getSourceDriverNamesList($server_name)

Get the list of source control drivers

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getSourceDriverNamesList($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversApi->getSourceDriverNamesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\SourceDriverNamesList**](../Model/SourceDriverNamesList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putServerAction**
> putServerAction($server_name, $action, $filename)

Tells the Server to perform an action

This API is available in builds 18647 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$filename = "filename_example"; // string | The file location to use when creating a heap dump or stack trace. By default the installation location and file are named appropriately for a heap dump or stack trace

try {
    $apiInstance->putServerAction($server_name, $action, $filename);
} catch (Exception $e) {
    echo 'Exception when calling V2serversApi->putServerAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **filename** | **string**| The file location to use when creating a heap dump or stack trace. By default the installation location and file are named appropriately for a heap dump or stack trace | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putServerConfig**
> putServerConfig($server_name, $body)

Updates the Server configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$body = new \Swagger\Client\Model\ServerConfig(); // \Swagger\Client\Model\ServerConfig | 

try {
    $apiInstance->putServerConfig($server_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversApi->putServerConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **body** | [**\Swagger\Client\Model\ServerConfig**](../Model/ServerConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putServerConfigAdv**
> putServerConfigAdv($server_name, $body)

Updates the advanced Server configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$body = new \Swagger\Client\Model\ServerConfigAdv(); // \Swagger\Client\Model\ServerConfigAdv | 

try {
    $apiInstance->putServerConfigAdv($server_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversApi->putServerConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **body** | [**\Swagger\Client\Model\ServerConfigAdv**](../Model/ServerConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

