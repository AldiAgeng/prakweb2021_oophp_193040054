<!-- VIDEO TENTANG Constructor -->
<?php 
// Membuat Class Produk
class Produk{
    // Property
    public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe;

    // Konstruktor
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0,
    $waktuMain = 0, $tipe)
    {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->jmlHalaman = $jmlHalaman;
      $this->waktuMain = $waktuMain;
      $this->tipe = $tipe;
    }

    // Method getLabel
    public function getLabel(){
      return "$this->penulis, $this->penerbit";
    }

    // Method getInfoLengkap
    public function getInfoLengkap(){
      $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} | (Rp.{$this->harga})";
      if($this->tipe == "Komik" ){
        $str .= " - {$this->jmlHalaman} Halaman.";
      }else{
        $str .= " ~ {$this->waktuMain} Jam.";
      }
      return $str;
    }
}

// Kelas Cetak Info produk
class CetakInfoProduk{
  // Method cetak
  public function cetak(Produk $produk){
    $str = "{$produk->judul} | {$produk->getLabel()} Rp.{$produk->harga}";
    return $str;
  }
}

  // Instansiasi
  $produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",30000, 100, 0, "Komik");
  $produk2 = new Produk("Uncharted","Neil Druckmann","Sony Computer",250000, 0, 50, "Game");

//Menampilkan ke layar 
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
?>