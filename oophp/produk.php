<?php

class Produk {
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "wkwkwk";
// var_dump($produk2);

$produk3 = new Produk ();
$produk3->judul = "Naruto";
$produk3->penerbit = "Mashasi kismono";
$produk3->harga = 30000;
var_dump($produk3);