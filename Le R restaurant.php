
<?php
 session_start();
 include('include/currentPage_header.php');
 include('include/dbConnect.php');
 ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;500&display=swap" rel="stylesheet">

 <!-- Bootstrap 5 CDN -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Sidebar Navigation -->
<!-- Bouton de déclenchement -->
<button id="nav-trigger" class="nav-trigger-btn">
  <i class="bi bi-list"></i>
</button>

<!-- Barre de navigation cachée -->
<div id="toc-sidebar" class="hidden-sidebar">
  <div class="sidebar-header">
    <h6>
      <i class="bi bi-compass me-2"></i>Navigation
    </h6>
    <button id="sidebar-close" class="close-btn">
      <i class="bi bi-x"></i>
    </button>
  </div>
  
  <ul class="nav-links">
    <li>
      <a href="#presentation">
        <i class="bi bi-info-circle me-2"></i>Présentation
      </a>
    </li>
    <li>
      <a href="#galerie">
        <i class="bi bi-images me-2"></i>Galerie
      </a>
    </li>
    <li>
      <a href="#menu">
        <i class="bi bi-menu-up me-2"></i>Menu
      </a>
    </li>
    <li>
      <a href="#videos">
        <i class="bi bi-camera-reels me-2"></i>Vidéos
      </a>
    </li>
    <li class="nav-divider"></li>
    <li>
      <a href="#contact">
        <i class="bi bi-telephone me-2"></i>Contact
      </a>
    </li>
  </ul>
  
  <div class="scroll-indicator">
    <div id="scroll-progress"></div>
  </div>
</div>

<!-- Overlay -->
<div id="nav-overlay" class="nav-overlay"></div>

<style>
  body {
             font-family: 'Tagesschrift', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }
/* Bouton déclencheur */
.nav-trigger-btn {
  position: fixed;
  top: 20px;
  left: 20px;
  z-index: 1000;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: #d4a373;
  color: white;
  border: none;
  font-size: 1.5rem;
  cursor: pointer;
  box-shadow: 0 2px 10px rgba(0,0,0,0.2);
  transition: all 0.3s ease;
  display: flex;
  align-items: center;
  justify-content: center;
}

.nav-trigger-btn:hover {
  background-color: #c08a5e;
  transform: scale(1.1);
}

/* Barre de navigation */
.hidden-sidebar {
  position: fixed;
  top: 0;
  left: -300px;
  width: 280px;
  height: 100vh;
  background-color: rgba(255,255,255,0.95);
  backdrop-filter: blur(5px);
  z-index: 1050;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  box-shadow: 2px 0 15px rgba(0,0,0,0.1);
  padding: 20px;
  display: flex;
  flex-direction: column;
}

.hidden-sidebar.active {
  left: 0;
}

.sidebar-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
  padding-bottom: 15px;
  border-bottom: 1px solid rgba(212,163,115,0.3);
}

.sidebar-header h6 {
  color: #d4a373;
  margin: 0;
  font-size: 1.1rem;
  display: flex;
  align-items: center;
}

.close-btn {
  background: none;
  border: none;
  color: #d4a373;
  font-size: 1.5rem;
  cursor: pointer;
  transition: transform 0.2s;
}

.close-btn:hover {
  transform: rotate(90deg);
}

.nav-links {
  list-style: none;
  padding: 0;
  margin: 0;
  flex-grow: 1;
}

.nav-links li a {
  display: flex;
  align-items: center;
  padding: 12px 15px;
  color: #495057;
  text-decoration: none;
  border-radius: 6px;
  margin-bottom: 5px;
  transition: all 0.3s ease;
}

.nav-links li a:hover,
.nav-links li a.active {
  background-color: rgba(212, 163, 115, 0.15);
  color: #d4a373;
  transform: translateX(5px);
}

.nav-links li a i {
  width: 24px;
  text-align: center;
}

.nav-divider {
  height: 1px;
  background-color: rgba(212,163,115,0.2);
  margin: 15px 0;
}

.scroll-indicator {
  height: 3px;
  background-color: rgba(212,163,115,0.1);
  border-radius: 3px;
  margin-top: auto;
}

#scroll-progress {
  height: 100%;
  width: 0%;
  background-color: #d4a373;
  border-radius: 3px;
  transition: width 0.1s ease;
}

/* Overlay */
.nav-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.5);
  z-index: 1040;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
}

.nav-overlay.active {
  opacity: 1;
  visibility: visible;
}

