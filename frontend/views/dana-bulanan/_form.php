<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DanaBulanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dana-bulanan-form">

    
<div class="panel panel-info">  

		<div class="panel-heading">
	            <h4><i class="fa fa-fw fa-money"></i> <?= $this->title; ?></h4>
	    </div>


        <div class="panel-body">

	        <?php $form = ActiveForm::begin(); ?>

			<?php $item = ['Januari' => 'Januari', 'Februari' => 'Februari', 'Maret' => 'Maret', 'April' => 'April', 'Mei' => 'Mei', 'Juni' => 'Juni', 'Juli' => 'Juli', 'Agustus' => 'Agustus', 'September' => 'September', 'Oktober' => 'Oktober', 'November' => 'November', 'Desember' => 'Desember']; ?>
		    <?= $form->field($model, 'Bulan')->dropDownList($item, ['prompt' => '--Pilih Bulan--']) ?>

   			 <?= $form->field($model, 'Total_Dana_Dibutuhkan')->textInput(['maxlength' => true, "id"=>"rupiah"]) ?>

    <!-- <?= $form->field($model, 'Status')->textInput() ?> -->

 			<div class="form-group">
    		    <?= Html::submitButton('Request Dana', ['class' => 'btn btn-success']) ?>
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

