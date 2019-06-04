<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DetailPenggunaanDana */

$this->title = 'Create Laporan Dana';
$this->params['breadcrumbs'][] = ['label' => 'Laporan Dana', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-penggunaan-dana-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
