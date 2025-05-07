<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>Selssevents</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Stylealpha.css/style.css">
    <style>

    </style>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
        <title>Selssevents</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="Stylealpha.css/style.css">
        <style>
            
            .navbar {
                background-color: #343a40;
             
            }

            /* Simpele Home knop met witte tekst */
            .navbar-nav .nav-item .nav-link.active {
                background-color: transparent;
                /* Geen achtergrondkleur */
                color: #fff;
                /* Witte tekst */
                font-weight: bold;
                padding: 10px 20px;
            }

            /* Hover-effect voor Home knop */
            .navbar-nav .nav-item .nav-link.active:hover {
                background-color: #c0392b;
                /* Donkerder rood bij hover */
                color: #fff;
                text-decoration: none;
            }

            /* Algemene nav-link stijl zonder gouden rand */
            .navbar-nav .nav-item .nav-link {
                color: #fff;
                /* Witte tekst voor de andere knoppen */
            }

            /* Hover-effect voor andere nav-links */
            .navbar-nav .nav-item .nav-link:hover {
                background-color: #34495e;
                /* Grijze hoverkleur */
                color: #fff;
            }

            /* Aantrekkelijke Offerte aanvragen knop */
            .appointment-btn {
                background-color: #e74c3c;
                /* Rood voor de knop */
                color: #fff;
                /* Witte tekst */
                font-weight: bold;
                padding: 10px 20px;
                text-transform: uppercase;
                text-decoration: none;
                border-radius: 25px;
                /* Afgeronde hoeken */
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
                /* Schaduweffect voor diepte */
                transition: background-color 0.3s ease, transform 0.2s ease;
                /* Aantrekkelijk hover-effect */
            }

            /* Hover-effect voor Offerte aanvragen knop */
            .appointment-btn:hover {
                background-color: #c0392b;
                /* Donkerder rood bij hover */
                transform: scale(1.05);
                /* Lichte zoom effect */
                box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
                /* Meer schaduw bij hover */
            }

            /* Dropdown-menu styling */
            .dropdown-menu {
                background-color: rgb(190, 161, 104);
                /* Gouden tint achtergrond */
                border-radius: 10px;
                /* Afgeronde hoeken voor dropdown */
            }

            .dropdown-item:hover {
                background-color: #e74c3c;
                /* Donkerder rood voor dropdown item hover */
                color: #fff;
                /* Witte tekst bij hover */
            }
        </style>
    </head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="Afbeelding/menu.png" alt="navbar-brand" style="width: 30px; height: 30px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <!-- Simpele Home knop met witte tekst -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu shadow-lg border-0" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Traditionele Catering</a></li>
                            <li><a class="dropdown-item" href="Fotoveilig.php">Fotoveilig</a></li>
                            <li><a class="dropdown-item" href="Helpers/Nanny.php">Nanny's</a></li>
                            <li><a class="dropdown-item" href="#">Serveersters/keukenhulp</a></li>
                            <li><a class="dropdown-item" href="#">Fruitdecoratie</a></li>
                            <li><a class="dropdown-item" href="#">Mocktails</a></li>
                        </ul>
                    </li>
                    <!-- Aantrekkelijke Offerte aanvragen knop -->
                    <li class="nav-item">
                        <a class="nav-link appointment-btn" href="Afspraak.php">Offerte aanvragen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>