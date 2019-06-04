<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\User;
use frontend\models\SignupForm;
use frontend\models\AnggaranDana;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
        
    }

    /**
     * Login action.
     *
     * @return string
     */
    // public function actionLogin()
    // {
    //     if (!Yii::$app->user->isGuest) {
    //         return $this->goHome();
    //     }

    //     $model = new LoginForm();
    //     $user = new User();
    //     if ($model->load(Yii::$app->request->post()) && $model->login()) {
    //         if (!$user->isUserAdmin(Yii::$app->user->identity->username)) {
    //             Yii::$app->user->logout();
    //         }
    //         return $this->goBack();
    //     } else {
    //         return $this->render('login', [
    //             'model' => $model,
    //         ]);
    //     }
    // }

    public function actionLogin()
    {
       if (!\Yii::$app->user->isGuest) {
          return $this->goHome();
       }

       $model = new LoginForm();
       if ($model->load(Yii::$app->request->post()) && ($model->loginPic() || $model->loginkeuangan() || $model->loginKaprodi()) ) {
          return $this->goBack();
       } else {
           return $this->render('login', [
              'model' => $model,
           ]);
       }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
