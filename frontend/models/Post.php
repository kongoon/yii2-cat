<?php
namespace frontend\models;

use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
    public static function tableName()
    {
        return 'post'; //table name from database
    }
    public function rules()
    {
        return [
            [['title'], 'required']
        ];
    }
    public function attributeLabels()
    {
        return [
            'title' => 'เรื่อง',
            'description' => 'รายละเอียด',
            'created_at' => 'โพสเมื่อ',
            'updated_at' => 'แก้ไขเมื่อ',
        ];
    }
}
