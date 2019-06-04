<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PermintaanDana */

$this->title = 'Create Permintaan Dana';
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Dana', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permintaan-dana-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
