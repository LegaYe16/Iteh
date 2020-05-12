<?php
      require_once __DIR__ . "/vendor/autoload.php";  
          
      $name_project_for_date = $_POST['name_project_for_date'];
      $date = $_POST['date'];

      $collection = (new MongoDB\Client)->lab2_mongo->lab2Collection;
      $newDate = new MongoDB\BSON\UTCDateTime(strtotime($date) * 1000);
      $Query = array('time_end' => array('$gte' => $newDate),'Project_name' => $name_project_for_date);
      $Query1 = array('Project_name' => $name_project_for_date);
      $cursor = $collection->find($Query);
      foreach ($cursor as $doc) {

          echo "Name project:(". $doc['Name_tusk'] .") description:(". $doc['description'] .")<br><br>";
      }
?>