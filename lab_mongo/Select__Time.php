<?php

require_once __DIR__ . "/vendor/autoload.php";
    
    
$name_project_for_time = $_POST['name_project_for_time'];
$countProject = 0;    
$collection = (new MongoDB\Client)->lab2_mongo->lab2Collection;
$Query = array('chief' => "$name_project_for_time");
$cursor = $collection->find($Query);
foreach ($cursor as $doc) {
        
    $projectName = $doc['Project_name'];
    $countProject++;
    echo $projectName. "<br><br>";


}

echo "У шефа ". $name_project_for_time ." ". $countProject ." проэктов";
?>