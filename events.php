
<?php
 session_start();
 include('include/currentPage_header.php');
 include('include/dbConnect.php');
 ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

<!-- Events Header -->
<section class="container py-5 text-center">
    <h2 class="fw-bold text-uppercase" style="color: #2c3e50;">Réunions & Événements</h2>
    <div class="section-divider mx-auto mb-4" style="width: 80px; height: 3px; background-color: #D2B48C;"></div>
    <p class="lead" style="color: #6c757d; max-width: 800px; margin: 0 auto;">
        L'Appart Hôtel xxxx propose des espaces élégants et modernes pour organiser vos événements professionnels et privés.
        Profitez d'installations haut de gamme pour vos réunions, conférences et mariages dans un cadre prestigieux.
    </p>
</section>

<!-- About Events -->
<div class="container-fluid py-5" style="background-color: #fff8f0;">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 pb-5 pb-lg-0" data-aos="fade-right">
                <img class="img-fluid w-100 rounded-lg shadow" src="img/472682049_923951953229562_7087842155982234529_n.jpg" alt="Event Space">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <span class="d-inline-block text-uppercase py-1 px-2 mb-3" style="background-color: rgba(210, 180, 140, 0.2); color: #D2B48C; font-weight: 600;">À Propos de Nos Événements</span>
                <h1 class="mb-4" style="color: #2c3e50;">Des Événements Inoubliables à xxxx Oran</h1>
                <div class="pl-4 mb-4" style="border-left: 3px solid #D2B48C;">
                    <p style="color: #555;">L'Appart Hôtel xxxx Oran est l'endroit idéal pour organiser vos événements. Qu'il s'agisse de conférences, de mariages ou de fêtes privées, nos espaces élégants et nos services sur mesure garantiront une expérience exceptionnelle.</p>
                </div>
                <div class="row pt-3">
                    <div class="col-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-center p-4 rounded" style="background-color: white; border: 1px solid rgba(210, 180, 140, 0.3);">
                            <h3 class="display-4 mb-2" style="color: #D2B48C;" data-toggle="counter-up">150</h3>
                            <h6 class="text-uppercase" style="color: #6c757d;">Événements Organisés</h6>
                        </div>
                    </div>
                    <div class="col-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="text-center p-4 rounded" style="background-color: white; border: 1px solid rgba(210, 180, 140, 0.3);">
                            <h3 class="display-4 mb-2" style="color: #D2B48C;" data-toggle="counter-up">1000+</h3>
                            <h6 class="text-uppercase" style="color: #6c757d;">Invités Satisfaits</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Event Services -->
<div class="container-fluid py-5" style="background-color: #f8f9fa;">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100 rounded-lg overflow-hidden shadow" data-aos="fade-right">
                    <img class="position-absolute w-100 h-100" src="img/472961643_923950623229695_7723899013323001156_n.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="p-4 p-lg-5 my-lg-5 rounded-lg shadow" style="background-color: white; border-top: 4px solid #D2B48C;" data-aos="fade-left">
                    <span class="d-inline-block text-uppercase py-1 px-2 mb-3" style="background-color: #D2B48C; color: white; font-weight: 600;">Nos Services</span>
                    <h1 class="mb-4" style="color: #2c3e50;">Organisation d'Événements</h1>
                    <p style="color: #555;">Notre équipe professionnelle vous accompagne dans la planification et l'organisation de votre événement avec des prestations haut de gamme.</p>
                    <ul class="list-unstyled mt-4">
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle mt-1 mr-3" style="color: #D2B48C;"></i>
                            <span style="color: #555;">Conférences & Séminaires</span>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle mt-1 mr-3" style="color: #D2B48C;"></i>
                            <span style="color: #555;">Mariages et Réceptions</span>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle mt-1 mr-3" style="color: #D2B48C;"></i>
                            <span style="color: #555;">Fêtes Privées</span>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle mt-1 mr-3" style="color: #D2B48C;"></i>
                            <span style="color: #555;">Services de Restauration</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fas fa-check-circle mt-1 mr-3" style="color: #D2B48C;"></i>
                            <span style="color: #555;">Décoration et Animation</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Event Pricing -->
