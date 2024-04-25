<?php

namespace common\models;
use common\models\OrderItems;
use yii\behaviors\TimestampBehavior;
use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $created_at
 * @property int $updated_at
 * @property int $qty
 * @property float|null $sum
 * @property int $status
 * @property string $name_uz
 * @property string $name_ru
 * @property string $surname_uz
 * @property string $surname_ru
 * @property string|null $email
 * @property string $phone
 * @property string $address_uz
 * @property string $address_ru
 * @property string $address2_uz
 * @property string $address2_ru
 *
 * @property OrderItems[] $orderItems
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'qty', 'name_uz', 'name_ru', 'surname_uz', 'surname_ru', 'phone', 'address_uz', 'address_ru', 'address2_uz', 'address2_ru'], 'required'],
            [['created_at', 'updated_at', 'qty', 'status'], 'integer'],
            [['sum'], 'number'],
            [['name_uz', 'name_ru', 'surname_uz', 'surname_ru', 'email', 'phone', 'address_uz', 'address_ru', 'address2_uz', 'address2_ru'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'qty' => Yii::t('app', 'Qty'),
            'sum' => Yii::t('app', 'Sum'),
            'status' => Yii::t('app', 'Status'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'surname_uz' => Yii::t('app', 'Surname Uz'),
            'surname_ru' => Yii::t('app', 'Surname Ru'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'address_uz' => Yii::t('app', 'Address Uz'),
            'address_ru' => Yii::t('app', 'Address Ru'),
            'address2_uz' => Yii::t('app', 'Address2 Uz'),
            'address2_ru' => Yii::t('app', 'Address2 Ru'),
        ];
    }
    public function getName(){

        if (Yii::$app->language == 'uz'):  return $this->name_uz;

        endif;
        if (Yii::$app->language == 'ru'):  return $this->name_ru;

        endif;
    }
    public function getSurname(){

        if (Yii::$app->language == 'uz'):  return $this->surname_uz;

        endif;
        if (Yii::$app->language == 'ru'):  return $this->surname_ru;

        endif;
    }
    public function getAddress(){

        if (Yii::$app->language == 'uz'):  return $this->address_uz;

        endif;
        if (Yii::$app->language == 'ru'):  return $this->address_ru;

        endif;
    }
    public function getAddress2(){

        if (Yii::$app->language == 'uz'):  return $this->address2_uz;

        endif;
        if (Yii::$app->language == 'ru'):  return $this->address2_ru;

        endif;
    }

    /**
     * Gets query for [[OrderItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItems::class, ['order_id' => 'id']);
    }
}
