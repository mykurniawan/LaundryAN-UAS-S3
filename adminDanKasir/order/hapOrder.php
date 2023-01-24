<?php
include "../../connection.php";
$idOrder = $_GET['idOrder'];

if ($idOrder) {
    $sqlHapusO = "DELETE FROM torder WHERE idOrder = '" . $idOrder . "'";
    $queryHapusO = mysqli_query($conn, $sqlHapusO);
    if ($queryHapusO) {
        echo "<script>alert('Sukses hapus order');location.href='dataOrder.php'</script>";
    } else {
        echo "<script>alert('Gagal hapus order');location.href='dataOrder.php'</script>";
    }
}
