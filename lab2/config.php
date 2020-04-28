<?php
    $dsn = 'mysql:host=localhost;dbname=legadb' ;
    try {
        $link = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
        echo 'Подключение не удалось: ' . $e->getMessage();
    }
?>