<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PenggunaanAnggaranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penggunaan Anggarans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penggunaan-anggaran-index">

    <hr>
    <div class="panel panel-info">
            <div class="panel-heading">
                <center><h4> <?= $this->title; ?></h4></center>
            </div>
        <div class="panel-body">
            <p>
                <?= Html::a('Request RKA', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'options' => ['style' => ['word-wrap' => 'break-word;']],
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'total_diajukan',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>

</div>
