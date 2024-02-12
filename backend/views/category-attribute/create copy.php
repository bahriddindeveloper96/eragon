<?php

use yii\helpers\Html;
use common\models\Category;
use yii\widgets\ActiveForm;
use common\models\User;

/** @var yii\web\View $this */
/** @var common\models\CategoryAttribute $model */

$this->title = Yii::t('app', 'Create Category Attribute');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Category Attributes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-attribute-form">

<?php $form = ActiveForm::begin(); ?>

<?php $category_ids = Category::find()->select(['id', 'name'])->asArray()->all(); ?>

<?= $form->field($model, 'category_id')->dropDownList(
    \yii\helpers\ArrayHelper::map($category_ids, 'id', 'name'),
    ['prompt' => 'Category']
) ?>

<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<div class="form-group">
    <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>
