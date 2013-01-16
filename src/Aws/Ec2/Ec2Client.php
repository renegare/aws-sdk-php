<?php
/**
 * Copyright 2010-2013 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

namespace Aws\Ec2;

use Aws\Common\Client\AbstractClient;
use Aws\Common\Client\ClientBuilder;
use Aws\Common\Credentials\Credentials;
use Aws\Common\Enum\ClientOptions as Options;
use Guzzle\Common\Collection;
use Guzzle\Service\Resource\Model;

/**
 * Client to interact with Amazon Elastic Compute Cloud
 *
 * @method Model activateLicense(array $args = array()) {@command ec2 ActivateLicense}
 * @method Model allocateAddress(array $args = array()) {@command ec2 AllocateAddress}
 * @method Model assignPrivateIpAddresses(array $args = array()) {@command ec2 AssignPrivateIpAddresses}
 * @method Model associateAddress(array $args = array()) {@command ec2 AssociateAddress}
 * @method Model associateDhcpOptions(array $args = array()) {@command ec2 AssociateDhcpOptions}
 * @method Model associateRouteTable(array $args = array()) {@command ec2 AssociateRouteTable}
 * @method Model attachInternetGateway(array $args = array()) {@command ec2 AttachInternetGateway}
 * @method Model attachNetworkInterface(array $args = array()) {@command ec2 AttachNetworkInterface}
 * @method Model attachVolume(array $args = array()) {@command ec2 AttachVolume}
 * @method Model attachVpnGateway(array $args = array()) {@command ec2 AttachVpnGateway}
 * @method Model authorizeSecurityGroupEgress(array $args = array()) {@command ec2 AuthorizeSecurityGroupEgress}
 * @method Model authorizeSecurityGroupIngress(array $args = array()) {@command ec2 AuthorizeSecurityGroupIngress}
 * @method Model bundleInstance(array $args = array()) {@command ec2 BundleInstance}
 * @method Model cancelBundleTask(array $args = array()) {@command ec2 CancelBundleTask}
 * @method Model cancelConversionTask(array $args = array()) {@command ec2 CancelConversionTask}
 * @method Model cancelExportTask(array $args = array()) {@command ec2 CancelExportTask}
 * @method Model cancelReservedInstancesListing(array $args = array()) {@command ec2 CancelReservedInstancesListing}
 * @method Model cancelSpotInstanceRequests(array $args = array()) {@command ec2 CancelSpotInstanceRequests}
 * @method Model confirmProductInstance(array $args = array()) {@command ec2 ConfirmProductInstance}
 * @method Model copySnapshot(array $args = array()) {@command ec2 CopySnapshot}
 * @method Model createCustomerGateway(array $args = array()) {@command ec2 CreateCustomerGateway}
 * @method Model createDhcpOptions(array $args = array()) {@command ec2 CreateDhcpOptions}
 * @method Model createImage(array $args = array()) {@command ec2 CreateImage}
 * @method Model createInstanceExportTask(array $args = array()) {@command ec2 CreateInstanceExportTask}
 * @method Model createInternetGateway(array $args = array()) {@command ec2 CreateInternetGateway}
 * @method Model createKeyPair(array $args = array()) {@command ec2 CreateKeyPair}
 * @method Model createNetworkAcl(array $args = array()) {@command ec2 CreateNetworkAcl}
 * @method Model createNetworkAclEntry(array $args = array()) {@command ec2 CreateNetworkAclEntry}
 * @method Model createNetworkInterface(array $args = array()) {@command ec2 CreateNetworkInterface}
 * @method Model createPlacementGroup(array $args = array()) {@command ec2 CreatePlacementGroup}
 * @method Model createReservedInstancesListing(array $args = array()) {@command ec2 CreateReservedInstancesListing}
 * @method Model createRoute(array $args = array()) {@command ec2 CreateRoute}
 * @method Model createRouteTable(array $args = array()) {@command ec2 CreateRouteTable}
 * @method Model createSecurityGroup(array $args = array()) {@command ec2 CreateSecurityGroup}
 * @method Model createSnapshot(array $args = array()) {@command ec2 CreateSnapshot}
 * @method Model createSpotDatafeedSubscription(array $args = array()) {@command ec2 CreateSpotDatafeedSubscription}
 * @method Model createSubnet(array $args = array()) {@command ec2 CreateSubnet}
 * @method Model createTags(array $args = array()) {@command ec2 CreateTags}
 * @method Model createVolume(array $args = array()) {@command ec2 CreateVolume}
 * @method Model createVpc(array $args = array()) {@command ec2 CreateVpc}
 * @method Model createVpnConnection(array $args = array()) {@command ec2 CreateVpnConnection}
 * @method Model createVpnConnectionRoute(array $args = array()) {@command ec2 CreateVpnConnectionRoute}
 * @method Model createVpnGateway(array $args = array()) {@command ec2 CreateVpnGateway}
 * @method Model deactivateLicense(array $args = array()) {@command ec2 DeactivateLicense}
 * @method Model deleteCustomerGateway(array $args = array()) {@command ec2 DeleteCustomerGateway}
 * @method Model deleteDhcpOptions(array $args = array()) {@command ec2 DeleteDhcpOptions}
 * @method Model deleteInternetGateway(array $args = array()) {@command ec2 DeleteInternetGateway}
 * @method Model deleteKeyPair(array $args = array()) {@command ec2 DeleteKeyPair}
 * @method Model deleteNetworkAcl(array $args = array()) {@command ec2 DeleteNetworkAcl}
 * @method Model deleteNetworkAclEntry(array $args = array()) {@command ec2 DeleteNetworkAclEntry}
 * @method Model deleteNetworkInterface(array $args = array()) {@command ec2 DeleteNetworkInterface}
 * @method Model deletePlacementGroup(array $args = array()) {@command ec2 DeletePlacementGroup}
 * @method Model deleteRoute(array $args = array()) {@command ec2 DeleteRoute}
 * @method Model deleteRouteTable(array $args = array()) {@command ec2 DeleteRouteTable}
 * @method Model deleteSecurityGroup(array $args = array()) {@command ec2 DeleteSecurityGroup}
 * @method Model deleteSnapshot(array $args = array()) {@command ec2 DeleteSnapshot}
 * @method Model deleteSpotDatafeedSubscription(array $args = array()) {@command ec2 DeleteSpotDatafeedSubscription}
 * @method Model deleteSubnet(array $args = array()) {@command ec2 DeleteSubnet}
 * @method Model deleteTags(array $args = array()) {@command ec2 DeleteTags}
 * @method Model deleteVolume(array $args = array()) {@command ec2 DeleteVolume}
 * @method Model deleteVpc(array $args = array()) {@command ec2 DeleteVpc}
 * @method Model deleteVpnConnection(array $args = array()) {@command ec2 DeleteVpnConnection}
 * @method Model deleteVpnConnectionRoute(array $args = array()) {@command ec2 DeleteVpnConnectionRoute}
 * @method Model deleteVpnGateway(array $args = array()) {@command ec2 DeleteVpnGateway}
 * @method Model deregisterImage(array $args = array()) {@command ec2 DeregisterImage}
 * @method Model describeAddresses(array $args = array()) {@command ec2 DescribeAddresses}
 * @method Model describeAvailabilityZones(array $args = array()) {@command ec2 DescribeAvailabilityZones}
 * @method Model describeBundleTasks(array $args = array()) {@command ec2 DescribeBundleTasks}
 * @method Model describeConversionTasks(array $args = array()) {@command ec2 DescribeConversionTasks}
 * @method Model describeCustomerGateways(array $args = array()) {@command ec2 DescribeCustomerGateways}
 * @method Model describeDhcpOptions(array $args = array()) {@command ec2 DescribeDhcpOptions}
 * @method Model describeExportTasks(array $args = array()) {@command ec2 DescribeExportTasks}
 * @method Model describeImageAttribute(array $args = array()) {@command ec2 DescribeImageAttribute}
 * @method Model describeImages(array $args = array()) {@command ec2 DescribeImages}
 * @method Model describeInstanceAttribute(array $args = array()) {@command ec2 DescribeInstanceAttribute}
 * @method Model describeInstanceStatus(array $args = array()) {@command ec2 DescribeInstanceStatus}
 * @method Model describeInstances(array $args = array()) {@command ec2 DescribeInstances}
 * @method Model describeInternetGateways(array $args = array()) {@command ec2 DescribeInternetGateways}
 * @method Model describeKeyPairs(array $args = array()) {@command ec2 DescribeKeyPairs}
 * @method Model describeLicenses(array $args = array()) {@command ec2 DescribeLicenses}
 * @method Model describeNetworkAcls(array $args = array()) {@command ec2 DescribeNetworkAcls}
 * @method Model describeNetworkInterfaceAttribute(array $args = array()) {@command ec2 DescribeNetworkInterfaceAttribute}
 * @method Model describeNetworkInterfaces(array $args = array()) {@command ec2 DescribeNetworkInterfaces}
 * @method Model describePlacementGroups(array $args = array()) {@command ec2 DescribePlacementGroups}
 * @method Model describeRegions(array $args = array()) {@command ec2 DescribeRegions}
 * @method Model describeReservedInstances(array $args = array()) {@command ec2 DescribeReservedInstances}
 * @method Model describeReservedInstancesListings(array $args = array()) {@command ec2 DescribeReservedInstancesListings}
 * @method Model describeReservedInstancesOfferings(array $args = array()) {@command ec2 DescribeReservedInstancesOfferings}
 * @method Model describeRouteTables(array $args = array()) {@command ec2 DescribeRouteTables}
 * @method Model describeSecurityGroups(array $args = array()) {@command ec2 DescribeSecurityGroups}
 * @method Model describeSnapshotAttribute(array $args = array()) {@command ec2 DescribeSnapshotAttribute}
 * @method Model describeSnapshots(array $args = array()) {@command ec2 DescribeSnapshots}
 * @method Model describeSpotDatafeedSubscription(array $args = array()) {@command ec2 DescribeSpotDatafeedSubscription}
 * @method Model describeSpotInstanceRequests(array $args = array()) {@command ec2 DescribeSpotInstanceRequests}
 * @method Model describeSpotPriceHistory(array $args = array()) {@command ec2 DescribeSpotPriceHistory}
 * @method Model describeSubnets(array $args = array()) {@command ec2 DescribeSubnets}
 * @method Model describeTags(array $args = array()) {@command ec2 DescribeTags}
 * @method Model describeVolumeAttribute(array $args = array()) {@command ec2 DescribeVolumeAttribute}
 * @method Model describeVolumeStatus(array $args = array()) {@command ec2 DescribeVolumeStatus}
 * @method Model describeVolumes(array $args = array()) {@command ec2 DescribeVolumes}
 * @method Model describeVpcs(array $args = array()) {@command ec2 DescribeVpcs}
 * @method Model describeVpnConnections(array $args = array()) {@command ec2 DescribeVpnConnections}
 * @method Model describeVpnGateways(array $args = array()) {@command ec2 DescribeVpnGateways}
 * @method Model detachInternetGateway(array $args = array()) {@command ec2 DetachInternetGateway}
 * @method Model detachNetworkInterface(array $args = array()) {@command ec2 DetachNetworkInterface}
 * @method Model detachVolume(array $args = array()) {@command ec2 DetachVolume}
 * @method Model detachVpnGateway(array $args = array()) {@command ec2 DetachVpnGateway}
 * @method Model disableVgwRoutePropagation(array $args = array()) {@command ec2 DisableVgwRoutePropagation}
 * @method Model disassociateAddress(array $args = array()) {@command ec2 DisassociateAddress}
 * @method Model disassociateRouteTable(array $args = array()) {@command ec2 DisassociateRouteTable}
 * @method Model enableVgwRoutePropagation(array $args = array()) {@command ec2 EnableVgwRoutePropagation}
 * @method Model enableVolumeIO(array $args = array()) {@command ec2 EnableVolumeIO}
 * @method Model getConsoleOutput(array $args = array()) {@command ec2 GetConsoleOutput}
 * @method Model getPasswordData(array $args = array()) {@command ec2 GetPasswordData}
 * @method Model importInstance(array $args = array()) {@command ec2 ImportInstance}
 * @method Model importKeyPair(array $args = array()) {@command ec2 ImportKeyPair}
 * @method Model importVolume(array $args = array()) {@command ec2 ImportVolume}
 * @method Model modifyImageAttribute(array $args = array()) {@command ec2 ModifyImageAttribute}
 * @method Model modifyInstanceAttribute(array $args = array()) {@command ec2 ModifyInstanceAttribute}
 * @method Model modifyNetworkInterfaceAttribute(array $args = array()) {@command ec2 ModifyNetworkInterfaceAttribute}
 * @method Model modifySnapshotAttribute(array $args = array()) {@command ec2 ModifySnapshotAttribute}
 * @method Model modifyVolumeAttribute(array $args = array()) {@command ec2 ModifyVolumeAttribute}
 * @method Model monitorInstances(array $args = array()) {@command ec2 MonitorInstances}
 * @method Model purchaseReservedInstancesOffering(array $args = array()) {@command ec2 PurchaseReservedInstancesOffering}
 * @method Model rebootInstances(array $args = array()) {@command ec2 RebootInstances}
 * @method Model registerImage(array $args = array()) {@command ec2 RegisterImage}
 * @method Model releaseAddress(array $args = array()) {@command ec2 ReleaseAddress}
 * @method Model replaceNetworkAclAssociation(array $args = array()) {@command ec2 ReplaceNetworkAclAssociation}
 * @method Model replaceNetworkAclEntry(array $args = array()) {@command ec2 ReplaceNetworkAclEntry}
 * @method Model replaceRoute(array $args = array()) {@command ec2 ReplaceRoute}
 * @method Model replaceRouteTableAssociation(array $args = array()) {@command ec2 ReplaceRouteTableAssociation}
 * @method Model reportInstanceStatus(array $args = array()) {@command ec2 ReportInstanceStatus}
 * @method Model requestSpotInstances(array $args = array()) {@command ec2 RequestSpotInstances}
 * @method Model resetImageAttribute(array $args = array()) {@command ec2 ResetImageAttribute}
 * @method Model resetInstanceAttribute(array $args = array()) {@command ec2 ResetInstanceAttribute}
 * @method Model resetNetworkInterfaceAttribute(array $args = array()) {@command ec2 ResetNetworkInterfaceAttribute}
 * @method Model resetSnapshotAttribute(array $args = array()) {@command ec2 ResetSnapshotAttribute}
 * @method Model revokeSecurityGroupEgress(array $args = array()) {@command ec2 RevokeSecurityGroupEgress}
 * @method Model revokeSecurityGroupIngress(array $args = array()) {@command ec2 RevokeSecurityGroupIngress}
 * @method Model runInstances(array $args = array()) {@command ec2 RunInstances}
 * @method Model startInstances(array $args = array()) {@command ec2 StartInstances}
 * @method Model stopInstances(array $args = array()) {@command ec2 StopInstances}
 * @method Model terminateInstances(array $args = array()) {@command ec2 TerminateInstances}
 * @method Model unassignPrivateIpAddresses(array $args = array()) {@command ec2 UnassignPrivateIpAddresses}
 * @method Model unmonitorInstances(array $args = array()) {@command ec2 UnmonitorInstances}
 */
