<?php
include("db.php");

if (!isset($_SESSION['loggedUserId'])) {
    header("Location: ../login.php");
    exit();
}

include("include/db_connection.php");?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Historique de l’employé</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Historique de l’employé</div>
                <div class="panel-body">
                    <?php
                    if(isset($_GET['empid'])){
                        $emp_id = $_GET['empid'];
                    }else{
                        header('Location:404.php');
                    }
                    $emp = "SELECT * FROM staff WHERE emp_id='$emp_id'";
                    $emp_result = mysqli_query($connection,$emp);
                    $employee = mysqli_fetch_assoc($emp_result);
                    ?>
                    <p><b>Nom de l’employé : </b> <?php echo $employee['emp_name']; ?></p>
                    <p><b>Salaire de l’employé : </b> <?php echo $employee['salary'].'/-'; ?></p>
                    <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%" id="rooms">
                        <thead>
                        <tr>
                            <th>N°</th>
                            <th>Poste</th>
                            <th>De</th>
                            <th>À</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $staff_query = "SELECT * FROM emp_history NATURAL JOIN shift WHERE emp_id = '$emp_id' ORDER BY created_at DESC";
                        $staff_result = mysqli_query($connection, $staff_query);

                        if (mysqli_num_rows($staff_result) > 0) {
                            $num = 0;
                            while ($staff = mysqli_fetch_assoc($staff_result)) {
                                $num++;
                                ?>
                                <tr>
                                    <td><?php echo $num; ?></td>
                                    <td><?php echo $staff['shift'].' - '.$staff['shift_timing']; ?></td>
                                    <td><?php echo date('j M Y', strtotime($staff['from_date'])); ?></td>
                                    <td>
                                        <?php
                                        if ($staff['to_date'] == NULL){
                                            echo "<div class='color-blue'>Travaille actuellement</div>";
                                        }else{
                                            echo date('j M Y', strtotime($staff['to_date']));
                                        }?>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div><!--/.main-->

<?php
$staff_query = "SELECT * FROM staff  NATURAL JOIN staff_type NATURAL JOIN shift";
$staff_result = mysqli_query($connection, $staff_query);

if (mysqli_num_rows($staff_result) > 0) {
    while ($staffGlobal = mysqli_fetch_assoc($staff_result)) {
        $fullname = explode(" ", $staffGlobal['emp_name']);
        ?>

        <!-- Détails de l’employé -->
        <div id="empDetail<?php echo $staffGlobal['emp_id']; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Détails de l’employé</h4>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Détails de l’employé :</div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" role="form" action="functionmis.php" method="post">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label>Type de personnel</label>
                                                    <select class="form-control" id="staff_type" name="staff_type_id" required>
                                                        <option selected disabled>Sélectionnez le type de personnel</option>
                                                        <?php
                                                        $query = "SELECT * FROM staff_type";
                                                        $result = mysqli_query($connection, $query);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            while ($staff = mysqli_fetch_assoc($result)) {
                                                                echo '<option value="' . $staff['staff_type_id'] . '" ' . (($staff['staff_type_id'] == $staffGlobal['staff_type_id']) ? 'selected="selected"' : "") . '>' . $staff['staff_type'] . '</option>';
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <select style="visibility: hidden;" class="form-control" id="shift" name="shift_id" required>
                                                        <option selected disabled>Sélectionnez le poste</option>
                                                        <?php
                                                        $query = "SELECT * FROM shift";
                                                        $result = mysqli_query($connection, $query);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            while ($shift = mysqli_fetch_assoc($result)) {
                                                                echo '<option value="' . $shift['shift_id'] . '" ' . (($shift['shift_id'] == $staffGlobal['shift_id']) ? 'selected="selected"' : "") . '>' . $shift['shift_timing'] . '</option>';
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <input type="hidden" value="<?php echo $staffGlobal['emp_id']; ?>" id="emp_id" name="emp_id">

                                                <div class="form-group col-lg-6">
                                                    <label>Prénom</label>
                                                    <input type="text" value="<?php echo $fullname[0]; ?>" class="form-control" placeholder="Prénom" id="first_name" name="first_name" required>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Nom de famille</label>
                                                    <input type="text" value="<?php echo $fullname[1]; ?>" class="form-control" placeholder="Nom de famille" id="last_name" name="last_name" required>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Type de pièce d'identité</label>
                                                    <select class="form-control" id="id_card_id" name="id_card_type" required>
                                                        <option selected disabled>Sélectionnez le type</option>
                                                        <?php
                                                        $query = "SELECT * FROM id_card_type";
                                                        $result = mysqli_query($connection, $query);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            while ($id_card_type = mysqli_fetch_assoc($result)) {
                                                                echo '<option value="' . $id_card_type['id_card_type_id'] . '" ' . (($id_card_type['id_card_type_id'] == $staffGlobal['id_card_type']) ? 'selected="selected"' : "") . '>' . $id_card_type['id_card_type'] . '</option>';
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Numéro de pièce</label>
                                                    <input type="text" class="form-control" placeholder="Numéro de la pièce" id="id_card_no" value="<?php echo $staffGlobal['id_card_no']; ?>" name="id_card_no" required>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Numéro de contact</label>
                                                    <input type="number" class="form-control" placeholder="Numéro de contact" id="contact_no" value="<?php echo $staffGlobal['contact_no']; ?>" name="contact_no" required>
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Adresse</label>
                                                    <input type="text" class="form-control" placeholder="Adresse" id="address" value="<?php echo $staffGlobal['address']; ?>" name="address">
                                                </div>

                                                <div class="form-group col-lg-6">
                                                    <label>Salaire</label>
                                                    <input type="number" class="form-control" placeholder="Salaire" id="salary" value="<?php echo $staffGlobal['salary']; ?>" name="salary" required>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-lg btn-primary" name="submit">Soumettre</button>
                                            <button type="reset" class="btn btn-lg btn-danger">Réinitialiser</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Changer de poste -->
        <div id="changeShift" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Changer de poste</h4>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <form data-toggle="validator" role="form" action="ajax.php" method="post">
                                            <div class="row">
                                                <div class="form-group col-lg-12">
                                                    <label>Poste</label>
                                                    <select class="form-control" id="shift" name="shift_id" required>
                                                        <option selected disabled>Sélectionnez le poste</option>
                                                        <?php
                                                        $query = "SELECT * FROM shift";
                                                        $result = mysqli_query($connection, $query);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            while ($shift = mysqli_fetch_assoc($result)) {
                                                                echo '<option value="' . $shift['shift_id'] . '" ' . (($shift['shift_id'] == $staffGlobal['shift_id']) ? 'selected="selected"' : "") . '>' . $shift['shift_timing'] . '</option>';
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <input type="hidden" name="emp_id" value="" id="getEmpId">
                                            <button type="submit" class="btn btn-lg btn-primary" name="change_shift">Soumettre</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <?php
    }
}
?>
