<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PenggunaanAnggaran */

$this->title = 'Update Penggunaan Anggaran: ' . $model->Id_Penggunaan_Anggaran;
$this->params['breadcrumbs'][] = ['label' => 'Penggunaan Anggarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Penggunaan_Anggaran, 'url' => ['view', 'id' => $model->Id_Penggunaan_Anggaran]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penggunaan-anggaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
