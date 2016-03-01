<?php
//Bmi.php
namespace frontend\models;
use yii\base\Model;

class Bmi extends Model
{
    public $high;
    public $weight;

    public function rules()
    {
        return [
            [['high', 'weight'], 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'high' => 'ส่วนสูง (เมตร)',
            'weight' => 'น้ำหนัก (กิโลกรัม)'
        ];
    }
}
