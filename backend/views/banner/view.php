<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Banner $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Banners'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="banner-view">  

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
            [
                'attribute' => 'background',
                'value' => Yii::getAlias('@fileUrl/').'backend/web/uploads/banner/'.$model->background,
                'format' => ['image',['width'=>'200','height'=>'200']],
            ],
            [
                'attribute' => 'photo',
                'value' => Yii::getAlias('@fileUrl/').'backend/web/uploads/banner/'.$model->photo,
                'format' => ['image',['width'=>'200','height'=>'200']],
            ],
            'photo',
            'name_uz',
            'name_ru',
            'description_uz:ntext',
            'description_ru:ntext',
            'link',
            'created_by',
            'updated_by',
            'status',
        ],
    ]) ?>

</div>
