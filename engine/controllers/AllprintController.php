<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;

/**
 * AllprintController - базовый контроллер АСУП
 *
 * @author kraser
 */
class AllprintController extends Controller {
    
    /**
     * @inheritdoc
     */
//    public function behaviors()
//    {
//        $a=4;
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'only' => ['login', 'logout', 'signup'],
//                'rules' => [
//                    [
//                        'allow' => true,
//                        'actions' => ['login', 'signup'],
//                        'roles' => ['?'],
//                    ],
//                    [
//                        'allow' => true,
//                        'actions' => ['logout'],
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
//        ];
//        /*
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'only' => ['logout'],
//                'rules' => [
//                    [
//                        'actions' => ['logout'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'logout' => ['post'],
//                ],
//            ],
//        ];
//        */
//    }
    
    /**
     * Проверяем каждый раз что пользователь авторизован
     */
    public function beforeAction($action) {
//        if (!Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }
        //$GLOBALS['configuration'] = Yii::$app->params['config'];
        
        //Yii::$app->user->authorize();
        
        return parent::beforeAction($action);
    }
}
