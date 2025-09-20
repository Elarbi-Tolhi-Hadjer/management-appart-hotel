<?php
$conn = new mysqli("localhost", "root", "", "hotel");

if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

if (isset($_GET["id"])) {
    $id = intval($_GET["id"]);
    $stmt = $conn->prepare("DELETE FROM commentaires WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

$conn->close();
?>
