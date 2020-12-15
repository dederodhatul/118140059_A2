
<?php
include "koneksi.php";

switch ($_GET['action'])
{

    case 'save':

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $angkatan = $_POST['angkatan'];


        $query = mysqli_query($koneksi, "INSERT INTO Mahasiswa(nim, nama, prodi, angkatan) VALUES('$nim', '$nama', '$prodi', '$angkatan')");
        if ($query)
        {
            echo "Simpan Data Berhasil";
        }
        else
        {
            echo "Simpan Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'edit':
        $id = $_POST['id'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $angkatan = $_POST['angkatan'];


        $query = mysqli_query($koneksi, "UPDATE Mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi', angkatan='$angkatan' WHERE id = $id");
        if ($query)
        {
            echo "Edit Data Berhasil";
        }
        else
        {
            echo "Edit Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'delete':

        $id = $_POST['id'];
        $query = mysqli_query($koneksi, "DELETE FROM Mahasiswa WHERE id='$id'");
        if ($query)
        {
            echo "Hapus Data Berhasil";
        }
        else
        {
            echo "Hapus Data Gagal :" . mysqli_error($koneksi);
        }
    break;
}
?>