/* Responsive */
@media (max-width: 767px) {
  .hidden-sidebar {
    width: 85%;
    left: -85%;
  }
}
.nav-trigger-btn {
  position: fixed;
  top: 50%; /* Center vertically */
  left: 20px;
  transform: translateY(-50%); /* Adjust for exact centering */
  z-index: 1000;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: #d4a373;
  color: white;
  border: none;
  font-size: 1.5rem;
  cursor: pointer;
  box-shadow: 0 2px 10px rgba(0,0,0,0.2);
  transition: all 0.3s ease;
  display: flex;
  align-items: center;
  justify-content: center;
}
.hidden-sidebar.active ~ .nav-trigger-btn {
  opacity: 0;
  pointer-events: none; /* Disables clicks */
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const triggerBtn = document.getElementById('nav-trigger');
  const sidebar = document.getElementById('toc-sidebar');
  const closeBtn = document.getElementById('sidebar-close');
  const overlay = document.getElementById('nav-overlay');
  
  // Ouvrir la sidebar
  triggerBtn.addEventListener('click', function() {
    sidebar.classList.add('active');
    overlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  });
  
  // Fermer la sidebar
  function closeSidebar() {
    sidebar.classList.remove('active');
    overlay.classList.remove('active');
    document.body.style.overflow = '';
  }
  
  closeBtn.addEventListener('click', closeSidebar);
  overlay.addEventListener('click', closeSidebar);
  
  // Fermer après clic sur un lien
  document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', closeSidebar);
  });
  
  // Mise à jour de la progression du scroll
  window.addEventListener('scroll', function() {
    const scrollTotal = document.documentElement.scrollHeight - window.innerHeight;
    const scrollProgress = (window.scrollY / scrollTotal) * 100;
    document.getElementById('scroll-progress').style.width = scrollProgress + '%';
  });
});
</script>

<div id="presentation">
  <!-- ... -->
</div>
<!-- Section 1 : Présentation du restaurant -->
<section class="restaurant-presentation">
  <div class="container">
    <div class="presentation-wrapper">
      <!-- Content Box -->
      <div class="presentation-content">
        <h2 class="presentation-title">Bienvenue au Le H Restaurant du <?php echo $general_setting['Name'] ?></h2>
        <p class="presentation-subtitle">Découvrez un univers savoureux mêlant cuisine internationale et spécialités algériennes.</p>
        
        <div class="divider"></div>
        
        <p class="presentation-text">
          Notre restaurant accueille les résidents de l'hôtel ainsi que le public, avec une carte variée mêlant 
          classiques internationaux et spécialités algériennes préparées avec passion.
        </p>
        
        <div class="signature">
          <img src="img/sign.jpg" alt="Signature du chef" class="img-fluid">
          <p class="chef-name">Le Chef <?php echo $general_setting['Name'] ?></p>
        </div>
      </div>
      
      <!-- Video Box -->
      <div class="presentation-video">
        <div class="video-container">
          <video autoplay loop muted playsinline class="hero-video">
            <source src="img/v/leR (7).mp4" type="video/mp4">
            Votre navigateur ne supporte pas la vidéo HTML5.
          </video>
          <div class="play-button">
            <i class="bi bi-play-fill"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .signature img {
  width: 200px; /* Smaller signature image */
  height: auto; /* Maintain aspect ratio */
}

.restaurant-presentation {
  padding: 80px 0;
  background-color: #f9f5f0;
  position: relative;
  overflow: hidden;
}

.presentation-wrapper {
  display: flex;
  align-items: center;
  gap: 50px;
}

.presentation-content {
  flex: 2;  /* Takes more space */
  padding: 20px;
  position: relative;
  z-index: 2;
}

.presentation-video {
  flex: 1;  /* Takes less space */
  position: relative;
  max-width: 450px; /* Limits maximum video size */
}

.presentation-title {
  font-size: 2.5rem;
  color: #d4a373;
  margin-bottom: 20px;
  font-weight: 700;
  line-height: 1.2;
}

.presentation-subtitle {
  font-size: 1.3rem;
  color: #6c757d;
  margin-bottom: 25px;
  font-weight: 300;
}

.divider {
  width: 80px;
  height: 3px;
  background-color: #d4a373;
  margin: 25px 0;
}

.presentation-text {
  font-size: 1.1rem;
  line-height: 1.8;
  color: #555;
  margin-bottom: 30px;
}

.signature {
  margin-top: 30px;
}

.chef-name {
  font-style: italic;
  color: #d4a373;
  font-weight: 500;
  margin-top: 5px;
}

.video-container {
  position: relative;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 20px 40px rgba(0,0,0,0.15);
  transition: all 0.3s ease;
  width: 100%;
  height: 300px; /* Fixed height */
}

.video-container:hover {
  transform: translateY(-5px);
  box-shadow: 0 25px 50px rgba(0,0,0,0.2);
}

.hero-video {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Ensures video fills container */
  display: block;
  border-radius: 15px;
}

.play-button {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 70px;
  height: 70px;
  background-color: rgba(212, 163, 115, 0.8);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s ease;
}

.play-button i {
  color: white;
  font-size: 30px;
  margin-left: 5px;
}

