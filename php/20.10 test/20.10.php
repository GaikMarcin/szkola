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
    
    <div>

    </div>
    <div class="drugi">
<div class="form">
        <form action="" method="GET">
            <input type="textarea" name="tekst"><br>
            <input type="submit" value="wyślij" class="button">
        </form>
    </div>
    </div>
    <?php
        $tekst = $_GET["tekst"];
        $tabela = explode(",",$tekst);
        sort($tabela);
        echo("<table>");
        echo("<tr");
        foreach($tabela as $index=>$e){
            echo "<td>".$index."</td>"."<td>".$e."</td>"."<br>";
            echo "</tr>";
            echo "</table>";
        }
    ?>
</body>
</html>