<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/environment.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\Cx\V3;

class Environment
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\TestCase::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�.
/google/cloud/dialogflow/cx/v3/environment.protogoogle.cloud.dialogflow.cx.v3google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto-google/cloud/dialogflow/cx/v3/test_case.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
Environment
name (	
display_name (	B�A
description (	V
version_configs (28.google.cloud.dialogflow.cx.v3.Environment.VersionConfigB�A4
update_time (2.google.protobuf.TimestampB�AU
test_cases_config (2:.google.cloud.dialogflow.cx.v3.Environment.TestCasesConfigK
VersionConfig:
version (	B)�A�A#
!dialogflow.googleapis.com/Version�
TestCasesConfig;

test_cases (	B\'�A$
"dialogflow.googleapis.com/TestCase
enable_continuous_run ( 
enable_predeployment_run (:}�Az
%dialogflow.googleapis.com/EnvironmentQprojects/{project}/locations/{location}/agents/{agent}/environments/{environment}"
ListEnvironmentsRequest=
parent (	B-�A�A\'%dialogflow.googleapis.com/Environment
	page_size (

page_token (	"u
ListEnvironmentsResponse@
environments (2*.google.cloud.dialogflow.cx.v3.Environment
next_page_token (	"T
GetEnvironmentRequest;
name (	B-�A�A\'
%dialogflow.googleapis.com/Environment"�
CreateEnvironmentRequest=
parent (	B-�A�A\'%dialogflow.googleapis.com/EnvironmentD
environment (2*.google.cloud.dialogflow.cx.v3.EnvironmentB�A"�
UpdateEnvironmentRequestD
environment (2*.google.cloud.dialogflow.cx.v3.EnvironmentB�A4
update_mask (2.google.protobuf.FieldMaskB�A"W
DeleteEnvironmentRequest;
name (	B-�A�A\'
%dialogflow.googleapis.com/Environment"�
LookupEnvironmentHistoryRequest;
name (	B-�A�A\'
%dialogflow.googleapis.com/Environment
	page_size (

page_token (	"}
 LookupEnvironmentHistoryResponse@
environments (2*.google.cloud.dialogflow.cx.v3.Environment
next_page_token (	"�
ContinuousTestResult
name (	X
result (2H.google.cloud.dialogflow.cx.v3.ContinuousTestResult.AggregatedTestResultH
test_case_results (	B-�A*
(dialogflow.googleapis.com/TestCaseResult,
run_time (2.google.protobuf.Timestamp"V
AggregatedTestResult&
"AGGREGATED_TEST_RESULT_UNSPECIFIED 

PASSED

FAILED:��A�
.dialogflow.googleapis.com/ContinuousTestResult�projects/{project}/locations/{location}/agents/{agent}/environments/{environment}/continuousTestResults/{continuous_test_result}"^
RunContinuousTestRequestB
environment (	B-�A�A\'
%dialogflow.googleapis.com/Environment"p
RunContinuousTestResponseS
continuous_test_result (23.google.cloud.dialogflow.cx.v3.ContinuousTestResult"U
RunContinuousTestMetadata8
errors (2(.google.cloud.dialogflow.cx.v3.TestError"�
 ListContinuousTestResultsRequestF
parent (	B6�A�A0.dialogflow.googleapis.com/ContinuousTestResult
	page_size (

page_token (	"�
!ListContinuousTestResultsResponseT
continuous_test_results (23.google.cloud.dialogflow.cx.v3.ContinuousTestResult
next_page_token (	"�
DeployFlowRequestB
environment (	B-�A�A\'
%dialogflow.googleapis.com/Environment?
flow_version (	B)�A�A#
!dialogflow.googleapis.com/Version"i
DeployFlowResponse?
environment (2*.google.cloud.dialogflow.cx.v3.Environment

deployment (	"S
DeployFlowMetadata=
test_errors (2(.google.cloud.dialogflow.cx.v3.TestError2�
Environments�
ListEnvironments6.google.cloud.dialogflow.cx.v3.ListEnvironmentsRequest7.google.cloud.dialogflow.cx.v3.ListEnvironmentsResponse"J���;9/v3/{parent=projects/*/locations/*/agents/*}/environments�Aparent�
GetEnvironment4.google.cloud.dialogflow.cx.v3.GetEnvironmentRequest*.google.cloud.dialogflow.cx.v3.Environment"H���;9/v3/{name=projects/*/locations/*/agents/*/environments/*}�Aname�
CreateEnvironment7.google.cloud.dialogflow.cx.v3.CreateEnvironmentRequest.google.longrunning.Operation"����H"9/v3/{parent=projects/*/locations/*/agents/*}/environments:environment�Aparent,environment�A%
Environmentgoogle.protobuf.Struct�
UpdateEnvironment7.google.cloud.dialogflow.cx.v3.UpdateEnvironmentRequest.google.longrunning.Operation"����T2E/v3/{environment.name=projects/*/locations/*/agents/*/environments/*}:environment�Aenvironment,update_mask�A%
Environmentgoogle.protobuf.Struct�
DeleteEnvironment7.google.cloud.dialogflow.cx.v3.DeleteEnvironmentRequest.google.protobuf.Empty"H���;*9/v3/{name=projects/*/locations/*/agents/*/environments/*}�Aname�
LookupEnvironmentHistory>.google.cloud.dialogflow.cx.v3.LookupEnvironmentHistoryRequest?.google.cloud.dialogflow.cx.v3.LookupEnvironmentHistoryResponse"a���TR/v3/{name=projects/*/locations/*/agents/*/environments/*}:lookupEnvironmentHistory�Aname�
RunContinuousTest7.google.cloud.dialogflow.cx.v3.RunContinuousTestRequest.google.longrunning.Operation"����W"R/v3/{environment=projects/*/locations/*/agents/*/environments/*}:runContinuousTest:*�A6
RunContinuousTestResponseRunContinuousTestMetadata�
ListContinuousTestResults?.google.cloud.dialogflow.cx.v3.ListContinuousTestResultsRequest@.google.cloud.dialogflow.cx.v3.ListContinuousTestResultsResponse"b���SQ/v3/{parent=projects/*/locations/*/agents/*/environments/*}/continuousTestResults�Aparent�

DeployFlow0.google.cloud.dialogflow.cx.v3.DeployFlowRequest.google.longrunning.Operation"����P"K/v3/{environment=projects/*/locations/*/agents/*/environments/*}:deployFlow:*�A(
DeployFlowResponseDeployFlowMetadatax�Adialogflow.googleapis.com�AYhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/dialogflowB�
!com.google.cloud.dialogflow.cx.v3BEnvironmentProtoPZ?google.golang.org/genproto/googleapis/cloud/dialogflow/cx/v3;cx��DF�Google.Cloud.Dialogflow.Cx.V3�!Google::Cloud::Dialogflow::CX::V3bproto3'
        , true);

        static::$is_initialized = true;
    }
}

