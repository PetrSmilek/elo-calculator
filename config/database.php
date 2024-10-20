<?php

function getDbConnection() {
    try {
        $db = new PDO('mysql:host=localhost;dbname=elo_db', 'root', 'Alechin9');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        exit;
    }
}

?>