<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rka */

$this->title = 'Update Rka: ' . $model->Unit;
$this->params['breadcrumbs'][] = ['label' => 'Rkas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Unit, 'url' => ['view', 'id' => $model->Unit]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rka-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
