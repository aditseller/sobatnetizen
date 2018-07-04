<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $model app\models\Channel */

$this->title = $model->channel;

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="channel-view">
 <div class="col-lg-2 hide-on-mobile">
               <!-- Begin: //adsensecamp.com/ -->
<script src="//adsensecamp.com/show/?id=DM2R7Fi4okA%3D&cid=sO23aMPfjUo%3D&chan=ck9VvIa%2Foik%3D&type=4&title=3D81EE&text=000000&background=FFFFFF&border=000000&url=2BA94F" type="text/javascript">
</script>
<!-- End: //adsensecamp.com/ -->

                

    <img width="100%" src="public/img/left.png">
    <hr/>
            </div>
			
			<div class="col-lg-6">
    
  <?php 
            
$dataProvider = new ActiveDataProvider([
    'query' => app\models\Read::find()->where(['channel'=>$model->channel]),
    'sort'=> ['defaultOrder' => ['created_at'=>SORT_DESC]],
    'pagination' => [
        'pageSize' => 7,
    ],
]);
            echo ListView::widget([
     'dataProvider' => $dataProvider,
     'itemOptions' => ['class' => 'item'],
     'itemView' => 'posts_view',
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
	
	<div class="col-lg-4 hide-on-mobile">
                

                <!-- Begin: //adsensecamp.com/ -->
<script src="//adsensecamp.com/show/?id=DM2R7Fi4okA%3D&cid=sO23aMPfjUo%3D&chan=ck9VvIa%2Foik%3D&type=5&title=3D81EE&text=000000&background=FFFFFF&border=000000&url=2BA94F" type="text/javascript">
</script>
<!-- End: //adsensecamp.com/ -->
<!-- Begin: //adsensecamp.com/ -->
<script src="//adsensecamp.com/show/?id=DM2R7Fi4okA%3D&cid=sO23aMPfjUo%3D&chan=ck9VvIa%2Foik%3D&type=5&title=3D81EE&text=000000&background=FFFFFF&border=000000&url=2BA94F" type="text/javascript">
</script>
<!-- End: //adsensecamp.com/ -->
<!-- Begin: //adsensecamp.com/ -->
<script src="//adsensecamp.com/show/?id=DM2R7Fi4okA%3D&cid=sO23aMPfjUo%3D&chan=ck9VvIa%2Foik%3D&type=5&title=3D81EE&text=000000&background=FFFFFF&border=000000&url=2BA94F" type="text/javascript">
</script>
<!-- End: //adsensecamp.com/ -->
<!-- Begin: //adsensecamp.com/ -->
<script src="//adsensecamp.com/show/?id=DM2R7Fi4okA%3D&cid=sO23aMPfjUo%3D&chan=ck9VvIa%2Foik%3D&type=5&title=3D81EE&text=000000&background=FFFFFF&border=000000&url=2BA94F" type="text/javascript">
</script>
<!-- End: //adsensecamp.com/ -->
             

             







            </div>

  

</div>
