<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Yangilash: ' . $model->name.''.$model->surname;
$this->params['breadcrumbs'][] = ['label' => 'Foydalanuvchilar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name.''.$model->surname, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Yangilash';
?>
<div class="user-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
