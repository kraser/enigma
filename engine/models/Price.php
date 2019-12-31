<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Description of Price
 *
 * @author kraser
 */
class Price extends Model
{
    public $id;
    public $articul;
    public $name;
    public $price;
    
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        $rules = 
        [
            // name, email, subject and body are required
            [['articul', 'name', 'price'], 'required'],
            ['price', 'number'],
            ['articul', 'string', 'min' => 3, 'max' => 10 ],
        ];
        return $rules;
    }
    
    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        $labels =
        [
            'id' => 'Id позиции',
            'articul' => 'Артикул (код) позиции',
            'name' => 'Наименование позиции',
            'price' => 'Цена позиции'
        ];
    }
    
    public static function getDb ()
    {
        return \Yii::$app->pgsqlDb;
    }

    public static function tableName()
    {
        return 'enigma.price';
    }
}
