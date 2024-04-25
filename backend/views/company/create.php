<?php

use yii\helpers\Html;
use common\models\Vendor;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Company $model */

$this->title = 'Create Company';
$this->params['breadcrumbs'][] = ['label' => 'Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-create">

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'inn')->textInput() ?>

<?= $form->field($model, 'phone')->textInput() ?>

<?= $form->field($model, 'address_uz')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'address_ru')->textInput(['maxlength' => true]) ?>


<?php $user_ids = Vendor::find()->select(['id', 'username'])->asArray()->all(); ?>

<?= $form->field($model, 'created_by')->dropDownList(
    \yii\helpers\ArrayHelper::map($user_ids, 'id', 'username'),
    ['prompt' => 'Select Sotuvchi']
) ?> 

<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>


</div>
