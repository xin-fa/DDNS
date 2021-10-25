<?php

date_default_timezone_set('UTC');

include_once 'AlicloudUpdateRecord.php';

use Roura\Alicloud\V20150109\AlicloudUpdateRecord;
$token = $_GET["token"];
$AccessKeyId     = $_GET["id"];
$AccessKeySecret = $_GET["key"];
$domainName      = $_GET["domain"];
$rR              = $_GET["sub"];
$updater = new AlicloudUpdateRecord($AccessKeyId, $AccessKeySecret,$domainName,$rR);
$newIp   = $_SERVER['REMOTE_ADDR']; // New IP
$updater->setRecordType('A');
$updater->setValue($newIp);
print_r($updater->sendRequest());


