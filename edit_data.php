<?php

include "koneksi.php";
$id = $_GET['id'];
$tampil = mysqli_query($conn, "SELECT * FROM produk WHERE id='$id'");
$hasil = mysqli_fetch_array($tampil);

?>
<div class="input">
    <h2>Edit Data</h2>

    <form method="post" action="proses_edit.php?id=<?PHP echo $_GET['id']; ?>">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_produk" value="<?php echo $hasil['nama_produk']; ?>"></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    <label for="kategori">kategori</label>
                    <select name="kategori">
                        <option value="Cat">Cat</option>
                        <option value="Gypsum">Gypsum</option>
                        <option value="Semen">Semen</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td><input type="text" name="harga_beli" value="<?php echo $hasil['harga_beli']; ?>"></td>
            </tr>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td><input type="text" name="harga_jual" value="<?php echo $hasil['harga_jual']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="kirim"></td>
            </tr>
        </table>
        <p>
            <a href="admin.php">Kembali ke Data Pembeli</a>
        </p>
    </form>
</div>