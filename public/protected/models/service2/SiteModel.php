<?php
/**
 * Created by PhpStorm.
 * User: koyasu
 * Date: 2013/12/23
 * Time: 17:10
 */

namespace application\models\service2;

use application\components\Util;

class SiteModel
{
    function say()
    {
        return Util::hey();
    }
} 