<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo">Pelacakan Keuangan </span><span class="logo-lg">') ?>

    <nav class="navbar navbar-static-top" role="navigation">


        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">


                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                        <span class="hidden-xs"><?= Yii::$app->user->identity->role; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle"
                                 alt="User Image"/>

                            <p>
                                <?= Yii::$app->user->identity->username; ?> - Web Developer
                                <small>Telah menjadi pengguna sejak April. 2019</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                         <div class="user-footer">
                            <div class="row text-center">
                                <div class="col-sm-6">
                                    <?= Html::a(
                                        'Kelola Admin',
                                        ['/user/index'],
                                        ['data-method' => 'post', 'class' => 'btn btn-success']
                                    ) ?>
                                </div>
                                <div class="col-sm-6">
                                    <?= Html::a(
                                        'Keluar',
                                        ['/site/logout'],
                                        ['data-method' => 'post', 'class' => 'btn btn-danger']
                                    ) ?>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
