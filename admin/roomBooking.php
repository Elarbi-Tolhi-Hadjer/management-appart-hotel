<?php include("include/header.php"); 
if(!isset($_SESSION['loggedUserId'])) {
  echo "<script> window.location.href = '../login.php';</script>";
}
?>


<!-- Contenu de la page -->
<div id="content" class="p-4 p-md-5 pt-5">

<h2 class="mb-4">Réservation de chambre</h2>

<!-- Fenêtre modale de paiement -->

<div class="modal" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Effectuer un paiement</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fermer">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="model-payment" action="status_functions.php" method="POST" autocomplete="off">
            <!-- pour récupérer l'ID lors de la soumission du formulaire -->
            <label for="paymentType">Choisissez un mode de paiement</label>
            <select name="paymentType" id="paymentType" class="form-control custom-select bg-white border-md filter" required>
                <option value="Cash">Espèces</option>
                <option value="Net Banking">Virement bancaire</option>
                <option value="Credit Card">Carte de crédit</option>
                <option value="Debit Card">Carte de débit</option>
            </select>
            <input type="hidden" id="bookingId" name="bookingId">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Payer</button>
          </div>
        </form>
    </div>
  </div>
</div>

<!-- Fenêtre modale de détails -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Détails de la réservation</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fermer">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card card-margin" id="details">
          <!-- les détails de la réservation seront injectés ici -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<br>

<!-- Menu déroulant de filtre -->
<div class="float-right filterBy">
  <select name="category" id="roomBookingFilter" class="form-control custom-select bg-white border-md filter">
    <option disabled="" selected="">Filtrer par</option>
    <option value="1">Toutes les réservations</option>
    <option value="2">Réservé</option>
    <option value="3">Réservations payées</option>
    <option value="4">Réservations annulées</option>
    <option value="5">Réservations rejetées</option>
    <option value="6">Réservations expirées</option>
    <option value="7">Chambres libérées</option>
  </select>
</div>

<!-- Table pour afficher le contenu -->
<div class="container-fluid" id="contentArea">
    <!-- Le contenu des réservations sera affiché ici -->
</div>

</div>

<script src="js/roomBooking.js" type="text/javascript"></script>

<?php include("include/footer.php"); ?>
