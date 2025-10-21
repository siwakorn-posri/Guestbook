<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guestbook".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $message
 * @property string $created_at
 */
class Guestbook extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'guestbook';
    }

    public function rules()
    {
        return [
            [['name', 'email', 'message'], 'required'],
            ['email', 'email'],
            [['message'], 'string'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'ชื่อผู้เขียน',
            'email' => 'อีเมล',
            'message' => 'ข้อความทักทาย',
            'created_at' => 'วันที่ส่ง',
        ];
    }
}
