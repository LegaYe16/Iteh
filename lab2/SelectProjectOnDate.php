<?php
    require 'config.php';

    $name_project_for_date = $_POST['name_project_for_date'];
    $date = $_POST['date'];

    $SQLselectIdProject2 = $link->prepare("SELECT projects.ID_Projects FROM projects WHERE projects.name = :name_project_for_date");
    $SQLselectIdProject2->bindParam(':name_project_for_date', $name_project_for_date);
    $SQLselectIdProject2->execute();
    $result_SQLselectIdProject2 = $SQLselectIdProject2->fetchColumn();

    
    $SQLselectDateOfProject = $link->prepare("SELECT work.date FROM work WHERE work.date = :date_for_check");
    $SQLselectDateOfProject->bindParam(':date_for_check', $date);
    $SQLselectDateOfProject->execute();
    $result_SQLselectDateOfProject = $SQLselectDateOfProject->fetchColumn();


    $Select__SelectProjectOnDateAndName = $link->prepare("SELECT work.Fid_Projects, work.date, work.time_start, work.time_end, work.description FROM work WHERE  work.Fid_Projects = :result_SQLselectIdProject2 AND work.date = :result_SQLselectDateOfProject");
    $Select__SelectProjectOnDateAndName->bindParam(':result_SQLselectIdProject2', $result_SQLselectIdProject2);
    $Select__SelectProjectOnDateAndName->bindParam(':result_SQLselectDateOfProject', $result_SQLselectDateOfProject);
    $Select__SelectProjectOnDateAndName->execute();


    $arr = [];
    while ($row = $Select__SelectProjectOnDateAndName->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
        $data = "ID project: " . $row[0] . " <br><br>Date: " . $row[1] . " <br><br>Time start: " . $row[2] . " <br><br>Time end: " . $row[3] . " <br><br>description: " . $row[4];
        $json__data = json_encode($data);
        if(json_encode($data) == true){
            array_push($arr,$json__data);
            print_r($arr[0]);
        } 
        // print $data;
    }

?>