<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if(!isset($_SESSION['jablko']))
        $_SESSION['jablko'] = 0;
    if(!isset($_SESSION['pomarancza']))
        $_SESSION['pomarancza'] = 0;
    if(!isset($_SESSION['banan']))
        $_SESSION['banan'] = 0;
    
        if(!isset($_SESSION['cena1']))
        $_SESSION['cena1'] = 3.5;
        if(!isset($_SESSION['cena2']))
        $_SESSION['cena2'] = 4;
        if(!isset($_SESSION['cena3']))
        $_SESSION['cena3'] = 5.5;

        ?>

    <h1>SKLEP Z OWOCAMI</h1>
    
    <div class="jablko">
    <img src="https://cdn-icons-png.flaticon.com/512/415/415733.png" alt=""><br>
    </div>3,50 zł<br><form action="session.php">
        <?php echo $_SESSION['jablko']; ?>
        <input type="submit" name="submit" value="-">
        <input type="number"min="0" name="jablko" value="1">
        <input type="submit" value="+" name="submit">
        <?php echo "Do zapłaty ".$_SESSION['cena1'] * $_SESSION['jablko']." zł"?>
    </form>
    
    <div class="pomarancza">
    <img src="https://cdn-icons-png.flaticon.com/512/135/135620.png"><br></div>
    4 zł<form action="session.php">
    <?php echo $_SESSION['pomarancza']; ?> 
    <input type="submit" name="submit" value="-">
        <input type="number"min="0" name="pomarancza" value="1">
        <input type="submit" value="+" name="submit">
        <?php echo "Do zapłaty ".$_SESSION['cena2'] * $_SESSION['pomarancza']." zł"?>
    </form>
    
    
    <div class="banan">
    <img src="https://cdn-icons-png.flaticon.com/512/2494/2494112.png" alt=""></div>
    5,50 zł<form action="session.php">
    <?php echo $_SESSION['banan']; ?>
        <input type="submit" name="submit" value="-">
        <input type="number"min="0" name="banan" value="1">
        <input type="submit" value="+" name="submit">
        <?php echo "Do zapłaty ".$_SESSION['cena3'] * $_SESSION['banan']." zł"?>
    </form><br>
    <form action="session.php">
    <input type="submit" name="zamawiam" value="Zamawiam"></form>
</body>
</html>