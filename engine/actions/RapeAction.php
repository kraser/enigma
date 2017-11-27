<?php
namespace app\actions;

use Yii;
use yii\base\Action;
use yii\base\Exception;
use yii\base\UserException;
/**
 * Description of RapeAction
 *
 * @author kraser
 */
class RapeAction extends  Action
{
    private $view;
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        $this->view = 'rape';
//        if ($this->defaultMessage === null) {
//            $this->defaultMessage = Yii::t('yii', 'An internal server error occurred.');
//        }
//
//        if ($this->defaultName === null) {
//            $this->defaultName = Yii::t('yii', 'Error');
//        }
    }
    
    public function run()
    {
        return $this->controller->render($this->view ?: $this->id, $this->getViewRenderParams());
    }
    
    /**
     * Builds array of parameters that will be passed to the view.
     * @return array
     * @since 2.0.11
     */
    protected function getViewRenderParams()
    {
        return [
            'name' => "Nirvana",
            'message' => "Rape me"
        ];
    }
}
