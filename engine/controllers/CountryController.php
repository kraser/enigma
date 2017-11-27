<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;
use app\models\Currency;

class CountryController extends Controller
{
    public $title;
    public function __construct ( $id, $module, $config = array () )
    {
        parent::__construct ( $id, $module, $config );
        $this->viewPath = $this->module->getViewPath() . DIRECTORY_SEPARATOR . 'country';
        $this->title = "kshkshfks";
    }
    
    public function actionIndex()
    {
        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,//задает кол-во записей на странице
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
    
    public function actionMoney()
    {
        $query = Currency::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('currency', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
}
