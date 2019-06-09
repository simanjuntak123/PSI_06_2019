<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PermintaanDana */

$this->title = $model->Nama_Kegiatan;
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Danas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<br>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" defer></script> 
 <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js" defer></script> 

<div class="user-index">
    <div class="panel panel-info">
        <div class="panel-heading">
            <center><h4><?= $this->title; ?></h4></center>
        </div>
        <div class="panel-body">
            <p>
                <?= Html::a('Buat Permintaan Dana', ['create'], ['class' => 'btn btn-success']) ?>
            </p>



            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Kegiatan</th>
                        <th>Deskripsi</th>
                        <th>Rencana Waktu Pelaksanaan</th>
                        <th>Dana yang Dibutuhkan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        foreach ($model as $data) {?>
                            <tr>
                                <td> <?= ($i+1) ?> </td>
                                <td> <?= $model[$i]['Nama_Kegiatan'] ?> </td>
                                <td> <?= $model[$i]['deskripsi'] ?> </td>
                                <td> <?= $model[$i]['Rencana_Waktu_Pelaksanaan'] ?> </td>
                                <td> <?= $model[$i]['Jumlah_Dana'] ?> </td>
                            </tr>
                    <?php
                        $i++;
                        }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?php
$script = <<< JS
    $(document).ready(function() {
        $('#example').DataTable();
    } );
JS;
$this->registerJs($script);
?>