<?php

$nama = $_POST['nama'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

if($produk == "tv"){
    $total_harga = 4200000 * $jumlah;
}elseif($produk == "kulkas"){
    $total_harga = 3100000 * $jumlah;
}elseif($produk == "mesin cuci"){
    $total_harga = 3800000 * $jumlah;
}
?>

