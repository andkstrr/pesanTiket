<?php

class Tiket {
    protected $ppn;
    private $VIP,
            $Private,
            $Executive,
            $Ekonomi;
    public  $jumlah,
            $jenis;

    function __construct() {
        $this->ppn = 0.1;
    }

    public function setHarga($tiket1, $tiket2, $tiket3, $tiket4) {
        $this->VIP = $tiket1;
        $this->Private = $tiket2;
        $this->Executive = $tiket3;
        $this->Ekonomi = $tiket4;
    }

    public function getHarga() {
        $data["VIP"] = $this->VIP;
        $data["Private"] = $this->Private;
        $data["Executive"] = $this->Executive;
        $data["Ekonomi"] = $this->Ekonomi;
        return $data;
    }
}

class Beli extends Tiket {
    public function hargaBeli() {
        $dataHarga = $this->getHarga();
        $hargaBeli = $this->jumlah * $dataHarga[$this->jenis];
        $hargaPPN = $hargaBeli * $this->ppn;
        $totalHarga = $hargaBeli + $hargaPPN;
        return $totalHarga;
    }

    public function cetakPembelian() {
        echo "<div class='mt-3 alert alert-primary'>";
        echo "Anda membeli tiket tipe : " . "<b>" . $this->jenis . "</b>" . "<br>";
        echo "Dengan jumlah : " . "<b>" . $this->jumlah . " Tiket </b><br>";
        echo "Total yang harus anda bayar <b> Rp. " .  number_format($this->hargaBeli(), 0, '', '.') . "</b><br>";
        echo "</div>";
    }
}
