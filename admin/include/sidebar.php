<?php
// include/sidebar.php
if (!isset($_SESSION['loggedUserId'])) {
    header("Location: ../login.php");
    exit();
}
?>

<!-- Sidebar avec style Bootstrap 5 -->
<div class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse" id="sidebarMenu" style="min-height: 100vh;">
    <div class="position-sticky pt-3">
        <!-- Logo/Brand -->
        <div class="text-center mb-4">
            <h4 class="text-white">HOTEL MANAGEMENT</h4>
            <hr class="bg-secondary">
        </div>

        <!-- Menu principal -->
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-white" href="index.php">
                    <i class="bi bi-speedometer2 me-2"></i>Dashboard
                </a>
            </li>
            
            <!-- Section Gestion -->
            <li class="nav-item mt-3">
                <small class="text-muted ms-3">GESTION</small>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-white" href="complain.php">
                    <i class="bi bi-megaphone me-2"></i>Réclamations
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="reservations.php">
                    <i class="bi bi-calendar-check me-2"></i>Réservations
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="clients.php">
                    <i class="bi bi-people me-2"></i>Clients
                </a>
            </li>
            
            <!-- Section Administration -->
            <li class="nav-item mt-3">
                <small class="text-muted ms-3">ADMINISTRATION</small>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="chambres.php">
                    <i class="bi bi-door-closed me-2"></i>Chambres
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="utilisateurs.php">
                    <i class="bi bi-person-badge me-2"></i>Utilisateurs
                </a>
            </li>
            
            <!-- Déconnexion -->
            <li class="nav-item mt-4 pt-3 border-top">
                <a class="nav-link text-danger" href="../logout.php">
                    <i class="bi bi-box-arrow-right me-2"></i>Déconnexion
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- Toggle button pour mobile -->
<button class="navbar-toggler position-fixed d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" 
        style="top: 10px; left: 10px; z-index: 1000;">
    <span class="navbar-toggler-icon"></span>
</button>

<style>
    .sidebar {
        transition: all 0.3s;
    }
    .nav-link {
        border-radius: 5px;
        margin: 2px 5px;
        transition: all 0.2s;
    }
    .nav-link:hover {
        background-color: rgba(255,255,255,0.1);
    }
    .nav-link.active {
        background-color: #0d6efd;
    }
    .sidebar.collapse.show {
        position: fixed;
        z-index: 999;
        width: 250px;
        height: 100vh;
    }
</style>