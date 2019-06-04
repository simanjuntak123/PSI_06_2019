<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RkaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rencana Kegiatan dan Anggaran';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rka-index">
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
                    'Tahun',
                    [
                        'attribute' => 'Deskripsi',
                        'format' => 'raw',
                        'value' => function($model){
                            return Html::a($model->Unit, ['view', 'id'=>$model->Deskripsi]);
                        }
                    ],
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>

</div>
