<?php

namespace frontend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%pages}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $url
 * @property string $description
 * @property string $full_description
 * @property integer $active
 * @property integer $sort
 * @property string $meta_key
 * @property string $meta_desc
 * @property string $meta_title
 * @property string $meta_h1
 * @property string $image
 * @property string $type
 */
class Pages extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{%pages}}';
    }

    public $arr;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['title', 'url', 'sort', 'parent', 'type', 'action'], 'required'],
            [['full_title', 'date', 'icon'], 'default', 'value' => null],
            [['description', 'full_description'], 'string'],
            [['active', 'sort'], 'integer'],
            [['title'], 'string', 'max' => 1000],
            [['url', 'meta_key', 'meta_title', 'meta_h1'], 'string', 'max' => 255],
            [['meta_desc'], 'string', 'max' => 500],
            [['image'], 'string', 'max' => 50],
            [['type'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'url' => 'Url',
            'description' => 'Description',
            'full_description' => 'Full Description',
            'active' => 'Active',
            'sort' => 'Sort',
            'meta_key' => 'Meta Key',
            'meta_desc' => 'Meta Desc',
            'meta_title' => 'Meta Title',
            'meta_h1' => 'Meta H1',
            'image' => 'Image',
            'type' => 'Type',
        ];
    }

    public static function getCategoryPopularServices($category_id, $is_popular = 1) {
        $sql = 'SELECT url, is_popular, title, price, time, description FROM {{%services}} WHERE category_id = ' . (int) $category_id . ' AND type = 1 AND is_popular = ' . (int) $is_popular;
        return \Yii::$app->db->createCommand($sql)->queryAll();
    }

    public static function getCategoryServices($category_id) {
        $sql = 'SELECT url, is_popular, title, price, time FROM {{%services}} WHERE category_id = ' . (int) $category_id . ' AND type = 1';
        return \Yii::$app->db->createCommand($sql)->queryAll();
    }

    public static function getModelServices($category_id) {
        $sql = 'SELECT url, is_popular, title, price, time FROM {{%services}} WHERE category_id = ' . (int) $category_id . ' AND type = 1';
        return \Yii::$app->db->createCommand($sql)->queryAll();
    }

}
