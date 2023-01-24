<?php 
include "../../connection.php";

if($_POST){
    $namaOutlet = $_POST['namaOutlet'];
    $alamat = $_POST['alamat'];
    $teleponOutlet = $_POST['teleponOutlet'];

    $sql= "INSERT INTO toutlet (namaOutlet, alamat, teleponOutlet)
           VALUES ('".$namaOutlet."','".$alamat."','".$teleponOutlet."')";
    $insert = mysqli_query($conn, $sql);
    if($insert){
        echo "<script>alert('Sukses menambahkan data outlet');location.href='dataOutlet.php'</script>";
    }else{
        echo "<script>alert('Gagal menambahkan data outlet');location.href='dataOutlet.php'</script>";
    }

}
?>