<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Vendor;
use common\models\Category;
use common\models\Photo;
use common\models\Company;
//use kartik\widgets\FileInput;
use common\models\CategoryAttribute;
use common\models\ProductValue;
use wbraganca\dynamicform\DynamicFormWidget;
use kartik\file\FileInput;

/** @var yii\web\View $this */
/** @var common\models\Product $model */
/** @var common\models\ProductValue[] $modelsPrevent */
/** @var common\models\Photo[] $modelsPhoto */

$this->title = 'Create Product';
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">

    <div class="container">

        <?php $form = ActiveForm::begin([
            'id' => 'dynamic-form',
            'enableClientValidation' => false,
            'options' => [
                'enctype' => 'multipart/form-data',
            ]
        ]) ?>

        <div class="row" id="content">
            <div class="box box-default" style="display: inline-block; width:90%;">
                <div class="panel-body">
                    <?php DynamicFormWidget::begin([
                        'widgetContainer' => 'dynamicform_wrapper_prevent',
                        'widgetBody' => '.container-items-prevent',
                        'widgetItem' => '.item-prevent',
                        'limit' => 4,
                        'min' => 1,
                        'insertButton' => '.add-item-prevent',
                        'deleteButton' => '.remove-item-prevent',
                        'model' => $modelsPrevent[0],
                        'formId' => 'dynamic-form',
                        'formFields' => ['category_id', 'name'],
                    ]); ?>
                    <?php $category_ids = Category::find()->select(['id', 'name_uz'])->asArray()->all(); ?>
                                    <?php $company_ids = Company::find()->select(['id', 'name_uz'])->asArray()->all(); ?>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <?= $form->field($model, 'category_id')->dropDownList(
                                                \yii\helpers\ArrayHelper::map($category_ids, 'id', 'name_uz'),
                                                ['prompt' => 'Category']
                                            ) ?>
                                        </div>
                                        <div class="col-sm-3">
                                            <?= $form->field($model, 'company_id')->dropDownList(
                                                \yii\helpers\ArrayHelper::map($company_ids, 'id', 'name_uz'),
                                                ['prompt' => 'Company']
                                            ) ?>
                                        </div>
                                        <div class="col-sm-3">
                                            <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>
                                        </div>
                                        <div class="col-sm-3">
                                            <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
                                        </div>
                                    </div>
                                    
                                    <div class="row">                                        
                                        <div class="col-sm-4">
                                            <?php $user_ids = Vendor::find()->select(['id', 'username'])->asArray()->all(); ?>

                                            <?= $form->field($model, 'created_by')->dropDownList(
                                                \yii\helpers\ArrayHelper::map($user_ids, 'id', 'username'),
                                                ['prompt' => 'Vendor']
                                            ) ?> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <?= $form->field($model, 'content_uz')->widget(\bizley\quill\Quill::class, [
                                                'toolbarOptions' => [
                                                    ['bold', 'italic', 'underline', 'strike'],        // Formatlash tugmalar
                                                    ['link'],                                          // Havolalar
                                                    ['image', 'video'],                                // Rasmlar va videolar
                                                    ['clean'],                                         // Tozalash tugmasi
                                                    ['formula']                                        // Matematik formulalar
                                                ],                                              
                                            ]) ?>
                                            
                                            <!--?= $form->field($model, 'content')->textarea(['rows' => 2]) ?-->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <?= $form->field($model, 'content_ru')->widget(\bizley\quill\Quill::class, [
                                                'toolbarOptions' => [
                                                    ['bold', 'italic', 'underline', 'strike'],        // Formatlash tugmalar
                                                    ['link'],                                          // Havolalar
                                                    ['image', 'video'],                                // Rasmlar va videolar
                                                    ['clean'],                                         // Tozalash tugmasi
                                                    ['formula']                                        // Matematik formulalar
                                                ],                                              
                                            ]) ?>
                                            
                                            <!--?= $form->field($model, 'content')->textarea(['rows' => 2]) ?-->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                             <?= $form->field($model, 'description_uz')->widget(\bizley\quill\Quill::class, []) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                             <?= $form->field($model, 'description_ru')->widget(\bizley\quill\Quill::class, []) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                             <?= $form->field($model, 'seo_key_uz')->widget(\bizley\quill\Quill::class, []) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                             <?= $form->field($model, 'seo_key_ru')->widget(\bizley\quill\Quill::class, []) ?>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-sm-12">
                                             <?= $form->field($model, 'seo_desc_uz')->widget(\bizley\quill\Quill::class, []) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                             <?= $form->field($model, 'seo_desc_ru')->widget(\bizley\quill\Quill::class, []) ?>
                                        </div>
                                    </div>  
                    <?php DynamicFormWidget::end(); ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>