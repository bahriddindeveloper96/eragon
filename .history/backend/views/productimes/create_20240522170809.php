<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Vendor;
use common\models\Category;
use common\models\Photo;
use common\models\Product;
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
                     <div class="row">                        
                        <div class="col-sm-12">
                            <?php $product_ids = Product::findOne();?>
                            <?= $form->field($model, 'product_id')->dropDownList(
                                \yii\helpers\ArrayHelper::map($product_ids, 'id', 'name_uz'),
                                ['prompt' => 'Product']
                            ) ?> 
                        </div>
                    </div>               
                                    
                    <div class="row">
                        <div class="col-sm-4">
                            <?= $form->field($model, 'old_price')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-sm-4">
                            <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-sm-4">
                            <?php $user_ids = Vendor::find()->select(['id', 'username'])->asArray()->all();?>
                            <?= $form->field($model, 'created_by')->dropDownList(
                                \yii\helpers\ArrayHelper::map($user_ids, 'id', 'username'),
                                ['prompt' => 'Vendor']
                            ) ?> 
                        </div>
                    </div>
                                    
                    <div class="container-items-prevent">
                        <?php foreach ($modelsPrevent as $i => $prevent): ?>
                            <div class="item-prevent panel panel-default">
                                <div class="panel-heading">
                                    <div class="pull-right">
                                        <button type="button" class="add-item-prevent btn btn-success btn-xs"><i class="fa fa-plus fa-2x"></i></button>
                                        <button type="button" class="remove-item-prevent btn btn-danger btn-xs"><i class="fa fa-minus fa-2x"></i></button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-body">
                                    <?php $category_item = CategoryAttribute::find()->select(['id', 'name_uz'])->asArray()->all(); ?>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <?= $form->field($prevent, "[{$i}]attribute_id")->dropDownList(
                                                \yii\helpers\ArrayHelper::map($category_item, 'id', 'name'),
                                                ['prompt' => 'Attribute']
                                            ) ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <?= $form->field($prevent, "[{$i}]name")->textInput(['maxlength' => true]) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php DynamicFormWidget::end(); ?>
                </div>
            </div>
        </div>

        <div class="row" id="content">
            <div class="box box-default" style="display: inline-block; width:90%;">
                <div class="panel-body">
                    <?php DynamicFormWidget::begin([
                        'widgetContainer' => 'dynamicform_wrapper_photo',
                        'widgetBody' => '.container-items-photo',
                        'widgetItem' => '.item-photo',
                        'limit' => 4,
                        'min' => 1,
                        'insertButton' => '.add-item-photo',
                        'deleteButton' => '.remove-item-photo',
                        'model' => $modelsPhoto[0],
                        'formId' => 'dynamic-form',
                        'formFields' => ['product_value', 'photo'],
                    ]); ?>

                    <div class="container-items-photo">
                        <?php foreach ($modelsPhoto as $i => $photo): ?>
                            <div class="item-photo panel panel-default">
                                <div class="panel-heading">
                                    <div class="pull-right">
                                        <button type="button" class="add-item-photo btn btn-success btn-xs"><i class="fa fa-plus fa-2x"></i></button>
                                        <button type="button" class="remove-item-photo btn btn-danger btn-xs"><i class="fa fa-minus fa-2x"></i></button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">                                    
                                    <div class="col-sm-4">
                                            <label for="formFile" class="form-label">Photo yuklash</label>
                                            <?= $form->field($photo,  "[{$i}]photo")->fileInput([
                                                'options' => ['accept' => 'image/*'],
                                                'class' => 'form-control',                                                
                                            ])->label(false) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                                    <div class="col-sm-4">
                                        <?= $form->field($stock, 'quantity')->textInput() ?>
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
