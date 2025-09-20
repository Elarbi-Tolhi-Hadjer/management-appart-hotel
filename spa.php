
<?php
 session_start();
 include('include/currentPage_header.php');
 include('include/dbConnect.php');
 ?>
<!-- Add AOS CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- About Start -->
<div class="container-fluid py-5" style="background-color: #fff8f0;">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 pb-5 pb-lg-0" data-aos="fade-right" data-aos-duration="800">
                <img class="img-fluid w-100 rounded-lg shadow" src="img/spa1.jpg" alt="Spa at xxxx Hotel" style="border: 5px solid white; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: transform 0.5s ease;">
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
                <span class="d-inline-block text-uppercase py-1 px-2 mb-3" style="background-color: rgba(210, 180, 140, 0.2); color: #D2B48C; font-weight: 600; transition: all 0.3s ease;">About Us</span>
                <h1 class="mb-4" style="color: #2c3e50; transition: all 0.3s ease;">Détente et Bien-être à l'Appart Hôtel xxxx</h1>
                
                <div class="pl-4 mb-4" style="border-left: 3px solid #D2B48C; transition: all 0.3s ease;">
                    <p style="color: #555;">Découvrez une expérience de relaxation ultime dans notre spa de luxe au sein de l'Appart Hôtel xxxx. Nous offrons une large gamme de soins de beauté et de bien-être, incluant des massages apaisants, des soins du visage revitalisants et des rituels de relaxation uniques. Notre équipe de professionnels vous assure une prise en charge personnalisée pour un moment de pure détente.</p>
                </div>
                
                <div class="pl-4 mb-4" style="border-left: 3px solid #D2B48C; transition: all 0.3s ease;">
                    <p style="color: #555;">Experience ultimate relaxation at our luxurious spa within Appart Hôtel xxxx. We offer a wide range of beauty and wellness treatments, including soothing massages, revitalizing facials, and unique relaxation rituals. Our team of professionals ensures a personalized service for a moment of pure relaxation.</p>
                </div>

                <div class="row pt-3">
                    <div class="col-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-center p-4 rounded" style="background-color: white; border: 1px solid rgba(210, 180, 140, 0.3); box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                            <h3 class="display-4 mb-2" style="color: #D2B48C;" data-toggle="counter-up">99</h3>
                            <h6 class="text-uppercase" style="color: #6c757d;">Spécialistes Spa</h6>
                            <small class="text-muted">Spa Specialists</small>
                        </div>
                    </div>
                    <div class="col-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="text-center p-4 rounded" style="background-color: white; border: 1px solid rgba(210, 180, 140, 0.3); box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                            <h3 class="display-4 mb-2" style="color: #D2B48C;" data-toggle="counter-up">999</h3>
                            <h6 class="text-uppercase" style="color: #6c757d;">Clients Satisfaits</h6>
                            <small class="text-muted">Happy Clients</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.rounded-lg {
    border-radius: 12px;
    transition: all 0.3s ease;
}

@media (max-width: 991px) {
    .pb-lg-0 {
        padding-bottom: 3rem !important;
    }
    
    .pl-4 {
        padding-left: 1.5rem !important;
    }
}

@media (max-width: 575px) {
    .display-4 {
        font-size: 2.5rem;
    }
    
    .col-6 {
        margin-bottom: 15px;
    }
}
</style>

    <section class="spa-video-section" data-aos="fade-up" data-aos-duration="800">
  <div class="spa-container">
    <div class="spa-video-wrapper">
      <video controls autoplay muted loop class="video-hover">
        <source src="img/spa.mp4" type="video/mp4">
        Votre navigateur ne supporte pas la lecture vidéo.
      </video>
    </div>
    <div class="spa-description">
      <h2>✨ Concept xxxx Institut Beauty & Spa</h2>
      <p>Venez vivre un moment de <strong>détente unique</strong> chez <strong>Concept xxxx</strong>, où bien-être et beauté se rencontrent.</p>
      <ul>
        <li>💪 Jet Spa, Appareils amincissants & Massages relaxants</li>
        <li>🧖‍♀️ Soins du visage et du corps</li>
        <li>💅 Beauté des mains et des pieds, onglerie professionnelle</li>
        <li>💇‍♀️ Soin capillaire, maquillage & coiffeurs disponibles sur place</li>
        <li>🧬 Nouvelle technologie anti-âge : rajeunissement du visage & remodelage corporel</li>
      </ul>
      <p class="welcome">Bienvenue chez <strong>Concept xxxx</strong> 🌺</p>
    </div>
  </div>