.play-button:hover {
  background-color: rgba(212, 163, 115, 1);
  transform: translate(-50%, -50%) scale(1.1);
}

/* Responsive Design */
@media (max-width: 992px) {
  .presentation-wrapper {
    flex-direction: column;
    gap: 30px;
  }
  
  .presentation-content {
    text-align: center;
  }
  
  .divider {
    margin: 25px auto;
  }
  
  .presentation-video {
    max-width: 100%; /* Full width on smaller screens */
  }
}

@media (max-width: 768px) {
  .presentation-title {
    font-size: 2rem;
  }
  
  .presentation-subtitle {
    font-size: 1.1rem;
  }
  
  .video-container {
    height: 250px; /* Smaller height on mobile */
  }
  
  .play-button {
    width: 50px;
    height: 50px;
  }
  
  .play-button i {
    font-size: 20px;
  }
}
</style>

<script>
// Script pour gérer la lecture de la vidéo
document.addEventListener('DOMContentLoaded', function() {
  const video = document.querySelector('.hero-video');
  const playButton = document.querySelector('.play-button');
  
  playButton.addEventListener('click', function() {
    if (video.paused) {
      video.play();
      video.removeAttribute('muted');
      playButton.style.display = 'none';
    } else {
      video.pause();
      video.setAttribute('muted', '');
      playButton.style.display = 'flex';
    }
  });
  
  video.addEventListener('click', function() {
    if (video.paused) {
      video.play();
      video.removeAttribute('muted');
      playButton.style.display = 'none';
    } else {
      video.pause();
      video.setAttribute('muted', '');
      playButton.style.display = 'flex';
    }
  });
});
</script>
</script>
<section id="section2" class="restaurant-section container">
  <div class="content">
    <h2 class="text-center">Le R Restaurant du <?php echo $general_setting['Name'] ?></h2>
    <p class="subtitle text-center">Un voyage culinaire entre tradition et modernité</p>
    <div class="section-divider mx-auto"></div>
  </div>

  <div class="restaurant-info">
    <!-- Horaires de service -->
    <div class="info-card">
      <h4 class="info-title ">🍽️ Horaires de service</h4>
      <ul class="info-list">
        <li><strong>Déjeuner</strong> : de 11h30 à 15h00</li>
        <li><strong>Dîner</strong> : de 19h00 à 23h00</li>
      </ul>
    </div>

    <!-- Petit Déjeuner -->
    <div class="info-card highlight-card">
      <h4 class="info-title">🥐 Petit Déjeuner</h4>
      <div class="info-content">
        <p class="highlight-text">
          Servi de 7h00 à 10h00 sous forme de buffet, il est offert aux résidents de l'hôtel. 
          Viennoiseries maison, douceurs algériennes, confitures artisanales et œufs préparés 
          à la demande sont au rendez-vous.
        </p>
        <p>
          Bien commencer sa journée passe par un bon petit déjeuner et c'est pourquoi il est offert 
          aux résidents de l'hôtel. Le petit déjeuner est servi sous forme de buffet, entre 7h et 10h.
          Les douceurs traditionnelles algériennes ainsi que les viennoiseries qui y sont servies 
          sont faîtes maison, chaque jour. Les confitures sont également artisanales et faîtes maison, 
          selon les fruits de saison. Un Chef se charge de la préparation des œufs suivant les goûts 
          de chacun : en omelette, à la coque, au plat ou brouillés, il suffit d'en formuler la demande.
        </p>
      </div>
    </div>

    <!-- Service Traiteur -->
    <div class="info-card">
      <h4 class="info-title">👨‍🍳 Service Traiteur</h4>
      <div class="info-content">
        <p>
          Avec plus de 5 ans d'expérience dans le catering, le restaurant propose un service traiteur 
          pour accompagner tout genre d'événement professionnel ou personnel : séminaire, conférence, 
          mariage, naissance, etc. Des menus de cuisine classique ou traditionnelle algérienne sont 
          pensés par les Chefs. Des demandes spécifiques peuvent aussi être formulées.
        </p>
      </div>
    </div>

    <!-- Call to Action -->
    <div class="cta-box text-center">
      <p>
        Pour prendre connaissance des menus établis, formuler une demande personnalisée ou connaître 
        les prix du service traiteur, prenez contact via le formulaire de contact du site, ou passez 
        appel auprès du service de réception du <?php echo $general_setting['Name'] ?>.
      </p>
      <a href="#contact" class="btn btn-primary btn-lg cta-btn">📞 Contactez-nous</a>
    </div>
  </div>
</section>

