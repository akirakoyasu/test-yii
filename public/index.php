<?php
/**
 * Created by PhpStorm.
 * User: koyasu
 * Date: 2013/12/22
 * Time: 19:24
 */

$configFile = __DIR__ . '/protected/config/production.php';

if (isset($_SERVER['APPLICATION_ENV'])) {
    $applicationEnv = $_SERVER['APPLICATION_ENV'];
    if ($applicationEnv == 'development') {
        defined('YII_DEBUG') or define('YII_DEBUG', true);
        $configFile = __DIR__ . '/protected/config/development.php';
    }
}

// Yii ブートストラップ (立ち上げ) ファイルを組込みます。
require_once __DIR__ . '/../yii/framework/yii.php';
// アプリケーションインスタンスを生成して実行します。
Yii::createWebApplication($configFile)->run();