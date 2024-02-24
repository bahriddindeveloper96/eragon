<?php

namespace common\models;
use yiidreamteam\upload\FileUploadBehavior;
use yii\behaviors\BlameableBehavior;

use Yii;

/**
 * This is the model class for table "photo".
 *
 * @property int $id
 * @property string|null $name
 * @property int $product_id
 * @property int $product_value
 * @property string|null $description
 * @property string $photo
 * @property int $created_by
 * @property int $updated_by
 *
 * @property Vendor $createdBy
 * @property Product $product
 * @property ProductValue $productValue
 * @property Vendor $updatedBy
 */
class Photo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $s_photo;
    public static function tableName()
    {
        return 'photo';
    }
    

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'product_value', 'created_by', 'updated_by'], 'required'],
            [['product_id', 'product_value', 'created_by', 'updated_by'], 'integer'],
           // [['name', 'description'], 'string', 'max' => 255],
           // [['photo'],'photo','extensions'=> 'jpg,png'],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::class, 'targetAttribute' => ['created_by' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['product_id' => 'id']],
            [['product_value'], 'exist', 'skipOnError' => true, 'targetClass' => ProductValue::class, 'targetAttribute' => ['product_value' => 'id']],
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
           // 'name' => 'Name',
            'product_id' => 'Product ID',
            'product_value' => 'Product Value',
          //  'description' => 'Description',
            'photo' => 'Photo',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    public function behaviors()
    {
        return [
            BlameableBehavior::class,           
            [
                'class' => FileUploadBehavior::class,
                'attribute' => 's_photo',
                'filePath' => '@webroot/uploads/product/[[filename]].[[extension]]',
                'fileUrl' => '/uploads/product/[[filename]].[[extension]]',
            ],           
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(Vendor::class, ['id' => 'created_by']);
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

    /**
     * Gets query for [[ProductValue]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductValue()
    {
        return $this->hasOne(ProductValue::class, ['id' => 'product_value']);
    }

    /**
     * Gets query for [[UpdatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(Vendor::class, ['id' => 'updated_by']);
    }
}
