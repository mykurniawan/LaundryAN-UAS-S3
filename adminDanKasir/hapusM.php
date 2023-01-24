<?php
include "../connection.php";
$idMember = $_GET['idMember'];

if ($idMember) {
    $sqlHapusM = "DELETE FROM tmember WHERE idMember = '" . $idMember . "'";
    $queryHapusM = mysqli_query($conn, $sqlHapusM);
    if ($queryHapusM) {
        echo "<script>alert('Sukses hapus memeber');location.href='dataMember.php'</script>";
    } else {
        echo "<script>alert('Gagal hapus memeber');location.href='dataMember.php'</script>";
    }
}
