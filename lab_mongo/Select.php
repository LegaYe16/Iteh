<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul id="first">
<?php
    require_once __DIR__ . "/vendor/autoload.php";
    
    
    $name_chief = $_POST['name_chief'];

    $countWorker = 0;
    $collection = (new MongoDB\Client)->lab2_mongo->lab2Collection;
    $Query = array('chief' => "$name_chief");
    $cursor = $collection->find($Query);
    foreach ($cursor as $doc) {
            
        $worker = $doc['Worker'];
        for($i = 0; $i<count($worker); $i++){
            $countWorker++;
        }


    }
     echo "<li>". $name_chief ." ". $countWorker . "</li>"; 
?> 
    </ul>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            localStorage.setItem('first', $('#first').html());
        });
    </script>
</body>
</html>
  