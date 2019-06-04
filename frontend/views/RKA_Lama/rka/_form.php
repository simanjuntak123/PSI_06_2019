<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use vova07\imperavi\Widget;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Rka */
/* @var $form yii\widgets\ActiveForm */
?>

<div>

     <div class="panel panel-info">
        <div class="panel-heading">
            <h4><i class="fa fa-fw fa-pencil"></i> <?= $this->title; ?></h4>
        </div>
        <div class="panel-body">
            <?php $form = ActiveForm::begin([ 'enableClientValidation' => true,'options' => ['enctype'=>'multipart/form-data']]);?>

   		    <?php $item = ['2019' => '2019', '2020' => '2020', '2021' => '2021', '2022' => '2022', '2023' => '2023', '2024' => '2024']; ?>
		    <?= $form->field($model, 'Tahun')->dropDownList($item, ['prompt' => '--Pilih Tahun--']) ?>

		    <?php $item = ['DIII Teknik Informatika' => 'DIII Teknik Informatika', 'DIII Teknik Komputer' => 'DIII Teknik Komputer', 'DIV Teknik Informatika' => 'DIV Teknik Informatika', 'S1 Sistem Informasi' => 'S1 Sistem Informasi', 'S1 Teknik Informatika' => 'S1 Teknik Informatika', 'S1 Teknik Elektro' => 'S1 Teknik Elektro', 'S1 Manajemen Rekayasa' => 'S1 Manajemen Rekayasa', 'S1 Teknik Bioproses' => 'S1 Teknik Bioproses']; ?>
            <?= $form->field($model, 'Deskripsi')->dropDownList($item, ['prompt' => '--Pilih Unit--']) ?>
        
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Tambah' : 'Perbarui', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
