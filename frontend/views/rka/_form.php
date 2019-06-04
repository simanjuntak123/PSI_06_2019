<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Rka */
/* @var $form yii\widgets\ActiveForm */
?>
<hr>
<div class="rka-form">

   <div class="panel panel-info">
        <div class="panel-heading">
            <h4><i class="fa fa-fw fa-pencil"></i> <?= $this->title; ?></h4>
        </div>
        <div class="panel-body">
            <?php $form = ActiveForm::begin([ 'enableClientValidation' => true,'options' => ['enctype'=>'multipart/form-data']]);?>

   		    <?php $item = ['2019' => '2019', '2020' => '2020', '2021' => '2021', '2022' => '2022', '2023' => '2023', '2024' => '2024']; ?>
		    <?= $form->field($model, 'Tahun')->dropDownList($item, ['prompt' => '--Pilih Tahun--']) ?>

		   <?= $form->field($model, 'Deskripsi')->textarea(['rows' => '4']) ?>

 		   <?= $form->field($model, 'Total_Anggaran')->textInput(['maxlength' => true, "id"=>"rupiah"]) ?>

        
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Tambah' : 'Perbarui', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>





<script type="text/javascript">
    var rupiah = document.getElementById('rupiah');
        rupiah.addEventListener('keyup', function(e){
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah.value = formatRupiah(this.value, 'Rp. ');
        });
 
        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix){
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split           = number_string.split(','),
            sisa            = split[0].length % 3,
            rupiah          = split[0].substr(0, sisa),
            ribuan          = split[0].substr(sisa).match(/\d{3}/gi);
 
            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if(ribuan){
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
 
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
</script>
