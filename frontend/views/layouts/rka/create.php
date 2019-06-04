<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rka */

$this->title = 'Create Rka';
$this->params['breadcrumbs'][] = ['label' => 'Rkas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rka-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
