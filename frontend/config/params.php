<?php

return [
    'adminEmail' => 'admin@example.com',
    'regions' => [
        1 => ['id' => 1, 'title' => 'Москва и область', 'phone' => '8 (499) 450-90-08', 'titleRod' => 'Москве', 'class' => 'moskva'],
        2 => ['id' => 2, 'title' => 'Санкт-Петербург', 'phone' => '8 (812) 643-21-07', 'titleRod' => 'Санкт-Петербурге', 'class' => 'spb'],
    ],
    'siteConfigs' => [
        'remontkofe' => [
            'stickyMenu' => true,
            'mono' => false,
            'id' => 1,
            'sitePrefix' => 'remont',
        ],
        'spb-remont-kofe' => [
            'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => false,
            'id' => 2,
            'sitePrefix' => 'spb-kofe',
            'change-logo' => true,
        ],
        'support-delonghi' => [
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13292,
            'id' => 3,
            'sitePrefix' => 'delonghi',
            'change-logo' => true,
        ],
        'support-saeco' => [
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13332,
            'id' => 3,
            'sitePrefix' => 'saeco',
            'change-logo' => true,
        ],
    ],
];
