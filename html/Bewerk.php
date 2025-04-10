<?php
session_start();
if (!isset($_SESSION["admin"]) || $_SESSION["admin"] != true) {
    header("Location: Index.php");
}
?>
<?php
if (isset($_POST['Terug'])) {
    header("Location: Admin.php");
}

if (isset($_POST['Verstuur'])) {

    $connection = new PDO("mysql:dbname=Restaurant;host=mysql_db", "root", "rootpassword");
    $sql = "UPDATE Menu SET Naam = :Naam, Beschrijving = :Beschrijving, Prijs = :Prijs WHERE id = :Id";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':Id', $_GET['id']);
    $stmt->bindParam(':Naam', $_POST['Naam']);
    $stmt->bindParam(':Beschrijving', $_POST['Beschrijving']);
    $stmt->bindParam(':Prijs', $_POST["Prijs"]);
    $stmt->execute();
    header("Location: Admin.php");
}
$Id = $_GET["id"];
$sql = "SELECT * FROM Menu where Id=$Id";
$connection = new PDO("mysql:dbname=Restaurant;host=mysql_db", "root", "rootpassword");
$stmt = $connection->query($sql);
$Menu = $stmt->fetch();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Lexend:wght@100..900&family=Lilita+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
    <title>admin</title>
    <script src="https://kit.fontawesome.com/61f819b69c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
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
<div class="Achtergrond-Bewerk">
        <div class="Toevoegen-Frame">
            <form class="AdminToevoegen" name="AdminToevoegen" method="post">
                <input class="Toevoegen-Rij" value="<?php echo $Menu["Naam"] ?>" type="text" name="Naam">
                <input class="Toevoegen-Rij" value="<?php echo $Menu["Beschrijving"] ?>" placeholder="Beschrijving" type="text" name="Beschrijving">
                <input class="Toevoegen-Rij" value="<?php echo $Menu["Prijs"] ?>" placeholder="Prijs" type="text" name="Prijs">
                <div class="Knop-Rij-Bewerk">
                <button class="Verzenden" type="submit" name="Verstuur">
                    <h2 class="Witte-Text">Bewerk</h2>
                    <button class="Verzenden" type="submit" name="Terug">
                        <h2 class="Witte-Text">Terug</h2>
            </form>
        </div>
    </div>
</div>
</body>
</html>
