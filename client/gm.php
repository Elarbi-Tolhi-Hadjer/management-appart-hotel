<?php
 session_start();
 include('include/header.php');
 include('include/dbConnect.php');
 ?>


<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;500&display=swap" rel="stylesheet">

<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/8.5.0/css/all.min.css">

<style>
  :root {
    /* Nouvelle palette bleu marine et turquoise */
    --primary-color: #2a4365;        /* Bleu marine */
    --primary-dark: #1e365d;         /* Version plus sombre */
    --primary-light: #3182ce;        /* Version plus claire */
    --secondary-color: #38b2ac;      /* Turquoise */
    --accent-color: #f6ad55;         /* Orange doré */
    --light-bg: #f7fafc;             /* Fond très clair */
    --dark-text: #2d3748;            /* Texte foncé */
    --light-text: #ffffff;           /* Texte clair */
  }
  
  body {
    font-family: 'Poppins', sans-serif;
    color: var(--dark-text);
    background-color: var(--light-bg);
    line-height: 1.6;
  }
  
  .rating {
    color: var(--accent-color);
  }
  
  /* Hero Section */
  .hero {
    background: linear-gradient(135deg, rgba(42, 67, 101, 0.85), rgba(56, 178, 172, 0.85)), url('img/hero-fitness.jpg') center center/cover no-repeat;
    min-height: 90vh;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: var(--light-text);
  }
  
  /* Boutons */
  .btn-primary {
    background-color: var(--secondary-color);
    border-color: var(--secondary-color);
    color: white;
    transition: all 0.3s;
  }
  .btn-primary:hover {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
    transform: translateY(-2px);
  }
  
  .btn-outline-light {
    border-color: var(--light-text);
    color: var(--light-text);
    transition: all 0.3s;
  }
  .btn-outline-light:hover {
    background-color: var(--light-text);
    color: var(--primary-color);
  }
  
  /* Cartes de fonctionnalités */
  .feature-card {
    background: white;
    border-radius: 12px;
    transition: all 0.3s;
    height: 100%;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    border: none;
    overflow: hidden;
  }
  
  .feature-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(56, 178, 172, 0.15);
  }
  
  .icon-circle {
    width: 80px;
    height: 80px;
    background: rgba(56, 178, 172, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--secondary-color);
    font-size: 1.8rem;
    margin: 0 auto;
  }
  
  /* Section À propos */
  .border-primary {
    border-color: var(--secondary-color) !important;
  }
  
  .text-primary {
    color: var(--secondary-color) !important;
  }
  
  /* Cartes d'abonnement */
  .membership-card {
    border-radius: 12px;
    overflow: hidden;
    background: white;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: all 0.3s;
    height: 100%;
    display: flex;
    flex-direction: column;
    border: none;
    position: relative;
  }
  
  .membership-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(56, 178, 172, 0.2);
  }
  
  .membership-card .card-header {
    padding: 2rem 1rem;
    text-align: center;
    color: white;
    position: relative;
  }
  
  .membership-card .price {
    font-size: 2.5rem;
    font-weight: bold;
    margin: 15px 0;
  }
  
  .membership-card.basic .card-header {
    background: linear-gradient(135deg, #4a5568, #718096);
  }
  
  .membership-card.premium .card-header {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
  }
  
  .membership-card.vip .card-header {
    background: linear-gradient(135deg, #2c5282, #4299e1);
  }
  
  .popular-badge {
    position: absolute;
    top: -10px;
    right: 20px;
    background: var(--accent-color);
    color: var(--dark-text);
    padding: 5px 15px;
    border-radius: 20px;
    font-weight: bold;
    font-size: 0.8rem;
    box-shadow: 0 3px 6px rgba(0,0,0,0.1);
  }
  
  /* Section Cours */
  .course-card {
    border: none;
    border-radius: 10px;
    overflow: hidden;
    transition: all 0.3s;
    box-shadow: 0 4px 6px rgba(0,0,0,0.05);
  }
  
  .course-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(56, 178, 172, 0.2);
  }
  
  /* Section Témoignages */
  .testimonial-card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    padding: 2rem;
    height: 100%;
  }
  
  /* Section CTA */
  .cta-section {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    position: relative;
    overflow: hidden;
  }
  
  .cta-section::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 100%;
    height: 200%;
    background: radial-gradient(circle, rgba(56,178,172,0.1) 0%, rgba(56,178,172,0) 70%);
  }
  
  /* Section Contact */
  .contact-info {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: white;
    border-radius: 10px;
    padding: 2rem;
    height: 100%;
  }
  
  /* Responsive */
  @media (max-width: 768px) {
    .hero {
      min-height: 80vh;
    }
    .hero h1 {
      font-size: 2.5rem;
    }
  }
  
  /* Animation */
  @keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0px); }
  }
  
  .floating {
    animation: float 3s ease-in-out infinite;
  }
  .popular-badge {
    position: absolute;
    top: -10px;
    right: 20px;
    background: #ffc107;
    color: #212529;
    padding: 5px 15px;
    border-radius: 20px;
    font-weight: bold;
    font-size: 0.8rem;
  }
  .popular-badge {
    background: var(--primary-light);
    color: var(--dark-text);
  }
