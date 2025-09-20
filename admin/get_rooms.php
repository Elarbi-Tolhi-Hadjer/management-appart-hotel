<?php
include 'db_connection.php';

if (isset($_GET['type'])) {
    $room_type_id = $_GET['type'];

    try {
        $stmt = $pdo->prepare("SELECT RoomId, RoomNumber FROM room_list WHERE RoomTypeId = :room_type_id AND Status = 'Available'");
        $stmt->execute([':room_type_id' => $room_type_id]);
        
        $rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($rooms);
    } catch (PDOException $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
}
?>
