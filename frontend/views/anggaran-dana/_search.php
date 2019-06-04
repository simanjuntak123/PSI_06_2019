<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AnggaranDanaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anggaran-dana-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Anggaran_Dana') ?>

    <?= $form->field($model, 'unit') ?>

    <?= $form->field($model, 'Tahun') ?>

    <?= $form->field($model, 'Total_Anggaran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
