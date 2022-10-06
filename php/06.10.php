<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_POST['submit'])){

    
    ?>
    <form action="" method="post">
        <input type="number" placeholder="a" name="a" ><br>
        <input type="number" placeholder="b" name="b"><br>
        <input type="number" placeholder="c" name="c"><br>
        <input type="color" name="kolor">
        <input type="submit" value="Wyślij" name="submit">
    </form>
    <?php
        } else {
        $kolor = $_POST['kolor'];
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        if($a<$b){
            for(;$a<=$b;) {
                if($a % $c !=0)
                echo $a."<br>";
            $a++;
            }
        }
        else if($a>$b) {

            for (;$a>=$b;) {
                if($a % $c !=0)
                echo $a."<br>";
            $a--;
            }
        }
            else {
                echo $a;
        }
    }
    ?>
</body>
</html>