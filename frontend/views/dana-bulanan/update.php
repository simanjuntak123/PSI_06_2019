<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DanaBulanan */

$this->title = 'Update Dana Bulanan: ' . $model->Id_Dana_Bulanan;
$this->params['breadcrumbs'][] = ['label' => 'Dana Bulanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Dana_Bulanan, 'url' => ['view', 'id' => $model->Id_Dana_Bulanan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dana-bulanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
