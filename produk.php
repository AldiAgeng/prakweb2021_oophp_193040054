<!-- VIDEO TENTANG Property dan Method -->
<?php 
// Membuat Class Produk
  class Produk{
    // Property
    public $judul = "judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0;

    // Method getLabel
    public function getLabel(){
      return "$this->penulis, $this->penerbit";
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

  $produk3 = new Produk();
  $produk3->judul = "Naruto";
  $produk3->penulis = "Masashi Kishimoto";
  $produk3->penerbit = "Shonen Jump";
  $produk3->harga = 30000;

  $produk4 = new Produk();
  $produk4->judul = "Uncharted";
  $produk4->penulis = "Neil Druckmann";
  $produk4->penerbit = "Sony Computer";
  $produk4->harga = 250000;

//Menampilkan ke layar 
  echo "Komik : ".$produk3->getLabel();
  echo "<br>";
  echo "Game : ".$produk4->getLabel();
?>