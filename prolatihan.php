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
<?php
class gaji
{
    public $nama,$nip,$alamat,$jhk;

    public function __construct($a,$b,$c,$d)
    {
        $this->nama=$a;
        $this->nip=$b;
        $this->alamat=$c;
        $this->jhk=$d;
 
    }

    public function datadiri()
    {
        return "Data Diri";
    }
    public function totalgaji()
    {
        return "Total Gaji";
    }
    public function gajikotor()
    {
        $gjiktr = $this->jhk * 75000;
        return $gjiktr;
    }
    public function gajibersih()
    {
        $gjibersih = ($this->jhk*75000) - ($this->jhk*75000) * (2.5/100);
        return $gjibersih;
    }
    
}
if (isset($_POST['simpan']))
    {
    $a =$_POST['nama'];
    $b =$_POST['nip'];
    $c =$_POST['alamat'];
    $d =$_POST['jhk'];
    }

$hitung = new gaji($a,$b,$c,$d);
echo "ini adalah ".$hitung->datadiri()."<br>";
echo "Nama              : ".$hitung->nama."<br>";
echo "NIP               : ".$hitung->nip."<br>";
echo "Alamat            : ".$hitung->alamat."<br>";
echo "Jumlah Hari Kerja : ".$hitung->jhk."<br>";
echo "<br>ini adalah ".$hitung->totalgaji()."<br>";
echo "Gaji Kotor        : ".$hitung->gajikotor()."<br>";
echo "Gaji Bersih       : ".$hitung->gajibersih()."<br>";

echo "<br>";

?>
</fieldset>
</body>
</html>