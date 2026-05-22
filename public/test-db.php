<?php

require_once __DIR__ . '/../app/config/database.php';

try {
    $pdo = Database::getConnection();
    echo 'Connexion PDO réussie à la base armonya_php.';
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
}