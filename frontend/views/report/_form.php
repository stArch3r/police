<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Countries;
use frontend\models\County;

/* @var $this yii\web\View */
/* @var $model frontend\models\Report */
/* @var $form yii\widgets\ActiveForm */
$country = ArrayHelper::map(Countries::find()->all(), 'countryId', 'countryName');
$county = ArrayHelper::map(County::find()->all(), 'countyId', 'countyName')
?>
 <section id="main-content">

 
<div class="report-form">
<form>

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
    <div class="col-md-4">
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    </div>
    </div>
    <div class="form-row">
    <div class="col-md-4">
    <?= $form->field($model, 'firstName')->textInput(['maxlength' => true]) ?>

    </div>
    <div class="col-md-4">
    <?= $form->field($model, 'secondName')->textInput(['maxlength' => true]) ?>
    </div>
  </div>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'createdAt')->textInput() ?>

    <?= $form->field($model, 'file')->textInput(['maxlength' => true]) ?>

    <div class="form-row">
    <div class="form-group col-md-4">

    <?= $form->field($model, 'county')->dropDownlist($county) ?>
    </div>
    <div class="form-group col-md-3">

    <?= $form->field($model, 'country')->dropDownlist($country) ?>
    </div>
  </div>

    <?= $form->field($model, 'tags')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</form>
</div>
</section>