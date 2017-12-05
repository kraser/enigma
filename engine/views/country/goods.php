<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Goods</h1>
<?= Html::encode("{$model->name} {$model['subject']}") ?>:
<?= Html::encode("{$model->getAttributeLabel('body')}") ?>: