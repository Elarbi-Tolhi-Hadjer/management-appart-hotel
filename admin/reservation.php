<?php
include('include/header.php');
include('../include/dbConnect.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de Appart Hôtel (Mode Admin)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
        .container { margin-top: 5rem; }
        .form-control, .form-select { border-radius: 0.25rem; box-shadow: none; }
        .input-group-text { background-color: #fff; border: 1px solid #ced4da; border-right: none; }
        .form-control:focus, .form-select:focus { border-color: #80bdff; box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
        .btn-primary { background-color: #007bff; border: none; transition: background-color 0.3s ease; }
        .btn-primary:hover { background-color: #0056b3; }
        .alert { border-radius: 0.25rem; }
    </style>
</head>
<body>
<div class="container">
    <div class="col-md-7 col-lg-6 ml-auto">
        <form action="admin_functions.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="container mb-4">
                <h2 class="text-center mb-4 text-primary">Réservation pour un client</h2>
                <?php if (isset($_GET["error"])) { echo '<div class="text-danger text-center">' . $_GET["error"] . '</div>'; } ?>
            </div>

            <!-- Nom complet -->
            <div class="form-group mb-4">
                <label for="fullname" class="form-label text-secondary">Nom complet du client</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-user text-muted"></i></span>
                    <input id="fullname" type="text" name="fullname" placeholder="Nom complet" class="form-control border-start-0" required>
                </div>
            </div>

            <!-- Type de chambre -->
            <div class="form-group mb-4">
                <label for="roomTypeId" class="form-label text-secondary">Type de Appart Hôtel</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-door-open"></i></span>
                    <select id="roomTypeId" name="roomTypeId" class="form-select border-start-0" required>
                        <option value="" disabled selected>Choisissez un type</option>
                        <?php
                        $query = "SELECT * FROM room_type WHERE Status = 1";
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $row['RoomTypeId'] . '" data-cost="' . $row['Cost'] . '">' . $row['RoomType'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

            <!-- Coût par jour -->
            <div class="form-group mb-4">
                <label for="roomCost" class="form-label text-secondary">Coût par Jour (DA)</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-coins"></i></span>
                    <input id="roomCost" type="text" name="roomCost" class="form-control border-start-0" readonly>
                </div>
            </div>

            <!-- Email -->
            <div class="form-group mb-4">
                <label for="email" class="form-label text-secondary">Adresse Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-envelope text-muted"></i></span>
                    <input id="email" type="email" name="email" placeholder="Adresse Email" class="form-control border-start-0" required>
                </div>
            </div>

            <!-- Téléphone -->
            <div class="form-group mb-4">
                <label for="contactno" class="form-label text-secondary">Numéro de Téléphone</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-phone-square text-muted"></i></span>
                    <input id="contactno" type="tel" name="contactno" pattern="0[5-7][0-9]{8}" placeholder="Numéro de Téléphone" class="form-control border-start-0" required>
                </div>
            </div>

            <!-- Nombre de personnes -->
            <div class="form-group mb-4">
                <label for="no_of_guest" class="form-label text-secondary">Nombre de Personnes</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-user-plus text-muted"></i></span>
                    <select id="no_of_guest" name="no_of_guest" class="form-select border-start-0" required>
                        <option value="" disabled selected>Choisissez</option>
                        <option value="1">1</option><option value="2">2</option>
                        <option value="3">3</option><option value="4">4</option>
                    </select>
                </div>
            </div>

            <!-- Date d'arrivée -->
            <div class="form-group mb-4">
                <label for="checkIn" class="form-label text-secondary">Date d'Arrivée</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    <input id="checkIn" type="date" name="checkIn" class="form-control border-start-0" required>
                </div>
            </div>

            <!-- Date de départ -->
            <div class="form-group mb-4">
                <label for="checkOut" class="form-label text-secondary">Date de Départ</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    <input id="checkOut" type="date" name="checkOut" class="form-control border-start-0" required>
                </div>
            </div>

            <!-- Coût total -->
            <div class="form-group mb-4">
                <label for="totalCost" class="form-label text-secondary">Coût Total (DA)</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-coins"></i></span>
                    <input id="totalCost" type="text" name="totalCost" value="0" class="form-control border-start-0" readonly>
                </div>
            </div>

            <!-- Bouton de soumission -->
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary btn-lg w-100" name="bookRoom">
                    Réserver Maintenant
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const roomTypeSelect = document.getElementById('roomTypeId');
    const roomCostInput = document.getElementById('roomCost');
    const totalCostInput = document.getElementById('totalCost');
    const checkInInput = document.getElementById('checkIn');
    const checkOutInput = document.getElementById('checkOut');

    roomTypeSelect.addEventListener('change', function () {
        const selectedOption = this.options[this.selectedIndex];
        const cost = selectedOption.getAttribute('data-cost');
        roomCostInput.value = cost;
        updateTotal();
    });

    checkInInput.addEventListener('change', updateTotal);
    checkOutInput.addEventListener('change', updateTotal);

    function updateTotal() {
        const checkIn = new Date(checkInInput.value);
        const checkOut = new Date(checkOutInput.value);
        const cost = parseFloat(roomCostInput.value);

        if (!isNaN(checkIn.getTime()) && !isNaN(checkOut.getTime()) && cost > 0) {
            const days = (checkOut - checkIn) / (1000 * 60 * 60 * 24);
            totalCostInput.value = days > 0 ? (days * cost).toFixed(2) : 0;
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include('include/footer.php'); ?>
