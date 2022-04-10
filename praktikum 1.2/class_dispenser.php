<?php
class Dispenser {
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    public function isi($vol){
        $this->volume = $vol;
        return $vol;
    }
    public function harga($h){
        $this->hargaSegelas = $h;
        return $h;
    }
    public function volgel($v){
        $this->volumeGelas = $v;
        return $v;
    }
    function nama($n){
        $this->namaMinuman = $n;
        return $n;
    }
}

$gelas1 = new Dispenser();
echo '<br/>Volume dispenser sebesar ' .$gelas1 -> isi('500 L ');
echo 'harganya ' .$gelas1 -> harga('Rp 10.000 ');
echo 'dengan volume gelas ' .$gelas1 -> volgel('250 ml ');
echo 'nama ' .$gelas1 -> nama('Lee Mineral ');
?>