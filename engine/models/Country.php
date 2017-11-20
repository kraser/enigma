<?php
/**
 * Модель для таблицы стран
 */
namespace app\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
    /**
     * Возвращает соединение к БД postrgres
     */
    public static function getDb ()
    {
        return \Yii::$app->pgsqlDb;
    }

    public static function tableName()
    {
        return 'enigma.country';
    }
}