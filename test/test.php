<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="number" name="num1" id="num1">
        <input type="number" name="num2" id="num2">
        <input type="number" name="num3" id="num3">
        <select name="">
            <option value="dodawanie" id="dodawanie">dodawanie</option>
            <option value="odejmowanie" id="odejmowanie">odejmowanie</option>
            <option value="mnożenie" id="mnożenie">mnożenie</option>
            <option value="dzielenie" id="dzielenie">dzielenie</option>
        </select>
        <input type="submit" value="oblicz" id="btn">
    </form>
    <p id="result"></p>
    <script>
        const num1 = document.querySelector('#num1');
        const num2 = document.querySelector('#num2');
        const num3 = document.querySelector('#num3');
        const dodawanie = document.querySelector("#dodawanie");
        const odejmowanie = document.querySelector("#odejmowanie");
        const mnożenie = document.querySelector("#mnożenie");
        const dzielenie = document.querySelector("#dzielenie");
        const btn = document.querySelector('[type="submit"]');
        
        
        btn.addEventListener("click",function(evt){
            evt.preventDefault();
            if(dodawanie.selected){
                const wynik = parseInt(num1.value) + parseInt(num2.value) + parseInt(num3.value);
                body.innerHTML = wynik;
            }
            if(odejmowanie.selected){
                const wynik = parseInt(num1.value) - parseInt(num2.value) - parseInt(num3.value);
                body.innerHTML = wynik;
            }
            if(mnożenie.selected){
                const wynik = parseInt(num1.value) * parseInt(num2.value) * parseInt(num3.value);
                body.innerHTML = wynik;
            }
            if(dzielenie.selected){
                const wynik = parseInt(num1.value) / parseInt(num2.value) / parseInt(num3.value);
                body.innerHTML = wynik;
            }

        })
    </script
</body>
</html>