</style>

<!-- Hero Section -->
<section class="hero" style="
  background: linear-gradient(rgba(0, 0, 0, 0.6), url('img/gm.jpg') center/cover no-repeat;
  min-height: 90vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: white;
  position: relative;
">
  <div class="container">
    <h1 class="display-3 fw-bold mb-3" data-aos="fade-down" style="
      color: white;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    ">xxxx FITNESS CLUB</h1>
    
    <p class="lead mb-5 fs-4" data-aos="fade-up" data-aos-delay="100" style="
      color: white;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    ">Transformez votre corps, inspirez votre esprit</p>
    
    <div data-aos="fade-up" data-aos-delay="200">
      <a href="#membership" class="btn btn-primary btn-lg rounded-pill px-5 py-3 me-3" style="
        background-color: #D2B48C;
        border-color: #D2B48C;
        color: #2c3e50;
        font-weight: 600;
        transition: all 0.3s;
      ">Voir les Offres</a>
      
      <a href="#contact" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3" style="
        border-color: white;
        color: white;
        transition: all 0.3s;
      ">Nous Contacter</a>
    </div>
  </div>
</section>

<style>
.btn-primary:hover {
  background-color: #c39e6d !important;
  border-color: #c39e6d !important;
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(210, 180, 140, 0.4);
}

.btn-outline-light:hover {
  background-color: white !important;
  color: #2c3e50 !important;
  transform: translateY(-3px);
}

@media (max-width: 768px) {
  .hero {
    min-height: 80vh;
    padding-top: 80px;
  }
  
  .hero h1 {
    font-size: 2.5rem;
  }
  
  .hero .btn {
    display: block;
    width: 100%;
    margin-bottom: 15px;
  }
  
  .hero .btn:last-child {
    margin-bottom: 0;
  }
}
</style>
<!-- Features Grid -->
<section class="container py-5" style="background-color: #f8f9fa;">
  <div class="text-center mb-5" data-aos="fade-up">
    <h2 class="fw-bold mb-3" style="color: #2c3e50;">NOS AVANTAGES EXCLUSIFS</h2>
    <p class="subtitle" style="color: #6c757d;">Découvrez ce qui fait la différence chez xxxx Fitness</p>
  </div>
  
  <div class="row g-4">
    <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
      <div class="feature-card p-4 text-center h-100" style="background-color: white; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-top: 4px solid #D2B48C;">
        <div class="icon-circle mb-4" style="width: 80px; height: 80px; background-color: rgba(210, 180, 140, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: #D2B48C;">
          <i class="fas fa-dumbbell fa-2x"></i>
        </div>
        <h3 class="mb-3" style="color: #2c3e50;">Équipements Premium</h3>
        <p style="color: #6c757d;">Matériel Technogym dernier cri pour des entraînements optimaux</p>
      </div>
    </div>
    
    <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
      <div class="feature-card p-4 text-center h-100" style="background-color: white; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-top: 4px solid #D2B48C;">
        <div class="icon-circle mb-4" style="width: 80px; height: 80px; background-color: rgba(210, 180, 140, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: #D2B48C;">
          <i class="fas fa-users fa-2x"></i>
        </div>
        <h3 class="mb-3" style="color: #2c3e50;">Coaching Expert</h3>
        <p style="color: #6c757d;">Programmes sur mesure avec nos coachs certifiés</p>
      </div>
    </div>
    
    <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
      <div class="feature-card p-4 text-center h-100" style="background-color: white; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-top: 4px solid #D2B48C;">
        <div class="icon-circle mb-4" style="width: 80px; height: 80px; background-color: rgba(210, 180, 140, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: #D2B48C;">
          <i class="fas fa-calendar-alt fa-2x"></i>
        </div>
        <h3 class="mb-3" style="color: #2c3e50;">+20 Cours Hebdo</h3>
        <p style="color: #6c757d;">HIIT, Yoga, Cross Training et bien plus</p>
      </div>
    </div>
    
    <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
      <div class="feature-card p-4 text-center h-100" style="background-color: white; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-top: 4px solid #D2B48C;">
        <div class="icon-circle mb-4" style="width: 80px; height: 80px; background-color: rgba(210, 180, 140, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; color: #D2B48C;">
          <i class="fas fa-heartbeat fa-2x"></i>
        </div>
        <h3 class="mb-3" style="color: #2c3e50;">Bien-être Complet</h3>
        <p style="color: #6c757d;">Approche holistique pour un équilibre parfait</p>
      </div>
    </div>
  </div>
</section>

<style>
.feature-card {
  transition: all 0.3s ease;
}

.feature-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 30px rgba(210, 180, 140, 0.15) !important;
  border-top-color: #c0392b !important;
}

