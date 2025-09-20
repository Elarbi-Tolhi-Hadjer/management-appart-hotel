
<?php
 session_start();
 include('include/currentPage_header.php');
 include('include/dbConnect.php');
 ?>
<style>
   /* Updated Color Palette */
   :root {
    --primary: #2c3e50;       /* Dark blue for text */
    --secondary: #3498db;     /* Keeping original secondary */
    --accent: #D2B48C;       /* Sandy beige as main accent */
    --accent-dark: #c39e6d;   /* Darker beige for hover states */
    --light: #f8f9fa;        /* Light background */
    --dark: #212529;         /* Dark background */
    --text-light: #ffffff;   /* White text */
    --text-dark: #2c3e50;    /* Dark blue text */
  }

  /* Background with overlay */
  .hero-section {
    position: relative;
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('your-background-image.jpg');
    background-size: cover;
    background-position: center;
    color: var(--text-light);
  }

  /* Updated buttons */
  .btn {
    padding: 14px 30px;
    background: var(--accent);
    color: var(--text-dark);
    border: none;
    border-radius: 30px;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
    background: var(--accent-dark);
    color: var(--text-dark);
  }

  /* Updated section titles */
  .section-title {
    color: var(--primary);
    position: relative;
  }

  .section-title::after {
    content: '';
    position: absolute;
    width: 60px;
    height: 3px;
    background: var(--accent);
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
  }

  /* Updated service boxes */
  .service-box {
    background: rgba(210, 180, 140, 0.1);
    border-left: 3px solid var(--accent);
  }

  .service-box i {
    color: var(--accent);
  }

  /* Updated capacity boxes */
  .capacity-box {
    border-top: 3px solid var(--accent);
  }

  /* Keep all your existing styles below this line */
  .capacity-box {
    transition: all 0.3s ease-in-out;
  }
  .capacity-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
  }
  .about-section {
            padding: 60px 0;
        }
        .service-box {
            display: flex;
            align-items: center;
            background: #f8f8f8;
            padding: 15px;
            border-radius: 8px;
            margin: 10px 0;
        }
        .service-box i {
            font-size: 24px;
            color: #c3924e;
            margin-right: 15px;
        }
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    background-color: #000;
    color: white;
}

.container {
    max-width: 1200px;
    margin: auto;
    padding: 20px;
}

.video-section {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 50px 0;
    text-align: left;
}

.video-container {
    flex: 1;
    padding-right: 20px;
}

video {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.description {
    flex: 1;
}

   .capacity-box {
    transition: all 0.3s ease-in-out;
  }
  .capacity-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
  }
  .about-section {
            padding: 60px 0;
        }
        .service-box {
            display: flex;
            align-items: center;
            background: #f8f8f8;
            padding: 15px;
            border-radius: 8px;
            margin: 10px 0;
        }
        .service-box i {
            font-size: 24px;
            color: #c3924e;
            margin-right: 15px;
        }
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    background-color: #000;
    color: white;
}

.container {
    max-width: 1200px;
    margin: auto;
    padding: 20px;
}

.video-section {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 50px 0;
    text-align: left;
}

.video-container {
    flex: 1;
    padding-right: 20px;
}

