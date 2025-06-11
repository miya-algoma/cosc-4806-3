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
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    } catch (PDOException $e) {
        echo "PDO Connection failed: " . $e->getMessage();
        return null;
    }
}

// TEMPORARY TEST – delete before submission
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