class Ec2Client extends AbstractClient
{
    protected static $iteratorConfig = array(
        'operations' => array(
            'DescribeImages' => array('result_key' => 'Images'),
            'DescribeInstanceStatus' => array(
                'limit_key'   => 'MaxResults',
                'result_key'  => 'Images',
                'token_key'   => 'NextToken',
                'token_param' => 'NextToken',
            ),
            'DescribeInstances',
            'DescribeReservedInstancesOfferings' => array(
                'limit_key'   => 'MaxResults',
                'result_key'  => 'ReservedInstancesOfferingsSet',
                'token_key'   => 'NextToken',
                'token_param' => 'NextToken',
            ),
        )
    );

    /**
     * Factory method to create a new AWS Elastic Beanstalk client using an array of configuration options:
     *
     * Credential options (`key`, `secret`, and optional `token` OR `credentials` is required)
     *
     * - key: AWS Access Key ID
     * - secret: AWS secret access key
     * - credentials: You can optionally provide a custom `Aws\Common\Credentials\CredentialsInterface` object
     * - token: Custom AWS security token to use with request authentication
     * - token.ttd: UNIX timestamp for when the custom credentials expire
     * - credentials.cache: Used to cache credentials when using providers that require HTTP requests. Set the true
     *   to use the default APC cache or provide a `Guzzle\Cache\CacheAdapterInterface` object.
     * - credentials.cache.key: Optional custom cache key to use with the credentials
     * - credentials.client: Pass this option to specify a custom `Guzzle\Http\ClientInterface` to use if your
     *   credentials require a HTTP request (e.g. RefreshableInstanceProfileCredentials)
     *
     * Region and Endpoint options (a `region` and optional `scheme` OR a `base_url` is required)
     *
     * - region: Region name (e.g. 'us-east-1', 'us-west-1', 'us-west-2', 'eu-west-1', etc...)
     * - scheme: URI Scheme of the base URL (e.g. 'https', 'http').
     * - base_url: Instead of using a `region` and `scheme`, you can specify a custom base URL for the client
     * - endpoint_provider: Optional `Aws\Common\Region\EndpointProviderInterface` used to provide region endpoints
     *
     * Generic client options
     *
     * - ssl.certificate_authority: Set to true to use the bundled CA cert (default), system to use the certificate
     *   bundled with your system, or pass the full path to an SSL certificate bundle. This option should be used when
     *   you encounter curl error code 60.
     * - curl.options: Array of cURL options to apply to every request.
     *   See http://www.php.net/manual/en/function.curl-setopt.php for a list of available options
     * - signature: You can optionally provide a custom signature implementation used to sign requests
     * - client.backoff.logger: `Guzzle\Log\LogAdapterInterface` object used to log backoff retries. Use
     *   'debug' to emit PHP warnings when a retry is issued.
     * - client.backoff.logger.template: Optional template to use for exponential backoff log messages. See
     *   `Guzzle\Plugin\Backoff\BackoffLogger` for formatting information.
     *
     * @param array|Collection $config Client configuration data
     *
     * @return self
     */
    public static function factory($config = array())
    {
        return ClientBuilder::factory(__NAMESPACE__)
            ->setConfig($config)
            ->setConfigDefaults(array(Options::SERVICE_DESCRIPTION => __DIR__ . '/Resources/client.php'))
            ->setIteratorsConfig(self::$iteratorConfig)
            ->build();
    }
}
