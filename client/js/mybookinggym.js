// Affichage des abonnements gym avec AJAX
function gymBooking(value, msg, err) {
    var Data = {
        gymBooking: true,
        filter: value
    };
    if (msg != "") {
        Data.msg = msg;
    }
    if (err != "") {
        Data.error = err;
    }

    $.ajax({
        url: "fetchData.php",
        type: "POST",
        data: Data,
        beforeSend: function () {
            $('#contentAreaGym').html("<br><br><span>Chargement...</span>");
        },
        success: function (data) {
            $('#contentAreaGym').html(data);
        },
        error: function (data) {
            console.log("Erreur");
            console.log(data);
        }
    });
}

// Marquer un abonnement comme payé
function setGymPaid(bID) {
    $('#gymBookingId').val(bID);

    // Résolution du problème "modal show function not found"
    jQuery.noConflict();
    $('#gymPaymentModal').modal('show');
}

// Annuler un abonnement
function setGymCancel(bookingId) {
    console.log(bookingId);
    $.ajax({
        url: "status_functions.php",
        type: "POST",
        data: {
            gymBookingCancel: true,
            bookingId: bookingId
        },
        success: function (data) {
            console.log("Succès");
            console.log(data);
            var json = JSON.parse(data);
            if (json['error'] != "") {
                gymBooking("", "", json['error']);
            } else {
                gymBooking("", json['msg'], "");
            }
        },
        error: function (data) {
            console.log("Erreur");
            console.log(data);
        }
    });
}

// Fonction exécutée au chargement du document
$(document).ready(function () {

    gymBooking("", "", "");
    
    $("#gymBookingFilter").on("change", function () {
        var value = $(this).val();
        gymBooking(value, "", "");
    });

    $('#gym-modal-payment').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: "status_functions.php",
            type: "POST",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                console.log("Succès");
                console.log(data);
                $('#gymPaymentModal').modal('hide');
                var json = JSON.parse(data);
                if (json['error'] != "") {
                    gymBooking("", "", json['error']);
                } else {
                    gymBooking("", json['msg'], "");
                }
            },
            error: function (data) {
                console.log("Erreur");
                console.log(data);
            }
        });
    });

});