<style>
.restaurant-section {
  padding: 60px 0;
  background-color: #fff;
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

.content {
  text-align: center;
  margin-bottom: 40px;
}

.content h2 {
  color: #d4a373;
  font-size: 2.2rem;
  margin-bottom: 15px;
}

.subtitle {
  color: #6c757d;
  font-size: 1.2rem;
}

.section-divider {
  width: 80px;
  height: 3px;
  background-color: #d4a373;
  margin: 20px auto;
}

.restaurant-info {
  max-width: 800px;
  margin: 0 auto;
}

.info-card {
  margin-bottom: 30px;
  padding: 20px;
  border-radius: 10px;
  background-color: #f9f9f9;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.info-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.highlight-card {
  background-color: #fff8f0;
  border-left: 4px solid #d4a373;
}

.info-title {
  color: #d4a373;
  font-size: 1.4rem;
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}

.info-title i {
  margin-right: 10px;
}

.info-list {
  padding-left: 20px;
}

.info-list li {
  margin-bottom: 8px;
  color: #555;
}

.highlight-text {
  background-color: rgba(212, 163, 115, 0.1);
  padding: 15px;
  border-radius: 5px;
  font-style: italic;
}

.cta-box {
  margin-top: 40px;
  padding: 30px;
  background-color: #f5f5f5;
  border-radius: 10px;
}

.cta-box p {
  margin-bottom: 20px;
  color: #555;
}

.cta-btn {
  background-color: #d4a373;
  border: none;
  padding: 12px 30px;
  font-size: 1.1rem;
  transition: all 0.3s;
}

.cta-btn:hover {
  background-color: #c08a5e;
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(212, 163, 115, 0.3);
}

@media (max-width: 768px) {
  .content h2 {
    font-size: 1.8rem;
  }
  
  .subtitle {
    font-size: 1rem;
  }
  
  .info-card {
    padding: 15px;
  }
}
</style>
</head>
<body>

<div id="galerie">
  <!-- ... -->
</div>

<!-- Section 2 : Galerie d'images -->
 <section id="galerie" class="container my-4 section">
  <h3 class="text-center mb-5">📸 Galerie – Ambiance & Dégustation</h3>  
  <div   class="masonry-grid">
  <?php for ($i = 1; $i <= 28; $i++): ?>
    <div class="masonry-item">
      <img src="img/r<?php echo $i; ?>.jpg" alt="Image <?php echo $i; ?>" onclick="openLightbox('img/r<?php echo $i; ?>.jpg')">
      <div class="overlay">Image <?php echo $i; ?></div>
    </div>
  <?php endfor; ?>
</div>


<!-- نافذة منبثقة (Lightbox) -->
<div id="lightbox" class="lightbox">
  <button class="lightbox-close" onclick="closeLightbox()">X</button>
  <img id="lightbox-img" src="" alt="Enlarged image">
</div>

<div id="menu">
  <!-- ... -->
</div>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
  <style>
    html {
      scroll-behavior: smooth;
    }
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background: #f0f0f5;
      color: #333;
    }

    .navbar {
      background: #fff;
      padding: 15px 30px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    .navbar a {
      color: #c0392b;
      text-decoration: none;
      font-weight: 600;
      font-size: 1em;
      transition: color 0.3s;
    }

    .navbar a:hover {
      color: #e67e22;
    }

    .menu-book {
      background: #fff;
      width: 90%;
      max-width: 1000px;
      margin: 30px auto;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 15px 30px rgba(0,0,0,0.1);
      animation: fadeIn 1.2s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px);}
      to { opacity: 1; transform: translateY(0);}
    }

    h1 {
      font-family: 'Playfair Display', serif;
      text-align: center;
      font-size: 3em;
      margin-bottom: 20px;
      color: #c0392b;
    }

    section {
      margin-bottom: 50px;
    }

    h2 {
      font-size: 2em;
      margin-bottom: 10px;
      color: #e67e22;
      border-bottom: 2px solid #e67e22;
      display: inline-block;
      padding-bottom: 5px;
    }

    h3 {
      font-size: 1.5em;
      margin-top: 30px;
      color: #2980b9;
    }

    ul {
      list-style: none;
      padding: 0;
      margin-top: 10px;
    }

    li {
      display: flex;
      justify-content: space-between;
      padding: 10px 0;
      border-bottom: 0.2px  #eee;
      font-size: 1.1em;
    }

    li span {
      font-weight: bold;
      color: #555;
    }

    .footer {
      text-align: center;
      margin-top: 50px;
      font-size: 1.2em;
    }
    
    /* Small ET UTILIZE COMME section */
    .et-utilize-section {
      background: #f8f8f8;
      padding: 15px;
      border-radius: 10px;
      margin: 20px 0;
      font-size: 0.9em;
      border-left: 4px solid #e67e22;
    }
    .et-utilize-section h3 {
      margin-top: 0;
      color: #c0392b;
      font-size: 1.2em;
    }
  </style>

<setion>


