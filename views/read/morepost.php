      <?php 
use yii\helpers\Html;
?>
      <div class="panel panel-default panel-body">
                    <a href="<?= $model->url ?>">
                
                <p class="col-md-12"></p>
                
                <h5 class="col-md-7 text-left"><b><?= substr($model->title, 0,50) ?>...</b></h5>
                <img class="col-md-5 text-right" width="100%" src="<?= Yii::$app->params['assetsUrl'] ?>uploads/read/<?= sha1($model->id_read) ?>.jpg">

                <span class="col-md-6 text-left" style="font-size:0.9em; font-weight: bold; margin-top:10px;"><i><span class="glyphicon glyphicon-time"></span> <?= date('j F Y H:i',strtotime($model->created_at)) ?></i></span>
                
             </a>   

        </div>