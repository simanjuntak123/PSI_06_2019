<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PenggunaanAnggaranSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penggunaan-anggaran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Penggunaan_Anggaran') ?>

    <?= $form->field($model, 'kode') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'total_diajukan') ?>

    <?= $form->field($model, 'snoozed_WR2') ?>

    <?php // echo $form->field($model, 'WR2') ?>

    <?php // echo $form->field($model, 'tanggal_persetujuan_WR2') ?>

    <?php // echo $form->field($model, 'batas_tanggal_persetujuan_WR2') ?>

    <?php // echo $form->field($model, 'snoozed_controller') ?>

    <?php // echo $form->field($model, 'batas_tanggal_persetujuan_controller') ?>

    <?php // echo $form->field($model, 'tanggal_persetujuan_controller') ?>

    <?php // echo $form->field($model, 'controller') ?>

    <?php // echo $form->field($model, 'snoozed_keuangan') ?>

    <?php // echo $form->field($model, 'batas_tanggal_persetujuan_keuangan') ?>

    <?php // echo $form->field($model, 'taggal_persetujuan_keuangan') ?>

    <?php // echo $form->field($model, 'keuangan') ?>

    <?php // echo $form->field($model, 'snoozed_atasan') ?>

    <?php // echo $form->field($model, 'batas_tanggal_persetujuan_atasan') ?>

    <?php // echo $form->field($model, 'tanggal_persetujuan_atasan') ?>

    <?php // echo $form->field($model, 'atasan') ?>

    <?php // echo $form->field($model, 'verifikasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
