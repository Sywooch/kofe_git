<?php

namespace frontend\models;

use yii\base\Model;
use Yii;

class KomForm extends Model {

    public $phone;
    public $email;
    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['phone', 'email'], 'required'],
            ['email', 'email'],            
        ];
    }

}
