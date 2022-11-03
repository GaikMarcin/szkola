<!-- PIERWSZY SKRYPT -->
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
</head>
<body>
<!-- PIERWSZY SKRYPT -->
    <?php
    if(!isset($_SESSION['imie']) && !isset($_GET['imie'])){

    
    ?>
    <form>
        <input type="text" name="imie" placeholder="imie">
        <input type="submit">
    </form>
    <?php
    } else {
        if (isset($_GET['imie'])){
            $_SESSION['imie'] = $_GET['imie'];
        }
        echo "Witaj ".$_SESSION['imie']."<br>";
    }

    if(!isset($_SESSION['licznik']))
        $_SESSION['licznik'] = 1;
    else
        $_SESSION['licznik']++;
        echo "Jesteś tu ".$_SESSION['licznik']." raz <br>";

    ?>
<!-- KONIEC SKRYPTU -->
<!-- DRUGI SKRYPT -->
    <?php
    if(!isset($_SESSION['liczba']))
        $_SESSION['liczba'] = 0;
        ?>
    <form action="03.11(1).php">
        <?php echo $_SESSION['liczba']; ?>
        <input type="submit" name="submit" value="-">
        <input type="number"min="-10" max="10" name="dodatek" value="1">
        <input type="submit" value="+" name="submit">
    </form>
<!-- KONIEC SKRYPTU -->
    
</body>
</html>