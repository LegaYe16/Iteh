<?php
    require 'config.php';

    $name_chief = $_POST['name_chief'];

    $Select__Chief = $link->prepare("SELECT departament.ID_Departament FROM departament WHERE departament.chief = :name_chief");
    $Select__Chief->bindParam(':name_chief', $name_chief);
    $Select__Chief->execute();
    $result_Select__Chief = $Select__Chief->fetchColumn();

    $Select__QuantityResult = $link->prepare("SELECT COUNT(worker.ID_Worker) FROM worker WHERE worker.FID_Department = :result_Select__Chief");
    $Select__QuantityResult->bindParam(':result_Select__Chief', $result_Select__Chief);
    $Select__QuantityResult->execute();
    $result_Select__QuantityResult = $Select__QuantityResult->fetchColumn();
    if($result_Select__QuantityResult == 1){
        if(!$result_Select__QuantityResult){
            echo 'Such a chief does not exist ';
            exit();
        }
        print_r($name_chief.' has: '.$result_Select__QuantityResult. ' employee');
    }
    else{
        if(!$result_Select__QuantityResult){
            echo 'Such a chief does not exist ';
            exit();
        }
        print_r($name_chief.' has: '.$result_Select__QuantityResult. ' employees');
    }
?>