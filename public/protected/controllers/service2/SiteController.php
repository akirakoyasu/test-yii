<?php
/**
 * Created by PhpStorm.
 * User: koyasu
 * Date: 2013/12/22
 * Time: 19:41
 */

namespace application\controllers\service2;

use application\models\service2\SiteModel;

class SiteController extends \CController {
    function actionIndex() {
        echo '<pre>';

        $model = new SiteModel();
        var_dump($model);
        echo $model->say();
    }
    function actionPost() {
        echo 'Bar!';
    }
    function actionError() {
        echo 'Foo!';
    }
}