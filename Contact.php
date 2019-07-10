<?php
namespace app\models;
use Yii;
use yii\base\Model;
class Contact extends \yii\db\ActiveRecord{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name','email'], 'required'],
            ['email', 'email'],
            [['name'],'string', 'max' => 50],
            [['email'], 'string', 'max' => 50],

        ];
    }
}