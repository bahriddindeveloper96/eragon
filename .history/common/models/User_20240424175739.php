<?php

namespace common\models;
use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $surname_uz
 * @property string|null $surname_ru
 * @property string|null $fathers_name_uz
 * @property string|null $fathers_name_ru
 * @property string|null $role_uz
 * @property string|null $role_ru
 * @property int|null $phone
 * @property string|null $verification_token
 *
 * @property Category[] $categories
 * @property Category[] $categories0
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at', 'phone'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'name_uz', 'name_ru', 'surname_uz', 'surname_ru', 'fathers_name_uz', 'fathers_name_ru', 'role_uz', 'role_ru', 'verification_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'password_hash' => Yii::t('app', 'Password Hash'),
            'password_reset_token' => Yii::t('app', 'Password Reset Token'),
            'email' => Yii::t('app', 'Email'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'surname_uz' => Yii::t('app', 'Surname Uz'),
            'surname_ru' => Yii::t('app', 'Surname Ru'),
            'fathers_name_uz' => Yii::t('app', 'Fathers Name Uz'),
            'fathers_name_ru' => Yii::t('app', 'Fathers Name Ru'),
            'role_uz' => Yii::t('app', 'Role Uz'),
            'role_ru' => Yii::t('app', 'Role Ru'),
            'phone' => Yii::t('app', 'Phone'),
            'verification_token' => Yii::t('app', 'Verification Token'),
        ];
    }

    /**
     * Gets query for [[Categories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::class, ['created_by' => 'id']);
    }

    /**
     * Gets query for [[Categories0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategories0()
    {
        return $this->hasMany(Category::class, ['updated_by' => 'id']);
    }
}
