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
	 <meta name="google-site-verification" content="XINbG_ON0K6cyuILTaTxKh-7NXwAv6pvizKAipVsU8M" />

   <link rel="apple-touch-icon" sizes="57x57" href="<?= Yii::$app->request->baseUrl ?>/public/ico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?= Yii::$app->request->baseUrl ?>/public/ico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?= Yii::$app->request->baseUrl ?>/public/ico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?= Yii::$app->request->baseUrl ?>/public/ico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?= Yii::$app->request->baseUrl ?>/public/ico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?= Yii::$app->request->baseUrl ?>/public/ico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?= Yii::$app->request->baseUrl ?>/public/ico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?= Yii::$app->request->baseUrl ?>/public/ico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?= Yii::$app->request->baseUrl ?>/public/ico/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?= Yii::$app->request->baseUrl ?>/public/ico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?= Yii::$app->request->baseUrl ?>/public/ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?= Yii::$app->request->baseUrl ?>/public/ico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= Yii::$app->request->baseUrl ?>/public/ico/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?= Yii::$app->request->baseUrl ?>/public/ico/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121816419-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121816419-1');
</script>

</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

?>
<?php

$items = app\models\Channel::find()->orderBy(['id_channel'=>SORT_ASC])->all();
$menuItems = [];
       foreach ($items as $key => $value) {
                   $menuItems[] = ['label' => strtoupper($value['channel']), 'url' => ['/'.$value['channel']]];
              }

 ?>
<?php

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
      <center><b><?= Yii::$app->name ?></b></center>
      <center>
       <?= Html::a('About Us',['#'],['class'=>'label label-default']) ?>
       <?= Html::a('Contact Us',['#'],['class'=>'label label-default']) ?> 
       <?= Html::a('Sitemap',['#'],['class'=>'label label-default']) ?>
           
       </center>

    
    </div>
</footer>

<?php 
if (substr($_SERVER['HTTP_HOST'], 0, 4) !== 'www.' || @$_SERVER["HTTPS"] !== "on") {
    header('Location: '.Yii::$app->params['siteUrl'].$_SERVER['REQUEST_URI']); 
    exit;
}
?>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
