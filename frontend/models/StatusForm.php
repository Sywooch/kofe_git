<?php

namespace frontend\models;

use yii\base\Model;
use Yii;

class StatusForm extends Model {

    public $phone;
    public $orderNumber;
    public $agree;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['phone', 'orderNumber'], 'required'],
            ['agree', 'required', 'requiredValue' => 1],
            ['phone', 'match', 'pattern' => '/^\+7\s\([0-9]{3}\)\s[0-9]{3}\-[0-9]{2}\-[0-9]{2}$/', 'message' => ' Что-то не так' ],
        ];
    }

}
