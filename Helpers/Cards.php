<!doctype html>
<html lang="nl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Onze Diensten | Catering, Nanny's & Keukenhulp</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f4f4;
    }

    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-radius: 15px;
      overflow: hidden;
    }

    .card:hover {
      transform: scale(1.03);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
      height: 200px;
      object-fit: cover;
    }

    .card-body {
      background-color: white;
      padding: 1.5rem;
    }

    .card-title {
      color: #343a40;
      font-weight: bold;
    }

    .card-text {
      color: #6c757d;
    }

    .section-title {
      text-align: center;
      margin: 40px 0 20px;
      font-size: 2rem;
      font-weight: 700;
    }
  </style>
</head>

<body>
  <div class="container my-5">
    <h2 class="section-title">Onze Diensten</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

      <!-- Catering Service -->
      <div class="col">
        <div class="card">
          <img src="Afbeelding/sel.catering.jpg" class="card-img-top" alt="Catering service">
          <div class="card-body">
            <h5 class="card-title">Professionele Catering</h5>
            <p class="card-text">Van intieme diners tot grote evenementen – wij verzorgen smaakvolle en stijlvolle catering met oog voor detail en kwaliteit.</p>
          </div>
        </div>
      </div>

      <!-- Nanny Service -->
      <div class="col">
        <div class="card">
          <img src="Afbeelding/sel.nanny.jpg" class="card-img-top" alt="Nanny service">
          <div class="card-body">
            <h5 class="card-title">Betrouwbare Nanny's</h5>
            <p class="card-text">Onze ervaren en gecertificeerde nanny's zorgen liefdevol en professioneel voor uw kinderen, zowel overdag als 's avonds.</p>
          </div>
        </div>
      </div>

      <!-- Keukenhulp Service -->
      <div class="col">
        <div class="card">
          <img src="Afbeelding/sel-keukenhulp.jpg" class="card-img-top" alt="Keukenhulp service">
          <div class="card-body">
            <h5 class="card-title">Keukenhulp op Locatie</h5>
            <p class="card-text">Ondersteuning in de keuken nodig? Onze keukenhulpen staan klaar om te helpen bij voorbereidingen, afwas en opruimwerkzaamheden.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
