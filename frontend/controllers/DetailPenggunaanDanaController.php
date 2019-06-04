<?php

namespace app\controllers;
namespace frontend\controllers;

use Yii;
use app\models\DetailPenggunaanDana;
use app\models\DetailPenggunaanDanaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * DetailPenggunaanDanaController implements the CRUD actions for DetailPenggunaanDana model.
 */
class DetailPenggunaanDanaController extends Controller
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
        ];
    }

    /**
     * Lists all DetailPenggunaanDana models.
     * @return mixed
     */
    public function actionIndex()
    {
       

       $model = DetailPenggunaanDana::find()->all();
        // echo '<pre>';
        // var_dump($model);
        // echo '</pre>';
        // die();

        return $this->render('index', [
            // 'searchModel' => $searchModel,
            // 'dataProvider' => $dataProvider,
            'model' => $model,
        ]);

    }

    /**
     * Displays a single DetailPenggunaanDana model.
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
     * Creates a new DetailPenggunaanDana model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DetailPenggunaanDana();
    
       if ($model->load(Yii::$app->request->post())) {
            $file = UploadedFile::getInstance($model, 'file');
            if (!is_null($file)) {
                
                $tmp = explode('.', $file->name);
                $ext = end($tmp);
                // generate a unique file name to prevent duplicate filenames
                $model->file_download = Yii::$app->security->generateRandomString().".{$ext}";
                // the path to save file, you can set an uploadPath
                // in Yii::$app->params (as used in example below)
                Yii::$app->params['uploadPath'] = Url::to('@webfront/frontend/web/file_download/');
                $path = Yii::$app->params['uploadPath'] . $model->file_download;
                $file->saveAs($path);
                // return $this->redirect(['view', 'id' => $model->id_berita]);
            }
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->Id_Laporan_Dana]);
            }  else {
                var_dump ($model->getErrors()); die();
            }
            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing DetailPenggunaanDana model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Id_Laporan_Dana]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DetailPenggunaanDana model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DetailPenggunaanDana model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DetailPenggunaanDana the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DetailPenggunaanDana::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
