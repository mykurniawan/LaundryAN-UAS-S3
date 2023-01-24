<?php
include "../../connection.php";
$idK = $_GET['idUser'];

if ($idK) {
    $sqlHapusK = "DELETE FROM user WHERE idUser = '" . $idK . "'";
    $queryHapusK = mysqli_query($conn, $sqlHapusK);
    if ($queryHapusK) {
        echo "<script>alert('Sukses hapus Kasir');location.href='dataKasir.php'</script>";
    } else {
        echo "<script>alert('Gagal hapus Kasir');location.href='dataKasir.php'</script>";
    }
}
