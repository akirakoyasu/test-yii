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
        echo 'Foo!';
    }
    function actionPost() {
        echo 'Bar!';
    }
    function actionError() {
        echo 'Foo!';
    }
}