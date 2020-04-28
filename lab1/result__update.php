<?php  

require 'config.php';

        $change__project = $_POST["change__project"];
        if($change__project == ''){
            echo "empty input";
            exit();
        }
        $time__start__project = $_POST["time__start__project"];
        if($time__start__project == ''){
            echo "empty input";
            exit();
        }
        $time__end__project = $_POST["time__end__project"];
        if($time__end__project == ''){
            echo "empty input";
            exit();
        }
        $description__project = $_POST["description__project"];
        if($description__project == ''){
            echo "empty input";
            exit();
        }


        $SQLselectIdProjectForChange = $link->prepare("SELECT projects.ID_Projects FROM projects WHERE projects.name = :project");
        $SQLselectIdProjectForChange->bindParam(':project', $change__project);
        $SQLselectIdProjectForChange->execute();
        $result_projectForChange = $SQLselectIdProjectForChange->fetchColumn();
        print_r($result_projectForChange);


        $SQLupdate = $link->prepare("UPDATE work SET work.time_start=:start__project, work.time_end=:end__project, work.description=:description_ WHERE Fid_Projects = :result_"); 
        $SQLupdate->bindParam(':start__project', $time__start__project);
        $SQLupdate->bindParam(':end__project', $time__end__project);
        $SQLupdate->bindParam(':description_', $description__project);
        $SQLupdate->bindParam(':result_', $result_projectForChange);
        $SQLupdate->execute();
?>