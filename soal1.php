<!DOCTYPE html>
<body>
    
<pre>
<?php
class facebook
{
    public $user;
    protected $status;
    private $password=123;

    public function username()
    {
        return " Selamat Datang <br> "
        ."Masukan Password : ".$this->password."<br>";
    }
}

class bikin_status extends facebook
{
    public function status()
    {
        return $this->status=" Hallo Facebook";
    }
}

$output = new facebook();
$output2= new bikin_status();
$output->user = " Masukan iD / Username = ";
echo $output->user;
echo $output->username();
echo $output2->status();
?>
</body>
</html>