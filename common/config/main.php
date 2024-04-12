<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@url'   => 'http://meral.uz/',
        
        '@fileUrl' => 'http://meral.uz/', // Replace this with the actual path to your files
    ],
    'language' => 'uz',
    'sourceLanguage' => 'en-US',
   
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
        'i18n' => [
            'translations' => [
                'common*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    // 'basePath' => '@common/messages',
                    // 'sourceLanguage' => 'ru', // Asosiy til
                    'fileMap' => [
                        'common' => 'app.php',
                        // Boshqa fayllarni kerakli fayllarga bog'lang
                    ],
                ],
            ],
        ],
    ],
];
