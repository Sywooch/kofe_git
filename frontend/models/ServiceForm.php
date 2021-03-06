<?php

namespace frontend\models;

use yii\base\Model;
use Yii;

class ServiceForm extends Model {

    public $phone;
    public $msg;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            ['phone', 'required'],
            ['phone', 'match', 'pattern' => '/^\+7\s\([0-9]{3}\)\s[0-9]{3}\-[0-9]{2}\-[0-9]{2}$/', 'message' => ' Что-то не так' ],
        ];
    }

}
