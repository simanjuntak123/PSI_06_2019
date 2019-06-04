<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DetailPenggunaanDana */

$this->title = $model->Id_Laporan_Dana;
$this->params['breadcrumbs'][] = ['label' => 'Detail Penggunaan Dana', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="detail-penggunaan-dana-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Id_Laporan_Dana], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Id_Laporan_Dana], [
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
            'Id_Laporan_Dana',
            'Item',
            'Satuan',
            'Harga_Persatuan',
            'Jumlah',
            'Total_Harga_Item',
            'File',
        ],
    ]) ?>

</div>
