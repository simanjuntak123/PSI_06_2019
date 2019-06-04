<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\chartjs\ChartJs;
use app\models\AnggaranDana;

 $a = array();
 // foreach($data as $d){
 //      $a[] = $d->$anggaran_dana->Total_Anggaran;
 //  }

$this->title = 'Beranda';

$data = AnggaranDana::find()->all();
foreach ($data as $key => $value) {
    $a[] = $value->Total_Anggaran;
}
?>



 

<style type="text/css">
    .site-index1{
        background: #rgb(214, 227, 209);
        border: 2px solid #467813;
        border-radius: 5px;
        color: #fff;
        padding: 30px 20px 30px 20px;
    }
    .site-index{
        background: #rgb(214, 227, 209);
        border-top: 4px solid #2E3192;
        border: 2px solid #467813;
        border-radius: 5px;
        color: #fff;
        padding: 30px 20px 30px 20px;
    }
</style>



     <div style="background-color: #d9edf7;border-color: #bce8f1;" class="alert alert-dismissible text-center" role="alert">
        <!-- <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button> -->
        <h4 id="title" style="color: black;"> Selamat Datang di Sistem Informasi Pelacakan Keuangan Program Studi</h4>
        
    </div>
    

<hr>

<div class="site-index">
    <div class="body-content">

        <div class="row">

            <div class="col-lg-3">
                <p class="pull-top"  style="color: #004D40"> <b><?= Html::encode('Prodi') ?></b></p>
                <a href="https://www.del.ac.id/?page_id=864"><img src="image/11.jpg" class="col-lg-8 col-xs-8" border= "15px solid red"></a>
            </div>
            <div class="col-lg-3">
            <p class="pull-top"  style="color: #004D40"> <b><?= Html::encode('Prodi') ?></b></p>
                <a href="https://www.del.ac.id/?page_id=862"><img src="image/18.jpg" class="col-lg-8 col-xs-8" border="2px solid #467813"></a>
            </div>
            <div class="col-lg-3">
            <p class="pull-top"  style="color: #004D40"> <b><?= Html::encode('Prodi') ?></b></p>
                <a href="https://www.del.ac.id/?page_id=2464"><img src="image/12.jpg" class="col-lg-8 col-xs-8" border="2px solid #467813"></a>
            </div>
            <div class="col-lg-3">
            <p class="pull-top"  style="color: #004D40"> <b><?= Html::encode('Prodi') ?></b></p>
                <a href="https://www.del.ac.id/?page_id=1792"><img src="image/13.jpg" class="col-lg-8 col-xs-8" border="2px solid #467813"></a>
            </div>
        </div>
    </div> 

</div>

<hr>

<div class="site-index1">
    
    <div class="body-content">

        <div class="row">
        <div class="col-lg-3">
            <p class="pull-top"  style="color: #004D40"> <b><?= Html::encode('Prodi') ?></b></p>
            <a href="https://www.del.ac.id/?page_id=3534"><img src="image/16.jpg" class="col-lg-8 col-xs-8" border="2px solid #467813"></a>
        </div>
        <div class="col-lg-3">
            <p class="pull-top"  style="color: #004D40"> <b><?= Html::encode('Prodi') ?></b></p>
            <a href="https://www.del.ac.id/?page_id=2441"><img src="image/14.jpg" class="col-lg-8 col-xs-8" border="2px solid #467813"></a>
        </div>
        <div class="col-lg-3">
            <p class="pull-top"  style="color: #004D40"> <b><?= Html::encode('Prodi') ?></b></p>
            <a href="https://www.del.ac.id/?page_id=1789"><img src="image/17.jpg" class="col-lg-8 col-xs-8" border="2px solid #467813"></a>
        </div>
        <div class="col-lg-3">
            <p class="pull-top"  style="color: #004D40"> <b><?= Html::encode('Prodi') ?></b></p>
            <a href="https://www.del.ac.id/?page_id=1790"><img src="image/15.jpg" class="col-lg-8 col-xs-8" border="2px solid #467813"></a>
        </div>
        </div>
    </div> 
</div>

<div class="site-index1">
    <?= ChartJs::widget([
        'type' => 'line',
        'options' => [
            'height' => 100,
            'width' => 400,
        ],
        'data' => [
            'labels' => ["DIII Teknik Informatika", "DIII Teknik Komputer", "DIV Teknik Informatika", "S1 Sistem Informasi", "S1 Teknik Informatika", "S1 Teknik Elektro", "S1 Manajemen Rekayasa", "S1 Teknik Bioproses" ],
            'datasets' => [
                [
                    'label' => "Anggaran Dana",
                    'backgroundColor' => "rgba(179,181,198,0.2)",
                    'borderColor' => "rgba(179,181,198,1)",
                    'pointBackgroundColor' => "rgba(179,181,198,1)",
                    'pointBorderColor' => "#fff",
                    'pointHoverBackgroundColor' => "#fff",
                    'pointHoverBorderColor' => "rgba(179,181,198,1)",
                    'data' => $a
                ],
            ]
        ]
    ]);
    ?>
</div>