video {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.description {
    flex: 1;
}

.btn {
    display: inline-block;
    padding: 12px 25px;
    background-color: #ffcc00;
    color: #333;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: 0.3s;
}

.btn:hover {
    background-color: #e6b800;
}
:root {
    --primary: #2c3e50;
    --secondary: #3498db;
    --accent: #f1c40f;
    --light: #f8f9fa;
    --dark: #212529;
  }

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }

  body {
    background: var(--light);
    color: var(--dark);
    line-height: 1.6;
  }

  .container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 2rem;
  }

  /* Modern Button */
  .btn {
    padding: 14px 30px;
    background: var(--secondary);
    color: white;
    border: none;
    border-radius: 30px;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
    background: var(--accent);
  }

  /* Section styling */
  .section {
    padding: 6rem 0;
    position: relative;
  }

  .section-title {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 2rem;
    position: relative;
    text-transform: uppercase;
    color: var(--primary);
  }

  .section-title::after {
    content: '';
    position: absolute;
    width: 60px;
    height: 3px;
    background: var(--secondary);
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
  }

  /* Video Section */
  .video-section {
    background: linear-gradient(135deg, #ffffff 0%, #f1f1f1 100%);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  }

  video {
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  /* Services Grid */
  .services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
  }

  .service-card {
    background: white;
    border-radius: 15px;
    padding: 2rem;
    transition: transform 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
  }

  /* Capacity Stats */
  .capacity-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
  }

  .stat-box {
    background: white;
    border-radius: 15px;
    padding: 2rem;
    text-align: center;
    transition: transform 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .stat-box:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
  }

  /* Amenities */
  .amenities-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin: 2rem 0;
  }

  .amenity-item {
    background: white;
    border-radius: 10px;
    padding: 1.5rem;
    text-align: center;
    transition: transform 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .amenity-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
  }

  /* Team Section */
  .team-member {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .team-member:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
  }

  .team-member img {
    transition: transform 0.3s ease;
  }

  .team-member:hover img {
    transform: scale(1.1);
  }

  /* Responsive tweaks */
  @media (max-width: 768px) {
    .section {
      padding: 4rem 0;
    }
    
    .section-title {
      font-size: 2.5rem;
    }
  }
  /* Ajouter à votre bloc <style> existant */
.amenities-section {
  padding: 4rem 0;
}

.amenities-category {
  border-bottom: 1px solid #eee;
  padding-bottom: 3rem;
}

.amenities-list {
  list-style: none;
  padding-left: 1.2rem;
}

.amenities-list li {
  margin: 0.8rem 0;
  font-size: 1.05rem;
}

.amenities-list li i {
  width: 20px;
  text-align: center;
}

@media (max-width: 768px) {
  .amenities-list {
    padding-left: 0;
  }
  
}
</style>

<section class="about-section bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <img src="assets/picture/xxxx.jpg" class="img-fluid rounded shadow" alt="Appart Hôtel xxxx">
            </div> 
            <div class="col-md-6">
                <h1 class="section-title text-primary mb-4">À PROPOS</h1>
                <p>
                    Depuis son ouverture, <strong>Appart Hôtel xxxx</strong> accueille ses visiteu dans un cadre moderne et chaleureux.
                    Situé en plein cœur de la ville, notre établissement offre des appartements équipés avec une vue panoramique 
                    sur la mer et les montagnes environnantes.
                </p>
                <p>
                    À seulement 10 minutes de l'aéroport et proche des centres commerciaux et des attractions touristiques, 
                    notre hôtel est idéal pour les voyageurs à la recherche de confort et de sérénité.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <div class="service-box d-flex align-items-center">
                        <i class="fas fa-plane text-primary me-2"></i> <span>Aéroport à proximité</span>
                    </div>
                    <div class="service-box d-flex align-items-center">
                        <i class="fas fa-water text-primary me-2"></i> <span>Vue sur la mer</span>
                    </div>
                    <div class="service-box d-flex align-items-center">
                        <i class="fas fa-parking text-primary me-2"></i> <span>Parking sécurisé</span>
                    </div>
               
            </div>
        </div>
    </div>
</section>

<section class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="text-primary mb-4">Àbout Nos</h2>
                <p class="lead">Découvrez le confort et l'élégance de l'<strong>Appart Hôtel xxxx</strong>, un établissement 4 étoiles situé au cœur d'Oran.</p>
                <ul class="list-unstyled mt-4">
                    <li><i class="fas fa-home text-success"></i> 20 appartements modernes avec cuisine équipée</li>
                    <li><i class="fas fa-wifi text-success"></i> Wi-Fi gratuit haut débit</li>
                    <li><i class="fas fa-spa text-success"></i> Spa, hammam et salle de sport</li>
                    <li><i class="fas fa-utensils text-success"></i> Restaurant gastronomique sur place</li>
                    <li><i class="fas fa-concierge-bell text-success"></i> Service de conciergerie 24/7</li>
                </ul>
                </div>
                <div class="col-lg-6 text-center">
                <img src="img.jpg" class="img-fluid rounded shadow" alt="Appart Hôtel xxxx">
            </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Video Section -->
