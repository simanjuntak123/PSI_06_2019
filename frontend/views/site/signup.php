<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Daftar';
$this->params['breadcrumbs'][] = $this->title;

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];

$fieldOptions3 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>
<style type="text/css">
    .site-signup{
        padding: 65px;
        background-image: url(<?= Yii::getAlias('@web').'/image/login-daftar.jpg' ?>);
        background-size: cover;
    }
    #login-box{
        background-color: rgba(255,255,255,0.8);
        padding: 25px;
        color: #0072b4;
        border: 4px solid #0072b4;
        border-top-left-radius: 10%;
        border-top-right-radius: 10%;
        border-bottom-right-radius: 10%;
        border-bottom-left-radius: 10%;
    }
    #message{
        color: #555;
    }
</style>
<div class="site-signup">
    <div class="row">
        <h1 class="text-center"><b><?= Html::encode($this->title) ?></b> Account Baru</h1>
        <div id="login-box" class="col-lg-offset-4 col-lg-4 col-lg-offset-4">
            <p id="message" class="text-center small">Daftar agar tetap terhubung</p>
            <?php $form = ActiveForm::begin(['id' => 'form-signup', 'enableClientValidation' => false]); ?>

                <?= $form->field($model, 'username', $fieldOptions1)->label(false)->textInput(['placeholder' => $model->getAttributeLabel('username'), 'autofocus' => true]) ?>

                <?= $form->field($model, 'email', $fieldOptions1)->label(false)->textInput(['placeholder' => $model->getAttributeLabel('email')]) ?>

                <?= $form->field($model, 'password', $fieldOptions2)->label(false)->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

                <div class="form-group">
                    <div class="col-xs-offset-4 col-xs-4 col-xs-offset-4 text-center">
                        <?= Html::submitButton('Daftar', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
