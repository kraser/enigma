<?php
use yii\helpers\Html;
use yii\jui\DatePicker;
?>
<?= DatePicker::widget([
    'model' => '',
    'attribute' => 'from_date',
    'language' => 'ru',
    'dateFormat' => 'php:Y-m-d',
]) ?>
<?= Html::encode($output) ?>
<br>
<?= Html::encode($message) ?>