<section class="video-section section py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="video-container position-relative rounded overflow-hidden shadow-lg">
          <video controls class="w-100 rounded">
            <source src="xxxx.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la lecture des vidéos.
          </video>
        </div>
      </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <h2 class="section-title text-primary">Bienvenue à <span class="fw-bold">xxxx</span></h2>
        <p class="lead text-muted">Découvrez notre hôtel 4 étoiles à Oran :</p>
        <ul class="list-unstyled mt-4">
          <li class="mb-2"><i class="bi bi-stars text-warning"></i> Vue imprenable sur la ville</li>
          <li class="mb-2"><i class="bi bi-geo-alt text-danger"></i> Accès direct aux principales attractions</li>
          <li class="mb-2"><i class="bi bi-briefcase text-success"></i> Services premium pour voyageurs d'affaires</li>
          <li class="mb-2"><i class="bi bi-people text-info"></i> Espaces événementiels modulables</li>
        </ul>
        <a href="client/room.php" class="btn btn-primary mt-4 px-4 py-2 shadow">Réserver maintenant</a>
      </div>
    </div>
  </div>
</section>

  
</section>
<section class="section bg-light py-5">
  <div class="container">
    <h2 class="section-title text-center mb-4">Localisation Idéale</h2>
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="rounded shadow-sm overflow-hidden">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d74376.13706217386!2d-0.6381918999999999!3d35.711116399999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7e8854841f537d%3A0x4187f63762f7290f!2sOran!5e1!3m2!1sfr!2sdz!4v1758207489304!5m2!1sfr!2sdz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="col-lg-6 mt-4 mt-lg-0">
        <div class="p-4 border rounded bg-white shadow-sm">
          <h4 class="text-primary">📍 Adresse :</h4>
          <p class="mb-3 fw-bold">123 Boulevard de la Corniche, Oran 31000</p>
          
          <h4 class="text-primary">🏆 Points d'intérêt :</h4>
          <ul class="list-unstyled mt-3">
            <li><i class="bi bi-geo-alt-fill text-danger"></i> MARRAKECH MALL - 1.2 km</li>
            <li><i class="bi bi-sun-fill text-warning"></i> Plage d'Oran - 3 km</li>
            <li><i class="bi bi-building text-secondary"></i> Centre des congrès - 800 m</li>
            <li><i class="bi bi-airplane-fill text-info"></i> Aéroport d'Oran - 15 km</li>
          </ul>
        </div>
      </div>
    </div>
    <section class="about-location text-center py-5">
  <div class="container">
    <h2 class="section-title">À Propos du Lieu</h2>
    <p class="text-muted">Un cadre exceptionnel pour un séjour inoubliable à Oran</p>
    <div class="row mt-5">
      <div class="col-md-4">
        <div class="info-card shadow-sm p-4 border rounded bg-white">
          <h5 class="text-primary">🏙 Emplacement</h5>
          <p>Au cœur de la ville, parfait pour les touristes et professionnels.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info-card shadow-sm p-4 border rounded bg-white">
          <h5 class="text-primary">🛍 Commodités</h5>
          <p>Proche des centres commerciaux et des attractions locales.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info-card shadow-sm p-4 border rounded bg-white">
          <h5 class="text-primary">🌊 Vue & Confort</h5>
          <p>Équipements modernes avec une vue imprenable sur la mer.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<!-- Services Section -->
