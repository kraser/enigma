<?php

namespace app\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
    public static function getDb ()
    {
        return \Yii::$app->pgsqlDb;
    }

    public static function tableName()
    {
        return 'enigma.country';
    }
}