<?php
include('../include/dbConnect.php');
if (!$con) {
    die(json_encode(["Message" => "Erreur de connexion à la base de données : " . mysqli_connect_error()]));
}

if (isset($_POST['graph'])) {
    // Récupération des montants des paiements mensuels pour l'année en cours
    $query1 = "SELECT MONTH(PaymentDate) AS Month, SUM(Amount) AS Sum 
               FROM room_payment 
               WHERE YEAR(PaymentDate) = YEAR(CURDATE()) 
               GROUP BY MONTH(PaymentDate) 
               ORDER BY MONTH(PaymentDate)";

    $query2 = "SELECT MONTH(PaymentDate) AS Month, SUM(Amount) AS Sum 
               FROM event_payment 
               WHERE YEAR(PaymentDate) = YEAR(CURDATE()) 
               GROUP BY MONTH(PaymentDate) 
               ORDER BY MONTH(PaymentDate)";

    $result1 = mysqli_query($con, $query1);
    $result2 = mysqli_query($con, $query2);

    $roomMonthlyAmount = array_fill(0, 12, 0);
    $eventMonthlyAmount = array_fill(0, 12, 0);

    while ($row = mysqli_fetch_assoc($result1)) {
        $roomMonthlyAmount[$row['Month'] - 1] = $row['Sum'];
    }
    while ($row = mysqli_fetch_assoc($result2)) {
        $eventMonthlyAmount[$row['Month'] - 1] = $row['Sum'];
    }

    echo json_encode([
        "Message" => "Success",
        "roomMonthlyAmount" => $roomMonthlyAmount,
        "eventMonthlyAmount" => $eventMonthlyAmount
    ]);
}

if (isset($_POST['card'])) {
    // Récupération du statut des réservations de chambres
    $query1 = "SELECT Status, COUNT(bookingId) AS count 
               FROM room_booking 
               WHERE YEAR(date) = YEAR(CURDATE()) 
               GROUP BY Status";

    $result1 = mysqli_query($con, $query1);

    $roomBookingStatus = [
        "Booked" => 0, "Paid" => 0, "Rejected" => 0,
        "Cancelled" => 0, "CheckedOut" => 0, "total" => 0
    ];

    while ($row = mysqli_fetch_assoc($result1)) {
        if (isset($roomBookingStatus[$row['Status']])) {
            $roomBookingStatus[$row['Status']] = $row['count'];
        }
        $roomBookingStatus['total'] += $row['count'];
    }

    // Récupération du statut des réservations d'événements
    $query2 = "SELECT Status, COUNT(bookingId) AS count 
               FROM event_booking 
               WHERE YEAR(date) = YEAR(CURDATE()) 
               GROUP BY Status";

    $result2 = mysqli_query($con, $query2);

    $eventBookingStatus = [
        "Booked" => 0, "Paid" => 0, "Rejected" => 0,
        "Cancelled" => 0, "CheckedOut" => 0, "total" => 0
    ];

    while ($row = mysqli_fetch_assoc($result2)) {
        if (isset($eventBookingStatus[$row['Status']])) {
            $eventBookingStatus[$row['Status']] = $row['count'];
        }
        $eventBookingStatus['total'] += $row['count'];
    }

    // Récupération des détails des chambres
    $roomDetails = [
        "NoRoomTypes" => 0,
        "NoRooms" => 0,
        "AvailRooms" => 0
    ];

    $query3 = "SELECT COUNT(RoomTypeId) AS count FROM room_type WHERE Status = 'active'";
    $query4 = "SELECT COUNT(RoomId) AS count FROM room_list WHERE Status = 'active'";
    $query5 = "SELECT COUNT(RoomId) AS count FROM room_list WHERE Status = 'active' AND Booking_status='Available'";

    $roomDetails["NoRoomTypes"] = mysqli_fetch_assoc(mysqli_query($con, $query3))['count'] ?? 0;
    $roomDetails["NoRooms"] = mysqli_fetch_assoc(mysqli_query($con, $query4))['count'] ?? 0;
    $roomDetails["AvailRooms"] = mysqli_fetch_assoc(mysqli_query($con, $query5))['count'] ?? 0;

    // Récupération des détails des événements
    $eventDetails = [
        "NoEventTypes" => 0,
        "NoHalls" => 0,
        "AvailHalls" => 0
    ];

    $query6 = "SELECT COUNT(EventTypeId) AS count FROM event_type WHERE Status = 'active'";
    $query7 = "SELECT COUNT(EventId) AS count FROM event_list WHERE Status = 'active'";
    $query8 = "SELECT COUNT(EventId) AS count FROM event_list WHERE Status = 'active' AND Booking_status='Available'";

    $eventDetails["NoEventTypes"] = mysqli_fetch_assoc(mysqli_query($con, $query6))['count'] ?? 0;
    $eventDetails["NoHalls"] = mysqli_fetch_assoc(mysqli_query($con, $query7))['count'] ?? 0;
    $eventDetails["AvailHalls"] = mysqli_fetch_assoc(mysqli_query($con, $query8))['count'] ?? 0;

    // Récupération des montants financiers
    $query9 = "SELECT IFNULL(SUM(Amount), 0) AS sum FROM room_payment";
    $query10 = "SELECT IFNULL(SUM(Amount), 0) AS sum FROM event_payment";

    $roomPayment = mysqli_fetch_assoc(mysqli_query($con, $query9))['sum'];
    $eventPayment = mysqli_fetch_assoc(mysqli_query($con, $query10))['sum'];

    $amountDetails = [
        "RoomBooking" => $roomPayment,
        "EventBooking" => $eventPayment,
        "Total" => $roomPayment + $eventPayment
    ];

    // Envoi des données en format JSON
    echo json_encode([
        "roomBookingStatus" => $roomBookingStatus,
        "eventBookingStatus" => $eventBookingStatus,
        "roomDetails" => $roomDetails,
        "eventDetails" => $eventDetails,
        "amountDetails" => $amountDetails
    ]);
}

?>
