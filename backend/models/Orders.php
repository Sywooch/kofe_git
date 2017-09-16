<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yu_orders".
 *
 * @property integer $id
 * @property string $phone
 * @property string $page
 * @property string $ip
 * @property string $date
 * @property string $site
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yu_orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone', 'page', 'ip', 'date', 'site'], 'required'],
            [['date'], 'safe'],
            [['phone', 'ip'], 'string', 'max' => 20],
            [['page'], 'string', 'max' => 200],
            [['site'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Phone',
            'page' => 'Page',
            'ip' => 'Ip',
            'date' => 'Date',
            'site' => 'Site',
        ];
    }
}
