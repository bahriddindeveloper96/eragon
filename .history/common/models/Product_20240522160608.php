<?php

namespace common\models;
use common\models\Photo;

use Yii;


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
            [['category_id', 'company_id', 'created_by', 'updated_by'], 'integer'],
            [['name_uz', 'name_ru', 'created_by', 'updated_by'], 'required'],
            [['content_uz', 'content_ru', 'description_uz', 'description_ru', 'seo_key_uz', 'seo_key_ru', 'seo_desc_uz', 'seo_desc_ru'], 'string'],
            [['name_uz', 'name_ru'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::class, 'targetAttribute' => ['company_id' => 'id']],
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
            'category_id' => Yii::t('app', 'Category ID'),
            'company_id' => Yii::t('app', 'Company ID'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'content_uz' => Yii::t('app', 'Content Uz'),
            'content_ru' => Yii::t('app', 'Content Ru'),
            'description_uz' => Yii::t('app', 'Description Uz'),
            'description_ru' => Yii::t('app', 'Description Ru'),
            //'price' => Yii::t('app', 'Price'),
           // 'old_price' => Yii::t('app', 'Old Price'),
            'seo_key_uz' => Yii::t('app', 'Seo Key Uz'),
            'seo_key_ru' => Yii::t('app', 'Seo Key Ru'),
            'seo_desc_uz' => Yii::t('app', 'Seo Desc Uz'),
            'seo_desc_ru' => Yii::t('app', 'Seo Desc Ru'),
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
    public function getContent(){

        if (Yii::$app->language == 'uz'):  return $this->content_uz;

        endif;
        if (Yii::$app->language == 'ru'):  return $this->content_ru;

        endif;
    }
    public function getDescription(){

        if (Yii::$app->language == 'uz'):  return $this->description_uz;

        endif;
        if (Yii::$app->language == 'ru'):  return $this->description_ru;

        endif;
    }
    public function getSeo_key(){

        if (Yii::$app->language == 'uz'):  return $this->seo_key_uz;

        endif;
        if (Yii::$app->language == 'ru'):  return $this->seo_key_ru;

        endif;
    }
    public function getSeo_desc(){

        if (Yii::$app->language == 'uz'):  return $this->seo_desc_uz;

        endif;
        if (Yii::$app->language == 'ru'):  return $this->seo_desc_ru;

        endif;
    }
    

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
    public function getBrand()
    {
        return $this->hasOne(Vendor::class, ['id' => 'created_by']);
    }
    public function getUpdatedBy()
    {
        return $this->hasOne(Vendor::class, ['id' => 'updated_by']);
    }

   

    
}
