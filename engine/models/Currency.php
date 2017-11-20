<?php
/**
 * Модель для денежных единиц
 */
namespace app\models;

use yii\db\ActiveRecord;

class Currency extends ActiveRecord
{
    /**
     * Возвращает соединение к БД mysql
     */
    public static function getDb ()
    {
        return \Yii::$app->mysqlDb;
    }
}