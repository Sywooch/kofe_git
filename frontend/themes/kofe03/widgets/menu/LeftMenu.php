<?php

namespace kofe03\widgets\menu;

use yii\base\Widget;
use app\components\CController;

class LeftMenu extends Widget {
    
    public $curUrl = '';

    public function run() {        
        $menus = [
            'uslugi-i-ceny' => 'Услуги и цены',
            'o-kompanii' => 'О компании',
            'garantiya' => 'Гарантия',
            'diagnostika' => 'Диагностика',
            'voprosy-otvety' => 'Вопросы ответы',
            'srochnyj-remont' => 'Срочный ремонт',
            'dostavka' => 'Доставка',
            'otzyvy' => 'Отзывы',
            'oplata' => 'Оплата',
            'policy' => 'Пользовательское соглашение',
            'kontakty' => 'Контакты',
        ];
        return $this->render('leftMenu', ['rows' => $menus, 'curUrl' => $this->curUrl]);
    }

}
