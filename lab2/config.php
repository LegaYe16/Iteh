<?php
    $dsn = 'mysql:host=127.0.0.1;dbname=legadb' ;
    try {
        $link = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>