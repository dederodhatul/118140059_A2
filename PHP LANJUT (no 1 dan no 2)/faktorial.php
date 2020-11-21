

<html>
<h1>Menghitung Nilai faktorial suatu Bilangan</h1>

<form action="" method="POST">
  Masukkan suatu bilangan bulat positif : <input name="bilangan" type="text" size="3">
  <br>
  <input name="faktorial" type="submit" value="Hitung">
</form>
</html>

<?php

if(isset($_POST["faktorial"])){
   $bilangan=$_POST["bilangan"];
   if($bilangan>=1)
{
  echo "Berikut ini adalah perhitungan dan hasil faktorial ".$bilangan;
  echo "<br>";
         
  for($i=1; $i <= $bilangan; $i++){
       $awal = 1; //set nilai awal
       echo $i. "! = "; 
         
     for($j=$i; $j > 0; $j--){
         if($j == 1){
            echo " 1 = " .$awal;
        }else{
            echo $j ." x ";       }
           $awal*=$j; //menghitung hasil faktorial
     }echo "</br>";
  }
}
else if($bilangan == 0)
{
 
   echo "0! = 1";
}
else  //jika memasukkan nilai yang lebih kecil dari 0
{
   echo "Anda salah memasukkan bilangan.";
}
}

?>