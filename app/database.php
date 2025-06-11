<?php

function db_connect() {
    try { 
        $dbh = new PDO(
            'mysql:host=' . DB_HOST . 
            ';port=' . DB_PORT . 
            ';dbname=' . DB_DATABASE, 
            DB_USER, 
            DB_PASS
        );
        return $dbh;
    } catch (PDOException $e) {
        // Optionally log connection error
        return null;
    }
}

// TEMPORARY TEST — delete before final submission
try {
    $db = db_connect();
    if ($db) {
        echo "Connected to database.";
    } else {
        echo "Connection failed.";
    }
} catch (Exception $e) {
    echo "Connection error: " . $e->getMessage();
}