@media (max-width: 768px) {
  .feature-card {
    margin-bottom: 20px;
  }
  
  .icon-circle {
    width: 60px !important;
    height: 60px !important;
  }
}
</style>

<!-- About Gym Section -->
<div class="container-fluid py-5 bg-white">
  <div class="container py-5">
    <div class="row align-items-center g-5">
      <div class="col-lg-6" data-aos="fade-right">
        <img class="img-fluid w-100 rounded-4 shadow floating" src="img/gym1.jpg" alt="Salle de sport xxxx">
      </div>

      <div class="col-lg-6" data-aos="fade-left">
        <span class="badge bg-primary bg-opacity-10 text-primary mb-3">À PROPOS DE NOUS</span>
        <h2 class="mb-4 fw-bold">Performance et Bien-être au <span class="text-primary">Gym xxxx</span></h2>

        <p class="mb-4 border-start border-primary ps-4 border-3">
          Découvrez un espace entièrement pensé pour votre santé physique et mentale.  
          Notre salle de sport combine équipements haut de gamme, entraînements personnalisés et conseils d'experts.
        </p>

        <div class="row g-3 mb-4">
          <div class="col-md-6">
            <div class="d-flex align-items-center">
              <div class="icon-circle-sm bg-primary bg-opacity-10 text-primary me-3">
                <i class="fas fa-check"></i>
              </div>
              <span>Coachs experts diplômés</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-center">
              <div class="icon-circle-sm bg-primary bg-opacity-10 text-primary me-3">
                <i class="fas fa-check"></i>
              </div>
              <span>Programmes personnalisés</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-center">
              <div class="icon-circle-sm bg-primary bg-opacity-10 text-primary me-3">
                <i class="fas fa-check"></i>
              </div>
              <span>Suivi nutritionnel</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-center">
              <div class="icon-circle-sm bg-primary bg-opacity-10 text-primary me-3">
                <i class="fas fa-check"></i>
              </div>
              <span>Ambiance motivante</span>
            </div>
          </div>
        </div>

        <div class="row text-center g-3 mb-4">
          <div class="col-6">
            <div class="p-3 border rounded-3">
              <h3 class="text-primary mb-0">+15</h3>
              <small class="text-muted">COACHS EXPERTS</small>
            </div>
          </div>
          <div class="col-6">
            <div class="p-3 border rounded-3">
              <h3 class="text-primary mb-0">+1500</h3>
              <small class="text-muted">MEMBRES SATISFAITS</small>
            </div>
          </div>
        </div>

        <a href="#contact" class="btn btn-primary btn-lg rounded-pill px-4">
          Rejoignez-nous <i class="fas fa-arrow-right ms-2"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Membership Plans -->
