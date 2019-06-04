<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GroupFileItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="group-file-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_gruop_file')->textInput() ?>

    <?= $form->field($model, 'file_laporan_dana')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kegiatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_file')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
