<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
<!-- Preconnect pour améliorer les performances des polices Google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Intégration de la police Tagesschrift -->
<link href="https://fonts.googleapis.com/css2?family=Tagesschrift&display=swap" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- bootstrap  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Jquery Time Picker  -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <!-- Jquery Date Picker  -->
    <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- Jquery Date Picker End -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@900&display=swap" rel="stylesheet">

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/clientStyle.css">
    <link rel="stylesheet" href="../assets/css/booking_card.css">
    <link rel="stylesheet" href="../assets/css/nav-tabs.css">

    <style>
      
        #navbar_top {
            background-color: rgb(186, 157, 131); 
        }
        .dropdown-menu {
            background-color: rgb(186, 157, 131);
        }
        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.9);
        }
    </style>
</head>
<body>

<?php 
include('functions.php');
include('general.php');

if(isset($_SESSION['loggedUserId'])) {
    $id = $_SESSION['loggedUserId'];
    $s = "SELECT * FROM users_details WHERE UserId='$id'";
    $result = mysqli_query($con, $s) or die ('failed to query');
    $user_details = mysqli_fetch_assoc($result);
}
  
if(isset($user_details['FirstName'])){
?>
   <!-- navbar للمستخدم المسجل -->
   <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="fas fa-gem me-2"></i><?php echo $general_setting['Name'] ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownApparts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Our Apparts
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownApparts">
                        <a class="dropdown-item" href="Penthouse.php">Penthouse</a>
                        <a class="dropdown-item" href="Appartement F1 .php">Appartement F1</a>
                        <a class="dropdown-item" href="Appartement F2.php">Appartement F2</a>
                        <a class="dropdown-item" href="Appartement F3.php">Appartement F3</a>
                        <a class="dropdown-item" href="Appartement Famille.php">Appartement Famille</a>
                        <a class="dropdown-item" href="Studio.php">Studio</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownServices" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownServices">
                        <a class="dropdown-item" href="gallery.php">Gallery</a>
                        <a class="dropdown-item" href="service.php">Our Services</a>
                        <a class="dropdown-item" href="Le R restaurant.php">Restaurant</a>
                        <a class="dropdown-item" href="events.php">Events</a>
                        <a class="dropdown-item" href="spa.php">Spa</a>
                        <a class="dropdown-item" href="gm.php">Gym</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBooking" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Booking
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownBooking">
                        <a class="dropdown-item" href="client/room.php">Rooms</a>
                        <a class="dropdown-item" href="client/event.php">Events</a>
                        <a class="dropdown-item" href="client/mybooking.php">My Bookings</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
            
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $user_details['FirstName']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownProfile">
                        <a class="dropdown-item" href="../../Hotel/client/dashboard.php">Dashboard</a>
                        <a class="dropdown-item" href="../../Hotel/client/account.php">Edit Profile</a>
                        <a class="dropdown-item" href="../../Hotel/destroy.php">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php } else { ?>
    <!-- navbar للزوار -->
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-gem me-2"></i><?php echo $general_setting['Name'] ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownApparts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Our Apparts
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownApparts">
                            <a class="dropdown-item" href="Penthouse.php">Penthouse</a>
                            <a class="dropdown-item" href="Appartement F1 .php">Appartement F1</a>
                            <a class="dropdown-item" href="Appartement F2.php">Appartement F2</a>
                            <a class="dropdown-item" href="Appartement F3.php">Appartement F3</a>
                            <a class="dropdown-item" href="Appartement Famille.php">Appartement Famille</a>
                            <a class="dropdown-item" href="Studio.php">Studio</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownServices" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownServices">
                            <a class="dropdown-item" href="gallery.php">Gallery</a>
                            <a class="dropdown-item" href="service.php">Our Services</a>
                            <a class="dropdown-item" href="Le R restaurant.php">Restaurant</a>
                            <a class="dropdown-item" href="events.php">Events</a>
                            <a class="dropdown-item" href="spa.php">Spa</a>
                            <a class="dropdown-item" href="gm.php">Gym</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php } ?>

</body>
</html>