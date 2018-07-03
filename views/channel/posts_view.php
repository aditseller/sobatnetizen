<?php 
use yii\helpers\Html;
?>

 <div class="panel panel-default panel-body">
                    

                <?= Html::a(strtoupper($model->channel),['/'.$model->channel],['class'=>'col-md-4 btn btn-sm btn-warning text-left','style'=>'font-size:0.9em; font-weight:bold;']) ?>

                <span class="col-md-4 text-right" style="font-size:0.9em; font-weight: bold; margin-top:10px;"><i><span class="glyphicon glyphicon-time"></span> <?= date('j F Y H:i',strtotime($model->created_at)) ?></i></span>
            
                <a href="read/<?= $model->url ?>" style="color: #123456; text-decoration: none;"  onMouseOver="this.style.color='orangered'"
   onMouseOut="this.style.color='#123456'">
                <p class="col-md-12"></p>
                <img src="<?= Yii::$app->params['assetsUrl'] ?>uploads/read/<?= sha1($model->title) ?>.jpg" width="100%">
                <h4><b><?= $model->title ?></b></h4>
				</a>  
              
               
              

        </div>