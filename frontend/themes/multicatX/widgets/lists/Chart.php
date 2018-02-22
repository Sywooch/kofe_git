<?php

namespace multicatX\widgets\lists;

use yii\base\Widget;
use app\components\CController;

class Chart extends Widget {

    public $categories = [
        'Кофемашин' => [
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
        'Мультиварок' => [
            9 => 'bork_m.png',
            1 => 'bosch_m.png',
            4 => 'philips_m.png',
        ],
        'Холодильников' => [
            12 => 'franke_h.png',
            1 => 'bosch_h.png',
            6 => 'siemens_h.png',
            7 => 'miele_h.png',
        ]
    ];
    public $models = [
        9 => [
            ['name' => 'Bork <br>C805', 'y' => 312, 'category' => 'Кофемашин'],
            ['name' => 'Bork <br>C804', 'y' => 452, 'category' => 'Кофемашин'],
            ['name' => 'Bork <br>C500', 'y' => 294, 'category' => 'Кофемашин'],
            ['name' => 'Bork <br>Z6', 'y' => 358, 'category' => 'Кофемашин'],
            ['name' => 'Bork <br>C802 Gold', 'y' => 114, 'category' => 'Кофемашин'],
            ['name' => 'Bork <br>U800', 'y' => 153, 'category' => 'Мультиварок'],
            ['name' => 'Bork <br>U700', 'y' => 162, 'category' => 'Мультиварок'],
            ['name' => 'Bork <br>U600', 'y' => 256, 'category' => 'Мультиварок'],
            ['name' => 'Bork <br>U702', 'y' => 200, 'category' => 'Мультиварок'],
        ],
        1 => [
            ['name' => 'Bosch <br>TES 80521 RW', 'y' => 312, 'category' => 'Кофемашин'],
            ['name' => 'Bosch <br>TES 80721 RW', 'y' => 145, 'category' => 'Кофемашин'],
            ['name' => 'Bosch <br>TES 60729 RW', 'y' => 139, 'category' => 'Кофемашин'],
            ['name' => 'Bosch <br>TCA 5601', 'y' => 341, 'category' => 'Кофемашин'],
            ['name' => 'Bosch <br>TIS 30129 RW', 'y' => 212, 'category' => 'Кофемашин'],
            ['name' => 'Bosch <br>MUC24B64', 'y' => 246, 'category' => 'Мультиварок'],
            ['name' => 'Bosch <br>MUC22B42', 'y' => 237, 'category' => 'Мультиварок'],
            ['name' => 'Bosch <br>MUC28B64', 'y' => 220, 'category' => 'Мультиварок'],
            ['name' => 'Bosch <br>MUC88B68', 'y' => 278, 'category' => 'Мультиварок'],
            ['name' => 'Bosch <br>KMF40SA20', 'y' => 271, 'category' => 'Холодильников'],
            ['name' => 'Bosch <br>KAG90AI20', 'y' => 251, 'category' => 'Холодильников'],
            ['name' => 'Bosch <br>KAN58A55', 'y' => 95, 'category' => 'Холодильников'],
            ['name' => 'Bosch <br>KAI90VI20', 'y' => 251, 'category' => 'Холодильников'],
        ],
        2 => [
            ['name' => 'DeLonghi <br>ECAM 650.85.MS', 'y' => 312, 'category' => 'Кофемашин'],
            ['name' => 'DeLonghi <br>ESAM 6904 M', 'y' => 246, 'category' => 'Кофемашин'],
            ['name' => 'DeLonghi <br>ECAM 510.55.M', 'y' => 416, 'category' => 'Кофемашин'],
            ['name' => 'DeLonghi <br>ETAM 36.364 M', 'y' => 236, 'category' => 'Кофемашин'],
            ['name' => 'DeLonghi <br>ESAM 04.110 B Magnifica', 'y' => 284, 'category' => 'Кофемашин'],
        ],
        17 => [
            ['name' => 'Faema <br>E98 President S2', 'y' => 212, 'category' => 'Кофемашин'],
            ['name' => 'Faema <br>Enova A2 Tall Cup Version', 'y' => 119, 'category' => 'Кофемашин'],
            ['name' => 'Faema <br>Carisma S/1', 'y' => 168, 'category' => 'Кофемашин'],
            ['name' => 'Faema <br>Due S2', 'y' => 292, 'category' => 'Кофемашин'],
            ['name' => 'Faema <br>Emblema S4', 'y' => 147, 'category' => 'Кофемашин'],
        ],
        12 => [
            ['name' => 'Franke <br>Flair', 'y' => 150, 'category' => 'Кофемашин'],
            ['name' => 'Franke <br>Spectra X', 'y' => 136, 'category' => 'Кофемашин'],
            ['name' => 'Franke <br>Pura Pronto', 'y' => 112, 'category' => 'Кофемашин'],
            ['name' => 'Franke <br>Evolution Top', 'y' => 137, 'category' => 'Кофемашин'],
            ['name' => 'Franke <br>Pura Fresco', 'y' => 334, 'category' => 'Кофемашин'],
            ['name' => 'Franke <br>FSBS 6001 NF IWD XS A+', 'y' => 165, 'category' => 'Холодильников'],
            ['name' => 'Franke <br>FCB 4001 NF S BK A+', 'y' => 340, 'category' => 'Холодильников'],
            ['name' => 'Franke <br>FCB 3401 NS XS', 'y' => 311, 'category' => 'Холодильников'],
            ['name' => 'Franke <br>FCB 3401 NS SH', 'y' => 315, 'category' => 'Холодильников'],
        ],
        11 => [
            ['name' => 'Gaggia <br>Accademia', 'y' => 324, 'category' => 'Кофемашин'],
            ['name' => 'Gaggia <br>Titanium Office', 'y' => 264, 'category' => 'Кофемашин'],
            ['name' => 'Gaggia <br>Platinum Vision', 'y' => 159, 'category' => 'Кофемашин'],
            ['name' => 'Gaggia <br>Unica', 'y' => 260, 'category' => 'Кофемашин'],
            ['name' => 'Gaggia <br>Babila', 'y' => 131, 'category' => 'Кофемашин'],
        ],
        8 => [
            ['name' => 'Jura <br>Giga X9 Professional', 'y' => 282, 'category' => 'Кофемашин'],
            ['name' => 'Jura <br>Giga W3', 'y' => 226, 'category' => 'Кофемашин'],
            ['name' => 'Jura <br>Impressa XJ5 Professional', 'y' => 118, 'category' => 'Кофемашин'],
            ['name' => 'Jura <br>Impressa Z9 Aluminium', 'y' => 188, 'category' => 'Кофемашин'],
            ['name' => 'Jura <br>Impressa XS90', 'y' => 289, 'category' => 'Кофемашин'],
        ],
        3 => [
            ['name' => 'Krups <br>EA9078', 'y' => 204, 'category' => 'Кофемашин'],
            ['name' => 'Krups <br>EA9010', 'y' => 329, 'category' => 'Кофемашин'],
            ['name' => 'Krups <br>EA 891D', 'y' => 298, 'category' => 'Кофемашин'],
            ['name' => 'Krups <br>EA8320', 'y' => 252, 'category' => 'Кофемашин'],
            ['name' => 'Krups <br>EA8808', 'y' => 118, 'category' => 'Кофемашин'],
        ],
        15 => [
            ['name' => 'La Cimbali <br>M39 Dosatron TE DT2', 'y' => 247, 'category' => 'Кофемашин'],
            ['name' => 'La Cimbali <br>Q10 Touch', 'y' => 239, 'category' => 'Кофемашин'],
            ['name' => 'La Cimbali <br>M29 START C/2', 'y' => 327, 'category' => 'Кофемашин'],
            ['name' => 'La Cimbali <br>M21 Junior S/1', 'y' => 149, 'category' => 'Кофемашин'],
            ['name' => 'La Cimbali <br>M1 Turbosteam', 'y' => 187, 'category' => 'Кофемашин'],
        ],
        14 => [
            ['name' => 'Melitta Caffeo <br>Barista TSP', 'y' => 173, 'category' => 'Кофемашин'],
            ['name' => 'Melitta Caffeo <br>Barista T', 'y' => 100, 'category' => 'Кофемашин'],
            ['name' => 'Melitta Caffeo <br>Bistro', 'y' => 198, 'category' => 'Кофемашин'],
            ['name' => 'Melitta Caffeo <br>Lattea', 'y' => 132, 'category' => 'Кофемашин'],
            ['name' => 'Melitta Caffeo <br>Lounge black', 'y' => 339, 'category' => 'Кофемашин'],
        ],
        7 => [
            ['name' => 'Miele <br>CVA 6805', 'y' => 295, 'category' => 'Кофемашин'],
            ['name' => 'Miele <br>CVA 6401', 'y' => 230, 'category' => 'Кофемашин'],
            ['name' => 'Miele <br>CM 7500', 'y' => 153, 'category' => 'Кофемашин'],
            ['name' => 'Miele <br>CM 6150', 'y' => 300, 'category' => 'Кофемашин'],
            ['name' => 'Miele <br>CM 6110', 'y' => 216, 'category' => 'Кофемашин'],
            ['name' => 'Miele <br>KFN 14947 SDEed', 'y' => 241, 'category' => 'Холодильников'],
            ['name' => 'Miele <br>KFN 29683 D obsw', 'y' => 339, 'category' => 'Холодильников'],
            ['name' => 'Miele <br>K 28463 D', 'y' => 100, 'category' => 'Холодильников'],
            ['name' => 'Miele <br>KFN 29032 D edo', 'y' => 254, 'category' => 'Холодильников'],
        ],
        19 => [
            ['name' => 'Nivona <br>CafeRomatica 840', 'y' => 160, 'category' => 'Кофемашин'],
            ['name' => 'Nivona <br>CafeRomatica 765', 'y' => 341, 'category' => 'Кофемашин'],
            ['name' => 'Nivona <br>CafeRomatica 745', 'y' => 247, 'category' => 'Кофемашин'],
            ['name' => 'Nivona <br>CafeRomatica 757', 'y' => 323, 'category' => 'Кофемашин'],
            ['name' => 'Nivona <br>CafeRomatica 656', 'y' => 177, 'category' => 'Кофемашин'],
        ],
        13 => [
            ['name' => 'Nuova Simonelli <br>Aurelia II T3 2Gr V', 'y' => 143, 'category' => 'Кофемашин'],
            ['name' => 'Nuova Simonelli <br>Talento Plus', 'y' => 224, 'category' => 'Кофемашин'],
            ['name' => 'Nuova Simonelli <br>Prontobar', 'y' => 312, 'category' => 'Кофемашин'],
            ['name' => 'Nuova Simonelli <br>Appia II 3Gr S', 'y' => 243, 'category' => 'Кофемашин'],
            ['name' => 'Nuova Simonelli <br>Appia V 1Gr', 'y' => 245, 'category' => 'Кофемашин'],
        ],
        4 => [
            ['name' => 'Philips <br>HD8847', 'y' => 138, 'category' => 'Кофемашин'],
            ['name' => 'Philips <br>HD8848', 'y' => 312, 'category' => 'Кофемашин'],
            ['name' => 'Philips <br>EP4050', 'y' => 225, 'category' => 'Кофемашин'],
            ['name' => 'Philips <br>HD8828', 'y' => 248, 'category' => 'Кофемашин'],
            ['name' => 'Philips <br>EP4010', 'y' => 186, 'category' => 'Кофемашин'],
            ['name' => 'Philips <br>HD3197/03 ', 'y' => 134, 'category' => 'Мультиварок'],
            ['name' => 'Philips <br>HD2173', 'y' => 198, 'category' => 'Мультиварок'],
            ['name' => 'Philips <br>HD3137/03', 'y' => 257, 'category' => 'Мультиварок'],
            ['name' => 'Philips <br>HD3065/03', 'y' => 308, 'category' => 'Мультиварок'],
        ],
        16 => [
            ['name' => 'Promac <br>Green Compact ME 2GR', 'y' => 98, 'category' => 'Кофемашин'],
            ['name' => 'Promac <br>Club ME 1GR', 'y' => 180, 'category' => 'Кофемашин'],
            ['name' => 'Promac <br>Club PU/S', 'y' => 267, 'category' => 'Кофемашин'],
            ['name' => 'Promac <br>Green PU 2GR', 'y' => 229, 'category' => 'Кофемашин'],
            ['name' => 'Promac <br>Green ME 2GR', 'y' => 84, 'category' => 'Кофемашин'],
        ],
        18 => [
            ['name' => 'Rancilio <br>Classe 7E 2 gr.', 'y' => 107, 'category' => 'Кофемашин'],
            ['name' => 'Rancilio <br>Silvia', 'y' => 161, 'category' => 'Кофемашин'],
            ['name' => 'Rancilio <br>Classe 7S 2 Gr', 'y' => 187, 'category' => 'Кофемашин'],
            ['name' => 'Rancilio <br>Classe 9S 3gr.', 'y' => 223, 'category' => 'Кофемашин'],
            ['name' => 'Rancilio <br>Epoca E 1gr.', 'y' => 204, 'category' => 'Кофемашин'],
        ],
        5 => [
            ['name' => 'Saeco <br>Aroma SE 300', 'y' => 91, 'category' => 'Кофемашин'],
            ['name' => 'Saeco <br>Aroma Compact SE 200', 'y' => 157, 'category' => 'Кофемашин'],
            ['name' => 'Saeco <br>HD 8953', 'y' => 109, 'category' => 'Кофемашин'],
            ['name' => 'Saeco <br>SM 7683', 'y' => 165, 'category' => 'Кофемашин'],
            ['name' => 'Saeco <br>HD 8966 GranBaristo', 'y' => 334, 'category' => 'Кофемашин'],
        ],
        10 => [
            ['name' => 'Schaerer <br>Coffee Prime', 'y' => 145, 'category' => 'Кофемашин'],
            ['name' => 'Schaerer <br>Coffee Joy', 'y' => 125, 'category' => 'Кофемашин'],
            ['name' => 'Schaerer <br>Ambient 1', 'y' => 253, 'category' => 'Кофемашин'],
            ['name' => 'Schaerer <br>Coffee Art', 'y' => 227, 'category' => 'Кофемашин'],
            ['name' => 'Schaerer <br>Siena 2', 'y' => 295, 'category' => 'Кофемашин'],
        ],
        6 => [
            ['name' => 'Siemens <br>TI903209RW', 'y' => 144, 'category' => 'Кофемашин'],
            ['name' => 'Siemens <br>TE809F01', 'y' => 147, 'category' => 'Кофемашин'],
            ['name' => 'Siemens <br>TE603201 RW', 'y' => 206, 'category' => 'Кофемашин'],
            ['name' => 'Siemens <br>TK 76001', 'y' => 194, 'category' => 'Кофемашин'],
            ['name' => 'Siemens <br>TI305206RW', 'y' => 125, 'category' => 'Кофемашин'],
            ['name' => 'Siemens <br>KA92NLB35', 'y' => 129, 'category' => 'Холодильников'],
            ['name' => 'Siemens <br>KF91NPJ20', 'y' => 341, 'category' => 'Холодильников'],
            ['name' => 'Siemens <br>KM40FSB20', 'y' => 195, 'category' => 'Холодильников'],
            ['name' => 'Siemens <br>KG39NSB20', 'y' => 240, 'category' => 'Холодильников'],
        ],
        20 => [
            ['name' => 'WMF <br>Bistro!', 'y' => 321, 'category' => 'Кофемашин'],
            ['name' => 'WMF <br>1800 S', 'y' => 154, 'category' => 'Кофемашин'],
            ['name' => 'WMF <br>1100 S', 'y' => 262, 'category' => 'Кофемашин'],
            ['name' => 'WMF <br>900 S', 'y' => 207, 'category' => 'Кофемашин'],
            ['name' => 'WMF <br>450 Touch', 'y' => 278, 'category' => 'Кофемашин'],
        ],
    ];

    public function run() {

        $charts = [];
        if (!isset($this->models[CController::$monoBrand['id']]))
            return;
        foreach ($this->models[CController::$monoBrand['id']] as $model) {
            $charts[$model['category']][] = $model;
        }

        return $this->render('chart', ['charts' => $charts, 'categories' => $this->categories]);
    }

}