<section id="membership" class="py-5" style="background-color: #fff8f0;">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold" style="color: #2c3e50;">NOS FORMULES D'ABONNEMENT</h2>
      <p class="subtitle" style="color: #6c757d;">Trouvez la formule qui correspond à vos objectifs</p>
    </div>
    
    <div class="row g-4">
      <!-- Basic Plan -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="membership-card h-100" style="
          background: white;
          border-radius: 12px;
          overflow: hidden;
          box-shadow: 0 5px 15px rgba(0,0,0,0.05);
          transition: all 0.3s;
          display: flex;
          flex-direction: column;
        ">
          <div class="card-header" style="
            padding: 2rem 1rem;
            text-align: center;
            color: white;
            position: relative;
            background: linear-gradient(135deg, #ADB2D4,rgb(244, 232, 182));
          ">
            <h3 class="mb-0">BASIC</h3>
            <div class="price" style="
              font-size: 2.5rem;
              font-weight: bold;
              margin: 15px 0;
            ">5,000 DA<span style="font-size: 1rem;">/mois</span></div>
          </div>
          <div class="p-4 flex-grow-1">
            <ul class="list-unstyled mb-4">
              <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Accès illimité à la salle</li>
              <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Vestiaires</li>
              <li class="mb-3"><i class="fas fa-times text-danger me-2"></i> Cours collectifs</li>
              <li class="mb-3"><i class="fas fa-times text-danger me-2"></i> Coaching personnel</li>
            </ul>
          </div>
          <div class="p-4 pt-0">
            <button class="btn btn-outline-primary w-100 rounded-pill" style="
              border-color: #D2B48C;
              color: #D2B48C;
              font-weight: 600;
            ">S'inscrire</button>
          </div>
        </div>
      </div>
      
      <!-- Recommended Plan -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="membership-card h-100" style="
          background: white;
          border-radius: 12px;
          overflow: hidden;
          box-shadow: 0 5px 15px rgba(0,0,0,0.05);
          transition: all 0.3s;
          display: flex;
          flex-direction: column;
          position: relative;
        ">
          <div class="popular-badge" style="
            position: absolute;
            top: 2px;
            right:1px;

            background:rgb(249, 195, 46);
            color: #2c3e50;
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 0.8rem;
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
            z-index: 1;
          ">POPULAIRE</div>
          <div class="card-header" style="
            padding: 2rem 1rem;
            text-align: center;
            color: white;
            position: relative;
            background: linear-gradient(135deg,rgb(255, 213, 151),rgb(243, 182, 175));
          ">
            <h3 class="mb-0">PREMIUM</h3>
            <div class="price" style="
              font-size: 2.5rem;
              font-weight: bold;
              margin: 15px 0;
            ">10,000 DA<span style="font-size: 1rem;">/mois</span></div>
          </div>
          <div class="p-4 flex-grow-1">
            <ul class="list-unstyled mb-4">
              <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Tout Basic inclus</li>
              <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Cours collectifs illimités</li>
              <li class="mb-3"><i class="fas fa-check text-success me-2"></i> 2 séances coaching/mois</li>
              <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Accès sauna</li>
            </ul>
          </div>
          <div class="p-4 pt-0">
            <button class="btn btn-primary w-100 rounded-pill" style="
              background-color: #D2B48C;
              border-color: #D2B48C;
              color: #2c3e50;
              font-weight: 600;
            ">S'inscrire</button>
          </div>
        </div>
      </div>
      
      <!-- VIP Plan -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="membership-card h-100" style="
          background: white;
          border-radius: 12px;
          overflow: hidden;
          box-shadow: 0 5px 15px rgba(0,0,0,0.05);
          transition: all 0.3s;
          display: flex;
          flex-direction: column;
        ">
          <div class="card-header" style="
            padding: 2rem 1rem;
            text-align: center;
            color: white;
            position: relative;
             background: linear-gradient(135deg, #D2B48C, #e67e22);

          ">
            <h3 class="mb-0">VIP</h3>
            <div class="price" style="
              font-size: 2.5rem;
              font-weight: bold;
              margin: 15px 0;
            ">15,000 DA<span style="font-size: 1rem;">/mois</span></div>
          </div>
          <div class="p-4 flex-grow-1">
            <ul class="list-unstyled mb-4">
              <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Tout Premium inclus</li>
              <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Coaching illimité</li>
              <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Programme nutritionnel</li>
              <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Accès 24/7</li>
            </ul>
          </div>
          <div class="p-4 pt-0">
            <button class="btn btn-primary w-100 rounded-pill" style="
              background-color: #D2B48C;
              border-color: #D2B48C;
              color: #2c3e50;
              font-weight: 600;
            ">S'inscrire</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.membership-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 30px rgba(210, 180, 140, 0.2) !important;
}

.btn-outline-primary:hover {
  background-color: #D2B48C !important;
  color: white !important;
}

.btn-primary:hover {
  background-color: #c39e6d !important;
  border-color: #c39e6d !important;
  transform: translateY(-2px);
}

@media (max-width: 768px) {
  .membership-card {
    margin-bottom: 30px;
  }
  
  .popular-badge {
    right: 10px !important;
    font-size: 0.7rem !important;
    padding: 3px 10px !important;
  }
}
</style>
<!-- Fitness Section -->
<section id="section-fitness" class="fitness-section py-5" style="background-color: #f8f9fa;">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold" style="color: #2c3e50;">Salle de Sport du <?php echo $general_setting['Name'] ?></h2>
      <p class="subtitle" style="color: #6c757d;">Un espace dédié à votre bien-être et votre performance</p>
      <div class="section-divider mx-auto" style="width: 80px; height: 3px; background-color: #d4a373;"></div>
    </div>

    <div class="row g-4">
      <!-- Accès à la Salle -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="info-card h-100 p-4" style="background-color: white; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border: 1px solid rgba(212, 163, 115, 0.2);">
          <div class="d-flex align-items-center mb-3">
            <div class="icon-circle-sm me-3" style="width: 40px; height: 40px; background-color: rgba(212, 163, 115, 0.1); color: #d4a373; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
              <i class="fas fa-door-open"></i>
            </div>
            <h4 class="info-title mb-0" style="color: #2c3e50;">Accès à la Salle</h4>
          </div>
          <ul class="info-list ps-0">
            <li class="d-flex mb-2">
              <i class="fas fa-clock me-2 mt-1" style="color: #d4a373;"></i>
              <span><strong>Horaires :</strong> de 8h00 à 22h00, 7j/7</span>
            </li>
            <li class="d-flex mb-2">
              <i class="fas fa-key me-2 mt-1" style="color: #d4a373;"></i>
              <span><strong>Accès :</strong> Gratuit pour les résidents</span>
            </li>
            <li class="d-flex">
              <i class="fas fa-user-plus me-2 mt-1" style="color: #d4a373;"></i>
              <span><strong>Extérieurs :</strong> Abonnements disponibles</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Cours Collectifs -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="info-card highlight-card h-100 p-4" style="background-color: white; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-left: 4px solid #e67e22; background-color: rgba(255, 243, 205, 0.3);">
          <div class="d-flex align-items-center mb-3">
            <div class="icon-circle-sm me-3" style="width: 40px; height: 40px; background-color: rgba(212, 163, 115, 0.2); color: #d4a373; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
              <i class="fas fa-users"></i>
            </div>
            <h4 class="info-title mb-0" style="color: #2c3e50;">Cours Collectifs</h4>
          </div>
          <div class="info-content">
            <div class="highlight-text p-3 rounded mb-3" style="background-color: rgba(230, 126, 34, 0.1);">
              <p class="mb-0">
                Yoga, CrossFit, HIIT, Spinning, Zumba et plus encore !
                Découvrez notre <strong>planning hebdomadaire</strong> complet.
              </p>
            </div>
            <p class="mb-0">
              Nos coachs professionnels vous accompagnent dans des séances variées adaptées à tous les niveaux.
            </p>
          </div>
        </div>
      </div>

      <!-- Coaching Personnalisé -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="info-card h-100 p-4" style="background-color: white; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border: 1px solid rgba(212, 163, 115, 0.2);">
          <div class="d-flex align-items-center mb-3">
            <div class="icon-circle-sm me-3" style="width: 40px; height: 40px; background-color: rgba(212, 163, 115, 0.1); color: #d4a373; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
              <i class="fas fa-user-tie"></i>
            </div>
            <h4 class="info-title mb-0" style="color: #2c3e50;">Coaching Personnalisé</h4>
          </div>
          <div class="info-content">
            <p>
              Programme sur mesure avec nos coachs diplômés : perte de poids, prise de masse, remise en forme, préparation sportive.
            </p>
            <p class="mb-0">
              Séances individuelles ou en petits groupes sur réservation.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Call to Action -->
    <div class="cta-box text-center mt-5 p-4 p-lg-5 rounded-3" data-aos="fade-up" style="background-color: white; border: 1px solid rgba(212, 163, 115, 0.2); box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
      <p class="lead mb-4">
        Pour consulter le planning détaillé ou réserver une séance, contactez notre équipe ou rendez-vous à la réception.
      </p>
      <a href="#contact" class="btn btn-primary btn-lg px-4 py-3" style="background-color: #d4a373; border-color: #d4a373;">
        <i class="fas fa-dumbbell me-2"></i> Rejoignez-nous
      </a>
    </div>
  </div>
</section>

<style>
.info-card {
  transition: all 0.3s ease;
}

.info-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(212, 163, 115, 0.15) !important;
}

