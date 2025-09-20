<?php
$conn = new mysqli("localhost", "root", "", "hotel");

if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

$sort = isset($_GET["sort"]) && $_GET["sort"] === "oldest" ? "ASC" : "DESC";

$sql = "SELECT id, pseudo, message, date_post FROM commentaires ORDER BY date_post $sort";
$result = $conn->query($sql);

$comments = [];
while ($row = $result->fetch_assoc()) {
    $comments[] = $row;
}

echo json_encode($comments);

$conn->close();
?>
