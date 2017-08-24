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
        ];
    }

}
