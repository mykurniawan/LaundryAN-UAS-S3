<?php 
include "../../connection.php";
if($_POST){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password = md5($password);
    $notelepon = $_POST['telepon'];
    $level = $_POST['level'];
    $jk = $_POST['jk'];

    $insert = mysqli_query($conn, "INSERT INTO user (nama, alamat, username, password,  telepon, level, jk)
        VALUES ('" . $nama  . "','" . $alamat . "','" . $username . " ',' " . $password . " ','". $notelepon ."','".$level."','".$jk."')");
    
    if ($insert) {
        echo "<script>alert('Sukses menambahkan kasir');location.href='dataKasir.php'</script>";
    }else{
        echo "<script>alert('Gagal menambahkan kasir');location.href='regisK.php'</script>";

    }
}
?>