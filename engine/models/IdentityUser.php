<?php
namespace app\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * Description of IdentityUser
 *
 * @author kraser
 */
class IdentityUser extends ActiveRecord implements IdentityInterface
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
        return 'enigma.user';
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
}