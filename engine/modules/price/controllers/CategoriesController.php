<?php

namespace app\modules\price\controllers;

use yii\web\Controller;

/**
 * Default controller for the `price` module
 */
class CategoriesController extends Controller
{
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
}
