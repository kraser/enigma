<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property string $sur
 * @property string $name
 * @property string $address
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('mysqlDb');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sur', 'name', 'address'], 'required'],
            [['sur'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 52],
            [['address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sur' => 'Sur',
            'name' => 'Name',
            'address' => 'Address',
        ];
    }
}
