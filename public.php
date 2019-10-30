<?php
//buat class laptop
class laptop
{
    public $pemilik;
    //buat public method
    public function hidupkan_laptop()
    {
        return" Hidupkan Laptop ";
    }
}

//buat objek dari class laptop(instansi)
$laptop_anto = new laptop();
//set property
$laptop_anto->pemilik = " Anto <br>";
//tampilkan property
echo $laptop_anto->pemilik;//anto
//tampilkan method
echo $laptop_anto->hidupkan_laptop();//"Hidupkan Laptop"
    
?>