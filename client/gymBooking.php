<?php
 
 include('include/header.php');
 include('../include/dbConnect.php');
 
 ?>
<!-- Navbar-->
<?php

if(!isset($_SESSION['loggedUserId'])) {
  header('Location:../login.php');
 }
 

$gymTypeId = $_POST['gymTypeId'];
$query_selectgym  = "select * from gym_type where gymTypeId = '$gymTypeId'";
$result = mysqli_query($con,$query_selectgym);
while($row = mysqli_fetch_assoc($result)){


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de Gym</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
        .container { margin-top: 5rem; }
        .form-control, .form-select { border-radius: 0.25rem; }
        .btn-primary { background-color: #007bff; border: none; transition: 0.3s; }
        .btn-primary:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <div class="row align-items-center my-5">
            <div class="col-md-5 text-center">
                <img src="../assets/picture/icons/thumbs-up.png" alt="" class="img-fluid mb-3">
                <h1 class="display-4 text-primary">Réservez Votre gymType Gym</h1>
                <p class="lead text-muted">Sélectionnez un plan et commencez votre entraînement dès aujourd'hui !</p>
            </div>
                        <!-- Formulaire de réservation -->

            <div class="col-md-7 col-lg-6 ml-auto">
                <form action="client_functions.php" method="POST" class="shadow p-4 rounded bg-light">
                    <h2 class="text-center mb-4 text-primary">Faites Votre Réservation de l'gymType gym</h2>
                    <?php if (isset($_GET["error"])): ?>
                        <div class="alert alert-danger text-center"><?php echo $_GET["error"]; ?></div>
                    <?php endif; ?>
                    <input type="hidden" name="gymTypeId" value="<?php echo $gymTypeId; ?>">

                                        <!-- Type de gymType -->

                    <div class="form-group mb-4">
                        <label class="form-label text-secondary">Type d'gymType</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white border-end-0"><i class="fas fa-door-open"></i></span>
                            <input id="gymType" type="text" name="gymType" value="<?php echo $row['gym_type']; ?>" class="form-control border-start-0" readonly>

                        </div>
                        <select id="gymType" name="gymType" class="form-select" required>
                            <option value="" disabled selected>Choisissez un gymType</option>
                            <?php foreach ($plans as $plan): ?>
                                <option value="<?php echo $plan['Nom']; ?>" data-price="<?php echo $plan['Prix']; ?>">
                                    <?php echo $plan['Nom'] . ' - ' . number_format($plan['Prix'], 2) . ' DA'; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="form-group mb-4">
                        <label class="form-label text-secondary">Date de Début</label>
                        <input id="date_debut" type="date" name="date_debut" class="form-control" required>
                    </div>
                    
                    <div class="form-group mb-4">
                        <label class="form-label text-secondary">Durée (Mois)</label>
                        <input id="duree" type="number" name="duree" min="1" class="form-control" required>
                    </div>
                    
                    <div class="form-group mb-4">
                        <label class="form-label text-secondary">Coût Total en DA</label>
                        <input id="totalCost" type="text" name="prix" class="form-control" readonly>
                    </div>
                    
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-lg w-100" name="reserver">
                            Réserver Maintenant
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php          }
                    
                    ?>
    <script>
        document.getElementById('duree').addEventListener('input', function() {
            var plan = document.getElementById('gym_type');
            var price = parseFloat(plan.options[plan.selectedIndex].getAttribute('data-price'));
            var months = parseInt(this.value);
            var total = months * price;
            document.getElementById('totalCost').value = total.toFixed(2);
        });
    </script>
</body>
</html>
<?php include('include/footer.php'); ?>
