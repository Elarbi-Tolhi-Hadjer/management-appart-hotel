<?php include("include/header.php"); 
if(!isset($_SESSION['loggedUserId'])) {
  echo "<script> window.location.href = '../login.php';</script>";
}
?>
<!-- Contenu de la page -->
<div id="content" class="p-4 p-md-5 pt-5">

<h2 class="mb-4">Types d'événements</h2>

<!-- Bouton pour ajouter un nouveau type d'événement -->
<button type="button" class="btn btn-dark" id="addEventTypeBtn">
+ Ajouter un nouveau type d'événement
</button>

<!-- Modale d'ajout -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un type d'événement</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fermer">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="admin_functions.php" method="POST" id="modal-addEventType" autocomplete="off">
            <div class="row">
                <!-- Image du type d'événement -->
                <div class="container mb-4">
                    <div class="picture-container">
                        <div class="picture">
                            <img src="../assets/picture/icons/addImage.png" class="picture-src" id="eventTypeImagePreview" title="">
                            <input type="file" id="eventTypeImage" name="eventTypeImage" required>
                        </div>
                        <h6>Choisir une image</h6>
                    </div>
                </div>

                <!-- Nom du type -->
                <div class="input-group col-lg-11 ml-3 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fa fa-user text-muted"></i>
                        </span>
                    </div>
                    <input id="typeName" type="text" name="eventTypeName" placeholder="Nom du type d'événement" class="form-control bg-white border-left-0 border-md" required>
                </div>

                <!-- Coût -->
                <div class="input-group col-lg-11 ml-3 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fa fa-user text-muted"></i>
                        </span>
                    </div>
                    <input id="cost" type="text" name="eventCost" placeholder="Coût" class="form-control bg-white border-left-0 border-md" required>
                </div>

                <!-- Description -->
                <div class="input-group col-lg-11 ml-3 mb-4">
                    <textarea name="description" id="eventDescription" style="width:500px !important;height:100px !important;" placeholder="Description" class="form-control bg-white" required></textarea>
                </div>
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

<!-- Modale de modification -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modifier les détails</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fermer">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="admin_functions.php" method="POST" id="modal-editEventType" autocomplete="off">
            <div class="row">
                <!-- Image -->
                <div class="container mb-4">
                    <div class="picture-container">
                        <div class="picture">
                            <img src="../assets/picture/icons/addImage.png" class="picture-src" id="eventTypeImagePreviewEdit" title="">
                            <input type="file" id="editEventTypeImage" name="editEventTypeImage" required>
                        </div>
                        <h6>Choisir une image</h6>
                    </div>
                </div>

                <!-- Nom -->
                <div class="input-group col-lg-11 ml-3 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fa fa-user text-muted"></i>
                        </span>
                    </div>
                    <input id="editEventTypeName" type="text" name="editEventTypeName" placeholder="Nom du type d'événement" class="form-control bg-white border-left-0 border-md" required>
                </div>

                <!-- Coût -->
                <div class="input-group col-lg-11 ml-3 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fa fa-user text-muted"></i>
                        </span>
                    </div>
                    <input id="editEventCost" type="text" name="editEventCost" placeholder="Coût" class="form-control bg-white border-left-0 border-md" required>
                </div>

                <!-- Statut -->
                <div class="input-group col-lg-11 ml-3 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fa fa-black-tie text-muted"></i>
                        </span>
                    </div>
                    <select id="editStatus" name="editStatus" class="form-control custom-select bg-white border-left-0 border-md" required>
                        <option disabled selected>Choisir un statut</option>
                        <option value="active">Actif</option>
                        <option value="in-active">Inactif</option>
                    </select>
                </div>

                <!-- Description -->
                <div class="input-group col-lg-11 ml-3 mb-4">
                    <textarea name="editDescription" id="editDescription" style="width:500px !important;height:100px !important;" placeholder="Description" class="form-control bg-white" required></textarea>
                </div>

                <!-- Champ caché pour l'ID -->
                <input type="hidden" id="eventTypeId" name="eventTypeId">
            </div>
           <div class="modal-footer">
             <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
           </div>
        </form>
      </div>
    </div>
  </div>
</div>

<br>

<!-- Filtrage -->
<div class="float-right filterBy">
<select name="category" id="eventTypeFilter" class="form-control custom-select bg-white border-md filter">
  <option disabled selected>Filtrer par</option>
  <option value="1">Tous</option>
  <option value="2">Actif</option>
  <option value="3">Inactif</option>
  <option value="4">Coût inférieur à 500</option>
  <option value="5">Coût entre 500 et 1000</option>
  <option value="6">Coût supérieur à 1000</option>
</select>
</div>

<!-- Zone d'affichage des types d'événements -->
<div class="container-fluid" id="contentArea">
        
</div>

</div>
<!-- Fin du contenu de la page -->
<script src="js/eventType_functions.js" type="text/javascript"></script>
<?php include("include/footer.php"); ?>
