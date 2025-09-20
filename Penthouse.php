
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
                <h2 class="section-title">Penthouse</h2>
                <p class="section-subtitle">Un espace élégant et fonctionnel pour un séjour inoubliable.</p>
            </div>
            
            <div class="chambre-card">
            <div class="main-image">
                        <img src="img/a0.jpg" alt="Studio Appart Hôtel xxxx Oran" class="featured-image">
                    </div>
                    <div class="thumbnail-grid">
                        <div class="thumbnail" style="background-image: url('img/o.jpg')"></div>
                        <div class="thumbnail" style="background-image: url('img/a0.jpg')"></div>
                        <div class="thumbnail" style="background-image: url('img/a7.jpg')"></div>
                        <div class="thumbnail" style="background-image: url('img/f27.jpg')"></div>
                        <div class="thumbnail" style="background-image: url('img/penthous.jpg')"></div>
                        <div class="thumbnail" style="background-image: url('bathroom.jpg')"></div>
                        <div class="thumbnail" style="background-image: url('view.png')"></div>
                    </div>
                </div>
                
                <div class="chambre-content">
                    <h3 class="chambre-title">Un cadre moderne et fonctionnel</h3>
                    <p>Notre Appartement de Luxe vous offre tout le confort nécessaire pour un séjour relaxant : un espace lumineux, un mobilier contemporain et des équipements modernes.</p>
                    <h4>Penthouse - Appartement de Luxe</h4>
                    <section class="description">
            <p>Situé au dernier étage du bâtiment, le Penthouse est l'ultime expression du luxe et du confort. Avec son design élégant et moderne, cet appartement exceptionnel offre une vue panoramique à couper le souffle sur la ville, la mer ou les montagnes, selon l'emplacement. Il crée une atmosphère de liberté et de détente, idéale pour ceux qui recherchent un séjour haut de gamme.</p>
            <p>L’intérieur du Penthouse comprend des pièces vastes et lumineuses, notamment un grand salon avec de grandes fenêtres qui laissent entrer une lumière naturelle abondante. La cuisine entièrement équipée est un véritable rêve pour les amateurs de gastronomie, avec des appareils de haute technologie et des matériaux de qualité. Le coin repas spacieux est parfait pour accueillir des invités et profiter de repas en toute convivialité.</p>
            <p>Les chambres sont conçues comme des sanctuaires de confort, avec des lits king-size, des draps en lin de haute qualité, et des armoires spacieuses. Chaque chambre dispose de sa propre salle de bains privative, équipée de douches à l'italienne, de baignoires en marbre et de lavabos modernes. Le balcon ou la terrasse offre un espace extérieur où vous pourrez profiter du soleil tout en admirant les vues à 360 degrés.</p>
            <p>L'aménagement de luxe du Penthouse ne s'arrête pas là. Il comprend également des équipements exclusifs tels qu'un jacuzzi privé, un bar intérieur pour les soirées élégantes, ainsi qu'une salle de sport privée. Les finishes haut de gamme, tels que des planchers en parquet de bois dur, des comptoirs en marbre et des luminaires designer, ajoutent au caractère sophistiqué de l’appartement.</p>
            <p>Ce Penthouse est le choix parfait pour ceux qui recherchent une expérience de séjour inégalée, avec l’intimité, le confort et l’élégance à chaque coin. Il constitue une réalisation parfaite du luxe moderne, avec un cadre de vie qui offre à ses occupants une vue imprenable et des équipements de premier choix pour un séjour inoubliable.</p>
        </section>
        <section class="luxury-penthouse">
    <h2>🛋️ Un espace luxueux et moderne</h2>
    <p>Ce penthouse est conçu pour les voyageurs en quête de prestige et d'intimité. Avec son design sophistiqué et ses équipements haut de gamme, il offre :</p>
    
    <ul class="features-list">
        <li>✔ Un grand salon lumineux avec un mobilier moderne et élégant</li>
        <li>✔ Une cuisine entièrement équipée, parfaite pour préparer vos repas en toute autonomie</li>
        <li>✔ Une salle à manger spacieuse, idéale pour des repas conviviaux</li>
        <li>✔ Des chambres raffinées, dotées de literie premium pour un sommeil réparateur</li>
        <li>✔ Des salles de bain modernes, avec douche à l'italienne et baignoire relaxante</li>
    </ul>

    <h3>🌇 Une vue panoramique à couper le souffle</h3>
    <p>Le Penthouse dispose d'une terrasse privée offrant une vue imprenable sur la ville et la mer. Détendez-vous avec un café matinal ou un verre en soirée tout en profitant d'un cadre exceptionnel.</p>
   

    <h3>📍 Idéal pour :</h3>
    <ul class="ideal-for">
        <li>✅ Les voyages d'affaires nécessitant un cadre élégant</li>
        <li>✅ Les séjours en couple ou en famille</li>
        <li>✅ Les amateurs de séjours de luxe</li>
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
