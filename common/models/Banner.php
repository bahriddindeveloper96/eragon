<?php

namespace common\models;
use yiidreamteam\upload\FileUploadBehavior;
use yii\behaviors\BlameableBehavior;
use yii\db\Expression;


use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property int $id
 * @property string $background
 * @property string $photo
 * @property string $name_uz
 * @property string $name_ru
 * @property string|null $description_uz
 * @property string|null $description_ru
 * @property string $link
 * @property int $created_by
 * @property int $updated_by
 * @property string $status
 *
 * @property Vendor $createdBy
 * @property Vendor $updatedBy
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * {@inheritdoc}
     */
    
    public function rules()
    {
        return [
            [['background', 'photo', 'name_uz', 'name_ru', 'link', 'created_by', 'updated_by'], 'required'],
            [['description_uz', 'description_ru'], 'string'],
            [['created_by', 'updated_by'], 'integer'],
            [['background'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['photo'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['name_uz', 'name_ru', 'link', 'status'], 'string', 'max' => 255],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::class, 'targetAttribute' => ['created_by' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::class, 'targetAttribute' => ['updated_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    // public function behaviors()
    // {
    //     return [
    //         BlameableBehavior::class,           
    //         [
    //             'class' => FileUploadBehavior::class,
    //             'attribute' => 'photo',
    //             'filePath' => '@webroot/uploads/banner/[[filename]].[[extension]]',
    //             'fileUrl' => '/uploads/banner/[[filename]].[[extension]]',
    //         ], 
    //         [
    //             'class' => FileUploadBehavior::class,
    //             'attribute' => 'banner',
    //             'filePath' => '@webroot/uploads/banner/[[filename]].[[extension]]',
    //             'fileUrl' => '/uploads/banner/[[filename]].[[extension]]',
    //         ],           
    //     ];
    // }
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'background' => Yii::t('app', 'Background'),
            'photo' => Yii::t('app', 'Photo'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'description_uz' => Yii::t('app', 'Description Uz'),
            'description_ru' => Yii::t('app', 'Description Ru'),
            'link' => Yii::t('app', 'Link'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'status' => Yii::t('app', 'Status'),
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
     * Gets query for [[UpdatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(Vendor::class, ['id' => 'updated_by']);
    }
}
