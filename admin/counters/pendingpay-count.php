<?php 
include './db.php';

// Version corrigée basée sur votre schéma de base de données
$sql = "SELECT * FROM room_booking WHERE Status = 'Booked'";
$query = $connection->query($sql);

// Vérification des erreurs
if (!$query) {
    die("Erreur SQL: " . $connection->error);
}

echo $query->num_rows;
?>