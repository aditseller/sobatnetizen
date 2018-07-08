<?php


//Count Hit
 $modelhit = new app\models\Hit();
 $modelhit->user_ip = $_SERVER["REMOTE_ADDR"];
 $modelhit->link = $_SERVER["REQUEST_URI"];
 $modelhit->combine = $modelhit->user_ip.$modelhit->link;
 $modelhit->urlpost = $model->url ;
 $modelhit->save();



    \Yii::$app->view->registerMetaTag([
    'name' => 'description',
    'content' => $model->title,
    ]);
    \Yii::$app->view->registerMetaTag([
    'name' => 'keywords',
    'content' => $model->tag,
    ]);


use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\data\ActiveDataProvider;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $model app\models\Read */

$this->title = $model->title;
?>
<div class="read-view col-lg-8">

    <h4 style="font-weight: bold"><?= Html::encode($this->title) ?></h4>
     <span class="text-left" style="font-size:0.9em; color:grey; font-weight: bold; margin-top:10px;"><i><span class="glyphicon glyphicon-time"></span> <?= date('j F Y H:i',strtotime($model->created_at)) ?></i></span> |
     <?= Html::a(strtoupper($model->channel),['/'.$model->channel],['class'=>'label label-warning']) ?> 
    <img src="<?= Yii::$app->params['assetsUrl'] ?>uploads/read/<?= sha1($model->id_read) ?>.jpg" width="100%" style="margin-top:10px;">
    <p></p>
    <span style="font-size: 1.2em"><?= $model->content ?></span>
    <hr/>
<!--hashtag-->
<b>Hashtag :</b> 
<?php
$tag = explode(',',$model->tag);
foreach ($tag as $tagitem) {
    echo Html::a('#'.$tagitem,['/tag?ReadSearch[tag]='.$tagitem],['class'=>'label label-default','style'=>'font-size:0.9em']).' ';
}
 ?>
 <hr/>
<!--comment fb -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=253457241831933&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="<?= Yii::$app->params['siteUrl'] ?>read/<?= $model->url ?>" data-width="100%" data-numposts="10"></div>

</div>

<div class="col-lg-4">

    
    <h3 style="margin-top:0px">BERITA LAINNYA</h3>



                <?php 
            
$dataProvider = new ActiveDataProvider([
    'query' => app\models\Read::find()->where(['NOT LIKE','id_read',$model->id_read]),
    'sort'=> ['defaultOrder' => ['created_at'=>SORT_DESC]],
    'pagination' => [
        'pageSize' => 7,
    ],
]);
            echo ListView::widget([
     'dataProvider' => $dataProvider,
     'itemOptions' => ['class' => 'item'],
     'itemView' => 'morepost',
     'summary'=>'',
     'pager' => [
     'class' => \kop\y2sp\ScrollPager::className(),
     'triggerOffset' => 5,
     'triggerTemplate' => '<center><a style="cursor: pointer" class="btn btn-block btn-default">Load More....</a></center>',
     'noneLeftText'=>'Kamu Sudah Up to Date, Guys!'
     ],
     
     
    ]);
            
            ?> 



        
</div>


<!---Share Button--->
<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_default_style" style="bottom:0px; left:50%; margin-left:-100px;">
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_google_plus"></a>
    <a class="a2a_button_whatsapp"></a>
    <a class="a2a_button_linkedin"></a>

</div>

<script async src="https://static.addtoany.com/menu/page.js"></script>
