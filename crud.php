<?php
require_once('_koneksi.php');

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nominal = $_POST['nominal'];
    $metode = $_POST['metode'];
    $tgl_diterima = $_POST['tgl_diterima']. " 00:00:00"; 

    $query = "INSERT INTO donasi VALUES('','$nama','$nominal','$metode','$tgl_diterima')";
    $simpan = mysqli_query($conn, $query);

    if ($simpan) {
        echo "<script>alert('Data berhasil disimpan'); document.location= 'data_donasi.php';</script>";
    }
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nominal = $_POST['nominal'];
    $metode = $_POST['metode'];
    $tgl_diterima = $_POST['tgl_diterima']. " 00:00:00"; 
    $query = "UPDATE donasi SET
        nama = '$nama',
        nominal = '$nominal',
        metode = '$metode',
        tgl_diterima = '$tgl_diterima'
        WHERE id = '$id'";
    $simpan = mysqli_query($conn, $query);
    if ($simpan) {
        echo "<script>alert('Data berhasil disimpan'); document.location= 'data_donasi.php';</script>";
    }
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = "DELETE FROM donasi WHERE id = $id";
    mysqli_query($conn, $query);
    header("Location: data_donasi.php");
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $query = "SELECT * FROM user WHERE username = '$username'";
    $hasil = mysqli_query($conn, $query);
    $user = mysqli_fetch_array($hasil);

    if ($password == $user['password']) {
        session_start();
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama'] = $user['nama'];
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Username atau Password yang anda masukkan salah!!!'); document.location('login.php')</script>";
    }
}



?>