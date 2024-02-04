<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;
use common\models\Category;

/** @var yii\web\View $this */
/** @var common\models\Category $model */

$this->title = 'Update Category: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="category-form">

<?php $form = ActiveForm::begin(); ?>
<?php $category_ids = Category::find()->select(['id', 'name'])->asArray()->all(); ?>

<?= $form->field($model, 'parent_id')->dropDownList(
    \yii\helpers\ArrayHelper::map($category_ids, 'id', 'name'),
    ['prompt' => 'Parent Category']
) ?>

<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

<?php $user_ids = User::find()->select(['id', 'username'])->asArray()->all(); ?>

<?= $form->field($model, 'updated_by')->dropDownList(
    \yii\helpers\ArrayHelper::map($user_ids, 'id', 'username'),
    ['prompt' => 'Administrator']
) ?> 

<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>