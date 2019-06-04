<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\PermintaanDana */
/* @var $form yii\widgets\ActiveForm */
?>
<hr>
<div class="permintaan-dana-form">

   <div class="panel panel-info">

		<div class="panel-heading">
	            <h4><i class="fa fa-fw fa-money"></i> <?= $this->title; ?></h4>
	        </div>

        <div class="panel-body">
    
	        <?php $form = ActiveForm::begin(); ?>

		    <?= $form->field($model, 'Nama_Kegiatan')->textInput(['maxlength' => true]) ?>

		    <?= $form->field($model, 'deskripsi')->textarea(['rows' => '4']) ?>


		    <?=$form->field($model, 'Rencana_Waktu_Pelaksanaan')->widget(DatePicker::classname(), [
                'options' => [
                    'placeholder' => 'Waktu Pelaksanaan',
                    ],
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd'
                ]
            ]);?>

		     <?= $form->field($model, 'Jumlah_Dana')->textInput(['maxlength' => true, "id"=>"rupiah"]) ?>

		    <div class="form-group">
		        <?= Html::submitButton('Send', ['class' => 'btn btn-success']) ?>
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