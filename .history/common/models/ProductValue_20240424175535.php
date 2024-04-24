<?php

namespace common\models;
use common\models\CategoryAttribute;

use Yii;

/**
 * This is the model class for table "product_value".
 *
 * @property int $id
 * @property int|null $attribute_id
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property int|null $product_id
 *
 * @property CategoryAttribute $attribute0
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
            [['attribute_id', 'product_id'], 'integer'],
            [['name_uz', 'name_ru'], 'string', 'max' => 255],
            [['attribute_id'], 'exist', 'skipOnError' => true, 'targetClass' => CategoryAttribute::class, 'targetAttribute' => ['attribute_id' => 'id']],
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
            'attribute_id' => Yii::t('app', 'Attribute ID'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'product_id' => Yii::t('app', 'Product ID'),
        ];
    }

    public function getProduct()
    {
        return $this->hasOne(Product::class, ['id' => 'product_id']);
    }

    public function getXususiy()
    {
        return $this->hasOne(CategoryAttribute::class, ['id' => 'attribute_id']);
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
