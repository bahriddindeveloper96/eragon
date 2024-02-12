<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category_attribute".
 *
 * @property int $id
 * @property int $category_id
 * @property string|null $name
 *
 * @property Category $category
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
            [['category_id'], 'required'],
            [['category_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    /**
     * Gets query for [[ProductValues]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductValues()
    {
        return $this->hasMany(ProductValue::class, ['attribute_id' => 'id']);
    }
}
