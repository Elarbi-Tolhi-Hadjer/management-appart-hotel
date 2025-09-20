<?php
 session_start();
 include('include/header.php');
 include('include/dbConnect.php');
 
 ?>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;500&display=swap" rel="stylesheet">

<style>

     
     .room-features {
            list-style: none;
            padding: 0;
            margin: 15px 0;
        }
        
        .room-features li {
            margin-bottom: 8px;
            padding-left: 25px;
            position: relative;
        }
        
        .room-features li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #c5a482;
        }
        
        .hover-shadow:hover {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15) !important;
        transform: translateY(-5px);
        transition: all 0.3s ease-in-out;
    }
    
    :root {
        --primary-color: #2c3e50;
        --secondary-color: #e74c3c;
        --accent-color: #3498db;
        --light-color: #ecf0f1;
        --dark-color: #2c3e50;
        --text-color: #333;
        --text-light: #7f8c8d;
    }
    
    .chambres {
        padding: 5rem 0;
        background-color: #f9f9f9;
        font-family: 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
    }
    
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .section-header {
        text-align: center;
        margin-bottom: 3rem;
    }
    
    .section-title {
        font-size: 2.5rem;
        color: var(--dark-color);
        margin-bottom: 1rem;
        position: relative;
        display: inline-block;
    }
    
    .section-title:after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: var(--secondary-color);
    }
    
    .section-subtitle {
        font-size: 1.1rem;
        color: var(--text-light);
        max-width: 700px;
        margin: 0 auto;
        line-height: 1.6;
    }
    
    .chambre-card {
        display: flex;
        flex-wrap: wrap;
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
    }
    
    .chambre-card:hover {
        transform: translateY(-5px);
    }
    
    .chambre-gallery {
        flex: 1;
        min-width: 300px;
        padding: 20px;
    }
    
    .main-image {
        height: 350px;
        overflow: hidden;
        border-radius: 8px;
        margin-bottom: 15px;
    }
    
    .featured-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .main-image:hover .featured-image {
        transform: scale(1.05);
    }
    
    .thumbnail-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
    }
    
    .thumbnail {
        height: 80px;
        background-size: cover;
        background-position: center;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .thumbnail:hover {
        opacity: 0.8;
        transform: scale(0.98);
    }
    
    .chambre-content {
        flex: 1;
        min-width: 300px;
        padding: 30px;
        display: flex;
        flex-direction: column;
    }
    
    .chambre-title {
        font-size: 1.8rem;
        color: var(--dark-color);
        margin-bottom: 1.5rem;
        position: relative;
        padding-bottom: 10px;
    }
    
    .chambre-title:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 2px;
        background: var(--secondary-color);
    }
    
    .features-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin-bottom: 2rem;
    }
    
    .feature-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
    }
    
    .feature-icon {
        font-size: 1.5rem;
        background: var(--light-color);
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    
    .feature-text {
        flex: 1;
    }
    
    .feature-text strong {
        display: block;
        color: var(--dark-color);
        margin-bottom: 5px;
    }
    
    .feature-text p {
        color: var(--text-light);
        font-size: 0.9rem;
        margin: 0;
    }
    
    .booking-info {
        margin-top: auto;
        background: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
    }
    
    .check-times {
        display: flex;
        justify-content: space-around;
        margin-bottom: 15px;
    }
    
    .check-in, .check-out {
        text-align: center;
    }
    
    .time-label {
        display: block;
        font-size: 0.9rem;
        color: var(--text-light);
    }
    
    .time-value {
        display: block;
        font-size: 1.2rem;
        font-weight: bold;
        color: var(--dark-color);
    }
    
    .flexibility-note {
        font-size: 0.85rem;
        color: var(--text-light);
        text-align: center;
        margin-bottom: 20px;
    }
    
    .cta-button {
        display: block;
        width: 100%;
        padding: 15px;
        background: var(--secondary-color);
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .cta-button:hover {
        background: #c0392b;
        transform: translateY(-2px);
    }
    
    @media (max-width: 768px) {
        .features-grid {
            grid-template-columns: 1fr;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .main-image {
            height: 250px;
        }
    }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .services {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .services h2 {
            text-align: center;
            color: #c0392b;
        }
        .services h3 {
            color: #555;
            border-left: 4px solid #c0392b;
            padding-left: 10px;
            margin-top: 20px;
        }
        .services ul {
            list-style: none;
            padding: 0;
        }
        .services li {
            background: #f9f9f9;
            margin: 8px 0;
            padding: 10px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            transition: background 0.3s ease;
        }
        .services li:hover {
            background: #e6f7ff;
        }
        .services li i {
            color: #c0392b;
            margin-right: 10px;
        }
        .carousel-item {
        position: relative;
    }
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8); /* يجعل الصورة أغمق بنسبة 50% */
        z-index: 1;
    }
    .carousel-caption {
        position: absolute;
        z-index: 2; /* يضمن ظهور النص فوق التراكب */
    }
    .btn-warning ,.btn-primary {
    background-color:rgb(186, 157, 131) !important; /* Change to desired color */
    border-color:rgb(186, 157, 131)!important;
    color: white !important;
    .services {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .services h2 {
            text-align: center;
            color: #c0392b;
        }
        .services h3 {
            color: #555;
            border-left: 4px solid #c0392b;
            padding-left: 10px;
            margin-top: 20px;
        }
        .services ul {
            list-style: none;
            padding: 0;
        }
        .services li {
            background: #f9f9f9;
            margin: 8px 0;
            padding: 10px;
            border-radius: 8px;
            display: flex;
            align-items: center;
        }
        .services li strong {
            margin-left: 10px;
        }
    
    

}
     
    </style>


<!-- Carousel  -->
<section class="carousel-section" id="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/picture/cesourel/B.jpg" alt="First slide">
                <div class="overlay"></div>
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h6 class="section-title text-white text-uppercase mb-3 animated fadeInDown">Luxe & Confort</h6>
                        <h1 class="display-3 text-white mb-4 animated fadeInDown">Vivez l'Élégance à l'Appartement Hôtel xxxx Oran</h1>
                        <a href="#room" class="btn btn-warning  py-md-3 px-md-5 me-3 animated fadeInLeft">Découvrez Nos Appartements</a>
                        <a href="client/room.php" class="btn btn-light py-md-3 px-md-5 animated fadeInRight">Réservez Votre Séjour</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/picture/cesourel/location.png" alt="First slide">
                <div class="overlay"></div>
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h6 class="section-title text-white text-uppercase mb-3 animated fadeInDown">Commodités Haut de Gamme</h6>
                        <h1 class="display-3 text-white mb-4 animated fadeInDown">Espaces de Vie Modernes avec Vue Imprenable</h1>
                        <a href="#features" class="btn btn-warning  py-md-3 px-md-5 me-3 animated fadeInLeft">Voir les Commodités</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/picture/cesourel/Parking.png" alt="First slide">
                <div class="overlay"></div>
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h6 class="section-title text-white text-uppercase mb-3 animated fadeInDown">Offre Exclusive</h6>
                        <h1 class="display-3 text-white mb-4 animated fadeInDown">Séjournez 3 Nuits, La 4ème Offerte !</h1>
                        <a href="#offers" class="btn btn-warning py-md-3 px-md-5 animated fadeInUp">Voir l'Offre</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/picture/cesourel/Reception.png" alt="First slide">                                                               <div class="overlay"></div>
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h6 class="section-title text-white text-uppercase mb-3 animated fadeInDown">Gastronomie d'Exception</h6>
                        <h1 class="display-3 text-white mb-4 animated fadeInDown">Dégustez des Plats Raffinés et Savoureux</h1>
                        <a href="#restaurant" class="btn btn-warning py-md-3 px-md-5 animated fadeInUp">Voir le Menu</a>
                    </div>
                </div>
              </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/picture/cesourel/Service.jpg" alt="First slide">
                <div class="overlay"></div>
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h6 class="section-title text-white text-uppercase mb-3 animated fadeInDown">Expérience Inoubliable</h6>
                        <h1 class="display-3 text-white mb-4 animated fadeInDown">Profitez d’un Service Haut de Gamme</h1>
                        <a href="#experiences" class="btn btn-warning  py-md-3 px-md-5 animated fadeInLeft">En Savoir Plus</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/picture/cesourel/lighting.jpg" alt="First slide">
                <div class="overlay"></div>
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h6 class="section-title text-white text-uppercase mb-3 animated fadeInDown">Service Personnalisé</h6>
                        <h1 class="display-3 text-white mb-4 animated fadeInDown">Une Réception à Votre Service 24/7</h1>
                        <a href="service.php" class="btn btn-warning  py-md-3 px-md-5 animated fadeInRight">Nos Services</a>
</div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>



 <!-- Page Content -->
  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h6 class="section-title text-start text-primary text-uppercase">À Propos</h6>
                <h1 class="mb-4">Bienvenue à <span class="text-primary text-uppercase"><?php echo $general_setting['Name'] ?></span></h1>
                <p class="mb-4">
                    Votre destination idéale pour une expérience d'appart'hôtel inégalée. Nous proposons des appartements luxueux qui allient confort moderne et ambiance unique. Notre design, inspiré par l’élégance, offre un environnement relaxant équipé des dernières technologies pour répondre à vos besoins. Que vous soyez ici pour un court séjour ou une visite prolongée, nous nous engageons à vous offrir les meilleures offres et un service de la plus haute qualité. Vivez le vrai luxe et profitez d’un séjour mémorable chez "<?php echo $general_setting['Name'] ?>" où le confort rencontre la sophistication.
                </p>
                <div class="row g-3 pb-4">
    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="border rounded p-1">
            <div class="border rounded text-center p-4">
                <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                <h2 class="mb-1" data-toggle="counter-up">20</h2>
                <p class="mb-0">Appartements</p>
            </div>
        </div>
    </div>
    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
        <div class="border rounded p-1">
            <div class="border rounded text-center p-4">
                <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                <h2 class="mb-1" data-toggle="counter-up">+85</h2>
                <p class="mb-0">Employés</p>
            </div>
        </div>
    </div>
    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
        <div class="border rounded p-1">
            <div class="border rounded text-center p-4">
                <i class="fa fa-users fa-2x text-primary mb-2"></i>
                <h2 class="mb-1" data-toggle="counter-up">3 000</h2>
                <p class="mb-0">Clients</p>
            </div>
        </div>
    </div>
</div>

                <a class="btn btn-primary py-3 px-5 mt-2" href="about.php">En savoir plus</a>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.png" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.png">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin À Propos -->



<section class="py-5 white-section" id="introduction">
  <div class="container text-center">
    <h1 class="display-4 title">
      <i class="fas fa-hotel" style="color:rgb(166, 138, 114);"></i> <?php echo $general_setting['Name'] ?>, Collection de Luxe, Oran, Algérie
    </h1>
    <p class="lead">
      <i class="fas fa-road" style="color:rgb(166, 138, 114);"></i> Idéalement situé avec une excellente accessibilité routière et des mesures de sécurité de premier ordre pour nos hôtes.
    </p>
  </div>

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-4 text-center">
        <i class="fas fa-building fa-3x mb-3" style="color:rgb(166, 138, 114);"></i>
        <h3>Présentation</h3>
        <p class="text-justify">
          Niché au cœur d’Oran, <strong>Appart Hôtel xxxx</strong> incarne l’élégance, en offrant un équilibre parfait entre luxe et confort. Cet établissement raffiné propose des appartements spacieux, des intérieurs soignés et des équipements haut de gamme adaptés aussi bien aux voyageurs d’affaires qu’aux vacanciers.
        </p>
      </div>
      <div class="col-md-4 text-center">
        <i class="fas fa-map-marker-alt fa-3x mb-3" style="color:rgb(166, 138, 114);"></i>
        <blockquote class="blockquote">Emplacement Idéal</blockquote>
        <p class="text-justify">
          Situé dans l’un des quartiers les plus prisés d’Oran, <strong>Appart Hôtel xxxx</strong> bénéficie d’un accès facile aux principaux centres d’affaires, sites culturels et plages méditerranéennes. L’hôtel est bien relié aux grands axes routiers et se trouve à quelques minutes de l’aéroport international d’Oran, un choix judicieux pour les séjours professionnels comme personnels.
        </p>
      </div>
      <div class="col-md-4 text-center">
        <i class="fas fa-paint-brush fa-3x mb-3" style="color:rgb(166, 138, 114);"></i>
        <blockquote class="blockquote">Élégance Raffinée</blockquote>
        <p class="text-justify">
          L’architecture de <strong>Appart Hôtel xxxx</strong> reflète un luxe contemporain rehaussé par un héritage artistique local. La fusion harmonieuse entre design moderne et artisanat traditionnel algérien crée une atmosphère chaleureuse et sophistiquée, offrant une expérience hôtelière unique à Oran.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Special Offers Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Expériences Exclusives</h6>
            <h1 class="mb-5">Découvrez Nos <span class="text-primary text-uppercase">Moments Inoubliables</span></h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/experience-1.jpg" alt="">
                    </div>
                    <div class="p-4 mt-2">
                        <h5 class="mb-3">Petit Déjeuner en Terrasse</h5>
                        <p class="text-body mb-3">Commencez votre journée avec un petit déjeuner traditionnel algérien servi sur notre terrasse ensoleillée avec vue sur la ville.</p>
                        <a class="btn btn-sm btn-primary rounded py-2 px-4" href="client/room.php">Réserver</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/experience-2.jpg" alt="">
                    </div>
                    <div class="p-4 mt-2">
                        <h5 class="mb-3">Visite Guidée d'Oran</h5>
                        <p class="text-body mb-3">Partez à la découverte des trésors cachés d'Oran avec un guide local passionné. Culture, histoire et ruelles authentiques vous attendent.</p>
                        <a class="btn btn-sm btn-primary rounded py-2 px-4" href="client/room.php">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/experience-3..png" alt="">
                    </div>
                    <div class="p-4 mt-2">
                        <h5 class="mb-3">Soirée Privée en Chambre</h5>
                        <p class="text-body mb-3">Profitez d’une ambiance intimiste avec dîner gastronomique en chambre, préparé par notre chef exclusif pour un moment inoubliable.</p>
                        <a class="btn btn-sm btn-primary rounded py-2 px-4" href="client/room.php">Réserver</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Special Offers End -->
<section class="chambres">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Nos Chambres</h2>
            <p class="section-subtitle">Bienvenue à l'Appart Hôtel xxxx Oran, où le confort et l'élégance se rencontrent pour offrir une expérience unique.</p>
        </div>
        
        <div class="chambre-card">
            <div class="chambre-gallery">
                <div class="main-image">
                    <img src="chambre.jpg" alt="Chambre Appart Hôtel xxxx Oran" class="featured-image">
                </div>
                <div class="thumbnail-grid">
                    <div class="thumbnail" style="background-image: url('chambre2.jpg')"></div>
                    <div class="thumbnail" style="background-image: url('bathroom.jpg')"></div>
                    <div class="thumbnail" style="background-image: url('kitchenette.jpg')"></div>
                    <div class="thumbnail" style="background-image: url('view.png')"></div>
                </div>
            </div>
            
            <div class="chambre-content">
                <h3 class="chambre-title">Un cadre moderne et luxueux</h3>
                
                <div class="features-grid">
                    <div class="feature-item">
                        <div class="feature-icon">🪑</div>
                        <div class="feature-text">
                            <strong>Espace de vie lumineux</strong>
                            <p>Mobilier contemporain</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">🍳</div>
                        <div class="feature-text">
                            <strong>Kitchenette équipée</strong>
                            <p>Réfrigérateur, plaques de cuisson, micro-ondes...</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">🛏️</div>
                        <div class="feature-text">
                            <strong>Chambre confortable</strong>
                            <p>Literie haut de gamme</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">🚿</div>
                        <div class="feature-text">
                            <strong>Salle de bain moderne</strong>
                            <p>Articles de toilette premium</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">📶</div>
                        <div class="feature-text">
                            <strong>Wi-Fi haut débit gratuit</strong>
                            <p>Connectivité optimale</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">🛎️</div>
                        <div class="feature-text">
                            <strong>Service hôtelier</strong>
                            <p>Qualité et disponibilité</p>
                        </div>
                    </div>
                </div>
                
                <div class="booking-info">
                    <div class="check-times">
                        <div class="check-in">
                            <span class="time-label">Check-in</span>
                            <span class="time-value">14:00</span>
                        </div>
                        <div class="check-out">
                            <span class="time-label">Check-out</span>
                            <span class="time-value">12:00</span>
                        </div>
                    </div>
                    
                    <p class="flexibility-note">Nos horaires peuvent être flexibles selon la disponibilité. Contactez la réception pour toute demande spéciale.</p>
                    <a class="btn  cta-button btn-sm btn-primary rounded py-2 px-4" href="client/room.php">Réserver maintenant</a>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Room Start -->
<div id="room" class="container-xxl py-5 ">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Our Apparts</h6>
            <h1 class="mb-5">Découvrez Nos <span class="text-primary text-uppercase">Apparts</span></h1>
        </div>
        <div class="row g-4">
            <!-- Penthouse -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid zoomable-image" src="img/room-3.jpg" alt="Penthouse">
                        <small class="position-absolute start-0 top-100 translate-middle-y text-white rounded py-1 px-3 ms-4" 
                               style="background-color: rgb(254, 107, 22) !important;">25 000 DZD/Nuit</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">Penthouse</h5>
                            <div class="ps-2">
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                            </div>
                        </div>
                        <p class="text-body mb-3">
                            Vivez l'expérience ultime du luxe dans notre Penthouse, offrant des vues panoramiques, un jacuzzi privé et une terrasse spacieuse.
                        </p>
                        <ul class="room-features">
                            <li><strong>Capacité :</strong> 8 personnes</li>
                            <li><strong>Surface :</strong> 200 m²</li>
                            <li><strong>Équipements :</strong> Terrasse, Jacuzzi, Wi-Fi, TV, Cuisine équipée</li>
                        </ul>
                        <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="Penthouse.php" >View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="client/room.php">Book Now</a>
                                </div>
                    </div>
                </div>
            </div>
            <!-- Appartement F1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid zoomable-image" src="img/c1.jpg" alt="Appartement F1">
                        <small class="position-absolute start-0 top-100 translate-middle-y text-white rounded py-1 px-3 ms-4" 
                               style="background-color: rgb(254, 107, 22) !important;">10 000 DZD/Nuit</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">Appartement F1</h5>
                            <div class="ps-2">
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                            </div>
                        </div>
                        <p class="text-body mb-3">
                            Un appartement cosy idéal pour des séjours courts, offrant un espace fonctionnel et moderne avec tous les équipements essentiels.
                        </p>
                        <ul class="room-features">
                            <li><strong>Capacité :</strong> 2 personnes</li>
                            <li><strong>Surface :</strong> 30 m²</li>
                            <li><strong>Équipements :</strong> Kitchenette, Wi-Fi, TV, Climatisation</li>
                        </ul>
                        <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="Appartement F1.php" >View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="client/room.php">Book Now</a>
                                </div>
                    </div>
                </div>
            </div>
            <!-- Appartement F2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid zoomable-image" src="img/c2.jpg" alt="Appartement F2">
                        <small class="position-absolute start-0 top-100 translate-middle-y text-white rounded py-1 px-3 ms-4" 
                               style="background-color: rgb(254, 107, 22) !important;">13 000 DZD/Nuit</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">Appartement F2</h5>
                            <div class="ps-2">
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                            </div>
                        </div>
                        <p class="text-body mb-3">
                            Spacieux et moderne, cet appartement F2 offre une chambre confortable et un salon lumineux avec une cuisine intégrée.
                        </p>
                        <ul class="room-features">
                            <li><strong>Capacité :</strong> 3 personnes</li>
                            <li><strong>Surface :</strong> 40 m²</li>
                            <li><strong>Équipements :</strong> Cuisine intégrée, Wi-Fi, TV, Climatisation, Balcon</li>
                        </ul>
                        <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="Appartement F2.php" >View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="client/room.php">Book Now</a>
                                </div>
                    </div>
                </div>
            </div>
            <!-- Appartement F3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid zoomable-image" src="img/room-7.jpg" alt="Appartement F3">
                        <small class="position-absolute start-0 top-100 translate-middle-y text-white rounded py-1 px-3 ms-4" 
                               style="background-color: rgb(254, 107, 22) !important;">15 000 DZD/Nuit</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">Appartement F3</h5>
                            <div class="ps-2">
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                            </div>
                        </div>
                        <p class="text-body mb-3">
                            Cet appartement F3 offre un espace de vie généreux, idéal pour un groupe ou une petite famille, avec plusieurs chambres et un grand salon.
                        </p>
                        <ul class="room-features">
                            <li><strong>Capacité :</strong> 4 personnes</li>
                            <li><strong>Surface :</strong> 50 m²</li>
                            <li><strong>Équipements :</strong> Cuisine équipée, Wi-Fi, TV, Climatisation, Terrasse</li>
                        </ul>
                        <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="Appartement F3.php" >View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="client/room.php">Book Now</a>
                                </div>
                    </div>
                </div>
            </div>
            <!-- Appartement Famille -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid zoomable-image" src="img/room-8.jpg" alt="Appartement Famille">
                        <small class="position-absolute start-0 top-100 translate-middle-y text-white rounded py-1 px-3 ms-4" 
                               style="background-color: rgb(254, 107, 22) !important;">17 000 DZD/Nuit</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">Appartement Famille</h5>
                            <div class="ps-2">
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                            </div>
                        </div>
                        <p class="text-body mb-3">
                            Conçu pour accueillir des familles, cet appartement spacieux offre plusieurs chambres, une cuisine moderne et un salon convivial.
                        </p>
                        <ul class="room-features">
                            <li><strong>Capacité :</strong> 5 personnes</li>
                            <li><strong>Surface :</strong> 65 m²</li>
                            <li><strong>Équipements :</strong> Cuisine moderne, Wi-Fi, TV, Climatisation, Balcon</li>
                        </ul>
                        <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="Appartement Famille.php" >View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="client/room.php">Book Now</a>
                                </div>
                    </div>
                </div>
            </div>
            <!-- Studio -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid zoomable-image" src="img/room-9.jpg" alt="Studio">
                        <small class="position-absolute start-0 top-100 translate-middle-y text-white rounded py-1 px-3 ms-4" 
                               style="background-color: rgb(254, 107, 22) !important;">7 500 DZD/Nuit</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">Studio</h5>
                            <div class="ps-2">
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                                <small class="fa fa-star" style="color: #EFBF04;"></small>
                            </div>
                        </div>
                        <p class="text-body mb-3">
                            Un studio confortable et fonctionnel, idéal pour les voyageurs en solo ou pour des courts séjours, offrant tout le nécessaire pour un séjour agréable.
                        </p>
                        <ul class="room-features">
                            <li><strong>Capacité :</strong> 2 personnes</li>
                            <li><strong>Surface :</strong> 25 m²</li>
                            <li><strong>Équipements :</strong> Kitchenette, Wi-Fi, TV, Climatisation</li>
                        </ul>
                        <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="Studio.php" >View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="client/room.php">Book Now</a>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Room End -->


<section class="services">
        <h2>✨ Conditions et Services</h2>
        
        <h3>🏨 Général</h3>
        <ul>
            <li><i class="fas fa-clock"></i> <strong>Arrivée :</strong> à partir de 14:00</li>
            <li><i class="fas fa-door-open"></i> <strong>Départ :</strong> avant 07:00</li>
            <li><i class="fas fa-wifi"></i> <strong>Wifi :</strong> disponible</li>
            <li><i class="fas fa-globe"></i> <strong>Internet :</strong> accessible</li>
            <li><i class="fas fa-car"></i> <strong>Parking :</strong> accessible aux personnes à mobilité réduite</li>
            <li><i class="fas fa-paw"></i> <strong>Animaux acceptés</strong></li>
            <li><i class="fas fa-snowflake"></i> <strong>Air conditionné</strong> & <i class="fas fa-fire"></i> Chauffage</li>
            <li><i class="fas fa-elevator"></i> <strong>Ascenseur</strong></li>
            <li><i class="fas fa-smoking-ban"></i> <strong>Chambres Non-fumeurs & insonorisées</strong></li>
        </ul>
        
        <h3> <i class="fas fa-concierge-bell"></i> Services de Réception</h3>
        <ul>
            <li><i class="fas fa-clock"></i> <strong>Ouvert 24h/24</strong></li>
            <li><i class="fas fa-lock"></i> <strong>Coffre-fort</strong></li>
            <li><i class="fas fa-key"></i> <strong>Enregistrement / départ privé</strong></li>
        </ul>
        
        <h3>🎉 Loisirs et Famille</h3>
        <ul>
            <li><i class="fas fa-theater-masks"></i> <strong>Animations en soirée</strong></li>
        </ul>
        
        <h3>🍽️ Nourriture et Boissons</h3>
        <ul>
            <li><i class="fas fa-utensils"></i> <strong>Restaurant</strong> & ☕ Café sur place</li>
            <li><i class="fas fa-hamburger"></i> <strong>Menus enfants</strong></li>
            <li><i class="fas fa-bell"></i> <strong>Service d'étage</strong> & 🥐 Petit-déjeuner en chambre</li>
            <li><i class="fas fa-apple-alt"></i> <strong>Fruits</strong></li>
        </ul>
        
        <h3>🏢 Réunions et Évènements</h3>
        <ul>
            <li><i class="fas fa-briefcase"></i> <strong>Salles de réunions</strong></li>
        </ul>
        
        <h3>🧹 Service de Nettoyage</h3>
        <ul>
            <li><i class="fas fa-soap"></i> <strong>Ménage quotidien</strong></li>
        </ul>
        
        <h3>💆‍♀️ Bien-être</h3>
        <ul>
            <li><i class="fas fa-spa"></i> <strong>Spa</strong> & ♨️ Bain turc / à vapeur</li>
            <li><i class="fas fa-dumbbell"></i> <strong>Sauna</strong> & 🏋️ Salle de fitness</li>
            <li><i class="fas fa-hand-holding-heart"></i> <strong>Massage</strong> & 🌿 Services beauté</li>
            <li><i class="fas fa-cut"></i> <strong>Coiffeur</strong> & 🏋️‍♂️ Coach sportif personnel</li>
            <li><i class="fas fa-paint-brush"></i> <strong>Cours collectifs</strong></li>
        </ul>
    </section>

      
    <section class="services py-5 bg-light"> 
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="section-title text-primary text-uppercase">Nos Services</h6>
            <h1 class="fw-bold">Découvrez Nos <span class="text-primary">Prestations</span></h1>
            <p class="text-muted">Profitez de nos services de haute qualité pour une expérience inoubliable.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="service-item p-4 text-center border rounded shadow-sm bg-white hover-shadow">
                    <div class="service-icon mb-3">
                        <i class="fa fa-hotel fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-semibold">Chambres & Appartements</h5>
                    <p class="text-muted">Des hébergements luxueux et entièrement équipés pour un séjour agréable.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item p-4 text-center border rounded shadow-sm bg-white hover-shadow">
                    <div class="service-icon mb-3">
                        <i class="fa fa-utensils fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-semibold">Restauration & Gastronomie</h5>
                    <p class="text-muted">Dégustez des plats raffinés préparés par nos chefs expérimentés.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item p-4 text-center border rounded shadow-sm bg-white hover-shadow">
                    <div class="service-icon mb-3">
                        <i class="fa fa-spa fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-semibold">Spa & Bien-être</h5>
                    <p class="text-muted">Détendez-vous avec nos massages et soins bien-être de qualité.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item p-4 text-center border rounded shadow-sm bg-white hover-shadow">
                    <div class="service-icon mb-3">
                        <i class="fa fa-swimmer fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-semibold">Activités Sportives</h5>
                    <p class="text-muted">Profitez de nos installations sportives pour un séjour dynamique.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item p-4 text-center border rounded shadow-sm bg-white hover-shadow">
                    <div class="service-icon mb-3">
                        <i class="fa fa-glass-cheers fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-semibold">Événements & Célébrations</h5>
                    <p class="text-muted">Organisez vos événements dans nos espaces élégants et bien équipés.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item p-4 text-center border rounded shadow-sm bg-white hover-shadow">
                    <div class="service-icon mb-3">
                        <i class="fa fa-dumbbell fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-semibold">Gym & Yoga</h5>
                    <p class="text-muted">Restez en forme grâce à nos équipements modernes et cours de yoga.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Map Start -->
<div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
    <div class="row g-0">
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5">
                <h6 class="section-title text-start text-white text-uppercase mb-3">Location</h6>
                <h1 class="text-white mb-4">Appart Hôtel xxxx - Oran, Algérie</h1>
                <p class="text-white mb-4">L'Appart Hôtel xxxx est un établissement 4 étoiles situé au 27 Avenue Khaled Ibn Walid Hai Tafna (Ex Hippodrome), Oran. Il propose des appartements modernes avec cuisine complète, balcon et Wi-Fi gratuit.</p>
                <p class="text-white mb-4">Les installations incluent un spa, un hammam, une salle de sport et un restaurant. Un parking privé gratuit est également disponible.</p>
                <a href="https://www.google.com/maps/search/Appart+H%C3%B4tel+xxxx+Oran" class="btn btn-primary py-md-3 px-md-5 me-3" target="_blank">Obtenir l'itinéraire</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6468.719404471539!2d-0.6189752560824069!3d35.70237371708876!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1758207744849!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
    </div>
</div>
<!-- Map End -->
  
<!-- FAQ Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">FAQ</h6>
            <h1 class="mb-5">Questions Fr&eacute;quentes <span class="text-primary text-uppercase">Appart H&ocirc;tel xxxx</span></h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Puis-je loger avec mon animal de compagnie ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Oui, l'&eacute;tablissement Appart H&ocirc;tel xxxx est pet friendly, et vous pourrez y loger avec votre animal de compagnie.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                L'&eacute;tablissement poss&egrave;de-t-il une piscine ?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Non, l'&eacute;tablissement Appart H&ocirc;tel xxxx ne dispose pas de piscine.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                L'&eacute;tablissement est-il situ&eacute; dans le centre-ville ?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Oui, l'&eacute;tablissement est situ&eacute; &agrave; seulement 1 464 m du centre de Oran.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordion" id="accordionExample2">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Quelles sont les heures de check-in et check-out ?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                Le check-in est possible &agrave; partir de 14h00, et le check-out jusqu'&agrave; 07h00.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                L'&eacute;tablissement dispose-t-il d'un parking ?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                Oui, l'&eacute;tablissement met &agrave; disposition un parking pour les clients.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                L'&eacute;tablissement dispose-t-il d'une connexion Wi-Fi gratuite ?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                Oui, l'&eacute;tablissement propose un acc&egrave;s gratuit &agrave; internet via Wi-Fi.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                L'&eacute;tablissement dispose-t-il d'une salle de sport ?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                Oui, une salle de sport est mise &agrave; disposition des clients.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Y a-t-il un restaurant sur place ?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                Oui, l'&eacute;tablissement poss&egrave;de un restaurant offrant divers plats.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ End -->
 

<section id="contact" class="white-section">
<div class="container-xl mb-5 p-5">
	<div class="row">
		<div class="col-md-8 mx-auto">
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
					<button type="submit" class="btn btn-primary" name = "contact" > Submit </button>
				</form>
			</div>
		</div>
	</div>
</section>
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
      // Simple image gallery functionality
    document.addEventListener('DOMContentLoaded', function() {
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
    });
</script>

  

    
    <?php include('include/footer.php') ?>