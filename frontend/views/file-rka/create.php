<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FileRka */

$this->title = 'Create File Rka';
$this->params['breadcrumbs'][] = ['label' => 'File Rkas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="file-rka-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
