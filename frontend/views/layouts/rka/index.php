<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RkaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rkas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rka-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rka', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Tahun',
            'Unit',
            'Kegiatan',
            'Waktu_pelaksanaan',
            'PIC',
            //'Anggaran',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
