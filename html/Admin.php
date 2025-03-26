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
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/61f819b69c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Lexend:wght@100..900&family=Lilita+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <nav>
        <div class="Header-Frame">
            <div class="Toko-Rinus-Logo-Frame">
                <img class="Toko-Rinus-Logo" src="Afbeeldingen/Toko-Rinus-Logo.png" alt="Toko Rinus logo">
            </div>
            <a href="Index.php">
                <h2 class="Header-Zwarte-Text">Home</h2>
            </a>
            <h1 class="Oranje-Text">●</h1>
            <a href="Menu.php">
                <h2 class="Header-Zwarte-Text">Menu</h2>
            </a>
            <h1 class="Oranje-Text">●</h1>
            <a href="Winkel.php">
                <h2 class="Header-Zwarte-Text">Winkel</h2>
            </a>
            <h1 class="Oranje-Text">●</h1>
            <a href="Login.php">
                <h2 class="Header-Zwarte-Text">login</h2>
            </a>
    </nav>
</header>
    <div class="Admin-Uitleg-Rij">
        <h2 class="Niet-Dikgedrukt-Zwarte-Text">Welkom bij de admin pagina wat wilt u doen?</h2>
    </div>
<div class="Admin-Navigatie-Rij">
    <a href="Toevoegen.php">
        <div class="Knop">
            <i class="fa-solid fa-square-plus"></i>
        </div>
    </a>
    <a href="Delete.php">
        <div class="Knop">
            <i class="fa-solid fa-trash"></i>
        </div>
    </a>
    <a href="Toevoegen.php">
        <div class="Knop">
            <i class="fa-solid fa-pen"></i>
        </div>
    </a>
</div>
</body>
</html>
