<?php
session_start();
$loginIncorrect = false;
if(isset($_POST["Login-Knop"])){
    if($_POST["naam"] == "Joe" && $_POST["wachtwoord"] == "Wachtwoord"){
        $_SESSION["admin"] = true;
        header("Location: Admin.php");
    } else {
        $loginIncorrect = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Toko rinus</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
<main>
    <div class="Achtergrond-Login">
        <div class="Login-Frame">
            <div class="Login-Frame-Titel">
                <h1 class="Witte-Text">Personeel login</h1>
            </div>
            <form action="Login.php" method="post">
                <div class="Invul-Login-Rij">
                    <div class="Naam-Frame">
                        <input class="Text-Contact" name="naam" placeholder="Naam">
                        <i class="fa-solid fa-user"></i>
                    </div>
                </div>
                <div class="Invul-Login-Rij">
                    <div class="Naam-Frame">
                        <input class="Text-Contact" type="password" name="wachtwoord" placeholder="Wachtwoord">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                </div>
                <div class="Knop-Rij">
                    <input name="Login-Knop" type="submit" value="login" class="Login-Knop">
                </div>
            </form>

        </div>
    </div>
</main>
<footer>

</footer>
</body>
</html>