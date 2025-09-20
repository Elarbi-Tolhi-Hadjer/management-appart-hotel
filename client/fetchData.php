<style>
.rating i {
   color: #FFD700;
   margin-right: 2px;
}
.card-text {
   margin-bottom: 5px;
   font-size: 14px;
}
.card-body {
   padding: 1rem;
}
    .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 1rem;
}
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.15);
}
.btn-outline-primary:hover {
    background-color: #0d6efd;
    color: white;
}


.room-img {
    overflow: hidden;
    border-radius: 10px 10px 0 0;
}

.room-hover {
    transition: transform 0.3s ease-in-out;
}

.room-hover:hover {
    transform: scale(1.05);
}

.badge-price {
    position: absolute;
    top: 15px;
    left: 15px;
    background: #007bff;
    color: white;
    padding: 8px 15px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: bold;
}

.btn-booking {
    font-size: 16px;
    font-weight: bold;
    transition: background 0.3s ease-in-out, transform 0.2s;
}

.btn-booking:hover {
    background: #0056b3;
    transform: translateY(-2px);
}
</style>

<?php
include("../include/functions.php");
if (isset($_GET['action']) && $_GET['action'] === 'cancel' && isset($_GET['id'])) {
    $bookingId = $_GET['id'];
    $stmt = mysqli_prepare($con, "UPDATE event_booking SET Status='Cancelled', Modified_date=NOW() WHERE BookingId=?");
    mysqli_stmt_bind_param($stmt, "s", $bookingId);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo 'success';
    } else {
        echo 'fail';
    }
    exit; // Arrête ici pour que le reste du code ne s'exécute pas
}


