<?php

return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,
    'regions' => [
        1 =>
            ['title' => 'Москва', 'tel' => '8 (495) 646-85-07', 'id' => 1, 'address' => 'ул. Барклая 7, БЦ Рубин, офис 507', 'mode' => 'с 10 до 20 ежедневно'],
            ['title' => 'Санкт-Петербург', 'tel' => '8 (812) 603-41-07', 'id' => 2, 'address' => 'м. Петроградская, ул. Ординарная 21', 'mode' => 'с 10 до 20 ежедневно'],
    //['title' => 'Екатеринбург', 'tel' => '+7 495 995-25-03', 'id' => 3],
    ],
    'siteConfigs' => [
        'remontkofe' => [
            'phone-1' => '8 (499) 450-90-08',
            'phone-2' => '8 (812) 643-21-07',
            'stickyMenu' => true,
            'mono' => false,
            'id' => 1,
            'sitePrefix' => 'remont',
            'region-sel' => true,
            'category_id' => 7,
            'order-title' => 'МСК Заречная',
        ],
        'spb-remont-kofe' => [
            'phone-1' => '8 (499) 450-90-08',
            'phone-2' => '8 (812) 701-00-02',
            'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => false,
            'id' => 2,
            'sitePrefix' => 'spb-kofe',
            'change-logo' => true,
            'category_id' => 7,
            'order-title' => 'СПБ Садовая',
        ],
        'support-delonghi' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 643-21-07',
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13292,
            'id' => 3,
            'sitePrefix' => 'delonghi',
            'change-logo' => true,
            'category_id' => 7,
            'order-title' => 'МСК Войковская',
        ],
        'support-saeco' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 643-21-07',
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13332,
            'id' => 4,
            'sitePrefix' => 'saeco',
            'change-logo' => true,
            'category_id' => 7,
            'order-title' => 'МСК Войковская',
        ],
        'philips-coffee-service' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 643-21-07',
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13238,
            'id' => 5,
            'sitePrefix' => 'philips',
            'change-logo' => true,
            'category_id' => 7,
            'order-title' => 'МСК Войковская',
        ],
        'service-jura' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 643-21-07',
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13202,
            'id' => 6,
            'sitePrefix' => 'jura',
            'change-logo' => true,
            'category_id' => 7,
            'order-title' => 'МСК Войковская',
        ],
        'support-bosch' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 643-21-07',
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13182,
            'id' => 7,
            'sitePrefix' => 'bosch',
            'change-logo' => true,
			'category_id' => 7,
            'order-title' => 'МСК Войковская',
        ],
        'service-krups' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 643-21-07',
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13169,
            'id' => 8,
            'sitePrefix' => 'krups',
            'change-logo' => true,
            'category_id' => 7,
            'order-title' => 'МСК Войковская',
        ],
        'support-melitta' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 643-21-07',
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13231,
            'id' => 9,
            'sitePrefix' => 'melitta',
            'change-logo' => true,
            'category_id' => 7,
            'order-title' => 'МСК Войковская',
        ],
        'service-nivona' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 643-21-07',
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13682,
            'id' => 10,
            'sitePrefix' => 'nivona',
            'change-logo' => true,
            'category_id' => 7,
            'order-title' => 'МСК Войковская',
        ],
        'service-siemens' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 643-21-07',
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13777,
            'id' => 11,
            'sitePrefix' => 'siemens',
            'change-logo' => true,
            'category_id' => 7,
            'order-title' => 'МСК Войковская',
        ],
        'support-gaggia' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 643-21-07',
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13527,
            'id' => 12,
            'sitePrefix' => 'gaggia',
            'change-logo' => true,
            'category_id' => 7,
            'order-title' => 'МСК Войковская',
        ],
        'wmf-service' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 643-21-07',
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13868,
            'id' => 13,
            'sitePrefix' => 'wmf',
            'change-logo' => true,
            'category_id' => 7,
            'order-title' => 'МСК Войковская',
        ],
        'la-cimbali-center' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 643-21-07',
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13607,
            'id' => 14,
            'sitePrefix' => 'cimbali',
            'change-logo' => true,
            'category_id' => 7,
            'order-title' => 'МСК Войковская',
        ],
        'schaerer-service' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 643-21-07',
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13746,
            'id' => 15,
            'sitePrefix' => 'schaerer',
            'change-logo' => true,
            'category_id' => 7,
            'order-title' => 'МСК Войковская',
        ],
        'franke-service-center' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 643-21-07',
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13537,
            'id' => 16,
            'sitePrefix' => 'franke',
            'change-logo' => true,
			'category_id' => 7,
            'order-title' => 'МСК Войковская',
        ],
        'remont-faema' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 643-21-07',
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13499,
            'id' => 17,
            'sitePrefix' => 'faema',
            'change-logo' => true,
            'category_id' => 7,
            'order-title' => 'МСК Войковская',
        ],
        'support-miele' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 643-21-07',
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13650,
            'id' => 18,
            'sitePrefix' => 'miele',
            'change-logo' => true,
            'category_id' => 7,
            'order-title' => 'МСК Войковская',
        ],
        'rancilio-service' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 643-21-07',
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13694,
            'id' => 19,
            'sitePrefix' => 'rancilio',
            'change-logo' => true,
            'category_id' => 7,
            'order-title' => 'МСК Войковская',
        ],
        'nuova-simonelli-service' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 643-21-07',
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13670,
            'id' => 20,
            'sitePrefix' => 'simonelli',
            'change-logo' => true,
            'category_id' => 7,
            'order-title' => 'МСК Войковская',
        ],
        'bork-service' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 643-21-07',
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13368,
            'id' => 21,
            'sitePrefix' => 'bork',
            'change-logo' => true,
            'category_id' => 7,
            'order-title' => 'МСК Войковская',
        ],
        'promac-service' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 643-21-07',
            //'spb-multi' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13687,
            'id' => 22,
            'sitePrefix' => 'promac',
            'category_id' => 7,
            'change-logo' => true,
            'order-title' => 'МСК Войковская',
        ],
        'repair-delonghi' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 416-00-01',
            'spb' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13292,
            'id' => 23,
            'sitePrefix' => 'delonghispb',
            'category_id' => 7,
            'order-title' => 'СПБ ТЦ ПИК',
        //'change-logo' => true,
        ],
        'saeco-repair' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 416-00-01',
            'spb' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13332,
            'id' => 24,
            'sitePrefix' => 'saecospb',
            'category_id' => 7,
            'order-title' => 'СПБ ТЦ ПИК',
        //'change-logo' => true,
        ],
        'philips-help' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 416-00-01',
            'spb' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13238,
            'id' => 25,
            'sitePrefix' => 'philipsspb',
            'category_id' => 7,
            'order-title' => 'СПБ ТЦ ПИК',
        //'change-logo' => true,
        ],
        'jura-fix' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 416-00-01',
            'spb' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13202,
            'id' => 26,
            'sitePrefix' => 'juraspb',
            'category_id' => 7,
            'order-title' => 'СПБ ТЦ ПИК',
        //'change-logo' => true,
        ],
        'repair-bosch' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 416-00-01',
            'spb' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13182,
            'id' => 27,
            'sitePrefix' => 'boschspb',
            'category_id' => 7,
            'order-title' => 'СПБ ТЦ ПИК',
        //'change-logo' => true,
        ],
        'support-krups' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 416-00-01',
            'spb' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13169,
            'id' => 28,
            'sitePrefix' => 'krupsspb',
            'category_id' => 7,
            'order-title' => 'СПБ ТЦ ПИК',
        //'change-logo' => true,
        ],
        'repair-melitta' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 416-00-01',
            'spb' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13231,
            'id' => 29,
            'sitePrefix' => 'melittaspb',
            'category_id' => 7,
            'order-title' => 'СПБ ТЦ ПИК',
        //'change-logo' => true,
        ],
        'nivona-repair' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 416-00-01',
            'spb' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13682,
            'id' => 30,
            'sitePrefix' => 'nivonaspb',
            'category_id' => 7,
            'order-title' => 'СПБ ТЦ ПИК',
        //'change-logo' => true,
        ],
        'siemens-help' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 416-00-01',
            'spb' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13777,
            'id' => 31,
            'sitePrefix' => 'siemensspb',
            'category_id' => 7,
            'order-title' => 'СПБ ТЦ ПИК',
        //'change-logo' => true,
        ],
        'gaggia-fix' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 416-00-01',
            'spb' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13527,
            'id' => 32,
            'sitePrefix' => 'gaggiaspb',
            'category_id' => 7,
            'order-title' => 'СПБ ТЦ ПИК',
        //'change-logo' => true,
        ],
        'service-wmf' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 416-00-01',
            'spb' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13868,
            'id' => 33,
            'sitePrefix' => 'wmfspb',
            'category_id' => 7,
            'order-title' => 'СПБ ТЦ ПИК',
        //'change-logo' => true,
        ],
        'remont-la-cimbali' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 416-00-01',
            'spb' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13607,
            'id' => 34,
            'sitePrefix' => 'cimbalispb',
            'category_id' => 7,
            'order-title' => 'СПБ ТЦ ПИК',
        //'change-logo' => true,
        ],
        'schaerer-remont' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 416-00-01',
            'spb' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13746,
            'id' => 35,
            'sitePrefix' => 'schaererspb',
            'category_id' => 7,
            'order-title' => 'СПБ ТЦ ПИК',
        //'change-logo' => true,
        ],
        'franke-remont' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 416-00-01',
            'spb' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13537,
            'id' => 36,
            'sitePrefix' => 'frankespb',
            'category_id' => 7,
            'order-title' => 'СПБ ТЦ ПИК',
        //'change-logo' => true,
        ],
        'faema-remont' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 416-00-01',
            'spb' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13499,
            'id' => 37,
            'sitePrefix' => 'faemaspb',
            'category_id' => 7,
            'order-title' => 'СПБ ТЦ ПИК',
        //'change-logo' => true,
        ],
        'miele-fix' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 416-00-01',
            'spb' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13650,
            'id' => 38,
            'sitePrefix' => 'mielespb',
            'category_id' => 7,
            'order-title' => 'СПБ ТЦ ПИК',
        //'change-logo' => true,
        ],
        'remont-rancilio' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 416-00-01',
            'spb' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13694,
            'id' => 39,
            'sitePrefix' => 'ranciliospb',
            'category_id' => 7,
            'order-title' => 'СПБ ТЦ ПИК',
        //'change-logo' => true,
        ],
        'remont-nuova-simonelli' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 416-00-01',
            'spb' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13670,
            'id' => 40,
            'sitePrefix' => 'simonellispb',
            'category_id' => 7,
            'order-title' => 'СПБ ТЦ ПИК',
        //'change-logo' => true,
        ],
        'support-bork' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 416-00-01',
            'spb' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13368,
            'id' => 41,
            'sitePrefix' => 'borkspb',
            'category_id' => 7,
            'order-title' => 'СПБ ТЦ ПИК',
        //'change-logo' => true,
        ],
        'remont-promac' => [
            'phone-1' => '8 (495) 152-00-02',
            'phone-2' => '8 (812) 416-00-01',
            'spb' => true,
            'stickyMenu' => false,
            'mono' => true,
            'brand-id' => 13687,
            'id' => 42,
            'sitePrefix' => 'promacspb',
            'category_id' => 7,
            'order-title' => 'СПБ ТЦ ПИК',
        //'change-logo' => true,
        ],
        'repair-mobiles' => [
            'phone-1' => '8 (495) 432-00-03',
            'phone-2' => '8 (812) 701-00-02',            
            'stickyMenu' => false,
            'change-logo' => true,
            'mono' => false,
            'id' => 43,
            'sitePrefix' => 'spb-mobe',
            '1-line' => false,
            'category_id' => 1,
            'order-title' => 'МСК ЗАРЕЧНАЯ',
        ],
        'repair-laptops' => [
            'phone-1' => '8 (495) 152-80-00',
            'phone-2' => '8 (812) 701-00-02',            
            'stickyMenu' => false,
            'change-logo' => true,
            'mono' => false,
            'id' => 44,
            'sitePrefix' => 'laprops',
            '1-line' => false,
            'category_id' => 3,
            'order-title' => 'МСК ЗАРЕЧНАЯ',
        ],
        'repair-watch' => [
            'phone-1' => '8 (495) 256-00-80',
            'phone-2' => '8 (812) 701-00-02',            
            'stickyMenu' => false,
            'change-logo' => true,
            'mono' => false,
            'id' => 45,
            'sitePrefix' => 'watch',
            '1-line' => false,
            'category_id' => 4,
            'order-title' => 'МСК ЗАРЕЧНАЯ',
        ],
        'tablets-repair' => [
            'phone-1' => '8 (495) 432-00-20',
            'phone-2' => '8 (812) 701-00-02',            
            'stickyMenu' => false,
            'change-logo' => true,
            'mono' => false,
            'id' => 46,
            'sitePrefix' => 'tablets',
            '1-line' => false,
            'category_id' => 2,
            'order-title' => 'МСК ЗАРЕЧНАЯ',
        ],
        'repair-cameras' => [
            'phone-1' => '8 (495) 320-80-08',
            'phone-2' => '8 (812) 701-00-02',            
            'stickyMenu' => false,
            'change-logo' => true,
            'mono' => false,
            'id' => 47,
            'sitePrefix' => 'cameras',
            '1-line' => true,
            'category_id' => 5,
            'order-title' => 'МСК ЗАРЕЧНАЯ',
        ],
        'ifixme' => [
            'phone-1' => '8 (495) 181-00-07',
            'phone-2' => '8 (812) 701-00-02',            
            'stickyMenu' => false,
            'change-logo' => true,
            'mono' => false,
            'id' => 48,
            'sitePrefix' => 'ifixme',
            '1-line' => false,
            'category_id' => 0,
            'order-title' => 'МСК ЗАРЕЧНАЯ',
            'theme' => 'ifixme',
            'multi_category' => true
        ],
        'remont' => [
            'phone-1' => '8 (499) 450-90-08',
            'phone-2' => '8 (812) 643-21-07',
            'stickyMenu' => true,
            'mono' => false,
            'id' => 49,
            'sitePrefix' => 'remont_coffee',
            'region-sel' => true,
            'category_id' => 7,
            'theme' => 'remont_coffee',
            'order-title' => 'МСК Заречная',
            //'multi_category' => true
        ],
        'kofe03' => [
            'phone-1' => '8 (499) 450-90-08',
            'phone-2' => '8 (812) 643-21-07',
            'stickyMenu' => true,
            'mono' => false,
            'id' => 50,
            'sitePrefix' => 'kofe03',
            'region-sel' => true,
            'category_id' => 7,
            'theme' => 'kofe03',
            'order-title' => 'МСК Заречная',
            //'multi_category' => true
        ],
        'coffee-help' => [
            'phone-1' => '<span class="header-phone-code-part">8 (499) </span> <span class="header-phone-number-part">450-90-08</span>',
            'phone-2' => '8 (812) 643-21-07',
            'stickyMenu' => true,
            'mono' => false,
            'id' => 51,
            'sitePrefix' => 'coffeHelp',
            'region-sel' => true,
            'category_id' => 7,
            'theme' => 'coffeHelp',
            'order-title' => 'МСК Заречная',
            //'multi_category' => true
        ],
    ],
];
