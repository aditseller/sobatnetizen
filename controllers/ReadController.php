<?php

namespace app\controllers;

use Yii;
use app\models\Read;
use app\models\ReadSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use  yii\behaviors\SluggableBehavior;
/**
 * ReadController implements the CRUD actions for Read model.
 */
class ReadController extends Controller
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
            'attribute' => 'url',
            'slugAttribute' => 'slug',
            
            
            
          ],
        ];
    }

      //Sluggable function
    public function actionSlug($slug) {
   $model = Read::find()->where(['url'=>$slug])->one();
        if (!is_null($model)) {
       return $this->render('view', [
           'model' => $model,
       ]);
   } else {
     return $this->render('404',['exception'=>Yii::$app->errorHandler->exception]);
   }
 }

    /**
     * Displays a single Read model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

   

    /**
     * Finds the Read model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Read the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Read::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
