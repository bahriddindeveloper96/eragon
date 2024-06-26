<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\CategoryAttribute $model */

$this->title = Yii::t('app', 'Update Category Attribute: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Category Attributes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="category-attribute-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
