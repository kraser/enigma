<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Денюшки</h1>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
<ul>
<?php foreach ($countries as $country): ?>
    <li>
        <?= Html::encode("{$country->name} ({$country->code})") ?>:
        <?= $country->population ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>