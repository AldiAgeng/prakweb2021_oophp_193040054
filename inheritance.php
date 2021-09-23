<!-- VIDEO TENTANG Inheritance -->
<?php 
// Membuat Class Produk
class Produk{
    // Property
    public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain;

    // Konstruktor
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0,
    $waktuMain = 0)
    {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->jmlHalaman = $jmlHalaman;
      $this->waktuMain = $waktuMain;
    }

    // Method getLabel
    public function getLabel(){
      return "$this->penulis, $this->penerbit";
    }

    // Method getInfoLengkap
    public function getInfoProduk(){
      $str = "{$this->judul} | {$this->getLabel()} | (Rp.{$this->harga})";
      return $str;
    }
}

// kelas Komik
class Komik extends Produk {
  public function getInfoProduk()
  {
    $str = "Komik : {$this->getInfoProduk()} - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

// kelas Game
class Game extends Produk {
  public function getInfoProduk()
  {
    $str = "Game : {$this->judul} | {$this->getLabel()} | (Rp.{$this->harga}) ~ {$this->waktuMain} Jam.";
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
  $produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000, 100, 0);
  $produk2 = new Game("Uncharted","Neil Druckmann","Sony Computer",250000, 0, 50);

//Menampilkan ke layar 
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
?>