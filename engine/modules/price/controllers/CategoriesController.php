<?php

namespace app\modules\price\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;

/**
 * Default controller for the `price` module
 */
class CategoriesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['list'],
                'rules' => [
                    [
                        'actions' => ['list'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'timer' => [
                'class' => \app\components\ActionTimeFilter::className ()

            ]
        ];
    }
    
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $module = $this->module;
        $params = ['mode' => $module->mode, 'path' => $module->basePath];
        return $this->render('index', $params);
    }
    
    public function actionList()
    {
        $module = $this->module;
        $params = ['mode' => 'listAction', 'path' => $module->basePath];
        return $this->render('index', $params);
    }
}
