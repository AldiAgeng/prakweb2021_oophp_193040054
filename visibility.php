<!-- VIDEO TENTANG Visibility -->
<?php 
// Membuat Class Produk
class Produk{
    // Property
    public $judul, $penulis, $penerbit;
    protected $diskon = 0;
    private $harga;

    // Konstruktor
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
    {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
    }

    public function getHarga(){
      return $this->harga - ($this->harga * $this->diskon / 100);
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
  public $jmlHalaman;
  
  public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0,
  $jmlHalaman = 0){
    parent::__construct(  $judul, $penulis, $penerbit, $harga );
    $this->jmlHalaman = $jmlHalaman;
  }



  public function getInfoProduk()
  {
    $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

// kelas Game
class Game extends Produk {
  public $waktuMain;

  public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0,
  $waktuMain = 0)
  {
    parent::__construct( $judul, $penulis, $penerbit, $harga);
    $this->waktuMain = $waktuMain;
  }

  public function setDiskon($diskon){
    $this->diskon = $diskon;
  }

  public function getInfoProduk()
  {
    $str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam.";
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
  $produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000, 100);
  $produk2 = new Game("Uncharted","Neil Druckmann","Sony Computer",250000, 50);

//Menampilkan ke layar 
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();

?>