<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "stock".
 *
 * @property int $id
 * @property int|null $product_id
 * @property int|null $quantity
 *
 * @property Product $product
 */
class Stock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stock';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_items_id', 'quantity'], 'integer'],
            [['product_items_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductItems::class, 'targetAttribute' => ['product_items_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'product_items_id' => Yii::t('app', 'Product ID'),
            'quantity' => Yii::t('app', 'Quantity'),
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductItems()
    {
        return $this->hasOne(ProductItems::class, ['id' => 'product_items_id']);
    }
    
}
