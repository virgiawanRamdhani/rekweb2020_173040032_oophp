<?php

class Produk {
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

 
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    

}


$produk3 = new Produk ();
$produk3->judul = "Naruto";
$produk3->penulis = "Mashasi kismono";
$produk3->penerbit = "Sony Computer";
$produk3->harga = 30000;

$produk4 = new Produk ();
$produk4->judul = "uncharted";
$produk4->penulis = "neil";
$produk4->penerbit = "nokia";
$produk4->harga = 40000;

echo "Komik : " . $produk3-> getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();