.highlight-card:hover {
  border-left-color: #c0392b !important;
}

@media (max-width: 768px) {
  .info-card, .cta-box {
    padding: 1.5rem !important;
  }
  
  .icon-circle-sm {
    width: 35px !important;
    height: 35px !important;
  }
}
</style>
<!-- Weekly Schedule -->
<section class="py-5" style="background-color: #fff8f0;">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold" style="color: #d4a373;">PLANNING HEBDOMADAIRE</h2>
      <p class="text-muted">Découvrez nos cours et activités</p>
    </div>

    <div class="row g-4">
      <!-- Lundi -->
      <div class="col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
        <div class="schedule-card p-4 h-100" style="background-color: white; border-radius: 12px; border: 1px solid rgba(212, 163, 115, 0.2);">
          <div class="d-flex align-items-center mb-3">
            <div class="day-icon me-3" style="width: 60px; height: 60px; background-color: rgba(212, 163, 115, 0.1); color: #d4a373; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
              <i class="fas fa-spa fa-2x"></i>
            </div>
            <h4 class="mb-0" style="color: #2c3e50;">Lundi</h4>
          </div>
          <ul class="list-unstyled">
            <li class="d-flex mb-2">
              <i class="fas fa-spa me-2 mt-1" style="color: #d4a373;"></i>
              <span>Yoga - 9h00</span>
            </li>
            <li class="d-flex mb-2">
              <i class="fas fa-dumbbell me-2 mt-1" style="color: #d4a373;"></i>
              <span>CrossFit - 17h00</span>
            </li>
            <li class="d-flex">
              <i class="fas fa-bicycle me-2 mt-1" style="color: #d4a373;"></i>
              <span>Spinning - 19h00</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Mardi -->
      <div class="col-md-4 col-6" data-aos="fade-up" data-aos-delay="200">
        <div class="schedule-card p-4 h-100" style="background-color: white; border-radius: 12px; border: 1px solid rgba(212, 163, 115, 0.2);">
          <div class="d-flex align-items-center mb-3">
            <div class="day-icon me-3" style="width: 60px; height: 60px; background-color: rgba(212, 163, 115, 0.1); color: #d4a373; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
              <i class="fas fa-bolt fa-2x"></i>
            </div>
            <h4 class="mb-0" style="color: #2c3e50;">Mardi</h4>
          </div>
          <ul class="list-unstyled">
            <li class="d-flex mb-2">
              <i class="fas fa-bolt me-2 mt-1" style="color: #d4a373;"></i>
              <span>HIIT - 10h00</span>
            </li>
            <li class="d-flex mb-2">
              <i class="fas fa-spa me-2 mt-1" style="color: #d4a373;"></i>
              <span>Pilates - 18h00</span>
            </li>
            <li class="d-flex">
              <i class="fas fa-boxing-glove me-2 mt-1" style="color: #d4a373;"></i>
              <span>Boxe Fitness - 18h30</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Mercredi -->
      <div class="col-md-4 col-6" data-aos="fade-up" data-aos-delay="300">
        <div class="schedule-card p-4 h-100" style="background-color: white; border-radius: 12px; border: 1px solid rgba(212, 163, 115, 0.2);">
          <div class="d-flex align-items-center mb-3">
            <div class="day-icon me-3" style="width: 60px; height: 60px; background-color: rgba(212, 163, 115, 0.1); color: #d4a373; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
              <i class="fas fa-music fa-2x"></i>
            </div>
            <h4 class="mb-0" style="color: #2c3e50;">Mercredi</h4>
          </div>
          <ul class="list-unstyled">
            <li class="d-flex mb-2">
              <i class="fas fa-spa me-2 mt-1" style="color: #d4a373;"></i>
              <span>Yoga Doux - 8h30</span>
            </li>
            <li class="d-flex mb-2">
              <i class="fas fa-dumbbell me-2 mt-1" style="color: #d4a373;"></i>
              <span>Renforcement - 17h00</span>
            </li>
            <li class="d-flex">
              <i class="fas fa-music me-2 mt-1" style="color: #d4a373;"></i>
              <span>Zumba - 19h00</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Jeudi -->
      <div class="col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
        <div class="schedule-card p-4 h-100" style="background-color: white; border-radius: 12px; border: 1px solid rgba(212, 163, 115, 0.2);">
          <div class="d-flex align-items-center mb-3">
            <div class="day-icon me-3" style="width: 60px; height: 60px; background-color: rgba(212, 163, 115, 0.1); color: #d4a373; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
              <i class="fas fa-heartbeat fa-2x"></i>
            </div>
            <h4 class="mb-0" style="color: #2c3e50;">Jeudi</h4>
          </div>
          <ul class="list-unstyled">
            <li class="d-flex mb-2">
              <i class="fas fa-heartbeat me-2 mt-1" style="color: #d4a373;"></i>
              <span>Cardio Training - 9h30</span>
            </li>
            <li class="d-flex mb-2">
              <i class="fas fa-spa me-2 mt-1" style="color: #d4a373;"></i>
              <span>Stretching - 15h00</span>
            </li>
            <li class="d-flex">
              <i class="fas fa-bicycle me-2 mt-1" style="color: #d4a373;"></i>
              <span>RPM Vélo - 18h00</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Vendredi -->
      <div class="col-md-4 col-6" data-aos="fade-up" data-aos-delay="200">
        <div class="schedule-card p-4 h-100" style="background-color: white; border-radius: 12px; border: 1px solid rgba(212, 163, 115, 0.2);">
          <div class="d-flex align-items-center mb-3">
            <div class="day-icon me-3" style="width: 60px; height: 60px; background-color: rgba(212, 163, 115, 0.1); color: #d4a373; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
              <i class="fas fa-running fa-2x"></i>
            </div>
            <h4 class="mb-0" style="color: #2c3e50;">Vendredi</h4>
          </div>
          <ul class="list-unstyled">
            <li class="d-flex mb-2">
              <i class="fas fa-dumbbell me-2 mt-1" style="color: #d4a373;"></i>
              <span>Cross Training - 11h00</span>
            </li>
            <li class="d-flex mb-2">
              <i class="fas fa-spa me-2 mt-1" style="color: #d4a373;"></i>
              <span>Yoga Flow - 18h00</span>
            </li>
            <li class="d-flex">
              <i class="fas fa-running me-2 mt-1" style="color: #d4a373;"></i>
              <span>Bootcamp - 18h30</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Samedi -->
      <div class="col-md-4 col-6" data-aos="fade-up" data-aos-delay="300">
        <div class="schedule-card p-4 h-100" style="background-color: white; border-radius: 12px; border: 1px solid rgba(212, 163, 115, 0.2);">
          <div class="d-flex align-items-center mb-3">
            <div class="day-icon me-3" style="width: 60px; height: 60px; background-color: rgba(212, 163, 115, 0.1); color: #d4a373; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
              <i class="fas fa-water fa-2x"></i>
            </div>
            <h4 class="mb-0" style="color: #2c3e50;">Samedi</h4>
          </div>
          <ul class="list-unstyled">
            <li class="d-flex mb-2">
              <i class="fas fa-swimmer me-2 mt-1" style="color: #d4a373;"></i>
              <span>Aquagym - 10h00</span>
            </li>
            <li class="d-flex mb-2">
              <i class="fas fa-dumbbell me-2 mt-1" style="color: #d4a373;"></i>
              <span>Circuit Training - 16h00</span>
            </li>
            <li class="d-flex">
              <i class="fas fa-spa me-2 mt-1" style="color: #d4a373;"></i>
              <span>Yoga Détente - 18h00</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.schedule-card {
  transition: all 0.3s ease;
}

