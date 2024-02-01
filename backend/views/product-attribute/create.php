<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ProductAttribute $model */

$this->title = 'Create Product Attribute';
$this->params['breadcrumbs'][] = ['label' => 'Product Attributes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-attribute-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
