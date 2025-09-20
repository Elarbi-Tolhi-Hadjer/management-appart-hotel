<?php 
include("include/header.php"); 
if (!isset($_SESSION['loggedUserId'])) {
    echo "<script> window.location.href = '../login.php';</script>";
}
?>
<!-- Contenu de la page -->
<div id="content" class="p-4 p-md-5 pt-5">

    <h2 class="mb-4">Paiement de Réservation de Chambre</h2>

    <br>
    <!-- Menu déroulant de filtrage -->
    <div class="float-right filterBy">
        <select name="category" id="roomPaymentFilter" class="form-control custom-select bg-white border-md filter">
            <option disabled="" selected="">Filtrer par</option>
            <option value="1">Tous</option>
            <option value="2">Espèces</option>
            <option value="3">Paiement par carte de crédit</option>
            <option value="4">Paiement par carte de débit</option>
            <option value="5">Virement bancaire</option>
            <option value="6">Moins de 5000 DA</option>
            <option value="7">Entre 5000 DA et 10000 DA</option>
            <option value="8">Entre 10000 DA et 15000 DA</option>
            <option value="9">Plus de 15000 DA</option>
        </select>
    </div>

    <!-- Tableau pour afficher le contenu -->
    <div class="container-fluid" id="contentArea">

    </div>

</div>

<script src="js/roomPayment.js"></script>
<?php include("include/footer.php"); ?>
