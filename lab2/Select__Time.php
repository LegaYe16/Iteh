<?php
header("Content-Type: text/xml");
header("Cache-Control: no-cahe, must-revalidate");

    require 'config.php';

    $name = $_GET["name"];

    $SQLselectIdProject1 = $link->prepare("SELECT projects.ID_Projects FROM projects WHERE projects.name = :name");
    $SQLselectIdProject1->bindParam(':name', $name);
    $SQLselectIdProject1->execute();
    $result_SQLselectIdProject1 = $SQLselectIdProject1->fetchColumn();

    $Select__QuantityResult = $link->prepare("SELECT SUM(SUBTIME(work.time_end, work.time_start)) FROM work WHERE work.Fid_Projects = :ID__PROJECT");
    $Select__QuantityResult->bindParam(':ID__PROJECT', $result_SQLselectIdProject1);
    $Select__QuantityResult->execute();
    $result_Select__QuantityResult = $Select__QuantityResult->fetchColumn();

    echo "<?xml version='1.0' encoding='utf-8'?>";
    echo "<times>";

    if($result_Select__QuantityResult > 9999){
        $new__result = ($result_Select__QuantityResult/10000)*60;
        print '<project><time>  ' .$new__result. ' min</time></project>';
    }
    if($result_Select__QuantityResult > 99  && $result_Select__QuantityResult < 9999){
        $new__result = ($result_Select__QuantityResult/100);
        print '<project><time>' .$new__result. ' min</time></project>';
    }
    if($result_Select__QuantityResult > 0 && $result_Select__QuantityResult < 99){
        $new__result = ($result_Select__QuantityResult);
        print '<project><time> ' .$new__result. ' sec</time></project>';
    }
    
    echo "</times>"
?>