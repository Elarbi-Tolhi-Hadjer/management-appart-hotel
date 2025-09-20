<?php 
include './db.php';

// Correction: Utiliser room_list au lieu de room
$sql = "SELECT * FROM room_list WHERE Status = 'active'"; 
$query = $connection->query($sql);

// Vérification des erreurs
if (!$query) {
    die("Erreur de requête: " . $connection->error);
}

echo $query->num_rows;
?>