.schedule-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(212, 163, 115, 0.15);
  border-color: rgba(212, 163, 115, 0.4) !important;
}

@media (max-width: 768px) {
  .schedule-card {
    padding: 1.5rem !important;
  }
  
  .day-icon {
    width: 50px !important;
    height: 50px !important;
  }
}
</style>
<!-- Gallery Section -->
<section class="py-5">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold">NOTRE UNIVERS</h2>
      <p class="text-muted">Découvrez les espaces de notre salle de sport</p>
    </div>
    
    <div class="row g-3">
      <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100">
        <div class="gallery-item position-relative overflow-hidden rounded-3">
          <img src="img/gm.jpg" alt="Zone cardio" class="img-fluid w-100">
          <div class="gallery-caption position-absolute bottom-0 start-0 end-0 p-3 text-center text-white bg-dark bg-opacity-75">
            Zone Cardio
          </div>
        </div>
      </div>
      <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
        <div class="gallery-item position-relative overflow-hidden rounded-3">
          <img src="img/s-6.jpg" alt="Musculation" class="img-fluid w-100">
          <div class="gallery-caption position-absolute bottom-0 start-0 end-0 p-3 text-center text-white bg-dark bg-opacity-75">
            Espace Musculation
          </div>
        </div>
      </div>
      <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
        <div class="gallery-item position-relative overflow-hidden rounded-3">
          <img src="img/sp1.png" alt="Cours collectifs" class="img-fluid w-100">
          <div class="gallery-caption position-absolute bottom-0 start-0 end-0 p-3 text-center text-white bg-dark bg-opacity-75">
            Cours Collectifs
          </div>
        </div>
      </div>
      <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="400">
        <div class="gallery-item position-relative overflow-hidden rounded-3">
          <img src="img/gym5.jpg" alt="Coaching" class="img-fluid w-100">
          <div class="gallery-caption position-absolute bottom-0 start-0 end-0 p-3 text-center text-white bg-dark bg-opacity-75">
            Coaching Privé
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="py-5" style="background-color: #fff8f0;">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold" style="color: #2c3e50;">ILS NOUS FONT CONFIANCE</h2>
      <p class="subtitle" style="color: #6c757d;">Ce que nos membres disent de nous</p>
    </div>
    
    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="testimonial-card p-4" style="background-color: white; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-top: 4px solid #d4a373;">
          <div class=" mb-3" style=" color: #ffc107;