// ------------------------------------ Types de chambres disponibles ------------------------------------
if(isset($_POST['roomType'])){
    $roomTypeCard ='';
    $typeFilter = $_POST['filter'];
    switch($typeFilter){
        case 1:  $selectAllType = "SELECT rt.*, COUNT(rl.RoomId) AS count_rooms
                                    FROM room_type rt INNER JOIN room_list rl ON rt.RoomTypeId = rl.RoomTypeId 
                                    WHERE rl.Status='active' AND rt.Status='active'
                                    GROUP BY rl.RoomTypeId"; break;

        case 2:  $selectAllType = "SELECT rt.*, COUNT(rl.RoomId) AS count_rooms
                                    FROM room_type rt INNER JOIN room_list rl ON rt.RoomTypeId = rl.RoomTypeId 
                                    WHERE rl.Status='active' AND rt.Status='active' AND rt.Cost <= 500
                                    GROUP BY rl.RoomTypeId"; break;

        case 3:  $selectAllType = "SELECT rt.*, COUNT(rl.RoomId) AS count_rooms
                                    FROM room_type rt INNER JOIN room_list rl ON rt.RoomTypeId = rl.RoomTypeId 
                                    WHERE rl.Status='active' AND rt.Status='active' AND rt.Cost BETWEEN 500 AND 1000
                                    GROUP BY rl.RoomTypeId"; break;

        case 4:  $selectAllType = "SELECT rt.*, COUNT(rl.RoomId) AS count_rooms
                                    FROM room_type rt INNER JOIN room_list rl ON rt.RoomTypeId = rl.RoomTypeId 
                                    WHERE rl.Status='active' AND rt.Status='active' AND rt.Cost >= 1000
                                    GROUP BY rl.RoomTypeId"; break;

        default: $selectAllType = "SELECT rt.*, COUNT(rl.RoomId) AS count_rooms
                                    FROM room_type rt INNER JOIN room_list rl ON rt.RoomTypeId = rl.RoomTypeId 
                                    WHERE rl.Status='active' AND rt.Status='active'
                                    GROUP BY rl.RoomTypeId"; break;
    }

    $allType = mysqli_query($con, $selectAllType);
    $noOfType = mysqli_num_rows($allType);

    if($noOfType >= 1){
        while($row = mysqli_fetch_assoc($allType)){
            $query_avail = "SELECT COUNT(RoomId) AS avail_rooms FROM room_list WHERE RoomTypeId = '".$row["RoomTypeId"]."' AND Status = 'active' AND Booking_status = 'Available'";
            $exec_avail = mysqli_query($con, $query_avail);
            $countOfRooms = mysqli_fetch_assoc($exec_avail);

            $roomTypeCard .= '
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden position-relative">
                    <form action="roomBooking.php" method="POST">
                        <div class="room-img position-relative">
                            <img class="card-img-top img-fluid room-hover" src="../assets/picture/RoomType/'.$row['RoomImage'].'" alt="Room Image">
                            <span class="badge-price">DA '.$row['Cost'].'/Nuit</span>
                        </div>
                        <div class="card-body text-center p-4">
                            <h5 class="card-title fw-bold mb-2">'.$row['RoomType'].'</h5>
                            <div class="mb-2 text-warning">';
                            $rating = 5; // Remplacez par la valeur réelle de la BDD
                            for ($i = 0; $i < 5; $i++) {
                                $roomTypeCard .= $i < $rating ? '<i class="fa fa-star"></i> ' : '<i class="fa fa-star text-muted"></i> ';
                            }
                            $roomTypeCard .= '</div>
                            <p class="text-muted fs-6"><span class="fw-bold fs-5">DA '.$row['Cost'].'</span> / par nuit</p>
                            <div class="d-flex justify-content-center gap-3 text-muted mb-3">
                                <small><i class="fa fa-bed text-primary me-1"></i> Lit</small>
                                <small><i class="fa fa-bath text-primary me-1"></i> Salle de bain</small>
                                <small><i class="fa fa-wifi text-primary me-1"></i> Wifi</small>
                                <small><i class="fa fa-egg-fried text-primary me-1"></i> Cuisine</small>
                            </div>
                            <ul class="list-unstyled mb-3">';
                            if ($countOfRooms['avail_rooms'] == 0) {
                                $roomTypeCard .= '<li class="text-danger"><i class="fa fa-times-circle me-1"></i> Complet</li>';
                            } else {
                                $roomTypeCard .= '<li class="text-success"><i class="fa fa-check-circle me-1"></i> Disponible: '.$countOfRooms['avail_rooms'].'/'.$row['count_rooms'].'</li>';
                            }
                            $roomTypeCard .= '
                                <li><i class="fa fa-check-circle text-success me-1"></i> Équipements: '.$row['Description'].'</li>
                            </ul>
                            <input type="hidden" name="roomTypeId" value="'.$row['RoomTypeId'].'" />
                            <button class="btn btn-primary btn-booking" name="bookRoom" type="submit" '.($countOfRooms['avail_rooms'] == 0 ? 'disabled' : '').'>
                                '.($countOfRooms['avail_rooms'] == 0 ? '<i class="fa fa-times-circle me-1"></i> Complet' : '<i class="fa fa-bed me-1"></i> Réserver').'
                            </button>
                        </div>
                    </form>
                </div>
            </div>';
        }
    } else {
        $roomTypeCard .= '<br><br><p class="col-12 text-center text-danger">Aucun type de chambre disponible...</p>';
    }

    echo $roomTypeCard;
}

