<?php 
include './db.php';

// Version corrigée basée sur votre schéma
$sql = "SELECT SUM(Amount) AS total_amount 
        FROM room_booking 
        WHERE Status = 'Booked'";  // Ou 'Paid' selon votre logique

$result = mysqli_query($connection, $sql);

if (!$result) {
    die("Erreur SQL: " . mysqli_error($connection));
}

$row = mysqli_fetch_assoc($result);
$totalAmount = $row['total_amount'] ?? 0;  // Valeur par défaut 0 si NULL

echo number_format($totalAmount, 2). ' DA';  // Formatage avec 2 décimales
?>