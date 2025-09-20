<?php include("include/header.php"); 
if(!isset($_SESSION['loggedUserId'])) {
  echo "<script> window.location.href = '../login.php';</script>";
}
?>
<!-- Contenu de la page -->
<div id="content" class="p-4 p-md-5 pt-5">

<br>

<!-- Tableau pour l'affichage du contenu -->
<div class="container-fluid col-11" id="contentArea">
 <h4 class="mb-4 mt-5">Détails de l'entreprise</h4>

 <br>
 <div class="Message"></div>

<!-- Formulaire de mise à jour -->
<form id="gs_form" method="POST" action="admin_functions.php" enctype="multipart/form-data" autocomplete="off">

    <div class="row">
        <input type="hidden" id="gs_id" name="gs_id">

        <!-- Nom de l'entreprise -->
        <div class="input-group col-lg-6 mb-4">
            <div class="ml-2">
                <label for="companyName">Nom de l'entreprise</label>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-user text-muted"></i>
                    </span>
                </div>
                <input id="companyName" type="text" name="companyName" class="form-control bg-white border-left-0 border-md" required>
            </div>
        </div>

        <!-- Adresse ligne 1 -->
        <div class="input-group col-lg-6 mb-4">
            <div class="ml-2">
                <label for="address1">Adresse ligne 1</label>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-user text-muted"></i>
                    </span>
                </div>
                <input id="address1" type="text" name="address1" class="form-control bg-white border-left-0 border-md" required>
            </div>
        </div>  

        <!-- Adresse ligne 2 -->
        <div class="input-group col-lg-4 mb-4">
            <div class="ml-2">
                <label for="address2">Adresse ligne 2</label>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-user text-muted"></i>
                    </span>
                </div>
                <input id="address2" type="text" name="address2" class="form-control bg-white border-left-0 border-md" required>
            </div>
        </div>

        <!-- Ville -->
        <div class="input-group col-lg-4 mb-4">
            <div class="ml-2">
                <label for="city">Ville</label>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-user text-muted"></i>
                    </span>
                </div>
                <input id="city" type="text" name="city" class="form-control bg-white border-left-0 border-md" required>
            </div>
        </div>

        <!-- Wilaya -->
        <div class="input-group col-lg-4 mb-4">
            <div class="ml-2">
                <label for="state">Wilaya</label>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-user text-muted"></i>
                    </span>
                </div>
                <input id="state" type="text" name="state" class="form-control bg-white border-left-0 border-md" required>
            </div>
        </div>

        <!-- Pays -->
        <div class="input-group col-lg-3 mb-4">
            <div class="ml-2">
                <label for="country">Pays</label>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-user text-muted"></i>
                    </span>
                </div>
                <input id="country" type="text" name="country" class="form-control bg-white border-left-0 border-md" required>
            </div>
        </div>

        <!-- Code postal -->
        <div class="input-group col-lg-3 mb-4">
            <div class="ml-2">
                <label for="zip">Code postal</label>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-user text-muted"></i>
                    </span>
                </div>
                <input id="zip" type="text" name="zip" class="form-control bg-white border-left-0 border-md" required>
            </div>
        </div>

        <!-- Description -->
        <div class="input-group col-lg-6 mb-4">
            <div class="ml-2">
                <label for="description">Description</label>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-user text-muted"></i>
                    </span>
                </div>
                <input id="description" type="text" name="description" class="form-control bg-white border-left-0 border-md" required>
            </div>
        </div>

        <!-- Deuxième partie du formulaire -->
        <h4 class="mb-4 mt-5 ml-4">Coordonnées</h4>
        <br>

        <!-- Email -->
        <div class="input-group col-lg-12 mb-4">
            <div class="ml-2">
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-envelope text-muted"></i>
                    </span>
                </div>
                <input id="email" type="email" name="email" class="form-control bg-white border-left-0 border-md" required>
            </div>
        </div>

        <!-- Numéro de téléphone mobile -->
        <div class="input-group col-lg-6 mb-4">
            <div class="ml-2">
                <label for="phoneNumber">Numéro de mobile</label>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-phone-square text-muted"></i>
                    </span>
                </div>
                <input id="phoneNumber" type="tel" name="phoneNumber" pattern="^(05|06|07)[0-9]{8}$" 
                    class="form-control bg-white border-md border-left-0 pl-3" required>
            </div>
        </div>

        <!-- Numéro de téléphone fixe -->
        <div class="input-group col-lg-6 mb-4">
            <div class="ml-2">
                <label for="teleFixe">Numéro fixe</label>
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white px-4 border-md border-right-0">
                        <i class="fa fa-phone-square text-muted"></i>
                    </span>
                </div>
                <input id="teleFixe" type="tel" name="teleFixe"
                    pattern="(0[2-4][0-9]{7}|\+213[2-4][0-9]{7})"
                    class="form-control bg-white border-md border-left-0 pl-3"
                    placeholder="Ex : 034123456 ou +21334123456"
                    required>
            </div>
        </div>
    </div>

    <!-- Bouton -->
    <div class="form-group col-lg-6 mx-auto mb-0">
        <button id="updateUser" type="submit" class="btn btn-primary btn-block py-2" name="save">
            <span class="font-weight-bold">Enregistrer les modifications</span>
        </button>
    </div>

</form>
</div>
<!-- Fin du container -->

</div>
<script src="js/general_setting.js" type="text/javascript"></script>

<?php include("include/footer.php"); ?>
