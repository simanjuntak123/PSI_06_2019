<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LaporanDanaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Danas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-dana-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Laporan Dana', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Laporan_Dana',
            'Item',
            'Satuan',
            'Harga_Persatuan',
            'Jumlah',
            //'Total_Harga_Item',
            //'File',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
