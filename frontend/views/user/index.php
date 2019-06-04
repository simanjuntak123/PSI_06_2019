<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Account Sistem';
?>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" defer></script> 
 <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js" defer></script> 

<div class="user-index">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h4><i class="fa fa-fw fa-group"></i> <?= $this->title; ?></h4>
        </div>
        <div class="panel-body">
            <p>
                <?= Html::a('Tambah Account', ['create'], ['class' => 'btn btn-success']) ?>
            </p>



            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Jabatan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        foreach ($model as $data) {?>
                            <tr>
                                <td> <?= ($i+1) ?> </td>
                                <td> <?= $model[$i]['username'] ?> </td>
                                <td> <?= $model[$i]['email'] ?> </td>
                                <td> <?= $model[$i]['role'] ?> </td>
                                <td> <?= $model[$i]['jabatan'] ?> </td>
                                <td> <?= $model[$i]['status'] ?> </td>
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
