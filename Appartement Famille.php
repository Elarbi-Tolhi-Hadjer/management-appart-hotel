
<?php
 session_start();
 include('include/currentPage_header.php');
 include('include/dbConnect.php');
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Équipements de l'Hôtel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
       
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
            color: ;
            margin: 0;
            padding: 0;
        }
/* Additional custom styles if needed */
#backToTopBtn {
    display: none;
    color:  #f4f6f9;
}
.btn-primary {            background-color:  #c3924e;

}

        .facility-box {
            text-align: center;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 12px;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            margin-bottom: 20px;
        }

        .facility-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
        }

        .facility-box i {
            font-size: 3rem;
            color: #4CAF50;
            margin-bottom: 15px;
            transition: color 0.3s ease;
        }

        .facility-box:hover i {
            color: #007bff;
        }

        h2, p {
            color: #333;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        .gallery img:hover {
            transform: scale(1.05);
            filter: brightness(0.8);
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #007bff;
        }

        .card-text {
            color: #555;
        }

        .list-unstyled li {
            padding-left: 20px;
            position: relative;
            font-size: 1.1rem;
            color: #555;
        }

        .list-unstyled li::before {
            content: '\2022';
            color: #007bff;
            font-size: 1.5rem;
            position: absolute;
            left: 0;
        }

        .container {
            margin-top: 60px;
        }

        .hero-section {
            background: linear-gradient(120deg, #f7f7f7, #fff);
            padding: 60px 0;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .hero-section h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #007bff;
        }

        .hero-section p {
            font-size: 1.2rem;
            color: #666;
        }
        .container1 {
            max-width: 1100px;
            margin: 50px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.15);
            text-align: center;
        }
        .section-header {
            margin-bottom: 30px;
        }
        .section-title {
            font-size: 32px;
            color: #333;
        }
        .section-subtitle {
            color: #666;
            font-size: 16px;
        }
        .chambre-card {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .chambre-gallery {
            flex: 1;
            min-width: 300px;
        }
        .featured-image {
            width: 100%;
            border-radius: 10px;
        }
        .thumbnail-grid {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }
        .thumbnail {
            width: 70px;
            height: 70px;
            border-radius: 8px;
            background-size: cover;
            background-position: center;
            cursor: pointer;
            transition: transform 0.3s;
        }
        .thumbnail:hover {
            transform: scale(1.1);
        }
        .chambre-content {
            flex: 1;
            min-width: 300px;
            text-align: left;
        }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-top: 20px;
        }
        .feature-item {
            display: flex;
            align-items: center;
            background: #f9f9f9;
            padding: 12px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.05);
        }
        .feature-icon {
            font-size: 24px;
            color: #007bff;
            margin-right: 10px;
        }
        .booking-info {
            margin-top: 20px;
        }
        .check-times {
            display: flex;
            justify-content: space-between;
            font-size: 18px;
            margin-bottom: 10px;
        }
        .cta-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            transition: background 0.3s ease;
            cursor: pointer;
            border: none;
        }
        .cta-button:hover {
            background: #0056b3;
        }
                .facility-card {
            background-color: #dff6d5;
            border-radius: 8px;
            padding: 15px;
            margin: 10px 0;
            display: flex;
            align-items: center;
        }
        .facility-card i {
            font-size: 24px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
<section class="chambres">
        <div class="container1">
            <div class="section-header">
                <h2 class="section-title">Appartement Famille</h2>
                <p class="section-subtitle">Un espace élégant et fonctionnel pour un séjour inoubliable.</p>
            </div>
            
            <div class="chambre-card">
            <div class="chambre-gallery">
                 <div class="main-image">
                        <img src="img/f23.jpg" alt="Studio Appart Hôtel xxxx Oran" class="featured-image">
                    </div>
                    <div class="thumbnail-grid">
                        <div class="thumbnail" style="background-image: url('img/o.jpg')"></div>
                        <div class="thumbnail" style="background-image: url('img/a2.jpg')"></div>
                        <div class="thumbnail" style="background-image: url('img/c3.jpeg')"></div>
                        <div class="thumbnail" style="background-image: url('img/f23.jpg')"></div>
                        <div class="thumbnail" style="background-image: url('img/f27.jpg')"></div>
                        <div class="thumbnail" style="background-image: url('img/a8.jpg')"></div>
                        <div class="thumbnail" style="background-image: url('bathroom.jpg')"></div>
                        <div class="thumbnail" style="background-image: url('view.png')"></div>
                    </div>
                </div>
                
                <div class="chambre-content">
                    <h3 class="chambre-title">Un cadre moderne et fonctionnel</h3>
                    <p>Notre sAppartement Famille  vous offre tout le confort nécessaire pour un séjour relaxant : un espace lumineux, un mobilier contemporain et des équipements modernes.</p>
                   <h4> Appartement Famille</h4>
                   <section class="description">
            <p>L'Appartement Famille est conçu pour offrir un séjour agréable et pratique aux familles avec enfants. Avec plusieurs chambres séparées, chaque membre de la famille dispose de son propre espace, tout en permettant de créer une atmosphère conviviale. L’appartement inclut également une salle de jeux ou un espace spécial pour les enfants, équipé de jouets et de jeux, pour les occuper de manière sûre et amusante pendant que les parents se détendent.</p>
            <p>La cuisine entièrement équipée est parfaite pour préparer des repas en famille, avec tout le nécessaire pour cuisiner de manière pratique et conviviale. Des rangements spacieux et des appareils modernes facilitent la préparation des repas tout en gardant l’espace bien organisé. Le coin repas est spacieux et adapté aux familles, pour des repas partagés dans un cadre confortable.</p>
            <p>La salle de bains privative est équipée d’une baignoire pour enfants, ainsi que d'autres équipements pratiques tels qu’une chaise haute et un réducteur de toilettes, pour garantir un maximum de confort et de sécurité pour les plus jeunes. Ces équipements sont pensés pour faciliter la toilette des enfants tout en assurant leur bien-être.</p>
            <p>Cet appartement est une option idéale pour les familles cherchant à allier praticité, confort et divertissement. Il permet aux parents de profiter de leur séjour en toute tranquillité, tout en répondant aux besoins spécifiques des enfants.</p>
        </section>
        <section class="features">
    <h2>Caractéristiques principales</h2>
    <ul>
        <li><strong>Superficie généreuse :</strong> Idéal pour les familles avec enfants, offrant un espace de vie confortable.</li>
        <li><strong>Chambres séparées :</strong> Une chambre parentale et une ou plusieurs chambres pour enfants.</li>
        <li><strong>Salon moderne et convivial :</strong> Équipé d'un canapé confortable et d'une télévision à écran plat.</li>
        <li><strong>Cuisine équipée :</strong> Réfrigérateur, plaque de cuisson, micro-ondes, vaisselle et ustensiles pour préparer vos repas.</li>
        <li><strong>Salle de bain privée :</strong> Avec douche ou baignoire, serviettes moelleuses et articles de toilette.</li>
        <li><strong>Balcon ou terrasse :</strong> Pour profiter de la vue et d'un moment de détente en extérieur.</li>
        <li><strong>Connexion Wi-Fi rapide et gratuite :</strong> Pour rester connecté en toute simplicité.</li>
        <li><strong>Climatisation et chauffage :</strong> Pour un confort optimal en toute saison.</li>
    </ul>
    
    <h3>🏅 Avantages pour les familles :</h3>
    <ul> 
        <li>Espaces sécurisés et adaptés aux enfants</li>
        <li>Possibilité d'ajouter un lit bébé ou un lit d'appoint</li>
        <li>Proximité des attractions touristiques et commerces</li>
        <li>Services de ménage et de conciergerie disponibles</li>
    </ul>
</section>
                    <div class="features-grid">
                        <div class="feature-item"><span class="feature-icon">🛏️</span> Lit Queen Size confortable</div>
                        <div class="feature-item"><span class="feature-icon">🍳</span> Kitchenette entièrement équipée</div>
                        <div class="feature-item"><span class="feature-icon">🚿</span> Salle de bain avec douche à l'italienne</div>
                        <div class="feature-item"><span class="feature-icon">📺</span> Télévision à écran plat</div>
                        <div class="feature-item"><span class="feature-icon">📶</span> Wi-Fi haut débit gratuit</div>
                        <div class="feature-item"><span class="feature-icon">🌇</span> Vue imprenable sur la ville</div>
                    </div>
                    
                    <div class="booking-info">
                        <div class="check-times">
                             
                        </div>
                        <a class="cta-button" href="client/room.php">Réserver maintenant</a>                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <h2 class="mt-5 mb-4 text-center">Galerie</h2>
<div class="row gallery">
    <div class="col-md-3 col-sm-6 mb-3">
        <a href="img/c1.jpg" data-lightbox="gallery" data-title="Chambre avec lit double et décoration moderne">
            <img src="img/c1.jpg" class="img-fluid rounded shadow" alt="Chambre avec lit double et décoration moderne">
        </a>
    </div>
    <div class="col-md-3 col-sm-6 mb-3">
        <a href="img/c3.jpeg" data-lightbox="gallery" data-title="Chambre avec lit simple et vue sur la mer">
            <img src="img/c3.jpeg" class="img-fluid rounded shadow" alt="Chambre avec lit simple et vue sur la mer">
        </a>
    </div>
    <div class="col-md-3 col-sm-6 mb-3">
        <a href="img/sa.jpeg" data-lightbox="gallery" data-title="Chambre avec décor élégant et espace de travail">
            <img src="img/sa.jpeg" class="img-fluid rounded shadow" alt="Chambre avec décor élégant et espace de travail">
        </a>
    </div>
    <div class="col-md-3 col-sm-6 mb-3">
        <a href="img/c4.jpeg" data-lightbox="gallery" data-title="Chambre avec mobilier moderne et éclairage doux">
            <img src="img/c4.jpeg" class="img-fluid rounded shadow" alt="Chambre avec mobilier moderne et éclairage doux">
        </a>
    </div>
    <div class="col-md-3 col-sm-6 mb-3">
        <a href="img/sa2.jpg" data-lightbox="gallery" data-title="Salle de bain moderne avec baignoire">
            <img src="img/sa2.jpg" class="img-fluid rounded shadow" alt="Salle de bain moderne avec baignoire">
        </a>
    </div>
    <div class="col-md-3 col-sm-6 mb-3">
        <a href="img/k.jpg" data-lightbox="gallery" data-title="Salle de bain avec douche et lavabo design">
            <img src="img/k.jpg" class="img-fluid rounded shadow" alt="Salle de bain avec douche et lavabo design">
        </a>
    </div>
    <div class="col-md-3 col-sm-6 mb-3">
        <a href="img/s2.jpg" data-lightbox="gallery" data-title="Salle de bain avec douche à l'italienne">
            <img src="img/s2.jpg" class="img-fluid rounded shadow" alt="Salle de bain avec douche à l'italienne">
        </a>
    </div>
    <div class="col-md-3 col-sm-6 mb-3">
        <a href="img/s.jpg" data-lightbox="gallery" data-title="Salle de bain avec décor contemporain">
            <img src="img/s.jpg" class="img-fluid rounded shadow" alt="Salle de bain avec décor contemporain">
        </a>
    </div>
</div>
    <div class="hero-section">
        <h1>Découvrez nos Équipements Exceptionnels</h1>
        <p>Un séjour unique avec des services haut de gamme et un confort inégalé.</p>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="facility-box">
                    <i class="fas fa-plane"></i>
                    <p>AIRPORT</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="facility-box">
                    <i class="fas fa-water"></i>
                    <p>BAY OF ALGIERS</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="facility-box">
                    <i class="fas fa-medal"></i>
                    <p>BEST Appart Hotel</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="facility-box">
                    <i class="fas fa-parking"></i>
                    <p>SECURE CAR PARK</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="facility-box">
                    <i class="fas fa-utensils"></i>
                    <p>BREAKFAST</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="facility-box">
                    <i class="fas fa-concierge-bell"></i>
                    <p>RESTAURANT</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="facility-box">
                    <i class="fas fa-tv"></i>
                    <p>TELEVISION</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="facility-box">
                    <i class="fas fa-shuttle-van"></i>
                    <p>AIRPORT TRANSFER</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="facility-box">
                    <i class="fas fa-wifi"></i>
                    <p>WIFI</p>
                </div>
            </div>
        </div>
    </div>
   
        <div class="container mt-4">
        <h2 class="mb-3">Équipements et Services</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="facility-card"><i class="bi bi-wifi"></i> WiFi gratuit</div>
                <div class="facility-card"><i class="bi bi-snow"></i> Climatisation</div>
                <div class="facility-card"><i class="bi bi-tv"></i> Télévision à écran plat</div>
                <div class="facility-card"><i class="bi bi-door-closed"></i> Chambres insonorisées</div>
                <div class="facility-card"><i class="bi bi-receipt"></i> Facture fournie</div>
                <div class="facility-card"><i class="bi bi-person-check"></i> Service de conciergerie</div>
                <div class="facility-card"><i class="bi bi-people"></i> Chambre familiale</div>
                <div class="facility-card"><i class="bi bi-lock"></i> Coffre-fort</div>
                <div class="facility-card"><i class="bi bi-car-front"></i> Parking privé gratuit</div>
                <div class="facility-card"><i class="bi bi-cup"></i> Petit-déjeuner en chambre</div>
                <div class="facility-card"><i class="bi bi-house"></i> Balcon privé</div>
                <div class="facility-card"><i class="bi bi-person-arms-up"></i> Sauna</div>
                <div class="facility-card"><i class="bi bi-person-hearts"></i> Massages</div>
                <div class="facility-card"><i class="bi bi-spa"></i> Centre de bien-être</div>
                <div class="facility-card"><i class="bi bi-bell"></i> Service de chambre</div>
                <div class="facility-card"><i class="bi bi-scissors"></i> Salon de beauté</div>
                <div class="facility-card"><i class="bi bi-elevator"></i> Ascenseur</div>
                <div class="facility-card"><i class="bi bi-shop"></i> Boutique sur place</div>
            </div>
            <div class="col-md-6">
                <div class="facility-card"><i class="bi bi-people"></i> Salle de conférence</div>
                <div class="facility-card"><i class="bi bi-person-lines-fill"></i> Service de ménage quotidien</div>
                <div class="facility-card"><i class="bi bi-cash"></i> Paiement sécurisé</div>
                <div class="facility-card"><i class="bi bi-mug-hot"></i> Machine à café/thé</div>
                <div class="facility-card"><i class="bi bi-basket"></i> Fruits et snacks</div>
                <div class="facility-card"><i class="bi bi-music-note"></i> Animations en soirée</div>
                <div class="facility-card"><i class="bi bi-bicycle"></i> Salle de sport</div>
                <div class="facility-card"><i class="bi bi-lungs"></i> Hammam</div>
                <div class="facility-card"><i class="bi bi-translate"></i> Langues parlées : Français, Anglais, Arabe</div>
                <div class="facility-card"><i class="bi bi-person-x"></i> Chambres non-fumeurs</div>
                <div class="facility-card"><i class="bi bi-check-lg"></i> Enregistrement privé</div>
                <div class="facility-card"><i class="bi bi-telephone"></i> Téléphone en chambre</div>
                <div class="facility-card"><i class="bi bi-person-bounding-box"></i> Service de repassage</div>
                <div class="facility-card"><i class="bi bi-car-front-fill"></i> Parking accessible</div>
                <div class="facility-card"><i class="bi bi-person-badge"></i> Service de photocopie/fax</div>
                <div class="facility-card"><i class="bi bi-journal-text"></i> Salle de banquet</div>
            </div>
        </div>
    </div>
        <!-- Back to Top Button -->
        <button id="backToTopBtn" class="btn btn-primary position-fixed bottom-0 end-0 m-4" style="display: none;">
        <i class="bi bi-arrow-up"></i> 
    </button>



<!-- Lightbox -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

<style>
    .gallery img {
        transition: transform 0.3s ease-in-out;
    }
    .gallery img:hover {
        transform: scale(1.05);
    }
</style>

</body>
<script>
    // Get the button
const backToTopBtn = document.getElementById("backToTopBtn");

// When the user scrolls down 100px from the top of the document, show the button
window.onscroll = function () {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        backToTopBtn.style.display = "block";
    } else {
        backToTopBtn.style.display = "none";
    }
};

// When the user clicks the button, scroll to the top of the document
backToTopBtn.onclick = function () {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
};

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

</html>