;">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="mb-4" style="color: #555;">"En 8 mois, j'ai totalement transformé mon physique grâce aux conseils des coachs xxxx."</p>
          <div class="d-flex align-items-center">
            <img src="img/user1.jpg" alt="Karim" class="rounded-circle me-3" width="50" style="border: 2px solid #d4a373;">
            <div>
              <div class="fw-bold" style="color: #2c3e50;">Karim B.</div>
              <small class="text-muted">Membre depuis 2022</small>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="testimonial-card p-4" style="background-color: white; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-top: 4px solid #d4a373;">
          <div class="rating mb-3" style="    color: #ffc107;
">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
          </div>
          <p class="mb-4" style="color: #555;">"L'ambiance est incroyable, on se sent tout de suite à l'aise. Les équipements sont impeccables."</p>
          <div class="d-flex align-items-center">
            <img src="img/user2.jpg" alt="Sarah" class="rounded-circle me-3" width="50" style="border: 2px solid #d4a373;">
            <div>
              <div class="fw-bold" style="color: #2c3e50;">Sarah T.</div>
              <small class="text-muted">Membre VIP</small>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="testimonial-card p-4" style="background-color: white; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-top: 4px solid #d4a373;">
          <div class="rating mb-3" style="color: #ffc107;
;">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="mb-4" style="color: #555;">"La variété des cours m'a permis de découvrir de nouvelles passions comme le TRX et le yoga dynamique."</p>
          <div class="d-flex align-items-center">
            <img src="img/user3.jpg" alt="Mehdi" class="rounded-circle me-3" width="50" style="border: 2px solid #d4a373;">
            <div>
              <div class="fw-bold" style="color: #2c3e50;">Mehdi K.</div>
              <small class="text-muted">Membre Premium</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.testimonial-card {
  transition: all 0.3s ease;
  height: 100%;
}

.testimonial-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(212, 163, 115, 0.15) !important;
  border-top-color: #c0392b !important;
}

.rating i {
  margin-right: 3px;
}

