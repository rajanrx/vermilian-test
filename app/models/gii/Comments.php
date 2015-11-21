<?php

namespace app\models\gii;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $comment
 * @property string $date
 * @property string $ipAddress
 * @property string $userAgent
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'comment', 'date'], 'required'],
            [['comment'], 'string'],
            [['date'], 'safe'],
            [['name', 'email', 'ipAddress', 'userAgent'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'comment' => 'Comment',
            'date' => 'Date',
            'ipAddress' => 'Ip Address',
            'userAgent' => 'User Agent',
        ];
    }
}
