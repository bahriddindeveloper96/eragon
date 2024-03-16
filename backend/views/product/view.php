<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\CategoryAttribute;
use common\models\Photo;

/** @var yii\web\View $this */
/** @var common\models\Product $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

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
            'category_id',
            'company_id',
          //  'photo_id',
            'name',
            [
                'attribute' => 'content',
                'format' => 'html',
                'value' => function ($model) {
                    return $model->content; // content HTML formatida keladi
                },
            ],
            [
                'attribute' => 'description',
                'format' => 'html',
                'value' => function ($model) {
                    return $model->description; // content HTML formatida keladi
                },
            ],            
            'price',
            'old_price',
         //   'photo',
         //   'created_by',
            'updated_by',
        ],
    ]) ?>
    <h2>Product Values</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <!-- Add more headers if needed -->
            </tr>
        </thead>
        <tbody>        
            <?php foreach ($productValues as $attribute): ?>
                <tr>
                    <td><?= $attribute->attribute_id ?></td>
                    <td><?= $attribute->name ?></td>
                    <!-- Display more attribute fields if needed -->
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h2>Product Photos</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <!-- Add more headers if needed -->
            </tr>
        </thead>
        <tbody> 
            <tr>       
                <?php foreach ($productPhotos as $attributes): ?>
                                    
                    <?php $imageUrl = Yii::getAlias('@fileUrl/').'/backend/web/uploads/product/'.$attributes->photo;?>
                        <td><img src="<?= Html::encode($imageUrl) ?>" alt="Rasm"width="200"></td>
                        <!-- Display more attribute fields if needed -->                    
                    <?php endforeach; ?>
            </tr>
        </tbody>
    </table>

</div>
