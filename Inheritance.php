<?php
class Mobil{
    public $nama, $merk, $warna, $KecepatanMaksimal, $JumlahPenumpang;

    public function tambahkecepatan(){
        return "Kecepatan Bertambah";
    }
}

class MobilSport extends Mobil{
    public $turbo = false;

    public function aktifkanturbo(){
        $this->turbo=true;
        return "Turbo Diaktifkan";
    }
}

$mobilku = new MobilSport();
echo $mobilku->tambahkecepatan();
echo "<br>";
echo $mobilku->aktifkanturbo();
?>