<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PenggunaanAnggaran */

$this->title = $model->Id_Penggunaan_Anggaran;
$this->params['breadcrumbs'][] = ['label' => 'Penggunaan Anggarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penggunaan-anggaran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Id_Penggunaan_Anggaran], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Id_Penggunaan_Anggaran], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id_Penggunaan_Anggaran',
            'kode',
            'nama',
            'total_diajukan',
            'snoozed_WR2',
            'WR2',
            'tanggal_persetujuan_WR2',
            'batas_tanggal_persetujuan_WR2',
            'snoozed_controller',
            'batas_tanggal_persetujuan_controller',
            'tanggal_persetujuan_controller',
            'controller',
            'snoozed_keuangan',
            'batas_tanggal_persetujuan_keuangan',
            'taggal_persetujuan_keuangan',
            'keuangan',
            'snoozed_atasan',
            'batas_tanggal_persetujuan_atasan',
            'tanggal_persetujuan_atasan',
            'atasan',
            'verifikasi',
        ],
    ]) ?>

</div>
