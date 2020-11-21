<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harga bet</title>
</head>
<body>

<h1>Cek dahulu biaya yang perlu anda siapkan untuk membuat bet sesuai panjang karakter nama anda! </h1>
<br><br>
   <form action="" method="post">
   <label for="nama" >Nama</label>
   <br>
   <input type="text" name="nama" size="20" id="nama">
   <br>
   <label for="warna">Warna</label>
   <br>
   <input type="text" name="warna" size="10" id="warna" placeholder="english">
   <br><br>
   <button type="submit" name="submit">Lihat Harga total</button>
   
   
   </form> 
</body>
</html>


<?php

function hitung($nama, $warna="red"){
    $length = strlen($nama);
    if($length <= 10){
        $harga = 300;
    }else if($length <= 20){
        $harga = 500;
    }else{
        $harga = 700;
    }   
 $total = $length * $harga;
 

echo "<br> panjang karakter : ".$length;
echo "<br> Harga total : ".$total. " dengan font warna ".$warna;
echo "<br> Nama : ";
echo '<font color="'.$warna.'">'.$nama.'<font>';

}

if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $warna = $_POST["warna"];
         if($_POST["warna"] ==""){
            hitung ($nama);
    }else{
        hitung($nama, $warna);
    }
   

    
}

?>