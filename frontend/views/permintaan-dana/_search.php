<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PermintaanDanaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="permintaan-dana-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Nama_Kegiatan') ?>

    <?= $form->field($model, 'deskripsi') ?>

    <?= $form->field($model, 'Rencana_Waktu_Pelaksanaan') ?>

    <?= $form->field($model, 'Jumlah_Dana') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
