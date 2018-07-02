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

/* @var $this yii\web\View */
/* @var $model app\models\Read */

$this->title = $model->title;
?>
<div class="read-view col-lg-8">

    <h4 style="font-weight: bold"><?= Html::encode($this->title) ?></h4>
     <span class="text-left" style="font-size:0.9em; color:grey; font-weight: bold; margin-top:10px;"><i><span class="glyphicon glyphicon-time"></span> <?= date('j F Y H:i',strtotime($model->created_at)) ?></i></span> |
     <?= Html::a(strtoupper($model->channel),['channel/'.$model->channel],['class'=>'label label-warning']) ?> 
    <img src="/idearoom/public/uploads/read/<?= sha1($model->title) ?>.jpg" width="100%" style="margin-top:10px;">
    <p></p>
    <span style="font-size: 1.2em"><?= $model->content ?></span>
    <hr/>
<!--hashtag-->
<b>Hashtag :</b> 
<?php
$tag = explode(',',$model->tag);
foreach ($tag as $tagitem) {
    echo Html::a('#'.$tagitem,['tag/'.$tagitem],['class'=>'label label-default','style'=>'font-size:0.9em']).' ';
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

<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="10"></div>

</div>

<div class="col-lg-4">

    
    <h3 style="margin-top:0px">BERITA LAINNYA</h3>
        <?php

        $more = app\models\Read::find()->where(['NOT LIKE','id_read',$model->id_read])->orderBy(['created_at'=>SORT_DESC])->all();
        foreach ($more as $key => $moreRow) {

        ?>
      <div class="panel panel-default panel-body">
                    <a href="<?= $moreRow->url ?>">
                
                <p class="col-md-12"></p>
                
                <h5 class="col-md-7 text-left"><b><?= substr($moreRow->title, 0,50) ?>...</b></h5>
                <img class="col-md-5 text-right" width="100%" src="/idearoom/public/uploads/read/<?= sha1($moreRow->title) ?>.jpg">

                <span class="col-md-6 text-left" style="font-size:0.9em; font-weight: bold; margin-top:10px;"><i><span class="glyphicon glyphicon-time"></span> <?= date('j F Y H:i',strtotime($moreRow->created_at)) ?></i></span>
                
             </a>   

        </div>
        <?php } ?>
</div>
