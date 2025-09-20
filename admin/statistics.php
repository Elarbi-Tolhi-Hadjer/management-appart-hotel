<?php
include("db.php");
include("include/header.php");

if (!isset($_SESSION['loggedUserId'])) {
    header("Location: ../login.php");
    exit();
}

include("include/db_connection.php");

// 1. Données pour le taux d'occupation (CORRIGÉ)
$occupancy_sql = "SELECT 
    DATE_FORMAT(CheckIn, '%Y-%m') AS month,
    COUNT(*) AS booked_rooms,
    (COUNT(*) / (SELECT COUNT(*) FROM room_list)) * 100 AS occupancy_rate
FROM room_booking
WHERE CheckIn BETWEEN DATE_SUB(NOW(), INTERVAL 12 MONTH) AND NOW()
GROUP BY DATE_FORMAT(CheckIn, '%Y-%m')";
$occupancy_result = mysqli_query($connection, $occupancy_sql);

// 2. Données pour les revenus
$revenue_sql = "SELECT 
    rt.RoomType AS type,
    SUM(rb.Amount) AS revenue
FROM room_booking rb
JOIN room_list rl ON rb.RoomId = rl.RoomId
JOIN room_type rt ON rl.RoomTypeId = rt.RoomTypeId
WHERE rb.CheckIn BETWEEN DATE_SUB(NOW(), INTERVAL 6 MONTH) AND NOW()
GROUP BY rt.RoomType";
$revenue_result = mysqli_query($connection, $revenue_sql);

// 3. Données pour le statut des chambres
$status_sql = "SELECT 
    rl.Booking_status AS status, 
    COUNT(*) as count 
FROM room_list rl
GROUP BY rl.Booking_status";
$status_result = mysqli_query($connection, $status_sql);

// Vérification des erreurs
if (!$occupancy_result) {
    die("Erreur dans la requête d'occupation: " . mysqli_error($connection));
}
if (!$revenue_result) {
    die("Erreur dans la requête de revenus: " . mysqli_error($connection));
}
if (!$status_result) {
    die("Erreur dans la requête de statut: " . mysqli_error($connection));
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Statistiques - Appart Hôtel xxxx Oran</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
        .chart-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin: 20px 0;
        }
        .chart {
            width: 400px;
            height: 400px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .chart-title {
            text-align: center;
            margin-bottom: 15px;
            font-weight: bold;
            color: #333;
        }
        .error {
            color: red;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Statistiques de l'hôtel</h1>

    <div class="chart-container">
        <div class="chart">
            <div class="chart-title">Taux d'Occupation Mensuel</div>
            <div id="occupancy_chart"></div>
        </div>
        
        <div class="chart">
            <div class="chart-title">Revenus par Type de Chambre</div>
            <div id="revenue_chart"></div>
        </div>
        
        <div class="chart">
            <div class="chart-title">Statut des Chambres</div>
            <div id="status_chart"></div>
        </div>
    </div>

    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {
            drawOccupancyChart();
            drawRevenueChart();
            drawStatusChart();
        }

        function drawOccupancyChart() {
            var data = google.visualization.arrayToDataTable([
                ['Mois', 'Taux d\'occupation'],
                <?php 
                if (mysqli_num_rows($occupancy_result) > 0) {
                    while($row = mysqli_fetch_assoc($occupancy_result)) {
                        echo "['".date("M Y", strtotime($row['month']."-01"))."', ".$row['occupancy_rate']."],";
                    }
                } else {
                    echo "['Pas de données', 0]";
                }
                ?>
            ]);

            var options = {
                title: 'Taux d\'Occupation (12 derniers mois)',
                curveType: 'function',
                legend: { position: 'bottom' },
                vAxis: { title: 'Taux (%)', minValue: 0, maxValue: 100 },
                hAxis: { title: 'Mois' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('occupancy_chart'));
            chart.draw(data, options);
        }

        function drawRevenueChart() {
            var data = google.visualization.arrayToDataTable([
                ['Type', 'Revenus'],
                <?php 
                if (mysqli_num_rows($revenue_result) > 0) {
                    while($row = mysqli_fetch_assoc($revenue_result)) {
                        echo "['".$row['type']."', ".$row['revenue']."],";
                    }
                } else {
                    echo "['Pas de données', 0]";
                }
                ?>
            ]);

            var options = {
                title: 'Revenus par Type (6 derniers mois)',
                is3D: true,
                pieSliceText: 'value',
                legend: { position: 'labeled' }
            };

            var chart = new google.visualization.PieChart(document.getElementById('revenue_chart'));
            chart.draw(data, options);
        }

        function drawStatusChart() {
            var data = google.visualization.arrayToDataTable([
                ['Statut', 'Nombre'],
                <?php 
                if (mysqli_num_rows($status_result) > 0) {
                    while($row = mysqli_fetch_assoc($status_result)) {
                        echo "['".$row['status']."', ".$row['count']."],";
                    }
                } else {
                    echo "['Pas de données', 0]";
                }
                ?>
            ]);

            var options = {
                title: 'Statut Actuel des Chambres',
                pieHole: 0.4,
                legend: { position: 'labeled' }
            };

            var chart = new google.visualization.PieChart(document.getElementById('status_chart'));
            chart.draw(data, options);
        }
    </script>
</body>
</html>