<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rka */

$this->title = 'Create Rka';
$this->params['breadcrumbs'][] = ['label' => 'Rkas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rka-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
