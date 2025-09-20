<?php
// db_connection.php
$servername = "localhost"; // ou l'adresse de votre serveur MySQL
$username = "root"; // votre nom d'utilisateur MySQL
$password = ""; // votre mot de passe MySQL
$dbname = "hotel"; // votre nom de base de données

// Créer une connexion
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
