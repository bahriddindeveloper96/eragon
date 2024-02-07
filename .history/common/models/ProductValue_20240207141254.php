<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product_value".
 *
 * @property int $id
 * @property int|null $attribute_id
 * @property string|null $name
 * @property int|null $product_id
 * @property int|null $photo_id
 *
 * @property ProductAttribute $attribute0
 * @property Photo $photo
 * @property Product $product
 */
class ProductValue extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_value';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['attribute_id', 'product_id', 'photo_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['attribute_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductAttribute::class, 'targetAttribute' => ['attribute_id' => 'id']],
           // [['photo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Photo::class, 'targetAttribute' => ['photo_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'attribute_id' => 'Attribute ID',
            'name' => 'Name',
            'product_id' => 'Product ID',
           // 'photo_id' => 'Photo ID',
        ];
    }

    /**
     * Gets query for [[Attribute0]].
     *
     * @return \yii\db\ActiveQuery|ProductAttributeQuery
     */
    public function getAttribute0()
    {
        return $this->hasOne(ProductAttribute::class, ['id' => 'attribute_id']);
    }

    /**
     * Gets query for [[Photo]].
     *
     * @return \yii\db\ActiveQuery|PhotoQuery
     */
    public function getPhoto()
    {
        return $this->hasOne(Photo::class, ['id' => 'photo_id']);
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery|ProductQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::class, ['id' => 'product_id']);
    }

    /**
     * {@inheritdoc}
     * @return ProductValueQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductValueQuery(get_called_class());
    }
}
