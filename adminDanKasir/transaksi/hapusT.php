<?php
include "../../connection.php";
$idTransaksi = $_GET['idTransaksi'];

if ($idTransaksi) {
    $sqlHapusT = "DELETE FROM transaksi WHERE idTransaksi = '" . $idTransaksi . "'";
    $hapus = mysqli_query($conn, $sqlHapusT);
    if ($hapus) {
        echo "<script>alert('Sukses hapus transaksi');location.href='dataT.php'</script>";
    } else {
        echo "<script>alert('Gagal hapus transaksi');location.href='dataT.php'</script>";
    }
}