<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Détail de l'employé :</div>
                <div class="panel-body">
                    <div class="emp-response"></div>
                    <form role="form" id="addEmployee" data-toggle="validator">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Personnel</label>
                                <select class="form-control" id="staff_type" required data-error="Sélectionnez le type de personnel">
                                    <option selected disabled>Sélectionnez le type de personnel</option>
                                    <?php
                                    $query = "SELECT * FROM staff_type";
                                    $result = mysqli_query($connection, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($staff = mysqli_fetch_assoc($result)) {
                                            echo '<option value="' . $staff['staff_type_id'] . '">' . $staff['staff_type'] . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Poste</label>
                                <select class="form-control" id="shift" required data-error="Sélectionnez le poste">
                                    <option selected disabled>Sélectionnez le poste</option>
                                    <?php
                                    $query = "SELECT * FROM shift";
                                    $result = mysqli_query($connection, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($shift = mysqli_fetch_assoc($result)) {
                                            echo '<option value="' . $shift['shift_id'] . '">' . $shift['shift'] . ' - ' . $shift['shift_timing'] . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Prénom</label>
                                <input type="text" class="form-control" placeholder="Prénom" id="first_name" required data-error="Entrez le prénom">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Nom</label>
                                <input type="text" class="form-control" placeholder="Nom" id="last_name">
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Type de carte d'identité</label>
                                <select class="form-control" id="id_card_id" required onchange="validId(this.value);">
                                    <option selected disabled>Sélectionnez le type de carte</option>
                                    <?php
                                    $query = "SELECT * FROM id_card_type";
                                    $result = mysqli_query($connection, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($id_card_type = mysqli_fetch_assoc($result)) {
                                            echo '<option value="' . $id_card_type['id_card_type_id'] . '">' . $id_card_type['id_card_type'] . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Numéro de carte</label>
                                <input type="text" class="form-control" placeholder="Numéro de carte" id="id_card_no" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Numéro de contact</label>
                                <input type="number" class="form-control" placeholder="Numéro de contact" id="contact_no" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Adresse résidentielle</label>
                                <input type="text" class="form-control" placeholder="Adresse résidentielle" id="address" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Salaire</label>
                                <input type="number" class="form-control" placeholder="Salaire" id="salary" data-error="Entrez le salaire" required>
                                <div class="help-block with-errors"></div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-lg btn-success" style="border-radius:0%">Soumettre</button>
                        <button type="reset" class="btn btn-lg btn-danger" style="border-radius:0%">Réinitialiser</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
</div>
