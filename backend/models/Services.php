<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yu_services".
 *
 * @property integer $id
 * @property string $title
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yu_services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'url', 'type'], 'required'],
            [['is_popular', 'price', 'description', 'text'], 'default'],
            [['url'], 'unique'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'type' => 'Тип',
            'is_popular' => 'Популярный',
            'price' => 'Цена',
        ];
    }
}
