<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\User;
use common\models\Category;
use common\models\CategoryAttribute;


/** @var yii\web\View $this */
/** @var common\models\Category $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="category-view">
   
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
            [
                'attribute'=> 'parent_id',
                'value' => function ($data) {
                 $parent = Category::findOne(['id' => $data->parent_id]);
                    return $parent ? $parent->name .' '  : '';
                }
            ],
            'name',
            'description:ntext',
            [
                'attribute'=> 'created_by',
                'value' => function ($data) {
                // $instruction = Instruction::findOne(['id' => $model->instructions_id]);
                    return $data ? $data->user->username .' '  : '';
                }
            ],
            [
                'attribute'=> 'updated_by',
                'value' => function ($data) {
                // $instruction = Instruction::findOne(['id' => $model->instructions_id]);
                    return $data ? $data->user->username .' '  : '';
                }
            ],
        ],
    ]) ?>

<h2>Category Attributes</h2>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <!-- Add more headers if needed -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categoryAttributes as $attribute): ?>
            <tr>
                <td><?= $attribute->name ?></td>
                <!-- Display more attribute fields if needed -->
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</div>