if (isset($_POST['roomBooking'])) {
    $roomBooking = '<br><br>';

    // Messages de retour
    if (isset($_POST['msg'])) {
        $roomBooking .= '<div class="alert alert-success" role="alert">' . $_POST["msg"] . '</div>';
    }
    if (isset($_POST["error"])) {
        $roomBooking .= '<div class="alert alert-danger" role="alert">' . $_POST["error"] . '</div>';
    }

    $roomBooking .= '<div class="row row-cols-1 row-cols-md-3 g-4">'; // affichage en cartes

    $filter = $_POST['filter'];
    $userId = $_SESSION['loggedUserId'];

    $baseQuery = "
        SELECT rm.*, rt.RoomType, rl.RoomNumber 
        FROM room_booking rm 
        INNER JOIN room_list rl ON rl.RoomId = rm.RoomId
        INNER JOIN room_type rt ON rl.RoomTypeId = rt.RoomTypeId 
        WHERE rm.User_id = '$userId'
    ";

    // Application du filtre
    switch ($filter) {
        case 2: $baseQuery .= " AND rm.Status = 'Booked'"; break;
        case 3: $baseQuery .= " AND (rm.Status = 'Paid' OR rm.Status = 'CheckedOut')"; break;
        case 4: $baseQuery .= " AND rm.Status = 'Cancelled'"; break;
        case 5: $baseQuery .= " AND rm.Status = 'Rejected'"; break;
        case 6: $baseQuery .= " AND rm.Checkout < CURDATE()"; break;
    }

    $baseQuery .= " ORDER BY rm.Date DESC";
    $result = mysqli_query($con, $baseQuery);

    if (mysqli_num_rows($result) >= 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Classe couleur selon statut
            $statusClass = match ($row['Status']) {
                'Booked'    => 'text-primary',
                'Paid'      => 'text-success',
                'CheckedOut'=> 'text-success',
                'Cancelled' => 'text-warning',
                'Rejected'  => 'text-danger',
                default     => 'text-muted',
            };

            $roomBooking .= '
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body p-3">
                            <h6 class="card-title ' . $statusClass . '">' . $row['Status'] . '</h6>
                            <p class="mb-1"><strong>' . $row['RoomType'] . '</strong> | N° ' . $row['RoomNumber'] . '</p>
                            <p class="mb-1 small">Arrivée : ' . $row['CheckIn'] . '</p>
                            <p class="mb-1 small">Départ : ' . $row['CheckOut'] . '</p>
                            <p class="mb-1 small">Coût : <i class="fa fa-money"></i> ' . $row['Amount'] . ' DZD</p>
                            <p class="mb-1 small">Modifié : ' . $row['Modified_date'] . '</p>';

            // Actions selon le statut
            if ($row['Status'] === "Booked") {
                $roomBooking .= '
                    <div class="d-flex justify-content-between mt-2">
                        <button class="btn btn-sm btn-primary" onclick="openPaymentModal(' . $row["BookingId"] . ')">Payer</button>
                        <button class="btn btn-sm btn-danger" onclick="return confirm(\'Êtes-vous sûr ?\') && setCancel(' . $row["BookingId"] . ')">Annuler</button>
                    </div>';
            } elseif (in_array($row['Status'], ["Paid", "CheckedOut"])) {
                $roomBooking .= '
                    <form action="../include/pdf.php" method="POST" class="mt-2">
                        <input type="hidden" name="bookingId" value="' . $row['BookingId'] . '" />
                        <button type="submit" class="btn btn-sm btn-success">Facture</button>
                    </form>';
            }

            $roomBooking .= '
                        </div>
                    </div>
                </div>';
        }
    } else {
        $roomBooking .= '</div><br><p class="text-center text-danger">Aucune réservation trouvée.</p>';
    }

    echo $roomBooking;
}




