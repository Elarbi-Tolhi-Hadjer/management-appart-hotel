
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
                <h2 class="section-title">Appartement de Luxe</h2>
                <p class="section-subtitle">Un espace élégant et fonctionnel pour un séjour inoubliable.</p>
            </div>
            
            <div class="chambre-card">
                <div class="chambre-gallery">
                    <div class="main-image">
                        <img src="studio.jpg" alt="Studio Appart Hôtel xxxx Oran" class="featured-image">
                    </div>
                    <div class="thumbnail-grid">
                        <div class="thumbnail" style="background-image: url('studio2.jpg')"></div>
                        <div class="thumbnail" style="background-image: url('bathroom.jpg')"></div>
                        <div class="thumbnail" style="background-image: url('kitchenette.jpg')"></div>
                        <div class="thumbnail" style="background-image: url('view.png')"></div>
                    </div>
                </div>
                
                <div class="chambre-content">
                <h3 class="chambre-title">Un cadre somptueux et raffiné</h3>
                <p>Plongez dans l’univers du luxe absolu avec un appartement sophistiqué, offrant des prestations haut de gamme et un design contemporain exceptionnel.</p>
               
                <section class="description">
                    <p>Doté d’un espace généreux et d’une décoration soignée, cet appartement vous garantit un séjour exclusif dans un cadre prestigieux.</p>
                    <p>Le salon spacieux, agrémenté de mobilier design et d’équipements dernier cri, vous assure détente et confort absolu.</p>
                    <p>Une terrasse privée vous offre une vue imprenable, idéale pour savourer un moment de tranquillité sous les étoiles.</p>
                </section>
                
                <section class="features">
                    <h2>Caractéristiques haut de gamme</h2>
                    <ul>
                        <li><strong>Design contemporain :</strong> Matériaux nobles et finitions élégantes.</li>
                        <li><strong>Chambres luxueuses :</strong> Literie premium et draps en coton égyptien.</li>
                        <li><strong>Salon sophistiqué :</strong> Canapés confortables et télévision haute définition.</li>
                        <li><strong>Salle de bain en marbre :</strong> Avec douche à l’italienne et baignoire spa.</li>
                        <li><strong>Terrasse panoramique :</strong> Vue spectaculaire pour des moments inoubliables.</li>
                        <li><strong>Domotique intégrée :</strong> Commandes intelligentes pour l’éclairage et la température.</li>
                        <li><strong>Service de majordome :</strong> Disponible pour répondre à tous vos besoins.</li>
                    </ul>
                    
                    <h3>🌟 Expérience d’exception :</h3>
                    <ul>
                        <li>Petit-déjeuner gastronomique inclus</li>
                        <li>Accès exclusif au spa et centre de bien-être</li>
                        <li>Service de limousine et transferts VIP</li>
                        <li>Conciergerie 24h/24 pour un séjour sans souci</li>
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
