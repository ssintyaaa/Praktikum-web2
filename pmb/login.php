<?php
// cek terlebih dahulu apakah user sudah submit form login atau belum
if (isset($_POST['login'])){
    session_start();
    // ambil data yang di inputkan user berdasarkan uniq name
    $username = $_POST['username'];
    $password = $_POST['password'];

    // validasi username dan password nya disini
    if ($username == 'sintia' && $password == '12345') {
        // jika username dan password sama, arahkan ke file.php
        $_SESSION['username'] = $username;
        header('location:home.php');
// jika username dan password beda, tampilkan pesan error username salah
// dan tetap di halaman index/login.php

    } else {
        $_SESSION['gagal'] = '<span style="color: red;">username atau password salah</span>';
        header('location:index.php');
    }
}

