<?php 
include './db.php';

// Requête corrigée selon votre schéma réel
$sql = "SELECT SUM(Amount) AS total_amount 
        FROM room_booking 
        WHERE Status = 'Paid'";  // Ou 'Booked' selon votre logique

$result = mysqli_query($connection, $sql);

if (!$result) {
    die("Erreur SQL: " . mysqli_error($connection));
}

$row = mysqli_fetch_assoc($result);
$totalAmount = $row['total_amount'] ?? 0;  // Valeur par défaut 0 si NULL

// Formatage du montant avec séparateur de milliers et devise
echo number_format($totalAmount, 2, ',', ' ') . ' DA';
?>