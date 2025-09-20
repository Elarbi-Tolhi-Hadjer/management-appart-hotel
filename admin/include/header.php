<?php include_once('../include/functions.php');
include('../include/general.php');
?>
<!doctype html>
<html lang="fr">
  <head>
  	<title>Panneau d'administration - <?php echo $general_setting['Name'] ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Feuilles de style -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Polices -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/adminPanel.css">
    <link rel="stylesheet" href="../assets/css/adminStyle.css">
    <link rel="stylesheet" href="../assets/css/form_style.css">
    <link rel="stylesheet" href="../assets/css/gallery.css">
    <link rel="stylesheet" href="../assets/css/booking_card.css">

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/dt-1.11.2/datatables.min.css"/>
  </head>
  <body>
		
	<div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar" class="navbar-dark bg-dark">
			<div class="custom-menu">
				<button type="button" id="sidebarCollapse" class="btn btn-dark">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Afficher/Masquer le menu</span>
	        </button>
      </div>

			<div class="p-4 pt-5">
		  		<h1><a href="index.html" class="logo d-flex align-items-center">
            <i class="fas fa-hotel me-2"></i>
            <?php echo $general_setting['Name'] ?>
          </a></h1>
	        <ul class="list-unstyled components mb-5" id="nav">
				<li class="nav-item">
					<a class="tab" href="dashboard.php">
            <i class="fas fa-tachometer-alt me-2"></i>Tableau de bord
          </a>
				</li>
				<li class="nav-item">
					<a class="tab" href="gallery.php">
            <i class="fas fa-images me-2"></i>Galerie
          </a>
				</li>
				<li class="nav-item">
					<a class="tab" href="user.php">
            <i class="fas fa-users me-2"></i>Utilisateurs
          </a>
				</li>
	          <li>
	            <a href="#roomSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-bed me-2"></i>Appartements
              </a>
	            <ul class="collapse list-unstyled" id="roomSubmenu">
                <li class="nav-item">
                    <a class="tab" href="roomType.php">
                      <i class="fas fa-list-alt me-2"></i>Types d'appartements
                    </a>
                </li>
                <li class="nav-item">
                    <a class="tab" href="room.php">
                      <i class="fas fa-door-open me-2"></i>Appartements
                    </a>
                </li>
                <li class="nav-item">
                    <a class="tab" href="roomBooking.php">
                      <i class="fas fa-calendar-check me-2"></i>Réservations d'appartements
                    </a>
                </li>
	            </ul>
	          </li>
			      <li>
	            <a href="#eventSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-calendar-alt me-2"></i>Événements
              </a>
	            <ul class="collapse list-unstyled" id="eventSubmenu">
                <li class="nav-item">
                    <a class="tab" href="eventType.php">
                      <i class="fas fa-tags me-2"></i>Types d'événements
                    </a>
                </li>
                <li class="nav-item">
                    <a class="tab" href="event.php">
                      <i class="fas fa-place-of-worship me-2"></i>Salles d'événements
                    </a>
                </li>
                <li class="nav-item">
                    <a class="tab" href="eventBooking.php">
                      <i class="fas fa-ticket-alt me-2"></i>Réservations d'événements
                    </a>
                </li>
	            </ul>
	          </li>
	          <li class="nav-item">
              <a href="#paymentSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-money-bill-wave me-2"></i>Paiements
              </a>
              <ul class="collapse list-unstyled" id="paymentSubmenu">
                <li class="nav-item">
                    <a class="tab" href="roomPayment.php">
                      <i class="fas fa-bed me-2"></i>Paiements des appartements
                    </a>
                </li>
                <li class="nav-item">
                    <a class="tab" href="eventPayment.php">
                      <i class="fas fa-calendar-day me-2"></i>Paiements des événements
                    </a>
                </li>
              </ul>
	          </li>
			      <li class="nav-item">
              <a class="tab" href="contact.php">
                <i class="fas fa-envelope me-2"></i>Contacts
              </a>
	          </li>
			      <li class="nav-item">
              <a class="tab" href="staff_mang.php">
                <i class="fas fa-user-tie me-2"></i>Employés
              </a>
	          </li>
			      <li class="nav-item">
              <a class="tab" href="statistics.php">
                <i class="fas fa-chart-bar me-2"></i>Statistiques
              </a>
	          </li>
			      <li class="nav-item">
              <a class="tab" href="complain.php">
                <i class="fas fa-exclamation-circle me-2"></i>Réclamations
              </a>
	          </li>
			      <li class="nav-item">
              <a class="tab" href="account.php">
                <i class="fas fa-user-cog me-2"></i>Compte
              </a>
	          </li> 
			      <li class="nav-item">
              <a class="tab" href="general_setting.php">
                <i class="fas fa-cog me-2"></i>Paramètres
              </a>
	          </li>  
			      <li class="nav-item">
              <a class="tab" href="../destroy.php">
                <i class="fas fa-sign-out-alt me-2"></i>Déconnexion
              </a>
	          </li>
	        </ul>

	      <div class="footer">
	      	<p class="text-muted small">
            &copy; <?php echo date('Y'); ?> <?php echo $general_setting['Name'] ?>
          </p>
	      </div>
	    </div>
    </nav>

    <!-- Scripts -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/dt-1.11.2/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
