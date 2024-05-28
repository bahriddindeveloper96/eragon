<?php

namespace common\models;
use yii\db\Expression;


use Yii;

/**
 * This is the model class for table "brand".
 *
 * @property int $id
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $icon
 * @property string|null $description
 * @property int $created_by
 * @property int $updated_by
 *
 * @property Vendor $createdBy
 * @property Product[] $products
 * @property Vendor $updatedBy
 */
class Brand extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brand';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_by', 'updated_by'], 'required'],
            [['created_by', 'updated_by'], 'integer'],
            [['name_uz', 'name_ru','description'], 'string', 'max' => 255],
            [['icon'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::class, 'targetAttribute' => ['created_by' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::class, 'targetAttribute' => ['updated_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'icon' => Yii::t('app', 'Icon'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
    public function getName(){

        if (Yii::$app->language == 'uz'):  return $this->name_uz;

        endif;
        if (Yii::$app->language == 'ru'):  return $this->name_ru;

        endif;
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
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::class, ['brand_id' => 'id']);
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
