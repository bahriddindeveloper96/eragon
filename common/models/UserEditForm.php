<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

class UserEditForm extends \yii\base\Model
{
    const STATUS_DELETED = 0;
    const STATUS_INACTIVE = 9;
    const STATUS_ACTIVE = 10;

    public $id;
    public $pass;
    public $username;
    public $name_uz;
    public $surname_uz;
    public $fathers_name_uz;
    public $phone;
    public $role_uz;
    public $position_id;
    public $status;

    public function __construct($id, $config = [])
    {
        $this->id = $id;
        parent::__construct($config);
    }

    public function attributeLabels()
    {
        return [
            'id' => '№',
            'username' => 'Логин',
            'pass' => 'Пароль',
            'phone' => 'Телефон',
            'name_uz' => 'Имя',
            'surname_uz' => 'Фамилия',
            'fathers_name_uz' => 'Отчество',
            'role_uz' => 'Отдель',
            'status' => 'Статус',
            'position_id' => 'Отдель',
        ];
    }

    public static function rolesList()
    {
        return ArrayHelper::map(\Yii::$app->authManager->getRoles(), 'name', 'description');
    }


    public function rules()
    {
        return [
            ['username', 'string', 'min' => 3, 'max' => 255],
            [['username', 'email'], 'unique', 'targetClass' => User::class, 'filter' => ['<>', 'id', $this->id]],

            [['name_uz', 'surname_uz', 'fathers_name_uz', 'role_uz', 'phone'], 'string', 'max' => 255],
            [['name_uz', 'surname_uz', 'fathers_name_uz', 'role_uz', 'username_uz', 'position_id'], 'required'],

            [['pass'], 'string', 'min' => 5],

            ['status', 'default', 'value' => self::STATUS_INACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_DELETED]],
        ];
    }


}