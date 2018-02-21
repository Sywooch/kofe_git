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
            ['model' => 'Bork C805', 'count' => '312', 'category' => 'Кофемашин'],
            ['model' => 'Bork C804', 'count' => '452', 'category' => 'Кофемашин'],
            ['model' => 'Bork C500', 'count' => '294', 'category' => 'Кофемашин'],
            ['model' => 'Bork Z6', 'count' => '358', 'category' => 'Кофемашин'],
            ['model' => 'Bork C802 Gold', 'count' => '114', 'category' => 'Кофемашин'],
            ['model' => 'Bork U800', 'count' => '153', 'category' => 'Мультиварок'],
            ['model' => 'Bork U700', 'count' => '162', 'category' => 'Мультиварок'],
            ['model' => 'Bork U600', 'count' => '256', 'category' => 'Мультиварок'],
            ['model' => 'Bork U702', 'count' => '200', 'category' => 'Мультиварок'],
        ],
        1 => [
            ['model' => 'Bosch TES 80521 RW', 'count' => '312', 'category' => 'Кофемашин'],
            ['model' => 'Bosch TES 80721 RW', 'count' => '145', 'category' => 'Кофемашин'],
            ['model' => 'Bosch TES 60729 RW', 'count' => '139', 'category' => 'Кофемашин'],
            ['model' => 'Bosch TCA 5601', 'count' => '341', 'category' => 'Кофемашин'],
            ['model' => 'Bosch TIS 30129 RW', 'count' => '212', 'category' => 'Кофемашин'],
            ['model' => 'Bosch MUC24B64', 'count' => '246', 'category' => 'Мультиварок'],
            ['model' => 'Bosch MUC22B42', 'count' => '237', 'category' => 'Мультиварок'],
            ['model' => 'Bosch MUC28B64', 'count' => '220', 'category' => 'Мультиварок'],
            ['model' => 'Bosch MUC88B68', 'count' => '278', 'category' => 'Мультиварок'],
            ['model' => 'Bosch KMF40SA20', 'count' => '271', 'category' => 'Холодильников'],
            ['model' => 'Bosch KAG90AI20', 'count' => '251', 'category' => 'Холодильников'],
            ['model' => 'Bosch KAN58A55', 'count' => '95', 'category' => 'Холодильников'],
            ['model' => 'Bosch KAI90VI20', 'count' => '251', 'category' => 'Холодильников'],
        ],
        2 => [
            ['model' => 'DeLonghi ECAM 650.85.MS', 'count' => '312', 'category' => 'Кофемашин'],
            ['model' => 'DeLonghi ESAM 6904 M', 'count' => '246', 'category' => 'Кофемашин'],
            ['model' => 'DeLonghi ECAM 510.55.M', 'count' => '416', 'category' => 'Кофемашин'],
            ['model' => 'DeLonghi ETAM 36.364 M', 'count' => '236', 'category' => 'Кофемашин'],
            ['model' => 'DeLonghi ESAM 04.110 B Magnifica', 'count' => '284', 'category' => 'Кофемашин'],
        ],
        17 => [
            ['model' => 'Faema E98 President S2', 'count' => '212', 'category' => 'Кофемашин'],
            ['model' => 'Faema Enova A2 Tall Cup Version', 'count' => '119', 'category' => 'Кофемашин'],
            ['model' => 'Faema Carisma S/1', 'count' => '168', 'category' => 'Кофемашин'],
            ['model' => 'Faema Due S2', 'count' => '292', 'category' => 'Кофемашин'],
            ['model' => 'Faema Emblema S4', 'count' => '147', 'category' => 'Кофемашин'],
        ],
        12 => [
            ['model' => 'Franke Flair', 'count' => '150', 'category' => 'Кофемашин'],
            ['model' => 'Franke Spectra X', 'count' => '136', 'category' => 'Кофемашин'],
            ['model' => 'Franke Pura Pronto', 'count' => '112', 'category' => 'Кофемашин'],
            ['model' => 'Franke Evolution Top', 'count' => '137', 'category' => 'Кофемашин'],
            ['model' => 'Franke Pura Fresco', 'count' => '334', 'category' => 'Кофемашин'],
            ['model' => 'Franke FSBS 6001 NF IWD XS A+', 'count' => '165', 'category' => 'Холодильников'],
            ['model' => 'Franke FCB 4001 NF S BK A+', 'count' => '340', 'category' => 'Холодильников'],
            ['model' => 'Franke FCB 3401 NS XS', 'count' => '311', 'category' => 'Холодильников'],
            ['model' => 'Franke FCB 3401 NS SH', 'count' => '315', 'category' => 'Холодильников'],
        ],
        11 => [
            ['model' => 'Gaggia Accademia', 'count' => '324', 'category' => 'Кофемашин'],
            ['model' => 'Gaggia Titanium Office', 'count' => '264', 'category' => 'Кофемашин'],
            ['model' => 'Gaggia Platinum Vision', 'count' => '159', 'category' => 'Кофемашин'],
            ['model' => 'Gaggia Unica', 'count' => '260', 'category' => 'Кофемашин'],
            ['model' => 'Gaggia Babila', 'count' => '131', 'category' => 'Кофемашин'],
        ],
        8 => [
            ['model' => 'Jura Giga X9 Professional', 'count' => '282', 'category' => 'Кофемашин'],
            ['model' => 'Jura Giga W3', 'count' => '226', 'category' => 'Кофемашин'],
            ['model' => 'Jura Impressa XJ5 Professional', 'count' => '118', 'category' => 'Кофемашин'],
            ['model' => 'Jura Impressa Z9 Aluminium', 'count' => '188', 'category' => 'Кофемашин'],
            ['model' => 'Jura Impressa XS90', 'count' => '289', 'category' => 'Кофемашин'],
        ],
        3 => [
            ['model' => 'Krups EA9078', 'count' => '204', 'category' => 'Кофемашин'],
            ['model' => 'Krups EA9010', 'count' => '329', 'category' => 'Кофемашин'],
            ['model' => 'Krups EA 891D', 'count' => '298', 'category' => 'Кофемашин'],
            ['model' => 'Krups EA8320', 'count' => '252', 'category' => 'Кофемашин'],
            ['model' => 'Krups EA8808', 'count' => '118', 'category' => 'Кофемашин'],
        ],
        15 => [
            ['model' => 'La Cimbali M39 Dosatron TE DT2', 'count' => '247', 'category' => 'Кофемашин'],
            ['model' => 'La Cimbali Q10 Touch', 'count' => '239', 'category' => 'Кофемашин'],
            ['model' => 'La Cimbali M29 START C/2', 'count' => '327', 'category' => 'Кофемашин'],
            ['model' => 'La Cimbali M21 Junior S/1', 'count' => '149', 'category' => 'Кофемашин'],
            ['model' => 'La Cimbali M1 Turbosteam', 'count' => '187', 'category' => 'Кофемашин'],
        ],
        14 => [
            ['model' => 'Melitta Caffeo Barista TSP', 'count' => '173', 'category' => 'Кофемашин'],
            ['model' => 'Melitta Caffeo Barista T', 'count' => '100', 'category' => 'Кофемашин'],
            ['model' => 'Melitta Caffeo Bistro', 'count' => '198', 'category' => 'Кофемашин'],
            ['model' => 'Melitta Caffeo Lattea', 'count' => '132', 'category' => 'Кофемашин'],
            ['model' => 'Melitta Caffeo Lounge black', 'count' => '339', 'category' => 'Кофемашин'],
        ],
        7 => [
            ['model' => 'Miele CVA 6805', 'count' => '295', 'category' => 'Кофемашин'],
            ['model' => 'Miele CVA 6401', 'count' => '230', 'category' => 'Кофемашин'],
            ['model' => 'Miele CM 7500', 'count' => '153', 'category' => 'Кофемашин'],
            ['model' => 'Miele CM 6150', 'count' => '300', 'category' => 'Кофемашин'],
            ['model' => 'Miele CM 6110', 'count' => '216', 'category' => 'Кофемашин'],
            ['model' => 'Miele KFN 14947 SDEed', 'count' => '241', 'category' => 'Холодильников'],
            ['model' => 'Miele KFN 29683 D obsw', 'count' => '339', 'category' => 'Холодильников'],
            ['model' => 'Miele K 28463 D', 'count' => '100', 'category' => 'Холодильников'],
            ['model' => 'Miele KFN 29032 D edo', 'count' => '254', 'category' => 'Холодильников'],
        ],
        19 => [
            ['model' => 'Nivona CafeRomatica 840', 'count' => '160', 'category' => 'Кофемашин'],
            ['model' => 'Nivona CafeRomatica 765', 'count' => '341', 'category' => 'Кофемашин'],
            ['model' => 'Nivona CafeRomatica 745', 'count' => '247', 'category' => 'Кофемашин'],
            ['model' => 'Nivona CafeRomatica 757', 'count' => '323', 'category' => 'Кофемашин'],
            ['model' => 'Nivona CafeRomatica 656', 'count' => '177', 'category' => 'Кофемашин'],
        ],
        13 => [
            ['model' => 'Nuova Simonelli Aurelia II T3 2Gr V', 'count' => '143', 'category' => 'Кофемашин'],
            ['model' => 'Nuova Simonelli Talento Plus', 'count' => '224', 'category' => 'Кофемашин'],
            ['model' => 'Nuova Simonelli Prontobar', 'count' => '312', 'category' => 'Кофемашин'],
            ['model' => 'Nuova Simonelli Appia II 3Gr S', 'count' => '243', 'category' => 'Кофемашин'],
            ['model' => 'Nuova Simonelli Appia V 1Gr', 'count' => '245', 'category' => 'Кофемашин'],
        ],
        4 => [
            ['model' => 'Philips HD8847', 'count' => '138', 'category' => 'Кофемашин'],
            ['model' => 'Philips HD8848', 'count' => '312', 'category' => 'Кофемашин'],
            ['model' => 'Philips EP4050', 'count' => '225', 'category' => 'Кофемашин'],
            ['model' => 'Philips HD8828', 'count' => '248', 'category' => 'Кофемашин'],
            ['model' => 'Philips EP4010', 'count' => '186', 'category' => 'Кофемашин'],
            ['model' => 'Philips HD3197/03 ', 'count' => '134', 'category' => 'Мультиварок'],
            ['model' => 'Philips HD2173', 'count' => '198', 'category' => 'Мультиварок'],
            ['model' => 'Philips HD3137/03', 'count' => '257', 'category' => 'Мультиварок'],
            ['model' => 'Philips HD3065/03', 'count' => '308', 'category' => 'Мультиварок'],
        ],
        16 => [
            ['model' => 'Promac Green Compact ME 2GR', 'count' => '98', 'category' => 'Кофемашин'],
            ['model' => 'Promac Club ME 1GR', 'count' => '180', 'category' => 'Кофемашин'],
            ['model' => 'Promac Club PU/S', 'count' => '267', 'category' => 'Кофемашин'],
            ['model' => 'Promac Green PU 2GR', 'count' => '229', 'category' => 'Кофемашин'],
            ['model' => 'Promac Green ME 2GR', 'count' => '84', 'category' => 'Кофемашин'],
        ],
        18 => [
            ['model' => 'Rancilio Classe 7E 2 gr.', 'count' => '107', 'category' => 'Кофемашин'],
            ['model' => 'Rancilio Silvia', 'count' => '161', 'category' => 'Кофемашин'],
            ['model' => 'Rancilio Classe 7S 2 Gr', 'count' => '187', 'category' => 'Кофемашин'],
            ['model' => 'Rancilio Classe 9S 3gr.', 'count' => '223', 'category' => 'Кофемашин'],
            ['model' => 'Rancilio Epoca E 1gr.', 'count' => '204', 'category' => 'Кофемашин'],
        ],
        5 => [
            ['model' => 'Saeco Aroma SE 300', 'count' => '91', 'category' => 'Кофемашин'],
            ['model' => 'Saeco Aroma Compact SE 200', 'count' => '157', 'category' => 'Кофемашин'],
            ['model' => 'Saeco HD 8953', 'count' => '109', 'category' => 'Кофемашин'],
            ['model' => 'Saeco SM 7683', 'count' => '165', 'category' => 'Кофемашин'],
            ['model' => 'Saeco HD 8966 GranBaristo', 'count' => '334', 'category' => 'Кофемашин'],
        ],
        10 => [
            ['model' => 'Schaerer Coffee Prime', 'count' => '145', 'category' => 'Кофемашин'],
            ['model' => 'Schaerer Coffee Joy', 'count' => '125', 'category' => 'Кофемашин'],
            ['model' => 'Schaerer Ambient 1', 'count' => '253', 'category' => 'Кофемашин'],
            ['model' => 'Schaerer Coffee Art', 'count' => '227', 'category' => 'Кофемашин'],
            ['model' => 'Schaerer Siena 2', 'count' => '295', 'category' => 'Кофемашин'],
        ],
        6 => [
            ['model' => 'Siemens TI903209RW', 'count' => '144', 'category' => 'Кофемашин'],
            ['model' => 'Siemens TE809F01', 'count' => '147', 'category' => 'Кофемашин'],
            ['model' => 'Siemens TE603201 RW', 'count' => '206', 'category' => 'Кофемашин'],
            ['model' => 'Siemens TK 76001', 'count' => '194', 'category' => 'Кофемашин'],
            ['model' => 'Siemens TI305206RW', 'count' => '125', 'category' => 'Кофемашин'],
            ['model' => 'Siemens KA92NLB35', 'count' => '129', 'category' => 'Холодильников'],
            ['model' => 'Siemens KF91NPJ20', 'count' => '341', 'category' => 'Холодильников'],
            ['model' => 'Siemens KM40FSB20', 'count' => '195', 'category' => 'Холодильников'],
            ['model' => 'Siemens KG39NSB20', 'count' => '240', 'category' => 'Холодильников'],
        ],
        20 => [
            ['model' => 'WMF Bistro!', 'count' => '321', 'category' => 'Кофемашин'],
            ['model' => 'WMF 1800 S', 'count' => '154', 'category' => 'Кофемашин'],
            ['model' => 'WMF 1100 S', 'count' => '262', 'category' => 'Кофемашин'],
            ['model' => 'WMF 900 S', 'count' => '207', 'category' => 'Кофемашин'],
            ['model' => 'WMF 450 Touch', 'count' => '278', 'category' => 'Кофемашин'],
        ],
    ];

    public function run() {
        $charts = [];
        if (!isset($this->models[CController::$monoBrand['id']]))
            return;
        foreach ($this->models[CController::$monoBrand['id']] as $model) {
            $charts[$model['category']][] = $model;
        }
        return $this->render('chart', ['charts' => $charts]);
    }

}
