<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Product $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'category_id')->textInput() ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'company_id')->textInput() ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'old_price')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'created_by')->textInput() ?>
        </div>
    </div> 
    <div class="row">
        <div class="col-sm-12">
            <?= $form->field($model, 'content')->textarea(['rows' => 2]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
        </div>
    </div>
       

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
