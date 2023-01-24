<?php 
include "../../connection.php";
if($_POST){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    // $password = PASSWORD_HASH($_POST['password'], PASSWORD_DEFAULT);
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $notelepon = $_POST['telepon'];
    $level = $_POST['level'];

    $insert = mysqli_query($conn, "INSERT INTO tadmin (username, password, nama, alamat, telepon, level)
        VALUES ('" . $username . " ',' " . $password . " ','" . $nama  . "','" . $alamat . "','". $notelepon ."','".$level."')") or die(mysqli_error($conn));
    
    if ($insert) {
        echo "<script>alert('Sukses menambahkan data Admin');location.href='../../dAdmin.php'</script>";
    }
}
?>