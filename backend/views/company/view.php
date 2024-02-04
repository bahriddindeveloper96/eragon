<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Company $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="company-view">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'inn',
            'phone',
            'address',
            [
                'attribute'=> 'created_by',
                'value' => function ($data) {
                // $instruction = Instruction::findOne(['id' => $model->instructions_id]);
                    return $data ? $data->vendor->username .' '  : '';
                }
            ],
            [
                'attribute'=> 'updated_by',
                'value' => function ($data) {
                // $instruction = Instruction::findOne(['id' => $model->instructions_id]);
                    return $data ? $data->vendor->username .' '  : '';
                }
            ],
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
