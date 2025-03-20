<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu | Toko Rinus</title>
    <link rel="stylesheet" href="CSS/Style.css">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Lexend:wght@100..900&family=Lilita+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/61f819b69c.js" crossorigin="anonymous"></script>
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
    </div>
    <div class="header">
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
        <!--Einde van Progress bar-->
    </div>
</header>
<form class="Zoek" name="ZoekBalk" action="Menu.php" method="post">
    <input class="InvoerVeld" type="text" name="Text">
    <div> <button class="ZoekKnop" type="submit" name="Verzenden">
            <i class="fa-solid fa-magnifying-glass"></i></button>
    </div>
</form>
<?php
if (isset($_POST['Verzenden'])) {
    $sql = "SELECT * FROM `Menu` WHERE Naam LIKE '%" . $_POST['Text'] . "%'";
} else{
    $sql = "SELECT * FROM `Menu`";
}
$connection = new PDO("mysql:dbname=Restaurant;host=mysql_db", "root", "rootpassword");
$stmt = $connection->query($sql);
while ($Menu = $stmt->fetch()) {
    echo "<div class='MenuFrame'> 
    <h1 class='naam'>" . $Menu["Id"] . ". " . $Menu["Naam"] . "</h1>
    <h3 class='Beschrijving'>" . $Menu["Beschrijving"] . "</h3>
    <h2 class='Beschrijving'>" . "€" . $Menu["Prijs"] . "</h2>
</div>";
}
?>
<footer>
    <div class="Footer-Frame">
        <a href="https://www.instagram.com/tokorinus/">
            <div class="Social-Media-Frame">
                <i class="fa-brands fa-instagram"></i>
            </div>
        </a>
        <a href="https://www.facebook.com/tokorinus/?locale=nl_NL">
            <div class="Social-Media-Frame">
                <i class="fa-brands fa-facebook-f"></i>
            </div>
        </a>
        <a href="https://www.google.com/maps/place//data=!4m2!3m1!1s0x47c7088d6d0594fd:0xcd7e9c4b98504452?sa=X&ved=1t:8290&ictx=111">
            <div class="Social-Media-Frame">
                <i class="fa-solid fa-location-dot"></i>
            </div>
        </a>
    </div>
</footer>
</body>
</html>

