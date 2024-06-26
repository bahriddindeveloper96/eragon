<?php

namespace common\models;
use common\models\User;
use common\models\CategoryAttribute;

use Yii;

class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'created_by', 'updated_by'], 'integer'],
            [['name_uz', 'name_ru', 'created_by', 'updated_by'], 'required'],
            [['description_uz', 'description_ru', 'seo_key_uz', 'seo_key_ru', 'seo_desc_uz', 'seo_desc_ru'], 'string'],
            [['name_uz', 'name_ru'], 'string', 'max' => 255],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['created_by' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['updated_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'description_uz' => Yii::t('app', 'Description Uz'),
            'description_ru' => Yii::t('app', 'Description Ru'),
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

     public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }

    /**
     * Gets query for [[UpdatedBy]].
     *
     * @return \yii\db\ActiveQuery|yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'updated_by']);
    }
    public function getCategoryAttributes(){
        return $this->hasMany(CategoryAttribute::class,['category_id'=>'id']);
    }

    /**
     * {@inheritdoc}
     * @return CategoryQuery the active query used by this AR class.
     */
    
}
