<?php
session_start();
if (!isset($_SESSION["admin"]) || $_SESSION["admin"] != true) {
    header("Location: Index.php");
}
if (isset($_POST['Verstuur'])) {
    $connection = new PDO("mysql:dbname=Restaurant;host=mysql_db", "root", "rootpassword");
    $Id = $_GET["id"];
    $sql = "DELETE FROM Menu where Id=$Id";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    header("Location: DeleteMenu.php");
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
        <h2 class="Header-Zwarte-Text">Weet u zeker dat uw dit product wilt verwijderen?</h2>
    </div>
    <form method="post" class="Keuze-Rij">
        <a href="DeleteMenu.php">
            <div class="Knop">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </a>
        <button type="submit" name="Verstuur" class="Knop">
            <i class="fa-solid fa-check"></i>
        </button>
    </form>
</body>
</html>