<section class="services bg-light py-5">
  <div class="container text-center">
    <h2 class="section-title mb-4">Nos Services Exclusifs</h2>
    <div class="row">
      <!-- Service: Bien-être -->
      <div class="col-md-4">
        <div class="service-card p-4 shadow-sm bg-white rounded">
          <h3 class="text-secondary"><i class="fas fa-spa me-2"></i> Bien-être</h3>
          <ul class="list-unstyled mt-3">
            <li><i class="fas fa-check-circle text-success"></i> Spa avec soins personnalisés</li>
            <li><i class="fas fa-check-circle text-success"></i> Hammam traditionnel</li>
            <li><i class="fas fa-check-circle text-success"></i> Salle de sport équipée Technogym</li>
          </ul>
        </div>
      </div>
      <!-- Service: Gastronomie -->
      <div class="col-md-4">
        <div class="service-card p-4 shadow-sm bg-white rounded">
          <h3 class="text-secondary"><i class="fas fa-utensils me-2"></i> Gastronomie</h3>
          <ul class="list-unstyled mt-3">
            <li><i class="fas fa-check-circle text-success"></i> Restaurant méditerranéen</li>
            <li><i class="fas fa-check-circle text-success"></i> Service en chambre 24/7</li>
            <li><i class="fas fa-check-circle text-success"></i> Bar lounge avec cocktails signature</li>
          </ul>
        </div>
      </div>
      <!-- Service: Affaires -->
      <div class="col-md-4">
        <div class="service-card p-4 shadow-sm bg-white rounded">
          <h3 class="text-secondary"><i class="fas fa-briefcase me-2"></i> Affaires</h3>
          <ul class="list-unstyled mt-3">
            <li><i class="fas fa-check-circle text-success"></i> 4 salles de réunion modulables</li>
            <li><i class="fas fa-check-circle text-success"></i> Centre d'affaires équipé</li>
            <li><i class="fas fa-check-circle text-success"></i> Service de traduction disponible</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section Équipements -->
<section class="amenities-section section bg-light py-5">
  <div class="container">
    <h2 class="section-title text-center">Équipements</h2>
    
    <!-- Équipements de la chambre -->
    <div class="amenities-category mt-5">
      <h3 class="text-primary mb-4"><i class="fas fa-bed me-2"></i> Équipements de la chambre</h3>
      <div class="row">
        <div class="col-md-6">
          <ul class="amenities-list">
            <li><i class="fas fa-check-circle text-success me-2"></i> Climatisation</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Bureau</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Salle-à-manger</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Cheminée</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Kitchenette</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> TV par câble/satellite</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Lits extra longs</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Baignoire/douche</li>
          </ul>
        </div>
        <div class="col-md-6">
          <ul class="amenities-list">
            <li><i class="fas fa-check-circle text-success me-2"></i> Balcon privé</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Service en chambre</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Coffre-fort</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Salon séparé</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Téléphone</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Penderie/armoire</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Eau en bouteille</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Fer à repasser</li>
          </ul>
        </div>
      </div>
    </div>
    
    <!-- Équipements de l'établissement -->
    <div class="amenities-category mt-5">
      <h3 class="text-primary mb-4"><i class="fas fa-building me-2"></i> Équipements de l'établissement</h3>
      <div class="row">
        <div class="col-md-6">
          <ul class="amenities-list">
            <li><i class="fas fa-check-circle text-success me-2"></i> Parking gratuit</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Wi-Fi gratuit</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Salle de sport</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Spa</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Restaurant</li>
          </ul>
        </div>
        <div class="col-md-6">
          <ul class="amenities-list">
            <li><i class="fas fa-check-circle text-success me-2"></i> Réception 24h/24</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Salles de réunion</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Sauna</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Hammam</li>
            <li><i class="fas fa-check-circle text-success me-2"></i> Service de massage</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container py-5">
    <div class="row">
        <!-- Chambres & Suites -->
        <div class="col-md-6">
            <h3 class="text-primary mb-4">Chambres & Suites</h3>
            <div class="row g-3">
                <div class="col-6 text-center">
                    <i class="fas fa-bed fa-2x text-muted"></i>
                    <h5 class="mt-2">Lits king-size</h5>
                </div>
                <div class="col-6 text-center">
                    <i class="fas fa-tv fa-2x text-muted"></i>
                    <h5 class="mt-2">TV 4K connectée</h5>
                </div>
                <div class="col-6 text-center">
                    <i class="fas fa-bath fa-2x text-muted"></i>
                    <h5 class="mt-2">Articles de toilette premium</h5>
                </div>
                <div class="col-6 text-center">
                    <i class="fas fa-wifi fa-2x text-muted"></i>
                    <h5 class="mt-2">Wi-Fi ultra-rapide</h5>
                </div>
            </div>
        </div>

        <!-- Établissement -->
        <div class="col-md-6">
            <h3 class="text-primary mb-4">Établissement</h3>
            <div class="row g-3">
                <div class="col-6 text-center">
                    <i class="fas fa-parking fa-2x text-muted"></i>
                    <h5 class="mt-2">Parking sécurisé</h5>
                </div>
                <div class="col-6 text-center">
                    <i class="fas fa-concierge-bell fa-2x text-muted"></i>
                    <h5 class="mt-2">Service concierge</h5>
                </div>
                <div class="col-6 text-center">
                    <i class="fas fa-plane fa-2x text-muted"></i>
                    <h5 class="mt-2">Navette aéroport</h5>
                </div>
                <div class="col-6 text-center">
                    <i class="fas fa-baby fa-2x text-muted"></i>
                    <h5 class="mt-2">Service baby-sitting</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- details  -->
