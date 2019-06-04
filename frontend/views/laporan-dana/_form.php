<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LaporanDana */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="laporan-dana-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Item')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Satuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Harga_Persatuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jumlah')->textInput() ?>

    <?= $form->field($model, 'Total_Harga_Item')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'File')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
