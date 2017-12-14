<?php

namespace app\modules\price;

/**
 * price module definition class
 */
class Module extends \yii\base\Module
{
    private $mode;
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\price\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        \Yii::configure($this, require __DIR__ . '/config.php');
    }
    
    public function setMode($mode) {
        $this->mode = $mode;
    }
    
    public function getMode()
    {
        return $this->mode;
    }
}
