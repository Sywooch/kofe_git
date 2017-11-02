<?php

namespace app\models;

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
            [['title', 'url', 'sort', 'parent', 'type', 'action', 'site_id'], 'required'],
            [['full_title', 'date', 'icon'], 'default', 'value' => null],
            [['description', 'full_description'], 'string'],
            [['active', 'sort'], 'integer'],
            [['title'], 'string', 'max' => 1000],
            [['url', 'meta_key', 'meta_title', 'meta_h1'], 'string', 'max' => 255],
            [['meta_desc'], 'string', 'max' => 500],
            [['image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, gif, jpeg'],
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

    public function getParent() {
        return $this->hasOne(Pages::className(), ['id' => 'parent']);
    }

    public function getParentName() {
        return $this->parent->page_title;
    }

    function build_tree($arrs, $parent_id = 0, $level = 0) {
        if ($level == 0)
            $this->arr[0] = 'Нет';
        foreach ($arrs as $arr) {
            if ($arr['parent'] == $parent_id) {
                $this->arr[$arr['id']] = str_repeat("-", $level) . " " . $arr['title'];
                $this->build_tree($arrs, $arr['id'], ++$level);
            }
        }
        return $this->arr;
    }

    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            $uploadedFile = UploadedFile::getInstance($this, 'image');
            $path = Yii::getAlias('@frontend') . '/web/uploads/images/';
            
            if (isset($uploadedFile->tempName) && $uploadedFile->tempName !== null) {
                if (!empty($this->image) && file_exists($path . $this->image))
                    unlink($path . $this->image);
                $this->image = $uploadedFile;
                $file = str_replace('/', '-', $this->url) . '.' . $this->image->extension;                
                $this->image->saveAs($path . $file);    
                $this->image = $file;
            }            
            return true;
        } else {
            return false;
        }
    }

}
