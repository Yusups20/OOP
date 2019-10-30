<?php
class laptop
{
    //buat protected property
    protected $pemilik;
    //buat protected method
    protected function hidupkan_laptop()
    {
        return "hidupkan laptop";
    }
    public function getPemilik()
    {
        $this->pemilik = "Anto";
        return $this->pemilik;
    }
}

//buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();
//set protected property akan menghasilkan error
$laptop_anto->pemilik="Anto";
//Fatal error : Cannot access protected property laptop::$pemilik
$laptop_anto->pemilik;
//jalankan protected method akan menghasilkan error
echo $laptop_anto->hidupkan_laptop();
echo $laptop_anto->getPemilik();
//fatal error : Call to protected method laptop::hidupkan_laptop
//from context
?>