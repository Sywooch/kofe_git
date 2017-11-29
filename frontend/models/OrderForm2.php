<?php

namespace frontend\models;

use yii\base\Model;
use Yii;

class OrderForm2 extends Model {

    public $phone;
    public $name;
    public $comment;
    public $agree;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            ['phone', 'required'],
            ['agree', 'required', 'requiredValue' => 1],
            [['name', 'comment'], 'default'],
            ['phone', 'match', 'pattern' => '/^\+7\s\([0-9]{3}\)\s[0-9]{3}\-[0-9]{2}\-[0-9]{2}$/', 'message' => ' Что-то не так' ],
        ];
    }

}
