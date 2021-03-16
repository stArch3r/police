<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'rbac' => [
            'class' => 'yii2mod\rbac\Module',
        ],
    ],
    'components' => [
            'authManager' => [
                  'class' => 'yii\rbac\DbManager',
                  'defaultRoles' => ['guest', 'user'],
              ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    
];
