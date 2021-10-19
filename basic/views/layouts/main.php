<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\appAsset;
use app\widgets\Alert;
use PharIo\Manifest\Url;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use app\assets\BrandonAsset;
BrandonAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<body>
<div class="wrap-body">
    <!--------------Header--------------->
    <header>
        <div class="wrap-header zerogrid">
            <div id="logo"><a href="https://www.zerotheme.com"><img src="/public/./images/logo.png"/></a></div>
            <nav>
                <div class="wrap-nav">
                    <div class="menu">
                        <ul>
                            <li><a href="index">Home</a></li>
                            <li><a href="blog.html">About</a></li>
                            <li><a href="https://www.zerotheme.com">Contact</a></li>

                                <?php if(Yii::$app->user->isGuest):?>
                                    <li><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['auth/login'])?>">Login</a></li>
                                    <li><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['auth/signup'])?>">Register</a></li>
                                <?php else: ?>
                                    <li style="height: 80px">
                                    <?= Html::beginForm(['/auth/logout'], 'post')
                                    . Html::submitButton(
                                        'Logout (' . Yii::$app->user->identity->name . ')',
                                        ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
                                    )
                                    . Html::endForm() ?>
                            </li>
                                <?php endif;?>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!--------------Content--------------->
   <?= $content ?>
    <!--------------Footer--------------->
    <footer>
        <div class="wrap-footer zerogrid">
            <div class="row">
                <div class="col-1-3">
                    <div class="wrap-col">
                        <div class="box">
                            <div class="heading"><h4 class="title">Image Gallery</h4></div>
                            <div class="content gallery">
                                <a href="#"><img src="/public/images/img5.jpg" width="120"/></a><a href="#"><img src="/public/images/img4.jpg" width="120"/></a><a href="#"><img src="/public/images/img3.jpg" width="120"/></a><a href="#"><img src="/public/images/img2.jpg" width="120"/></a><a href="#"><img src="/public/images/img1.jpg" width="120"/></a><a href="#"><img src="/public/images/img4.jpg" width="120"/></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="wrap-col">
                        <div class="box">
                            <div class="heading"><h4 class="title">About Us</h4></div>
                            <div class="content">
                                <a href="https://www.zerotheme.com" target="_blank"><img src="/public/images/zerotheme.png" style="border: 0px; margin: 10px 0;"/></a>
                                <p><a href="https://www.zerotheme.com" target="_blank">Free Html5 Templates</a> created by <a href="https://www.zerotheme.com">ZEROTHEME</a>. You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="wrap-col">
                        <div class="box">
                            <div class="heading"><h4 class="title">Contact Us</h4></div>
                            <div class="content">
                                <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas.</p>
                                <p>Website : <a href="https://www.zerotheme.com" target="_blank">www.zerotheme.com</a></p>
                                <p>+1 (123) 444-5677 <br/> +1 (123) 444-5678</p>
                                <p>Address: 123 TemplateAccess Rd1</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright © 2012 - Designed by <a href="https://www.zerotheme.com">ZEROTHEME</a></p>
        </div>
    </footer>

</div>
</body>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