<div class="bg-white py-3">
  <div class="container">
    <div class="row align-items-center mb-2">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Services et Installations</h2>
        <p class="font-italic text-muted mb-4">L'Appart Hôtel xxxx met à disposition un spa, un hammam, une salle de sport et un restaurant sur place pour assurer un séjour confortable et relaxant.</p><a href="service.php" class="btn btn-light px-5 rounded-pill shadow-sm">En savoir plus</a>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834139/img-1_e25nvh.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-5 px-5 mx-auto"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/img-2_vdgqgn.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Appartements</h2>
        <p class="font-italic text-muted mb-4">Nos appartements modernes sont conçus pour offrir un maximum de confort et de praticité, avec des cuisines entièrement équipées, un accès Wi-Fi haut débit et une vue imprenable sur la ville d'Oran.</p><a href="client/roomBooking.php" class="btn btn-light px-5 rounded-pill shadow-sm">En savoir plus</a>
      </div>
    </div>
  </div>
</div>
<!-- Section Capacité -->
<section class="bg-light py-5 mt-2">
  <div class="container py-4">
    <div class="text-center mb-5">
      <h2 class="section-title text-uppercase fw-bold">Détails de la Capacité</h2>
    </div>
    <div class="row text-center">
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="p-4 border rounded shadow-sm bg-white capacity-box">
          <h2 class="text-primary fw-bold">+20</h2>
          <p class="lead mb-0">Appartements disponibles</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="p-4 border rounded shadow-sm bg-white capacity-box">
          <h2 class="text-primary fw-bold">64</h2>
          <p class="lead mb-0">Lits au total</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4">
        <div class="p-4 border rounded shadow-sm bg-white capacity-box">
          <h2 class="text-primary fw-bold">2</h2>
          <p class="lead mb-0">Suites de luxe</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Styles supplémentaires -->
<style>
 
</style>

    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>


    



<!-- Amenities Section -->
<!--<section class="amenities section">
  <div class="container">
    <h2 class="section-title text-center">Équipements Complet</h2>
    <div class="row mt-5">
      <div class="col-md-6">
        <h3>Chambres & Suites</h3>
        <div class="amenities-grid">
          <div class="amenity-item">
            <i class="fas fa-bed fa-2x text-secondary mb-3"></i>
            <h5>Lits king-size</h5>
          </div>
          <div class="amenity-item">
            <i class="fas fa-tv fa-2x text-secondary mb-3"></i>
            <h5>TV 4K connectée</h5>
          </div>
          <div class="amenity-item">
            <i class="fas fa-bath fa-2x text-secondary mb-3"></i>
            <h5>Articles de toilette premium</h5>
          </div>
          <div class="amenity-item">
            <i class="fas fa-wifi fa-2x text-secondary mb-3"></i>
            <h5>Wi-Fi ultra-rapide</h5>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <h3>Établissement</h3>
        <div class="amenities-grid">
          <div class="amenity-item">
            <i class="fas fa-parking fa-2x text-secondary mb-3"></i>
            <h5>Parking sécurisé</h5>
          </div>
          <div class="amenity-item">
            <i class="fas fa-concierge-bell fa-2x text-secondary mb-3"></i>
            <h5>Service concierge</h5>
          </div>
          <div class="amenity-item">
            <i class="fas fa-plane fa-2x text-secondary mb-3"></i>
            <h5>Navette aéroport</h5>
          </div>
          <div class="amenity-item">
            <i class="fas fa-baby fa-2x text-secondary mb-3"></i>
            <h5>Service baby-sitting</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

