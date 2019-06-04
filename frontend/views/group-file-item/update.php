<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GroupFileItem */

$this->title = 'Update Group File Item: ' . $model->id_gruop_file;
$this->params['breadcrumbs'][] = ['label' => 'Group File Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_gruop_file, 'url' => ['view', 'id' => $model->id_gruop_file]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="group-file-item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
