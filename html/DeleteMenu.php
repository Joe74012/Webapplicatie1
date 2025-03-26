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
<a>
    <div class="Knop">

    </div>
</a>
<?php
$sql = "SELECT * FROM `Menu`";
$connection = new PDO("mysql:dbname=Restaurant;host=mysql_db", "root", "rootpassword");
$stmt = $connection->query($sql);
while ($Menu = $stmt->fetch()) {
    echo "<div class='MenuFrame-Admin'> 
    <h1 class='naam'>" . $Menu["Id"] . ". " . $Menu["Naam"] . "</h1>
    <h3 class='Beschrijving'>" . $Menu["Beschrijving"] . "</h3>
    <h2 class='Beschrijving'>" . "€" . $Menu["Prijs"] . "</h2>
    <a href='Delete.php?id=" . $Menu["Id"] . "'>
    <div class='RodeKnop'>
    <i class='fa-solid fa-trash'></i>
</div>
</a>
</div>";
}
?>
</body>
</html>