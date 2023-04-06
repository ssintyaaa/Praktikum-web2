<?php
include_once 'dbkoneksi.php';

include_once('Models/Kartu.php');
include_once('Models/Produk.php');
include_once('Models/Pesanan.php');
include_once('Models/Vendor.php');
include_once('Models/Pembelian.php');
include_once('Models/Pembayaran.php');
include_once('Models/Jenis.php');
include_once('Models/Pelanggan.php');

include_once('navbar.php');
include_once('sidebar.php');

// lakukan request halaman di menu URL dengan membuka terlebih dahulu file index.php
$hal = $_REQUEST['hal'];
// jika da request dari URL browser berupa HAL tampilkan halaman sesuai request
if(!empty($hal)){
    include_once $hal .'.php';
    // include_once 'produk.php'
}else{
// jika tidak ada request hal dari URL browser, tampilkan halaman home
include_once('home.php');
}

include_once('footer.php');
?>