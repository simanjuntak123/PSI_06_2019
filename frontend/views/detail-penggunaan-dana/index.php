<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetailPenggunaanDanaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Penggunaan Dana';
$this->params['breadcrumbs'][] = $this->title;
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
                <?= Html::a('Buat Laporan', ['create'], ['class' => 'btn btn-primary']) ?>
            </p>



            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Item</th>
                        <th>Satuan</th>
                        <th>Harga Persatuan</th>
                        <th>Jumlah</th>
                        <th>Dana yang Dibutuhkan</th>
                        <th>File</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        foreach ($model as $data) {?>
                            <tr>
                                <td> <?= ($i+1) ?> </td>
                                <td> <?= $model[$i]['Item'] ?> </td>
                                <td> <?= $model[$i]['Satuan'] ?> </td>
                                <td> <?= $model[$i]['Harga_Persatuan'] ?> </td>
                                <td> <?= $model[$i]['Jumlah'] ?> </td>
                                <td> <?= $model[$i]['Total_Harga_Item'] ?> </td>
                                <td> <?= $model[$i]['File'] ?> </td>

                            </tr>
                    <?php
                        $i++;
                        }
                    ?>
                </tbody>
            </table>
            <p>
                <button class="btn btn-success" style="float:right">Submit Laporan</button>

                <!-- <raight

                <?= Html::a('Submit Laporan', ['create'], ['class' => 'btn btn-success']) ?> -->
            </p>


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