<div class="menu-book">
  
  <h1>🍽️ NOS MENU</h1>
  <nav class="navbar">
  <a href="#entrees">Entrées</a>
  <a href="#salades">Salades</a>
  <a href="#plats">Plats</a>
  <a href="#sandwichs">Sandwichs</a>
  <a href="#desserts">Desserts</a>
  <a href="#boissons">Boissons</a>
  <a href="#pizzas">Pizzas</a>
</nav>
  <!-- Small ET UTILIZE COMME section -->
  <div class="et-utilize-section">
    <h3>ET UTILIZE COMME</h3>
    <p>Nous utilisons des ingrédients frais et locaux pour préparer tous nos plats avec soin et passion.</p>
  </div>
<div  id="entrees"></div>
  <section id="entrees">
    <h2>🍲 Entrées Chaudes</h2>
    <ul>
      <li id="a">Crème de volaille <span>500 DA</span></li>
      <li>Hrira maison <span>300 DA</span></li>
      <li>Soupe de légumes <span>300 DA</span></li>
      <li>Bourek viande rouge <span>250 DA</span></li>
      <li>Gratin de poulet <span>500 DA</span></li>
      <li>Hmiss <span>200 DA</span></li>
      <li>Omelettes (Nature/Fromage/Légumes) avec frites <span>300-400 DA</span></li>
      <li>Assiette frite <span>200 DA</span></li>
    </ul>
  </section>
  <div  id="salades"></div>

  <section id="salades">
    <h2>🥗 Salades</h2>
    <ul>
      <li>Tartare de saumon <span>1200 DA</span></li>
      <li>Salade de poulpe <span>900 DA</span></li>
      <li>Burrata à l'italienne <span>900 DA</span></li>
      <li>Salade mexicaine <span>600 DA</span></li>
      <li>Niçoise revisitée <span>600 DA</span></li>
      <li>César <span>600 DA</span></li>
      <li>Caprese <span>700 DA</span></li>
      <li>Salade de thon <span>600 DA</span></li>
      <li>Assiette de fromage <span>1400 DA</span></li>
    </ul>
  </section>
  <div  id="plats"></div>

  <section id="plats">
    <h2>🍖 Plats Principaux</h2>
    <h3>🥩 Viandes/Volaille</h3>
    <ul>
      <li>Médaillon de veau poêlée <span>1900 DA</span></li>
      <li>Entrecôte de bœuf grillée <span>1800 DA</span></li>
      <li>M'hamer d'agneau <span>1800 DA</span></li>
      <li>Cordon bleu <span>2000 DA</span></li>
      <li>Cube à la crème (poulet) <span>1200 DA</span></li>
      <li>Nuggets de poulet <span>1400 DA</span></li>
    </ul>
    <h3>🔥 Grillades</h3>
    <ul>
      <li>Brochettes mixte <span>2200 DA</span></li>
      <li>Côte d'agneau grillée <span>1800 DA</span></li>
      <li>Brochettes de viande hachée <span>1600 DA</span></li>
      <li>Brochettes de poulet <span>1200 DA</span></li>
      <li>Méchoui pour 4 (réservation 24h) <span>11000 DA</span></li>
    </ul>
    <h3>🍲 Tajines</h3>
    <ul>
      <li>Tajine langue de veau <span>1600 DA</span></li>
    </ul>
    <h3>🍝 Pâtes</h3>
    <ul>
      <li>Tagliatelle au saumon fumé <span>1400 DA</span></li>
      <li>Tagliatelle carbonara <span>1000 DA</span></li>
      <li>Spaghetti bolognaise <span>1000 DA</span></li>
      <li>Spaghetti au poulet <span>900 DA</span></li>
      <li>Penne à l'arrabbiata <span>1000 DA</span></li>
      <li>Penne sauce fromage/rouge <span>600-700 DA</span></li>
    </ul>
  </section>
  <div  id="sandwichs"></div>

  <section id="sandwichs">
    <h2>🍔 Sandwichs / Burgers</h2>
    <ul>
      <li>Sandwich classique <span>700 DA</span></li>
      <li>Burger Le (R) <span>600 DA</span></li>
      <li>Chicken burger <span>800 DA</span></li>
      <li>Tacos au poulet <span>800 DA</span></li>
      <li>Croque monsieur <span>500 DA</span></li>
    </ul>
  </section>
  <div  id="entrees"></div>

  <section id="desserts">
    <h2>🍰 Desserts</h2>
    <ul>
      <li>Tiramisu café/caramel <span>400 DA</span></li>
      <li>Crème brûlée <span>400 DA</span></li>
      <li>Flan maison <span>300 DA</span></li>
      <li>Assiette de fruits <span>700 DA</span></li>
      <li>Glaces artisanales <span>200 DA/boule</span></li>
      <li>Sorbets <span>200 DA/boule</span></li>
    </ul>
  </section>
  <div  id="boissons"></div>

  <section id="boissons">
    <h2>☕ Boissons Chaudes</h2>
    <ul>
      <li>Café Nespresso <span>200 DA</span></li>
      <li>Thé infusion <span>200 DA</span></li>
    </ul>
  </section>
  <div id="pizzas"></div>

  <section id="pizzas">
    <h2>🍕 Nos Pizzas</h2>
    <ul>
      <li>Margherita <span>500 DA</span></li>
      <li>Anchois <span>800 DA</span></li>
      <li>Végétarienne <span>800 DA</span></li>
      <li>Fermière <span>800 DA</span></li>
      <li>Buffalo <span>800 DA</span></li>
      <li>Thon <span>800 DA</span></li>
      <li>Milano <span>800 DA</span></li>
      <li>Américaine <span>900 DA</span></li>
      <li>Quatre Fromages <span>1000 DA</span></li>
      <li>Saumon <span>1200 DA</span></li>
      <li>Mixte <span>1200 DA</span></li>
    </ul>
    <p style="text-align:center;">Suppléments : +300 DA</p>
  </section>
