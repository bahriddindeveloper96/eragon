<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ProductValue $model */

$this->title = 'Create Product Value';
$this->params['breadcrumbs'][] = ['label' => 'Product Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-value-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
