<?php 
//cek apakah tidak ada data di $_POST
if( !isset($_POST["nama"]) ||
	!isset($_POST["nrp"])||
	!isset($_POST["foto"]) ||
	!isset($_POST["jurusan"])

	){
	//redirect (memindahkan sebuah halaman ke halaman lain)
	header("Location: awal.php");
	exit; //bagian bawah tidak di eksekusi

}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Detail Mahasiswa</title>
</head>
<body>
	<ul>
		<li><?php echo $_POST["nama"]; ?></li>
		<li><?php echo $_POST["nrp"]; ?></li>
		<li><?php echo $_POST["foto"]; ?></li>
		<li><?php echo $_POST["jurusan"]; ?></li>
	</ul>
	<a href="awal.php">kembali ke pencarian</a>

</body>
</html>