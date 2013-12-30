<?php

return CMap::mergeArray(
    require(__DIR__ . '/main.php'),
    array(
        'modules' => array(
            'gii' => array(
                'class' => 'system.gii.GiiModule',
                'password' => 'password',
                'ipFilters' => array('*'),
//            'newFileMode'=>0666,
//            'newDirMode'=>0777,
            ),
        ),
    )
);