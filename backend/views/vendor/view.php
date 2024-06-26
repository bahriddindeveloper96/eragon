<?php

use common\models\Vendor;
use common\models\UserPosition;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->name .''.$model->surname;
$this->params['breadcrumbs'][] = ['label' => 'Foydalanuvchi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">

    <p>
        <?= Html::a('Yangilash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Haqiqatan ham bu elementni o\'chirmoqchimisiz?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'username',
            'name',
            'surname',
            'fathers_name',
            [
                'attribute' => 'phone',
                'value' => function (Vendor $model) {
                    return $model->phone ? $model->phone : '';
                },
            ],
            [
                'attribute' => 'role',
                'value' => function (Vendor $model) {
                    return $model->role ? Vendor::rolesList()[$model->role] : '';
                },
            ],
            // [
            //     'attribute' => 'position_id',
            //     'value' => function (User $model) {
            //         return $model->position_id ? 
            //         UserPosition::findOne(['id' =>$model->position_id])->position 
            //         : '';
            //     },
            // ],
        ],
    ]) ?>

</div>
