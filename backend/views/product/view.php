<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Product $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'category_id',
            'brand_id',
            'company_id',
            'name_uz',
            'name_ru',
            'content_uz:ntext',
            'content_ru:ntext',
            'description_uz:ntext',
            'description_ru:ntext',
            'price',
            'old_price',
            'seo_key_uz:ntext',
            'seo_key_ru:ntext',
            'seo_desc_uz:ntext',
            'seo_desc_ru:ntext',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>
