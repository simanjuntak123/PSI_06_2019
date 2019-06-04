<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Rka */

$this->title = $model->Id_Rka;
$this->params['breadcrumbs'][] = ['label' => 'Rka', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" defer></script> 
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js" defer></script> 

<hr>
<div class="rka-view">

    <div class="panel panel-info">
        <div class="panel-heading">
            <h4><i class="fa fa-fw fa-eye"> </i> <?= $this->title; ?></h4>
        </div>
        <div class="panel-body">
            <br>
            <p>Nama-nama Kegiatan</p>
            
                <table id="buat" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Deskripsi</th>
                            <th>PIC</th>
                            <th>Dana yang Dibutuhkan</th>
                            <th>Waktu Pelaksanaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 0;
                            foreach ($model as $data) {?>
                                <tr>
                                    <td> <?= ($i+1) ?> </td>
                                    <td> <?= $model[$i]['deskripsi'] ?> </td>
                                    <td> <?= $model[$i]['PIC'] ?> </td>
                                    <td> <?= $model[$i]['dana_terpakai'] ?> </td>
                                    <td> <?= $model[$i]['rencana_waktu_pelaksanaan'] ?> </td>
                                </tr>
                        <?php
                            $i++;
                            }
                        ?>
                    </tbody>
                </table>

                <hr>
        </div>
    </div>

</div>


<?php
$script = <<< JS
    $(document).ready(function() {
        $('#buat').DataTable();
    } );
JS;
$this->registerJs($script);
?>


