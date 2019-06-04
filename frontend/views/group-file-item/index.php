<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GroupFileItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Group File Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-file-item-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Group File Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_gruop_file',
            'file_laporan_dana',
            'Kegiatan',
            'nama_file',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