</div>
</section>


<div id="videos">
  <!-- ... -->
</div>
<div  id="videos" class="container my-4">
  <h2 class="title">🎥 Vidéos Le H Restaurant du <?php echo $general_setting['Name'] ?></h2>
  <div class="video-grid">
    <?php for ($i = 1; $i <= 14; $i++): ?>
      <div class="video-box" onclick="openVideoModal('img/v/leR (<?php echo $i; ?>).mp4')">
        <video muted onmouseover="this.play()" onmouseout="this.pause(); this.currentTime=0;">
          <source src="img/v/leR (<?php echo $i; ?>).mp4" type="video/mp4">
        </video>
      </div>
    <?php endfor; ?>
  </div>
</div>

<div id="contact"></div>
<!-- Section 5 : Call to Action -->
<section id="contact" class="section py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <!-- Texte d'appel à l'action -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h3 class="display-5 fw-bold">Réservez votre table ou demandez un service traiteur</h3>
        <p class="lead text-muted">Notre équipe est à votre écoute pour toute demande personnalisée.</p>
        <div class="d-flex gap-3">
          <a href="#contact" class="btn btn-primary btn-lg px-4">
            <i class="fas fa-phone-alt me-2"></i>Contactez-nous
          </a>
          <a href="https://wa.me/" class="btn btn-success btn-lg px-4">
            <i class="fab fa-whatsapp me-2"></i>WhatsApp
          </a>
        </div>
      </div>
      
      <!-- Carte service restauration -->
      <div class="col-lg-6">
        <div class="card border-0 shadow-lg overflow-hidden">
          <div class="row g-0">
            <div class="col-md-5">
              <img src="assets/picture/leR.jpg" class="img-fluid h-100" style="object-fit: cover;" alt="Service Restauration">
            </div>
            <div class="col-md-7">
              <div class="card-body p-4">
                <h4 class="card-title">Service Restauration</h4>
                <p class="card-text text-muted">Commandes, événements et menus spéciaux</p>
                <div class="social-icons mt-3">
                  <a href="https://www.facebook.com/" class="text-decoration-none mx-2">
                    <i class="fab fa-facebook fa-lg text-primary"></i>
                  </a>
                  <a href="https://www.instagram.com/" class="text-decoration-none mx-2">
                    <i class="fab fa-instagram fa-lg text-danger"></i>
                  </a>
                  <a href="mailto:votre@email.com" class="text-decoration-none mx-2">
                    <i class="fas fa-envelope fa-lg text-secondary"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



<!-- Custom CSS -->
<style>
    .video-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1rem;
}

.video-box {
  border-radius: 12px;
  overflow: hidden;
  cursor: pointer;
  transition: transform 0.3s ease;
  position: relative;
}

.video-box:hover {
  transform: scale(1.03);
}

