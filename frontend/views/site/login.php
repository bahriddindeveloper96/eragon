<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login container">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php if(Yii::$app->session->hasFlash('success')):?>
        <div class="col-sm-12 alert alert-primary">
            <button type="button" class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
            <?php echo Yii::$app->session->getFlash('success');?>
        </div>
        <?php endif;?>
        <?php if(Yii::$app->session->hasFlash('error')):?>
        <div class="col-sm-12 alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">
                <span>&times;</span>
           </button>
            <?php echo Yii::$app->session->getFlash('error');?>
        </div>
    <?php endif;?>
    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="my-1 mx-0" style="color:#999;">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                    <br>
                    Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    <a class="btn btn-success" title="Кабинет" href="<?= \yii\helpers\Url::to(['/site/signup'])  ?>">SignUp</a>
                </div>                
                

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
