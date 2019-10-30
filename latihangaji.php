<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan</title>
</head>
<body>
<pre>
    <fieldset>
    <legend>Form Gaji</legend>
    <form action="prolatihan.php" method="post">
    
    <label>Nama :</label>
    <input type="text" name="nama"recuired><br>
    <label>NIP :</label>
    <input type="number" name="nip"recuired><br>
    Alamat :<textarea name="alamat" cols="20"rows="5"></textarea><br>
    <label>Jumlah Hari Kerja :</label>
    <input type="number" max="30" name="jhk"recuired><br>
    <input type="submit" value="simpan" name="simpan">
    </fieldset>
    </form>
</body>
</html>