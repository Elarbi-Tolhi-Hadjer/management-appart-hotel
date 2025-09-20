<?php include("include/header.php");
if(!isset($_SESSION['loggedUserId'])) {
  echo "<script> window.location.href = '../login.php';</script>";
}
?>
<!-- Contenu de la page -->
<div id="content" class="p-4 p-md-5 pt-5">

  <!-- Section d'en-tête -->
  <div class="dashboard-header mb-5">
    <h2 class="mb-2">Tableau de bord</h2>
    <p class="text-muted">Bienvenue ! Voici un aperçu de votre activité aujourd'hui.</p>
  </div>

  <!-- Cartes récapitulatives -->
  <div class="row mb-4">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card summary-card bg-primary text-white shadow-sm">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <i class="fa fa-bed fa-2x mr-3"></i>
            <div>
              <div class="small">Chambres totales</div>
              <div class="h5"><?php include 'counters/room-count.php'?></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card summary-card bg-success text-white shadow-sm">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <i class="fa fa-bookmark fa-2x mr-3"></i>
            <div>
              <div class="small">Réservations</div>
              <div class="h5"><?php include 'counters/reserve-count.php'?></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card summary-card bg-warning text-white shadow-sm">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <i class="fa fa-users fa-2x mr-3"></i>
            <div>
              <div class="small">Membres du personnel</div>
              <div class="h5"><?php include 'counters/staff-count.php'?></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card summary-card bg-danger text-white shadow-sm">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <i class="fa fa-comments fa-2x mr-3"></i>
            <div>
              <div class="small">Réclamations</div>
              <div class="h5"><?php include 'counters/complaints-count.php'?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ligne de contenu principal -->
  <div class="row">
    <!-- Section graphique -->
    <div class="col-lg-8 mb-4">
      <div class="card shadow-sm">
        <div class="card-header bg-white">
          <h6 class="m-0 font-weight-bold">Tendances des réservations</h6>
        </div>
        <div class="card-body">
          <canvas id="myChart" height="250"></canvas>
        </div>
      </div>
    </div>

    <!-- Statistiques rapides -->
    <div class="col-lg-4 mb-4">
      <div class="card shadow-sm">
        <div class="card-header bg-white">
          <h6 class="m-0 font-weight-bold">Statistiques rapides</h6>
        </div>
        <div class="card-body">
          <div class="stat-item mb-3">
            <div class="d-flex justify-content-between">
              <span>Chambres disponibles</span>
              <strong><?php include 'counters/avrooms-count.php'?></strong>
            </div>
            <div class="progress mt-1" style="height: 5px;">
              <div class="progress-bar bg-success" style="width: 75%"></div>
            </div>
          </div>
          
          <div class="stat-item mb-3">
            <div class="d-flex justify-content-between">
              <span>Enregistrés</span>
              <strong><?php include 'counters/checkedin-count.php'?></strong>
            </div>
            <div class="progress mt-1" style="height: 5px;">
              <div class="progress-bar bg-info" style="width: 45%"></div>
            </div>
          </div>
          
          <div class="stat-item mb-3">
            <div class="d-flex justify-content-between">
              <span>Paiements en attente</span>
              <strong><?php include 'counters/pendingpayment.php'?></strong>
            </div>
            <div class="progress mt-1" style="height: 5px;">
              <div class="progress-bar bg-warning" style="width: 30%"></div>
            </div>
          </div>
          
          <div class="stat-item">
            <div class="d-flex justify-content-between">
              <span>Revenus totaux</span>
              <strong><?php include 'counters/income-count.php'?></strong>
            </div>
            <div class="progress mt-1" style="height: 5px;">
              <div class="progress-bar bg-primary" style="width: 85%"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Sections sur le statut des réservations -->
  <div class="row">
    <div class="col-md-6 mb-4">
      <div class="card shadow-sm">
        <div class="card-header bg-white">
          <h6 class="m-0 font-weight-bold">Statut des réservations de chambres <span class="text-muted">(Année en cours)</span></h6>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="metric-item mb-3">
                <span class="text-muted">Réservations totales</span>
                <h5 id="room_total_booking">...</h5>
              </div>
              <div class="metric-item mb-3">
                <span class="text-muted">Réservations rejetées</span>
                <h5 id="room_rejeted_booking">...</h5>
              </div>
              <div class="metric-item">
                <span class="text-muted">Réservations annulées</span>
                <h5 id="room_cancelled_booking">...</h5>
              </div>
            </div>
            <div class="col-md-6">
              <div class="metric-item mb-3">
                <span class="text-muted">Réservations confirmées</span>
                <h5 id="room_booked_booking">...</h5>
              </div>
              <div class="metric-item mb-3">
                <span class="text-muted">Réservations payées</span>
                <h5 id="room_paid_booking">...</h5>
              </div>
              <div class="metric-item">
                <span class="text-muted">Départs</span>
                <h5 id="room_checkedout_booking">...</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 mb-4">
      <div class="card shadow-sm">
        <div class="card-header bg-white">
          <h6 class="m-0 font-weight-bold">Statut des réservations d'événements <span class="text-muted">(Année en cours)</span></h6>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="metric-item mb-3">
                <span class="text-muted">Réservations totales</span>
                <h5 id="event_total_booking">...</h5>
              </div>
              <div class="metric-item mb-3">
                <span class="text-muted">Réservations rejetées</span>
                <h5 id="event_rejeted_booking">...</h5>
              </div>
              <div class="metric-item">
                <span class="text-muted">Réservations annulées</span>
                <h5 id="event_cancelled_booking">...</h5>
              </div>
            </div>
            <div class="col-md-6">
              <div class="metric-item mb-3">
                <span class="text-muted">Réservations confirmées</span>
                <h5 id="event_booked_booking">...</h5>
              </div>
              <div class="metric-item mb-3">
                <span class="text-muted">Réservations payées</span>
                <h5 id="event_paid_booking">...</h5>
              </div>
              <div class="metric-item">
                <span class="text-muted">Événements terminés</span>
                <h5 id="event_checkedout_booking">...</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Section détails -->
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm">
        <div class="card-header bg-white">
          <h6 class="m-0 font-weight-bold">Détails des chambres</h6>
        </div>
        <div class="card-body">
          <div class="metric-item mb-3">
            <span class="text-muted">Types de chambres disponibles</span>
            <h5 id="room_type">...</h5>
          </div>
          <div class="metric-item mb-3">
            <span class="text-muted">Chambres totales</span>
            <h5 id="rooms">...</h5>
          </div>
          <div class="metric-item">
            <span class="text-muted">Chambres disponibles</span>
            <h5 id="avail_room">...</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card shadow-sm">
        <div class="card-header bg-white">
          <h6 class="m-0 font-weight-bold">Détails des événements</h6>
        </div>
        <div class="card-body">
          <div class="metric-item mb-3">
            <span class="text-muted">Types d'événements disponibles</span>
            <h5 id="event_type">...</h5>
          </div>
          <div class="metric-item mb-3">
            <span class="text-muted">Salles totales</span>
            <h5 id="events">...</h5>
          </div>
          <div class="metric-item">
            <span class="text-muted">Salles disponibles</span>
            <h5 id="avail_event">...</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card shadow-sm">
        <div class="card-header bg-white">
          <h6 class="m-0 font-weight-bold">Résumé financier</h6>
        </div>
        <div class="card-body">
          <div class="metric-item mb-3">
            <span class="text-muted">Total réservations chambres</span>
            <h5 id="room_booking">...</h5>
          </div>
          <div class="metric-item mb-3">
            <span class="text-muted">Total réservations événements</span>
            <h5 id="event_booking">...</h5>
          </div>
          <div class="metric-item">
            <span class="text-muted">Montant total</span>
            <h5 id="total_amount">...</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .summary-card {
    border-radius: 10px;
    transition: transform 0.3s;
    border: none;
  }
  
  .summary-card:hover {
    transform: translateY(-5px);
  }
  
  .card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.1);
  }
  
  .card-header {
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    background-color: #f8f9fc;
    padding: 1rem 1.35rem;
    border-radius: 10px 10px 0 0 !important;
  }
  
  .metric-item {
    padding: 0.5rem 0;
  }
  
  .metric-item h5 {
    font-weight: 600;
    margin-top: 0.25rem;
  }
</style>


<!-- CDN pour Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="js/dashboard_function.js"></script>