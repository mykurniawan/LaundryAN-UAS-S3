<?php 
// berfungsi mengaktifkan session
session_start();
//berfungsi menghapus semua session
session_destroy();
// berfungsi mengalihkan halaman ke halaman login
echo "<script>alert('Anda sudah logout');location.href='index.php'</script>";
?>