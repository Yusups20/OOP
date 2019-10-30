<?php
class komputer
{
    //property dengan hak akses protected
    private $jenis_processor = "AMD Ryzen 9 4.0Ghz";
    public function tampilkan_processor()
    {
        return $this->jenis_processor;
    }
}

class laptop extends komputer
{
    public function tampilkan_processor()
    {
        return $this->jenis_processor;
    }
}

//buat objek dari class laptop (instansiasi)
$komputer_baru = new komputer();
$laptop_baru   = new laptop();
//jalankan method dari class komputer

?>