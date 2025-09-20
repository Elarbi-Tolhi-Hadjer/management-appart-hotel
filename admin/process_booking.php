<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        // Récupérer les données du formulaire
        $user_id = $_POST['user_id'];
        $room_id = $_POST['room_id'];
        $check_in = $_POST['check_in'];
        $check_out = $_POST['check_out'];
        $guests = $_POST['guests'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $amount = $_POST['amount'];
        
        // Insérer la réservation dans la table room_booking
        $stmt = $pdo->prepare("
            INSERT INTO room_booking (User_id, RoomId, CheckIn, CheckOut, NoOfGuest, Amount, Email, Phone_number, Status) 
            VALUES (:user_id, :room_id, :check_in, :check_out, :guests, :amount, :email, :phone_number, 'Reserved')
        ");
        
        $stmt->execute([
            ':user_id' => $user_id,
            ':room_id' => $room_id,
            ':check_in' => $check_in,
            ':check_out' => $check_out,
            ':guests' => $guests,
            ':amount' => $amount,
            ':email' => $email,
            ':phone_number' => $phone_number
        ]);

        // Retourner une réponse
        echo json_encode(['message' => 'Réservation effectuée avec succès.']);
    } catch (PDOException $e) {
        echo json_encode(['message' => 'Erreur lors de la réservation : ' . $e->getMessage()]);
    }
}
?>
