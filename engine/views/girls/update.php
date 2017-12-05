<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Girls */

$this->title = 'Update Girl: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Girls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->sur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