</section>
   
<!-- About Section Start -->
<div class="container-fluid py-5" style="background-color: #fff8f0;">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 pb-5 pb-lg-0" data-aos="fade-right" data-aos-duration="800">
                <img class="img-fluid w-100 rounded-lg shadow" src="img/spa2.jpg" alt="Spa & Hotel Oran" style="border: 5px solid white; transition: transform 0.5s ease;">
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
                <span class="d-inline-block text-uppercase py-1 px-2 mb-3" style="background-color: rgba(210, 180, 140, 0.2); color: #D2B48C; font-weight: 600; transition: all 0.3s ease;">À propos</span>
                <h1 class="mb-4" style="color: #2c3e50; transition: all 0.3s ease;">Un complexe unique alliant détente et confort</h1>
                <div class="pl-4" style="border-left: 3px solid #D2B48C; transition: all 0.3s ease;">
                    <p style="color: #555;">Notre établissement à Oran vous offre un hammam traditionnel, un spa moderne, une salle de sport équipée et des appartements hôteliers de luxe pour un séjour inoubliable.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->

<style>
.rounded-lg {
    border-radius: 12px;
}

.shadow {
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

@media (max-width: 991px) {
    .pb-lg-0 {
        padding-bottom: 3rem !important;
    }
    
    .pl-4 {
        padding-left: 1.5rem !important;
    }
    
    .hours-text {
        margin-top: 0 !important;
        margin-bottom: 2rem !important;
    }
}

@media (max-width: 767px) {
    .position-relative {
        min-height: 300px !important;
    }
}
</style>

    <!-- About End -->
    <section class="xxxx-video-section" data-aos="fade-up" data-aos-duration="800">
  <div class="video-container">
    <h3 class="video-title">🎥 Découvrez notre  xxxx Institut Beauty & Spa & Hammam</h3>
    <div class="video-wrapper">
      <!-- Remplacez "path/to/your-video.mp4" par le chemin réel de votre vidéo -->
      <video controls width="100%" height="auto" class="video-hover">
        <source src="img/VID.mp4" type="video/mp4">
      </video>
    </div>
    <div class="video-description">
      <p>
        Profitez de cette vidéo exclusive pour découvrir xxxx Concept & Spa. Nous vous présentons nos différents services comme la salle de sport, le spa, et bien plus encore ! 💆‍♀️💅💪
      </p>
    </div>
  </div>
</section>

<!-- Open Hours Start -->
<div class="container-fluid py-5" style="background-color: #f8f9fa;">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100 rounded-lg overflow-hidden shadow" data-aos="fade-right" data-aos-duration="800">
                    <img class="position-absolute w-100 h-100" src="img/spa3.jpg" style="object-fit: cover; transition: transform 0.5s ease;">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="hours-text p-4 p-lg-5 my-lg-5 rounded-lg shadow" style="background-color: white; border-left: 4px solid #D2B48C;" data-aos="fade-left" data-aos-duration="800">
                    <span class="d-inline-block text-uppercase py-1 px-2 mb-3" style="background-color: #D2B48C; color: white; font-weight: 600; transition: all 0.3s ease;">Horaires / Open Hours</span>
                    <h1 class="mb-4" style="color: #2c3e50; transition: all 0.3s ease;">Espace Spa et Détente</h1>
                    <div class="mb-4" style="border-left: 3px solid rgba(210, 180, 140, 0.5); padding-left: 1rem; transition: all 0.3s ease;">
                        <p style="color: #555;">Bienvenue dans notre havre de paix, conçu pour vous offrir une expérience de bien-être exceptionnelle. Profitez de soins sur-mesure et laissez nos spécialistes vous aider à retrouver équilibre et sérénité.</p>
                        <p style="color: #555;">Welcome to our peaceful sanctuary, designed to offer you an exceptional wellness experience. Enjoy personalized treatments and let our specialists help you regain balance and serenity.</p>
                    </div>

                    <ul class="list-inline">
                        <li class="h6 py-2 d-flex align-items-center"><i class="fas fa-circle mr-3" style="color: #D2B48C; font-size: 8px;"></i>Lundi – Vendredi / Mon – Fri : 9:00 - 19:00</li>
                        <li class="h6 py-2 d-flex align-items-center"><i class="fas fa-circle mr-3" style="color: #D2B48C; font-size: 8px;"></i>Samedi / Saturday : 9:00 - 18:00</li>
                        <li class="h6 py-2 d-flex align-items-center"><i class="fas fa-circle mr-3" style="color: #D2B48C; font-size: 8px;"></i>Dimanche / Sunday : Fermé / Closed</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Open Hours End -->

<!-- Pricing Start -->
<div class="container-fluid py-5" style="background-color: #fff8f0; margin: 90px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100 rounded-lg overflow-hidden shadow" data-aos="fade-right" data-aos-duration="800">
                    <img class="position-absolute w-100 h-100" src="img/spa66.png" style="object-fit: cover; object-position: center; transition: transform 0.5s ease;">
                </div>
            </div>
            <div class="col-lg-7 pt-5 pb-lg-5">
                <div class="pricing-text p-4 p-lg-5 my-lg-5 rounded-lg shadow" style="background-color: white; border-top: 4px solid #D2B48C;" data-aos="fade-left" data-aos-duration="800">
                    <span class="d-inline-block text-uppercase py-1 px-2 mb-3" style="background-color: #D2B48C; color: white; font-weight: 600; transition: all 0.3s ease;">Tarifs / Pricing</span>
                    <h1 class="mb-4" style="color: #2c3e50; transition: all 0.3s ease;">Nos Offres Bien-Être</h1>
                    <div class="mb-4">
                        <p style="color: #555;">Découvrez nos formules adaptées à tous les besoins pour une expérience de détente complète.</p>
                        <p style="color: #555;">Discover our tailored packages for a complete relaxation experience.</p>
                    </div>

                    <ul class="list-unstyled mb-5">
                        <li class="mb-3 d-flex align-items-start" data-aos="fade-up" data-aos-delay="100">
                            <i class="fas fa-leaf mt-1 mr-3" style="color: #D2B48C;"></i>
                            <div>
                                <strong style="color: #2c3e50;">Formule Découverte</strong>
                                <p class="mb-0" style="color: #6c757d;">Massage relaxant + soin du visage</p>
                                <small class="text-muted">60 min - 8,000 DA</small>
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-start" data-aos="fade-up" data-aos-delay="200">
                            <i class="fas fa-spa mt-1 mr-3" style="color: #D2B48C;"></i>
                            <div>
                                <strong style="color: #2c3e50;">Formule Sérénité</strong>
                                <p class="mb-0" style="color: #6c757d;">Accès spa + massage complet + soin visage premium</p>
                                <small class="text-muted">90 min - 12,000 DA</small>
                            </div>
                        </li>
                        <li class="d-flex align-items-start" data-aos="fade-up" data-aos-delay="300">
                            <i class="fas fa-crown mt-1 mr-3" style="color: #D2B48C;"></i>
                            <div>
                                <strong style="color: #2c3e50;">Formule Prestige</strong>
                                <p class="mb-0" style="color: #6c757d;">Accès VIP + rituel complet bien-être</p>
                                <small class="text-muted">120 min - 18,000 DA</small>
                            </div>
                        </li>
                    </ul>

                    <h2 class="mb-4" style="color: #2c3e50;">Nos Services</h2>
                    <div class="row">
                        <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item p-4 text-center rounded-lg shadow-sm h-100" style="background-color: white; border: 1px solid rgba(210, 180, 140, 0.3);">
                                <i class="fas fa-hot-tub fa-2x mb-3" style="color: #D2B48C;"></i>
                                <h5 style="color: #2c3e50;">Hammam Traditionnel</h5>
                                <p style="color: #6c757d;">Profitez d'une purification profonde avec notre hammam authentique.</p>
                                <small class="text-muted">From 1,500 DA</small>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item p-4 text-center rounded-lg shadow-sm h-100" style="background-color: white; border: 1px solid rgba(210, 180, 140, 0.3);">
                                <i class="fas fa-spa fa-2x mb-3" style="color: #D2B48C;"></i>
                                <h5 style="color: #2c3e50;">Spa & Massages</h5>
                                <p style="color: #6c757d;">Offrez-vous un moment de détente avec nos soins bien-être et massages.</p>
                                <small class="text-muted">From 4,500 DA</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing End -->

<style>
.rounded-lg {
    border-radius: 12px;
}

.shadow {
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.shadow-sm {
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.service-item {
    transition: all 0.3s ease;
}

.service-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(210, 180, 140, 0.15) !important;
    border-color: rgba(210, 180, 140, 0.5) !important;
}

@media (max-width: 991px) {
    .pb-lg-5 {
        padding-bottom: 3rem !important;
    }
    
    .my-lg-5 {
        margin-top: 2rem !important;
        margin-bottom: 2rem !important;
    }
}

@media (max-width: 767px) {
    .position-relative {
        min-height: 300px !important;
        margin-bottom: 2rem;
    }
    
    .pricing-text {
        padding: 2rem !important;
    }
}
</style>

<!-- Pricing End -->
<h2 class="mt-5 mb-4 text-center" data-aos="fade-up">Galerie</h2>
<div class="row gallery">
    <div class="col-md-3 col-sm-6 mb-3" data-aos="fade-up" data-aos-delay="100">
        <a href="img/pal.jpg" data-lightbox="gallery" data-title="">
            <img src="img/pal.jpg" class="img-fluid rounded shadow" alt="">
        </a>
    </div>
    <div class="col-md-3 col-sm-6 mb-3" data-aos="fade-up" data-aos-delay="200">
        <a href="img/pal1.jpg" data-lightbox="gallery" data-title="">
            <img src="img/pal1.jpg" class="img-fluid rounded shadow" alt="">
        </a>
    </div>
    <div class="col-md-3 col-sm-6 mb-3" data-aos="fade-up" data-aos-delay="300">
        <a href="img/pal2.jpg" data-lightbox="gallery" data-title="">
            <img src="img/pal2.jpg" class="img-fluid rounded shadow" alt="">
        </a>
    </div>
    <div class="col-md-3 col-sm-6 mb-3" data-aos="fade-up" data-aos-delay="400">
        <a href="img/pal3.jpg" data-lightbox="gallery" data-title="">
            <img src="img/pal3.jpg" class="img-fluid rounded shadow" alt="">
        </a>
    </div>
    <div class="col-md-3 col-sm-6 mb-3" data-aos="fade-up" data-aos-delay="500">
        <a href="img/pal4.jpg" data-lightbox="gallery" data-title="">
            <img src="img/pal4.jpg" class="img-fluid rounded shadow" alt="">
        </a>
    </div>
    <div class="col-md-3 col-sm-6 mb-3" data-aos="fade-up" data-aos-delay="600">
        <a href="img/pal5.jpg" data-lightbox="gallery" data-title="n">
            <img src="img/pal5.jpg" class="img-fluid rounded shadow" alt="n">
        </a>
    </div>
    <div class="col-md-3 col-sm-6 mb-3" data-aos="fade-up" data-aos-delay="700">
        <a href="img/pal6.jpg" data-lightbox="gallery" data-title="">
            <img src="img/pal6.jpg" class="img-fluid rounded shadow" alt="">
        </a>
    </div>
    
</div>


<section class="xxxx-section" data-aos="fade-up">
  <div class="xxxx-container">
    <h2>Bienvenue chez <span>xxxx</span> !</h2>
    <p class="intro">
      Soyez les bienvenues chez <strong>xxxx Appart, Hôtel, Institut de beauté, Concept et Spa 🥰</strong>
    </p>
    <h3>Au programme chez xxxx :</h3>
    <ul class="services">
      <li data-aos="fade-right" data-aos-delay="100">✔ Soins du corps et du visage</li>
      <li data-aos="fade-right" data-aos-delay="200">✔ Épilation</li>
      <li data-aos="fade-right" data-aos-delay="300">✔ Onglerie</li>
      <li data-aos="fade-right" data-aos-delay="400">✔ Maquillage</li>
      <li data-aos="fade-right" data-aos-delay="500">✔ Salon de coiffures</li>
      <li data-aos="fade-right" data-aos-delay="600">✨ Et bien plus encore 🤩</li>
    </ul>
    <div class="location">
      <h4>📍 Où nous trouver ?</h4>
      <p>Hippodrome d'Oran, Juste en bas de la mosquée Khaled Ibn Walid.</p>
      <div class="map-container" data-aos="zoom-in">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1619.9839268131605!2d-0.6209351616670291!3d35.70240867125937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7e89716058dd39%3A0x6d71cadba8a1557!2sConcept%20xxxx%20SPA!5e0!3m2!1sfr!2sdz!4v1745581289508!5m2!1sfr!2sdz" 
          width="100%" 
          height="350" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>
</section>

<!-- Contact Start -->
<div class="container-fluid py-5 bg-light">
  <div class="container text-center">
    <h2 class="mb-3 display-5 fw-bold" data-aos="fade-up">
      <i class="fas fa-hotel text-primary"></i> Contactez Appart Hôtel xxxx Oran
    </h2>
    <hr class="w-25 mx-auto mb-4" style="border-top: 2px solid #0d6efd;">
    <p class="text-muted mb-5" data-aos="fade-up" data-aos-delay="100">Réservez votre séjour, séance de spa ou session de sport dès aujourd'hui.</p>
    
    <div class="d-flex flex-column align-items-center gap-3 mb-4">
      <div data-aos="fade-up" data-aos-delay="200">
        <i class="fas fa-phone-alt text-primary fa-lg me-2"></i> 
        <span class="fs-5">+213 456 789 012</span>
      </div>
      <div data-aos="fade-up" data-aos-delay="300">
        <i class="fas fa-map-marker-alt text-primary fa-lg me-2"></i> 
        <span class="fs-5">Appart Hôtel xxxx, Oran, Algérie</span>
      </div>
      <div data-aos="fade-up" data-aos-delay="400">
        <i class="fas fa-clock text-primary fa-lg me-2"></i> 
        <span class="fs-5">Ouvert 24h/24 - 7j/7</span>
      </div>
    </div>

    <!-- Centered Card Section -->
    <div class="col-lg-6 mx-auto">
        <div class="card border-0 shadow-lg overflow-hidden" data-aos="zoom-in">
          <div class="row g-0">
            <div class="col-md-5">
              <img src="assets/picture/LES.jpg" class="img-fluid h-100" style="object-fit: cover;" alt="Spa & Bien-être">
            </div>
            
            <div class="col-md-7">
              <div class="card-body p-4">
                <h4 class="card-title">Spa & Bien-être</h4>
                <p class="card-text text-muted">Réservez votre moment de détente</p>
                <div class="social-icons mt-3">
                  <a href="https://www.facebook.com/xxxxapparthotel" class="text-decoration-none mx-2" data-aos="fade-up" data-aos-delay="100">
                    <i class="fab fa-facebook fa-lg text-primary"></i>
                  </a>
                  <a href="https://www.tiktok.com/@xxxxconcept?is_from_webapp=1&sender_device=pc" class="text-decoration-none mx-2" data-aos="fade-up" data-aos-delay="200">
                    <i class="fab fa-tiktok fa-lg text-dark"></i>
                  </a>
                  <a href="mailto:Conceptxxxxstitut@gmail.com" class="text-decoration-none mx-2" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-envelope fa-lg text-secondary"></i>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    <!-- Contact Button -->
    <a href="contact.php" class="btn btn-primary btn-lg px-4 py-2 rounded-pill mt-4" data-aos="fade-up" data-aos-delay="500">
      <i class="fas fa-paper-plane me-2"></i> Nous Contacter
    </a>
  </div>
</div>
<!-- Contact End -->

<!-- Contact End -->
<script>
// Initialize AOS animation library
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });
    
    // Simple image gallery functionality
    const thumbnails = document.querySelectorAll('.thumbnail');
    const featuredImage = document.querySelector('.featured-image');
    
    thumbnails.forEach(thumb => {
        thumb.addEventListener('click', function() {
            const bgImage = this.style.backgroundImage;
            const imgUrl = bgImage.replace('url("', '').replace('")', '');
            featuredImage.src = imgUrl;
            
            // Add active class to clicked thumbnail
            thumbnails.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
        });
    });
    
    // Add hover effect to video elements
    const videos = document.querySelectorAll('.video-hover');
    videos.forEach(video => {
        video.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.02)';
            this.style.transition = 'transform 0.3s ease';
        });
        video.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
});
</script>

