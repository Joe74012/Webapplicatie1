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
    <title>Admin | Toko Rinus</title>
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/61f819b69c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Lexend:wght@100..900&family=Lilita+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rowdies:wght@300;400;700&display=swap"
          rel="stylesheet">
</head>
<body>
<header>
    <!--Begin van de admin pagina waar de eigenaar kan kiezen wat hun willen doen.-->
    <nav>
        <div class="Header-Rij">
            <div class="Header-Frame">
                <div class="Toko-Rinus-Logo-Frame">
                    <img class="Toko-Rinus-Logo" src="Afbeeldingen/Toko-Rinus-Logo.png" alt="Toko Rinus logo">
                </div>
                <h1 class="Oranje-Text">●</h1>
                <a href="Index.php">
                    <h2 class="Header-Zwarte-Text">Home</h2>
                </a>
                <h1 class="Oranje-Text">●</h1>
                <a href="Menu.php">
                    <h2 class="Header-Zwarte-Text">Menu</h2>
                </a>
                <h1 class="Oranje-Text">●</h1>
                <a href="Login.php">
                    <h2 class="Header-Zwarte-Text">login</h2>
                </a>
            </div>
        </div>
    </nav>
</header>
<div class="Admin-Uitleg-Rij">
    <h2 class="Zwarte-Text">Welkom bij de admin pagina wat wilt u doen?</h2>
</div>
<div class="Admin-Navigatie-Rij">
    <a href="Toevoegen.php">
        <div class="Groene-Knop">
            <i class="fa-solid fa-square-plus"></i>
        </div>
    </a>
</div>
<?php
$sql = "SELECT * FROM `Menu`";
$connection = new PDO("mysql:dbname=Restaurant;host=mysql_db", "root", "rootpassword");
$stmt = $connection->query($sql);
while ($Menu = $stmt->fetch()) {
    echo "<div class='MenuFrame-Admin'> 
    <h1 class='naam'>" . $Menu["Naam"] . "</h1>
    <h3 class='Beschrijving'>" . $Menu["Beschrijving"] . "</h3>
    <h2 class='Beschrijving'>" . "€" . $Menu["Prijs"] . "</h2>
    <div class='Bewerk-Verwijder-Rij'>
        <a href='Delete.php?id=" . $Menu["Id"] . "'>
        <div class='Rode-Knop'>
            <h2 class='Witte-Text'>Verwijder</h2>
        </div>
        </a>
        <a href='Bewerk.php?id=" . $Menu["Id"] . "'>
        <div class='Blauwe-Knop'>
            <h2 class='Witte-Text'>Bewerk</h2>
        </div>
        </a>
    </div>
</div>
</div>";
}
?>
</body>
</html>
