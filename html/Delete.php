<?php
session_start();
if (!isset($_SESSION["admin"]) || $_SESSION["admin"] != true) {
    header("Location: Index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Lexend:wght@100..900&family=Lilita+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/61f819b69c.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="Bericht-Rij">
        <h2 class="Header-Zwarte-Text">Weet u zeker dat uw dit gerecht wil verwijderen?</h2>
    </div>
    <div class="Keuze-Rij">
        <a href="Admin.php">
            <div class="Knop">
                <h2 class="Witte-Text">Nee</h2>
            </div>
        </a>
        <div class="Knop">
            <h2 class="Witte-Text">Ja</h2>
        </div>
    </div>
</body>
</html>