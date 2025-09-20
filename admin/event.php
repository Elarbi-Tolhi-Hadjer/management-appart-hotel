<?php include("include/header.php"); 
if(!isset($_SESSION['loggedUserId'])) {
  echo "<script> window.location.href = '../login.php';</script>";
}
?>

<!-- Contenu de la page -->
<div id="content" class="p-4 p-md-5 pt-5">

  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">Gestion des Salles d'Événements</h2>
    
    <!-- Bouton d'ajout -->
    <button type="button" class="btn btn-primary" id="addEventBtn">
      <i class="fas fa-plus-circle mr-2"></i>Ajouter une salle
    </button>
  </div>

  <!-- Modal d'ajout -->
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="addModalLabel">Ajouter une salle</h5>
          <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="admin_functions.php" method="POST" id="modal-addEvent" autocomplete="off">
            
            <?php
            $query_eventType = "SELECT * FROM event_type WHERE Status = 'active' ORDER BY EventTypeId";
            $result = mysqli_query($con, $query_eventType);
            ?>

            <!-- Type d'événement -->
            <div class="form-group">
              <label for="eventType">Type d'événement</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-light">
                    <i class="fas fa-calendar-alt text-primary"></i>
                  </span>
                </div>
                <select id="eventType" name="eventType" class="form-control" required>
                  <option value="" disabled selected>Choisir un type</option>
                  <?php 
                  while ($row = mysqli_fetch_array($result)) {
                    echo "<option value='".$row['EventTypeId']."'>".$row['EventType']."</option>";
                  }
                  ?>   
                </select>
              </div>
            </div>

            <!-- Numéro de salle -->
            <div class="form-group">
              <label for="eventNumber">Numéro de salle</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-light">
                    <i class="fas fa-hashtag text-primary"></i>
                  </span>
                </div>
                <input id="eventNumber" type="text" name="hallNumber" placeholder="Numéro de la salle" class="form-control" required>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
              <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal d'édition -->
  <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="updateModalLabel">Modifier la salle</h5>
          <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="admin_functions.php" method="POST" id="modal-updateEvent" autocomplete="off">
            
            <?php
            $query_eventType = "SELECT * FROM event_type WHERE Status = 'active' ORDER BY EventTypeId";
            $result = mysqli_query($con, $query_eventType);
            ?>

            <!-- Type d'événement -->
            <div class="form-group">
              <label for="editEventType">Type d'événement</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-light">
                    <i class="fas fa-calendar-alt text-primary"></i>
                  </span>
                </div>
                <select id="editEventType" name="editEventType" class="form-control" required>
                  <option value="" disabled selected>Choisir un type</option>
                  <?php 
                  while ($row = mysqli_fetch_array($result)) {
                    echo "<option value='".$row['EventTypeId']."'>".$row['EventType']."</option>";
                  }
                  ?>   
                </select>
              </div>
            </div>

            <!-- Numéro de salle -->
            <div class="form-group">
              <label for="editHallNumber">Numéro de salle</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-light">
                    <i class="fas fa-hashtag text-primary"></i>
                  </span>
                </div>
                <input id="editHallNumber" type="text" name="editHallNumber" placeholder="Numéro de la salle" class="form-control" required>
              </div>
            </div>
             
            <!-- Statut -->
            <div class="form-group">
              <label for="editStatus">Statut</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-light">
                    <i class="fas fa-info-circle text-primary"></i>
                  </span>
                </div>
                <select id="editStatus" name="editStatus" class="form-control" required>
                  <option value="" disabled selected>Choisir un statut</option>
                  <option value="active">Actif</option>
                  <option value="in-active">Inactif</option>
                </select>
              </div>
            </div>

            <!-- ID caché pour la mise à jour -->
            <input type="hidden" id="updateEventId" name="updateEventId">

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
              <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Filtre -->
  <div class="row mb-4">
    <div class="col-md-3 ml-auto">
      <div class="form-group">
        <label for="eventFilter">Filtrer par :</label>
        <select name="category" id="eventFilter" class="form-control">
          <option value="" selected>Toutes les salles</option>
          <option value="active">Actives</option>
          <option value="in-active">Inactives</option>
        </select>
      </div>
    </div>
  </div>

  <!-- Zone de contenu -->
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

<script src="js/event_function.js"></script>
<?php include("include/footer.php"); ?>