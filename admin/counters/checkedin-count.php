<?php 
include './db.php';

// Version corrigée basée sur votre structure DB
$sql = "SELECT rb.* 
        FROM room_booking rb
        JOIN room_list rl ON rb.RoomId = rl.RoomId
        WHERE rl.Status = 'active' 
        AND rb.Status = 'Booked'";
$query = $connection->query($sql);

// Vérification des erreurs
if (!$query) {
    die("Erreur SQL: " . $connection->error);
}

echo $query->num_rows;
?>