-->
<!-- Contact Services Section -->
<section class="team section">
  <div class="container">
    <h2 class="section-title text-center">Contactez Nos Services</h2>
    <div class="row mt-5">

      <!-- Service 1: Direction Générale -->
      <div class="col-md-3 col-sm-6">
        <div class="team-member text-center">
          <img src="assets/picture/D.PNG" class="img-fluid rounded-circle w-100" style="height: 250px; object-fit: cover;">
          <div class="p-4">
            <h4>Direction Générale</h4>
            <p>Pour les questions administratives</p>
            <div class="social-icons">
              <a href="mailto:direction@apparthotel.com"><i class="fas fa-envelope fa-lg text-secondary mx-2"></i></a>
              <a href="https://www.linkedin.com/company/apparthotel-dz"><i class="fab fa-linkedin fa-lg text-secondary mx-2"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Service 2: Accueil & Réception -->
      <div class="col-md-3 col-sm-6">
        <div class="team-member text-center">
          <img src="assets/picture/S.jpg" class="img-fluid rounded-circle w-100" style="height: 250px; object-fit: cover;">
          <div class="p-4">
            <h4>Service Accueil</h4>
            <p>Pour les réservations ou informations générales</p>
            <div class="social-icons">
              <a href="tel:+213555503910"><i class="fas fa-phone fa-lg text-secondary mx-2"></i></a>
              <a href="https://www.facebook.com/HotelAppartxxxx"><i class="fab fa-facebook fa-lg text-secondary mx-2"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Service 3: Restauration -->
      <div class="col-md-3 col-sm-6">
        <div class="team-member text-center">
          <img src="assets/picture/leR.jpg" class="img-fluid rounded-circle w-100" style="height: 250px; object-fit: cover;">
          <div class="p-4">
            <h4>Service Restauration</h4>
            <p>Commandes, événements et menus spéciaux</p>
            <div class="social-icons">
              <a href="https://wa.me/213554747857"><i class="fab fa-whatsapp fa-lg text-secondary mx-2"></i></a>
              <a href="https://www.facebook.com/profile.php?id=100083588855475"><i class="fab fa-facebook fa-lg text-secondary mx-2"></i></a>
              <a href="https://www.instagram.com/le_r_restaurant?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram fa-lg text-secondary mx-2"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Service 4: Spa & Bien-être -->
      <div class="col-md-3 col-sm-6">
        <div class="team-member text-center">
          <img src="assets/picture/LES.jpg" class="img-fluid rounded-circle w-100" style="height: 250px; object-fit: cover;">
          <div class="p-4">
            <h4>Spa & Bien-être</h4>
            <p>Réservez votre moment de détente</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/xxxxapparthotel"><i class="fab fa-facebook fa-lg text-secondary mx-2"></i></a>
              <a href="https://www.tiktok.com/@xxxxconcept?is_from_webapp=1&sender_device=pc"><i class="fab fa-tiktok fa-lg text-secondary mx-2"></i></a>
              <a href="mailto:Conceptxxxxstitut@gmail.com"><i class="fas fa-envelope fa-lg text-secondary mx-2"></i></a>


            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

</section>

</section>

<?php include('include/footer.php')?>


