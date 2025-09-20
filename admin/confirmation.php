<?php
// Start session
session_start();

// Check for success message
$successMessage = isset($_SESSION['success']) ? $_SESSION['success'] : "";
$errorMessage = isset($_SESSION['error']) ? $_SESSION['error'] : "";

// Clear session messages
unset($_SESSION['success']);
unset($_SESSION['error']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de Réservation</title>
    <link rel="stylesheet" href="styles.css"> <!-- Add your CSS file -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="confirmation-container">
        <div class="confirmation-box">
            <?php if ($successMessage): ?>
                <i class="fas fa-check-circle success-icon"></i>
                <h2>Réservation Confirmée !</h2>
                <p><?php echo $successMessage; ?></p>
            <?php elseif ($errorMessage): ?>
                <i class="fas fa-times-circle error-icon"></i>
                <h2>Erreur</h2>
                <p><?php echo $errorMessage; ?></p>
            <?php endif; ?>
            <a href="dashboard.php" class="btn">Retour à l'accueil</a>
        </div>
    </div>
</body>
</html>
