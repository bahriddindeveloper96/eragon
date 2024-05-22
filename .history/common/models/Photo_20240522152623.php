<?php

namespace common\models;
use yiidreamteam\upload\FileUploadBehavior;
use yii\behaviors\BlameableBehavior;
use yii\db\Expression;

use Yii;

/**
 * This is the model class for table "photo".
 *
 * @property int $id
 * @property int $product_id
 * @property string $product_value
 * @property string $photo
 * @property int $created_by
 * @property int $updated_by
 *
 * @property Vendor $createdBy
 * @property Product $product
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
            [['product_items_id',  'photo', 'created_by', 'updated_by'], 'required'],
            [['product_items_id', 'created_by', 'updated_by'], 'integer'],            
          //  [['photo'],'photo','extension'=> 'jpg,png'],
            [['photo'], 'string', 'max' => 255],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::class, 'targetAttribute' => ['created_by' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['product_id' => 'id']],
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
            'product_items_id' => 'Product ID',            
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
     * Gets query for [[UpdatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(Vendor::class, ['id' => 'updated_by']);
    }
}
