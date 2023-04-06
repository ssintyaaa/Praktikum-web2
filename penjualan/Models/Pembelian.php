<?php
class Pembelian
{
    private $koneksi;
    // akses properti yg bersifat private menggunakan $this
    public function __construct()
    // function yg pertama kali dijalankan
    {
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampil()
    {
        // cetak seluruh data produk menggunakan query select
        $sql = "SELECT p.*,v.nama as namaVendor FROM pembelian p
        inner join vendor v on v.id = p.vendor_id
        order by p.id";
        // gunakan method prepare untuk mengirim data $sql
        $ps = $this->koneksi->prepare($sql);
        // eksekusi data yang sudah disiapkan
        $ps->execute();
        // siapkan data sql yg sudah di eksekusi dengan method fetchAll
        $data = $ps->fetchAll();
        // kembalikan data produk yang dalam bentuk array
        return $data;
    }
}

?>