.video-box video {
  width: 100%;
  height: auto;
  border-radius: 12px;
}

     .image-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 15px;
  }

  .image-grid img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    cursor: pointer;
    transition: transform 0.3s ease;
  }

  .image-grid img:hover {
    transform: scale(1.05);
  }

  /* نافذة منبثقة (Lightbox) */
  .lightbox {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
    z-index: 1000;
  }

  .lightbox img {
    max-width: 80%;
    max-height: 80%;
    border-radius: 10px;
  }

  .lightbox-close {
    position: absolute;
    top: 20px;
    right: 20px;
    background: rgba(255, 255, 255, 0.7);
    border: none;
    font-size: 2rem;
    color: #000;
    cursor: pointer;
    border-radius: 50%;
  }
     .restaurant-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px; /* المسافة بين العناصر */
  }

  .restaurant-section .content {
    flex: 1;
    max-width:70%; /* تحديد أقصى عرض للنص */
  }

  .restaurant-section .video-box {
    flex: 1;
    max-width: 50%; /* تحديد أقصى عرض للفيديو */
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .restaurant-section video {
    width: 100%;
    max-width: 300px; /* حجم الفيديو */
    border-radius: 10px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
  }

  .restaurant-section h2 {
    font-size: 1.8rem;
    margin-bottom: 15px;
  }

  .restaurant-section p {
    font-size: 1rem;
    line-height: 1.6;
  }
      .video-box {
    width: 240px;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin: 15px;
  }

  .video-box:hover {
    transform: scale(1.05);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.3);
  }

  .video-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .video-box video {
    width: 100%;
    height: auto;
    display: block;
  }

  .title {
    text-align: center;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
  }
     body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }

    h2, h3 {
      color: #d4a373;
      font-weight: bold;
    }

    .section {
      padding: 60px 20px;
      background: #fff;
      border-radius: 20px;
      margin: 30px auto;
      max-width: 1200px;
      box-shadow: 0 0 20px rgba(0,0,0,0.05);
    }

    .section img {
      border-radius: 10px;
    }

    .menu-card {
      border: none;
      border-radius: 15px;
      background-color: #fff8f0;
      transition: transform 0.3s ease;
    }

    .menu-card:hover {
      transform: translateY(-5px);
    }

    .video-section iframe {
      width: 100%;
      height: 400px;
      border-radius: 10px;
    }

    .btn-primary {
      background-color: #d4a373;
      border: none;
    }

    .btn-primary:hover {
      background-color: #c68658;
    }
   body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }

    .restaurant-section {
      background: #fff;
      padding: 60px 20px;
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(0,0,0,0.05);
      margin: 30px auto;
      max-width: 1200px;
    }

    .restaurant-section h2 {
      color: #d4a373;
      font-weight: bold;
      margin-bottom: 30px;
    }

    .restaurant-section .subtitle {
      color: #6c757d;
      margin-bottom: 20px;
    }

    .section-divider {
      border-top: 2px solid #d4a373;
      width: 80px;
      margin: 20px 0;
    }

    .highlight {
      background-color: #fff3cd;
      padding: 15px;
      border-left: 5px solid #ffc107;
      border-radius: 5px;
    }

    .btn-primary {
      background-color: #d4a373;
      border: none;
    }

    .btn-primary:hover {
      background-color: #c68658;
    }
    .menu-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2c3e50;
    position: relative;
    display: inline-block;
  }

  .menu-title::after {
    content: "";
    position: absolute;
    width: 60%;
    height: 4px;
    background-color: #e67e22;
    left: 50%;
    bottom: -10px;
    transform: translateX(-50%);
    border-radius: 2px;
  }

  @media (max-width: 768px) {
    .menu-title {
      font-size: 1.8rem;
    }
  }
  .instagram-carousel .carousel-item {
    position: relative;
  }

  .instagram-carousel .carousel-item img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    object-fit: cover;
  }

  .carousel-control-prev-icon, .carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
  }

  .instagram-carousel .carousel-control-prev, .instagram-carousel .carousel-control-next {
    top: 50%;
    transform: translateY(-50%);
  }
  .masonry-grid {
  columns: 4 200px;
  column-gap: 1rem;
  padding: 20px;
}

.masonry-item {
  break-inside: avoid;
  margin-bottom: 1rem;
  position: relative;
  cursor: pointer;
  overflow: hidden;
  border-radius: 12px;
  transition: transform 0.3s ease;
}

.masonry-item img {
  width: 100%;
  border-radius: 12px;
  transition: transform 0.4s ease;
}

.masonry-item:hover img {
  transform: scale(1.1);
}

.overlay {
  position: absolute;
  bottom: 0;
  background: rgba(0,0,0,0.6);
  color: white;
  width: 100%;
  padding: 8px;
  text-align: center;
  font-size: 14px;
  opacity: 0;
  transition: opacity 0.3s;
}

.masonry-item:hover .overlay {
  opacity: 1;
}

</style>

<script>
 document.addEventListener('DOMContentLoaded', function() {
  // Toggle sidebar
  const toggleBtn = document.getElementById('sidebar-toggle');
  const sidebar = document.getElementById('toc-sidebar');
  
  toggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('collapsed');
  });

  // Mobile menu toggle
  document.getElementById('mobile-menu-btn').addEventListener('click', function() {
    sidebar.classList.toggle('d-none');
  });

  // Smooth scrolling for sidebar links
  document.querySelectorAll('#toc-sidebar a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const targetId = this.getAttribute('href');
      const targetElement = document.querySelector(targetId);
      
      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop - 20,
          behavior: 'smooth'
        });
        
        // Close mobile menu if open
        if (!sidebar.classList.contains('d-none') && window.innerWidth < 768) {
          sidebar.classList.add('d-none');
        }
      }
    });
  });

  // Active section detection on scroll
  window.addEventListener('scroll', function() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('#toc-sidebar .nav-link');
    
    let current = '';
    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;
      
      if (window.scrollY >= sectionTop - 200) {
        current = section.getAttribute('id');
      }
    });
    
    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === `#${current}`) {
        link.classList.add('active');
      }
    });

    // Update scroll progress
    const scrollTotal = document.documentElement.scrollHeight - window.innerHeight;
    const scrollProgress = (window.scrollY / scrollTotal) * 100;
    document.getElementById('scroll-progress').style.width = scrollProgress + '%';
  });
});
</script>

    <script>
