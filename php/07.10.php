<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        display:flex;
    }
</style>
<body>
    <?php
         if(!isset($_GET['a'])){
            ?>
    <form action="" method="get">
        <fieldset>
            <label for="a"></label>
            <input type="number" name="a" id="a" placeholder="Pierwsza Liczba"> <br>
            <!-- Drugiego skryptu -->
            <label for="b"></label>
            <input type="number" name="b" id="b" placeholder="Druga Liczba"> <br>
            <label for="c"></label>
            <!-- Do pierwszego skryptu -->
            <input type="number" name="c" id="c" placeholder="Trzecia Liczba"> <br>
            Fibo<input type="radio" name="select" id="selectFibo" value="Fibo">
            NWD<input type="radio" name="select" id="selectNWD" value="NWD">
            Liczby<input type="radio" name="select" id="selectLiczby" value="liczby">
            <input type="color" name="color" id="d"> <br>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
    <?php
    }
    else{
    #trzeci skrypt
    $select = $_GET['select'];
    if($select == "Fibo"){
        $n = $_GET['a'];
        function Fibo($n){
        //     if ($n<3){
        //         return 1;
       //     }
        //     return Fibo($n-1) + Fibo($n-2);
        $a = 1;
        $b = 1;
        for ($i=0;$i<$n-2;$i++){
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }
        return $b;
        }
        echo "Fibo($n)=".Fibo($n);                                  
    }
    




 #Drugi Skrypt
    if($select == "NWD"){
        $a = $_GET['a'];
        $b = $_GET['b'];
        function NWD($a,$b){
            // while($b>0){
            //     $c = $a%$b;
            //     $a = $b;
            //     $b = $c;
            // }
            // return $a;
            if ($b ==0)
                return $a;
            return NWD($b,$a%$b);
        }
        function NWW($a,$b){
            return $a*$b/NWD($a,$b);
        }
        echo "<p>NWD (".$a.",".$b. ") wynosi: ". NWD($a,$b).".</p>";
        echo "<p>NWW (".$a.",".$b. ") wynosi: ". NWW($a,$b).".</p>";
    }
    # Pierwszy skrypt
    if($select == "liczby"){
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    $color = $_GET['color'];
    if($a>$b){
        while ($a>=$b){
            if($a % $c == 0){
                $a--;
                continue;
            }
            echo "<p style=color:".$color.">". $a.", </p>";
            $a--;
        }
    }
    elseif($a == $b){
        echo $a;
    }
    else{
        while($b>=$a){
            if($b % $c == 0){
                $b--;
                continue;
            }
            echo "<p style=color:".$color.">". $b.", </p>";
            $b--;
        }

    }}}
    ?>

    <script>
        const a = document.getElementById("a");
        const b = document.getElementById("b");
        const c = document.getElementById("c");
        const d = document.getElementById("d");
        const selectFibo = document.getElementById("selectFibo");
        const selectNWD = document.getElementById("selectNWD");
        const selectLiczby = document.getElementById("selectLiczby");
            selectFibo.addEventListener("click",function(){
                b.style.display = "none";
                c.style.display = "none";
                d.style.display = "none";
            })
            selectLiczby.addEventListener("click",function(){
                b.style.display = "block";
                c.style.display = "block";
                d.style.display = "block";
            })
            selectNWD.addEventListener("click",function(){
                b.style.display = "block";
                c.style.display = "none";
                d.style.display = "none";
            })
        
        
    </script>
</body>
</html>