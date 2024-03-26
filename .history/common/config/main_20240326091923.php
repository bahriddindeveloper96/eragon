<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@url'   => 'http://meral.uz/',
        
        '@fileUrl' => 'http://baxa.uz/', // Replace this with the actual path to your files
    ],
   
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'photo' => [
            'class' => 'path\to\PhotoClass',
            // diğer yapılandırma ayarları...
        ],
        'authManager' => [
            'class' => \yii\rbac\PhpManager::class,
            'itemFile' => '@common/component/rbac/items.php',
            'assignmentFile' => '@common/component/rbac/assignments.php',
            'ruleFile' => '@common/component/rbac/rules.php'
    
        ],
    ],
];
