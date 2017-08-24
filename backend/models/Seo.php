<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yu_seo".
 *
 * @property integer $id
 * @property string $url
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_description
 * @property string $meta_h1
 * @property string $meta_text1
 * @property string $meta_text2
 */
class Seo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yu_seo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url'], 'string', 'max' => 100],
            [['meta_title'], 'string', 'max' => 300],
            [['meta_keywords', 'meta_h1'], 'string', 'max' => 255],
            [['meta_description'], 'string', 'max' => 500],
            [['meta_text1', 'meta_text2'], 'string', 'max' => 1000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url',
            'meta_title' => 'Meta Title',
            'meta_keywords' => 'Meta Keywords',
            'meta_description' => 'Meta Description',
            'meta_h1' => 'Meta H1',
            'meta_text1' => 'Meta Text1',
            'meta_text2' => 'Meta Text2',
        ];
    }
}
