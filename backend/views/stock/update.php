<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Stock $model */

$this->title = 'Update Stock: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Stocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stock-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
