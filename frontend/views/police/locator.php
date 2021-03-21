<?php
use yii\data\ActiveDataProvider;
use sjaakp\locator\Locator;
use frontend\models\Report;
use frontend\models\County;
/**
 * @var $dataProvider ActiveDataProvider
 */

?>
<?php
$map = Locator::begin([
    'tile' => 'Stamen.Watercolor',  // basic tile layer
    'leafletOptions' => [
        'center' =>  [48.8, 2.3],   // Paris
        'zoom' => 5,
        'scrollWheelZoom' => false,
    ],
    'popup' => true,
    'cluster' => true,
    'urlTemplate' => '/tower/info/{id}',    // URL for popups
]);
$map->tileLayer('Stamen.TonerLabels');  // second tile layer with labels
$map->modelFeatures($dataProvider, 'location');
Locator::end();
?>
]) ?>