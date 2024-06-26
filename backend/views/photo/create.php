<?php

use yii\helpers\Html;
use common\models\ProductItems;
use common\models\ProductValue;
use common\models\Vendor;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;
use common\models\User;


/** @var yii\web\View $this */
/** @var common\models\CategoryAttribute $model */

$this->title = Yii::t('app', 'Create Category Attribute');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Category Attributes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
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
                                    <?php $product_ids = ProductItems::find()->select(['id', 'name_uz'])->asArray()->all(); ?>
                                    <?php $value_ids = ProductValue::find()->select(['id', 'name_uz'])->asArray()->all(); ?>
                                    <div class="panel-body">
                                        <div class="row">                                        
                                            <div class="col-sm-3">
                                                <?= $form->field($prevent, "[{$i}]product_items_id")->dropDownList(
                                                    \yii\helpers\ArrayHelper::map($product_ids, 'id', 'name_uz'),
                                                    ['prompt' => 'Product']
                                                ) ?>
                                            </div>
                                            <div class="col-sm-3">
                                                <?= $form->field($prevent, "[{$i}]product_value")->textarea(['rows' => 6]) ?>
                                                
                                            </div> 
                                                                                      
                                            <div class="col-sm-3">
                                                <?php $user_ids = Vendor::find()->select(['id', 'username'])->asArray()->all(); ?>

                                                <?= $form->field($prevent, "[{$i}]created_by")->dropDownList(
                                                    \yii\helpers\ArrayHelper::map($user_ids, 'id', 'username'),
                                                    ['prompt' => 'Sotuvchi']
                                                ) ?> 
                                            </div>
                                            <div class="col-sm-3">
                                                <?= $form->field($prevent, "[{$i}]photo")->fileInput()?>
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
