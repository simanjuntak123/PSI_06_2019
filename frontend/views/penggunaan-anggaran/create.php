<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PenggunaanAnggaran */

$this->title = 'Create Penggunaan Anggaran';
$this->params['breadcrumbs'][] = ['label' => 'Penggunaan Anggaran', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penggunaan-anggaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
