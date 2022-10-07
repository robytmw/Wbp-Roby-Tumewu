<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
    <form method="POST">
        <p>pilih perhitungan</p>
        <input type="radio" id="ls" name="type" value="ls" checked>
        <label for=""> Luas segitiga</label>
        <br>
        <input type="radio" id="lpp" name="type" value="lpp" >
        <label for=""> Luas persegi panjang</label>
        <br>

        <br>
        <input type="number" name="number1" id="number1" placeholder="nilai 1" >
        <input type="number" name="number2" id="number2" placeholder="nilai 2" >
        <br>

        <br>
        <input type="submit" name="submit" id="submit" value="Hitung luas">

    </form>
    <script>
        function handleplaceholder(radio){
            if(radio.value=='ls'){
            document.getElementById("number1");
            document.getElementById("number2");
            document.getElementById("submit");
        } 
        else {
            document.getElementById("number1");
            document.getElementById("number1");
            document.getElementById("submit");
        }
</script>
    
</body>
</html>

<?php
if (isset($_POST['submit'])){
    if($_POST['type']=='ls'){

    $a=$_POST['number1'];
    $t=$_POST['number2'];

    $ls=1/2 * $a *$t;
    echo "<br> berikut hasil perhitungan luas segitiga : ";
    echo "<br> diketahui :";
    echo "<br> alas segitiga : $a";
    echo "<br> tinggi segitiga : $t ";
    echo "<br> maka luas segitiga adalah 1/2 ($a x $t) = $ls ";
}
else {
    $p=$_POST['number1'];
    $l=$_POST['number2'];
    $lpp= $p*$l;
    echo "<br> berikut hasil perhitungan luas persegi panjang:";
    echo "<br> diketahui :";
    echo "<br> panjang = $p ";
    echo "<br> lebar = $l ";
    echo "<br> maka luas persegi panjang adalah ($p x $l) = $lpp";
}
}

?>