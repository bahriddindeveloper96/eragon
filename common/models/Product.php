<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int|null $category_id
 * @property int|null $company_id
 * @property int|null $photo_id
 * @property string $name
 * @property string|null $content
 * @property string|null $description
 * @property string|null $price
 * @property string|null $old_price
 * @property int|null $photo
 * @property int $created_by
 * @property int $updated_by
 *
 * @property Category $category
 * @property Company $company
 * @property Vendor $createdBy
 * @property Photo $photo0
 * @property ProductValue[] $productValues
 * @property Stock[] $stocks
 * @property Vendor $updatedBy
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'company_id', 'photo_id', 'photo', 'created_by', 'updated_by'], 'integer'],
            [['name', 'created_by', 'updated_by'], 'required'],
            [['content', 'description'], 'string'],
            [['name', 'price', 'old_price'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::class, 'targetAttribute' => ['company_id' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::class, 'targetAttribute' => ['created_by' => 'id']],
            [['photo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Photo::class, 'targetAttribute' => ['photo_id' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::class, 'targetAttribute' => ['updated_by' => 'id']],
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
            'company_id' => 'Company ID',
            'photo_id' => 'Photo ID',
            'name' => 'Name',
            'content' => 'Content',
            'description' => 'Description',
            'price' => 'Price',
            'old_price' => 'Old Price',
            'photo' => 'Photo',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery|CategoryQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Company]].
     *
     * @return \yii\db\ActiveQuery|CompanyQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::class, ['id' => 'company_id']);
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery|yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(Vendor::class, ['id' => 'created_by']);
    }

    /**
     * Gets query for [[Photo0]].
     *
     * @return \yii\db\ActiveQuery|PhotoQuery
     */
    public function getPhoto0()
    {
        return $this->hasOne(Photo::class, ['id' => 'photo_id']);
    }

    /**
     * Gets query for [[ProductValues]].
     *
     * @return \yii\db\ActiveQuery|ProductValueQuery
     */
    public function getProductValues()
    {
        return $this->hasMany(ProductValue::class, ['product_id' => 'id']);
    }

    /**
     * Gets query for [[Stocks]].
     *
     * @return \yii\db\ActiveQuery|StockQuery
     */
    public function getStocks()
    {
        return $this->hasMany(Stock::class, ['product_id' => 'id']);
    }

    /**
     * Gets query for [[UpdatedBy]].
     *
     * @return \yii\db\ActiveQuery|yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(Vendor::class, ['id' => 'updated_by']);
    }

    /**
     * {@inheritdoc}
     * @return ProductQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductQuery(get_called_class());
    }
}
