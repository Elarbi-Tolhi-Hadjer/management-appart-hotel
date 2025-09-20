<?php
$conn = new mysqli("localhost", "root", "", "hotel");

if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = htmlspecialchars($_POST["pseudo"]);
    $message = htmlspecialchars($_POST["message"]);

    if (!empty($pseudo) && !empty($message)) {
        $stmt = $conn->prepare("INSERT INTO commentaires (pseudo, message) VALUES (?, ?)");
        $stmt->bind_param("ss", $pseudo, $message);
        $stmt->execute();
        $stmt->close();
    }
}

$conn->close();
?>
