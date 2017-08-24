<?php

namespace frontend\models;

use yii\base\Model;
use Yii;

class AskForm extends Model {

    public $phone;
    public $message;
    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            ['phone', 'required'],
        ];
    }

}
