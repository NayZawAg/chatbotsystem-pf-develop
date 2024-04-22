<?php
require_once('browser_language.php');
require_once('languages.php');
require_once('constant.php');
require_once $ROOT_DIR . '/vendor/autoload.php';

use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Common\ServiceException;
use MicrosoftAzure\Storage\Blob\BlobSharedAccessSignatureHelper;
use MicrosoftAzure\Storage\Common\Internal\Resources;

function get_site_url() {
  if (empty($_SERVER["HTTPS"])) {
    return 'http://'.$_SERVER["HTTP_HOST"];
  } else {
    return 'https://'.$_SERVER["HTTP_HOST"];
  }
}

function getBlobUrlWithSignature(string $filePath) {
  try {
    if (isset($_ENV['AZ_STORAGE_CONNECTION_STRING'])) {
      $connectionString = $_ENV['AZ_STORAGE_CONNECTION_STRING'];
    } else {
      $connectionString = ' ';
    }
    if (isset($_ENV['AZ_STORAGE_CONTAINER'])) {
      $container = $_ENV['AZ_STORAGE_CONTAINER'];
    } else {
      $container = ' ';
    }

    $blobClient = BlobRestProxy::createBlobService($connectionString);
    $url = $blobClient->getBlobUrl($container, $filePath);

    if (isset($_ENV['AZ_STORAGE_ACCOUNT_NAME'])) {
      $accountName = $_ENV['AZ_STORAGE_ACCOUNT_NAME'];
    } else {
      $accountName = ' ';
    }
    if (isset($_ENV['AZ_STORAGE_KEY'])) {
      $accountKey = $_ENV['AZ_STORAGE_KEY'];
    } else {
      $accountKey = ' ';
    }

    $helper = new BlobSharedAccessSignatureHelper($accountName, $accountKey);
    $d = new \Datetime('now', new \DateTimeZone('UTC'));
    // リソース
    $signedResource = Resources::RESOURCE_TYPE_BLOB;
    // コンテナからのリソースの場所を指定
    $resourceName = "{$container}/{$filePath}";
    // パーミッション
    $signedPermissions = 'r';
    // 開始日時
    $signedStart = new \Datetime();
    // 有効期限
    $signedExpiry = date_modify(date_create(), '+1 hour');
    // IP
    $signedIP = "";
    // 有効なプロトコル
    $signedProtocol = "https";

    $token = $helper->generateBlobServiceSharedAccessSignatureToken(
      $signedResource,
      $resourceName,
      $signedPermissions,
      $signedExpiry,
      $signedStart,
      $signedIP,
      $signedProtocol
    );
    return "{$url}?{$token}";
  } catch (Exception $e) {
    echo "" . PHP_EOL;
  }
}
