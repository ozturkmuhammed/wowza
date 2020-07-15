# Swagger\Client\V2serversserverNamevhostsApi

All URIs are relative to *http://10.0.1.56:8087*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePublisherVhostConfig**](V2serversserverNamevhostsApi.md#deletePublisherVhostConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/publishers/{publisherName} | Deletes the specified Publisher configuration
[**deleteSDPFileConfig**](V2serversserverNamevhostsApi.md#deleteSDPFileConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/sdpfiles/{sdpfileName} | Deletes the specified SDP file
[**deleteSMILFileConfig**](V2serversserverNamevhostsApi.md#deleteSMILFileConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles/{smilfileName} | Deletes the specified SMIL File configuration
[**deleteStartupStreamConfig**](V2serversserverNamevhostsApi.md#deleteStartupStreamConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/startupstreams/applications/{appName}/instances/{instanceName}/streams/{streamName} | Deletes the specified Startup Stream configuration
[**deleteStreamFileConfig**](V2serversserverNamevhostsApi.md#deleteStreamFileConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName} | Deletes the specified Stream File configuration
[**deleteTranscoderEncodeConfig**](V2serversserverNamevhostsApi.md#deleteTranscoderEncodeConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName} | Deletes the specified Trancoder Encode configuration
[**deleteTranscoderOverlayDecodeConfig**](V2serversserverNamevhostsApi.md#deleteTranscoderOverlayDecodeConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/decode/overlays/{overlayName} | Deletes the specified Trancoder Overlay Decode configuration
[**deleteTranscoderOverlayEncodeConfig**](V2serversserverNamevhostsApi.md#deleteTranscoderOverlayEncodeConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName}/overlays/{overlayName} | Deletes the specified Trancoder Overlay Encode configuration
[**deleteTranscoderStreamNameGroupConfig**](V2serversserverNamevhostsApi.md#deleteTranscoderStreamNameGroupConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/streamnamegroups/{groupName} | Deletes the specified Trancoder StreamNameGroup configuration
[**deleteTranscoderTemplateConfig**](V2serversserverNamevhostsApi.md#deleteTranscoderTemplateConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName} | Deletes the specified Trancoder Template configuration
[**getCurrentVHostStatistics**](V2serversserverNamevhostsApi.md#getCurrentVHostStatistics) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/monitoring/current | Retrieves the current VHost statistics
[**getHistoricVHostStatistics**](V2serversserverNamevhostsApi.md#getHistoricVHostStatistics) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/monitoring/historic | Retrieves the historic VHost statistics
[**getHostPortConfig**](V2serversserverNamevhostsApi.md#getHostPortConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/hostports/{portname} | Retrieves the HostPort for the specifed vhost and port
[**getHostPortConfigAdv**](V2serversserverNamevhostsApi.md#getHostPortConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/hostports/{portname}/adv | Retrieves the advanced HostPort configuration for the specified vhost and port
[**getHostPortsConfig**](V2serversserverNamevhostsApi.md#getHostPortsConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/hostports | Retrieves the list of server HostPorts for the specified vhost
[**getHostportsTuneConfig**](V2serversserverNamevhostsApi.md#getHostportsTuneConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/tunehostports | Retrieves the host port configuration used for server tuning for the specified vhost
[**getMediaCacheStoreList**](V2serversserverNamevhostsApi.md#getMediaCacheStoreList) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/mediacache/stores | Retrieves all entries in the MediaCache system
[**getPublisherVhostConfig**](V2serversserverNamevhostsApi.md#getPublisherVhostConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/publishers/{publisherName} | Retrieves the specified Publisher configuration
[**getPublishersVhostConfig**](V2serversserverNamevhostsApi.md#getPublishersVhostConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/publishers | Retrieves the list of Publishers for the specified VHost
[**getSDPFilesConfig**](V2serversserverNamevhostsApi.md#getSDPFilesConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/sdpfiles | Retrieves the list of SDP Files for the specified VHost
[**getSMILFileConfig**](V2serversserverNamevhostsApi.md#getSMILFileConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles/{smilfileName} | Retrieves the specified SMIL File configuration
[**getSMILFilesConfig**](V2serversserverNamevhostsApi.md#getSMILFilesConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles | Retrieves the list of SMIL Files for the specified VHost
[**getSSLConfig**](V2serversserverNamevhostsApi.md#getSSLConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/hostports/{portname}/ssl | Retrieves the SSL configuration for the specified vhost and port
[**getStartupStreamConfig**](V2serversserverNamevhostsApi.md#getStartupStreamConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/startupstreams/applications/{appName}/instances/{instanceName}/streams/{streamName} | Retrieves the specified Startup Stream configuration
[**getStartupStreamsConfig**](V2serversserverNamevhostsApi.md#getStartupStreamsConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/startupstreams | Retrieves the list of Startup Streams for the specified VHost
[**getStreamFileConfig**](V2serversserverNamevhostsApi.md#getStreamFileConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName} | Retrieves the specified Stream File configuration
[**getStreamFileConfigAdv**](V2serversserverNamevhostsApi.md#getStreamFileConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName}/adv | Retrieves the Advanced Stream File configuration
[**getStreamFilesConfig**](V2serversserverNamevhostsApi.md#getStreamFilesConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles | Retrieves the list of Stream Files for the specified VHost
[**getTranscoderConfig**](V2serversserverNamevhostsApi.md#getTranscoderConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder | Retrieves the Transcoder configuration for the specified VHost
[**getTranscoderEncodeConfig**](V2serversserverNamevhostsApi.md#getTranscoderEncodeConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName} | Retrieves the specified Trancoder Encode configuration
[**getTranscoderEncodeConfigAdv**](V2serversserverNamevhostsApi.md#getTranscoderEncodeConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName}/adv | Retrieves the Advanced Transcoder Encode configuration
[**getTranscoderEncodesConfig**](V2serversserverNamevhostsApi.md#getTranscoderEncodesConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes | Retrieves the list of Transcoder Encode Configurations for the specified VHost
[**getTranscoderOverlayDecodeConfig**](V2serversserverNamevhostsApi.md#getTranscoderOverlayDecodeConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/decode/overlays/{overlayName} | Retrieves the specified Trancoder Overlay Decode configuration
[**getTranscoderOverlayEncodeConfig**](V2serversserverNamevhostsApi.md#getTranscoderOverlayEncodeConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName}/overlays/{overlayName} | Retrieves the specified Trancoder Overlay Encode configuration
[**getTranscoderStreamNameGroupConfig**](V2serversserverNamevhostsApi.md#getTranscoderStreamNameGroupConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/streamnamegroups/{groupName} | Retrieves the specified Trancoder StreamNameGroup configuration
[**getTranscoderStreamNameGroupsConfig**](V2serversserverNamevhostsApi.md#getTranscoderStreamNameGroupsConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/streamnamegroups | Retrieves the list of Transcoder Stream Name Groups for the specified Template
[**getTranscoderTemplateConfig**](V2serversserverNamevhostsApi.md#getTranscoderTemplateConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName} | Retrieves the specified Trancoder Template configuration
[**getTranscoderTemplateConfigAdv**](V2serversserverNamevhostsApi.md#getTranscoderTemplateConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/adv | Retrieves the Advanced Transcoder Template configuration
[**getTranscoderTemplatesConfig**](V2serversserverNamevhostsApi.md#getTranscoderTemplatesConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates | Retrieves the list of Transcoder Template Configurations for the specified VHost
[**getVHostConfig**](V2serversserverNamevhostsApi.md#getVHostConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName} | Retrieves the specified VHost configuration
[**getVHostConfigAdv**](V2serversserverNamevhostsApi.md#getVHostConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/adv | Retrieves the specified advanced VHost configuration
[**getVHostTuneConfig**](V2serversserverNamevhostsApi.md#getVHostTuneConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/tune | Retrieves the Tuning configuration for the specifed vhost
[**getVHostsConfig**](V2serversserverNamevhostsApi.md#getVHostsConfig) | **GET** /v2/servers/{serverName}/vhosts | Retrieves the list of VHosts
[**postPublisherVhostConfig**](V2serversserverNamevhostsApi.md#postPublisherVhostConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/publishers/{publisherName} | Adds the specified Publisher configuration
[**postPublishersVhostConfig**](V2serversserverNamevhostsApi.md#postPublishersVhostConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/publishers | Add a Publisher to list of Publishers for the specified VHost
[**postSMILFileConfig**](V2serversserverNamevhostsApi.md#postSMILFileConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles/{smilfileName} | Adds the specified SMIL File configuration
[**postSMILFilesConfig**](V2serversserverNamevhostsApi.md#postSMILFilesConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles | Adds a SMIL File to the list of SMIL Files for the specified VHost
[**postStartupStreamConfig**](V2serversserverNamevhostsApi.md#postStartupStreamConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/startupstreams/applications/{appName}/instances/{instanceName}/streams/{streamName} | Adds the specified Startup Stream configuration
[**postStartupStreamsConfig**](V2serversserverNamevhostsApi.md#postStartupStreamsConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/startupstreams | Adds a Startup Stream to the list of Startup Streams for the specified VHost
[**postStreamFileConfig**](V2serversserverNamevhostsApi.md#postStreamFileConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName} | Adds the specified Stream File configuration
[**postStreamFilesConfig**](V2serversserverNamevhostsApi.md#postStreamFilesConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles | Adds a Stream File to the list of Stream Files for the specified VHost
[**postTranscoderEncodeConfig**](V2serversserverNamevhostsApi.md#postTranscoderEncodeConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName} | Adds the specified Trancoder Encode configuration
[**postTranscoderEncodesConfig**](V2serversserverNamevhostsApi.md#postTranscoderEncodesConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes | Adds a Transcoder Encode Configuration to the specified VHost
[**postTranscoderStreamNameGroupConfig**](V2serversserverNamevhostsApi.md#postTranscoderStreamNameGroupConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/streamnamegroups/{groupName} | Adds the specified Trancoder StreamNameGroup configuration
[**postTranscoderStreamNameGroupsConfig**](V2serversserverNamevhostsApi.md#postTranscoderStreamNameGroupsConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/streamnamegroups | Adds a Transcoder Stream Name Groups Configuration to the specified Template
[**postTranscoderTemplateConfig**](V2serversserverNamevhostsApi.md#postTranscoderTemplateConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName} | Adds the specified Trancoder Template configuration
[**postTranscoderTemplatesConfig**](V2serversserverNamevhostsApi.md#postTranscoderTemplatesConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates | Adds a Transcoder Templates Configuration to the specified VHost
[**putHostPortConfigAdv**](V2serversserverNamevhostsApi.md#putHostPortConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/hostports/{portname}/adv | 
[**putHostportsTuneConfig**](V2serversserverNamevhostsApi.md#putHostportsTuneConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/tunehostports | Updates the host port configuration used for server tuning for the specified vhost
[**putMediaCacheStoreAction**](V2serversserverNamevhostsApi.md#putMediaCacheStoreAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/mediacache/stores/actions/{action} | 
[**putPublisherVhostConfig**](V2serversserverNamevhostsApi.md#putPublisherVhostConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/publishers/{publisherName} | Updates the specified Publisher configuration
[**putSDPFileAction**](V2serversserverNamevhostsApi.md#putSDPFileAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/sdpfiles/{sdpfileName}/actions/{action} | 
[**putSMILFileAction**](V2serversserverNamevhostsApi.md#putSMILFileAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles/{smilfileName}/actions/{action} | 
[**putSMILFileConfig**](V2serversserverNamevhostsApi.md#putSMILFileConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles/{smilfileName} | Updates the specified SMIL File configuration
[**putSSLConfig**](V2serversserverNamevhostsApi.md#putSSLConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/hostports/{portname}/ssl | Updates the SSL configuration for the specified vhost and port
[**putStartupStreamConfig**](V2serversserverNamevhostsApi.md#putStartupStreamConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/startupstreams/applications/{appName}/instances/{instanceName}/streams/{streamName} | Updates the specified Startup Stream configuration
[**putStreamFileAction**](V2serversserverNamevhostsApi.md#putStreamFileAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName}/actions/{action} | 
[**putStreamFileConfig**](V2serversserverNamevhostsApi.md#putStreamFileConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName} | Updates the specified Stream File configuration
[**putStreamFileConfigAdv**](V2serversserverNamevhostsApi.md#putStreamFileConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName}/adv | Updates the Advanced Stream File configuration
[**putTranscoderConfig**](V2serversserverNamevhostsApi.md#putTranscoderConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder | Updates the Transcoder configuration for the specified VHost
[**putTranscoderEncodeConfig**](V2serversserverNamevhostsApi.md#putTranscoderEncodeConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName} | Updates the specified Trancoder Encode configuration
[**putTranscoderEncodeConfigAdv**](V2serversserverNamevhostsApi.md#putTranscoderEncodeConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName}/adv | Updates the Advanced Transcoder Encode configuration
[**putTranscoderOverlayDecodeConfig**](V2serversserverNamevhostsApi.md#putTranscoderOverlayDecodeConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/decode/overlays/{overlayName} | Updates the specified Trancoder Overlay Decode configuration
[**putTranscoderOverlayEncodeConfig**](V2serversserverNamevhostsApi.md#putTranscoderOverlayEncodeConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName}/overlays/{overlayName} | Updates the specified Trancoder Overlay Encode configuration
[**putTranscoderStreamNameGroupConfig**](V2serversserverNamevhostsApi.md#putTranscoderStreamNameGroupConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/streamnamegroups/{groupName} | Updates the specified Trancoder StreamNameGroup configuration
[**putTranscoderTemplateAction**](V2serversserverNamevhostsApi.md#putTranscoderTemplateAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/actions/{action} | 
[**putTranscoderTemplateConfig**](V2serversserverNamevhostsApi.md#putTranscoderTemplateConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName} | Updates the specified Trancoder Template configuration
[**putTranscoderTemplateConfigAdv**](V2serversserverNamevhostsApi.md#putTranscoderTemplateConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/adv | Updates the Advanced Transcoder Template configuration
[**putVHostAction**](V2serversserverNamevhostsApi.md#putVHostAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/actions/{action} | 
[**putVHostConfig**](V2serversserverNamevhostsApi.md#putVHostConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName} | Updates the specified VHost configuration
[**putVHostConfigAdv**](V2serversserverNamevhostsApi.md#putVHostConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/adv | Updates the specified advanced VHost configuration
[**putVHostTuneConfig**](V2serversserverNamevhostsApi.md#putVHostTuneConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/tune | Updates the Tuning configuration for the specifed vhost


# **deletePublisherVhostConfig**
> deletePublisherVhostConfig($server_name, $vhost_name, $publisher_name)

Deletes the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The vhost name
$publisher_name = "publisher_name_example"; // string | The publisher name

try {
    $apiInstance->deletePublisherVhostConfig($server_name, $vhost_name, $publisher_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->deletePublisherVhostConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The vhost name |
 **publisher_name** | **string**| The publisher name |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSDPFileConfig**
> deleteSDPFileConfig($server_name, $vhost_name, $sdpfile_name)

Deletes the specified SDP file

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$sdpfile_name = "sdpfile_name_example"; // string | The SDP file name without the extension

try {
    $apiInstance->deleteSDPFileConfig($server_name, $vhost_name, $sdpfile_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->deleteSDPFileConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **sdpfile_name** | **string**| The SDP file name without the extension |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSMILFileConfig**
> deleteSMILFileConfig($server_name, $vhost_name, $smilfile_name)

Deletes the specified SMIL File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$smilfile_name = "smilfile_name_example"; // string | The SMIL file name without the extension

try {
    $apiInstance->deleteSMILFileConfig($server_name, $vhost_name, $smilfile_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->deleteSMILFileConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **smilfile_name** | **string**| The SMIL file name without the extension |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStartupStreamConfig**
> deleteStartupStreamConfig($server_name, $vhost_name, $stream_name, $app_name, $instance_name)

Deletes the specified Startup Stream configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$stream_name = "stream_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$instance_name = "instance_name_example"; // string | 

try {
    $apiInstance->deleteStartupStreamConfig($server_name, $vhost_name, $stream_name, $app_name, $instance_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->deleteStartupStreamConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **stream_name** | **string**|  |
 **app_name** | **string**|  |
 **instance_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStreamFileConfig**
> deleteStreamFileConfig($server_name, $vhost_name, $streamfile_name)

Deletes the specified Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$streamfile_name = "streamfile_name_example"; // string | The stream file name without the extension

try {
    $apiInstance->deleteStreamFileConfig($server_name, $vhost_name, $streamfile_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->deleteStreamFileConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **streamfile_name** | **string**| The stream file name without the extension |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranscoderEncodeConfig**
> deleteTranscoderEncodeConfig($server_name, $vhost_name, $template_name, $encode_name)

Deletes the specified Trancoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$encode_name = "encode_name_example"; // string | 

try {
    $apiInstance->deleteTranscoderEncodeConfig($server_name, $vhost_name, $template_name, $encode_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->deleteTranscoderEncodeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **encode_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranscoderOverlayDecodeConfig**
> deleteTranscoderOverlayDecodeConfig($server_name, $vhost_name, $template_name, $overlay_name)

Deletes the specified Trancoder Overlay Decode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$overlay_name = "overlay_name_example"; // string | 

try {
    $apiInstance->deleteTranscoderOverlayDecodeConfig($server_name, $vhost_name, $template_name, $overlay_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->deleteTranscoderOverlayDecodeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **overlay_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranscoderOverlayEncodeConfig**
> deleteTranscoderOverlayEncodeConfig($server_name, $vhost_name, $template_name, $overlay_name, $encode_name)

Deletes the specified Trancoder Overlay Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$overlay_name = "overlay_name_example"; // string | 
$encode_name = "encode_name_example"; // string | 

try {
    $apiInstance->deleteTranscoderOverlayEncodeConfig($server_name, $vhost_name, $template_name, $overlay_name, $encode_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->deleteTranscoderOverlayEncodeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **overlay_name** | **string**|  |
 **encode_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranscoderStreamNameGroupConfig**
> deleteTranscoderStreamNameGroupConfig($server_name, $vhost_name, $template_name, $group_name)

Deletes the specified Trancoder StreamNameGroup configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$group_name = "group_name_example"; // string | 

try {
    $apiInstance->deleteTranscoderStreamNameGroupConfig($server_name, $vhost_name, $template_name, $group_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->deleteTranscoderStreamNameGroupConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **group_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranscoderTemplateConfig**
> deleteTranscoderTemplateConfig($server_name, $vhost_name, $template_name)

Deletes the specified Trancoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 

try {
    $apiInstance->deleteTranscoderTemplateConfig($server_name, $vhost_name, $template_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->deleteTranscoderTemplateConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentVHostStatistics**
> \Swagger\Client\Model\CurrentVHostStatistics getCurrentVHostStatistics($server_name, $vhost_name)

Retrieves the current VHost statistics

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 

try {
    $result = $apiInstance->getCurrentVHostStatistics($server_name, $vhost_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getCurrentVHostStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\CurrentVHostStatistics**](../Model/CurrentVHostStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricVHostStatistics**
> \Swagger\Client\Model\HistoricVHostStatistics getHistoricVHostStatistics($server_name, $vhost_name)

Retrieves the historic VHost statistics

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 

try {
    $result = $apiInstance->getHistoricVHostStatistics($server_name, $vhost_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getHistoricVHostStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\HistoricVHostStatistics**](../Model/HistoricVHostStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHostPortConfig**
> \Swagger\Client\Model\HostPortConfig getHostPortConfig($server_name, $vhost_name, $portname)

Retrieves the HostPort for the specifed vhost and port

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$portname = "portname_example"; // string | The port name

try {
    $result = $apiInstance->getHostPortConfig($server_name, $vhost_name, $portname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getHostPortConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **portname** | **string**| The port name |

### Return type

[**\Swagger\Client\Model\HostPortConfig**](../Model/HostPortConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHostPortConfigAdv**
> \Swagger\Client\Model\HostPortConfigAdv getHostPortConfigAdv($server_name, $vhost_name, $portname)

Retrieves the advanced HostPort configuration for the specified vhost and port

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$portname = "portname_example"; // string | The port name

try {
    $result = $apiInstance->getHostPortConfigAdv($server_name, $vhost_name, $portname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getHostPortConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **portname** | **string**| The port name |

### Return type

[**\Swagger\Client\Model\HostPortConfigAdv**](../Model/HostPortConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHostPortsConfig**
> \Swagger\Client\Model\HostPortsConfig getHostPortsConfig($server_name, $vhost_name)

Retrieves the list of server HostPorts for the specified vhost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 

try {
    $result = $apiInstance->getHostPortsConfig($server_name, $vhost_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getHostPortsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\HostPortsConfig**](../Model/HostPortsConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHostportsTuneConfig**
> \Swagger\Client\Model\HostportsTuneConfig getHostportsTuneConfig($server_name, $vhost_name)

Retrieves the host port configuration used for server tuning for the specified vhost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The vhost name

try {
    $result = $apiInstance->getHostportsTuneConfig($server_name, $vhost_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getHostportsTuneConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The vhost name |

### Return type

[**\Swagger\Client\Model\HostportsTuneConfig**](../Model/HostportsTuneConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaCacheStoreList**
> \Swagger\Client\Model\MediaCacheStoreList getMediaCacheStoreList($server_name, $vhost_name)

Retrieves all entries in the MediaCache system

This API is available in builds 15942 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 

try {
    $result = $apiInstance->getMediaCacheStoreList($server_name, $vhost_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getMediaCacheStoreList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\MediaCacheStoreList**](../Model/MediaCacheStoreList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublisherVhostConfig**
> \Swagger\Client\Model\PublisherVhostConfig getPublisherVhostConfig($server_name, $vhost_name, $publisher_name)

Retrieves the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The vhost name
$publisher_name = "publisher_name_example"; // string | The publisher name

try {
    $result = $apiInstance->getPublisherVhostConfig($server_name, $vhost_name, $publisher_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getPublisherVhostConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The vhost name |
 **publisher_name** | **string**| The publisher name |

### Return type

[**\Swagger\Client\Model\PublisherVhostConfig**](../Model/PublisherVhostConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublishersVhostConfig**
> \Swagger\Client\Model\PublishersVhostConfig getPublishersVhostConfig($server_name, $vhost_name)

Retrieves the list of Publishers for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The vhost name

try {
    $result = $apiInstance->getPublishersVhostConfig($server_name, $vhost_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getPublishersVhostConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The vhost name |

### Return type

[**\Swagger\Client\Model\PublishersVhostConfig**](../Model/PublishersVhostConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSDPFilesConfig**
> \Swagger\Client\Model\SDPFilesConfig getSDPFilesConfig($server_name, $vhost_name)

Retrieves the list of SDP Files for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 

try {
    $result = $apiInstance->getSDPFilesConfig($server_name, $vhost_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getSDPFilesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\SDPFilesConfig**](../Model/SDPFilesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSMILFileConfig**
> \Swagger\Client\Model\SMILFileConfig getSMILFileConfig($server_name, $vhost_name, $smilfile_name)

Retrieves the specified SMIL File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$smilfile_name = "smilfile_name_example"; // string | The SMIL file name without the extension

try {
    $result = $apiInstance->getSMILFileConfig($server_name, $vhost_name, $smilfile_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getSMILFileConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **smilfile_name** | **string**| The SMIL file name without the extension |

### Return type

[**\Swagger\Client\Model\SMILFileConfig**](../Model/SMILFileConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSMILFilesConfig**
> \Swagger\Client\Model\SMILFilesConfig getSMILFilesConfig($server_name, $vhost_name)

Retrieves the list of SMIL Files for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on

try {
    $result = $apiInstance->getSMILFilesConfig($server_name, $vhost_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getSMILFilesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |

### Return type

[**\Swagger\Client\Model\SMILFilesConfig**](../Model/SMILFilesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSSLConfig**
> \Swagger\Client\Model\SSLConfig getSSLConfig($server_name, $vhost_name, $portname)

Retrieves the SSL configuration for the specified vhost and port

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$portname = "portname_example"; // string | The port name

try {
    $result = $apiInstance->getSSLConfig($server_name, $vhost_name, $portname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getSSLConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **portname** | **string**| The port name |

### Return type

[**\Swagger\Client\Model\SSLConfig**](../Model/SSLConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStartupStreamConfig**
> \Swagger\Client\Model\StartupStreamConfig getStartupStreamConfig($server_name, $vhost_name, $stream_name, $app_name, $instance_name)

Retrieves the specified Startup Stream configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$stream_name = "stream_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$instance_name = "instance_name_example"; // string | 

try {
    $result = $apiInstance->getStartupStreamConfig($server_name, $vhost_name, $stream_name, $app_name, $instance_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getStartupStreamConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **stream_name** | **string**|  |
 **app_name** | **string**|  |
 **instance_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\StartupStreamConfig**](../Model/StartupStreamConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStartupStreamsConfig**
> \Swagger\Client\Model\StartupStreamsConfig getStartupStreamsConfig($server_name, $vhost_name)

Retrieves the list of Startup Streams for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 

try {
    $result = $apiInstance->getStartupStreamsConfig($server_name, $vhost_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getStartupStreamsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\StartupStreamsConfig**](../Model/StartupStreamsConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamFileConfig**
> \Swagger\Client\Model\StreamFileConfig getStreamFileConfig($server_name, $vhost_name, $streamfile_name)

Retrieves the specified Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$streamfile_name = "streamfile_name_example"; // string | The stream file name without the extension

try {
    $result = $apiInstance->getStreamFileConfig($server_name, $vhost_name, $streamfile_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getStreamFileConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **streamfile_name** | **string**| The stream file name without the extension |

### Return type

[**\Swagger\Client\Model\StreamFileConfig**](../Model/StreamFileConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamFileConfigAdv**
> \Swagger\Client\Model\StreamFileConfigAdv getStreamFileConfigAdv($server_name, $vhost_name, $streamfile_name)

Retrieves the Advanced Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$streamfile_name = "streamfile_name_example"; // string | The stream file name without the .stream extension

try {
    $result = $apiInstance->getStreamFileConfigAdv($server_name, $vhost_name, $streamfile_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getStreamFileConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **streamfile_name** | **string**| The stream file name without the .stream extension |

### Return type

[**\Swagger\Client\Model\StreamFileConfigAdv**](../Model/StreamFileConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamFilesConfig**
> \Swagger\Client\Model\StreamFilesConfig getStreamFilesConfig($server_name, $vhost_name)

Retrieves the list of Stream Files for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 

try {
    $result = $apiInstance->getStreamFilesConfig($server_name, $vhost_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getStreamFilesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\StreamFilesConfig**](../Model/StreamFilesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderConfig**
> \Swagger\Client\Model\TranscoderConfig getTranscoderConfig($server_name, $vhost_name)

Retrieves the Transcoder configuration for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderConfig($server_name, $vhost_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getTranscoderConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderConfig**](../Model/TranscoderConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderEncodeConfig**
> \Swagger\Client\Model\TranscoderEncodeConfig getTranscoderEncodeConfig($server_name, $vhost_name, $template_name, $encode_name)

Retrieves the specified Trancoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$encode_name = "encode_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderEncodeConfig($server_name, $vhost_name, $template_name, $encode_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getTranscoderEncodeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **encode_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderEncodeConfig**](../Model/TranscoderEncodeConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderEncodeConfigAdv**
> \Swagger\Client\Model\TranscoderEncodeConfigAdv getTranscoderEncodeConfigAdv($server_name, $vhost_name, $template_name, $encode_name)

Retrieves the Advanced Transcoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$encode_name = "encode_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderEncodeConfigAdv($server_name, $vhost_name, $template_name, $encode_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getTranscoderEncodeConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **encode_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderEncodeConfigAdv**](../Model/TranscoderEncodeConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderEncodesConfig**
> \Swagger\Client\Model\TranscoderEncodesConfig getTranscoderEncodesConfig($server_name, $vhost_name, $template_name)

Retrieves the list of Transcoder Encode Configurations for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderEncodesConfig($server_name, $vhost_name, $template_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getTranscoderEncodesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderEncodesConfig**](../Model/TranscoderEncodesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderOverlayDecodeConfig**
> \Swagger\Client\Model\TranscoderOverlayDecodeConfig getTranscoderOverlayDecodeConfig($server_name, $vhost_name, $template_name, $overlay_name)

Retrieves the specified Trancoder Overlay Decode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$overlay_name = "overlay_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderOverlayDecodeConfig($server_name, $vhost_name, $template_name, $overlay_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getTranscoderOverlayDecodeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **overlay_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderOverlayDecodeConfig**](../Model/TranscoderOverlayDecodeConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderOverlayEncodeConfig**
> \Swagger\Client\Model\TranscoderOverlayEncodeConfig getTranscoderOverlayEncodeConfig($server_name, $vhost_name, $template_name, $overlay_name, $encode_name)

Retrieves the specified Trancoder Overlay Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$overlay_name = "overlay_name_example"; // string | 
$encode_name = "encode_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderOverlayEncodeConfig($server_name, $vhost_name, $template_name, $overlay_name, $encode_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getTranscoderOverlayEncodeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **overlay_name** | **string**|  |
 **encode_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderOverlayEncodeConfig**](../Model/TranscoderOverlayEncodeConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderStreamNameGroupConfig**
> \Swagger\Client\Model\TranscoderStreamNameGroupConfig getTranscoderStreamNameGroupConfig($server_name, $vhost_name, $template_name, $group_name)

Retrieves the specified Trancoder StreamNameGroup configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$group_name = "group_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderStreamNameGroupConfig($server_name, $vhost_name, $template_name, $group_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getTranscoderStreamNameGroupConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **group_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderStreamNameGroupConfig**](../Model/TranscoderStreamNameGroupConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderStreamNameGroupsConfig**
> \Swagger\Client\Model\TranscoderStreamNameGroupsConfig getTranscoderStreamNameGroupsConfig($server_name, $vhost_name, $template_name)

Retrieves the list of Transcoder Stream Name Groups for the specified Template

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderStreamNameGroupsConfig($server_name, $vhost_name, $template_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getTranscoderStreamNameGroupsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderStreamNameGroupsConfig**](../Model/TranscoderStreamNameGroupsConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderTemplateConfig**
> \Swagger\Client\Model\TranscoderTemplateConfig getTranscoderTemplateConfig($server_name, $vhost_name, $template_name)

Retrieves the specified Trancoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderTemplateConfig($server_name, $vhost_name, $template_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getTranscoderTemplateConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderTemplateConfig**](../Model/TranscoderTemplateConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderTemplateConfigAdv**
> \Swagger\Client\Model\TranscoderTemplateConfigAdv getTranscoderTemplateConfigAdv($server_name, $vhost_name, $template_name)

Retrieves the Advanced Transcoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderTemplateConfigAdv($server_name, $vhost_name, $template_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getTranscoderTemplateConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderTemplateConfigAdv**](../Model/TranscoderTemplateConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderTemplatesConfig**
> \Swagger\Client\Model\TranscoderTemplatesConfig getTranscoderTemplatesConfig($server_name, $vhost_name)

Retrieves the list of Transcoder Template Configurations for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on

try {
    $result = $apiInstance->getTranscoderTemplatesConfig($server_name, $vhost_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getTranscoderTemplatesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |

### Return type

[**\Swagger\Client\Model\TranscoderTemplatesConfig**](../Model/TranscoderTemplatesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVHostConfig**
> \Swagger\Client\Model\VHostConfig getVHostConfig($server_name, $vhost_name)

Retrieves the specified VHost configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The vhost name

try {
    $result = $apiInstance->getVHostConfig($server_name, $vhost_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getVHostConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The vhost name |

### Return type

[**\Swagger\Client\Model\VHostConfig**](../Model/VHostConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVHostConfigAdv**
> \Swagger\Client\Model\VHostConfigAdv getVHostConfigAdv($server_name, $vhost_name)

Retrieves the specified advanced VHost configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 

try {
    $result = $apiInstance->getVHostConfigAdv($server_name, $vhost_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getVHostConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\VHostConfigAdv**](../Model/VHostConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVHostTuneConfig**
> \Swagger\Client\Model\VHostTuneConfig getVHostTuneConfig($server_name, $vhost_name)

Retrieves the Tuning configuration for the specifed vhost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The vhost name

try {
    $result = $apiInstance->getVHostTuneConfig($server_name, $vhost_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getVHostTuneConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The vhost name |

### Return type

[**\Swagger\Client\Model\VHostTuneConfig**](../Model/VHostTuneConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVHostsConfig**
> \Swagger\Client\Model\VHostsConfig getVHostsConfig($server_name)

Retrieves the list of VHosts

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use

try {
    $result = $apiInstance->getVHostsConfig($server_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->getVHostsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |

### Return type

[**\Swagger\Client\Model\VHostsConfig**](../Model/VHostsConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPublisherVhostConfig**
> postPublisherVhostConfig($server_name, $vhost_name, $publisher_name, $body)

Adds the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The vhost name
$publisher_name = "publisher_name_example"; // string | The publisher name
$body = new \Swagger\Client\Model\PublisherVhostConfig(); // \Swagger\Client\Model\PublisherVhostConfig | 

try {
    $apiInstance->postPublisherVhostConfig($server_name, $vhost_name, $publisher_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->postPublisherVhostConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The vhost name |
 **publisher_name** | **string**| The publisher name |
 **body** | [**\Swagger\Client\Model\PublisherVhostConfig**](../Model/PublisherVhostConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPublishersVhostConfig**
> postPublishersVhostConfig($server_name, $vhost_name, $body)

Add a Publisher to list of Publishers for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The vhost name
$body = new \Swagger\Client\Model\PublisherVhostConfig(); // \Swagger\Client\Model\PublisherVhostConfig | 

try {
    $apiInstance->postPublishersVhostConfig($server_name, $vhost_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->postPublishersVhostConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The vhost name |
 **body** | [**\Swagger\Client\Model\PublisherVhostConfig**](../Model/PublisherVhostConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSMILFileConfig**
> postSMILFileConfig($server_name, $vhost_name, $smilfile_name, $body)

Adds the specified SMIL File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$smilfile_name = "smilfile_name_example"; // string | The SMIL file name without the extension
$body = new \Swagger\Client\Model\SMILFileConfig(); // \Swagger\Client\Model\SMILFileConfig | 

try {
    $apiInstance->postSMILFileConfig($server_name, $vhost_name, $smilfile_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->postSMILFileConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **smilfile_name** | **string**| The SMIL file name without the extension |
 **body** | [**\Swagger\Client\Model\SMILFileConfig**](../Model/SMILFileConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSMILFilesConfig**
> postSMILFilesConfig($server_name, $vhost_name, $body)

Adds a SMIL File to the list of SMIL Files for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$body = new \Swagger\Client\Model\SMILFileConfig(); // \Swagger\Client\Model\SMILFileConfig | 

try {
    $apiInstance->postSMILFilesConfig($server_name, $vhost_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->postSMILFilesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **body** | [**\Swagger\Client\Model\SMILFileConfig**](../Model/SMILFileConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStartupStreamConfig**
> postStartupStreamConfig($server_name, $vhost_name, $stream_name, $app_name, $instance_name, $body)

Adds the specified Startup Stream configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$stream_name = "stream_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$instance_name = "instance_name_example"; // string | 
$body = new \Swagger\Client\Model\StartupStreamConfig(); // \Swagger\Client\Model\StartupStreamConfig | 

try {
    $apiInstance->postStartupStreamConfig($server_name, $vhost_name, $stream_name, $app_name, $instance_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->postStartupStreamConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **stream_name** | **string**|  |
 **app_name** | **string**|  |
 **instance_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\StartupStreamConfig**](../Model/StartupStreamConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStartupStreamsConfig**
> postStartupStreamsConfig($server_name, $vhost_name, $body)

Adds a Startup Stream to the list of Startup Streams for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$body = new \Swagger\Client\Model\StartupStreamConfig(); // \Swagger\Client\Model\StartupStreamConfig | 

try {
    $apiInstance->postStartupStreamsConfig($server_name, $vhost_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->postStartupStreamsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\StartupStreamConfig**](../Model/StartupStreamConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStreamFileConfig**
> postStreamFileConfig($server_name, $vhost_name, $streamfile_name, $body)

Adds the specified Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$streamfile_name = "streamfile_name_example"; // string | The stream file name without the extension
$body = new \Swagger\Client\Model\StreamFileConfig(); // \Swagger\Client\Model\StreamFileConfig | 

try {
    $apiInstance->postStreamFileConfig($server_name, $vhost_name, $streamfile_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->postStreamFileConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **streamfile_name** | **string**| The stream file name without the extension |
 **body** | [**\Swagger\Client\Model\StreamFileConfig**](../Model/StreamFileConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStreamFilesConfig**
> postStreamFilesConfig($server_name, $vhost_name, $body)

Adds a Stream File to the list of Stream Files for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$body = new \Swagger\Client\Model\StreamFileConfig(); // \Swagger\Client\Model\StreamFileConfig | 

try {
    $apiInstance->postStreamFilesConfig($server_name, $vhost_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->postStreamFilesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\StreamFileConfig**](../Model/StreamFileConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderEncodeConfig**
> postTranscoderEncodeConfig($server_name, $vhost_name, $template_name, $encode_name, $body)

Adds the specified Trancoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$encode_name = "encode_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderEncodeConfig(); // \Swagger\Client\Model\TranscoderEncodeConfig | 

try {
    $apiInstance->postTranscoderEncodeConfig($server_name, $vhost_name, $template_name, $encode_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->postTranscoderEncodeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **encode_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderEncodeConfig**](../Model/TranscoderEncodeConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderEncodesConfig**
> postTranscoderEncodesConfig($server_name, $vhost_name, $template_name, $body)

Adds a Transcoder Encode Configuration to the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderEncodeConfig(); // \Swagger\Client\Model\TranscoderEncodeConfig | 

try {
    $apiInstance->postTranscoderEncodesConfig($server_name, $vhost_name, $template_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->postTranscoderEncodesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderEncodeConfig**](../Model/TranscoderEncodeConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderStreamNameGroupConfig**
> postTranscoderStreamNameGroupConfig($server_name, $vhost_name, $template_name, $group_name, $body)

Adds the specified Trancoder StreamNameGroup configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$group_name = "group_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderStreamNameGroupConfig(); // \Swagger\Client\Model\TranscoderStreamNameGroupConfig | 

try {
    $apiInstance->postTranscoderStreamNameGroupConfig($server_name, $vhost_name, $template_name, $group_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->postTranscoderStreamNameGroupConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **group_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderStreamNameGroupConfig**](../Model/TranscoderStreamNameGroupConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderStreamNameGroupsConfig**
> postTranscoderStreamNameGroupsConfig($server_name, $vhost_name, $template_name, $body)

Adds a Transcoder Stream Name Groups Configuration to the specified Template

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderStreamNameGroupConfig(); // \Swagger\Client\Model\TranscoderStreamNameGroupConfig | 

try {
    $apiInstance->postTranscoderStreamNameGroupsConfig($server_name, $vhost_name, $template_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->postTranscoderStreamNameGroupsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderStreamNameGroupConfig**](../Model/TranscoderStreamNameGroupConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderTemplateConfig**
> postTranscoderTemplateConfig($server_name, $vhost_name, $template_name, $body)

Adds the specified Trancoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderTemplateConfig(); // \Swagger\Client\Model\TranscoderTemplateConfig | 

try {
    $apiInstance->postTranscoderTemplateConfig($server_name, $vhost_name, $template_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->postTranscoderTemplateConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderTemplateConfig**](../Model/TranscoderTemplateConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderTemplatesConfig**
> postTranscoderTemplatesConfig($server_name, $vhost_name, $body)

Adds a Transcoder Templates Configuration to the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$body = new \Swagger\Client\Model\TranscoderTemplateConfig(); // \Swagger\Client\Model\TranscoderTemplateConfig | 

try {
    $apiInstance->postTranscoderTemplatesConfig($server_name, $vhost_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->postTranscoderTemplatesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **body** | [**\Swagger\Client\Model\TranscoderTemplateConfig**](../Model/TranscoderTemplateConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putHostPortConfigAdv**
> putHostPortConfigAdv($server_name, $vhost_name, $portname, $body)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$portname = "portname_example"; // string | The port name
$body = new \Swagger\Client\Model\HostPortConfigAdv(); // \Swagger\Client\Model\HostPortConfigAdv | 

try {
    $apiInstance->putHostPortConfigAdv($server_name, $vhost_name, $portname, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putHostPortConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **portname** | **string**| The port name |
 **body** | [**\Swagger\Client\Model\HostPortConfigAdv**](../Model/HostPortConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putHostportsTuneConfig**
> putHostportsTuneConfig($server_name, $vhost_name, $body)

Updates the host port configuration used for server tuning for the specified vhost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The vhost name
$body = new \Swagger\Client\Model\HostportsTuneConfig(); // \Swagger\Client\Model\HostportsTuneConfig | 

try {
    $apiInstance->putHostportsTuneConfig($server_name, $vhost_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putHostportsTuneConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The vhost name |
 **body** | [**\Swagger\Client\Model\HostportsTuneConfig**](../Model/HostportsTuneConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMediaCacheStoreAction**
> putMediaCacheStoreAction($server_name, $action, $vhost_name, $filename)



This API is available in builds 15942 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$filename = "filename_example"; // string | The file or stream name item to be used in all rest action requests

try {
    $apiInstance->putMediaCacheStoreAction($server_name, $action, $vhost_name, $filename);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putMediaCacheStoreAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **filename** | **string**| The file or stream name item to be used in all rest action requests | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPublisherVhostConfig**
> putPublisherVhostConfig($server_name, $vhost_name, $publisher_name, $body)

Updates the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The vhost name
$publisher_name = "publisher_name_example"; // string | The publisher name
$body = new \Swagger\Client\Model\PublisherVhostConfig(); // \Swagger\Client\Model\PublisherVhostConfig | 

try {
    $apiInstance->putPublisherVhostConfig($server_name, $vhost_name, $publisher_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putPublisherVhostConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The vhost name |
 **publisher_name** | **string**| The publisher name |
 **body** | [**\Swagger\Client\Model\PublisherVhostConfig**](../Model/PublisherVhostConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSDPFileAction**
> putSDPFileAction($server_name, $action, $media_caster_type, $vhost_name, $sdpfile_name, $connect_app_name, $app_ınstance)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$media_caster_type = "rtp"; // string | The MediaCasterType to use for the connection
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$sdpfile_name = "sdpfile_name_example"; // string | The SDP file name needed for this REST call
$connect_app_name = "connect_app_name_example"; // string | The name of the application to connect to
$app_ınstance = "app_ınstance_example"; // string | The name of the application instance to connect to

try {
    $apiInstance->putSDPFileAction($server_name, $action, $media_caster_type, $vhost_name, $sdpfile_name, $connect_app_name, $app_ınstance);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putSDPFileAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **media_caster_type** | **string**| The MediaCasterType to use for the connection | [default to rtp]
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **sdpfile_name** | **string**| The SDP file name needed for this REST call |
 **connect_app_name** | **string**| The name of the application to connect to | [optional]
 **app_ınstance** | **string**| The name of the application instance to connect to | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSMILFileAction**
> putSMILFileAction($server_name, $action, $media_caster_type, $vhost_name, $smilfile_name, $connect_app_name, $app_ınstance, $dst_entry_name)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$media_caster_type = "rtp"; // string | The MediaCasterType to use for the connection
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$smilfile_name = "smilfile_name_example"; // string | The SMIL file, file name needed for this REST call
$connect_app_name = "connect_app_name_example"; // string | The name of the application to connect to
$app_ınstance = "app_ınstance_example"; // string | The name of the application instance to connect to
$dst_entry_name = "dst_entry_name_example"; // string | The destination SMIL file name when copying

try {
    $apiInstance->putSMILFileAction($server_name, $action, $media_caster_type, $vhost_name, $smilfile_name, $connect_app_name, $app_ınstance, $dst_entry_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putSMILFileAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **media_caster_type** | **string**| The MediaCasterType to use for the connection | [default to rtp]
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **smilfile_name** | **string**| The SMIL file, file name needed for this REST call |
 **connect_app_name** | **string**| The name of the application to connect to | [optional]
 **app_ınstance** | **string**| The name of the application instance to connect to | [optional]
 **dst_entry_name** | **string**| The destination SMIL file name when copying | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSMILFileConfig**
> putSMILFileConfig($server_name, $vhost_name, $smilfile_name, $body)

Updates the specified SMIL File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$smilfile_name = "smilfile_name_example"; // string | The SMIL file name without the extension
$body = new \Swagger\Client\Model\SMILFileConfig(); // \Swagger\Client\Model\SMILFileConfig | 

try {
    $apiInstance->putSMILFileConfig($server_name, $vhost_name, $smilfile_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putSMILFileConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **smilfile_name** | **string**| The SMIL file name without the extension |
 **body** | [**\Swagger\Client\Model\SMILFileConfig**](../Model/SMILFileConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSSLConfig**
> putSSLConfig($server_name, $vhost_name, $portname, $body)

Updates the SSL configuration for the specified vhost and port

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$portname = "portname_example"; // string | The port name
$body = new \Swagger\Client\Model\SSLConfig(); // \Swagger\Client\Model\SSLConfig | 

try {
    $apiInstance->putSSLConfig($server_name, $vhost_name, $portname, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putSSLConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **portname** | **string**| The port name |
 **body** | [**\Swagger\Client\Model\SSLConfig**](../Model/SSLConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStartupStreamConfig**
> putStartupStreamConfig($server_name, $vhost_name, $stream_name, $app_name, $instance_name, $body)

Updates the specified Startup Stream configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$stream_name = "stream_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$instance_name = "instance_name_example"; // string | 
$body = new \Swagger\Client\Model\StartupStreamConfig(); // \Swagger\Client\Model\StartupStreamConfig | 

try {
    $apiInstance->putStartupStreamConfig($server_name, $vhost_name, $stream_name, $app_name, $instance_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putStartupStreamConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **stream_name** | **string**|  |
 **app_name** | **string**|  |
 **instance_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\StartupStreamConfig**](../Model/StartupStreamConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStreamFileAction**
> putStreamFileAction($server_name, $action, $media_caster_type, $vhost_name, $streamfile_name, $connect_app_name, $app_ınstance, $dst_entry_name)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$media_caster_type = "rtp"; // string | The MediaCasterType to use for the connection
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$streamfile_name = "streamfile_name_example"; // string | The stream file, file name needed for this REST call
$connect_app_name = "connect_app_name_example"; // string | The name of the application to connect to
$app_ınstance = "app_ınstance_example"; // string | The name of the application instance to connect to
$dst_entry_name = "dst_entry_name_example"; // string | The destination stream file name when copying

try {
    $apiInstance->putStreamFileAction($server_name, $action, $media_caster_type, $vhost_name, $streamfile_name, $connect_app_name, $app_ınstance, $dst_entry_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putStreamFileAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **media_caster_type** | **string**| The MediaCasterType to use for the connection | [default to rtp]
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **streamfile_name** | **string**| The stream file, file name needed for this REST call |
 **connect_app_name** | **string**| The name of the application to connect to | [optional]
 **app_ınstance** | **string**| The name of the application instance to connect to | [optional]
 **dst_entry_name** | **string**| The destination stream file name when copying | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStreamFileConfig**
> putStreamFileConfig($server_name, $vhost_name, $streamfile_name, $body)

Updates the specified Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$streamfile_name = "streamfile_name_example"; // string | The stream file name without the extension
$body = new \Swagger\Client\Model\StreamFileConfig(); // \Swagger\Client\Model\StreamFileConfig | 

try {
    $apiInstance->putStreamFileConfig($server_name, $vhost_name, $streamfile_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putStreamFileConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **streamfile_name** | **string**| The stream file name without the extension |
 **body** | [**\Swagger\Client\Model\StreamFileConfig**](../Model/StreamFileConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStreamFileConfigAdv**
> putStreamFileConfigAdv($server_name, $vhost_name, $streamfile_name, $body)

Updates the Advanced Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$streamfile_name = "streamfile_name_example"; // string | The stream file name without the .stream extension
$body = new \Swagger\Client\Model\StreamFileConfigAdv(); // \Swagger\Client\Model\StreamFileConfigAdv | 

try {
    $apiInstance->putStreamFileConfigAdv($server_name, $vhost_name, $streamfile_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putStreamFileConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **streamfile_name** | **string**| The stream file name without the .stream extension |
 **body** | [**\Swagger\Client\Model\StreamFileConfigAdv**](../Model/StreamFileConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderConfig**
> putTranscoderConfig($server_name, $vhost_name, $body)

Updates the Transcoder configuration for the specified VHost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderConfig(); // \Swagger\Client\Model\TranscoderConfig | 

try {
    $apiInstance->putTranscoderConfig($server_name, $vhost_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putTranscoderConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderConfig**](../Model/TranscoderConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderEncodeConfig**
> putTranscoderEncodeConfig($server_name, $vhost_name, $template_name, $encode_name, $body)

Updates the specified Trancoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$encode_name = "encode_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderEncodeConfig(); // \Swagger\Client\Model\TranscoderEncodeConfig | 

try {
    $apiInstance->putTranscoderEncodeConfig($server_name, $vhost_name, $template_name, $encode_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putTranscoderEncodeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **encode_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderEncodeConfig**](../Model/TranscoderEncodeConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderEncodeConfigAdv**
> putTranscoderEncodeConfigAdv($server_name, $vhost_name, $template_name, $encode_name, $body)

Updates the Advanced Transcoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$encode_name = "encode_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderEncodeConfigAdv(); // \Swagger\Client\Model\TranscoderEncodeConfigAdv | 

try {
    $apiInstance->putTranscoderEncodeConfigAdv($server_name, $vhost_name, $template_name, $encode_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putTranscoderEncodeConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **encode_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderEncodeConfigAdv**](../Model/TranscoderEncodeConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderOverlayDecodeConfig**
> putTranscoderOverlayDecodeConfig($server_name, $vhost_name, $template_name, $overlay_name, $body)

Updates the specified Trancoder Overlay Decode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$overlay_name = "overlay_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderOverlayDecodeConfig(); // \Swagger\Client\Model\TranscoderOverlayDecodeConfig | 

try {
    $apiInstance->putTranscoderOverlayDecodeConfig($server_name, $vhost_name, $template_name, $overlay_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putTranscoderOverlayDecodeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **overlay_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderOverlayDecodeConfig**](../Model/TranscoderOverlayDecodeConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderOverlayEncodeConfig**
> putTranscoderOverlayEncodeConfig($server_name, $vhost_name, $template_name, $overlay_name, $encode_name, $body)

Updates the specified Trancoder Overlay Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$overlay_name = "overlay_name_example"; // string | 
$encode_name = "encode_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderOverlayEncodeConfig(); // \Swagger\Client\Model\TranscoderOverlayEncodeConfig | 

try {
    $apiInstance->putTranscoderOverlayEncodeConfig($server_name, $vhost_name, $template_name, $overlay_name, $encode_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putTranscoderOverlayEncodeConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **overlay_name** | **string**|  |
 **encode_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderOverlayEncodeConfig**](../Model/TranscoderOverlayEncodeConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderStreamNameGroupConfig**
> putTranscoderStreamNameGroupConfig($server_name, $vhost_name, $template_name, $group_name, $body)

Updates the specified Trancoder StreamNameGroup configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$group_name = "group_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderStreamNameGroupConfig(); // \Swagger\Client\Model\TranscoderStreamNameGroupConfig | 

try {
    $apiInstance->putTranscoderStreamNameGroupConfig($server_name, $vhost_name, $template_name, $group_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putTranscoderStreamNameGroupConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **group_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderStreamNameGroupConfig**](../Model/TranscoderStreamNameGroupConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderTemplateAction**
> putTranscoderTemplateAction($server_name, $action, $vhost_name, $template_name, $dst_entry_name)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$template_name = "template_name_example"; // string | The template name needed for this REST call
$dst_entry_name = "dst_entry_name_example"; // string | The destination transcoder template name when copying

try {
    $apiInstance->putTranscoderTemplateAction($server_name, $action, $vhost_name, $template_name, $dst_entry_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putTranscoderTemplateAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **template_name** | **string**| The template name needed for this REST call |
 **dst_entry_name** | **string**| The destination transcoder template name when copying | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderTemplateConfig**
> putTranscoderTemplateConfig($server_name, $vhost_name, $template_name, $body)

Updates the specified Trancoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderTemplateConfig(); // \Swagger\Client\Model\TranscoderTemplateConfig | 

try {
    $apiInstance->putTranscoderTemplateConfig($server_name, $vhost_name, $template_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putTranscoderTemplateConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderTemplateConfig**](../Model/TranscoderTemplateConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderTemplateConfigAdv**
> putTranscoderTemplateConfigAdv($server_name, $vhost_name, $template_name, $body)

Updates the Advanced Transcoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderTemplateConfigAdv(); // \Swagger\Client\Model\TranscoderTemplateConfigAdv | 

try {
    $apiInstance->putTranscoderTemplateConfigAdv($server_name, $vhost_name, $template_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putTranscoderTemplateConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderTemplateConfigAdv**](../Model/TranscoderTemplateConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putVHostAction**
> putVHostAction($server_name, $action, $vhost_name)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on

try {
    $apiInstance->putVHostAction($server_name, $action, $vhost_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putVHostAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putVHostConfig**
> putVHostConfig($server_name, $vhost_name, $body)

Updates the specified VHost configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The vhost name
$body = new \Swagger\Client\Model\VHostConfig(); // \Swagger\Client\Model\VHostConfig | 

try {
    $apiInstance->putVHostConfig($server_name, $vhost_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putVHostConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The vhost name |
 **body** | [**\Swagger\Client\Model\VHostConfig**](../Model/VHostConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putVHostConfigAdv**
> putVHostConfigAdv($server_name, $vhost_name, $body)

Updates the specified advanced VHost configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$body = new \Swagger\Client\Model\VHostConfigAdv(); // \Swagger\Client\Model\VHostConfigAdv | 

try {
    $apiInstance->putVHostConfigAdv($server_name, $vhost_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putVHostConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\VHostConfigAdv**](../Model/VHostConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putVHostTuneConfig**
> putVHostTuneConfig($server_name, $vhost_name, $body)

Updates the Tuning configuration for the specifed vhost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The vhost name
$body = new \Swagger\Client\Model\VHostTuneConfig(); // \Swagger\Client\Model\VHostTuneConfig | 

try {
    $apiInstance->putVHostTuneConfig($server_name, $vhost_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsApi->putVHostTuneConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The vhost name |
 **body** | [**\Swagger\Client\Model\VHostTuneConfig**](../Model/VHostTuneConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

