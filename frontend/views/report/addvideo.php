<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Video */
/* @var $form ActiveForm */
?>
<div class="addvideo">

<div class="container">
    <div class="row">
        <div class="progress" id="progress1">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:30%"></div>
            <!-- <span class="progress-type">Overall Progress</span>
            <span class="progress-completed">0%</span> -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <p>Listing Details</p>
        </div>
        <div class="col-md-4">
            <p>Location Details</p>
        </div>
        <div class="col-md-4">
            <p>Add Images</p>
        </div>
    </div>
<div class="panel panel-primary">
    <div class="panel-body">
        <h3 class="text-on-panel text-primary"><strong class="text-uppercase"> <?= Html::encode($this->title) ?> </strong></h3>
       
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'video')->fileInput() ?>
        <?= $form->field($model, 'reportId') ?>
        <?= $form->field($model, 'createdAt')->hiddenInput(['value'=>date('yy/m/d')])->label(false) ?>
        <div class="form-group">
            <?= Html::submitButton('<span class="fa fa-forward"></span>Next',['class' => 'btn btn-success pull-right']) ?>
        </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>


</div><!-- addphotos -->

