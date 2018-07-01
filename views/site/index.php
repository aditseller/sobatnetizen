<?php

    \Yii::$app->view->registerMetaTag([
    'name' => 'description',
    'content' => 'Sobatnetizen.com adalah situs berita viral, unik, dan terupdate dikalangan netizen',
    ]);
    \Yii::$app->view->registerMetaTag([
    'name' => 'keywords',
    'content' => Yii::$app->name,
    ]);


use yii\helpers\Html;
use app\models\Read;
use yii\data\ActiveDataProvider;
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = Yii::$app->name;
?>
<div class="site-index">

   

    <div class="body-content">

        <div class="row">
            <div class="col-lg-2">
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
    'query' => Read::find(),
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
             

                <?php 
                  // $readtag = Read::find()->orderBy(['created_at' => SORT_DESC])->all();

                    
                  // foreach ($readtag as $key => $tag) {
                        
            

                         

              

                        //$listTag=array();
                      // $explodetag = explode(',',$tag->tag);
                       //array_push($listTag, $explodetag);
                       //$filteredList = array_unique($listTag);
                   // foreach ($explodetag as $tagitem) {
                        

                        
                   // echo Html::a('#'.$tagitem,['tag/'.$tagitem],['class'=>'btn btn-block btn-default','style'=>'font-size:0.9em']).' ';
                  //      }
                  // }

                   
             


                ?>







            </div>
        </div>

    </div>
</div>