<div class="container-fluid py-5" style="background-color: #fff8f0;">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100 rounded-lg overflow-hidden shadow" data-aos="fade-right">
                    <img class="position-absolute w-100 h-100" src="img/471983782_918748387083252_2804461895778630060_n.jpg" style="object-fit: cover;" alt="Événement">
                </div>
            </div>
            <div class="col-lg-7 pt-5 pb-lg-5">
                <div class="p-4 p-lg-5 my-lg-5" data-aos="fade-left">
                    <!-- Standard Package -->
                    <div class="mb-5 rounded-lg overflow-hidden shadow-sm" style="background-color: white; border-top: 4px solid #D2B48C;">
                        <div class="d-flex align-items-center justify-content-between p-4" style="background-color: rgba(210, 180, 140, 0.1);">
                            <h2 class="mb-0" style="color: #2c3e50;">199 000 DA</h2>
                            <h5 class="mb-0 text-uppercase" style="color: #D2B48C;">Forfait Standard</h5>
                        </div>
                        <div class="p-4">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2 d-flex align-items-start">
                                    <i class="fas fa-check-circle mt-1 mr-3" style="color: #D2B48C;"></i>
                                    <span style="color: #555;">Salle de réception</span>
                                </li>
                                <li class="mb-2 d-flex align-items-start">
                                    <i class="fas fa-check-circle mt-1 mr-3" style="color: #D2B48C;"></i>
                                    <span style="color: #555;">Décoration de base</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="fas fa-check-circle mt-1 mr-3" style="color: #D2B48C;"></i>
                                    <span style="color: #555;">Service traiteur (50 personnes)</span>
                                </li>
                            </ul>
                            <div class="text-center mt-4">
                                <a href="client/event.php" class="btn btn-primary px-4 py-2" style="background-color: #D2B48C; border-color: #D2B48C;">Réserver</a>
                            </div>
                        </div>
                    </div>

                    <!-- Premium Package -->
                    <div class="mb-5 rounded-lg overflow-hidden shadow-sm" style="background-color: white; border-top: 4px solid #D2B48C;">
                        <div class="d-flex align-items-center justify-content-between p-4" style="background-color: rgba(210, 180, 140, 0.1);">
                            <h2 class="mb-0" style="color: #2c3e50;">299 000 DA</h2>
                            <h5 class="mb-0 text-uppercase" style="color: #D2B48C;">Forfait Premium</h5>
                        </div>
                        <div class="p-4">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2 d-flex align-items-start">
                                    <i class="fas fa-check-circle mt-1 mr-3" style="color: #D2B48C;"></i>
                                    <span style="color: #555;">Grande salle événementielle</span>
                                </li>
                                <li class="mb-2 d-flex align-items-start">
                                    <i class="fas fa-check-circle mt-1 mr-3" style="color: #D2B48C;"></i>
                                    <span style="color: #555;">Décoration personnalisée</span>
                                </li>
                                <li class="mb-2 d-flex align-items-start">
                                    <i class="fas fa-check-circle mt-1 mr-3" style="color: #D2B48C;"></i>
                                    <span style="color: #555;">Buffet gastronomique (100 personnes)</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="fas fa-check-circle mt-1 mr-3" style="color: #D2B48C;"></i>
                                    <span style="color: #555;">Son et Lumière professionnels</span>
                                </li>
                            </ul>
                            <div class="text-center mt-4">
                                <a href="client/event.php" class="btn btn-primary px-4 py-2" style="background-color: #D2B48C; border-color: #D2B48C;">Réserver</a>
                            </div>
                        </div>
                    </div>

                    <!-- VIP Package -->
                    <div class="rounded-lg overflow-hidden shadow-sm" style="background-color: white; border-top: 4px solid #D2B48C;">
                        <div class="d-flex align-items-center justify-content-between p-4" style="background-color: rgba(210, 180, 140, 0.1);">
                            <h2 class="mb-0" style="color: #2c3e50;">4 000 000 DA</h2>
                            <h5 class="mb-0 text-uppercase" style="color: #D2B48C;">Forfait VIP</h5>
                        </div>
                        <div class="p-4">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2 d-flex align-items-start">
                                    <i class="fas fa-check-circle mt-1 mr-3" style="color: #D2B48C;"></i>
                                    <span style="color: #555;">Privatisation complète</span>
                                </li>
                                <li class="mb-2 d-flex align-items-start">
                                    <i class="fas fa-check-circle mt-1 mr-3" style="color: #D2B48C;"></i>
                                    <span style="color: #555;">Décoration de luxe</span>
                                </li>
                                <li class="mb-2 d-flex align-items-start">
                                    <i class="fas fa-check-circle mt-1 mr-3" style="color: #D2B48C;"></i>
                                    <span style="color: #555;">Service traiteur premium (200 personnes)</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="fas fa-check-circle mt-1 mr-3" style="color: #D2B48C;"></i>
                                    <span style="color: #555;">Animation musicale & spectacle</span>
                                </li>
                            </ul>
                            <div class="text-center mt-4">
                                <a href="client/event.php" class="btn btn-primary px-4 py-2" style="background-color: #D2B48C; border-color: #D2B48C;">Réserver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Capacity Details -->
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container text-center">
        <h2 class="fw-bold text-uppercase mb-4" style="color: #2c3e50;">Détails de la Capacité</h2>
        <div class="section-divider mx-auto mb-5" style="width: 80px; height: 3px; background-color: #D2B48C;"></div>
        <div class="row mt-5">
            <div class="col-md-3 mb-4" data-aos="fade-up">
                <div class="p-4 border rounded shadow-sm bg-white h-100">
                    <i class="bi bi-door-open display-4 mb-3" style="color: #D2B48C;"></i>
                    <h3 class="fw-bold display-5" style="color: #2c3e50;">6</h3>
                    <p class="text-muted">Salles d'événements</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4 border rounded shadow-sm bg-white h-100">
                    <i class="bi bi-rulers display-4 mb-3" style="color: #D2B48C;"></i>
                    <h3 class="fw-bold display-5" style="color: #2c3e50;">1 789 m²</h3>
                    <p class="text-muted">Espace total</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4 border rounded shadow-sm bg-white h-100">
                    <i class="bi bi-people-fill display-4 mb-3" style="color: #D2B48C;"></i>
                    <h3 class="fw-bold display-5" style="color: #2c3e50;">1 200</h3>
                    <p class="text-muted">Capacité max.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="p-4 border rounded shadow-sm bg-white h-100">
                    <i class="bi bi-columns-gap display-4 mb-3" style="color: #D2B48C;"></i>
                    <h3 class="fw-bold display-5" style="color: #2c3e50;">2</h3>
                    <p class="text-muted">Salles supplémentaires</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Venue -->
