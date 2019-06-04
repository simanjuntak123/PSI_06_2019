<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AnggaranDana */

$this->title = 'Create Anggaran Dana';
$this->params['breadcrumbs'][] = ['label' => 'Anggaran Dana', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anggaran-dana-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
