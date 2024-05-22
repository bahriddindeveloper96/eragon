<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii;

/** @var yii\web\View $this */
/** @var common\models\Product $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList(
         \yii\helpers\ArrayHelper::map($category_ids, 'id', 'name_uz'),
         ['prompt' => 'Category']
    ) ?>

    <?= $form->field($model, 'brand_id')->textInput() ?>

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

    <?= $form->field($model, 'description_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'seo_key_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'seo_key_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'seo_desc_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'seo_desc_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>