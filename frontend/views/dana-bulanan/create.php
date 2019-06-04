<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DanaBulanan */

$this->title = 'Create Dana Bulanan';
$this->params['breadcrumbs'][] = ['label' => 'Dana Bulanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dana-bulanan-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
