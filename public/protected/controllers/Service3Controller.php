<?php
/**
 * Created by PhpStorm.
 * User: koyasu
 * Date: 2013/12/22
 * Time: 19:41
 */

namespace application\controllers;


class Service3Controller extends \CController {
    function actions() {
        return array(
            'index' => 'application\controllers\service3\SiteAction',
            'site' => 'application\controllers\service3\SiteAction',
        );
    }
}