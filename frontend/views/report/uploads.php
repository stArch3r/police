<?php 
echo \kato\DropZone::widget([
    'options' => [
        'url'=> 'police/uploads',
        'maxFilesize' => '10',
    ],
    'clientEvents' => [
        'complete' => "function(file){console.log(file)}",
        'removedfile' => "function(file){alert(file.name + ' is removed')}"
    ],
]);
?>