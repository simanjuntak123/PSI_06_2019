<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RkaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rka-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Tahun') ?>

    <?= $form->field($model, 'Unit') ?>

    <?= $form->field($model, 'Kegiatan') ?>

    <?= $form->field($model, 'Waktu_pelaksanaan') ?>

    <?= $form->field($model, 'PIC') ?>

    <?php // echo $form->field($model, 'Anggaran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
