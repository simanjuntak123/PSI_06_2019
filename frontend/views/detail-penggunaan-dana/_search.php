<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetailPenggunaanDanaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-penggunaan-dana-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Laporan_Dana') ?>

    <?= $form->field($model, 'Item') ?>

    <?= $form->field($model, 'Satuan') ?>

    <?= $form->field($model, 'Harga_Persatuan') ?>

    <?= $form->field($model, 'Jumlah') ?>

    <?php // echo $form->field($model, 'Total_Harga_Item') ?>

    <?php // echo $form->field($model, 'File') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
