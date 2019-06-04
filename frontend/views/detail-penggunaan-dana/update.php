<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DetailPenggunaanDana */

$this->title = 'Update Detail Penggunaan Dana: ' . $model->Id_Laporan_Dana;
$this->params['breadcrumbs'][] = ['label' => 'Detail Penggunaan Dana', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Laporan_Dana, 'url' => ['view', 'id' => $model->Id_Laporan_Dana]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-penggunaan-dana-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