if (isset($_POST['eventType'])) {
    $cartesType = '';
    $filtreType = isset($_POST['filter']) ? $_POST['filter'] : 0;

    // Requête de base avec LEFT JOIN pour inclure les types même sans événements
    $requeteBase = "SELECT et.*, 
                   (SELECT COUNT(*) FROM event_list el 
                    WHERE el.EventTypeId = et.EventTypeId AND el.Status='active') as nombre_evenements
                   FROM event_type et
                   WHERE et.Status='active'";

    // PLAGES DE FILTRAGE MODIFIÉES POUR VOS COÛTS RÉELS
    switch($filtreType) {
        case 1: // Tous
            $selectionTousTypes = $requeteBase;
            break;
        case 2: // Moins de 100,000 DA
            $selectionTousTypes = $requeteBase . " AND et.Cost < 100000";
            break;
        case 3: // 100,000 - 500,000 DA
            $selectionTousTypes = $requeteBase . " AND (et.Cost >= 100000 AND et.Cost <= 500000)";
            break;
        case 4: // 500,000 - 1,000,000 DA
            $selectionTousTypes = $requeteBase . " AND (et.Cost >= 500000 AND et.Cost <= 1000000)";
            break;
        case 5: // Plus de 1,000,000 DA
            $selectionTousTypes = $requeteBase . " AND et.Cost > 1000000";
            break;
        default:
            $selectionTousTypes = $requeteBase;
            break;
    }

    $tousTypes = mysqli_query($con, $selectionTousTypes);
    $nombreTypes = mysqli_num_rows($tousTypes);

    if ($nombreTypes >= 1) {
        while ($ligne = mysqli_fetch_assoc($tousTypes)) {
            // Obtenir la note moyenne
            $requete_note = "SELECT AVG(rating) AS note_moyenne, COUNT(*) AS total_avis 
                            FROM event_reviews 
                            WHERE eventTypeId = '" . $ligne['EventTypeId'] . "'";
            $exec_note = mysqli_query($con, $requete_note);
            $donnees_note = mysqli_fetch_assoc($exec_note);

            $note_moyenne = isset($donnees_note['note_moyenne']) && $donnees_note['note_moyenne'] !== null
                ? round($donnees_note['note_moyenne'], 1)
                : 0;
            $total_avis = $donnees_note['total_avis'];

            // Générer les étoiles en JAUNE (#FFD700)
            $etoiles = '';
            if ($note_moyenne == 0) {
                $etoiles = str_repeat('<i class="far fa-star" style="color: #FFD700;"></i>', 5);
            } else {
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= $note_moyenne) {
                        $etoiles .= '<i class="fas fa-star" style="color: #FFD700;"></i>';
                    } elseif ($i - $note_moyenne < 1) {
                        $etoiles .= '<i class="fas fa-star-half-alt" style="color: #FFD700;"></i>';
                    } else {
                        $etoiles .= '<i class="far fa-star" style="color: #FFD700;"></i>';
                    }
                }
            }

            // Vérifier la disponibilité
            $requete_dispo = "SELECT COUNT(EventId) as evenements_disponibles 
                             FROM event_list 
                             WHERE EventTypeId = '" . $ligne["EventTypeId"] . "' 
                             AND Status = 'active' AND Booking_status = 'Available'";
            $exec_dispo = mysqli_query($con, $requete_dispo);
            $nombreDispo = mysqli_fetch_assoc($exec_dispo);

            $classeDispo = ($nombreDispo['evenements_disponibles'] == 0) ? 'text-danger' : 'text-success';
            $btnDesactive = ($nombreDispo['evenements_disponibles'] == 0) ? 'disabled' : '';
            $texteBtn = ($nombreDispo['evenements_disponibles'] == 0) ? 'Complet' : 'Réserver';
            
            $cartesType .= '
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="../assets/picture/EventType/' . $ligne['EventImage'] . '" class="card-img-top img-fluid rounded-top" style="height: 230px; object-fit: cover;" alt="Image événement">
                    <div class="card-body d-flex flex-column">
                        <div class="text-center mb-2">
                            <div class="d-flex justify-content-between mb-3">
                                <div class="ps-2">' . $etoiles . '</div>
                            </div>
                            <span class="small text-muted">(' . $total_avis . ' avis)</span>
                        </div>
                        
                        <h5 class="card-title text-center fw-bold">' . $ligne['EventType'] . '</h5>
                        <p class="text-muted small mb-1 text-center">Équipements : ' . $ligne['Description'] . '</p>
                        <p class="text-center fw-bold text-primary fs-5">' . number_format($ligne['Cost'], 0, ',', ' ') . ' DA</p>
                        <p class="text-center ' . $classeDispo . '">Disponibles : ' . $nombreDispo['evenements_disponibles'] . ' / ' . $ligne['nombre_evenements'] . '</p>
                        <form action="eventBooking.php" method="POST" class="mt-auto text-center">
                            <input type="hidden" name="eventTypeId" value="' . $ligne['EventTypeId'] . '">
                            <button class="btn btn-outline-primary w-75" type="submit" name="bookEvent" ' . $btnDesactive . '>
                                ' . $texteBtn . '
                            </button>
                        </form>
                    </div>
                </div>
            </div>';
        }
    } else {
        $cartesType .= '<div class="col-12 text-center mt-5"><p class="text-danger fs-4">Aucun type d\'événement disponible actuellement.</p></div>';
    }

    echo $cartesType;
}
 
