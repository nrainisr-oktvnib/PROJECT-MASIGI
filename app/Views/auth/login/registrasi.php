<?php
session_start();
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_lengkap = ($_POST['nama_lengkap']);
    $nama_pengguna = ($_POST['nama_pengguna']);
    $jabatan = ($_POST['jabatan']);
    $jenis_kelamin = ($_POST['jenis_kelamin']);
    $tanggal_lahir = ($_POST['tanggal_lahir']);
    $tempat_lahir = ($_POST['tempat_lahir']);
    $alamat = ($_POST['alamat']);
    $no_telepon = ($_POST['no_telepon']);
    $email = ($_POST['email']);
    $password = ($_POST['password']);

    $sql = "INSERT INTO login (nama_lengkap, nama_pengguna, jenis_kelamin, tanggal_lahir, tempat_lahir, alamat, jabatan, no_telepon, email, Password) 
            VALUES ('$nama_lengkap','$nama_pengguna', '$jenis_kelamin', '$tanggal_lahir', '$tempat_lahir', '$alamat', '$jabatan', '$no_telepon', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registrasi berhasil!";

        header("Location: beranda.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>