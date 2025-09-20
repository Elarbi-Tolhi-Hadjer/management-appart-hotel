<?php
include('include/header.php');
include('../include/dbConnect.php');

if (!isset($_SESSION['loggedUserId'])) {
    header('Location:../login.php');
}

$eventTypeId = $_POST['eventTypeId'];
$query_selectEvent = "SELECT * FROM event_type WHERE EventTypeId = '$eventTypeId'";
$result = mysqli_query($con, $query_selectEvent);
while ($row = mysqli_fetch_assoc($result)) {
?>
<div class="container">
    <div class="row align-items-center my-5">
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="../assets/picture/icons/thumbs-up.png" alt="" class="img-fluid mb-3 d-none d-md-block">
            <h1>Réserver un Événement</h1>
            <p class="font-italic text-muted mb-0">Les informations ci-dessous seront utilisées pour réserver un événement sur votre compte Appart Hôtel xxxx.</p>
        </div>

        <div class="col-md-7 col-lg-6 ml-auto">
            <form action="client_functions.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="row">
                    <div class="container mb-4">
                        <h2 class="text-center">Effectuer votre réservation</h2>
                        <?php if (isset($_GET["error"])) {
                            echo '<div class="text-danger text-center">' . $_GET["error"] . '</div>';
                        } ?>
                    </div>

                    <input type="hidden" name="eventTypeId" value="<?php echo $eventTypeId ?>" />

                    <!-- Type d'événement -->
                    <div class="form-group col-lg-6 mb-4">
                        <label for="eventType" class="ml-2">Type d'événement</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0"><i class='fas fa-door-open'></i></span>
                            </div>
                            <input id="eventType" type="text" name="eventType" value="<?php echo $row['EventType'] ?>" class="form-control bg-white border-left-0 border-md" readonly>
                        </div>
                    </div>

                    <!-- Coût -->
                    <div class="form-group col-lg-6 mb-4">
                        <label for="eventCost" class="ml-2">Coût de la salle / heure</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0"><i class="fa fa-money"></i></span>
                            </div>
                            <input id="eventCost" type="text" value="<?php echo $row['Cost'] ?>" name="eventCost" class="form-control bg-white border-left-0 border-md" readonly>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-group col-lg-12 mb-4">
                        <label for="email" class="ml-2">Adresse e-mail</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0"><i class="fa fa-envelope text-muted"></i></span>
                            </div>
                            <input id="email" type="email" name="email" placeholder="Adresse e-mail" class="form-control bg-white border-left-0 border-md" required>
                        </div>
                    </div>

                    <!-- Numéro de téléphone -->
                    <div class="form-group col-lg-12 mb-4">
                        <label for="contactno" class="ml-2">Numéro de téléphone</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0"><i class="fa fa-phone-square text-muted"></i></span>
                            </div>
                            <input id="contactno" type="tel" name="contactno" pattern="[0-9]{10}" placeholder="Numéro de téléphone" class="form-control bg-white border-md border-left-0 pl-3" required>
                        </div>
                    </div>

                    <!-- Nombre d'invités -->
                    <div class="form-group col-lg-12 mb-4">
                        <label for="no_of_guest" class="ml-2">Nombre d'invités</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0"><i class="fa fa-users text-muted"></i></span>
                            </div>
                            <select id="no_of_guest" name="no_of_guest" class="form-control custom-select bg-white border-left-0 border-md" required>
                                <option value="" disabled selected>Choisir le nombre d'invités</option>
                                <option value="100-200">100-200</option>
                                <option value="200-250">200-250</option>
                                <option value="250-300">250-300</option>
                                <option value="300-500">300-500</option>
                            </select>
                        </div>
                    </div>

                    <!-- Date -->
                    <div class="form-group col-lg-6 mb-4">
                        <label for="eventDate" class="ml-2">Date de l'événement</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0"><i class="fa fa-calendar"></i></span>
                            </div>
                            <input id="eventDate" type="date" name="eventDate" class="form-control bg-white" required>
                        </div>
                    </div>

                    <!-- Heure -->
                    <div class="form-group col-lg-6 mb-4">
                        <label for="eventTime" class="ml-2">Heure de début</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0"><i class="fa fa-clock"></i></span>
                            </div>
                            <input id="eventTime" type="time" name="eventTime" class="form-control bg-white" required>
                        </div>
                    </div>

                    <!-- Durée -->
                    <div class="form-group col-lg-6 mb-4">
                        <label for="total_hours" class="ml-2">Durée totale</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0"><i class="fa fa-hourglass-half"></i></span>
                            </div>
                            <select id="total_hours" name="total_hours" class="form-control custom-select bg-white border-left-0 border-md" required>
                                <option value="" selected disabled>Choisir la durée</option>
                                <option value="2">2 heures</option>
                                <option value="4">4 heures</option>
                                <option value="8">8 heures</option>
                                <option value="16">16 heures</option>
                                <option value="24">24 heures</option>
                            </select>
                        </div>
                    </div>

                    <!-- Coût total -->
                    <div class="form-group col-lg-6 mb-4">
                        <label for="totalCost" class="ml-2">Coût total</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0"><i class="fa fa-money"></i></span>
                            </div>
                            <input id="totalCost" type="text" name="totalCost" value="0" class="form-control bg-white border-left-0 border-md" readonly>
                        </div>
                    </div>

                    <!-- Soumission -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button type="submit" class="btn btn-primary btn-block py-2" name="bookEvent">
                            <span class="font-weight-bold">Réserver</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Script JS pour calcul du coût -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const costField = document.getElementById("eventCost");
        const hoursField = document.getElementById("total_hours");
        const totalCostField = document.getElementById("totalCost");

        function updateTotalCost() {
            const cost = parseFloat(costField.value) || 0;
            const hours = parseFloat(hoursField.value) || 0;
            const total = cost * hours;
            totalCostField.value = total.toFixed(2) + " DZD";
        }

        hoursField.addEventListener("change", updateTotalCost);
    });
</script>

<?php } ?>
<?php include('include/footer.php'); ?>