@media (max-width: 768px) {
  .testimonial-card {
    margin-bottom: 20px;
  }
}
</style>
<!-- CTA Section -->
<section class="py-5 cta-section text-white">
  <div class="container text-center position-relative">
    <div class="py-5">
      <h2 class="fw-bold mb-4 display-5" data-aos="fade-up">PRÊT À TRANSFORMER VOTRE VIE ?</h2>
      <p class="lead mb-5" data-aos="fade-up" data-aos-delay="100">Rejoignez notre communauté et commencez votre voyage vers une meilleure version de vous-même</p>
      
      <div class="d-flex justify-content-center gap-3 flex-wrap" data-aos="fade-up" data-aos-delay="200">
        <a href="#contact" class="btn btn-light btn-lg px-4 py-3 rounded-pill fw-bold">
          <i class="fas fa-user-plus me-2"></i> S'inscrire
        </a>
        <a href="tel:+213458789012" class="btn btn-outline-light btn-lg px-4 py-3 rounded-pill">
          <i class="fas fa-phone-alt me-2"></i> 458 789 012
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5 bg-light">
  <div class="container">
    <div class="row g-5 align-items-center">
      <!-- Contact Details -->
      <div class="col-lg-5" data-aos="fade-right">
        <div class="contact-info p-4 p-lg-5 h-100">
          <h3 class="fw-bold mb-4">Nos Coordonnées</h3>
          
          <div class="d-flex mb-4">
            <div class="icon-circle-sm bg-white bg-opacity-10 text-white me-3 flex-shrink-0">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div>
              <h5 class="mb-0">Adresse</h5>
              <p class="mb-0">Appart Hôtel xxxx, Oran, Algérie</p>
            </div>
          </div>
          
          <div class="d-flex mb-4">
            <div class="icon-circle-sm bg-white bg-opacity-10 text-white me-3 flex-shrink-0">
              <i class="fas fa-phone-alt"></i>
            </div>
            <div>
              <h5 class="mb-0">Téléphone</h5>
              <p class="mb-0"><a href="tel:+213458789012" class="text-white">+213 458 789 012</a></p>
            </div>
          </div>
          
          <div class="d-flex mb-4">
            <div class="icon-circle-sm bg-white bg-opacity-10 text-white me-3 flex-shrink-0">
              <i class="fas fa-envelope"></i>
            </div>
            <div>
              <h5 class="mb-0">Email</h5>
              <p class="mb-0"><a href="mailto:fitness@xxxxhotel.com" class="text-white">fitness@xxxxhotel.com</a></p>
            </div>
          </div>
          
          <div class="d-flex mb-4">
            <div class="icon-circle-sm bg-white bg-opacity-10 text-white me-3 flex-shrink-0">
              <i class="fas fa-clock"></i>
            </div>
            <div>
              <h5 class="mb-0">Horaires</h5>
              <p class="mb-0">Ouvert 24h/24 - 7j/7</p>
            </div>
          </div>
          
          <div class="mt-5">
            <h5 class="mb-3">Suivez-nous</h5>
            <a href="#" class="text-white me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
            <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
            <a href="#" class="text-white me-3"><i class="fab fa-youtube fa-lg"></i></a>
            <a href="#" class="text-white"><i class="fab fa-tiktok fa-lg"></i></a>
          </div>
        </div>
      </div>


<div class="col-lg-7" data-aos="fade-left">
  <div class="bg-white p-4 p-lg-5 rounded-3 shadow-sm">
    <h3 class="fw-bold mb-4 text-primary">Envoyez-nous un message</h3>
    <div class="message"></div>
			<div class="contact-form">
				<h1>Contact Us</h1>
				<p class="hint-text">We'd love to hear from you, please drop us a line if you've any query.</p>
				<form id="contact-form" action="functions.php" method="post" autocomplete="off">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputFirstName">First Name</label>
								<input type="text" class="form-control" id="FirstName" name="FirstName" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputLastName">Last Name</label>
								<input type="text" class="form-control" id="LastName" name="LastName" required>
							</div>
						</div>
					</div>            
					<div class="form-group">
						<label for="inputEmail">Email Address</label>
						<input type="email" class="form-control" id="Email" name="Email" required>
					</div>
					<div class="form-group">
						<label for="inputMessage">Message</label>
						<textarea class="form-control" id="Message" name="Message" rows="5" required></textarea>
					</div>
					<button type="submit" class="btn btn-primary fas fa-paper-plane ms-2" name = "contact" > Submit </button>
				</form>
			</div>
		</div>
	</div>
</section>

    </div>
  </div>
</section>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true,
  });
</script>
<script>
	$(document).ready(function(){
	$('#contact-form').on('submit',function(e){
	  e.preventDefault();
      var formData = new FormData(this);

      $.ajax({
        url:"functions.php",
        type:"POST",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success:function(data){      
			console.log("data");
		  console.log(data);
          var json = JSON.parse(data);
          if(json['error']!=""){
             $('.message').html(`<div class="alert alert-danger" role="alert"> ${json['error']}  </div>`);
			 $('#contact-form')[0].reset();
          }else{
			$('.message').html(`<div class="alert alert-success" role="alert"> ${json['msg']}  </div>`);
			$('#contact-form')[0].reset();
          }
          
           
       },
       error: function(data){
           console.log("error");
           console.log(data);
       }
      });
		})
	})
</script>

<?php include('include/footer.php'); ?>