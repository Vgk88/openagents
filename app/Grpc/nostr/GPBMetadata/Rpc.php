<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: rpc.proto

namespace App\Grpc\nostr\GPBMetadata;

class Rpc
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        \App\Grpc\nostr\GPBMetadata\Log::initOnce();
        \App\Grpc\nostr\GPBMetadata\JobStatus::initOnce();
        \App\Grpc\nostr\GPBMetadata\JobState::initOnce();
        \App\Grpc\nostr\GPBMetadata\JobParam::initOnce();
        \App\Grpc\nostr\GPBMetadata\JobInput::initOnce();
        \App\Grpc\nostr\GPBMetadata\JobResult::initOnce();
        \App\Grpc\nostr\GPBMetadata\Job::initOnce();
        $pool->internalAddGeneratedFile(
            '
Η$
	rpc.protoJobStatus.protoJobState.protoJobParam.protoJobInput.protoJobResult.proto	Job.proto"
RpcRequestJob
runOn (	
expireAfter (
input (2	.JobInput
param (2	.JobParam
description (	
kind (H 
outputFormat (	H
requestProvider	 (	H
	encrypted
 (HB
_kindB
_outputFormatB
_requestProviderB

_encrypted"6
	RpcGetJob
jobId (	
waitc (H B
_wait"²
RpcGetPendingJobs
filterByRunOn (	H 
filterByCustomer (	H 
filterByDescription (	H

filterById (	H
filterByKind (	H
	excludeIdb (	
waitc (HB
_filterByRunOnB
_filterByCustomerB
_filterByDescriptionB
_filterByIdB
_filterByKindB
_wait"!
PendingJobs
jobs (2.Job"
RpcIsJobDone
isDone ("
RpcAcceptJob
jobId (	"-
RpcCancelJob
jobId (	
reason (	"-
RpcJobOutput
jobId (	
output (	"K
RpcJobComplete
jobId (	
output (	
info (	H B
_info"\'
	RpcJobLog
jobId (	
log (	";
RpcSendSignedEventRequest
groupId (	
event (	"?
RpcSubscribeToEventsRequest
groupId (	
filters (	"G
RpcSubscribeToEventsResponse
groupId (	
subscriptionId (	"M
RpcGetEventsRequest
groupId (	
subscriptionId (	
limit ("^
RpcGetEventsResponse
groupId (	
count (
subscriptionId (	
events (	">
RpcSendSignedEventResponse
groupId (	
success ("J
RpcUnsubscribeFromEventsRequest
groupId (	
subscriptionId (	"3
 RpcUnsubscribeFromEventsResponse
success ("L
RpcAnnounceNodeRequest
iconUrl (	
name (	
description (	"C
RpcAnnounceNodeResponse
success (
refreshInterval ("M
RpcAnnounceTemplateRequest
meta (	
template (	
sockets (	"G
RpcAnnounceTemplateResponse
success (
refreshInterval ("¦
RpcCreateDiskRequest
name (	H 
encryptionKey (	H&
includeEncryptionKeyInUrl (HB
_nameB
_encryptionKeyB
_includeEncryptionKeyInUrl"$
RpcCreateDiskResponse
url (	"O
RpcOpenDiskRequest
url (	
encryptionKey (	H B
_encryptionKey"G
RpcOpenDiskResponse
success (
diskId (	
version ("%
RpcCloseDiskRequest
diskId (	"\'
RpcCloseDiskResponse
success ("8
RpcDiskDeleteFileRequest
diskId (	
path (	",
RpcDiskDeleteFileResponse
success ("7
RpcDiskListFilesRequest
diskId (	
path (	")
RpcDiskListFilesResponse
files (	"6
RpcDiskReadFileRequest
diskId (	
path (	"7
RpcDiskReadFileResponse
data (
exists ("E
RpcDiskWriteFileRequest
diskId (	
path (	
data ("+
RpcDiskWriteFileResponse
success ("u
RpcCacheSetRequest
key (	
data (
version (H 
expireAt (HB

_versionB
	_expireAt"&
RpcCacheSetResponse
success ("K
RpcCacheGetRequest
key (	
lastVersion (H B
_lastVersion"3
RpcCacheGetResponse
data (
exists (2υ
PoolConnector"

requestJob.RpcRequestJob.Job
getJob
.RpcGetJob.Job2
getPendingJobs.RpcGetPendingJobs.PendingJobs&
	isJobDone
.RpcGetJob.RpcIsJobDone 
	acceptJob.RpcAcceptJob.Job 
	cancelJob.RpcCancelJob.Job#
outputForJob.RpcJobOutput.Job$
completeJob.RpcJobComplete.Job
	logForJob
.RpcJobLog.JobA
announceNode.RpcAnnounceNodeRequest.RpcAnnounceNodeResponseR
announceEventTemplate.RpcAnnounceTemplateRequest.RpcAnnounceTemplateResponseJ
sendSignedEvent.RpcSendSignedEventRequest.RpcSendSignedEventResponseP
subscribeToEvents.RpcSubscribeToEventsRequest.RpcSubscribeToEventsResponse\\
unsubscribeFromEvents .RpcUnsubscribeFromEventsRequest!.RpcUnsubscribeFromEventsResponse8
	getEvents.RpcGetEventsRequest.RpcGetEventsResponse;

createDisk.RpcCreateDiskRequest.RpcCreateDiskResponse5
openDisk.RpcOpenDiskRequest.RpcOpenDiskResponse8
	closeDisk.RpcCloseDiskRequest.RpcCloseDiskResponseG
diskDeleteFile.RpcDiskDeleteFileRequest.RpcDiskDeleteFileResponseD
diskListFiles.RpcDiskListFilesRequest.RpcDiskListFilesResponseC
diskReadFile.RpcDiskReadFileRequest.RpcDiskReadFileResponse0F
diskReadSmallFile.RpcDiskReadFileRequest.RpcDiskReadFileResponseF
diskWriteFile.RpcDiskWriteFileRequest.RpcDiskWriteFileResponse(I
diskWriteSmallFile.RpcDiskWriteFileRequest.RpcDiskWriteFileResponse7
cacheSet.RpcCacheSetRequest.RpcCacheSetResponse(7
cacheGet.RpcCacheGetRequest.RpcCacheGetResponse0B.ΚApp\\Grpc\\nostrβApp\\Grpc\\nostr\\GPBMetadatabproto3', true);

        static::$is_initialized = true;
    }
}
