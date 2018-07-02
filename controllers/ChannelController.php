<?php

namespace app\controllers;

use Yii;
use app\models\Channel;
use app\models\ChannelSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use  yii\behaviors\SluggableBehavior;
/**
 * ChannelController implements the CRUD actions for Channel model.
 */
class ChannelController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
			
			         [
            'class' => SluggableBehavior::className(),
            'attribute' => 'channel',
            'slugAttribute' => 'slug',
            
            
            
          ],
        ];
    }

	
	    //Sluggable function
    public function actionSlug($slug) {
   $model = Channel::find()->where(['channel'=>$slug])->one();
        if (!is_null($model)) {
       return $this->render('view', [
           'model' => $model,
       ]);
   } else {
     return $this->render('404',['exception'=>Yii::$app->errorHandler->exception]);
   }
 }
  
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

   
    /**
     * Finds the Channel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Channel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Channel::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
