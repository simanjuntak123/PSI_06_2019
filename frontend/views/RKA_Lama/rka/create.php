<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rka */

$this->title = 'Create Rencana Kegiatan dan Anggaran';
$this->params['breadcrumbs'][] = ['label' => 'RKA', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<hr>
<div class="rka-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
