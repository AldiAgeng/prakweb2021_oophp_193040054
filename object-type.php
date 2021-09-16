<!-- VIDEO TENTANG Constructor -->
<?php 
// Membuat Class Produk
class Produk{
    // Property
    public $judul = "judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0;

    // Konstruktor
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
    {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
    }

    // Method getLabel
    public function getLabel(){
      return "$this->penulis, $this->penerbit";
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
  // $produk1 = new Produk();
  // $produk1->judul = "Naruto";
  // var_dump($produk1);

  // $produk2 = new Produk();
  // $produk2->judul = "Uncharted";
  // $produk2->tambahProperty = "hahaha";
  // var_dump($produk2);


  $produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",30000);
  $produk2 = new Produk("Uncharted","Neil Druckmann","Sony Computer",250000);

//Menampilkan ke layar 
  echo "Komik : ".$produk1->getLabel();
  echo "<br>";
  echo "Game : ".$produk2->getLabel();
  echo "<br>";
  $infoProduk1 = new CetakInfoProduk();
  echo $infoProduk1->cetak($produk1);
?>