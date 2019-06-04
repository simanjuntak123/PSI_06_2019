<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AnggaranDana */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anggaran-dana-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'unit')->textInput() ?>

    <?= $form->field($model, 'Tahun')->textInput() ?>

    <?= $form->field($model, 'Total_Anggaran')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
