<?php
$uri = (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) ? 'https://' : 'http://';
$uri .= $_SERVER['HTTP_HOST'];
?>

<?php
include 'Database/Afspraken.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Selssevents</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Style.css/style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .afspraak-section {
            padding: 50px 0;
            background-color: #e9ecef;
            text-align: center;
        }

        .afspraak-section h1 {
            font-size: 36px;
            color: #333;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .afspraak-section .d-flex {
            font-size: 18px;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
            text-align: left;
        }

        .afspraak-section .cta-btn {
            background-color: #e74c3c;
            color: white;
            font-weight: bold;
            padding: 15px 30px;
            border-radius: 25px;
            text-transform: uppercase;
            text-decoration: none;
            margin-top: 30px;
            display: inline-block;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s, transform 0.2s;
        }

        .afspraak-section .cta-btn:hover {
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

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contactformulier - Selssevents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .contact-section {
            padding: 50px 20px;
            background-color: #fff;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        .contact-section h2 {
            font-size: 36px;
            color: #333;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .contact-section .form-group {
            margin-bottom: 20px;
        }

        .contact-section input,
        .contact-section textarea {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 12px;
            width: 100%;
            font-size: 16px;
            color: #555;
        }

        .contact-section button {
            background-color: #e74c3c;
            color: #fff;
            font-weight: bold;
            padding: 15px 30px;
            border-radius: 25px;
            text-transform: uppercase;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        .contact-section button:hover {
            background-color: #c0392b;
            transform: scale(1.05);
        }

        .contact-section .form-control:focus {
            border-color: #e74c3c;
            box-shadow: 0 0 5px rgba(231, 76, 60, 0.5);
        }
    </style>
</head>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Offerte Aanvragen - Selssevents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .offerte-form-container {
            padding: 50px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
            max-width: 800px;
        }

        .offerte-form-container h2 {
            text-align: center;
            font-size: 36px;
            color: #333;
            margin-bottom: 30px;
        }

        .offerte-form-container .form-group {
            margin-bottom: 20px;
        }

        .offerte-form-container input,
        .offerte-form-container select,
        .offerte-form-container textarea {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 12px;
            width: 100%;
            font-size: 16px;
            color: #555;
        }

        .offerte-form-container button {
            background-color: #e74c3c;
            color: #fff;
            font-weight: bold;
            padding: 15px 30px;
            border-radius: 25px;
            text-transform: uppercase;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            display: block;
            width: 100%;
        }

        .offerte-form-container button:hover {
            background-color: #c0392b;
            transform: scale(1.05);
        }

        .form-control:focus {
            border-color: #e74c3c;
            box-shadow: 0 0 5px rgba(231, 76, 60, 0.5);
        }
    </style>
</head>

<<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Offerte Aanvragen - Selssevents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .offerte-form-container {
            padding: 50px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
            max-width: 800px;
        }

        .offerte-form-container h2 {
            text-align: center;
            font-size: 36px;
            color: #333;
            margin-bottom: 30px;
        }

        .offerte-form-container .form-group {
            margin-bottom: 20px;
        }

        .offerte-form-container input,
        .offerte-form-container select,
        .offerte-form-container textarea {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 12px;
            width: 100%;
            font-size: 16px;
            color: #555;
        }

        .offerte-form-container button {
            background-color: #e74c3c;
            color: #fff;
            font-weight: bold;
            padding: 15px 30px;
            border-radius: 25px;
            text-transform: uppercase;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            display: block;
            width: 100%;
        }

        .offerte-form-container button:hover {
            background-color: #c0392b;
            transform: scale(1.05);
        }

        .form-control:focus {
            border-color: #e74c3c;
            box-shadow: 0 0 5px rgba(231, 76, 60, 0.5);
        }
    </style>
</head>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Offerte Aanvragen - Selssevents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .offerte-form-container {
            padding: 50px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
            max-width: 800px;
        }

        .offerte-form-container h2 {
            text-align: center;
            font-size: 36px;
            color: #333;
            margin-bottom: 30px;
        }

        .offerte-form-container .form-group {
            margin-bottom: 20px;
        }

        .offerte-form-container input,
        .offerte-form-container select,
        .offerte-form-container textarea {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 12px;
            width: 100%;
            font-size: 16px;
            color: #555;
        }

        .offerte-form-container button {
            background-color: #e74c3c;
            color: #fff;
            font-weight: bold;
            padding: 15px 30px;
            border-radius: 25px;
            text-transform: uppercase;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            display: block;
            width: 100%;
        }

        .offerte-form-container button:hover {
            background-color: #c0392b;
            transform: scale(1.05);
        }

        .form-control:focus {
            border-color: #e74c3c;
            box-shadow: 0 0 5px rgba(231, 76, 60, 0.5);
        }
    </style>
</head>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Offerte Aanvragen - Selssevents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .offerte-form-container {
            padding: 50px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
            max-width: 800px;
        }

        .offerte-form-container h2 {
            text-align: center;
            font-size: 36px;
            color: #333;
            margin-bottom: 30px;
        }

        .offerte-form-container .form-group {
            margin-bottom: 20px;
        }

        .offerte-form-container input,
        .offerte-form-container select,
        .offerte-form-container textarea {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 12px;
            width: 100%;
            font-size: 16px;
            color: #555;
        }

        .offerte-form-container button {
            background-color: #e74c3c;
            color: #fff;
            font-weight: bold;
            padding: 15px 30px;
            border-radius: 25px;
            text-transform: uppercase;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            display: block;
            width: 100%;
        }

        .offerte-form-container button:hover {
            background-color: #c0392b;
            transform: scale(1.05);
        }

        .form-control:focus {
            border-color: #e74c3c;
            box-shadow: 0 0 5px rgba(231, 76, 60, 0.5);
        }
    </style>
</head>

<body>

    <div class="offerte-form-container">
        <h2>Offerte Aanvragen</h2>
        <form action="submit_form.php" method="POST">
            <!-- Naam -->
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Uw Naam" required>
            </div>

            <!-- E-mail -->
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Uw E-mail" required>
            </div>

            <!-- Telefoonnummer -->
            <div class="form-group">
                <input type="tel" class="form-control" name="phone" placeholder="Uw Telefoonnummer" required>
            </div>

            <!-- Locatieadres van het evenement -->
            <div class="form-group">
                <input type="text" class="form-control" name="event_location" placeholder="Locatie van het Evenement" required>
            </div>

            <!-- Evenement Datum -->
            <div class="form-group">
                <input type="date" class="form-control" name="event_date" placeholder="Datum Evenement" required>
            </div>

            <!-- Type Evenement -->
            <div class="form-group">
                <select class="form-control" name="event_type" required>
                    <option value="">Kies het Type Evenement</option>
                    <option value="bruiloft">Bruiloft</option>
                    <option value="bedrijfsevent">Bedrijfsevent</option>
                    <option value="particulier">Particulier Evenement</option>
                    <option value="ander">Anders</option>
                </select>
            </div>

            <!-- Aantal Gasten -->
            <div class="form-group">
                <input type="number" class="form-control" name="guests" placeholder="Aantal Gasten" required>
            </div>

            <!-- Gewenste Diensten -->
            <div class="form-group">
                <label for="services">Gewenste Diensten:</label>
                <select class="form-control" name="services" required>
                    <option value="">Kies uw Diensten</option>
                    <option value="catering">Catering</option>
                    <option value="bediening">Bediening</option>
                    <option value="nanny">Nanny's</option>
                    <option value="fotoveilig">Fotoveilig</option>
                    <option value="serveersters">Serveersters/Keukenhulp</option>
                    <option value="mocktails">Mocktails</option>
                    <option value="fruitdecoratie">Fruitdecoratie</option>
                    <option value="ander">Andere Diensten</option>
                </select>
            </div>

            <!-- Extra Opmerkingen -->
            <div class="form-group">
                <label for="comments">Extra Opmerkingen:</label>
                <textarea class="form-control" name="comments" placeholder="Heeft u nog speciale verzoeken of opmerkingen?" rows="4"></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit">Verstuur Offerte Aanvraag</button>
        </form>
    </div>

</body>

</html>



