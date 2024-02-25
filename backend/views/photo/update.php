<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Photo $model */

$this->title = Yii::t('app', 'Update Photo: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Photos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="photo-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
