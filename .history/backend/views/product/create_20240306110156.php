<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Vendor;
use common\models\Category;
use common\models\Photo;
use common\models\Company;
use common\models\CategoryAttribute;
use common\models\ProductValue;
use wbraganca\dynamicform\DynamicFormWidget;

/** @var yii\web\View $this */
/** @var common\models\Product $model */
/** @var common\models\ProductValue[] $modelsPrevent */
/** @var common\models\Photo[] $modelsPhoto */

$this->title = 'Create Product';
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

        <div class="row" id="content">
            <div class="box box-default" style="display: inline-block; width:90%;">
                <div class="panel-body">
                    <?php DynamicFormWidget::begin([
                        'widgetContainer' => 'dynamicform_wrapper',
                        'widgetBody' => '.container-items',
                        'widgetItem' => '.item',
                        'limit' => 4,
                        'min' => 1,
                        'insertButton' => '.add-item',
                        'deleteButton' => '.remove-item',
                        'model' => $modelsPrevent[0],
                        'formId' => 'dynamic-form',
                        'formFields' => ['category_id', 'name'],
                    ]); ?>

                    <div class="container-items">
                        <?php foreach ($modelsPrevent as $i => $prevent): ?>
                            <div class="item panel panel-default">
                                <div class="panel-heading">
                                    <div class="pull-right">
                                        <button type="button" class="add-item btn btn-success btn-xs"><i class="fa fa-plus fa-2x"></i></button>
                                        <button type="button" class="remove-item btn btn-danger btn-xs"><i class="fa fa-minus fa-2x"></i></button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-body">
                                    <?php $category_item = CategoryAttribute::find()->select(['id', 'name'])->asArray()->all(); ?>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <?= $form->field($prevent, "[{$i}]attribute_id")->dropDownList(
                                                \yii\helpers\ArrayHelper::map($category_item, 'id', 'name'),
                                                ['prompt' => 'Attribute']
                                            ) ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <?= $form->field($prevent, "[{$i}]name")->textInput(['maxlength' => true]) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php DynamicFormWidget::end(); ?>
                </div>
            </div>
        </div>

        <div class="row" id="content">
            <div class="box box-default" style="display: inline-block; width:90%;">
                <div class="panel-body">
                    <?php DynamicFormWidget::begin([
                        'widgetContainer' => 'dynamicform_wrapper',
                        'widgetBody' => '.container-items',
                        'widgetItem' => '.item',
                        'limit' => 4,
                        'min' => 1,
                        'insertButton' => '.add-item',
                        'deleteButton' => '.remove-item',
                        'model' => $modelsPhoto[0],
                        'formId' => 'dynamic-form',
                        'formFields' => ['product_value', 'photo'],
                    ]); ?>

                    <div class="container-items">
                        <?php foreach ($modelsPhoto as $i => $photo): ?>
                            <div class="item panel panel-default">
                                <div class="panel-heading">
                                    <div class="pull-right">
                                        <button type="button" class="add-item btn btn-success btn-xs"><i class="fa fa-plus fa-2x"></i></button>
                                        <button type="button" class="remove-item btn btn-danger btn-xs"><i class="fa fa-minus fa-2x"></i></button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <?= $form->field($photo, "[{$i}]product_value")->textarea(['rows' => 4]) ?>
                                        </div>
                                        <div class="col-sm-4">
                                            <?= $form->field($photo, "[{$i}]photo")->fileInput() ?>
                                        </div>
                                    </div>
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