// ------------------------------------ Types d'abonnements disponibles -----------------------------------
if (isset($_POST['gymType'])) {
    $TypeCard = '';
    $typeFilter = $_POST['filter'];

    // Requête pour filtrer les abonnements disponibles
    switch ($typeFilter) {
        case 1: // Tous les abonnements actifs
            $selectAllType = "SELECT * FROM gym_subscription WHERE Status = 'Active'";
            break;
        case 2: 
            $selectAllType = "SELECT * FROM gym_subscription WHERE Status = 'Active' AND SubscriptionType = 'VIP'";
            break;
        case 3: 
            $selectAllType = "SELECT * FROM gym_subscription WHERE Status = 'Active' AND SubscriptionType = 'Premium'";
            break;
        case 4: 
            $selectAllType = "SELECT * FROM gym_subscription WHERE Status = 'Active' AND SubscriptionType = 'Basic'";
            break;
        default: // Par défaut, tous les abonnements actifs
            $selectAllType = "SELECT * FROM gym_subscription WHERE Status = 'Active'";
            break;
    }
    
$allType = mysqli_query($con, $selectAllType);
$noOfType = mysqli_num_rows($allType);

if ($noOfType >= 1) {
    while ($row = mysqli_fetch_assoc($allType)) {
        $TypeCard .= '
        <div class="col-md-4 col-sm-6 ftco-animate fadeInUp ftco-animated">
            <div class="block-7">
                <form action="gymBooking.php" method="POST">
                    <div class="text-center p-4">
                        <span class="excerpt d-block">' . $row['SubscriptionType'] . '</span>
                        <span class="price mb-2"><sup>DA</sup> <span class="number">' . $row['Price'] . '</span> <sub>/par mois</sub></span>
                        <ul class="pricing-text mb-2">
                            <li><span class="fa fa-check mr-2"></span> Durée: ' . $row['Duration'] . ' jours</li>
                            <li><span class="fa fa-check"></span> Avantages: ' . $row['Benefits'] . '</li>
                        </ul>
                        <input type="hidden" name="subscriptionId" value="' . $row['SubscriptionId'] . '" />
                        <button class="btn btn-primary d-block px-1 py-2" name="bookgym" type="submit">Réserver</button>
                    </div>
                </form>
            </div>
        </div>';
    }
} else {
    $TypeCard .= '<br><br><p class="col-12 text-center text-danger">Aucun abonnement disponible...</p>';
}

echo $TypeCard;
}

