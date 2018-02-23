<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yu_text_templates".
 *
 * @property integer $id
 * @property string $template
 * @property integer $brand_id
 * @property integer $model_id
 * @property integer $serice_id
 */
class SeoTemplates extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'yu_text_templates';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['site_id', 'template', 'category_id'], 'required'],
            //[['template', 'validateTemplate']],
            [['brand_id', 'model_id', 'serice_id'], 'default'],
            [['template'], 'string', 'max' => 3000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'template' => 'Шаблон',
            'brand_id' => 'Бренд',
            'model_id' => 'Модель',
            'serice_id' => 'Услуга',
            'category_id' => 'Категория',
            'site_id' => 'Сайт',
        ];
    }

    public function validateTemplate($attribute, $params, $validator) {        
        if (empty($this->$attribute)) {
            $this->addError($attribute, 'Шаблон не может быть пустым.');
        }
        preg_match_all("^[^()\n]*+(\((?>[^()\n]|(?1))*+\)[^()\n]*+)++$", $this->$attribute, $matches);
        if ($matches) {
            $this->addError($attribute, 'Пропущена закрывающая или открывающая скобка');
        }
    }

    public function getCategory() {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }

    public function getBrand() {
        return $this->hasOne(Pages::className(), ['id' => 'brand_id']);
    }

    public function getModel() {
        return $this->hasOne(Pages::className(), ['id' => 'model_id']);
    }

    public function getService() {
        return $this->hasOne(Services::className(), ['id' => 'serice_id']);
    }

}
