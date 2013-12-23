<?php
/**
 * Created by PhpStorm.
 * User: koyasu
 * Date: 2013/12/22
 * Time: 19:41
 */

namespace application\modules\service1\controllers;

use application\modules\service1\models\SiteModel;

class SiteController extends \CController {
    function actionIndex() {
        echo '<pre>';

        $service1 = \Yii::app()->getModule('service1');
        var_dump($service1->controllerNamespace);

        $model = new SiteModel();
        var_dump($model);
        echo $model->say();
    }
    function actionError() {
        echo 'Foo!';
    }
}