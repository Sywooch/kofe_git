<?php

namespace frontend\models;

use yii\base\Model;
use Yii;

class CallBackTopForm extends Model {

    public $phone;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            ['phone', 'required'],
        ];
    }

}
