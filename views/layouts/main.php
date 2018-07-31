<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="icon" type="image/png" href="/web/favicon.ico" />
    <?php $this->head() ?>

<!--    <link rel="stylesheet" href="/web/css/style.css">-->
</head>
<body>
<?php $this->beginBody() ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <a class="navbar-brand" href="#"><img src="web/image/book.svg" width="30"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if (Html::encode($this->title)=="Main"){echo "active";};?> ">
                <a class="nav-link" href="/">Главнaя</a>
            </li>
            <li class="nav-item <?php if (Html::encode($this->title)=="Dictionary"){echo "active";};?>">
                <a class="nav-link" href="/dictionary">Славарь</a>
            </li>
            <li class="nav-item <?php if (Html::encode($this->title)=="Register"){echo "active";};?>" >
                <a class="nav-link " href="/register">Регистрация</a>
            </li>
            <li class="nav-item <?php if (Html::encode($this->title)=="Login"){echo "active";};?>" >
                <a class="nav-link " href="/login">Вход</a>
            </li>
<!--            <li class="nav-item ">-->
<!--                <a class="nav-link disabled" href="#">Статистика</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">Личный кабинет</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">Выход</a>-->
<!--            </li>-->
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 search-but" type="submit">Search</button>
        </form>
    </div>
</nav>
        <?= Alert::widget() ?>
        <?= $content ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>