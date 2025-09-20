<?php 
include("include/header.php"); 
if (!isset($_SESSION['loggedUserId'])) {
    echo "<script> window.location.href = '../login.php';</script>";
}
?>
<?php
include("include/db_connection.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion du Personnel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        
        .main-content {
            padding: 20px;
            background-color: #f8f9fa;
        }
        .page-header {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .card {
            border: none;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        .card-header {
            background-color: #fff;
            border-bottom: 1px solid rgba(0,0,0,.125);
            padding: 15px 20px;
        }
        .table th {
            border-top: none;
            font-weight: 600;
        }
        .avatar-sm {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .avatar-title {
            color: #fff;
            font-weight: bold;
        }
        .badge-light {
            background-color: #f8f9fa;
            color: #495057;
        }
        .btn-group .btn {
            margin-right: 5px;
            border-radius: 50% !important;
        }
        .btn-group .btn:last-child {
            margin-right: 0;
        }
        .modal-header {
            background-color: #4e73df;
            color: white;
        }
        .back-link {
            text-align: center;
            margin-top: 20px;
            color: #6c757d;
            font-size: 14px;
        }
     /* Override du container-fluid */
.container-fluid {
    --default-padding: 15px;
    width: 100%;
    padding-right: var(--default-padding);
    padding-left: var(--default-padding);
    margin-right: auto;
    margin-left: auto;
}

/* Ajustements pour différentes tailles d'écran */
@media (min-width: 576px) {
    .container-fluid {
        max-width: 540px;
    }
}

@media (min-width: 768px) {
    .container-fluid {
        max-width: 720px;
    }
}

@media (min-width: 992px) {
    .container-fluid {
        max-width: 960px;
    }
}

@media (min-width: 1200px) {
    .container-fluid {
        max-width: 1140px;
    }
}

/* Version full-width si nécessaire */
.container-fluid.full-width {
    max-width: 100%;
}
/* Style de base */
.row {
    --gutter-x: 1.5rem;
    --gutter-y: 1rem;
    
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(-1 * var(--gutter-y));
    margin-right: calc(-0.5 * var(--gutter-x));
    margin-left: calc(-0.5 * var(--gutter-x));
}

.row > * {
    flex-shrink: 0;
    width: 100%;
    max-width: 100%;
    padding-right: calc(var(--gutter-x) * 0.5);
    padding-left: calc(var(--gutter-x) * 0.5);
    margin-top: var(--gutter-y);
}

/* Styles spécifiques */
.breadcrumb-row {
    background-color: #f8f9fa;
    border-bottom: 1px solid #eaeaea;
    padding: 0.75rem 1rem;
}

.table-row {
    margin: 0;
    padding: 0;
}

/* Responsive */
@media (max-width: 768px) {
    .row {
        --gutter-x: 1rem;
        --gutter-y: 0.5rem;
    }
    
    .breadcrumb-row {
        padding: 0.5rem;
    }
}
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main-content">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        
                        <h1 class="page-title">Gestion des Employés</h1>
                    </div>
                    <div class="col-auto">
                        <a href="index.php?add_emp" class="btn btn-primary">
                            <i class="fas fa-user-plus"></i> Ajouter un employé
                        </a>
                    </div>
                </div>
            </div>

            <?php if (isset($_GET['error'])): ?>
                <div class="alert alert-danger alert-dismissible fade show">
                    <i class="fas fa-exclamation-circle"></i> Erreur lors du changement de quart !
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            <?php endif; ?>
            
            <?php if (isset($_GET['success'])): ?>
                <div class="alert alert-success alert-dismissible fade show">
                    <i class="fas fa-check-circle"></i> Quart changé avec succès !
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            <?php endif; ?>

            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Détails des employés</h5>
                        <div class="card-actions">
                            <button class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Actualiser">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="employees">
                            <thead class="thead-light">
                                <tr>
                                    <th>N°</th>
                                    <th>Employé</th>
                                    <th>Poste</th>
                                    <th>Quart</th>
                                    <th>Date d'embauche</th>
                                    <th>Salaire</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $staff_query = "SELECT * FROM staff NATURAL JOIN staff_type NATURAL JOIN shift";
                                $staff_result = mysqli_query($connection, $staff_query);

                                if (mysqli_num_rows($staff_result) > 0) {
                                    while ($staff = mysqli_fetch_assoc($staff_result)) { ?>
                                        <tr>
                                            <td><?php echo $staff['emp_id']; ?></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm mr-3 bg-primary rounded-circle">
                                                        <span class="avatar-title">
                                                            <?php echo substr($staff['emp_name'], 0, 1); ?>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0"><?php echo $staff['emp_name']; ?></h6>
                                                        <small class="text-muted">ID: <?php echo $staff['id_card_no']; ?></small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo $staff['staff_type']; ?></td>
                                            <td>
                                                <span class="badge badge-light">
                                                    <?php echo $staff['shift'] . ' - ' . $staff['shift_timing']; ?>
                                                </span>
                                            </td>
                                            <td><?php echo date('j M, Y', strtotime($staff['joining_date'])); ?></td>
                                            <td><?php echo $staff['salary']; ?> DA</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button class="btn btn-sm btn-outline-warning" data-toggle="modal" 
                                                            data-target="#changeShift" data-id="<?php echo $staff['emp_id']; ?>"
                                                            title="Changer de quart">
                                                        <i class="fas fa-exchange-alt"></i>
                                                    </button>
                                                    
                                                    <button class="btn btn-sm btn-outline-info" data-toggle="modal"
                                                            data-target="#empDetail<?php echo $staff['emp_id']; ?>"
                                                            title="Modifier">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </button>
                                                    
                                                    <a href='functionmis.php?empid=<?php echo $staff['emp_id']; ?>'
                                                       class="btn btn-sm btn-outline-danger" 
                                                       onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet employé ?')"
                                                       title="Supprimer">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    
                                                    <a href='index.php?emp_history&empid=<?php echo $staff['emp_id']; ?>'
                                                       class="btn btn-sm btn-outline-success" 
                                                       title="Historique">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</div>

<!-- Modals -->
<?php
$staff_query = "SELECT * FROM staff NATURAL JOIN staff_type NATURAL JOIN shift";
$staff_result = mysqli_query($connection, $staff_query);

if (mysqli_num_rows($staff_result) > 0) {
    while ($staffGlobal = mysqli_fetch_assoc($staff_result)) {
        $fullname = explode(" ", $staffGlobal['emp_name']);
        ?>

        <!-- Employee Detail Modal -->
        <div id="empDetail<?php echo $staffGlobal['emp_id']; ?>" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title">Modifier les détails de l'employé</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form data-toggle="validator" role="form" action="functionmis.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Poste</label>
                                        <select class="form-control" name="staff_type_id" required>
                                            <option selected disabled>Sélectionnez un type de poste</option>
                                            <?php
                                            $query = "SELECT * FROM staff_type";
                                            $result = mysqli_query($connection, $query);
                                            while ($staff = mysqli_fetch_assoc($result)) {
                                                echo '<option value="' . $staff['staff_type_id'] . '" ' . 
                                                    (($staff['staff_type_id'] == $staffGlobal['staff_type_id']) ? 'selected' : '') . '>' . 
                                                    $staff['staff_type'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Quart</label>
                                        <select class="form-control" name="shift_id" required>
                                            <option selected disabled>Sélectionnez un quart</option>
                                            <?php
                                            $query = "SELECT * FROM shift";
                                            $result = mysqli_query($connection, $query);
                                            while ($shift = mysqli_fetch_assoc($result)) {
                                                echo '<option value="' . $shift['shift_id'] . '" ' . 
                                                    (($shift['shift_id'] == $staffGlobal['shift_id']) ? 'selected' : '') . '>' . 
                                                    $shift['shift'] . ' - ' . $shift['shift_timing'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <input type="hidden" value="<?php echo $staffGlobal['emp_id']; ?>" name="emp_id">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Prénom</label>
                                        <input type="text" value="<?php echo $fullname[0] ?? ''; ?>" 
                                               class="form-control" placeholder="Prénom" name="first_name" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" value="<?php echo $fullname[1] ?? ''; ?>" 
                                               class="form-control" placeholder="Nom" name="last_name" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Type de pièce d'identité</label>
                                        <select class="form-control" name="id_card_type" required>
                                            <option selected disabled>Sélectionnez un type de carte</option>
                                            <?php
                                            $query = "SELECT * FROM id_card_type";
                                            $result = mysqli_query($connection, $query);
                                            while ($id_card_type = mysqli_fetch_assoc($result)) {
                                                echo '<option value="' . $id_card_type['id_card_type_id'] . '" ' . 
                                                    (($id_card_type['id_card_type_id'] == $staffGlobal['id_card_type']) ? 'selected' : '') . '>' . 
                                                    $id_card_type['id_card_type'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Numéro de carte</label>
                                        <input type="text" class="form-control" placeholder="Numéro de carte"
                                               value="<?php echo $staffGlobal['id_card_no']; ?>" name="id_card_no" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Numéro de contact</label>
                                        <input type="tel" class="form-control" placeholder="Numéro de contact"
                                               value="<?php echo $staffGlobal['contact_no']; ?>" name="contact_no" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Salaire</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">DA</span>
                                            </div>
                                            <input type="number" class="form-control" placeholder="Salaire"
                                                   value="<?php echo $staffGlobal['salary']; ?>" name="salary" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Adresse</label>
                                        <textarea class="form-control" rows="2" name="address"><?php echo $staffGlobal['address']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php }
} ?>

<!-- Change Shift Modal -->
<div id="changeShift" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title">Changer le quart de travail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="ajax.php" method="post">
                    <div class="form-group">
                        <label>Sélectionnez un nouveau quart</label>
                        <select class="form-control" name="shift_id" required>
                            <option selected disabled>Sélectionnez un quart</option>
                            <?php
                            $query = "SELECT * FROM shift";
                            $result = mysqli_query($connection, $query);
                            while ($shift = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $shift['shift_id'] . '">' . 
                                    $shift['shift'] . ' - ' . $shift['shift_timing'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <input type="hidden" name="emp_id" id="getEmpId">
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-warning" name="change_shift">Mettre à jour</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
$(function () {
    // Initialize tooltips
    $('[data-toggle="tooltip"]').tooltip();
    
    // For the change shift modal
    $(document).on("click", "#change_shift", function () {
        var empId = $(this).data('id');
        $("#getEmpId").val(empId);
    });
    
    // Initialize DataTable if needed
    // $('#employees').DataTable();
});
</script>
</body>
</html>