<?php
/**
 * Created by PhpStorm.
 * User: koyasu
 * Date: 2013/12/22
 * Time: 19:41
 */

namespace application\controllers\service2;


class SiteController extends \CController {
    function actionIndex() {
        echo '<pre>';
        var_dump($_SERVER);
        var_dump($_ENV);
        var_dump(\Yii::app());
        echo 'Foo!';
    }
    function actionPost() {
        echo 'Bar!';
    }
    function actionError() {
        echo 'Foo!';
    }
}