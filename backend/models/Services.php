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
            [['title', 'url', 'type', 'category_id'], 'required'],
            [['is_popular', 'price', 'description', 'text', 'meta_keywords', 'meta_description'], 'default'],
            //[['url'], 'unique'],
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
            'category_id' => 'Категория',
            'title' => 'Название',
            'type' => 'Тип',
            'is_popular' => 'Популярный',
            'price' => 'Цена',
        ];
    }
}
