
<?php
 include "koneksi.php";
 $id = $_GET['id'];
 $query=mysqli_query($koneksi, "SELECT * FROM Mahasiswa WHERE id = $id") or die(mysqli_error($koneksi));
 $result=mysqli_fetch_array($query);
?>
    <form method="POST" id="formEdit">
        <table>
            <tr>
                <td>NIM</td>
                <td>
                <input type="hidden" name="id" id="id" required="" value="<?php echo $result['id']; ?>" />
                    <input type="text" name="nim" id="nim" required="" value="<?php echo $result['nim']; ?>" />
                </td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td>
                    <label>
                        <input type="text" name="nama" id="nama" >
                </td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>
                <select name="prodi" id="prodi" required="">
                        <option disabled="" selected="">-Pilih-</option>
                        <option value="Teknik informatika" <?php if($result[ 'prodi']=="Teknik Informatika" ) echo "selected"; ?>>Teknik Informatika</option>
                        <option value="Teknik Elektro" <?php if($result[ 'prodi']=="Teknik Elektro" ) echo "selected"; ?>>Teknik Elektro</option>
                        <option value="Geomatika" <?php if($result[ 'prodi']=="Geomatika" ) echo "selected"; ?>>Geomatika</option>
                        <option value="Teknik Fisika" <?php if($result[ 'prodi']=="Teknik Fisika" ) echo "selected"; ?>>Teknik Fisika</option>

                    </select>
            
                </td>
            </tr>
            <tr>
                <td>Angkatan</td>
                <td>
                    <select name="angkatan" id="angkatan" required="">
                        <option disabled="" selected="">-Pilih-</option>
                        <option value="2020" <?php if($result[ 'angkatan']=="2020" ) echo "selected"; ?>>2020</option>
                        <option value="2019" <?php if($result[ 'angkatan']=="2019" ) echo "selected"; ?>>2019</option>
                        <option value="2018" <?php if($result[ 'angkatan']=="2018" ) echo "selected"; ?>>2018</option>
                        <option value="2017" <?php if($result[ 'angkatan']=="2017" ) echo "selected"; ?>>2017</option>
                    
                    </select>
                </td>
            </tr>
            <tr>
            
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="simpan" id="simpan" value="Simpan" />
                    <button type="button" id="cancelButton">Batal</button>
                </td>
            </tr>
        </table>
    </form>