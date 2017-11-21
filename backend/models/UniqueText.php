<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yu_unique_text".
 *
 * @property integer $id
 * @property integer $brand_id
 * @property string $barnd_text
 * @property string $model_text
 * @property integer $service_id
 */
class UniqueText extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yu_unique_text';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand_id', 'barnd_text', 'model_text', 'service_id'], 'required'],
            [['brand_id', 'service_id'], 'integer'],
            [['barnd_text', 'model_text'], 'string', 'max' => 5000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand_id' => 'Brand ID',
            'barnd_text' => 'Barnd Text',
            'model_text' => 'Model Text',
            'service_id' => 'Service ID',
        ];
    }
}
