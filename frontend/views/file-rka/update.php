<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FileRka */

$this->title = 'Update File Rka: ' . $model->id_file_rka;
$this->params['breadcrumbs'][] = ['label' => 'File Rkas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_file_rka, 'url' => ['view', 'id' => $model->id_file_rka]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="file-rka-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
