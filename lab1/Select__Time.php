<?php
    require 'config.php';

    $name_project_for_time = $_POST['name_project_for_time'];

    $SQLselectIdProject1 = $link->prepare("SELECT projects.ID_Projects FROM projects WHERE projects.name = :name_project_for_time");
    $SQLselectIdProject1->bindParam(':name_project_for_time', $name_project_for_time);
    $SQLselectIdProject1->execute();
    $result_SQLselectIdProject1 = $SQLselectIdProject1->fetchColumn();

    $Select__QuantityResult = $link->prepare("SELECT SUM(SUBTIME(work.time_end, work.time_start)) FROM work WHERE work.Fid_Projects = :ID__PROJECT");
    $Select__QuantityResult->bindParam(':ID__PROJECT', $result_SQLselectIdProject1);
    $Select__QuantityResult->execute();
    $result_Select__QuantityResult = $Select__QuantityResult->fetchColumn();
    if($result_Select__QuantityResult > 9999){
        $new__result = ($result_Select__QuantityResult/10000)*60;
        print_r('  ' .$new__result. ' min');
    }
    if($result_Select__QuantityResult > 99  && $result_Select__QuantityResult < 9999){
        $new__result = ($result_Select__QuantityResult/100);
        print_r('  ' .$new__result. ' min');
    }
    if($result_Select__QuantityResult > 0 && $result_Select__QuantityResult < 99){
        $new__result = ($result_Select__QuantityResult);
        print_r('  00:' .$new__result. ' min');
    }
?>