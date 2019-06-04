<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PermintaanDana */

$this->title = 'Update Permintaan Dana: ' . $model->Nama_Kegiatan;
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Danas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Nama_Kegiatan, 'url' => ['view', 'id' => $model->Nama_Kegiatan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="permintaan-dana-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
