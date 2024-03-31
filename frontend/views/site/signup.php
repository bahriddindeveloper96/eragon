<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup container">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <?php $form = ActiveForm::begin(); ?>

         <div class="row">
            <div class="col-sm-4">
                <?= $form->field($model, 'name')->textInput() ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'surname')->textInput() ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'fathers_name')->textInput() ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <?= $form->field($model, 'username')->textInput() ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'password')->passwordInput() ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <?= $form->field($model, 'phone')->textInput() ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'email')->textInput() ?>
            </div>        
            
        </div>

        <div class="form-group">
            <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
</div>
