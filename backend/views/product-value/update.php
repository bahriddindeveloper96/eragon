<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ProductValue $model */

$this->title = 'Update Product Value: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Product Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-value-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
