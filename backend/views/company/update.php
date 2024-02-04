<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use common\models\Vendor;

/** @var yii\web\View $this */
/** @var common\models\Company $model */

$this->title = 'Update Company: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="company-create">

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'inn')->textInput() ?>

<?= $form->field($model, 'phone')->textInput() ?>

<?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>


<?php $user_ids = Vendor::find()->select(['id', 'username'])->asArray()->all(); ?>

<?= $form->field($model, 'updated_by')->dropDownList(
    \yii\helpers\ArrayHelper::map($user_ids, 'id', 'username'),
    ['prompt' => 'Select Sotuvchi']
) ?>
       

<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>


</div>

