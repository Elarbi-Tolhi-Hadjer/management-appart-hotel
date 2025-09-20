<?php include("include/header.php");
if(!isset($_SESSION['loggedUserId'])) {
  echo "<script> window.location.href = '../login.php';</script>";
}
?>

<!-- Contenu de la Page -->
<div id="content" class="p-4 p-md-5 pt-5">

  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">Gestion des Réservations</h2>
  </div>

  <!-- Modal de Paiement -->
  <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="paymentModalLabel">Effectuer le Paiement</h5>
          <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="modal-payment" action="status_functions.php" method="POST" autocomplete="off">
          <div class="modal-body">
            <div class="form-group">
              <label for="eventPaymentType">Méthode de paiement</label>
              <select name="eventPaymentType" id="eventPaymentType" class="form-control" required>
                <option value="" disabled selected>Choisissez une méthode</option>
                <option value="Cash">Espèces</option>
                <option value="Net Banking">Virement bancaire</option>
                <option value="Credit Card">Carte de crédit</option>
                <option value="Debit Card">Carte de débit</option>
              </select>
            </div>
            <input type="hidden" id="eventBookingId" name="eventBookingId">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            <button type="submit" class="btn btn-primary">Payer</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal des Détails -->
  <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="detailModalLabel">Détails de la Réservation</h5>
          <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card card-margin" id="details">
            <!-- Les détails seront chargés ici -->
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Filtres -->
  <div class="row mb-4">
    <div class="col-md-4 ml-auto">
      <div class="form-group">
        <label for="eventBookingFilter">Filtrer par statut :</label>
        <select name="category" id="eventBookingFilter" class="form-control">
          <option value="" disabled selected>Choisir un filtre</option>
          <option value="1">Toutes les réservations</option>
          <option value="2">Réservées</option>
          <option value="3">Payées</option>
          <option value="4">Annulées</option>
          <option value="5">Rejetées</option>
          <option value="6">Expirées</option>
          <option value="7">Événements terminés</option>
        </select>
      </div>
    </div>
  </div>

  <!-- Tableau des Réservations -->
  <div class="container-fluid p-0" id="contentArea">
    <div class="card shadow-sm">
      <div class="card-body p-0">
        <div class="table-responsive">
          <!-- Le tableau sera chargé ici par JavaScript -->
        </div>
      </div>
    </div>
  </div>

</div>

<script src="js/eventBooking.js" type="text/javascript"></script>

<?php include("include/footer.php"); ?>