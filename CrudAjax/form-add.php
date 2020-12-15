
<form method="POST" id="formAdd">
    <table>
        <tr>
            <td>NIM</td>
            <td>
                <input type="text" name="nim" id="nim" required="" />
            </td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td>
                <input type="text" name="nama" id="nama" required="" />
            </td>
        </tr>
        <tr>
        <td>PRODI</td>
        <td>
        <select name="prodi" id="prodi" required="">
                    <option disabled="" selected="">-Pilih-</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                    <option value="Geomatika">Geomatika</option>
                    <option value="Teknik Fisika">Teknik Fisika</option>
                </select>
        </td>
        </tr>
        <tr>
            <td>Angkatan</td>
            <td>
            <select name="angkatan" id="angkatan" required="">
                    <option disabled="" selected="">-Pilih-</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                </select>
            </td>
        </tr>
    
        <tr>
            <td></td>
            <td>
                <input type="submit" name="simpan" id="simpan" value="Simpan" />
                <button id="cancelButton" type="button">Batal</button>
            </td>
        </tr>
    </table>
</form>