<?php
include "../../connection.php";
$idOutlet = $_GET['idOutlet'];

if ($idOutlet) {
    $sqlHapusO = "DELETE FROM toutlet WHERE idOutlet = '" . $idOutlet . "'";
    $queryHapusO = mysqli_query($conn, $sqlHapusO);
    if ($queryHapusO) {
        echo "<script>alert('Sukses hapus Outlet');location.href='dataOutlet.php'</script>";
    } else {
        echo "<script>alert('Gagal hapus Outlet');location.href='dataOutlet.php'</script>";
    }
}