//------------------------------------ My Event Booking -------------------------------------
// ------------------------------------ Mes Réservations d'Événements -------------------------------------
if(isset($_POST['eventBooking'])){

    $eventBooking = '<br><br>';
    
    if(isset($_POST['msg'])){ 
      $eventBooking .= '<div class="alert alert-success" role="alert">' . $_POST["msg"] . ' </div>';
    }
    if (isset($_POST["error"])) {
      $eventBooking .= '<div class="alert alert-danger">' . $_POST["error"] . '</div>';
    }

    $eventBooking .= '<div class="row">';
    
    $filter = $_POST['filter'];
    $userId = $_SESSION['loggedUserId'];

    switch($filter){
        case 1:
            $selectBooking = "SELECT em.*,et.EventType,el.HallNumber FROM
                event_booking em INNER JOIN event_list el ON el.EventId = em.EventId
                INNER JOIN event_type et ON el.EventTypeId = et.EventTypeId 
                WHERE em.User_id = '$userId' ORDER BY em.Date DESC"; break;

        case 2:
            $selectBooking = "SELECT em.*,et.EventType,el.HallNumber FROM
                event_booking em INNER JOIN event_list el ON el.EventId = em.EventId
                INNER JOIN event_type et ON el.EventTypeId = et.EventTypeId 
                WHERE em.User_id = '$userId' AND em.Status = 'Booked' ORDER BY em.Date DESC"; break;

        case 3:
            $selectBooking = "SELECT em.*,et.EventType,el.HallNumber FROM
                event_booking em INNER JOIN event_list el ON el.EventId = em.EventId
                INNER JOIN event_type et ON el.EventTypeId = et.EventTypeId 
                WHERE em.User_id = '$userId'
                AND (em.Status = 'Paid' OR em.Status = 'CheckedOut') ORDER BY em.Date DESC"; break;

        case 4:
            $selectBooking = "SELECT em.*,et.EventType,el.HallNumber FROM
                event_booking em INNER JOIN event_list el ON el.EventId = em.EventId
                INNER JOIN event_type et ON el.EventTypeId = et.EventTypeId 
                WHERE em.User_id = '$userId' AND em.Status = 'Cancelled' ORDER BY em.Date DESC"; break;

        case 5:
            $selectBooking = "SELECT em.*,et.EventType,el.HallNumber FROM
                event_booking em INNER JOIN event_list el ON el.EventId = em.EventId
                INNER JOIN event_type et ON el.EventTypeId = et.EventTypeId 
                WHERE em.User_id = '$userId' AND em.Status = 'Rejected' ORDER BY em.Date DESC"; break;

        case 6:
            $selectBooking = "SELECT em.*,et.EventType,el.HallNumber FROM
                event_booking em INNER JOIN event_list el ON el.EventId = em.EventId
                INNER JOIN event_type et ON el.EventTypeId = et.EventTypeId 
                WHERE em.User_id = '$userId' AND em.Event_date < CURDATE() ORDER BY em.Date DESC"; break;

        default:
            $selectBooking = "SELECT em.*,et.EventType,el.HallNumber FROM
                event_booking em INNER JOIN event_list el ON el.EventId = em.EventId
                INNER JOIN event_type et ON el.EventTypeId = et.EventTypeId 
                WHERE em.User_id = '$userId' ORDER BY em.Date DESC"; break;
    }

    $all = mysqli_query($con, $selectBooking);
  
    if(mysqli_num_rows($all) >= 1){
        while($row = mysqli_fetch_assoc($all)){
            $eventBooking .= '
            <div id="eventBooking" class="col-lg-4 col-md-6">
                <div class="card card-margin">
                    <div class="card-header no-border">
                        <h5 class="card-title">'.$row['Status'].'</h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class="widget-49">
                            <div class="widget-49-title-wrapper">';
            
            // Couleur du badge selon le statut
            switch($row['Status']){
                case "Booked":     $eventBooking .= '<div class="widget-49-date-primary">'; break;
                case "Paid":       $eventBooking .= '<div class="widget-49-date-success">'; break;
                case "Cancelled":  $eventBooking .= '<div class="widget-49-date-warning">'; break;
                case "Rejected":   $eventBooking .= '<div class="widget-49-date-danger">'; break;
                default:           $eventBooking .= '<div class="widget-49-date-success">'; break;
            }

            $eventBooking .= '
                                <span class="widget-49-date-day">'.date('d', strtotime($row['Date'])).'</span>
                                <span class="widget-49-date-month">'.date('M', strtotime($row['Date'])).'</span>
                            </div>
                            <div class="widget-49-meeting-info">
                                <span class="font-weight-bold text-uppercase">'.$row['EventType'].'</span> 
                                <span class="widget-49-meeting-time">Salle N° : '.$row['HallNumber'].'</span>
                                <span class="widget-49-meeting-time">Date de réservation : '.$row['Date'].'</span>
                            </div>
                        </div>
                        <ul class="widget-49-meeting-points">
                            <li class="widget-49-meeting-item"><span class="font-weight-bold">Date de événement : '.$row['Event_date'].'</span></li>
                            <li class="widget-49-meeting-item"><span class="font-weight-bold">Heure de événement : '.$row['EventTime'].'</span></li>
                            <li class="widget-49-meeting-item"><span class="font-weight-bold">Durée du forfait : '.$row['Package'].' h</span></li>
                            <li class="widget-49-meeting-item"><span class="font-weight-bold">Coût total : DA'.$row['Amount'].'</span></li>
                            <li class="widget-49-meeting-item"><span>Nombre invités : '.$row['NoOfGuest'].'</span></li>
                            <li class="widget-49-meeting-item"><span>Email : '.$row['Email'].'</span></li>
                            <li class="widget-49-meeting-item"><span>Numéro de téléphone : '.$row['Phone_number'].'</span></li>
                        </ul>';

            // Actions selon le statut
            if($row['Status'] == "Booked"){
    $eventBooking .= '<div class="time">';
    $eventBooking .= "<div class='d-flex justify-content-between mt-2'>
        <button class='btn btn-sm btn-primary' onclick='openPaymentModal(\"" . $row["BookingId"] . "\")'>Payer</button>
        <button class='btn btn-sm btn-danger' onclick='setCancel(\"" . $row["BookingId"] . "\")'>Annuler</button>
    </div>";
    $eventBooking .= '<span class="pull-right">Date de modification : '.$row['Modified_date'].'</span>';
    $eventBooking .= '</div>';
} elseif ($row['Status'] == "Paid" || $row['Status'] == "CheckedOut") {
    $eventBooking .= '<form action="../include/pdf.php" method="POST"><div class="time">
        <input type="hidden" name="eventBookingId" value="'.$row['BookingId'].'" />
        <button type="submit" class="btn btn-primary btn-sm">Facture</button>
        <span class="pull-right">Date de modification : '.$row['Modified_date'].'</span>
    </div></form>';
} else {
                $eventBooking .= '<div class="time">
                    <span class="pull-right">Date de modification : '.$row['Modified_date'].'</span>
                </div>';
            }

            $eventBooking .= '</div></div></div></div>';
        }
    } else {
        $eventBooking .= '</div><br><br>
        <p class="col-12 text-center text-danger">Aucun événement réservé n’est disponible</p>';
    }

    echo $eventBooking;
}



