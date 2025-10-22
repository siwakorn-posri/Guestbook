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
            [['name', 'email', 'message'], 'required', 'message' => 'กรุณาระบุ {attribute}'],
            [['name'], 'string', 'max' => 100],
            ['email', 'email', 'message'=> 'กรุณากรอกอีเมลให้ถูกต้อง'],
            [['message'], 'string'],
            [['created_at'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'ชื่อผู้เขียน',
            'email' => 'อีเมล',
            'message' => 'ข้อความ',
            'created_at' => 'วันที่ส่ง',
        ];
    }
}
