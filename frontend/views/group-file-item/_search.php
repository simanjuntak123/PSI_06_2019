<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GroupFileItemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="group-file-item-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_gruop_file') ?>

    <?= $form->field($model, 'file_laporan_dana') ?>

    <?= $form->field($model, 'Kegiatan') ?>

    <?= $form->field($model, 'nama_file') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
