
<?php include("include/header.php"); 
if(!isset($_SESSION['loggedUserId'])) {
  echo "<script> window.location.href = '../login.php';</script>";
}

include("include/db_connection.php");
?>

<div class="container-fluid">
    <div class="row">
        <!-- Main Content Area -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Gestion des Réclamations</h1>
            </div>

            <!-- Complaint Submission Card -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Faire une réclamation</h5>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['error'])) {
                        echo '<div class="alert alert-danger d-flex align-items-center">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                Erreur lors de l\'envoi de la réclamation !
                              </div>';
                    }
                    if (isset($_GET['success'])) {
                        echo '<div class="alert alert-success d-flex align-items-center">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                Réclamation ajoutée avec succès !
                              </div>';
                    }
                    ?>
                    <form role="form" data-bs-toggle="validator" method="post" action="ajax.php">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="complainant_name" class="form-label">Nom du plaignant</label>
                                <input type="text" class="form-control" id="complainant_name" placeholder="Nom du plaignant" name="complainant_name" required>
                                <div class="invalid-feedback">Veuillez fournir un nom valide.</div>
                            </div>

                            <div class="col-md-6">
                                <label for="complaint_type" class="form-label">Type de réclamation</label>
                                <select class="form-select" id="complaint_type" name="complaint_type" required>
                                    <option value="" selected disabled>Choisir un type</option>
                                    <option value="Technique">Technique</option>
                                    <option value="Service">Service</option>
                                    <option value="Facturation">Facturation</option>
                                    <option value="Autre">Autre</option>
                                </select>
                                <div class="invalid-feedback">Veuillez sélectionner un type.</div>
                            </div>

                            <div class="col-12">
                                <label for="complaint" class="form-label">Description</label>
                                <textarea class="form-control" id="complaint" name="complaint" rows="3" placeholder="Décrivez votre réclamation en détail..." required></textarea>
                                <div class="invalid-feedback">Veuillez décrire votre réclamation.</div>
                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-success px-4" name="createComplaint">
                                    <i class="bi bi-send-fill me-2"></i>Soumettre
                                </button>
                                <button type="reset" class="btn btn-outline-secondary ms-2">
                                    <i class="bi bi-arrow-counterclockwise me-2"></i>Réinitialiser
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Complaint Management Card -->
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Liste des Réclamations</h5>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['resolveError'])) {
                        echo '<div class="alert alert-danger d-flex align-items-center">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                Erreur lors de la résolution !
                              </div>';
                    }
                    if (isset($_GET['resolveSuccess'])) {
                        echo '<div class="alert alert-success d-flex align-items-center">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                Réclamation résolue avec succès !
                              </div>';
                    }
                    ?>
                    
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle" id="complaintsTable">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Plaignant</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Statut</th>
                                    <th>Budget</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $complaint_query = "SELECT * FROM complaint ORDER BY created_at DESC";
                                $complaint_result = mysqli_query($connection, $complaint_query);
                                
                                if (mysqli_num_rows($complaint_result) > 0) {
                                    while ($complaint = mysqli_fetch_assoc($complaint_result)) {
                                        echo '<tr>
                                                <td>'.$complaint['id'].'</td>
                                                <td>'.htmlspecialchars($complaint['complainant_name']).'</td>
                                                <td><span class="badge bg-info">'.htmlspecialchars($complaint['complaint_type']).'</span></td>
                                                <td class="text-truncate" style="max-width: 200px;" title="'.htmlspecialchars($complaint['complaint']).'">
                                                    '.htmlspecialchars($complaint['complaint']).'
                                                </td>
                                                <td>'.date('d/m/Y', strtotime($complaint['created_at'])).'</td>
                                                <td>';
                                        
                                        if(!$complaint['resolve_status']) {
                                            echo '<span class="badge bg-warning">En attente</span>';
                                        } else {
                                            echo '<span class="badge bg-success">Résolu le '.date('d/m/Y', strtotime($complaint['resolve_date'])).'</span>';
                                        }
                                        
                                        echo '</td>
                                              <td>'.($complaint['budget'] ? $complaint['budget'].' DA' : '-').'</td>
                                              <td>';
                                        
                                        if(!$complaint['resolve_status']) {
                                            echo '<button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" 
                                                    data-bs-target="#complaintModal" data-id="'.$complaint['id'].'">
                                                    <i class="bi bi-check-lg"></i> Résoudre
                                                </button>';
                                        } else {
                                            echo '<span class="text-muted">Terminé</span>';
                                        }
                                        
                                        echo '</td>
                                            </tr>';
                                    }
                                } else {
                                    echo '<tr><td colspan="8" class="text-center text-muted py-4">Aucune réclamation trouvée</td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<!-- Resolution Modal -->
<div class="modal fade" id="complaintModal" tabindex="-1" aria-labelledby="complaintModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="complaintModalLabel">Résolution de réclamation</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form data-bs-toggle="validator" method="post" action="ajax.php">
                    <div class="mb-3">
                        <label for="resolutionBudget" class="form-label">Budget alloué (DA)</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="resolutionBudget" name="budget" 
                                   placeholder="Montant" min="0" step="0.01" required>
                            <span class="input-group-text">DA</span>
                        </div>
                        <div class="invalid-feedback">Veuillez entrer un montant valide.</div>
                    </div>
                    <input type="hidden" id="complaint_id" name="complaint_id" value="">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary" name="resolve_complaint">
                            <i class="bi bi-check-circle me-1"></i> Confirmer la résolution
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Initialize DataTable and Modal -->
<script>
$(document).ready(function() {
    // Initialize DataTable
    $('#complaintsTable').DataTable({
        responsive: true,
        language: {
            url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/fr-FR.json'
        }
    });
    
    // Handle modal opening
    $('#complaintModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var complaintId = button.data('id');
        var modal = $(this);
        modal.find('#complaint_id').val(complaintId);
    });
});
</script>

<?php include("include/footer.php"); ?>