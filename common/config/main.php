<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
   
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'authManager' => [
            'class' => \yii\rbac\PhpManager::class,
            'itemFile' => '@common/component/rbac/items.php',
            'assignmentFile' => '@common/component/rbac/assignments.php',
            'ruleFile' => '@common/component/rbac/rules.php'
    
        ],
    ],
];
