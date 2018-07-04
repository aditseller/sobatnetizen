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

$items = app\models\Channel::find()->orderBy(['id_channel'=>SORT_DESC])->all();
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
