<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;
use common\models\Category;
use wbraganca\dynamicform\DynamicFormWidget;

/** @var yii\web\View $this */
/** @var common\models\Category $model */

$this->title = 'Update Category';
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

<div class="container">
    
        <?php $form = ActiveForm::begin([
                    'id' => 'dynamic-form',
                    'enableClientValidation' => false,
                    
                    'options' => [
                        'enctype' => 'multipart/form-data',
                    ]
                ]) ?>
            <i class="fa fa-toggle-right" id = "open2" onclick=openPanel2(); style="font-size:24px;color:blue;display:none;"></i> 
            <i class="fa fa-toggle-down " id = "close2" onclick=closePanel2(); style="font-size:24px;color:blue; " ></i> 
                   
            <div class="row" id="content2"  >
                <div class="box box-default" style="display: inline-block; width:90%;">           
                    <div class="panel-body">
                        <?php DynamicFormWidget::begin([
                            'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                            'widgetBody' => '.container-items', // required: css class selector
                            'widgetItem' => '.item', // required: css class
                            'limit' => 4, // the maximum times, an element can be cloned (default 999)
                            'min' => 1, // 0 or 1 (default 1)
                            'insertButton' => '.add-item', // css class
                            'deleteButton' => '.remove-item', // css class
                            'model' => $modelsPrevent[0],
                            'formId' => 'dynamic-form',
                            'formFields' => [
                            'category_id',
                            'name',
                            ],
                        ]); ?>

                <?php $category_ids = Category::find()->select(['id', 'name_uz'])->asArray()->all(); ?>
                    <div class="row">
                        <div class="col-sm-4">
                            <?= $form->field($model, 'parent_id')->dropDownList(
                                \yii\helpers\ArrayHelper::map($category_ids, 'id', 'name_uz'),
                                ['prompt' => 'Parent Category']
                            ) ?>
                        </div>
                        <div class="col-sm-4">
                            <?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-sm-4">
                            <?php $user_ids = User::find()->select(['id', 'username'])->asArray()->all(); ?>

                            <?= $form->field($model, 'created_by')->dropDownList(
                                \yii\helpers\ArrayHelper::map($user_ids, 'id', 'username'),
                                ['prompt' => 'Administrator']
                            ) ?> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <?= $form->field($model, 'description_uz')->textarea(['rows' => 6]) ?>
                        </div>
                    </div>
                    <?php $category_ids = Category::find()->select(['id', 'name_ru'])->asArray()->all(); ?>
                    <div class="row">
                        <div class="col-sm-4">
                            <?= $form->field($model, 'parent_id')->dropDownList(
                                \yii\helpers\ArrayHelper::map($category_ids, 'id', 'name_ru'),
                                ['prompt' => 'Parent Category']
                            ) ?>
                        </div>
                        <div class="col-sm-4">
                            <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-sm-4">
                            <?php $user_ids = User::find()->select(['id', 'username'])->asArray()->all(); ?>

                            <?= $form->field($model, 'created_by')->dropDownList(
                                \yii\helpers\ArrayHelper::map($user_ids, 'id', 'username'),
                                ['prompt' => 'Administrator']
                            ) ?> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <?= $form->field($model, 'description_ru')->textarea(['rows' => 6]) ?>
                        </div>
                    </div>
                    

                        <div class="container-items"><!-- widgetContainer -->
                            <?php foreach ($modelsPrevent as $i => $prevent): ?>
                                <div class="item panel panel-default"><!-- widgetBody -->
                                    <div class="panel-heading">
                                        <div class="pull-right">
                                            <button type="button" class="add-item btn btn-success btn-xs"><i class="fa fa-plus fa-2x"></i></button>
                                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="fa fa-minus fa-2x"></i></button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <?php $category_ids = Category::find()->select(['id', 'name_uz'])->asArray()->all(); ?>
                                    <?php $category_ids = Category::find()->select(['id', 'name_ru'])->asArray()->all(); ?>
                                    <div class="panel-body">
                                        <div class="row"> 
                                        <div class="col-sm-12">
                                                <?= $form->field($prevent, "[{$i}]name_uz")->textInput(['maxlength' => true]) ?>
                                        </div> 
                                        <div class="col-sm-12">
                                                <?= $form->field($prevent, "[{$i}]name_ru")->textInput(['maxlength' => true]) ?>
                                        </div>                        
                                        </div><!-- .row -->
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php DynamicFormWidget::end(); ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
    
</div>

</div>

