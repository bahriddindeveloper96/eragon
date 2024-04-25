<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order_items".
 *
 * @property int $id
 * @property int|null $order_id
 * @property int|null $product_id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $surname_uz
 * @property string $surname_ru
 * @property float|null $price
 * @property int $qty_item
 * @property float|null $sum_item
 *
 * @property Order $order
 * @property Product $product
 */
class OrderItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'qty_item'], 'integer'],
            [['name_uz', 'name_ru', 'surname_uz', 'surname_ru', 'qty_item'], 'required'],
            [['price', 'sum_item'], 'number'],
            [['name_uz', 'name_ru', 'surname_uz', 'surname_ru'], 'string', 'max' => 255],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::class, 'targetAttribute' => ['order_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'order_id' => Yii::t('app', 'Order ID'),
            'product_id' => Yii::t('app', 'Product ID'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'surname_uz' => Yii::t('app', 'Surname Uz'),
            'surname_ru' => Yii::t('app', 'Surname Ru'),
            'price' => Yii::t('app', 'Price'),
            'qty_item' => Yii::t('app', 'Qty Item'),
            'sum_item' => Yii::t('app', 'Sum Item'),
        ];
    }
    public function getName(){

        if (Yii::$app->language == 'uz'):  return $this->name_uz;

        endif;
        if (Yii::$app->language == 'ru'):  return $this->name_ru;

        endif;
    }
    public function getSurname(){

        if (Yii::$app->language == 'uz'):  return $this->surnamename_uz;

        endif;
        if (Yii::$app->language == 'ru'):  return $this->surname_ru;

        endif;
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::class, ['id' => 'order_id']);
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::class, ['id' => 'product_id']);
    }
}
