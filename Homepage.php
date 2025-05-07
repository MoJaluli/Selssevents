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
    </style>
</head>

<?php 
include 'Helpers/Navbar.php';
 ?> 

<?php include 'Helpers/Welcome.php'; ?>

<?php include 'Helpers/Cards.php'; ?>

<?php include 'Helpers/Review.php'; ?>


<?php include 'Helpers/Why.php'; ?>

    <?php include 'Helpers/Contact.php'; ?>

    <?php include 'Helpers/footer.php'; ?>
    
</html>

</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
