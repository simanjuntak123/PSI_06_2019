<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LaporanDana */

$this->title = 'Update Laporan Dana: ' . $model->Id_Laporan_Dana;
$this->params['breadcrumbs'][] = ['label' => 'Laporan Danas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Laporan_Dana, 'url' => ['view', 'id' => $model->Id_Laporan_Dana]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="laporan-dana-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
