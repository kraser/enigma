<?php
use yii\helpers\Html;
use app\widgets\HelloWidget;
?>
<i><b>RAPE RAPE</b>
<?= Html::encode($name) ?>
<br>
<?= Html::encode($message) ?></i><br>
<?= HelloWidget::widget(['message' => 'Rape me in the morning']) ?>
<br>
