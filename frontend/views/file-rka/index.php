<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FileRkaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'File Rkas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="file-rka-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create File Rka', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_file_rka',
            'file_rka',
            'unit',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