<style>
/* Animation styles */
[data-aos] {
    transition-property: transform, opacity;
}

/* Hover effects */
.team-member img:hover {
  transform: scale(1.05);
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
  transition: all 0.4s ease-in-out;
}

.social-icons a:hover {
  color: #0d6efd !important;
  transition: color 0.3s ease;
}

.btn-primary:hover {
  background-color: #0056b3;
  border-color: #004085;
  transform: translateY(-2px);
  transition: all 0.3s ease;
}

.gallery img {
    transition: transform 0.3s ease-in-out;
}
.gallery img:hover {
    transform: scale(1.05);
}

/* Video section styles */
.spa-video-section {
  background: #fdfdfd;
  padding: 60px 20px;
  font-family: 'Segoe UI', sans-serif;
}

.spa-container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
  max-width: 1200px;
  margin: 0 auto;
  align-items: center;
}

.spa-video-wrapper video {
  width: 100%;
  height: auto;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
  transition: all 0.3s ease;
}

.spa-video-wrapper video:hover {
  transform: scale(1.02);
  box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}

.spa-description h2 {
  font-size: 2rem;
  color: #d29d7d;
  margin-bottom: 15px;
}

.spa-description p {
  font-size: 1.1rem;
  color: #444;
  margin-bottom: 15px;
}

