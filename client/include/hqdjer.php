<?php include('include/header.php') ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrousel Moderne - Appart-Hôtel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @keyframes slideInDown {
            from { transform: translateY(-100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .animated { animation-duration: 1s; animation-fill-mode: both; }
        .slideInDown { animation-name: slideInDown; }
        .carousel-item { 
            height: 100vh; 
            background-size: cover; 
            background-position: center; 
            position: relative;
        }
        .carousel-caption { 
            position: absolute;
            bottom: 20%; 
            left: 10%; 
            text-align: left; 
            padding: 20px; 
            background: rgba(0, 0, 0, 0.5); 
            border-radius: 10px; 
            color: white;
        }
        .carousel-caption h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .carousel-caption p {
            font-size: 1.2rem;
        }
        .carousel-caption .btn {
            font-size: 1rem;
            padding: 10px 20px;
            border-radius: 25px;
        }
    </style>
</head>
<body>
<?php
// carousel.php
?>
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
        <?php
        $slides = [
            ['title' => 'Luxe Moderne', 'subtitle' => 'Découvrez nos Suites Élégantes', 'text' => 'Confort et design se rencontrent pour une expérience inoubliable.', 'image' => 'https://via.placeholder.com/1920x1080', 'button_text' => 'Voir les Suites'],
            ['title' => 'Événements', 'subtitle' => 'Organisez des Moments Mémorables', 'text' => 'Nos espaces modulables s’adaptent à tous vos événements.', 'image' => 'https://via.placeholder.com/1920x1080', 'button_text' => 'Réservez Maintenant'],
            ['title' => 'Détente', 'subtitle' => 'Évadez-vous dans notre Spa', 'text' => 'Offrez-vous une pause bien-être dans un cadre luxueux.', 'image' => 'https://via.placeholder.com/1920x1080', 'button_text' => 'Découvrir le Spa']
        ];
        foreach ($slides as $index => $slide) {
            $active = $index === 0 ? 'active' : '';
            echo "<div class='carousel-item $active' style='background-image: url({$slide['image']});'>
                    <div class='carousel-caption d-flex flex-column align-items-start justify-content-center'>
                        <div class='p-3' style='max-width: 700px;'>
                            <h6 class='text-white text-uppercase mb-3 animated slideInDown'>{$slide['title']}</h6>
                            <h1 class='display-3 text-white mb-4 animated slideInDown'>{$slide['subtitle']}</h1>
                            <p class='text-white mb-4 animated slideInRight'>{$slide['text']}</p>
                            <a href='' class='btn btn-primary py-md-3 px-md-5 animated slideInLeft'>{$slide['button_text']}</a>
                        </div>
                    </div>
                  </div>";
        }
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
</div>

<!-- Rest of your content -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php include('include/footer.php') ?>