<?php 
include '../connection.php';

if($_POST){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $notelepon = $_POST['notelepon'];
    $jeniskelamin = $_POST['jeniskelamin'];

    $sql = "INSERT INTO tmember (nama, alamat, notelepon, jeniskelamin) VALUES ('".$nama."','".$alamat."','".$notelepon."','".$jeniskelamin."')";
    $insert = mysqli_query($conn, $sql);

    if($insert){
        echo "<script>alert('Sukses menambahkan data member');location.href='dataMember.php'</script>";
    }else{
        echo "<script>alert('Gagal menambahkan data member');location.href='regisMember.php'</script>";

    }

}
