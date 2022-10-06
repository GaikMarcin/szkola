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
    if(!isset($_GET['submit'])){

    ?>
    <form>
        a<input name="a">
        b<input name="b">
        <input type="submit" value="Oblicz" name="submit">
    </form>
    <?php
    }else{
        
        $a=$_GET['a'];
        $b=$_GET['b'];
        echo "NWD($a,$b)=";
        while($b>0){
            $c = $a % $b;
            $a = $b;
            $b = $c;
        }
        echo $a;
        
    }
    ?>
</body>
</html>