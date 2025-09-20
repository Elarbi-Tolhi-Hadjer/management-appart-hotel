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
                <h2 class="my-3">Types d'abonnements disponibles</h2>
            </div>
        </div>

        <!-- Filtre des abonnements -->
        <div class="float-right">
            <select name="category" id="gymFilter" class="form-control custom-select bg-white border-md filter">
                <option disabled selected>Filtrer par TYPE Abonnement</option>
                <option value="1">Tous</option>
                <option value="2">VIP</option>
                <option value="3">Premium</option>
                <option value="4">Basic</option>
            </select>
        </div>

        <br><br><br>

        <div class="row" id="contentArea">
            <!-- Les abonnements seront chargés ici dynamiquement -->
        </div>
    </div>
</section>

<script src="js/gymType.js"></script>

<?php include('include/footer.php'); ?>
