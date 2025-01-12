<?php
$servername = "localhost";
$username = "root"; // Standaard XAMPP gebruikersnaam
$password = "";     // Standaard XAMPP wachtwoord is leeg
$database = "mijn_database"; // De naam van je database

// Maak de verbinding
$conn = new mysqli($servername, $username, $password, $database);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}
echo "Verbinding succesvol!";
