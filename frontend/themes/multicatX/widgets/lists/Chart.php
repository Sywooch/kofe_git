<?php

namespace multicatX\widgets\lists;

use yii\base\Widget;
use app\components\CController;

class Chart extends Widget {

    public $categories = [
        7 => [
            'brands' => [
                9 => 'bork_rdy.png',
                1 => 'bosch_rdy.png',
                2 => 'delonghi_rdy.png',
                17 => 'faema_rdy.png',
                12 => 'franke_rdy.png',
                11 => 'gaggia_rdy.png',
                8 => 'jura_rdy.png',
                3 => 'krups_rdy.png',
                15 => 'la_cimbali_rdy.png',
                14 => 'melitta_rdy.png',
                7 => 'miele_rdy.png',
                19 => 'nivona_rdy.png',
                13 => 'nuova_simonelli_rdy.png',
                4 => 'philips_rdy.png',
                16 => 'promac_rdy.png',
                18 => 'rancilio_rdy.png',
                5 => 'saeco_rdy.png',
                10 => 'schaerer_rdy.png',
                6 => 'siemens_rdy.png',
                20 => 'wmf_rdy.png',
            ],
        ]
    ];
    public $models = [
        9 => [
            ['name' => 'Bork C805', 'y' => '312', 'category' => 'Кофемашин'],
            ['name' => 'Bork C804', 'y' => '452', 'category' => 'Кофемашин'],
            ['name' => 'Bork C500', 'y' => '294', 'category' => 'Кофемашин'],
            ['name' => 'Bork Z6', 'y' => '358', 'category' => 'Кофемашин'],
            ['name' => 'Bork C802 Gold', 'y' => '114', 'category' => 'Кофемашин'],
            ['name' => 'Bork U800', 'y' => '153', 'category' => 'Мультиварок'],
            ['name' => 'Bork U700', 'y' => '162', 'category' => 'Мультиварок'],
            ['name' => 'Bork U600', 'y' => '256', 'category' => 'Мультиварок'],
            ['name' => 'Bork U702', 'y' => '200', 'category' => 'Мультиварок'],
        ],
        1 => [
            ['name' => 'Bosch TES 80521 RW', 'y' => '312', 'category' => 'Кофемашин'],
            ['name' => 'Bosch TES 80721 RW', 'y' => '145', 'category' => 'Кофемашин'],
            ['name' => 'Bosch TES 60729 RW', 'y' => '139', 'category' => 'Кофемашин'],
            ['name' => 'Bosch TCA 5601', 'y' => '341', 'category' => 'Кофемашин'],
            ['name' => 'Bosch TIS 30129 RW', 'y' => '212', 'category' => 'Кофемашин'],
            ['name' => 'Bosch MUC24B64', 'y' => '246', 'category' => 'Мультиварок'],
            ['name' => 'Bosch MUC22B42', 'y' => '237', 'category' => 'Мультиварок'],
            ['name' => 'Bosch MUC28B64', 'y' => '220', 'category' => 'Мультиварок'],
            ['name' => 'Bosch MUC88B68', 'y' => '278', 'category' => 'Мультиварок'],
            ['name' => 'Bosch KMF40SA20', 'y' => '271', 'category' => 'Холодильников'],
            ['name' => 'Bosch KAG90AI20', 'y' => '251', 'category' => 'Холодильников'],
            ['name' => 'Bosch KAN58A55', 'y' => '95', 'category' => 'Холодильников'],
            ['name' => 'Bosch KAI90VI20', 'y' => '251', 'category' => 'Холодильников'],
        ],
        2 => [
            ['name' => 'DeLonghi ECAM 650.85.MS', 'y' => '312', 'category' => 'Кофемашин'],
            ['name' => 'DeLonghi ESAM 6904 M', 'y' => '246', 'category' => 'Кофемашин'],
            ['name' => 'DeLonghi ECAM 510.55.M', 'y' => '416', 'category' => 'Кофемашин'],
            ['name' => 'DeLonghi ETAM 36.364 M', 'y' => '236', 'category' => 'Кофемашин'],
            ['name' => 'DeLonghi ESAM 04.110 B Magnifica', 'y' => '284', 'category' => 'Кофемашин'],
        ],
        17 => [
            ['name' => 'Faema E98 President S2', 'y' => '212', 'category' => 'Кофемашин'],
            ['name' => 'Faema Enova A2 Tall Cup Version', 'y' => '119', 'category' => 'Кофемашин'],
            ['name' => 'Faema Carisma S/1', 'y' => '168', 'category' => 'Кофемашин'],
            ['name' => 'Faema Due S2', 'y' => '292', 'category' => 'Кофемашин'],
            ['name' => 'Faema Emblema S4', 'y' => '147', 'category' => 'Кофемашин'],
        ],
        12 => [
            ['name' => 'Franke Flair', 'y' => '150', 'category' => 'Кофемашин'],
            ['name' => 'Franke Spectra X', 'y' => '136', 'category' => 'Кофемашин'],
            ['name' => 'Franke Pura Pronto', 'y' => '112', 'category' => 'Кофемашин'],
            ['name' => 'Franke Evolution Top', 'y' => '137', 'category' => 'Кофемашин'],
            ['name' => 'Franke Pura Fresco', 'y' => '334', 'category' => 'Кофемашин'],
            ['name' => 'Franke FSBS 6001 NF IWD XS A+', 'y' => '165', 'category' => 'Холодильников'],
            ['name' => 'Franke FCB 4001 NF S BK A+', 'y' => '340', 'category' => 'Холодильников'],
            ['name' => 'Franke FCB 3401 NS XS', 'y' => '311', 'category' => 'Холодильников'],
            ['name' => 'Franke FCB 3401 NS SH', 'y' => '315', 'category' => 'Холодильников'],
        ],
        11 => [
            ['name' => 'Gaggia Accademia', 'y' => '324', 'category' => 'Кофемашин'],
            ['name' => 'Gaggia Titanium Office', 'y' => '264', 'category' => 'Кофемашин'],
            ['name' => 'Gaggia Platinum Vision', 'y' => '159', 'category' => 'Кофемашин'],
            ['name' => 'Gaggia Unica', 'y' => '260', 'category' => 'Кофемашин'],
            ['name' => 'Gaggia Babila', 'y' => '131', 'category' => 'Кофемашин'],
        ],
        8 => [
            ['name' => 'Jura Giga X9 Professional', 'y' => '282', 'category' => 'Кофемашин'],
            ['name' => 'Jura Giga W3', 'y' => '226', 'category' => 'Кофемашин'],
            ['name' => 'Jura Impressa XJ5 Professional', 'y' => '118', 'category' => 'Кофемашин'],
            ['name' => 'Jura Impressa Z9 Aluminium', 'y' => '188', 'category' => 'Кофемашин'],
            ['name' => 'Jura Impressa XS90', 'y' => '289', 'category' => 'Кофемашин'],
        ],
        3 => [
            ['name' => 'Krups EA9078', 'y' => '204', 'category' => 'Кофемашин'],
            ['name' => 'Krups EA9010', 'y' => '329', 'category' => 'Кофемашин'],
            ['name' => 'Krups EA 891D', 'y' => '298', 'category' => 'Кофемашин'],
            ['name' => 'Krups EA8320', 'y' => '252', 'category' => 'Кофемашин'],
            ['name' => 'Krups EA8808', 'y' => '118', 'category' => 'Кофемашин'],
        ],
        15 => [
            ['name' => 'La Cimbali M39 Dosatron TE DT2', 'y' => '247', 'category' => 'Кофемашин'],
            ['name' => 'La Cimbali Q10 Touch', 'y' => '239', 'category' => 'Кофемашин'],
            ['name' => 'La Cimbali M29 START C/2', 'y' => '327', 'category' => 'Кофемашин'],
            ['name' => 'La Cimbali M21 Junior S/1', 'y' => '149', 'category' => 'Кофемашин'],
            ['name' => 'La Cimbali M1 Turbosteam', 'y' => '187', 'category' => 'Кофемашин'],
        ],
        14 => [
            ['name' => 'Melitta Caffeo Barista TSP', 'y' => '173', 'category' => 'Кофемашин'],
            ['name' => 'Melitta Caffeo Barista T', 'y' => '100', 'category' => 'Кофемашин'],
            ['name' => 'Melitta Caffeo Bistro', 'y' => '198', 'category' => 'Кофемашин'],
            ['name' => 'Melitta Caffeo Lattea', 'y' => '132', 'category' => 'Кофемашин'],
            ['name' => 'Melitta Caffeo Lounge black', 'y' => '339', 'category' => 'Кофемашин'],
        ],
        7 => [
            ['name' => 'Miele CVA 6805', 'y' => '295', 'category' => 'Кофемашин'],
            ['name' => 'Miele CVA 6401', 'y' => '230', 'category' => 'Кофемашин'],
            ['name' => 'Miele CM 7500', 'y' => '153', 'category' => 'Кофемашин'],
            ['name' => 'Miele CM 6150', 'y' => '300', 'category' => 'Кофемашин'],
            ['name' => 'Miele CM 6110', 'y' => '216', 'category' => 'Кофемашин'],
            ['name' => 'Miele KFN 14947 SDEed', 'y' => '241', 'category' => 'Холодильников'],
            ['name' => 'Miele KFN 29683 D obsw', 'y' => '339', 'category' => 'Холодильников'],
            ['name' => 'Miele K 28463 D', 'y' => '100', 'category' => 'Холодильников'],
            ['name' => 'Miele KFN 29032 D edo', 'y' => '254', 'category' => 'Холодильников'],
        ],
        19 => [
            ['name' => 'Nivona CafeRomatica 840', 'y' => '160', 'category' => 'Кофемашин'],
            ['name' => 'Nivona CafeRomatica 765', 'y' => '341', 'category' => 'Кофемашин'],
            ['name' => 'Nivona CafeRomatica 745', 'y' => '247', 'category' => 'Кофемашин'],
            ['name' => 'Nivona CafeRomatica 757', 'y' => '323', 'category' => 'Кофемашин'],
            ['name' => 'Nivona CafeRomatica 656', 'y' => '177', 'category' => 'Кофемашин'],
        ],
        13 => [
            ['name' => 'Nuova Simonelli Aurelia II T3 2Gr V', 'y' => '143', 'category' => 'Кофемашин'],
            ['name' => 'Nuova Simonelli Talento Plus', 'y' => '224', 'category' => 'Кофемашин'],
            ['name' => 'Nuova Simonelli Prontobar', 'y' => '312', 'category' => 'Кофемашин'],
            ['name' => 'Nuova Simonelli Appia II 3Gr S', 'y' => '243', 'category' => 'Кофемашин'],
            ['name' => 'Nuova Simonelli Appia V 1Gr', 'y' => '245', 'category' => 'Кофемашин'],
        ],
        4 => [
            ['name' => 'Philips HD8847', 'y' => '138', 'category' => 'Кофемашин'],
            ['name' => 'Philips HD8848', 'y' => '312', 'category' => 'Кофемашин'],
            ['name' => 'Philips EP4050', 'y' => '225', 'category' => 'Кофемашин'],
            ['name' => 'Philips HD8828', 'y' => '248', 'category' => 'Кофемашин'],
            ['name' => 'Philips EP4010', 'y' => '186', 'category' => 'Кофемашин'],
            ['name' => 'Philips HD3197/03 ', 'y' => '134', 'category' => 'Мультиварок'],
            ['name' => 'Philips HD2173', 'y' => '198', 'category' => 'Мультиварок'],
            ['name' => 'Philips HD3137/03', 'y' => '257', 'category' => 'Мультиварок'],
            ['name' => 'Philips HD3065/03', 'y' => '308', 'category' => 'Мультиварок'],
        ],
        16 => [
            ['name' => 'Promac Green Compact ME 2GR', 'y' => '98', 'category' => 'Кофемашин'],
            ['name' => 'Promac Club ME 1GR', 'y' => '180', 'category' => 'Кофемашин'],
            ['name' => 'Promac Club PU/S', 'y' => '267', 'category' => 'Кофемашин'],
            ['name' => 'Promac Green PU 2GR', 'y' => '229', 'category' => 'Кофемашин'],
            ['name' => 'Promac Green ME 2GR', 'y' => '84', 'category' => 'Кофемашин'],
        ],
        18 => [
            ['name' => 'Rancilio Classe 7E 2 gr.', 'y' => '107', 'category' => 'Кофемашин'],
            ['name' => 'Rancilio Silvia', 'y' => '161', 'category' => 'Кофемашин'],
            ['name' => 'Rancilio Classe 7S 2 Gr', 'y' => '187', 'category' => 'Кофемашин'],
            ['name' => 'Rancilio Classe 9S 3gr.', 'y' => '223', 'category' => 'Кофемашин'],
            ['name' => 'Rancilio Epoca E 1gr.', 'y' => '204', 'category' => 'Кофемашин'],
        ],
        5 => [
            ['name' => 'Saeco Aroma SE 300', 'y' => '91', 'category' => 'Кофемашин'],
            ['name' => 'Saeco Aroma Compact SE 200', 'y' => '157', 'category' => 'Кофемашин'],
            ['name' => 'Saeco HD 8953', 'y' => '109', 'category' => 'Кофемашин'],
            ['name' => 'Saeco SM 7683', 'y' => '165', 'category' => 'Кофемашин'],
            ['name' => 'Saeco HD 8966 GranBaristo', 'y' => '334', 'category' => 'Кофемашин'],
        ],
        10 => [
            ['name' => 'Schaerer Coffee Prime', 'y' => '145', 'category' => 'Кофемашин'],
            ['name' => 'Schaerer Coffee Joy', 'y' => '125', 'category' => 'Кофемашин'],
            ['name' => 'Schaerer Ambient 1', 'y' => '253', 'category' => 'Кофемашин'],
            ['name' => 'Schaerer Coffee Art', 'y' => '227', 'category' => 'Кофемашин'],
            ['name' => 'Schaerer Siena 2', 'y' => '295', 'category' => 'Кофемашин'],
        ],
        6 => [
            ['name' => 'Siemens TI903209RW', 'y' => '144', 'category' => 'Кофемашин'],
            ['name' => 'Siemens TE809F01', 'y' => '147', 'category' => 'Кофемашин'],
            ['name' => 'Siemens TE603201 RW', 'y' => '206', 'category' => 'Кофемашин'],
            ['name' => 'Siemens TK 76001', 'y' => '194', 'category' => 'Кофемашин'],
            ['name' => 'Siemens TI305206RW', 'y' => '125', 'category' => 'Кофемашин'],
            ['name' => 'Siemens KA92NLB35', 'y' => '129', 'category' => 'Холодильников'],
            ['name' => 'Siemens KF91NPJ20', 'y' => '341', 'category' => 'Холодильников'],
            ['name' => 'Siemens KM40FSB20', 'y' => '195', 'category' => 'Холодильников'],
            ['name' => 'Siemens KG39NSB20', 'y' => '240', 'category' => 'Холодильников'],
        ],
        20 => [
            ['name' => 'WMF Bistro!', 'y' => '321', 'category' => 'Кофемашин'],
            ['name' => 'WMF 1800 S', 'y' => '154', 'category' => 'Кофемашин'],
            ['name' => 'WMF 1100 S', 'y' => '262', 'category' => 'Кофемашин'],
            ['name' => 'WMF 900 S', 'y' => '207', 'category' => 'Кофемашин'],
            ['name' => 'WMF 450 Touch', 'y' => '278', 'category' => 'Кофемашин'],
        ],
    ];

    public function run() {
        return;
        $charts = [];
        if (!isset($this->models[CController::$monoBrand['id']]))
            return;
        foreach ($this->models[CController::$monoBrand['id']] as $model) {
            $charts[$model['category']][] = $model;
        }
        return $this->render('chart', ['charts' => $charts]);
    }

}
