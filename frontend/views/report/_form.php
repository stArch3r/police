<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Countries;
use frontend\models\County;
use frontend\models\Photos;
use frontend\models\Video;
use wbraganca\dynamicform\DynamicFormWidget;
use common\models\User;
use dosamigos\fileupload\FileUploadUI;

/* @var $this yii\web\View */
/* @var $model frontend\models\Report */
/* @var $form yii\widgets\ActiveForm */
$country = ArrayHelper::map(Countries::find()->all(), 'countryId', 'countryName');
$county = ArrayHelper::map(County::find()->all(), 'countyId', 'countyName');
$userId = User::find()->where(['id'=>Yii::$app->user->id])->one();
?>
 <section id="main-content">

<div class="report-form">

    <?php $form = ActiveForm::begin(); ?>

   
    <div class="row">
    <div class="col-md-4">
    <?= $form->field($model, 'userId')->hiddenInput(['value'=>yii::$app->user->id])->label(false) ?>
    </div>
    </div>
    
    <div class="row">
    <div class="col-md-4">
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    </div>
    </div>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'createdAt')->hiddenInput(['value'=>date('Y-m-d H:i:s')])->label(false) ?>


    <div class="form-row">
    <div class="form-group col-md-4">

    <?= $form->field($model, 'county')->dropDownlist($county) ?>
    </div>
    <div class="form-group col-md-3">

    <?= $form->field($model, 'country')->dropDownlist($country) ?>
    </div>
  </div>
  <div class="panel-body">

           		<?= $form->field($photos, 'imagePath')->fileInput() ?>
                   <?= $form->field($photos, 'imagePath')->fileInput() ?>

</div>

                   <div class="form-group">
                   <?= $form->field($video, 'video')->fileInput() ?>
</div>


    <?= $form->field($model, 'tags')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


</section>