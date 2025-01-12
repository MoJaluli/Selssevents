<?php
$uri = (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) ? 'https://' : 'http://';
$uri .= $_SERVER['HTTP_HOST'];
// header("Location: {$uri}/dashboard/");
// exit;
?>

<!DOCTYPE html>
<html lang="en">

</html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Selssevents</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Stylealpha.css/style.css">
    <style>
    </style>
</head>
<?php
$servername = "localhost";
$username = "root"; 
$password = "";     
$database = "afspraken"; 


$conn = new mysqli($servername, $username, $password, $database);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}

?>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Selssevents</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu shadow-lg p-3 mb-5 rounded"
                            style="border: none; background-color: #fef6f0;">
                            <li><a class="dropdown-item" href="#">Traditionele Catering</a></li>
                            <li><a class="dropdown-item" href="#">Fotoveilig</a></li>
                            <li><a class="dropdown-item" href="#">Nanny's</a></li>
                            <li><a class="dropdown-item" href="#">Serveersters/keukenhulp</a></li>
                            <li><a class="dropdown-item" href="#">Fruitdecoratie</a></li>
                            <li><a class="dropdown-item" href="#">Mocktails</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Maak een afspraak!</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Zoeken" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Zoeken</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Welkomstsectie -->
    <section>
        <div class="container border-pattern">
            <div class="background-image"
                style="background-image: url('Afbeeldingen/Sel.afbeelding3.jpg'); height: 400px; background-size: cover; background-position: center; border-radius: 10px; margin-bottom: 20px;">
            </div>
            <h1>Welkom bij Selssevents</h1>
            <p>Onze luxe cateringservices brengen de rijke smaken en tradities van Marokkaanse bruiloften naar uw
                evenement.</p>
        </div>
        <h2>Onze Diensten</h2>
        <p>Van traditionele gerechten tot moderne arrangementen, wij verzorgen het allemaal.</p>
    </section>

    <!-- Reviews -->
    <section class="reviews-section">
        <h2>Wat onze klanten zeggen</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="review-card">
                        <img src="Afbeeldingen/klant1.jpg" alt="Klant 1">
                        <h5>Sarah L.</h5>
                        <p>“De beste cateringservice die we ooit hebben gehad! Alles was perfect verzorgd, van het eten
                            tot de presentatie.”</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-card">
                        <img src="Afbeeldingen/klant2.jpg" alt="Klant 2">
                        <h5>Mohammed A.</h5>
                        <p>“Selssevents maakte onze bruiloft compleet. De Marokkaanse gerechten waren heerlijk en het
                            team was geweldig!”</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-card">
                        <img src="Afbeeldingen/klant3.jpg" alt="Klant 3">
                        <h5>Amina F.</h5>
                        <p>“We waren onder de indruk van de professionele service en de prachtige presentatie van de
                            gerechten. Ze zorgden voor een onvergetelijke ervaring.”</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section>
        <div class="container contact-form">
            <h2>Neem Contact Op</h2>
            <form>
                <input type="text" name="name" placeholder="Uw Naam" required>
                <input type="email" name="email" placeholder="Uw E-mail" required>
                <textarea name="message" rows="5" placeholder="Uw Bericht" required></textarea>
                <button type="submit">Verstuur</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        &copy; 2025 Marokkaanse Catering. De perfecte mix van traditie en elegantie.
    </footer>

</body>

</html>