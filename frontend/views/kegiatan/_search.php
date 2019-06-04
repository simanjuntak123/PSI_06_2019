<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KegiatanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kegiatan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Kegiatan') ?>

    <?= $form->field($model, 'Sequence') ?>

    <?= $form->field($model, 'deskripsi') ?>

    <?= $form->field($model, 'PIC') ?>

    <?= $form->field($model, 'dana_terpakai') ?>

    <?php // echo $form->field($model, 'rencana_waktu_pelaksanaan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