.spa-description ul {
  list-style: none;
  padding: 0;
}

.spa-description ul li {
  margin-bottom: 10px;
  font-size: 1rem;
  color: #555;
  position: relative;
  padding-left: 25px;
  transition: all 0.3s ease;
}

.spa-description ul li:hover {
  transform: translateX(5px);
}

.spa-description ul li::before {
  content: "✔";
  color: #d29d7d;
  position: absolute;
  left: 0;
  font-weight: bold;
}

.spa-description .welcome {
  margin-top: 20px;
  font-size: 1.2rem;
  color: #7a5c47;
  font-weight: bold;
}

@media (max-width: 768px) {
  .spa-container {
    grid-template-columns: 1fr;
    text-align: center;
  }

  .spa-video-wrapper video {
    height: auto;
  }
}

/* xxxx section styles */
.xxxx-section {
  background: #fdf9f7;
  padding: 40px 20px;
  font-family: 'Arial', sans-serif;
  color: #333;
}

.xxxx-container {
  max-width: 800px;
  margin: auto;
  background: white;
  padding: 30px;
  border-radius: 16px;
  box-shadow: 0 4px 16px rgba(0,0,0,0.1);
  transition: all 0.3s ease;
}

.xxxx-container:hover {
  box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.xxxx-container h2 {
  text-align: center;
  font-size: 2em;
  margin-bottom: 10px;
  color: #d1785f;
}

.xxxx-container h2 span {
  color: #f48f7a;
}

.intro {
  text-align: center;
  font-size: 1.2em;
  margin-bottom: 20px;
}

.services {
  list-style: none;
  padding-left: 0;
  font-size: 1.1em;
  margin-bottom: 25px;
}

.services li {
  margin: 8px 0;
  transition: all 0.3s ease;
}

.services li:hover {
  color: #d1785f;
}

.location h4 {
  margin-bottom: 5px;
  font-size: 1.2em;
  color: #444;
}

.map-container {
  margin-top: 15px;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 2px 12px rgba(0,0,0,0.1);
  transition: all 0.3s ease;
}

.map-container:hover {
  box-shadow: 0 5px 20px rgba(0,0,0,0.15);
}

/* Video section styles */
.xxxx-video-section {
  padding: 40px 20px;
  background: #f7f7f7;
  font-family: 'Arial', sans-serif;
  color: #333;
}

.video-container {
  max-width: 1000px;
  margin: auto;
  text-align: center;
  background: white;
  padding: 20px;
  border-radius: 16px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  transition: all 0.3s ease;
}

.video-container:hover {
  box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.video-title {
  font-size: 1.6em;
  color: #d1785f;
  margin-bottom: 15px;
}

.video-wrapper {
  position: relative;
  width: 100%;
  padding-top: 56.25%; /* Ratio 16:9 */
  box-shadow: 0 4px 16px rgba(0,0,0,0.1);
  border-radius: 12px;
  overflow: hidden;
  background-color: #eaeaea;
  transition: all 0.3s ease;
}

.video-wrapper:hover {
  box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.video-wrapper video {
  position: absolute;
  top: 0; left: 0;
  width: 100%;
  height: 100%;
  transition: all 0.3s ease;
}

.video-wrapper video:hover {
  transform: scale(1.02);
}

.video-description {
  margin-top: 20px;
  font-size: 1.1em;
  line-height: 1.6;
  color: #666;
}

/* Counter animation */
[data-toggle="counter-up"] {
  transition: all 1s ease-out;
}

/* Gallery animation */
.gallery a {
  display: block;
  overflow: hidden;
  border-radius: 8px;
}

.gallery img {
  transition: transform 0.5s ease, opacity 0.3s ease;
}

.gallery a:hover img {
  transform: scale(1.1);
}
</style>

<!-- Add AOS JS at the end of body -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<?php include('include/footer.php') ?>