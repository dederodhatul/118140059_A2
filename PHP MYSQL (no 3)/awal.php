
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>

<h2>DATA MAHASISWA PENS</h2>
<hr><hr>
<h2>TAMBAH DATA</h2>

<form action="" method="POST">
<label for="nrp"><b>NRP<b> : </label>
<input type="text" name="nrp" id="nrp" maxlength="40"> <br>
<label for="nama"><b>Nama<b> : </label>
<input type="text" name="nama" id="nama" maxlength="40"><br>
<label for="foto"><b>Foto<b> : </label>
<input type="file" name="foto" id="foto" maxlength="40"><br>
<label for="jurusan"><b>Jurusan<b> : </label>
<select name="jurusan" id="jurusan">
<option value="1">Telekomunikasi</option>
<option value="2">Elka</option>
<option value="3">IT</option>
<option value="4">Elin</option>
</select>
<br><br>
<button type="submit" name="submit">Tambah data</button>
<br><br>
<hr><hr>
<h2>SEARCH DATA</h2>
<label for="cari"><b>Nama : <b></label>
<input type="text" name="carinama" id="cari" maxlength="40">
<button type="submit" name="cari">Cari Data</button>
<br><br><hr><hr>
</form> 
</body>
</html>

<?php 

 
if( isset($_POST["submit"])){
    $nrp = $_POST["nrp"];
 $nama = $_POST["nama"];
 $foto = $_POST["foto"];
 $jurusan =$_POST["jurusan"];
 $cari = $_POST["carinama"];


    echo "<script>alert('data berhasil ditambahkan')</script";
   
}
$mhs = "insert into mahasiswa (NRP, Nama, ID_Jur) values ('$nrp','$nama')";
$jrs = "insert into jurusan (Nama) values ('$jurusan')";


$result1= mysqli_query($conn, $mhs);
$result2= mysqli_query($conn, $jrs);


if( isset($_POST["cari"])){
    $hasil = mysqli_query($conn, "select * from mahasiswa where $cari=$nama");
    $row = mysql_fetch_array($hasil);
    if($row==$nama){
        echo "Nama =".$nama;
        echo "<br> nrp =".$nrp;
        echo "<br> jurusan =".$jurusan;
        echo "<br> foto =".$foto;
        echo "<label>NRP</label>";
        echo "<input type='text' name='hapus'>";
        echo "<button type='delete' name='delete'>Hapus data</button>";
        if(isset($_POST["delete"])){
            $hapus=$_POST["hapus"];
    $hasil = mysqli_query($conn, "delete from mahasiswa where $hapus=$nrp");
    $row = mysql_fetch_array($hasil);
            echo "<script>alert('data berhasil dihapus')</script>";
        }
    }
}






    

    

    
?>
