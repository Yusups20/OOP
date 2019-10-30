<!DOCTYPE html>
<html>
<head>
    <title>Data Keluarga</title>
</head>
<body>
    <fieldset>
        <legend>Latihan 1</legend>
        <form action="" method="post">
        <label for="">Masukkan Jumlah Anggota Keluarga</label>
        <input type="number" name="jml" min="0">
        <input type="submit" value="Proses" name="simpan">
        </form><br>

        <?php
        if (isset($_POST['simpan'])) {
            $jml = $_POST['jml'];
            for ($i = 0; $i < $jml; $i++) {
                ?>
            <form action="latihan2pro.php" method="post">
                <table>
                    <tr>
                        
                        <td><label for="">Nama</label></td>
                        <td><input type="text" name="nama[]" require></td>
                        <td></td>

                        <td><label for="">NIK</label></td>
                        <td><input type="number" name="nik[]" require></td>
                        <td></td>

                        <td><label for="">Alamat</label></td>
                        <td><input type="text" name="alamat[]" require></td>
                        <td></td>
                        
                        <td><label for="">Umur</label></td>
                        <td><input type="number" name="umur[]" require></td>
                    </tr>
                </table>
        <?php
    }
    ?>
            <tr><br>
            <input type="submit" name="sbm" value="Proses">
            </tr>

            <?php
        }
        ?>
            </form>
    </fieldset>
</body>
</html>