<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appart Hôtel xxxx</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    .text-primary {
  color: #D2B48C !important; 
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

    .sub-footer a.text-reset:hover {
      color:rgb(252, 189, 189) !important; 
    }
    .sub-footer a[data-bs-toggle="modal"]:hover,
    .sub-footer a[href="client/room.php"]:hover,
    .sub-footer a[href="client/event.php"]:hover,
    .sub-footer a[href="about.php"]:hover,
    .sub-footer a[href="service.php"]:hover,
    .sub-footer a[href="gallery.php"]:hover,
    .sub-footer a[href="contact.php"]:hover {
      color:rgb(249, 171, 171) !important; 
    }
  </style>
</head>
<body>

  <section id="footer">
    <!-- Footer -->
    <footer class="text-center text-lg-start">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span>Restez connecté avec nous sur les réseaux sociaux :</span>
        </div>
        <!-- Right -->
        <div class="d-flex pt-2">
          <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/HotelAppartxxxx"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-outline-light btn-social" href="https://youtu.be/F9c3gQDWjdU?si=mGorW2KNlxuf9TKe"><i class="fab fa-youtube"></i></a>
          <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/xxxx_hotel_appart/?utm_source=ig_web_button_share_sheet"><i class="fab fa-instagram"></i></a>
        </div>
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
                <i class="fas fa-gem me-3"style="color:rgb(186, 167, 117);"></i><?php echo $general_setting['Name'] ?>
              </h6>
              <p>
                <?php echo $general_setting['Description'] ?>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-start text-primary text-uppercase mb-4 fw-bold">
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
              <h6 class="text-start text-primary text-uppercase mb-4 fw-bold">
                Quick links
              </h6>
              <p>
                <a href="about.php" class="text-reset">About</a>
              </p>
              <p>
                <a href="service.php" class="text-reset">Services</a>
              </p>
              <p>
                <a href="gallery.php" class="text-reset">Gallery</a>
              </p>
              <p>
                <a href="contact.php" class="text-reset">Contact us</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class=" text-start text-primary text-uppercase mb-4 fw-bold">
                Contact
              </h6>
              <p><i class="fas fa-home me-3"style="color:rgb(186, 167, 117);"></i><?php echo $general_setting['Address_line1'] ?>,
                <?php echo $general_setting['Address_line2'] ?>,
                <?php echo $general_setting['City'] ?>,
                <?php echo $general_setting['State'] ?>,</p>
              <p>Country :<?php echo $general_setting['Country'] ?>,</p>
              <p>Pin Code :<?php echo $general_setting['Zip_code'] ?> </p>
              <p>
                <i class="fas fa-envelope me-3" style="color:rgb(186, 167, 117);"></i>
                <?php echo $general_setting['Email'] ?>
              </p>
              <p><i class="fas fa-phone me-3" style="color:rgb(186, 167, 117);"></i>+ <?php echo  $general_setting['Phone_number'] ?> </p>
              <p><i class="fas fa-print me-3" style="color:rgb(186, 167, 117);"></i>+<?php echo $general_setting['Telephone_number'] ?> </p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

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
                <a href="index.html">Home</a>
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

  <!-- Modals (Same as before) -->
  <!-- Privacy Policy Modal -->
  <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="privacyLabel">Privacy Policy</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          We value your privacy. Your personal information will be securely handled in compliance with all legal and regulatory requirements. We collect only the necessary data to enhance your experience, such as booking details and preferences. For more details on how we process and protect your data, please refer to our full Privacy Policy.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Terms Modal -->
  <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="termsLabel">Terms & Conditions</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          By using our website, you agree to our terms and conditions. These include rules for booking, cancellations, and the use of our services. Please ensure that you review our policies carefully before proceeding. For complete terms, click the link below.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Support Modal -->
  <div class="modal fade" id="supportModal" tabindex="-1" aria-labelledby="supportLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="supportLabel">Support</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Need assistance? Our support team is here to help with any questions about your booking, payment issues, or general inquiries. Contact us 24/7 for a smooth and enjoyable experience.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Cookies Modal -->
  <div class="modal fade" id="cookiesModal" tabindex="-1" aria-labelledby="cookiesLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cookiesLabel">Cookies</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          We use cookies to personalize your experience and improve our website. By continuing to browse, you agree to our use of cookies. For more information, check our Cookies Policy.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Help Modal -->
  <div class="modal fade" id="helpModal" tabindex="-1" aria-labelledby="helpLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="helpLabel">Help</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Explore our Help Center for answers to frequently asked questions about bookings, cancellations, and payment options. If you need further assistance, feel free to contact us directly.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- FAQs Modal -->
  <div class="modal fade" id="faqsModal" tabindex="-1" aria-labelledby="faqsLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="faqsLabel">FAQs</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul>
            <li><strong>How can I book an apartment?</strong> Simply browse our listings, choose your preferred apartment, and follow the booking steps.</li>
            <li><strong>What is the cancellation policy?</strong> Cancellation policies vary per apartment. Check the details on the listing page or contact support.</li>
            <li><strong>Are pets allowed in the apartments?</strong> Some apartments allow pets. Look for the pet-friendly badge or contact us to confirm.</li>
            <li><strong>What payment methods are accepted?</strong> We accept major credit cards, PayPal, and bank transfers.</li>
            <li><strong>Is there a minimum stay requirement?</strong> Yes, the minimum stay varies by apartment. Check the details on the booking page.</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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