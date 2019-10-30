<?php
if (isset($_POST['sbm'])) {
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];
    class Keluarga
    {
        public $nama, $nik, $alamat, $umur;
        public function __construct($nama, $nik, $alamat, $umur)
        {
            $this->nama = $nama;
            $this->nik = $nik;
            $this->alamat = $alamat;
            $this->umur = $umur;
        }
        public function datakeluarga()
        {
            foreach ($this->nama as $key => $x) {
                echo "Nama : " . $this->nama[$key] . ", 
                NIK : " . $this->nik[$key] . ", 
                Alamat : " . $this->alamat[$key] . ", 
                Umur : " . $this->umur[$key] . "<br>";
            }
        }
    }
    $keluarga = new Keluarga($nama, $nik, $alamat, $umur);
    echo "<h2><center>Data Keluarga</center></h2>";
    echo $keluarga->datakeluarga();
}
?>