<section class="py-5" style="background-color: #fff8f0;">
    <div class="container">
        <h2 class="text-center fw-bold text-uppercase mb-4" style="color: #2c3e50;">À propos du Lieu</h2>
        <div class="section-divider mx-auto mb-5" style="width: 80px; height: 3px; background-color: #D2B48C;"></div>
        <p class="text-center mb-5" style="color: #6c757d; max-width: 700px; margin: 0 auto;">Profitez d'un cadre exceptionnel pour vos événements à Appart Hotel xxxx.</p>
        <div class="row mt-5">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="p-4 border rounded shadow-sm bg-white text-center h-100">
                    <i class="bi bi-building display-4 mb-3" style="color: #D2B48C;"></i>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2 d-flex align-items-start">
                            <i class="bi bi-check-circle-fill mt-1 mr-2" style="color: #D2B48C;"></i>
                            <span style="color: #555;">Espaces modernes et flexibles</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill mt-1 mr-2" style="color: #D2B48C;"></i>
                            <span style="color: #555;">Salles adaptées à tous les événements</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4 border rounded shadow-sm bg-white text-center h-100">
                    <i class="bi bi-people display-4 mb-3" style="color: #D2B48C;"></i>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2 d-flex align-items-start">
                            <i class="bi bi-check-circle-fill mt-1 mr-2" style="color: #D2B48C;"></i>
                            <span style="color: #555;">Capacité jusqu'à 1 200 personnes</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill mt-1 mr-2" style="color: #D2B48C;"></i>
                            <span style="color: #555;">Assistance événementielle sur mesure</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4 border rounded shadow-sm bg-white text-center h-100">
                    <i class="bi bi-camera-video display-4 mb-3" style="color: #D2B48C;"></i>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2 d-flex align-items-start">
                            <i class="bi bi-check-circle-fill mt-1 mr-2" style="color: #D2B48C;"></i>
                            <span style="color: #555;">Équipements audiovisuels dernière génération</span>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill mt-1 mr-2" style="color: #D2B48C;"></i>
                            <span style="color: #555;">Hébergement de luxe sur place</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('include/footer.php') ?>

<style>
.section-divider {
    width: 80px;
    height: 3px;
    margin: 15px auto;
}

.rounded-lg {
    border-radius: 12px;
}

.shadow {
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.shadow-sm {
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.btn-primary {
    background-color: #D2B48C;
    border-color: #D2B48C;
    transition: all 0.3s;
}

.btn-primary:hover {
    background-color: #c39e6d;
    border-color: #c39e6d;
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .display-5 {
        font-size: 2rem;
    }
    
    .col-md-3 {
        margin-bottom: 15px;
    }
    
    .p-4 {
        padding: 1.5rem !important;
    }
}
</style>