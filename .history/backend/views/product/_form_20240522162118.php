<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Vendor;
use common\models\Category;
use common\models\Company;
use common\models\Brand;


/** @var yii\web\View $this */
/** @var common\models\Product $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>
     <?php $category_ids = Category::find()->select(['id', 'name_uz'])->asArray()->all(); ?>
     <?php $company_ids = Company::find()->select(['id', 'name_uz'])->asArray()->all(); ?>
     <?php $brand_ids = Brand::find()->select(['id', 'name_uz'])->asArray()->all(); ?>

    <?= $form->field($model, 'category_id')->dropDownList(
         \yii\helpers\ArrayHelper::map($category_ids, 'id', 'name_uz'),
         ['prompt' => 'Category']
    ) ?>

    <?= $form->field($model, 'brand_id')->dropDownList(
        \yii\helpers\ArrayHelper::map($brand_ids, 'id', 'name_uz'),
          ['prompt' => 'Brand']
    ) ?>

     <?= $form->field($model, 'company_id')->dropDownList(
        \yii\helpers\ArrayHelper::map($company_ids, 'id', 'name_uz'),
          ['prompt' => 'Company']
    ) ?>

    <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content_uz')->widget(\bizley\quill\Quill::class, [
        'toolbarOptions' => [
            ['bold', 'italic', 'underline', 'strike'],        // Formatlash tugmalar
            ['link'],                                          // Havolalar
            ['image', 'video'],                                // Rasmlar va videolar
            ['clean'],                                         // Tozalash tugmasi
            ['formula']                                        // Matematik formulalar
        ],                                              
     ]) ?>

    <?= $form->field($model, 'content_ru')->widget(\bizley\quill\Quill::class, [
        'toolbarOptions' => [
            ['bold', 'italic', 'underline', 'strike'],        // Formatlash tugmalar
            ['link'],                                          // Havolalar
            ['image', 'video'],                                // Rasmlar va videolar
            ['clean'],                                         // Tozalash tugmasi
            ['formula']                                        // Matematik formulalar
        ],                                              
    ]) ?>

    <?= $form->field($model, 'description_uz')->widget(\bizley\quill\Quill::class, []) ?>

    <?= $form->field($model, 'description_ru')->widget(\bizley\quill\Quill::class, []) ?>

    <?= $form->field($model, 'seo_key_uz')->widget(\bizley\quill\Quill::class, []) ?>

    <?= $form->field($model, 'seo_key_ru')->widget(\bizley\quill\Quill::class, []) ?>

    <?= $form->field($model, 'seo_desc_uz')->widget(\bizley\quill\Quill::class, []) ?>

    <?= $form->field($model, 'seo_desc_ru')->widget(\bizley\quill\Quill::class, []) ?>

    <?php $user_ids = Vendor::find()->select(['id', 'username'])->asArray()->all(); ?>

    <?= $form->field($model, 'created_by')->dropDownList(
        \yii\helpers\ArrayHelper::map($user_ids, 'id', 'username'),
        ['prompt' => 'Vendor']
    ) ?> 

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
