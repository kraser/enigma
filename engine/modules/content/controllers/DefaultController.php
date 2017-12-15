<?php

namespace app\modules\content\controllers;

use yii\web\Controller;
use yii\filters\auth\HttpBasicAuth;

/**
 * Default controller for the `content` module
 */
class DefaultController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        $bb = 1;
        $beh = [
            'basicAuth' => [
                'class' => HttpBasicAuth::className(),
                'realm' => 'cucu'
            ]
        ];
        return $beh;
    }
    
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
