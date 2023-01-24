<?php
include "../../connection.php";

if ($_POST) {
    $idOutlet = $_POST['idOutlet'];
    $namaOutlet = $_POST['namaOutlet'];
    $alamat = $_POST['alamat'];
    $teleponOutlet = $_POST['teleponOutlet'];

    $sql = "UPDATE toutlet SET namaOutlet = '" . $namaOutlet . "',
                                alamat = '" . $alamat . "',
                                teleponOutlet = '" .$teleponOutlet . "'
            where idOutlet = '" . $idOutlet . "'";
    $queryUpdate = mysqli_query($conn, $sql);

    if($queryUpdate){
        echo "<script>alert('Sukses edit data Outlet'); location.href='dataOutlet.php';</script>";
    }else{
        echo "<script>alert('Gagal edit data Outlet'); location.href='dataOutlet.php';</script>";

    }
}
