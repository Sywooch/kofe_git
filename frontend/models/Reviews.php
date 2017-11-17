<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yu_reviews".
 *
 * @property integer $id
 * @property string $username
 * @property string $message
 * @property string $email
 * @property string $date
 * @property integer $active
 * @property integer $rating
 */
class Reviews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yu_reviews';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'message', 'active', 'rating'], 'required'],
            [['date'], 'safe'],
            [['active', 'rating'], 'integer'],
            [['username', 'email'], 'string', 'max' => 255],
            [['message'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'message' => 'Message',
            'email' => 'Email',
            'date' => 'Date',
            'active' => 'Active',
            'rating' => 'Rating',
        ];
    }
}
