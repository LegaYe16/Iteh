<?php
     require 'config.php';

    $name_worker = $_POST["name_worker"];
    if($name_worker == ''){
        echo "empty input";
        exit();
    }

    $name_project = $_POST["name_project"];
    if($name_project == ''){
        echo "empty input";
        exit();
    }

        $shief = 'SELECT * FROM departament INNER JOIN worker ON departament.ID_Departament = worker.FID_Department INNER JOIN work ON worker.ID_Worker = work.Fid_Worker INNER JOIN projects ON work.Fid_Projects = projects.ID_Projects';
        $meneger = 'SELECT * FROM projects INNER JOIN work ON projects.ID_Projects = work.Fid_Projects';


        $SQLselectIdProject = $link->prepare("SELECT projects.ID_Projects FROM projects WHERE projects.name = :project");
        $SQLselectIdProject->bindParam(':project', $name_project);
        $SQLselectIdProject->execute();
        $result_project = $SQLselectIdProject->fetchColumn();
        print_r($result_project);
        
        
        $SQLselecIdWorker = $link->prepare("SELECT worker.ID_Worker FROM worker WHERE worker.Name_worker = :worker");
        $SQLselecIdWorker->bindParam(':worker', $name_worker);
        $SQLselecIdWorker->execute();
        $result_work = $SQLselecIdWorker->fetchColumn();
        print_r($result_work);


        $SQLselecIdWorkerOnProject = $link->prepare("SELECT work.Fid_Worker FROM work WHERE work.Fid_Projects = :ID_project");
        $SQLselecIdWorkerOnProject->bindParam(':ID_project', $result_project);
        $SQLselecIdWorkerOnProject->execute();
        $result_SelectFidworker = $SQLselecIdWorkerOnProject->fetchColumn();
        print_r($result_SelectFidworker);
        


        echo '<ul>';
    foreach ($link->query($shief) as $row){
        if($row['chief'] == $name_worker){
            echo '<li>';
            echo 'shef: ', $row['chief'], ' number project(id): ', $row['Fid_Projects'], ' date: ', $row['date'], ' time start: ', $row['time_start'], ' time end: ', $row['time_end'];
            echo '</li>';
        }
        elseif($row['manager'] == $name_worker){
            echo '<li>';
            echo 'Manager: ', $row['manager'], ' number project(id): ', $row['Fid_Projects'], ' date: ', $row['date'], ' time start: ', $row['time_start'], ' time end: ', $row['time_end'];
            echo '</li>';
        }
        elseif($row['Name_worker'] == $name_worker  && $row['Fid_Worker'] == $result_SelectFidworker){
            header ('Location: worker.php');  
            exit();  
        }
   
    }
        echo '</ul>';
?>








