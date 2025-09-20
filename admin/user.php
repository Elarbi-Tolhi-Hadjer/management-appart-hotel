<?php include("include/header.php"); 
if(!isset($_SESSION['loggedUserId'])) {
    echo "<script> window.location.href = '../login.php';</script>";
}
?>
<!-- Contenu de la page -->
<div id="content" class="p-4 p-md-5 pt-5">

<h2 class="mb-4">Détails des utilisateurs</h2>

<!-- Bouton pour ajouter un nouvel utilisateur -->
<button type="button" class="btn btn-dark" id="addUserBtn">
<i class="fa fa-user-plus" aria-hidden="true"></i>  Ajouter un utilisateur
</button>

<!-- Modal Ajout Utilisateur -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ajouter un utilisateur</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fermer">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulaire d'ajout -->
        <form id="model-addUser" method="POST" action="admin_functions.php" enctype="multipart/form-data" autocomplete="off">
          <div class="row">
            <div class="container mb-4">
              <div class="picture-container">
                <div class="picture">
                  <img src="../assets/picture/icons/user.png" class="picture-src" id="wizardPicturePreview" title="">
                  <input type="file" id="wizard-picture" name="profileImage" required>
                </div>
                <h6>Choisir une image</h6>
              </div>
            </div>

            <!-- Prénom -->
            <div class="input-group col-lg-6 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-user text-muted"></i>
                </span>
              </div>
              <input type="text" name="firstname" placeholder="Prénom" class="form-control bg-white border-left-0 border-md" required>
            </div>

            <!-- Nom -->
            <div class="input-group col-lg-6 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-user text-muted"></i>
                </span>
              </div>
              <input type="text" name="lastname" placeholder="Nom" class="form-control bg-white border-left-0 border-md" required>
            </div>

            <!-- Email -->
            <div class="input-group col-lg-12 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-envelope text-muted"></i>
                </span>
              </div>
              <input type="email" name="email" placeholder="Adresse e-mail" class="form-control bg-white border-left-0 border-md" required>
            </div>

            <!-- Numéro de téléphone -->
            <div class="input-group col-lg-12 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-phone-square text-muted"></i>
                </span>
              </div>
              <input type="tel" name="contactno" pattern="^(05|06|07)[0-9]{8}$" placeholder="Numéro de téléphone" class="form-control bg-white border-md border-left-0 pl-3" required>
            </div>

            <!-- Sexe -->
            <div class="input-group col-lg-12 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-black-tie text-muted"></i>
                </span>
              </div>
              <select name="gender" class="form-control custom-select bg-white border-left-0 border-md" required>
                <option value="">Choisissez le sexe</option>
                <option value="male">Homme</option>
                <option value="female">Femme</option>
              </select>
            </div>

            <!-- Mot de passe -->
            <div class="input-group col-lg-6 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-lock text-muted"></i>
                </span>
              </div>
              <input type="password" name="password" placeholder="Mot de passe" class="form-control bg-white border-left-0 border-md" required>
            </div>

            <!-- Confirmation mot de passe -->
            <div class="input-group col-lg-6 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-lock text-muted"></i>
                </span>
              </div>
              <input type="password" name="conformPassword" placeholder="Confirmer le mot de passe" class="form-control bg-white border-left-0 border-md" required>
            </div>

            <!-- Bouton de soumission -->
            <div class="form-group col-lg-12 mx-auto mb-0">
              <button type="submit" class="btn btn-success btn-block py-2" name="addUser">
                <span class="font-weight-bold">Créer le compte</span>
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Mise à jour Utilisateur -->
<div class="modal" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modifier les informations</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fermer">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulaire de mise à jour -->
        <form id="model-updateUser" method="POST" action="admin_functions.php" enctype="multipart/form-data" autocomplete="off">
          <div class="row">
            <div class="container mb-4">
              <div class="picture-container">
                <div class="picture">
                  <img class="picture-src" id="updatePicture" title="" />
                  <input type="file" id="wizardUpdate-picture" name="profileImage" required>
                </div>
                <h6>Choisir une image</h6>
              </div>
            </div>

            <!-- Prénom -->
            <div class="input-group col-lg-6 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-user text-muted"></i>
                </span>
              </div>
              <input type="text" name="firstName" id="updatefirstName" placeholder="Prénom" class="form-control bg-white border-left-0 border-md" required>
            </div>

            <!-- Nom -->
            <div class="input-group col-lg-6 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-user text-muted"></i>
                </span>
              </div>
              <input type="text" name="lastname" id="updatelastName" placeholder="Nom" class="form-control bg-white border-left-0 border-md" required>
            </div>

            <!-- Email -->
            <div class="input-group col-lg-12 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-envelope text-muted"></i>
                </span>
              </div>
              <input type="email" name="email" id="updateemail" placeholder="Adresse e-mail" class="form-control bg-white border-left-0 border-md" required>
            </div>

            <!-- Téléphone -->
            <div class="input-group col-lg-12 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-phone-square text-muted"></i>
                </span>
              </div>
              <input type="tel" name="contactno" id="updatephoneNumber" pattern="^(05|06|07)[0-9]{8}$" placeholder="Numéro de téléphone" class="form-control bg-white border-md border-left-0 pl-3" required>
            </div>

            <!-- Sexe -->
            <div class="input-group col-lg-12 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-black-tie text-muted"></i>
                </span>
              </div>
              <select id="updategender" name="gender" class="form-control custom-select bg-white border-left-0 border-md" required>
                <option value="">Choisissez le sexe</option>
                <option value="male">Homme</option>
                <option value="female">Femme</option>
              </select>
            </div>

            <!-- Statut -->
            <div class="input-group col-lg-12 mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white px-4 border-md border-right-0">
                  <i class="fa fa-black-tie text-muted"></i>
                </span>
              </div>
              <select id="updateStatus" name="status" class="form-control custom-select bg-white border-left-0 border-md" required>
                <option disabled selected>Choisir le statut</option>
                <option value="active">Actif</option>
                <option value="in-active">Inactif</option>
              </select>
            </div>
          </div>

          <!-- Champ caché et bouton -->
          <input type="hidden" id="userID" name="updateUserID">
          <div class="form-group col-lg-12 mx-auto mb-0">
            <button type="submit" class="btn btn-primary btn-block py-2" name="updateUser">
              <span class="font-weight-bold">Enregistrer les modifications</span>
            </button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<br>

<!-- Filtre -->
<div class="float-right filterBy">
  <select name="category" id="userFilter" class="form-control custom-select bg-white border-md filter">
    <option disabled selected>Filtrer par</option>
    <option value="">Tous</option>
    <option value="active">Actif</option>
    <option value="in-active">Inactif</option>
  </select>
</div>

<!-- Contenu dynamique -->
<div class="container-fluid" id="contentArea"></div>

</div>
<script src="js/user_function.js" type="text/javascript"></script>

<?php include("include/footer.php"); ?>
