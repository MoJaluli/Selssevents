<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Nanny's | Selssevents</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Style.css/style.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .service-header {
            background-color: #e74c3c;
            color: white;
            padding: 50px 0;
            text-align: center;
        }

        .service-header h1 {
            font-size: 50px;
            font-weight: bold;
        }

        .service-header p {
            font-size: 20px;
        }

        .service-content {
            padding: 60px 0;
            text-align: center;
        }

        .service-content h2 {
            font-size: 36px;
            margin-bottom: 30px;
        }

        .service-content p {
            font-size: 18px;
            margin-bottom: 40px;
        }

        .cta-btn {
            background-color: #e74c3c;
            color: white;
            font-weight: bold;
            padding: 15px 30px;
            border-radius: 25px;
            text-transform: uppercase;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s, transform 0.2s;
        }

        .cta-btn:hover {
            background-color: #c0392b;
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>


<?php
include 'Helpers/Navbar.php';
?>

<body>

    <!-- Header Section -->
    <div class="service-header">
        <h1>Nanny Services van Selssevents</h1>
        <p>Professionele en zorgzame nanny's voor een zorgeloos evenement</p>
    </div>

    <!-- Service Description Section -->
    <div class="service-content">
        <h2>Wat doen onze nanny's?</h2>
        <p>Bij Selssevents bieden wij opgeleide en ervaren nanny's die voor de kinderen zorgen, zodat u zich volledig kunt richten op uw evenement. Onze nanny's zijn zorgvuldig geselecteerd op basis van hun ervaring en passie voor het werken met kinderen. Ze bieden een veilige, speelse en zorgzame omgeving voor de kinderen, zodat ouders met een gerust hart kunnen genieten van het evenement.</p>

        <p>Of het nu gaat om een bruiloft, een verjaardagsfeest of een ander evenement, onze nanny's zorgen ervoor dat de kinderen zich vermaakt en veilig voelen. We bieden ook aangepaste diensten aan, afhankelijk van de grootte en het type van uw evenement.</p>

        <h2>Waarom kiezen voor onze nanny's?</h2>
        <ul class="list-unstyled">
            <li><strong>Ervaring:</strong> Onze nanny's hebben jarenlange ervaring in het verzorgen van kinderen tijdens evenementen.</li>
            <li><strong>Gecertificeerd:</strong> Alle nanny's zijn gecertificeerd in eerste hulp en hebben achtergrondcontroles ondergaan.</li>
            <li><strong>Betrouwbaarheid:</strong> We selecteren alleen de meest betrouwbare en zorgzame professionals voor uw evenement.</li>
            <li><strong>Op maat gemaakte service:</strong> We passen onze diensten aan op basis van de specifieke behoeften van uw evenement.</li>
        </ul>

        <a href="Helpers/Afspraak.php" class="cta-btn">Neem contact op voor meer informatie</a>
    </div>

    <!-- Footer Section -->
    <footer>
        <?php
        include 'Helpers/footer.php';
        ?>
    </footer>

</body>

</html>