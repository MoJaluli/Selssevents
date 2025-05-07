<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Selssevents - Contact</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Contact Form */
        .contact-form {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .contact-form h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-family: 'Roboto', sans-serif;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        .contact-form input:focus, .contact-form textarea:focus {
            border-color: #e74c3c; /* Red border on focus */
            outline: none;
        }
        .contact-form button {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .contact-form button:hover {
            background-color: #c0392b;
        }

        /* Footer */
        footer {
            background-color: #2c3e50;
            color: white;
            padding: 40px 0;
        }
        footer h5 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        footer p {
            font-size: 14px;
        }
        footer a {
            color: white;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
        .footer-social-icons i {
            font-size: 24px;
            margin-right: 10px;
        }
        .footer-social-icons a {
            color: white;
            text-decoration: none;
        }
        .footer-social-icons a:hover {
            color: #e74c3c;
        }
    </style>
</head>
<body>

<!-- Contact Form Section -->
<section class="contact-section py-5">
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

