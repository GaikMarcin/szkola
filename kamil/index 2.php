<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <!-- <label for="a">Wprowadź liczbe</label>
        <input type="number" name="a" id=""> -->
        <!-- <input type="text" name="1" id="">
        <input type="text" name="2" id="">
        <input type="text" name="3" id="">
        <input type="text" name="4" id="">
        <input type="text" name="5" id="">
        <input type="text" name="6" id="">
        <input type="text" name="7" id="">
        <input type="text" name="8" id="">
        <input type="text" name="9" id="">
        <input type="text" name="10" id=""> -->
        <textarea name="a" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Wyślij">
    </form>
    <?php
        if(!isset($_POST['a'])){
            die();
        }
        // $liczba = $_POST['a'];
        // $napis = $_POST['b'];
        // for($i=1;$i<=intval($liczba);$i++){
        //     $tab[$napis." ".$i]= rand(1,100);
        // }
        // foreach ($tab as $index => $value){
        //     echo $index. " ". $value. "<br>";
        // }
        // function cmp($a,$b){
        //     if($a%2>0 && $b%2==0){
        //         return -1;
        //     }
        //     if($a%2==0 && $b%2>0){
        //         return 1;
        //     }
        //     return $a-$b;
        // }
        // $tab=array("a"=>"ananas","b"=>"cytryna","d"=>"banan","c"=> "dynia");
        // asort($tab);
        // foreach($tab as $index => $value){
        //     echo $index." ".$value."<br>";
        // }
        // if(!isset($_POST['1'])){
        //     die;
        // }
        // for($i=1;$i<=10;$i++){
        //     $a = $_POST[$i];
        //     $tab[] = $a;
        // }
        // function lowercase(){
        //     for($i=1;$i<=count($tab);$i++){
        //         strtolower($tab[$i]);
        //     }
        //     return $tab;
        // }
        // asort($tab);
        // foreach ($tab as $e){
        //     echo $e. "<br>";
        // }
        $a = $_POST['a'];
        $b = str_split(Strtolower($a));
        $wyniki = array();
        for ($i=0;$i<26;$i++){
            $c = chr(97+$i);
            $n=0;
            for($j=0;$j<count($b);$j++){
                if($b[$j] == $c){
                    $n++;
                }
            }
            if($n!=0){
                $wyniki[$c]= $n;
            }
        }
        arsort($wyniki);
        foreach($wyniki as $z=>$n){
            echo "'".$z."' występuje $n razy.<br>";
        }
        

    ?>
</body>
</html>