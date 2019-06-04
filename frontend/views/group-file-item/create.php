<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GroupFileItem */

$this->title = 'Create Group File Item';
$this->params['breadcrumbs'][] = ['label' => 'Group File Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-file-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
