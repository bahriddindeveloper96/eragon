<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product_attribute".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property ProductValue[] $productValues
 */
class CategoryAttribute extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category_attribute';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[ProductValues]].
     *
     * @return \yii\db\ActiveQuery|ProductValueQuery
     */
    public function getProductValues()
    {
        return $this->hasMany(ProductValue::class, ['attribute_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return ProductAttributeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductAttributeQuery(get_called_class());
    }
}
