# Swagger\Client\V2serversserverNamevhostsvhostNameapplicationsApi

All URIs are relative to *http://10.0.1.56:8087*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteApplicationConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#deleteApplicationConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName} | Deletes the specified Application configuration
[**deletePublisherAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#deletePublisherAppConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/publishers/{publisherName} | Deletes the specified Publisher configuration
[**deletePushPublishStreamAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#deletePushPublishStreamAppConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/pushpublish/mapentries/{entryName} | Deletes the specified PushPublish map entry for the specified Application
[**deleteSDPFileAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#deleteSDPFileAppConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/sdpfiles/{sdpfileName} | Deletes the specified SDP file
[**deleteSMILFileAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#deleteSMILFileAppConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/smilfiles/{smilfileName} | Deletes the specified SMIL File configuration
[**deleteStreamFileAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#deleteStreamFileAppConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamfiles/{streamfileName} | Deletes the specified Stream File configuration
[**deleteTranscoderEncodeAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#deleteTranscoderEncodeAppConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName} | Deletes the specified Trancoder Encode configuration
[**deleteTranscoderOverlayDecodeAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#deleteTranscoderOverlayDecodeAppConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/decode/overlays/{overlayName} | Deletes the specified Trancoder Overlay Decode configuration
[**deleteTranscoderOverlayEncodeAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#deleteTranscoderOverlayEncodeAppConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName}/overlays/{overlayName} | Deletes the specified Trancoder Overlay Encode configuration
[**deleteTranscoderStreamNameGroupAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#deleteTranscoderStreamNameGroupAppConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/streamnamegroups/{groupName} | Deletes the specified Trancoder StreamNameGroup configuration
[**deleteTranscoderTemplateAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#deleteTranscoderTemplateAppConfig) | **DELETE** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName} | Deletes the specified Trancoder Template configuration
[**getApplicationConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getApplicationConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName} | Retrieves the specified Application configuration
[**getApplicationConfigAdv**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getApplicationConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/adv | Retrieves the specified advanced Application configuration
[**getApplicationsConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getApplicationsConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications | Retrieves the list of Applications for the specifed vhost
[**getBuyDRMStreamMapsConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getBuyDRMStreamMapsConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/drm/buydrmmapfile | Retrieves the BuyDRM stream mapfile for the specified Application
[**getCurrentApplicationStatistics**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getCurrentApplicationStatistics) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/monitoring/current | Retrieves the current Application statistics
[**getCurrentIncomingStreamStatistics**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getCurrentIncomingStreamStatistics) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/incomingstreams/{streamName}/monitoring/current | Retrieves the Current Incoming Stream statistics for the specifed Incoming Stream
[**getDRMConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getDRMConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/drm | Retrieves the DRM configuration for the specified Application
[**getDRMConfigAdv**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getDRMConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/drm/adv | Retrieves the advanced DRM configuration for the specified Application
[**getDVRConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getDVRConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/dvr | Retrieves the DVR configuration for the specified Application
[**getDVRConfigAdv**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getDVRConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/dvr/adv | Retrieves the advanced DVR configuration for the specified Application
[**getDefaultStreamRecorderConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getDefaultStreamRecorderConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/streamrecorders/{recorderName}/default | Retrieves a Stream Recorder of the requested name, popluated with the default values
[**getDvrRESTConverterStore**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getDvrRESTConverterStore) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/dvrstores/{dvrStoreName} | Retrieves the information about a store/converter associated with the application instance
[**getDvrRESTConverterStores**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getDvrRESTConverterStores) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/dvrstores | Retrieves the list of DVR stores associated with this application instance
[**getHistoricApplicationStatistics**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getHistoricApplicationStatistics) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/monitoring/historic | Retrieves the historic Application statistics
[**getIncomingStreamConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getIncomingStreamConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/incomingstreams/{streamName} | Retrieves the Incoming Stream information for the specifed Incoming Stream
[**getInstanceConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getInstanceConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName} | Retrieves the specified Application Instance information
[**getInstancesConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getInstancesConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances | Retrieves the list of Instances for the specified Application
[**getLiveEncoderConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getLiveEncoderConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/incomingstreams/{streamName}/encoder/live | Retrieves the LiveEncoder configuration for the specified IncomingStream
[**getModulesConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getModulesConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/modules | Retrieves the list of Modules for the specified Application
[**getPublisherAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getPublisherAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/publishers/{publisherName} | Retrieves the specified Publisher configuration
[**getPublishersAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getPublishersAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/publishers | Retrieves the list of Publishers for the specified Application
[**getPushPublishStreamAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getPushPublishStreamAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/pushpublish/mapentries/{entryName} | Retrieves the specified PushPublish map entry&#39;s configuration for the specified Application
[**getPushPublishStreamsAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getPushPublishStreamsAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/pushpublish/mapentries | Retrieves the list of PushPublish map entries for the specified Application
[**getSDPFilesAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getSDPFilesAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/sdpfiles | Retrieves the list of SDP Files for the specified Application
[**getSMILFileAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getSMILFileAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/smilfiles/{smilfileName} | Retrieves the specified SMIL File configuration
[**getSMILFilesAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getSMILFilesAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/smilfiles | Retrieves the list of SMIL Files for the specified Application
[**getSecurityConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getSecurityConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/security | Retrieves the Security configuration for the specified Application
[**getShortUrlEncoderConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getShortUrlEncoderConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/incomingstreams/{streamName}/encoder/shorturl | Retrieves the Short URL for the LiveEncoder configuration for the specified IncomingStream
[**getSourceControlConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getSourceControlConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/incomingstreams/{streamName}/sourcecontrol | Gets information about the Source Control and it&#39;s supported features
[**getStreamConfigurationConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getStreamConfigurationConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamconfiguration | Retrieves the Stream configuration for the specified Application
[**getStreamFileAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getStreamFileAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamfiles/{streamfileName} | Retrieves the specified Stream File configuration
[**getStreamFileAppConfigAdv**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getStreamFileAppConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamfiles/{streamfileName}/adv | Retrieves the Advanced Stream File configuration
[**getStreamFilesAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getStreamFilesAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamfiles | Retrieves the list of Stream Files for the specified Application
[**getStreamGroupConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getStreamGroupConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/streamgroups/{groupName} | Retrieves the specified StreamGroup configuration
[**getStreamGroupsConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getStreamGroupsConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/streamgroups | Retrieves the list of Stream Groups for the specified Application Instance
[**getStreamRecorderConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getStreamRecorderConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/streamrecorders/{recorderName} | Retrieves the specifed Stream Recorder
[**getStreamRecordersConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getStreamRecordersConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/streamrecorders | Retrieves the list of Stream Recorders for the specified Application Instance
[**getTranscoderAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder | Retrieves the Transcoder configuration for the specified Application
[**getTranscoderAppConfigAdv**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderAppConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/adv | Retrieves the Advanced Transcoder configuration for the specified Application
[**getTranscoderEncodeAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderEncodeAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName} | Retrieves the specified Trancoder Encode configuration
[**getTranscoderEncodeAppConfigAdv**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderEncodeAppConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName}/adv | Retrieves the Advanced Transcoder Encode configuration
[**getTranscoderEncodesAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderEncodesAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes | Retrieves the list of Transcoder Encode Configurations for the specified Application
[**getTranscoderOverlayDecodeAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderOverlayDecodeAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/decode/overlays/{overlayName} | Retrieves the specified Trancoder Overlay Decode configuration
[**getTranscoderOverlayEncodeAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderOverlayEncodeAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName}/overlays/{overlayName} | Retrieves the specified Trancoder Overlay Encode configuration
[**getTranscoderStreamNameGroupAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderStreamNameGroupAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/streamnamegroups/{groupName} | Retrieves the specified Trancoder StreamNameGroup configuration
[**getTranscoderStreamNameGroupsAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderStreamNameGroupsAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/streamnamegroups | Retrieves the list of Transcoder Stream Name Groups for the specified Template
[**getTranscoderTemplateAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderTemplateAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName} | Retrieves the specified Trancoder Template configuration
[**getTranscoderTemplateAppConfigAdv**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderTemplateAppConfigAdv) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/adv | Retrieves the Advanced Transcoder Template configuration
[**getTranscoderTemplatesAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getTranscoderTemplatesAppConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates | Retrieves the list of Transcoder Template Configurations for the specified Application
[**getVerimatrixStreamMapsConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#getVerimatrixStreamMapsConfig) | **GET** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/drm/verimatrixmapfile | Retrieves the Verimatrix stream mapfile for the specified Application
[**postApplicationConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#postApplicationConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName} | Adds the specified Application configuration
[**postApplicationConfigAdv**](V2serversserverNamevhostsvhostNameapplicationsApi.md#postApplicationConfigAdv) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/adv | Adds the specified advanced Application configuration
[**postApplicationsConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#postApplicationsConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications | Adds an Application to the list of Applications  for the specifed vhost
[**postPublisherAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#postPublisherAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/publishers/{publisherName} | Adds the specified Publisher configuration
[**postPublishersAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#postPublishersAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/publishers | Add a Publisher to list of Publishers for the specified Application
[**postPushPublishStreamAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#postPushPublishStreamAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/pushpublish/mapentries/{entryName} | Adds the specified PushPublish map entry for the specified Application
[**postPushPublishStreamsAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#postPushPublishStreamsAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/pushpublish/mapentries | Adds a PushPublish map entry to list of PushPublish map entries for the specified Application
[**postSMILFileAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#postSMILFileAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/smilfiles/{smilfileName} | Adds the specified SMIL File configuration
[**postSMILFilesAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#postSMILFilesAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/smilfiles | Adds a SMIL File to the list of SMIL Files for the specified Application
[**postStreamFileAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#postStreamFileAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamfiles/{streamfileName} | Adds the specified Stream File configuration
[**postStreamFilesAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#postStreamFilesAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamfiles | Adds a Stream File to the list of Stream Files for the specified Application
[**postStreamRecorderConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#postStreamRecorderConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/streamrecorders/{recorderName} | Creates a new Stream Recorder and starts recording
[**postStreamRecordersConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#postStreamRecordersConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/streamrecorders | Creates a new Stream Recorder in the specified Application Instance and starts recording
[**postTranscoderEncodeAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#postTranscoderEncodeAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName} | Adds the specified Trancoder Encode configuration
[**postTranscoderEncodesAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#postTranscoderEncodesAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes | Adds a Transcoder Encode Configuration to the specified Application
[**postTranscoderStreamNameGroupAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#postTranscoderStreamNameGroupAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/streamnamegroups/{groupName} | Adds the specified Trancoder StreamNameGroup configuration
[**postTranscoderStreamNameGroupsAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#postTranscoderStreamNameGroupsAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/streamnamegroups | Adds a Transcoder Stream Name Groups Configuration to the specified Template
[**postTranscoderTemplateAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#postTranscoderTemplateAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName} | Adds the specified Trancoder Template configuration
[**postTranscoderTemplatesAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#postTranscoderTemplatesAppConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates | Adds a Transcoder Templates Configuration to the specified Application
[**postWSCRESTProxyConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#postWSCRESTProxyConfig) | **POST** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/wscrestproxy | Proxies a WSC REST API request
[**putApplicationAction**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putApplicationAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/actions/{action} | 
[**putApplicationConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putApplicationConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName} | Updates the specified Application configuration
[**putApplicationConfigAdv**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putApplicationConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/adv | Updates the specified advanced Application configuration
[**putBuyDRMStreamMapsConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putBuyDRMStreamMapsConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/drm/buydrmmapfile | Updates the BuyDRM stream mapfile for the specified Application
[**putDRMConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putDRMConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/drm | Updates the DRM configuration for the specified Application
[**putDRMConfigAdv**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putDRMConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/drm/adv | Updates the advanced DRM configuration for the specified Application
[**putDVRConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putDVRConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/dvr | Updates the DVR configuration for the specified Application
[**putDVRConfigAdv**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putDVRConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/dvr/adv | Updates the advanced DVR configuration for the specified Application
[**putDvrRESTConverterStoreAction**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putDvrRESTConverterStoreAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/dvrstores/{dvrStoreName}/actions/{action} | 
[**putDvrRESTConverterStoresAction**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putDvrRESTConverterStoresAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/dvrstores/actions/{action} | 
[**putIncomingStreamAction**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putIncomingStreamAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/incomingstreams/{streamName}/actions/{action} | 
[**putInstanceAction**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putInstanceAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/actions/{action} | 
[**putMediaCacheApplicationStoreAction**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putMediaCacheApplicationStoreAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/mediacache/stores/actions/{action} | 
[**putModulesConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putModulesConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/modules | Updates the list of Modules for the specified Application
[**putPublisherAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putPublisherAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/publishers/{publisherName} | Updates the specified Publisher configuration
[**putPushPublishStreamAppAction**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putPushPublishStreamAppAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/pushpublish/mapentries/{entryName}/actions/{action} | 
[**putPushPublishStreamAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putPushPublishStreamAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/pushpublish/mapentries/{entryName} | Updates the specified PushPublish map entry&#39;s configuration for the specified Application
[**putPushPublishStreamsAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putPushPublishStreamsAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/pushpublish/mapentries | 
[**putSDPFileAppAction**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putSDPFileAppAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/sdpfiles/{sdpfileName}/actions/{action} | 
[**putSMILFileAppAction**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putSMILFileAppAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/smilfiles/{smilfileName}/actions/{action} | 
[**putSMILFileAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putSMILFileAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/smilfiles/{smilfileName} | Updates the specified SMIL File configuration
[**putSecurityConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putSecurityConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/security | Updates the Security configuration for the specified Application
[**putSourceControlAction**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putSourceControlAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/incomingstreams/{streamName}/sourcecontrol/actions/{action} | 
[**putStreamConfigurationConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putStreamConfigurationConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamconfiguration | Updates the Stream configuration for the specified Application
[**putStreamFileAppAction**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putStreamFileAppAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamfiles/{streamfileName}/actions/{action} | 
[**putStreamFileAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putStreamFileAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamfiles/{streamfileName} | Updates the specified Stream File configuration
[**putStreamFileAppConfigAdv**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putStreamFileAppConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/streamfiles/{streamfileName}/adv | Updates the Advanced Stream File configuration
[**putStreamGroupAction**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putStreamGroupAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/streamgroups/{groupName}/actions/{action} | 
[**putStreamRecorderAction**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putStreamRecorderAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/instances/{instanceName}/streamrecorders/{recorderName}/actions/{action} | 
[**putTranscoderAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putTranscoderAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder | Updates the Transcoder configuration for the specified Application
[**putTranscoderAppConfigAdv**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putTranscoderAppConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/adv | Updates the Advanced Transcoder configuration for the specified Application
[**putTranscoderEncodeAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putTranscoderEncodeAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName} | Updates the specified Trancoder Encode configuration
[**putTranscoderEncodeAppConfigAdv**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putTranscoderEncodeAppConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName}/adv | Updates the Advanced Transcoder Encode configuration
[**putTranscoderOverlayDecodeAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putTranscoderOverlayDecodeAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/decode/overlays/{overlayName} | Updates the specified Trancoder Overlay Decode configuration
[**putTranscoderOverlayEncodeAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putTranscoderOverlayEncodeAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName}/overlays/{overlayName} | Updates the specified Trancoder Overlay Encode configuration
[**putTranscoderStreamNameGroupAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putTranscoderStreamNameGroupAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/streamnamegroups/{groupName} | Updates the specified Trancoder StreamNameGroup configuration
[**putTranscoderTemplateAppAction**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putTranscoderTemplateAppAction) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/actions/{action} | 
[**putTranscoderTemplateAppConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putTranscoderTemplateAppConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName} | Updates the specified Trancoder Template configuration
[**putTranscoderTemplateAppConfigAdv**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putTranscoderTemplateAppConfigAdv) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/transcoder/templates/{templateName}/adv | Updates the Advanced Transcoder Template configuration
[**putVerimatrixStreamMapsConfig**](V2serversserverNamevhostsvhostNameapplicationsApi.md#putVerimatrixStreamMapsConfig) | **PUT** /v2/servers/{serverName}/vhosts/{vhostName}/applications/{appName}/drm/verimatrixmapfile | Updates the Verimatrix stream mapfile for the specified Application


# **deleteApplicationConfig**
> deleteApplicationConfig($server_name, $vhost_name, $app_name)

Deletes the specified Application configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $apiInstance->deleteApplicationConfig($server_name, $vhost_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->deleteApplicationConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePublisherAppConfig**
> deletePublisherAppConfig($server_name, $vhost_name, $publisher_name, $app_name)

Deletes the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The vhost name
$publisher_name = "publisher_name_example"; // string | The publisher name
$app_name = "app_name_example"; // string | 

try {
    $apiInstance->deletePublisherAppConfig($server_name, $vhost_name, $publisher_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->deletePublisherAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The vhost name |
 **publisher_name** | **string**| The publisher name |
 **app_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePushPublishStreamAppConfig**
> deletePushPublishStreamAppConfig($server_name, $vhost_name, $app_name, $entry_name)

Deletes the specified PushPublish map entry for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$entry_name = "entry_name_example"; // string | The entry name needed for this REST call

try {
    $apiInstance->deletePushPublishStreamAppConfig($server_name, $vhost_name, $app_name, $entry_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->deletePushPublishStreamAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **entry_name** | **string**| The entry name needed for this REST call |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSDPFileAppConfig**
> deleteSDPFileAppConfig($server_name, $vhost_name, $sdpfile_name, $app_name)

Deletes the specified SDP file

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$sdpfile_name = "sdpfile_name_example"; // string | The SDP file name without the extension
$app_name = "app_name_example"; // string | 

try {
    $apiInstance->deleteSDPFileAppConfig($server_name, $vhost_name, $sdpfile_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->deleteSDPFileAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **sdpfile_name** | **string**| The SDP file name without the extension |
 **app_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSMILFileAppConfig**
> deleteSMILFileAppConfig($server_name, $vhost_name, $smilfile_name, $app_name)

Deletes the specified SMIL File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$smilfile_name = "smilfile_name_example"; // string | The SMIL file name without the extension
$app_name = "app_name_example"; // string | 

try {
    $apiInstance->deleteSMILFileAppConfig($server_name, $vhost_name, $smilfile_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->deleteSMILFileAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **smilfile_name** | **string**| The SMIL file name without the extension |
 **app_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStreamFileAppConfig**
> deleteStreamFileAppConfig($server_name, $vhost_name, $streamfile_name, $app_name)

Deletes the specified Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$streamfile_name = "streamfile_name_example"; // string | The stream file name without the extension
$app_name = "app_name_example"; // string | 

try {
    $apiInstance->deleteStreamFileAppConfig($server_name, $vhost_name, $streamfile_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->deleteStreamFileAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **streamfile_name** | **string**| The stream file name without the extension |
 **app_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranscoderEncodeAppConfig**
> deleteTranscoderEncodeAppConfig($server_name, $vhost_name, $template_name, $encode_name, $app_name)

Deletes the specified Trancoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$encode_name = "encode_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $apiInstance->deleteTranscoderEncodeAppConfig($server_name, $vhost_name, $template_name, $encode_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->deleteTranscoderEncodeAppConfig: ', $e->getMessage(), PHP_EOL;
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
 **app_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranscoderOverlayDecodeAppConfig**
> deleteTranscoderOverlayDecodeAppConfig($server_name, $vhost_name, $template_name, $overlay_name, $app_name)

Deletes the specified Trancoder Overlay Decode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$overlay_name = "overlay_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $apiInstance->deleteTranscoderOverlayDecodeAppConfig($server_name, $vhost_name, $template_name, $overlay_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->deleteTranscoderOverlayDecodeAppConfig: ', $e->getMessage(), PHP_EOL;
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
 **app_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranscoderOverlayEncodeAppConfig**
> deleteTranscoderOverlayEncodeAppConfig($server_name, $vhost_name, $template_name, $overlay_name, $encode_name, $app_name)

Deletes the specified Trancoder Overlay Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$overlay_name = "overlay_name_example"; // string | 
$encode_name = "encode_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $apiInstance->deleteTranscoderOverlayEncodeAppConfig($server_name, $vhost_name, $template_name, $overlay_name, $encode_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->deleteTranscoderOverlayEncodeAppConfig: ', $e->getMessage(), PHP_EOL;
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
 **app_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranscoderStreamNameGroupAppConfig**
> deleteTranscoderStreamNameGroupAppConfig($server_name, $vhost_name, $template_name, $group_name, $app_name)

Deletes the specified Trancoder StreamNameGroup configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$group_name = "group_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $apiInstance->deleteTranscoderStreamNameGroupAppConfig($server_name, $vhost_name, $template_name, $group_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->deleteTranscoderStreamNameGroupAppConfig: ', $e->getMessage(), PHP_EOL;
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
 **app_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTranscoderTemplateAppConfig**
> deleteTranscoderTemplateAppConfig($server_name, $vhost_name, $template_name, $app_name)

Deletes the specified Trancoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $apiInstance->deleteTranscoderTemplateAppConfig($server_name, $vhost_name, $template_name, $app_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->deleteTranscoderTemplateAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApplicationConfig**
> \Swagger\Client\Model\ApplicationConfig getApplicationConfig($server_name, $vhost_name, $app_name)

Retrieves the specified Application configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getApplicationConfig($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getApplicationConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\ApplicationConfig**](../Model/ApplicationConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApplicationConfigAdv**
> \Swagger\Client\Model\ApplicationConfigAdv getApplicationConfigAdv($server_name, $vhost_name, $app_name)

Retrieves the specified advanced Application configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getApplicationConfigAdv($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getApplicationConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\ApplicationConfigAdv**](../Model/ApplicationConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApplicationsConfig**
> \Swagger\Client\Model\ApplicationsConfig getApplicationsConfig($server_name, $vhost_name)

Retrieves the list of Applications for the specifed vhost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 

try {
    $result = $apiInstance->getApplicationsConfig($server_name, $vhost_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getApplicationsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\ApplicationsConfig**](../Model/ApplicationsConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuyDRMStreamMapsConfig**
> \Swagger\Client\Model\BuyDRMStreamMapsConfig getBuyDRMStreamMapsConfig($server_name, $vhost_name, $app_name)

Retrieves the BuyDRM stream mapfile for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getBuyDRMStreamMapsConfig($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getBuyDRMStreamMapsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\BuyDRMStreamMapsConfig**](../Model/BuyDRMStreamMapsConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentApplicationStatistics**
> \Swagger\Client\Model\CurrentApplicationStatistics getCurrentApplicationStatistics($server_name, $vhost_name, $app_name)

Retrieves the current Application statistics

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getCurrentApplicationStatistics($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getCurrentApplicationStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\CurrentApplicationStatistics**](../Model/CurrentApplicationStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentIncomingStreamStatistics**
> \Swagger\Client\Model\CurrentIncomingStreamStatistics getCurrentIncomingStreamStatistics($server_name, $vhost_name, $app_name, $instance_name, $stream_name)

Retrieves the Current Incoming Stream statistics for the specifed Incoming Stream

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$instance_name = "instance_name_example"; // string | 
$stream_name = "stream_name_example"; // string | 

try {
    $result = $apiInstance->getCurrentIncomingStreamStatistics($server_name, $vhost_name, $app_name, $instance_name, $stream_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getCurrentIncomingStreamStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **instance_name** | **string**|  |
 **stream_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\CurrentIncomingStreamStatistics**](../Model/CurrentIncomingStreamStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDRMConfig**
> \Swagger\Client\Model\DRMConfig getDRMConfig($server_name, $vhost_name, $app_name)

Retrieves the DRM configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getDRMConfig($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getDRMConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\DRMConfig**](../Model/DRMConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDRMConfigAdv**
> \Swagger\Client\Model\DRMConfigAdv getDRMConfigAdv($server_name, $vhost_name, $app_name)

Retrieves the advanced DRM configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getDRMConfigAdv($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getDRMConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\DRMConfigAdv**](../Model/DRMConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDVRConfig**
> \Swagger\Client\Model\DVRConfig getDVRConfig($server_name, $vhost_name, $app_name)

Retrieves the DVR configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getDVRConfig($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getDVRConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\DVRConfig**](../Model/DVRConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDVRConfigAdv**
> \Swagger\Client\Model\DVRConfigAdv getDVRConfigAdv($server_name, $vhost_name, $app_name)

Retrieves the advanced DVR configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getDVRConfigAdv($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getDVRConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\DVRConfigAdv**](../Model/DVRConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDefaultStreamRecorderConfig**
> \Swagger\Client\Model\DefaultStreamRecorderConfig getDefaultStreamRecorderConfig($server_name, $vhost_name, $app_name, $recorder_name, $instance_name)

Retrieves a Stream Recorder of the requested name, popluated with the default values

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$recorder_name = "recorder_name_example"; // string | 
$instance_name = "instance_name_example"; // string | 

try {
    $result = $apiInstance->getDefaultStreamRecorderConfig($server_name, $vhost_name, $app_name, $recorder_name, $instance_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getDefaultStreamRecorderConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **recorder_name** | **string**|  |
 **instance_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\DefaultStreamRecorderConfig**](../Model/DefaultStreamRecorderConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDvrRESTConverterStore**
> \Swagger\Client\Model\DvrRESTConverterStore getDvrRESTConverterStore($server_name, $vhost_name, $app_name, $instance_name, $dvr_store_name)

Retrieves the information about a store/converter associated with the application instance

This API is available in builds 15942 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$instance_name = "instance_name_example"; // string | 
$dvr_store_name = "dvr_store_name_example"; // string | 

try {
    $result = $apiInstance->getDvrRESTConverterStore($server_name, $vhost_name, $app_name, $instance_name, $dvr_store_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getDvrRESTConverterStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **instance_name** | **string**|  |
 **dvr_store_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\DvrRESTConverterStore**](../Model/DvrRESTConverterStore.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDvrRESTConverterStores**
> \Swagger\Client\Model\DvrRESTConverterStores getDvrRESTConverterStores($server_name, $vhost_name, $app_name, $instance_name)

Retrieves the list of DVR stores associated with this application instance

This API is available in builds 15942 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$instance_name = "instance_name_example"; // string | 

try {
    $result = $apiInstance->getDvrRESTConverterStores($server_name, $vhost_name, $app_name, $instance_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getDvrRESTConverterStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **instance_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\DvrRESTConverterStores**](../Model/DvrRESTConverterStores.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricApplicationStatistics**
> \Swagger\Client\Model\HistoricApplicationStatistics getHistoricApplicationStatistics($server_name, $vhost_name, $app_name)

Retrieves the historic Application statistics

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getHistoricApplicationStatistics($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getHistoricApplicationStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\HistoricApplicationStatistics**](../Model/HistoricApplicationStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIncomingStreamConfig**
> \Swagger\Client\Model\IncomingStreamConfig getIncomingStreamConfig($server_name, $vhost_name, $app_name, $instance_name, $stream_name)

Retrieves the Incoming Stream information for the specifed Incoming Stream

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$instance_name = "instance_name_example"; // string | 
$stream_name = "stream_name_example"; // string | 

try {
    $result = $apiInstance->getIncomingStreamConfig($server_name, $vhost_name, $app_name, $instance_name, $stream_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getIncomingStreamConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **instance_name** | **string**|  |
 **stream_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\IncomingStreamConfig**](../Model/IncomingStreamConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInstanceConfig**
> \Swagger\Client\Model\InstanceConfig getInstanceConfig($server_name, $vhost_name, $app_name, $instance_name)

Retrieves the specified Application Instance information

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$instance_name = "instance_name_example"; // string | 

try {
    $result = $apiInstance->getInstanceConfig($server_name, $vhost_name, $app_name, $instance_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getInstanceConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **instance_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\InstanceConfig**](../Model/InstanceConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInstancesConfig**
> \Swagger\Client\Model\InstancesConfig getInstancesConfig($server_name, $vhost_name, $app_name)

Retrieves the list of Instances for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getInstancesConfig($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getInstancesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\InstancesConfig**](../Model/InstancesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLiveEncoderConfig**
> \Swagger\Client\Model\LiveEncoderConfig getLiveEncoderConfig($server_name, $vhost_name, $app_name, $instance_name, $stream_name, $publish_user, $publish_host, $publish_port)

Retrieves the LiveEncoder configuration for the specified IncomingStream

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$instance_name = "instance_name_example"; // string | 
$stream_name = "stream_name_example"; // string | 
$publish_user = "publish_user_example"; // string | The publish username to use in the encoder configuration
$publish_host = "publish_host_example"; // string | The IP address then encoder will publish to
$publish_port = "publish_port_example"; // string | The Port number the encoder will publish to

try {
    $result = $apiInstance->getLiveEncoderConfig($server_name, $vhost_name, $app_name, $instance_name, $stream_name, $publish_user, $publish_host, $publish_port);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getLiveEncoderConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **instance_name** | **string**|  |
 **stream_name** | **string**|  |
 **publish_user** | **string**| The publish username to use in the encoder configuration |
 **publish_host** | **string**| The IP address then encoder will publish to |
 **publish_port** | **string**| The Port number the encoder will publish to |

### Return type

[**\Swagger\Client\Model\LiveEncoderConfig**](../Model/LiveEncoderConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getModulesConfig**
> \Swagger\Client\Model\ModulesConfig getModulesConfig($server_name, $vhost_name, $app_name)

Retrieves the list of Modules for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getModulesConfig($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getModulesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\ModulesConfig**](../Model/ModulesConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublisherAppConfig**
> \Swagger\Client\Model\PublisherAppConfig getPublisherAppConfig($server_name, $vhost_name, $publisher_name, $app_name)

Retrieves the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The vhost name
$publisher_name = "publisher_name_example"; // string | The publisher name
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getPublisherAppConfig($server_name, $vhost_name, $publisher_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getPublisherAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The vhost name |
 **publisher_name** | **string**| The publisher name |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\PublisherAppConfig**](../Model/PublisherAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublishersAppConfig**
> \Swagger\Client\Model\PublishersAppConfig getPublishersAppConfig($server_name, $vhost_name, $app_name)

Retrieves the list of Publishers for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The vhost name
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getPublishersAppConfig($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getPublishersAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The vhost name |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\PublishersAppConfig**](../Model/PublishersAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPushPublishStreamAppConfig**
> \Swagger\Client\Model\PushPublishStreamAppConfig getPushPublishStreamAppConfig($server_name, $vhost_name, $app_name, $entry_name)

Retrieves the specified PushPublish map entry's configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$entry_name = "entry_name_example"; // string | The entry name needed for this REST call

try {
    $result = $apiInstance->getPushPublishStreamAppConfig($server_name, $vhost_name, $app_name, $entry_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getPushPublishStreamAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **entry_name** | **string**| The entry name needed for this REST call |

### Return type

[**\Swagger\Client\Model\PushPublishStreamAppConfig**](../Model/PushPublishStreamAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPushPublishStreamsAppConfig**
> \Swagger\Client\Model\PushPublishStreamsAppConfig getPushPublishStreamsAppConfig($server_name, $vhost_name, $app_name)

Retrieves the list of PushPublish map entries for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getPushPublishStreamsAppConfig($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getPushPublishStreamsAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\PushPublishStreamsAppConfig**](../Model/PushPublishStreamsAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSDPFilesAppConfig**
> \Swagger\Client\Model\SDPFilesAppConfig getSDPFilesAppConfig($server_name, $vhost_name, $app_name)

Retrieves the list of SDP Files for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getSDPFilesAppConfig($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getSDPFilesAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\SDPFilesAppConfig**](../Model/SDPFilesAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSMILFileAppConfig**
> \Swagger\Client\Model\SMILFileAppConfig getSMILFileAppConfig($server_name, $vhost_name, $smilfile_name, $app_name)

Retrieves the specified SMIL File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$smilfile_name = "smilfile_name_example"; // string | The SMIL file name without the extension
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getSMILFileAppConfig($server_name, $vhost_name, $smilfile_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getSMILFileAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **smilfile_name** | **string**| The SMIL file name without the extension |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\SMILFileAppConfig**](../Model/SMILFileAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSMILFilesAppConfig**
> \Swagger\Client\Model\SMILFilesAppConfig getSMILFilesAppConfig($server_name, $vhost_name, $app_name)

Retrieves the list of SMIL Files for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$app_name = "app_name_example"; // string | The application name needed for this REST call

try {
    $result = $apiInstance->getSMILFilesAppConfig($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getSMILFilesAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **app_name** | **string**| The application name needed for this REST call |

### Return type

[**\Swagger\Client\Model\SMILFilesAppConfig**](../Model/SMILFilesAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSecurityConfig**
> \Swagger\Client\Model\SecurityConfig getSecurityConfig($server_name, $vhost_name, $app_name)

Retrieves the Security configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getSecurityConfig($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getSecurityConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\SecurityConfig**](../Model/SecurityConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShortUrlEncoderConfig**
> \Swagger\Client\Model\ShortUrlEncoderConfig getShortUrlEncoderConfig($server_name, $vhost_name, $app_name, $instance_name, $stream_name)

Retrieves the Short URL for the LiveEncoder configuration for the specified IncomingStream

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$instance_name = "instance_name_example"; // string | 
$stream_name = "stream_name_example"; // string | 

try {
    $result = $apiInstance->getShortUrlEncoderConfig($server_name, $vhost_name, $app_name, $instance_name, $stream_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getShortUrlEncoderConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **instance_name** | **string**|  |
 **stream_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\ShortUrlEncoderConfig**](../Model/ShortUrlEncoderConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSourceControlConfig**
> \Swagger\Client\Model\SourceControlConfig getSourceControlConfig($server_name, $vhost_name, $app_name, $instance_name, $stream_name)

Gets information about the Source Control and it's supported features

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$instance_name = "instance_name_example"; // string | 
$stream_name = "stream_name_example"; // string | 

try {
    $result = $apiInstance->getSourceControlConfig($server_name, $vhost_name, $app_name, $instance_name, $stream_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getSourceControlConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **instance_name** | **string**|  |
 **stream_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\SourceControlConfig**](../Model/SourceControlConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamConfigurationConfig**
> \Swagger\Client\Model\StreamConfigurationConfig getStreamConfigurationConfig($server_name, $vhost_name, $app_name)

Retrieves the Stream configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getStreamConfigurationConfig($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getStreamConfigurationConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\StreamConfigurationConfig**](../Model/StreamConfigurationConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamFileAppConfig**
> \Swagger\Client\Model\StreamFileAppConfig getStreamFileAppConfig($server_name, $vhost_name, $streamfile_name, $app_name)

Retrieves the specified Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$streamfile_name = "streamfile_name_example"; // string | The stream file name without the extension
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getStreamFileAppConfig($server_name, $vhost_name, $streamfile_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getStreamFileAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **streamfile_name** | **string**| The stream file name without the extension |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\StreamFileAppConfig**](../Model/StreamFileAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamFileAppConfigAdv**
> \Swagger\Client\Model\StreamFileAppConfigAdv getStreamFileAppConfigAdv($server_name, $vhost_name, $streamfile_name, $app_name)

Retrieves the Advanced Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$streamfile_name = "streamfile_name_example"; // string | The stream file name without the .stream extension
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getStreamFileAppConfigAdv($server_name, $vhost_name, $streamfile_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getStreamFileAppConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **streamfile_name** | **string**| The stream file name without the .stream extension |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\StreamFileAppConfigAdv**](../Model/StreamFileAppConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamFilesAppConfig**
> \Swagger\Client\Model\StreamFilesAppConfig getStreamFilesAppConfig($server_name, $vhost_name, $app_name)

Retrieves the list of Stream Files for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getStreamFilesAppConfig($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getStreamFilesAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\StreamFilesAppConfig**](../Model/StreamFilesAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamGroupConfig**
> \Swagger\Client\Model\StreamGroupConfig getStreamGroupConfig($server_name, $vhost_name, $app_name, $group_name, $instance_name)

Retrieves the specified StreamGroup configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$group_name = "group_name_example"; // string | 
$instance_name = "instance_name_example"; // string | 

try {
    $result = $apiInstance->getStreamGroupConfig($server_name, $vhost_name, $app_name, $group_name, $instance_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getStreamGroupConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **group_name** | **string**|  |
 **instance_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\StreamGroupConfig**](../Model/StreamGroupConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamGroupsConfig**
> \Swagger\Client\Model\StreamGroupsConfig getStreamGroupsConfig($server_name, $vhost_name, $app_name, $instance_name)

Retrieves the list of Stream Groups for the specified Application Instance

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$instance_name = "instance_name_example"; // string | 

try {
    $result = $apiInstance->getStreamGroupsConfig($server_name, $vhost_name, $app_name, $instance_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getStreamGroupsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **instance_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\StreamGroupsConfig**](../Model/StreamGroupsConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamRecorderConfig**
> \Swagger\Client\Model\StreamRecorderConfig getStreamRecorderConfig($server_name, $vhost_name, $app_name, $recorder_name, $instance_name)

Retrieves the specifed Stream Recorder

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$recorder_name = "recorder_name_example"; // string | 
$instance_name = "instance_name_example"; // string | 

try {
    $result = $apiInstance->getStreamRecorderConfig($server_name, $vhost_name, $app_name, $recorder_name, $instance_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getStreamRecorderConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **recorder_name** | **string**|  |
 **instance_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\StreamRecorderConfig**](../Model/StreamRecorderConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamRecordersConfig**
> \Swagger\Client\Model\StreamRecordersConfig getStreamRecordersConfig($server_name, $vhost_name, $app_name, $instance_name)

Retrieves the list of Stream Recorders for the specified Application Instance

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$instance_name = "instance_name_example"; // string | 

try {
    $result = $apiInstance->getStreamRecordersConfig($server_name, $vhost_name, $app_name, $instance_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getStreamRecordersConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **instance_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\StreamRecordersConfig**](../Model/StreamRecordersConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderAppConfig**
> \Swagger\Client\Model\TranscoderAppConfig getTranscoderAppConfig($server_name, $vhost_name, $app_name)

Retrieves the Transcoder configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderAppConfig($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getTranscoderAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderAppConfig**](../Model/TranscoderAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderAppConfigAdv**
> \Swagger\Client\Model\TranscoderAppConfigAdv getTranscoderAppConfigAdv($server_name, $vhost_name, $app_name)

Retrieves the Advanced Transcoder configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderAppConfigAdv($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getTranscoderAppConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderAppConfigAdv**](../Model/TranscoderAppConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderEncodeAppConfig**
> \Swagger\Client\Model\TranscoderEncodeAppConfig getTranscoderEncodeAppConfig($server_name, $vhost_name, $template_name, $encode_name, $app_name)

Retrieves the specified Trancoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$encode_name = "encode_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderEncodeAppConfig($server_name, $vhost_name, $template_name, $encode_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getTranscoderEncodeAppConfig: ', $e->getMessage(), PHP_EOL;
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
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderEncodeAppConfig**](../Model/TranscoderEncodeAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderEncodeAppConfigAdv**
> \Swagger\Client\Model\TranscoderEncodeAppConfigAdv getTranscoderEncodeAppConfigAdv($server_name, $vhost_name, $template_name, $encode_name, $app_name)

Retrieves the Advanced Transcoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$encode_name = "encode_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderEncodeAppConfigAdv($server_name, $vhost_name, $template_name, $encode_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getTranscoderEncodeAppConfigAdv: ', $e->getMessage(), PHP_EOL;
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
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderEncodeAppConfigAdv**](../Model/TranscoderEncodeAppConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderEncodesAppConfig**
> \Swagger\Client\Model\TranscoderEncodesAppConfig getTranscoderEncodesAppConfig($server_name, $vhost_name, $template_name, $app_name)

Retrieves the list of Transcoder Encode Configurations for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderEncodesAppConfig($server_name, $vhost_name, $template_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getTranscoderEncodesAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderEncodesAppConfig**](../Model/TranscoderEncodesAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderOverlayDecodeAppConfig**
> \Swagger\Client\Model\TranscoderOverlayDecodeAppConfig getTranscoderOverlayDecodeAppConfig($server_name, $vhost_name, $template_name, $overlay_name, $app_name)

Retrieves the specified Trancoder Overlay Decode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$overlay_name = "overlay_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderOverlayDecodeAppConfig($server_name, $vhost_name, $template_name, $overlay_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getTranscoderOverlayDecodeAppConfig: ', $e->getMessage(), PHP_EOL;
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
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderOverlayDecodeAppConfig**](../Model/TranscoderOverlayDecodeAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderOverlayEncodeAppConfig**
> \Swagger\Client\Model\TranscoderOverlayEncodeAppConfig getTranscoderOverlayEncodeAppConfig($server_name, $vhost_name, $template_name, $overlay_name, $encode_name, $app_name)

Retrieves the specified Trancoder Overlay Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$overlay_name = "overlay_name_example"; // string | 
$encode_name = "encode_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderOverlayEncodeAppConfig($server_name, $vhost_name, $template_name, $overlay_name, $encode_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getTranscoderOverlayEncodeAppConfig: ', $e->getMessage(), PHP_EOL;
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
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderOverlayEncodeAppConfig**](../Model/TranscoderOverlayEncodeAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderStreamNameGroupAppConfig**
> \Swagger\Client\Model\TranscoderStreamNameGroupAppConfig getTranscoderStreamNameGroupAppConfig($server_name, $vhost_name, $template_name, $group_name, $app_name)

Retrieves the specified Trancoder StreamNameGroup configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$group_name = "group_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderStreamNameGroupAppConfig($server_name, $vhost_name, $template_name, $group_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getTranscoderStreamNameGroupAppConfig: ', $e->getMessage(), PHP_EOL;
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
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderStreamNameGroupAppConfig**](../Model/TranscoderStreamNameGroupAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderStreamNameGroupsAppConfig**
> \Swagger\Client\Model\TranscoderStreamNameGroupsAppConfig getTranscoderStreamNameGroupsAppConfig($server_name, $vhost_name, $template_name, $app_name)

Retrieves the list of Transcoder Stream Name Groups for the specified Template

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderStreamNameGroupsAppConfig($server_name, $vhost_name, $template_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getTranscoderStreamNameGroupsAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderStreamNameGroupsAppConfig**](../Model/TranscoderStreamNameGroupsAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderTemplateAppConfig**
> \Swagger\Client\Model\TranscoderTemplateAppConfig getTranscoderTemplateAppConfig($server_name, $vhost_name, $template_name, $app_name)

Retrieves the specified Trancoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderTemplateAppConfig($server_name, $vhost_name, $template_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getTranscoderTemplateAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderTemplateAppConfig**](../Model/TranscoderTemplateAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderTemplateAppConfigAdv**
> \Swagger\Client\Model\TranscoderTemplateAppConfigAdv getTranscoderTemplateAppConfigAdv($server_name, $vhost_name, $template_name, $app_name)

Retrieves the Advanced Transcoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderTemplateAppConfigAdv($server_name, $vhost_name, $template_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getTranscoderTemplateAppConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderTemplateAppConfigAdv**](../Model/TranscoderTemplateAppConfigAdv.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTranscoderTemplatesAppConfig**
> \Swagger\Client\Model\TranscoderTemplatesAppConfig getTranscoderTemplatesAppConfig($server_name, $vhost_name, $app_name)

Retrieves the list of Transcoder Template Configurations for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getTranscoderTemplatesAppConfig($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getTranscoderTemplatesAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\TranscoderTemplatesAppConfig**](../Model/TranscoderTemplatesAppConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVerimatrixStreamMapsConfig**
> \Swagger\Client\Model\VerimatrixStreamMapsConfig getVerimatrixStreamMapsConfig($server_name, $vhost_name, $app_name)

Retrieves the Verimatrix stream mapfile for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 

try {
    $result = $apiInstance->getVerimatrixStreamMapsConfig($server_name, $vhost_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->getVerimatrixStreamMapsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\VerimatrixStreamMapsConfig**](../Model/VerimatrixStreamMapsConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApplicationConfig**
> postApplicationConfig($server_name, $vhost_name, $app_name, $body)

Adds the specified Application configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\ApplicationConfig(); // \Swagger\Client\Model\ApplicationConfig | 

try {
    $apiInstance->postApplicationConfig($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->postApplicationConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\ApplicationConfig**](../Model/ApplicationConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApplicationConfigAdv**
> postApplicationConfigAdv($server_name, $vhost_name, $app_name, $body)

Adds the specified advanced Application configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\ApplicationConfigAdv(); // \Swagger\Client\Model\ApplicationConfigAdv | 

try {
    $apiInstance->postApplicationConfigAdv($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->postApplicationConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\ApplicationConfigAdv**](../Model/ApplicationConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApplicationsConfig**
> postApplicationsConfig($server_name, $vhost_name, $body)

Adds an Application to the list of Applications  for the specifed vhost

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$body = new \Swagger\Client\Model\ApplicationConfig(); // \Swagger\Client\Model\ApplicationConfig | 

try {
    $apiInstance->postApplicationsConfig($server_name, $vhost_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->postApplicationsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\ApplicationConfig**](../Model/ApplicationConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPublisherAppConfig**
> postPublisherAppConfig($server_name, $vhost_name, $publisher_name, $app_name, $body)

Adds the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The vhost name
$publisher_name = "publisher_name_example"; // string | The publisher name
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\PublisherAppConfig(); // \Swagger\Client\Model\PublisherAppConfig | 

try {
    $apiInstance->postPublisherAppConfig($server_name, $vhost_name, $publisher_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->postPublisherAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The vhost name |
 **publisher_name** | **string**| The publisher name |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\PublisherAppConfig**](../Model/PublisherAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPublishersAppConfig**
> postPublishersAppConfig($server_name, $vhost_name, $app_name, $body)

Add a Publisher to list of Publishers for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The vhost name
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\PublisherAppConfig(); // \Swagger\Client\Model\PublisherAppConfig | 

try {
    $apiInstance->postPublishersAppConfig($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->postPublishersAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The vhost name |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\PublisherAppConfig**](../Model/PublisherAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPushPublishStreamAppConfig**
> postPushPublishStreamAppConfig($server_name, $vhost_name, $app_name, $entry_name, $body)

Adds the specified PushPublish map entry for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$entry_name = "entry_name_example"; // string | The entry name needed for this REST call
$body = new \Swagger\Client\Model\PushPublishStreamAppConfig(); // \Swagger\Client\Model\PushPublishStreamAppConfig | 

try {
    $apiInstance->postPushPublishStreamAppConfig($server_name, $vhost_name, $app_name, $entry_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->postPushPublishStreamAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **entry_name** | **string**| The entry name needed for this REST call |
 **body** | [**\Swagger\Client\Model\PushPublishStreamAppConfig**](../Model/PushPublishStreamAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPushPublishStreamsAppConfig**
> postPushPublishStreamsAppConfig($server_name, $vhost_name, $app_name, $body)

Adds a PushPublish map entry to list of PushPublish map entries for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\PushPublishStreamAppConfig(); // \Swagger\Client\Model\PushPublishStreamAppConfig | 

try {
    $apiInstance->postPushPublishStreamsAppConfig($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->postPushPublishStreamsAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\PushPublishStreamAppConfig**](../Model/PushPublishStreamAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSMILFileAppConfig**
> postSMILFileAppConfig($server_name, $vhost_name, $smilfile_name, $app_name, $body)

Adds the specified SMIL File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$smilfile_name = "smilfile_name_example"; // string | The SMIL file name without the extension
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\SMILFileAppConfig(); // \Swagger\Client\Model\SMILFileAppConfig | 

try {
    $apiInstance->postSMILFileAppConfig($server_name, $vhost_name, $smilfile_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->postSMILFileAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **smilfile_name** | **string**| The SMIL file name without the extension |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\SMILFileAppConfig**](../Model/SMILFileAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSMILFilesAppConfig**
> postSMILFilesAppConfig($server_name, $vhost_name, $app_name, $body)

Adds a SMIL File to the list of SMIL Files for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$app_name = "app_name_example"; // string | The application name needed for this REST call
$body = new \Swagger\Client\Model\SMILFileAppConfig(); // \Swagger\Client\Model\SMILFileAppConfig | 

try {
    $apiInstance->postSMILFilesAppConfig($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->postSMILFilesAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **app_name** | **string**| The application name needed for this REST call |
 **body** | [**\Swagger\Client\Model\SMILFileAppConfig**](../Model/SMILFileAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStreamFileAppConfig**
> postStreamFileAppConfig($server_name, $vhost_name, $streamfile_name, $app_name, $body)

Adds the specified Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$streamfile_name = "streamfile_name_example"; // string | The stream file name without the extension
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\StreamFileAppConfig(); // \Swagger\Client\Model\StreamFileAppConfig | 

try {
    $apiInstance->postStreamFileAppConfig($server_name, $vhost_name, $streamfile_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->postStreamFileAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **streamfile_name** | **string**| The stream file name without the extension |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\StreamFileAppConfig**](../Model/StreamFileAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStreamFilesAppConfig**
> postStreamFilesAppConfig($server_name, $vhost_name, $app_name, $body)

Adds a Stream File to the list of Stream Files for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\StreamFileAppConfig(); // \Swagger\Client\Model\StreamFileAppConfig | 

try {
    $apiInstance->postStreamFilesAppConfig($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->postStreamFilesAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\StreamFileAppConfig**](../Model/StreamFileAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStreamRecorderConfig**
> postStreamRecorderConfig($server_name, $vhost_name, $app_name, $recorder_name, $instance_name, $body)

Creates a new Stream Recorder and starts recording

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$recorder_name = "recorder_name_example"; // string | 
$instance_name = "instance_name_example"; // string | 
$body = new \Swagger\Client\Model\StreamRecorderConfig(); // \Swagger\Client\Model\StreamRecorderConfig | 

try {
    $apiInstance->postStreamRecorderConfig($server_name, $vhost_name, $app_name, $recorder_name, $instance_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->postStreamRecorderConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **recorder_name** | **string**|  |
 **instance_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\StreamRecorderConfig**](../Model/StreamRecorderConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStreamRecordersConfig**
> postStreamRecordersConfig($server_name, $vhost_name, $app_name, $instance_name, $body)

Creates a new Stream Recorder in the specified Application Instance and starts recording

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$instance_name = "instance_name_example"; // string | 
$body = new \Swagger\Client\Model\StreamRecorderConfig(); // \Swagger\Client\Model\StreamRecorderConfig | 

try {
    $apiInstance->postStreamRecordersConfig($server_name, $vhost_name, $app_name, $instance_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->postStreamRecordersConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **instance_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\StreamRecorderConfig**](../Model/StreamRecorderConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderEncodeAppConfig**
> postTranscoderEncodeAppConfig($server_name, $vhost_name, $template_name, $encode_name, $app_name, $body)

Adds the specified Trancoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$encode_name = "encode_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderEncodeAppConfig(); // \Swagger\Client\Model\TranscoderEncodeAppConfig | 

try {
    $apiInstance->postTranscoderEncodeAppConfig($server_name, $vhost_name, $template_name, $encode_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->postTranscoderEncodeAppConfig: ', $e->getMessage(), PHP_EOL;
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
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderEncodeAppConfig**](../Model/TranscoderEncodeAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderEncodesAppConfig**
> postTranscoderEncodesAppConfig($server_name, $vhost_name, $template_name, $app_name, $body)

Adds a Transcoder Encode Configuration to the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderEncodeAppConfig(); // \Swagger\Client\Model\TranscoderEncodeAppConfig | 

try {
    $apiInstance->postTranscoderEncodesAppConfig($server_name, $vhost_name, $template_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->postTranscoderEncodesAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderEncodeAppConfig**](../Model/TranscoderEncodeAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderStreamNameGroupAppConfig**
> postTranscoderStreamNameGroupAppConfig($server_name, $vhost_name, $template_name, $group_name, $app_name, $body)

Adds the specified Trancoder StreamNameGroup configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$group_name = "group_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderStreamNameGroupAppConfig(); // \Swagger\Client\Model\TranscoderStreamNameGroupAppConfig | 

try {
    $apiInstance->postTranscoderStreamNameGroupAppConfig($server_name, $vhost_name, $template_name, $group_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->postTranscoderStreamNameGroupAppConfig: ', $e->getMessage(), PHP_EOL;
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
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderStreamNameGroupAppConfig**](../Model/TranscoderStreamNameGroupAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderStreamNameGroupsAppConfig**
> postTranscoderStreamNameGroupsAppConfig($server_name, $vhost_name, $template_name, $app_name, $body)

Adds a Transcoder Stream Name Groups Configuration to the specified Template

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderStreamNameGroupAppConfig(); // \Swagger\Client\Model\TranscoderStreamNameGroupAppConfig | 

try {
    $apiInstance->postTranscoderStreamNameGroupsAppConfig($server_name, $vhost_name, $template_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->postTranscoderStreamNameGroupsAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderStreamNameGroupAppConfig**](../Model/TranscoderStreamNameGroupAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderTemplateAppConfig**
> postTranscoderTemplateAppConfig($server_name, $vhost_name, $template_name, $app_name, $body)

Adds the specified Trancoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderTemplateAppConfig(); // \Swagger\Client\Model\TranscoderTemplateAppConfig | 

try {
    $apiInstance->postTranscoderTemplateAppConfig($server_name, $vhost_name, $template_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->postTranscoderTemplateAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderTemplateAppConfig**](../Model/TranscoderTemplateAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTranscoderTemplatesAppConfig**
> postTranscoderTemplatesAppConfig($server_name, $vhost_name, $app_name, $body)

Adds a Transcoder Templates Configuration to the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderTemplateAppConfig(); // \Swagger\Client\Model\TranscoderTemplateAppConfig | 

try {
    $apiInstance->postTranscoderTemplatesAppConfig($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->postTranscoderTemplatesAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderTemplateAppConfig**](../Model/TranscoderTemplateAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWSCRESTProxyConfig**
> postWSCRESTProxyConfig($server_name, $vhost_name, $app_name, $body)

Proxies a WSC REST API request

This API is available in builds 19950 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\WSCRESTProxyConfig(); // \Swagger\Client\Model\WSCRESTProxyConfig | 

try {
    $apiInstance->postWSCRESTProxyConfig($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->postWSCRESTProxyConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\WSCRESTProxyConfig**](../Model/WSCRESTProxyConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putApplicationAction**
> putApplicationAction($server_name, $action, $vhost_name, $app_name, $dst_entry_name)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$app_name = "app_name_example"; // string | The application name needed for this REST call
$dst_entry_name = "dst_entry_name_example"; // string | The destination application name when copying

try {
    $apiInstance->putApplicationAction($server_name, $action, $vhost_name, $app_name, $dst_entry_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putApplicationAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **app_name** | **string**| The application name needed for this REST call |
 **dst_entry_name** | **string**| The destination application name when copying | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putApplicationConfig**
> putApplicationConfig($server_name, $vhost_name, $app_name, $body)

Updates the specified Application configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\ApplicationConfig(); // \Swagger\Client\Model\ApplicationConfig | 

try {
    $apiInstance->putApplicationConfig($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putApplicationConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\ApplicationConfig**](../Model/ApplicationConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putApplicationConfigAdv**
> putApplicationConfigAdv($server_name, $vhost_name, $app_name, $body)

Updates the specified advanced Application configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\ApplicationConfigAdv(); // \Swagger\Client\Model\ApplicationConfigAdv | 

try {
    $apiInstance->putApplicationConfigAdv($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putApplicationConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\ApplicationConfigAdv**](../Model/ApplicationConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putBuyDRMStreamMapsConfig**
> putBuyDRMStreamMapsConfig($server_name, $vhost_name, $app_name, $body)

Updates the BuyDRM stream mapfile for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\BuyDRMStreamMapsConfig(); // \Swagger\Client\Model\BuyDRMStreamMapsConfig | 

try {
    $apiInstance->putBuyDRMStreamMapsConfig($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putBuyDRMStreamMapsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\BuyDRMStreamMapsConfig**](../Model/BuyDRMStreamMapsConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putDRMConfig**
> putDRMConfig($server_name, $vhost_name, $app_name, $body)

Updates the DRM configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\DRMConfig(); // \Swagger\Client\Model\DRMConfig | 

try {
    $apiInstance->putDRMConfig($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putDRMConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\DRMConfig**](../Model/DRMConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putDRMConfigAdv**
> putDRMConfigAdv($server_name, $vhost_name, $app_name, $body)

Updates the advanced DRM configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\DRMConfigAdv(); // \Swagger\Client\Model\DRMConfigAdv | 

try {
    $apiInstance->putDRMConfigAdv($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putDRMConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\DRMConfigAdv**](../Model/DRMConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putDVRConfig**
> putDVRConfig($server_name, $vhost_name, $app_name, $body)

Updates the DVR configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\DVRConfig(); // \Swagger\Client\Model\DVRConfig | 

try {
    $apiInstance->putDVRConfig($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putDVRConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\DVRConfig**](../Model/DVRConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putDVRConfigAdv**
> putDVRConfigAdv($server_name, $vhost_name, $app_name, $body)

Updates the advanced DVR configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\DVRConfigAdv(); // \Swagger\Client\Model\DVRConfigAdv | 

try {
    $apiInstance->putDVRConfigAdv($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putDVRConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\DVRConfigAdv**](../Model/DVRConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putDvrRESTConverterStoreAction**
> putDvrRESTConverterStoreAction($server_name, $action, $vhost_name, $app_name, $instance_name, $dvr_store_name)



This API is available in builds 15942 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$app_name = "app_name_example"; // string | The application name needed for this REST call
$instance_name = "instance_name_example"; // string | The application instance name needed for this REST call
$dvr_store_name = "dvr_store_name_example"; // string | The nDVR store name needed for this REST call

try {
    $apiInstance->putDvrRESTConverterStoreAction($server_name, $action, $vhost_name, $app_name, $instance_name, $dvr_store_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putDvrRESTConverterStoreAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **app_name** | **string**| The application name needed for this REST call |
 **instance_name** | **string**| The application instance name needed for this REST call |
 **dvr_store_name** | **string**| The nDVR store name needed for this REST call |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putDvrRESTConverterStoresAction**
> putDvrRESTConverterStoresAction($server_name, $action, $vhost_name, $app_name, $instance_name, $dvr_converter_default_file_destination, $dvr_converter_debug_conversions, $dvr_converter_continue_on_source_errors, $dvr_converter_audio_video_sync_enable, $dvr_converter_audio_video_max_offset, $dvr_converter_audio_video_max_buffer, $dvr_converter_start_time, $dvr_converter_end_time, $dvr_converter_duration, $dvr_converter_output_filename, $dvr_converter_store_list)



This API is available in builds 15942 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$app_name = "app_name_example"; // string | The application name needed for this REST call
$instance_name = "instance_name_example"; // string | The application instance name needed for this REST call
$dvr_converter_default_file_destination = "dvr_converter_default_file_destination_example"; // string | The file location to use when converting a nDVR store, the default is configured as the StorageDir in the application in use
$dvr_converter_debug_conversions = "dvr_converter_debug_conversions_example"; // string | Indicates if the conversion should have debugging enabled, can be true or false, default is false
$dvr_converter_continue_on_source_errors = "dvr_converter_continue_on_source_errors_example"; // string | Indicates if the conversion should continue even if errors are detected, can be true or false, default is true
$dvr_converter_audio_video_sync_enable = "dvr_converter_audio_video_sync_enable_example"; // string | Indicates if the audio/video offset should be detected and conversion only started after the sync in no longer detected or over default allowable time. Can be true or false, default is false
$dvr_converter_audio_video_max_offset = "200"; // string | Indicates the maximum audio/video timecodes can be out of sync
$dvr_converter_audio_video_max_buffer = "8000"; // string | Indicates the maximum time a correct audio/video sync will be searched for before giving up
$dvr_converter_start_time = "dvr_converter_start_time_example"; // string | A start time in UTC from where the conversion should start in the store, default is the first entry in the store
$dvr_converter_end_time = "dvr_converter_end_time_example"; // string | A end time in UTC  where the conversion should end in the store, default is to the end of the store
$dvr_converter_duration = "dvr_converter_duration_example"; // string | A duration for the conversion either added to the start or subtracted from the end time, if you use duration you can not use start and end
$dvr_converter_output_filename = "dvr_converter_output_filename_example"; // string | Indicates the output filename if not using the default, which is the name of the store being converted
$dvr_converter_store_list = "dvr_converter_store_list_example"; // string | The comma-separated list of stores to convert

try {
    $apiInstance->putDvrRESTConverterStoresAction($server_name, $action, $vhost_name, $app_name, $instance_name, $dvr_converter_default_file_destination, $dvr_converter_debug_conversions, $dvr_converter_continue_on_source_errors, $dvr_converter_audio_video_sync_enable, $dvr_converter_audio_video_max_offset, $dvr_converter_audio_video_max_buffer, $dvr_converter_start_time, $dvr_converter_end_time, $dvr_converter_duration, $dvr_converter_output_filename, $dvr_converter_store_list);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putDvrRESTConverterStoresAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **app_name** | **string**| The application name needed for this REST call |
 **instance_name** | **string**| The application instance name needed for this REST call |
 **dvr_converter_default_file_destination** | **string**| The file location to use when converting a nDVR store, the default is configured as the StorageDir in the application in use | [optional]
 **dvr_converter_debug_conversions** | **string**| Indicates if the conversion should have debugging enabled, can be true or false, default is false | [optional]
 **dvr_converter_continue_on_source_errors** | **string**| Indicates if the conversion should continue even if errors are detected, can be true or false, default is true | [optional]
 **dvr_converter_audio_video_sync_enable** | **string**| Indicates if the audio/video offset should be detected and conversion only started after the sync in no longer detected or over default allowable time. Can be true or false, default is false | [optional]
 **dvr_converter_audio_video_max_offset** | **string**| Indicates the maximum audio/video timecodes can be out of sync | [optional] [default to 200]
 **dvr_converter_audio_video_max_buffer** | **string**| Indicates the maximum time a correct audio/video sync will be searched for before giving up | [optional] [default to 8000]
 **dvr_converter_start_time** | **string**| A start time in UTC from where the conversion should start in the store, default is the first entry in the store | [optional]
 **dvr_converter_end_time** | **string**| A end time in UTC  where the conversion should end in the store, default is to the end of the store | [optional]
 **dvr_converter_duration** | **string**| A duration for the conversion either added to the start or subtracted from the end time, if you use duration you can not use start and end | [optional]
 **dvr_converter_output_filename** | **string**| Indicates the output filename if not using the default, which is the name of the store being converted | [optional]
 **dvr_converter_store_list** | **string**| The comma-separated list of stores to convert | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putIncomingStreamAction**
> putIncomingStreamAction($server_name, $action, $vhost_name, $app_name, $instance_name, $stream_name)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$app_name = "app_name_example"; // string | The application name needed for this REST call
$instance_name = "instance_name_example"; // string | The application instance name needed for this REST call
$stream_name = "stream_name_example"; // string | The stream name needed for this REST call

try {
    $apiInstance->putIncomingStreamAction($server_name, $action, $vhost_name, $app_name, $instance_name, $stream_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putIncomingStreamAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **app_name** | **string**| The application name needed for this REST call |
 **instance_name** | **string**| The application instance name needed for this REST call |
 **stream_name** | **string**| The stream name needed for this REST call |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putInstanceAction**
> putInstanceAction($server_name, $action, $vhost_name, $app_name, $instance_name)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$app_name = "app_name_example"; // string | The application name needed for this REST call
$instance_name = "instance_name_example"; // string | The application instance name needed for this REST call

try {
    $apiInstance->putInstanceAction($server_name, $action, $vhost_name, $app_name, $instance_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putInstanceAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **app_name** | **string**| The application name needed for this REST call |
 **instance_name** | **string**| The application instance name needed for this REST call |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMediaCacheApplicationStoreAction**
> putMediaCacheApplicationStoreAction($server_name, $action, $vhost_name, $app_name, $instance_name, $filename)



This API is available in builds 15942 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$app_name = "app_name_example"; // string | The application name needed for this REST call
$instance_name = "instance_name_example"; // string | The application instance name needed for this REST call
$filename = "filename_example"; // string | The file or stream name item to be used in all rest action requests

try {
    $apiInstance->putMediaCacheApplicationStoreAction($server_name, $action, $vhost_name, $app_name, $instance_name, $filename);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putMediaCacheApplicationStoreAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **app_name** | **string**| The application name needed for this REST call |
 **instance_name** | **string**| The application instance name needed for this REST call |
 **filename** | **string**| The file or stream name item to be used in all rest action requests | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putModulesConfig**
> putModulesConfig($server_name, $vhost_name, $app_name, $body)

Updates the list of Modules for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\ModulesConfig(); // \Swagger\Client\Model\ModulesConfig | 

try {
    $apiInstance->putModulesConfig($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putModulesConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\ModulesConfig**](../Model/ModulesConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPublisherAppConfig**
> putPublisherAppConfig($server_name, $vhost_name, $publisher_name, $app_name, $body)

Updates the specified Publisher configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | The vhost name
$publisher_name = "publisher_name_example"; // string | The publisher name
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\PublisherAppConfig(); // \Swagger\Client\Model\PublisherAppConfig | 

try {
    $apiInstance->putPublisherAppConfig($server_name, $vhost_name, $publisher_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putPublisherAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**| The vhost name |
 **publisher_name** | **string**| The publisher name |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\PublisherAppConfig**](../Model/PublisherAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPushPublishStreamAppAction**
> putPushPublishStreamAppAction($server_name, $action, $vhost_name, $app_name, $entry_name, $dst_entry_name)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$app_name = "app_name_example"; // string | The application name needed for this REST call
$entry_name = "entry_name_example"; // string | The map entry name needed for this REST call
$dst_entry_name = "dst_entry_name_example"; // string | The destination entryName when copying

try {
    $apiInstance->putPushPublishStreamAppAction($server_name, $action, $vhost_name, $app_name, $entry_name, $dst_entry_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putPushPublishStreamAppAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **app_name** | **string**| The application name needed for this REST call |
 **entry_name** | **string**| The map entry name needed for this REST call |
 **dst_entry_name** | **string**| The destination entryName when copying | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPushPublishStreamAppConfig**
> putPushPublishStreamAppConfig($server_name, $vhost_name, $app_name, $entry_name, $body)

Updates the specified PushPublish map entry's configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$entry_name = "entry_name_example"; // string | The entry name needed for this REST call
$body = new \Swagger\Client\Model\PushPublishStreamAppConfig(); // \Swagger\Client\Model\PushPublishStreamAppConfig | 

try {
    $apiInstance->putPushPublishStreamAppConfig($server_name, $vhost_name, $app_name, $entry_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putPushPublishStreamAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **entry_name** | **string**| The entry name needed for this REST call |
 **body** | [**\Swagger\Client\Model\PushPublishStreamAppConfig**](../Model/PushPublishStreamAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPushPublishStreamsAppConfig**
> putPushPublishStreamsAppConfig($server_name, $vhost_name, $app_name, $body)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\PushPublishStreamAppConfig(); // \Swagger\Client\Model\PushPublishStreamAppConfig | 

try {
    $apiInstance->putPushPublishStreamsAppConfig($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putPushPublishStreamsAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\PushPublishStreamAppConfig**](../Model/PushPublishStreamAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSDPFileAppAction**
> putSDPFileAppAction($server_name, $action, $media_caster_type, $vhost_name, $app_name, $sdpfile_name, $connect_app_name, $app_ınstance)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$media_caster_type = "rtp"; // string | The MediaCasterType to use for the connection
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$app_name = "app_name_example"; // string | The application name needed for this REST call
$sdpfile_name = "sdpfile_name_example"; // string | The sdp file name needed for this REST call
$connect_app_name = "connect_app_name_example"; // string | The name of the application to connect to
$app_ınstance = "app_ınstance_example"; // string | The name of the application instance to connect to

try {
    $apiInstance->putSDPFileAppAction($server_name, $action, $media_caster_type, $vhost_name, $app_name, $sdpfile_name, $connect_app_name, $app_ınstance);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putSDPFileAppAction: ', $e->getMessage(), PHP_EOL;
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
 **app_name** | **string**| The application name needed for this REST call |
 **sdpfile_name** | **string**| The sdp file name needed for this REST call |
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

# **putSMILFileAppAction**
> putSMILFileAppAction($server_name, $action, $media_caster_type, $vhost_name, $app_name, $smilfile_name, $connect_app_name, $app_ınstance, $dst_entry_name)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$media_caster_type = "rtp"; // string | The MediaCasterType to use for the connection
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$app_name = "app_name_example"; // string | The application name needed for this REST call
$smilfile_name = "smilfile_name_example"; // string | The SMIL file name needed for this REST call
$connect_app_name = "connect_app_name_example"; // string | The name of the application to connect to
$app_ınstance = "app_ınstance_example"; // string | The name of the application instance to connect to
$dst_entry_name = "dst_entry_name_example"; // string | The destination SMIL file name when copying

try {
    $apiInstance->putSMILFileAppAction($server_name, $action, $media_caster_type, $vhost_name, $app_name, $smilfile_name, $connect_app_name, $app_ınstance, $dst_entry_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putSMILFileAppAction: ', $e->getMessage(), PHP_EOL;
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
 **app_name** | **string**| The application name needed for this REST call |
 **smilfile_name** | **string**| The SMIL file name needed for this REST call |
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

# **putSMILFileAppConfig**
> putSMILFileAppConfig($server_name, $vhost_name, $smilfile_name, $app_name, $body)

Updates the specified SMIL File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$smilfile_name = "smilfile_name_example"; // string | The SMIL file name without the extension
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\SMILFileAppConfig(); // \Swagger\Client\Model\SMILFileAppConfig | 

try {
    $apiInstance->putSMILFileAppConfig($server_name, $vhost_name, $smilfile_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putSMILFileAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **smilfile_name** | **string**| The SMIL file name without the extension |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\SMILFileAppConfig**](../Model/SMILFileAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSecurityConfig**
> putSecurityConfig($server_name, $vhost_name, $app_name, $body)

Updates the Security configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\SecurityConfig(); // \Swagger\Client\Model\SecurityConfig | 

try {
    $apiInstance->putSecurityConfig($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putSecurityConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\SecurityConfig**](../Model/SecurityConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSourceControlAction**
> putSourceControlAction($server_name, $action, $vhost_name, $app_name, $instance_name, $stream_name, $direction)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhost_name = "vhost_name_example"; // string | The VHost name
$app_name = "app_name_example"; // string | The Application name
$instance_name = "instance_name_example"; // string | The Application Instance name
$stream_name = "stream_name_example"; // string | The Stream name
$direction = "direction_example"; // string | No query params available for captureImage. Optional query params for zoom and panTilt:   ZoomIn, ZoomOut,   PanTiltUp, PanTiltRight, PanTiltDown, PanTiltLeft, PanTiltHome, PanTiltUpRight, PanTiltDownRight, PanTiltDownLeft, PanTiltUpLeft

try {
    $apiInstance->putSourceControlAction($server_name, $action, $vhost_name, $app_name, $instance_name, $stream_name, $direction);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putSourceControlAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhost_name** | **string**| The VHost name |
 **app_name** | **string**| The Application name |
 **instance_name** | **string**| The Application Instance name |
 **stream_name** | **string**| The Stream name |
 **direction** | **string**| No query params available for captureImage. Optional query params for zoom and panTilt:   ZoomIn, ZoomOut,   PanTiltUp, PanTiltRight, PanTiltDown, PanTiltLeft, PanTiltHome, PanTiltUpRight, PanTiltDownRight, PanTiltDownLeft, PanTiltUpLeft | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStreamConfigurationConfig**
> putStreamConfigurationConfig($server_name, $vhost_name, $app_name, $body)

Updates the Stream configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\StreamConfigurationConfig(); // \Swagger\Client\Model\StreamConfigurationConfig | 

try {
    $apiInstance->putStreamConfigurationConfig($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putStreamConfigurationConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\StreamConfigurationConfig**](../Model/StreamConfigurationConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStreamFileAppAction**
> putStreamFileAppAction($server_name, $action, $media_caster_type, $vhost_name, $app_name, $streamfile_name, $connect_app_name, $app_ınstance, $dst_entry_name)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$media_caster_type = "rtp"; // string | The MediaCasterType to use for the connection
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$app_name = "app_name_example"; // string | The application name needed for this REST call
$streamfile_name = "streamfile_name_example"; // string | The stream file, file name needed for this REST call
$connect_app_name = "connect_app_name_example"; // string | The name of the application to connect to
$app_ınstance = "app_ınstance_example"; // string | The name of the application instance to connect to
$dst_entry_name = "dst_entry_name_example"; // string | The destination stream file name when copying

try {
    $apiInstance->putStreamFileAppAction($server_name, $action, $media_caster_type, $vhost_name, $app_name, $streamfile_name, $connect_app_name, $app_ınstance, $dst_entry_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putStreamFileAppAction: ', $e->getMessage(), PHP_EOL;
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
 **app_name** | **string**| The application name needed for this REST call |
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

# **putStreamFileAppConfig**
> putStreamFileAppConfig($server_name, $vhost_name, $streamfile_name, $app_name, $body)

Updates the specified Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$streamfile_name = "streamfile_name_example"; // string | The stream file name without the extension
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\StreamFileAppConfig(); // \Swagger\Client\Model\StreamFileAppConfig | 

try {
    $apiInstance->putStreamFileAppConfig($server_name, $vhost_name, $streamfile_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putStreamFileAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **streamfile_name** | **string**| The stream file name without the extension |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\StreamFileAppConfig**](../Model/StreamFileAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStreamFileAppConfigAdv**
> putStreamFileAppConfigAdv($server_name, $vhost_name, $streamfile_name, $app_name, $body)

Updates the Advanced Stream File configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$streamfile_name = "streamfile_name_example"; // string | The stream file name without the .stream extension
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\StreamFileAppConfigAdv(); // \Swagger\Client\Model\StreamFileAppConfigAdv | 

try {
    $apiInstance->putStreamFileAppConfigAdv($server_name, $vhost_name, $streamfile_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putStreamFileAppConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **streamfile_name** | **string**| The stream file name without the .stream extension |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\StreamFileAppConfigAdv**](../Model/StreamFileAppConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStreamGroupAction**
> putStreamGroupAction($server_name, $action, $vhost_name, $app_name, $instance_name, $group_name)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$app_name = "app_name_example"; // string | The application name needed for this REST call
$instance_name = "instance_name_example"; // string | The application instance name needed for this REST call
$group_name = "group_name_example"; // string | The group name needed for this REST call

try {
    $apiInstance->putStreamGroupAction($server_name, $action, $vhost_name, $app_name, $instance_name, $group_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putStreamGroupAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **app_name** | **string**| The application name needed for this REST call |
 **instance_name** | **string**| The application instance name needed for this REST call |
 **group_name** | **string**| The group name needed for this REST call |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putStreamRecorderAction**
> putStreamRecorderAction($server_name, $action, $vhost_name, $app_name, $instance_name, $recorder_name)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$app_name = "app_name_example"; // string | The application name needed for this REST call
$instance_name = "instance_name_example"; // string | The application instance name needed for this REST call
$recorder_name = "recorder_name_example"; // string | The recorder name (stream name) needed for this REST call

try {
    $apiInstance->putStreamRecorderAction($server_name, $action, $vhost_name, $app_name, $instance_name, $recorder_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putStreamRecorderAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **app_name** | **string**| The application name needed for this REST call |
 **instance_name** | **string**| The application instance name needed for this REST call |
 **recorder_name** | **string**| The recorder name (stream name) needed for this REST call |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderAppConfig**
> putTranscoderAppConfig($server_name, $vhost_name, $app_name, $body)

Updates the Transcoder configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderAppConfig(); // \Swagger\Client\Model\TranscoderAppConfig | 

try {
    $apiInstance->putTranscoderAppConfig($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putTranscoderAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderAppConfig**](../Model/TranscoderAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderAppConfigAdv**
> putTranscoderAppConfigAdv($server_name, $vhost_name, $app_name, $body)

Updates the Advanced Transcoder configuration for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderAppConfigAdv(); // \Swagger\Client\Model\TranscoderAppConfigAdv | 

try {
    $apiInstance->putTranscoderAppConfigAdv($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putTranscoderAppConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderAppConfigAdv**](../Model/TranscoderAppConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderEncodeAppConfig**
> putTranscoderEncodeAppConfig($server_name, $vhost_name, $template_name, $encode_name, $app_name, $body)

Updates the specified Trancoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$encode_name = "encode_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderEncodeAppConfig(); // \Swagger\Client\Model\TranscoderEncodeAppConfig | 

try {
    $apiInstance->putTranscoderEncodeAppConfig($server_name, $vhost_name, $template_name, $encode_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putTranscoderEncodeAppConfig: ', $e->getMessage(), PHP_EOL;
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
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderEncodeAppConfig**](../Model/TranscoderEncodeAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderEncodeAppConfigAdv**
> putTranscoderEncodeAppConfigAdv($server_name, $vhost_name, $template_name, $encode_name, $app_name, $body)

Updates the Advanced Transcoder Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$encode_name = "encode_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderEncodeAppConfigAdv(); // \Swagger\Client\Model\TranscoderEncodeAppConfigAdv | 

try {
    $apiInstance->putTranscoderEncodeAppConfigAdv($server_name, $vhost_name, $template_name, $encode_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putTranscoderEncodeAppConfigAdv: ', $e->getMessage(), PHP_EOL;
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
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderEncodeAppConfigAdv**](../Model/TranscoderEncodeAppConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderOverlayDecodeAppConfig**
> putTranscoderOverlayDecodeAppConfig($server_name, $vhost_name, $template_name, $overlay_name, $app_name, $body)

Updates the specified Trancoder Overlay Decode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$overlay_name = "overlay_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderOverlayDecodeAppConfig(); // \Swagger\Client\Model\TranscoderOverlayDecodeAppConfig | 

try {
    $apiInstance->putTranscoderOverlayDecodeAppConfig($server_name, $vhost_name, $template_name, $overlay_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putTranscoderOverlayDecodeAppConfig: ', $e->getMessage(), PHP_EOL;
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
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderOverlayDecodeAppConfig**](../Model/TranscoderOverlayDecodeAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderOverlayEncodeAppConfig**
> putTranscoderOverlayEncodeAppConfig($server_name, $vhost_name, $template_name, $overlay_name, $encode_name, $app_name, $body)

Updates the specified Trancoder Overlay Encode configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$overlay_name = "overlay_name_example"; // string | 
$encode_name = "encode_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderOverlayEncodeAppConfig(); // \Swagger\Client\Model\TranscoderOverlayEncodeAppConfig | 

try {
    $apiInstance->putTranscoderOverlayEncodeAppConfig($server_name, $vhost_name, $template_name, $overlay_name, $encode_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putTranscoderOverlayEncodeAppConfig: ', $e->getMessage(), PHP_EOL;
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
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderOverlayEncodeAppConfig**](../Model/TranscoderOverlayEncodeAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderStreamNameGroupAppConfig**
> putTranscoderStreamNameGroupAppConfig($server_name, $vhost_name, $template_name, $group_name, $app_name, $body)

Updates the specified Trancoder StreamNameGroup configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$group_name = "group_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderStreamNameGroupAppConfig(); // \Swagger\Client\Model\TranscoderStreamNameGroupAppConfig | 

try {
    $apiInstance->putTranscoderStreamNameGroupAppConfig($server_name, $vhost_name, $template_name, $group_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putTranscoderStreamNameGroupAppConfig: ', $e->getMessage(), PHP_EOL;
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
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderStreamNameGroupAppConfig**](../Model/TranscoderStreamNameGroupAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderTemplateAppAction**
> putTranscoderTemplateAppAction($server_name, $action, $vhost_name, $app_name, $template_name, $dst_entry_name)



This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$action = "action_example"; // string | The action which should be performed by the server
$vhost_name = "vhost_name_example"; // string | The name of the current VHost the action will be performed on
$app_name = "app_name_example"; // string | The application name needed for this REST call
$template_name = "template_name_example"; // string | The template name needed for this REST call
$dst_entry_name = "dst_entry_name_example"; // string | The destination transcode template file name when copying

try {
    $apiInstance->putTranscoderTemplateAppAction($server_name, $action, $vhost_name, $app_name, $template_name, $dst_entry_name);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putTranscoderTemplateAppAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **action** | **string**| The action which should be performed by the server |
 **vhost_name** | **string**| The name of the current VHost the action will be performed on |
 **app_name** | **string**| The application name needed for this REST call |
 **template_name** | **string**| The template name needed for this REST call |
 **dst_entry_name** | **string**| The destination transcode template file name when copying | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderTemplateAppConfig**
> putTranscoderTemplateAppConfig($server_name, $vhost_name, $template_name, $app_name, $body)

Updates the specified Trancoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderTemplateAppConfig(); // \Swagger\Client\Model\TranscoderTemplateAppConfig | 

try {
    $apiInstance->putTranscoderTemplateAppConfig($server_name, $vhost_name, $template_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putTranscoderTemplateAppConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderTemplateAppConfig**](../Model/TranscoderTemplateAppConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTranscoderTemplateAppConfigAdv**
> putTranscoderTemplateAppConfigAdv($server_name, $vhost_name, $template_name, $app_name, $body)

Updates the Advanced Transcoder Template configuration

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$template_name = "template_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\TranscoderTemplateAppConfigAdv(); // \Swagger\Client\Model\TranscoderTemplateAppConfigAdv | 

try {
    $apiInstance->putTranscoderTemplateAppConfigAdv($server_name, $vhost_name, $template_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putTranscoderTemplateAppConfigAdv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **template_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\TranscoderTemplateAppConfigAdv**](../Model/TranscoderTemplateAppConfigAdv.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putVerimatrixStreamMapsConfig**
> putVerimatrixStreamMapsConfig($server_name, $vhost_name, $app_name, $body)

Updates the Verimatrix stream mapfile for the specified Application

This API is available in builds 15089 or later.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V2serversserverNamevhostsvhostNameapplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_name = "server_name_example"; // string | Reserved for future use
$vhost_name = "vhost_name_example"; // string | 
$app_name = "app_name_example"; // string | 
$body = new \Swagger\Client\Model\VerimatrixStreamMapsConfig(); // \Swagger\Client\Model\VerimatrixStreamMapsConfig | 

try {
    $apiInstance->putVerimatrixStreamMapsConfig($server_name, $vhost_name, $app_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling V2serversserverNamevhostsvhostNameapplicationsApi->putVerimatrixStreamMapsConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **server_name** | **string**| Reserved for future use |
 **vhost_name** | **string**|  |
 **app_name** | **string**|  |
 **body** | [**\Swagger\Client\Model\VerimatrixStreamMapsConfig**](../Model/VerimatrixStreamMapsConfig.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/xml, text/xml, application/json
 - **Accept**: application/xml, text/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

