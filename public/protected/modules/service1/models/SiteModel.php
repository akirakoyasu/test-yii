<?php
/**
 * Created by PhpStorm.
 * User: koyasu
 * Date: 2013/12/23
 * Time: 17:10
 */

namespace application\modules\service1\models;

use application\components\Util;

class SiteModel
{
    function say()
    {
        return Util::hey();
    }
} 