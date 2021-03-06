<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Report */

$this->title = 'Update Report: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->reportId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="report-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