?>
<style>

#roomBooking{
 margin-bottom: 20px;
}

/* ===============================
CARD STYLES
=================================*/
.card.card-margin {
 border-radius: 10px;
 box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
 overflow: hidden;
 transition: transform 0.2s ease;
}
.card.card-margin:hover {
 transform: translateY(-5px);
}

/* ===============================
CARD HEADER
=================================*/
.card .card-header.no-border {
 background-color: #f8f9fa;
 border-bottom: none;
 padding: 15px 20px;
}
.card .card-title {
 font-size: 1.2rem;
 font-weight: bold;
 text-transform: uppercase;
}

/* ===============================
WIDGET DATE BADGES
=================================*/
.widget-49-date-primary,
.widget-49-date-success,
.widget-49-date-warning,
.widget-49-date-danger {
 width: 50px;
 height: 50px;
 border-radius: 8px;
 text-align: center;
 padding-top: 5px;
 margin-right: 10px;
 color: #fff;
}
.widget-49-date-primary { background-color: #007bff; }
.widget-49-date-success { background-color: #28a745; }
.widget-49-date-warning { background-color: #ffc107; color: #212529; }
.widget-49-date-danger  { background-color: #dc3545; }

.widget-49-date-day {
 font-size: 1.2rem;
 font-weight: bold;
}
.widget-49-date-month {
 font-size: 0.9rem;
 text-transform: uppercase;
}

/* ===============================
MEETING INFO
=================================*/
.widget-49-meeting-info {
 font-size: 0.95rem;
 line-height: 1.4;
}
.widget-49-meeting-info span {
 display: block;
 margin-bottom: 4px;
}

/* ===============================
MEETING POINTS
=================================*/
.widget-49-meeting-points {
 list-style: none;
 padding-left: 0;
 margin-top: 10px;
}
.widget-49-meeting-item {
 padding: 5px 0;
 border-bottom: 1px dashed #ccc;
 font-size: 0.9rem;
}
.widget-49-meeting-item:last-child {
 border-bottom: none;
}

/* ===============================
ACTION BUTTONS & TIME SECTION
=================================*/
.time {
 margin-top: 10px;
}
.time .btn-sm {
 margin-right: 10px;
}
.time .pull-right {
 float: right;
 font-size: 0.85rem;
 color: #6c757d;
}
</style>

<script>
    function openPaymentModal(id) {
    document.getElementById('bookingId').value = id;
    let modal = new bootstrap.Modal(document.getElementById('paymentModal'));
    modal.show();
}
function setCancel(id) {
    // Envoie une requête AJAX pour annuler
    if (!id) return false;

    fetch('status_functions.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: `action=cancelBooking&id=${id}`
    })
    .then(response => response.text())
    .then(data => {
        alert('Réservation annulée');
        location.reload();
    });

    return false;
}
function setEventCancel(bookingId) {
    if (confirm('Êtes-vous sûr ? Voulez-vous annuler cette réservation ?')) {
        // Exemple d'appel AJAX pour annuler
        fetch('cstatus_functions.php' + bookingId, {
            method: 'GET',
        })
        .then(response => response.text())
        .then(data => {
            alert("Réservation annulée avec succès");
            location.reload(); // Recharge la page pour mettre à jour l'affichage
        })
        .catch(error => {
            alert("Erreur lors de l'annulation");
            console.error(error);
        });
    }
}


</script>
<script>
function setEventCancel(bookingId) {
    if (confirm('Êtes-vous sûr ? Voulez-vous annuler cette réservation ?')) {
        // Requête AJAX vers ce même fichier PHP avec action=cancel
        fetch('action=cancel&id=' + bookingId, {
            method: 'GET'
        })
        .then(response => response.text())
        .then(data => {
            if (data.trim() === 'success') {
                alert("Réservation annulée avec succès !");
                location.reload(); // Recharger pour voir les changements
            } else {
                alert("Échec de l'annulation : " + data);
            }
        })
        .catch(error => {
            console.error('Erreur AJAX:', error);
            alert("Erreur lors de l’annulation.");
        });
    }
}
</script>
