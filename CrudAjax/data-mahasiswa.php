
<button id="addButton" class="btn btn-primary">Tambah Data</button>
<br>
<br>
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Angkatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
   include "koneksi.php";
   $no=1;
   $query=mysqli_query($koneksi, "SELECT * FROM Mahasiswa ORDER BY id DESC") or die(mysqli_error($koneksi));
   while ($result=mysqli_fetch_array($query)) {
    ?>
            <tr>
                <td>
                    <?php echo $no++; ?>
                </td>
                <td>
                    <?php echo $result['nim']; ?>
                </td>
                <td>
                    <?php echo $result['nama']; ?>
                </td>
                <td>
                    <?php echo $result['prodi']; ?>
                </td>
                <td>
                    <?php echo $result['angkatan']; ?>
                </td>
                <td>
                    <button id="EditButton" value="<?php echo $result['id']; ?>">Edit</button>
                    <button id="DeleteButton" value="<?php echo $result['id']; ?>">Delete</button>
                </td>
            </tr>
            <?php
   }
  ?>
    </tbody>
</table>