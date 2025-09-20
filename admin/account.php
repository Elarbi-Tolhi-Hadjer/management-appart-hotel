<?php 
include("include/header.php");
if(!isset($_SESSION['loggedUserId'])) {
    echo "<script> window.location.href = '../login.php';</script>";
}
?>
<!-- Contenu de la page -->
<div id="content" class="p-4 p-md-5 pt-5">

<br>

<!-- Zone d'affichage -->
<div class="container-fluid" id="contentArea">
    <div class="col-9">
        <h4 class="mb-4 text-center">Détails du compte</h4>

        <div class="accountMessage"></div>

        <!-- Formulaire de mise à jour -->
        <form id="updateUser" method="POST" action="admin_functions.php" enctype="multipart/form-data" autocomplete="off">
            <input type="hidden" id="user_Id" name="updateAccount" value="<?php echo $_SESSION['loggedUserId']; ?>">

            <div class="row">
                <div class="container mb-4">
                    <div class="picture-container text-center">
                        <div class="picture">
                            <img class="picture-src" id="updatePicture" title="" />
                            <input type="file" id="wizardUpdate-picture" name="profileImage" required>
                        </div>
                        <h6>Choisir une photo</h6>
                    </div>
                </div>

                <!-- Nom de famille -->
                <div class="input-group col-lg-12 mb-4">
                    <div class="ml-2">
                        <label for="updatelastName">Nom</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="updatelastName" type="text" name="lastname" placeholder="Nom de famille" class="form-control bg-white border-left-0 border-md" required>
                    </div>
                </div>

                <!-- Numéro de téléphone -->
                <div class="input-group col-lg-12 mb-4">
                    <div class="ml-2">
                        <label for="updatephoneNumber">Numéro de contact</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-phone-square text-muted"></i>
                            </span>
                        </div>
                        <input id="updatephoneNumber" type="tel" name="contactno" pattern="^(05|06|07)[0-9]{8}$"
                        placeholder="Téléphone" class="form-control bg-white border-md border-left-0 pl-3" required>
                    </div>
                </div>

                <!-- Genre -->
                <div class="input-group col-lg-12 mb-4">
                    <div class="ml-2">
                        <label for="updategender">Sexe</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fa fa-venus-mars text-muted"></i>
                            </span>
                        </div>
                        <select id="updategender" name="gender" class="form-control custom-select bg-white border-left-0 border-md" required>
                            <option value="">Choisissez votre sexe</option>
                            <option value="male">Homme</option>
                            <option value="female">Femme</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Bouton de sauvegarde -->
            <div class="form-group col-lg-6 mx-auto mb-0">
                <button id="updateUser" type="submit" class="btn btn-primary btn-block py-2" name="updateUser">
                    <span class="font-weight-bold">Enregistrer les modifications</span>
                </button>
            </div>
        </form>
    </div>

    <!-- Formulaire de changement de mot de passe -->
    <div class="col-9">
        <div class="passwordMessage mt-4"></div>
        <h5 class="mb-4 mt-5 text-center">Changer le mot de passe</h5>
        <form id="change_password" autocomplete="off">
            <input type="hidden" id="userId" name="change_password" value="<?php echo $_SESSION['loggedUserId']; ?>">

            <!-- Ancien mot de passe -->
            <div class="input-group col-lg-12 mb-4">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-lock text-muted"></i>
                    </span>
                </div>
                <input id="oldPassword" type="password" name="oldPassword" placeholder="Ancien mot de passe" class="form-control bg-white border-left-0 border-md" required>
            </div>

            <!-- Nouveau mot de passe -->
            <div class="input-group col-lg-12 mb-4">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-lock text-muted"></i>
                    </span>
                </div>
                <input id="newPassword" type="password" name="newPassword" placeholder="Nouveau mot de passe" class="form-control bg-white border-left-0 border-md" required>
            </div>

            <!-- Bouton de validation -->
            <div class="form-group col-lg-6 mx-auto mb-0">
                <button id="changePassword" type="submit" class="btn btn-primary btn-block py-2" name="changePassword">
                    <span class="font-weight-bold">Changer le mot de passe</span>
                </button>
            </div>
        </form>
    </div>
</div>
<!-- Fin du contenu -->

<script src="js/account.js" type="text/javascript"></script>

<?php include("include/footer.php"); ?>
