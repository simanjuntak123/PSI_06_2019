<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rka */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rka-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Tahun')->textInput() ?>

    <?= $form->field($model, 'Unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kegiatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Waktu_pelaksanaan')->textInput() ?>

    <?= $form->field($model, 'PIC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Anggaran')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
