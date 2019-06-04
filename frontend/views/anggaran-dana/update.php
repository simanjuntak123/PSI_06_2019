<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AnggaranDana */

$this->title = 'Update Anggaran Dana: ' . $model->Id_Anggaran_Dana;
$this->params['breadcrumbs'][] = ['label' => 'Anggaran Danas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Anggaran_Dana, 'url' => ['view', 'id' => $model->Id_Anggaran_Dana]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="anggaran-dana-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
