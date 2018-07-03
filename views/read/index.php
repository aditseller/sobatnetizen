<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::$app->name.' - Tag';
$this->params['breadcrumbs'][] = $this->title;
?>
  <div class="col-lg-2">
               <!-- Begin: //adsensecamp.com/ -->
<script src="//adsensecamp.com/show/?id=DM2R7Fi4okA%3D&cid=sO23aMPfjUo%3D&chan=ck9VvIa%2Foik%3D&type=4&title=3D81EE&text=000000&background=FFFFFF&border=000000&url=2BA94F" type="text/javascript">
</script>
<!-- End: //adsensecamp.com/ -->

    <hr/>
            </div>
<div class="read-index col-lg-6">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    		    <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'showHeader' => false,
	'summary'=>'',
	'layout'=>'{items}',
    'columns' => [
        array(
            'format' => 'raw',
            'value'=>function ($data) {
                return Html::a(
                '
				 <div class="panel panel-default panel-body">
                    

                '.Html::a(strtoupper($data->channel),['/'.$data->channel],['class'=>'col-md-4 btn btn-sm btn-warning text-left','style'=>'font-size:0.9em; font-weight:bold;']).'

                <span class="col-md-4 text-right" style="font-size:0.9em; font-weight: bold; margin-top:10px;"><i><span class="glyphicon glyphicon-time"></span>'.date('j F Y H:i',strtotime($data->created_at)).'</i></span>
            
                <a href=read/'.$data->url.' style="color: #123456; text-decoration: none;"  onMouseOver="this.style.color="orangered"" onMouseOut="this.style.color="#123456"">
                <p class="col-md-12"></p>
                <img src=/idearoom/public/uploads/read/'.sha1($data->title).'.jpg width=100% >
                <h4><b>'.$data->title.'</b></h4>
				</a>  
        </div>
				
				',
                        ['read/'.$data->url]);
            },
        ),
    ],
]); ?>

   
</div>



            <div class="col-lg-4">
                

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
