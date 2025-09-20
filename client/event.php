<?php 
include('include/header.php');
if(!isset($_SESSION['loggedUserId'])) {
    header('Location:../login.php');
}
?>

<section id="roomType" class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-2">
            <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                <h2 class="my-3">Types d'Événements Disponibles</h2>
            </div>
        </div>
 
        <!-- Menu déroulant pour le filtrage -->
        <div class="float-right">
            <select name="category" id="eventFilter" class="form-control custom-select bg-white border-md filter">
                <option disabled selected>Filtrer par</option>
                <option value="1">Tous</option>
                <option value="2">Moins de 1500 DA</option>
                <option value="3">Entre 1500 et 2000 DA</option>
                <option value="4">Entre 2000 et 2500 DA</option>
                <option value="5">Plus de 2500 DA</option>
            </select>
        </div>

        <br>
        <br>
        <br>
        
        <div class="row" id="contentArea">
            <!-- Contenu chargé dynamiquement -->
        </div>
    </div>
</section>

<script src="js/eventType.js"></script>

<?php include('include/footer.php')?>