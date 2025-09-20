<?php include("include/header.php"); 
if(!isset($_SESSION['loggedUserId'])) {
  echo "<script> window.location.href = '../login.php';</script>";
}
?>

<!-- Contenu de la page -->
<div id="content" class="p-4 p-md-5 pt-5">

<h2 class="mb-4">APPARTEMENTS</h2>

<!-- Bouton pour déclencher le modal -->
<button type="button" class="btn btn-dark" id="addRoomBtn">
+ Ajouter un nouvel appartement
</button>

<!-- Modal d'ajout -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un appartement</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fermer">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="admin_functions.php" method="POST" id="modal-addRoom" autocomplete="off">

      <?php
      $query_roomType = "select * from room_type where Status = 'active' order by RoomTypeId";
      $result = mysqli_query($con,$query_roomType);
      ?>

      <div class="input-group col-lg-11 ml-3 mb-4">
        <div class="input-group-prepend">
            <span class="input-group-text bg-white px-4 border-md border-right-0">
                <i class="fa fa-black-tie text-muted"></i>
            </span>
        </div>
        <select id="roomType" name="roomType" class="form-control custom-select bg-white border-left-0 border-md" required>
            <option disabled="" selected="">Choisir un type d'appartement</option>
            <?php 
            while ($row = mysqli_fetch_array($result)) {
              echo "<option value='".$row['RoomTypeId']."'>".$row['RoomType']."</option>";
            }
            ?>   
        </select>
     </div>

      <!-- Numéro d'appartement -->
      <div class="input-group col-lg-11 ml-3 mb-4">
          <div class="input-group-prepend">
              <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-user text-muted"></i>
              </span>
          </div>
          <input id="roomNumber" type="text" name="roomNumber" placeholder="Numéro de l'appartement" class="form-control bg-white border-left-0 border-md" required>
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Ajouter</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal d’édition -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier les détails</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fermer">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="admin_functions.php" method="POST" id="modal-updateRoom" autocomplete="off">

      <?php
      $query_roomType = "select * from room_type where Status = 'active' order by RoomTypeId";
      $result = mysqli_query($con,$query_roomType);
      ?>

      <div class="input-group col-lg-11 ml-3 mb-4">
        <div class="input-group-prepend">
            <span class="input-group-text bg-white px-4 border-md border-right-0">
                <i class="fa fa-black-tie text-muted"></i>
            </span>
        </div>
        <select id="editRoomType" name="editRoomType" class="form-control custom-select bg-white border-left-0 border-md" required>
            <option disabled="" selected="">Choisir un type d'appartement</option>
            <?php 
            while ($row = mysqli_fetch_array($result)) {
              echo "<option value='".$row['RoomTypeId']."'>".$row['RoomType']."</option>";
            }
            ?>   
        </select>
     </div>

      <!-- Numéro d'appartement -->
      <div class="input-group col-lg-11 ml-3 mb-4">
          <div class="input-group-prepend">
              <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-user text-muted"></i>
              </span>
          </div>
          <input id="editRoomNumber" type="text" name="editRoomNumber" placeholder="Numéro de l'appartement" class="form-control bg-white border-left-0 border-md" required>
      </div>

      <!-- Statut -->
      <div class="input-group col-lg-11 ml-3 mb-4">
          <div class="input-group-prepend">
              <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-black-tie text-muted"></i>
              </span>
          </div>
          <select id="editStatus" name="editStatus" class="form-control custom-select bg-white border-left-0 border-md" required>
              <option disabled="" selected="">Choisir un statut</option>
              <option value="active">Actif</option>
              <option value="in-active">Inactif</option>
          </select>
      </div>

      <!-- Champ caché pour l'ID -->
      <input type="hidden" id="updateRoomId" name="updateRoomId">

      <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Enregistrer</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

<br>

<!-- Filtre -->
<div class="float-right filterBy">
<select name="category" id="roomFilter" class="form-control custom-select bg-white border-md filter">
  <option disabled="" selected="">Filtrer par</option>
  <option value="">Tous</option>
  <option value="active">Actifs</option>
  <option value="in-active">Inactifs</option>
</select>
</div>

<!-- Zone d'affichage du contenu -->
<div class="container-fluid" id="contentArea"></div>

</div>

<script src="js/room_function.js" ></script>
<?php include("include/footer.php"); ?>
