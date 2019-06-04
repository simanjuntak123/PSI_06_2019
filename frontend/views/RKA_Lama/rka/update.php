<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rka */

$this->title = 'Update Rka: ' . $model->Id_Rka;
$this->params['breadcrumbs'][] = ['label' => 'Rka', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Rka, 'url' => ['view', 'id' => $model->Id_Rka]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rka-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
