<?php
include "../../connection.php";
$idJC = $_GET['idJC'];

if ($idJC) {
    $sqlHapusJC = "DELETE FROM jeniscucian WHERE idJC = '" . $idJC . "'";
    $queryHapusJC = mysqli_query($conn, $sqlHapusJC);
    if ($queryHapusJC) {
        echo "<script>alert('Sukses hapus paket');location.href='dataPaket.php'</script>";
    } else {
        echo "<script>alert('Gagal hapus paket');location.href='dataPaket.php'</script>";
    }
}