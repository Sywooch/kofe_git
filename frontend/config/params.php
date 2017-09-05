<?php

return [
    'adminEmail' => 'admin@example.com',
    'regions' => [
        1 => ['id' => 1, 'title' => 'Москва и область', 'phone' => '8 (499) 955-40-97', 'titleRod' => 'Москве', 'class' => 'moskva'],
        2 => ['id' => 2, 'title' => 'Санкт-Петербург', 'phone' => '8 (812) 643-21-07', 'titleRod' => 'Санкт-Петербурге', 'class' => 'spb'],
    ],
    'siteConfigs' => [
        'remontkofe' => [
            'id' => 1,
            'regExp' => [
                'pattern' => ['/>\s+</', '/class="(.)/', '/id="(.)/', '/class="(.)[s(.)]+/'],
                'replacement' => ['><', 'class="%s$1', 'id="%s$1', 'class="%s$1 %s$2'],
            ],
            'sitePrefix' => 'remont',
            'cssPath' => 'css/%s.css',
            'jsPath' => 'js/%s.js',
            'imagePath' => '%simages/',
        ],
        'spb-remont-kofe' => [
            'id' => 2,
            'regExp' => [
                'pattern' => ['/>\s+</', '/class="(.+?) (.+?)/', '/id="(.+?)/'],
                'replacement' => ['><', 'class="%s$1 %s$2', 'id="%s$1'],
            ],
            'sitePrefix' => 'spb-kofe',            
            'cssPath' => 'css/%s.css',
            'jsPath' => 'js/%s.js',
            'imagePath' => '%simages/',
            'uploadsPath' => '%suploads/',
        ],
    ],
];
