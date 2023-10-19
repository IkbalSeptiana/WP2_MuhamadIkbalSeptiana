<html>
    <head>
        <title>Tampil Data Matakuliah</title>
    </head>
    <body>
        <center>
            <table>
                <tr>
                    <th colspan="3">
                    Tampil Data Menu
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                    <hr>
                    </td>
                </tr>
                <tr>
                    <td>Kode Menu</td>
                    <th>:</th>
                    <td>
                    <?= $kode; ?>
                    </td>
                </tr>
                <tr>
                    <td>Nama Menu</td>
                    <td>:</td>
                    <td>
                    <?= $nama; ?>
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td>
                    <?= $harga; ?>
                    </td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td>:</td>
                    <td>
                    <img src="<?= base_url('assets/' . $gambar); ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                    <a href="<?= base_url('menu'); 
                    ?>">Kembali</a>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>