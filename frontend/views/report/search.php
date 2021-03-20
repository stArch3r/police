<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ReportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reports';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
   <h1> found Reports</h1>


   <?php echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => 'item'
])
?>





    <!-- ?= GridView::widget([
        'dataProvider' => $dataProvider,
      
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'reportId',
            'userId',
            'title',
            'description:ntext',
            'createdAt',
            //'county',
            //'country',
            //'tags',


        ],
    ]); ? -->


</div>
