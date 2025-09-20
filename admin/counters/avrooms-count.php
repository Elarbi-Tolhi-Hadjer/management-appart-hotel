<?php 
include './db.php';

// Version corrigée basée sur votre structure DB
$sql = "SELECT * FROM room_list WHERE Status = 'active'";
$query = $connection->query($sql);

// Vérification des erreurs
if (!$query) {
    die("Erreur SQL: " . $connection->error);
}

echo $query->num_rows;
?>