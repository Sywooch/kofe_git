<?php

namespace multicatX\widgets\lists;

use yii\base\Widget;
use app\components\CController;

class Chart extends Widget {

    public $brands = [
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
    ];

    public function run() {

        return $this->render('chart');
    }

}
