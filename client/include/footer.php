<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer with Modals</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    .text-primary {
  color: #D2B48C !important; /* لون beige */
}
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
    }
    footer {
      background: linear-gradient(135deg, #1e1e2f, #2d2d44);
      color: #fff;
    }
    .btn-social {
      transition: all 0.3s ease;
      margin: 0 5px;
    }
    .btn-social:hover {
      transform: translateY(-3px);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }
    .sub-footer {
      background: rgba(255, 255, 255, 0.05);
      padding: 40px 0;
    }
    .sub-footer a {
      color: #fff;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    .sub-footer a:hover {
      color: #ff6b6b;
    }
    .modal-content {
      background: #2d2d44;
      color: #fff;
    }
    .modal-header {
      border-bottom: 1px solid #444;
    }
    .modal-footer {
      border-top: 1px solid #444;
    }
    .back-to-top {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: none;
      background: #ff6b6b;
      border: none;
      box-shadow: 0 4px 15px rgba(255, 107, 107, 0.3);
    }
    .back-to-top:hover {
      background:rgb(252, 185, 190);
    }
    .copyright {
      background: rgba(0, 0, 0, 0.2);
      padding: 10px 0;
    }
    .footer-menu a {
      color: #fff;
      margin: 0 10px;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    .footer-menu a:hover {
      color:#f8b5b5;
    }

    /* إضافة تأثيرات hover للروابط المحددة */
    .sub-footer a.text-reset:hover {
      color:rgb(252, 189, 189) !important; /* لون أحمر فاتح */
    }

    /* التأثيرات الخاصة بروابط معينة */
    .sub-footer a[data-bs-toggle="modal"]:hover,
    .sub-footer a[href="client/room.php"]:hover,
    .sub-footer a[href="client/event.php"]:hover,
    .sub-footer a[href="about.php"]:hover,
    .sub-footer a[href="service.php"]:hover,
    .sub-footer a[href="gallery.php"]:hover,
    .sub-footer a[href="contact.php"]:hover {
      color:rgb(249, 171, 171) !important; /* لون أحمر فاتح */
    }
  </style>
</head>
<body>
  <section id="footer">
        <!-- Footer -->
    <footer class="text-center text-lg-start">
    <!-- Section: Social media -->
    <section
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Restez connecté avec nous sur les réseaux sociaux :</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
      <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/HotelAppartxxxx"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-outline-light btn-social" href="https://youtu.be/F9c3gQDWjdU?si=mGorW2KNlxuf9TKe"><i class="fab fa-youtube"></i></a>
          <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/xxxx_hotel_appart/?utm_source=ig_web_button_share_sheet"><i class="fab fa-instagram"></i></a>
        <a href="index.php" class="btn btn-outline-light btn-social"> <i class="fab fa-google"></i>
        </a>
       
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="sub-footer">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3" style="color:rgb(186, 167, 117);"></i> Appart Hôtel xxxx
            </h6>
            <p>Découvrez Appart Hôtel xxxx, votre destination idéale pour le luxe et le confort à Oran. Avec des équipements modernes, un design élégant et des services personnalisés, nous vous garantissons un séjour inoubliable, que ce soit pour affaires ou loisirs. Réservez facilement en ligne, par téléphone ou via une agence de voyage.
                 
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4" style="color:rgb(186, 167, 117);">
              Useful Links
            </h6>
            <p>
                <a href="#!" class="text-reset" data-bs-toggle="modal" data-bs-target="#termsModal">Terms & Conditions</a>
              </p>
              <p>
                <a href="#!" class="text-reset" data-bs-toggle="modal" data-bs-target="#privacyModal">Privacy and Policy</a>
              </p>
              <p>
                <a class="text-reset" href="#" data-bs-toggle="modal" data-bs-target="#supportModal">Support</a>
              </p>
              <p>
                <a href="client/room.php" class="text-reset">Rooms</a>
              </p>
              <p>
                <a href="client/event.php" class="text-reset">Meeting & Events</a>
              </p>
            </div>
            <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4" style="color:rgb(186, 167, 117);">
              Quick links
            </h6>
            <p>
                <a href="../about.php" class="text-reset">About</a>
              </p>
              <p>
                <a href="../service.php" class="text-reset">Services</a>
              </p>
              <p>
                <a href="../gallery.php" class="text-reset">Gallery</a>
              </p>
              <p>
                <a href="../contact.php" class="text-reset">Contact us</a>
              </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4" style="color:rgb(186, 167, 117);">
              Contact
            </h6>
            <p><i class="fas fa-home me-3" style="color:rgb(186, 167, 117);"></i> Address:Avenue Khaled Ibn Walid 27, 31000 Oran, Algérie</p>
            <p>
              <i class="fas fa-envelope me-3" style="color:rgb(186, 167, 117);"></i>
             appartxxxx@gmail.com
            </p>
            <p><i class="fas fa-phone me-3" style="color:rgb(186, 167, 117);"></i> + 213 544 3220 00</p>
            <p><i class="fas fa-print me-3" style="color:rgb(186, 167, 117);"></i> + 213 634 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
   <!-- Copyright -->
   <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              Copyright <a class="border-bottom" href="#"style="color:rgb(234, 218, 174);">Appart_hotel_xxxx</a>&copy;<script>document.write(new Date().getFullYear());</script>, All Right Reserved.
              Designed By <a class="border-bottom" href="" style="color:rgb(234, 218, 174);">ELARBI TOLHI & </a>
            </div>
            <div class="col-md-6 text-center text-md-end">
              <div class="footer-menu">
                <a href="../index.php">Home</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#cookiesModal">Cookies</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#helpModal">Help</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#faqsModal">FAQs</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </section>

  <!-- Modals (Traduits en FR) -->
<!-- Politique de confidentialité -->
<div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="privacyLabel">Politique de confidentialité</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body">
        Nous accordons une grande importance à votre vie privée. Vos informations personnelles seront traitées en toute sécurité, conformément à toutes les exigences légales et réglementaires. Nous ne collectons que les données nécessaires pour améliorer votre expérience, telles que les détails de réservation et vos préférences. Pour plus de détails sur la façon dont nous traitons et protégeons vos données, veuillez consulter notre Politique de confidentialité complète.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Conditions générales -->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="termsLabel">Conditions générales</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body">
        En utilisant notre site web, vous acceptez nos conditions générales. Celles-ci comprennent les règles concernant les réservations, les annulations et l’utilisation de nos services. Veuillez vous assurer de lire attentivement nos politiques avant de continuer. Pour consulter les conditions complètes, cliquez sur le lien ci-dessous.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Support -->
<div class="modal fade" id="supportModal" tabindex="-1" aria-labelledby="supportLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="supportLabel">Assistance</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body">
        Besoin d’aide ? Notre équipe d’assistance est à votre disposition pour toute question concernant votre réservation, les paiements ou toute autre demande. Contactez-nous 24h/24 et 7j/7 pour une expérience fluide et agréable.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Cookies -->
<div class="modal fade" id="cookiesModal" tabindex="-1" aria-labelledby="cookiesLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cookiesLabel">Cookies</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body">
        Nous utilisons des cookies pour personnaliser votre expérience et améliorer notre site web. En poursuivant votre navigation, vous acceptez l’utilisation des cookies. Pour en savoir plus, consultez notre Politique relative aux cookies.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Aide -->
<div class="modal fade" id="helpModal" tabindex="-1" aria-labelledby="helpLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="helpLabel">Aide</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body">
        Consultez notre Centre d’aide pour trouver les réponses aux questions fréquentes concernant les réservations, les annulations et les options de paiement. Si vous avez besoin d’aide supplémentaire, n’hésitez pas à nous contacter directement.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- FAQ -->
<div class="modal fade" id="faqsModal" tabindex="-1" aria-labelledby="faqsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="faqsLabel">FAQ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body">
        <ul>
          <li><strong>Comment réserver un appartement ?</strong> Parcourez nos annonces, choisissez votre appartement préféré, puis suivez les étapes de réservation.</li>
          <li><strong>Quelle est la politique d’annulation ?</strong> Les politiques d’annulation varient selon les appartements. Consultez les détails sur la page de l’annonce ou contactez notre support.</li>
          <li><strong>Les animaux sont-ils autorisés ?</strong> Certains appartements acceptent les animaux. Recherchez le badge "Animaux acceptés" ou contactez-nous pour confirmation.</li>
          <li><strong>Quels sont les moyens de paiement acceptés ?</strong> Nous acceptons les principales cartes de crédit, PayPal et les virements bancaires.</li>
          <li><strong>Y a-t-il une durée minimale de séjour ?</strong> Oui, la durée minimale dépend de chaque appartement. Consultez les détails sur la page de réservation.</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  <!-- Scripts -->
  <script src="assets/js/index.js"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>