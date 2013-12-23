<?php
/**
 * Created by PhpStorm.
 * User: koyasu
 * Date: 2013/12/22
 * Time: 19:24
 */

defined('YII_DEBUG') or define('YII_DEBUG', true);
// Yii ブートストラップ (立ち上げ) ファイルを組込みます。
require_once __DIR__ . '/../yii/framework/yii.php';
// アプリケーションインスタンスを生成して実行します。
$configFile = __DIR__ . '/protected/config/main.php';
Yii::createWebApplication($configFile)->run();