function openVideoModal(src) {
  const modal = document.createElement('div');
  modal.className = 'video-modal';
  modal.innerHTML = `
    <div class="video-content">
      <span onclick="this.parentElement.parentElement.remove()" class="close-btn">✖</span>
      <video src="${src}" controls autoplay></video>
    </div>
  `;
  document.body.appendChild(modal);
}
</script>
<script>

// Video modal functionality
function openVideoModal(src) {
  const modal = document.createElement('div');
  modal.className = 'video-modal';
  modal.innerHTML = `
    <div class="video-content">
      <button class="close-btn" onclick="this.parentElement.parentElement.remove()">✖</button>
      <video src="${src}" controls autoplay></video>
    </div>
  `;
  document.body.appendChild(modal);
}

// Close video modal when clicking outside
document.addEventListener('click', function(e) {
  if (e.target.className === 'video-modal') {
    e.target.remove();
  }
});
</script>

<script>

    function openLightbox(src) {
  const lightbox = document.createElement('div');
  lightbox.className = 'lightbox';
  lightbox.innerHTML = `<img src="${src}" alt=""><span onclick="this.parentElement.remove()">✖</span>`;
  document.body.appendChild(lightbox);
}

document.head.insertAdjacentHTML("beforeend", `
<style>
.lightbox {
  position: fixed; top: 0; left: 0; width: 100%; height: 100%;
  background: rgba(0,0,0,0.8); display: flex; justify-content: center;
  align-items: center; z-index: 1000;
}
.lightbox img {
  max-width: 90%; max-height: 90%;
  border-radius: 12px;
}
.lightbox span {
  position: absolute; top: 20px; right: 30px;
  font-size: 2rem; color: white; cursor: pointer;
}
</style>
`);

  function changeVideo(src) {
    const video = document.getElementById('mainVideo');
    video.src = src;
    video.load();
    video.play();
  }
</script>

<script>
  // Toggle sidebar
  document.getElementById('sidebar-toggle').addEventListener('click', function() {
    document.getElementById('toc-sidebar').classList.toggle('collapsed');
  });
  
  // Mobile menu toggle
  document.getElementById('mobile-menu-btn').addEventListener('click', function() {
    document.getElementById('toc-sidebar').classList.toggle('d-none');
  });
  
  // Update active link on scroll
  window.addEventListener('scroll', function() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('#toc-sidebar .nav-link');
    
    let current = '';
    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;
      
      if (pageYOffset >= sectionTop - 200) {
        current = section.getAttribute('id');
      }
    });
    
    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === `#${current}`) {
        link.classList.add('active');
      }
    });
    
    // Update scroll progress
    const scrollTotal = document.documentElement.scrollHeight - window.innerHeight;
    const scrollProgress = (window.scrollY / scrollTotal) * 100;
    document.getElementById('scroll-progress').style.width = scrollProgress + '%';
  });
</script>
<script>
// Script pour le scroll fluide et la détection active
document.addEventListener('DOMContentLoaded', function() {
  // 1. Scroll fluide
  document.querySelectorAll('#toc-sidebar a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const targetId = this.getAttribute('href');
      const targetElement = document.querySelector(targetId);
      
      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop - 20,
          behavior: 'smooth'
        });
      }
    });
  });

  // 2. Détection de la section active
  window.addEventListener('scroll', function() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('#toc-sidebar .nav-link');
    
    let current = '';
    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;
      
      if (window.scrollY >= sectionTop - 200) {
        current = section.getAttribute('id');
      }
    });
    
    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === `#${current}`) {
        link.classList.add('active');
      }
    });
  });
});
</script>


<!-- FontAwesome Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/lightbox2@2/dist/css/lightbox.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/lightbox2@2/dist/js/lightbox.min.js"></script>
<script>
  function openLightbox(imageSrc) {
    document.getElementById('lightbox-img').src = imageSrc;
    document.getElementById('lightbox').style.display = 'flex';
  }

  function closeLightbox() {
    document.getElementById('lightbox').style.display = 'none';
  }
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Ajout des IDs dynamiques aux sections pour navigation fluide
    document.querySelectorAll("section").forEach((section, index) => {
      section.id = "section" + (index + 1);
    });
  });
</script>
</section>
<?php include('include/footer.php'); ?>
