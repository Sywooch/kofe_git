<?php

namespace kofe03\widgets\menu;

use yii\base\Widget;
use app\components\CController;

class LeftMenu extends Widget {

    public $curUrl = '';
    public $menus = [
        'uslugi-i-ceny' => 'Услуги и цены',
        'o-kompanii' => 'О компании',
        'garantiya' => 'Гарантия',
        'diagnostika' => 'Диагностика',
        'voprosy-otvety' => 'Вопросы ответы',
        'srochnyj-remont' => 'Срочный ремонт',
        'dostavka' => 'Доставка',
        'otzyvy' => 'Отзывы',
        'oplata' => 'Оплата',
        'polzovatelskoe-soglashenie' => 'Пользовательское соглашение',
        'kontakty' => 'Контакты',
    ];

    public function run() {

        return $this->render('leftMenu', ['rows' => $this->menus, 'curUrl' => $this->curUrl]);
    }

}
