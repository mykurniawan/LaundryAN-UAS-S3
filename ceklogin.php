<?php 
// berfungsi mengaktifkan session
session_start();
 
// berfungsi menghubungkan koneksi ke database
include 'connection.php';
 
// berfungsi menangkap data yang dikirim
$user = $_POST['username'];
// $pass = md5($_POST['password']);
$password = $conn->real_escape_string($_POST['password']);
$password = md5($password);
 
// berfungsi menyeleksi data user dengan username dan password yang sesuai
$sql = mysqli_query($conn,"SELECT * FROM user WHERE username='$user' AND password='$password'");
//berfungsi menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($sql);

// berfungsi mengecek apakah username dan password ada pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($sql);

	// berfungsi mengecek jika user login sebagai admin
	if($data['level']=="admin"){
		// berfungsi membuat session
		$_SESSION['username'] =  $data['username'];
		$_SESSION['level'] = "admin";
		$_SESSION['nama']= $data['nama'];
        // $_SESSION['nama'] = $data['nama'];
		//berfungsi mengalihkan ke halaman admin
		
		echo "<script>alert('Sukses Login');location.href='dAdmin.php'</script>";
	// berfungsi mengecek jika user login sebagai moderator
	}else if($data['level']=="kasir"){
		// berfungsi membuat session
		$_SESSION['username'] = $data['username'];
		$_SESSION['level'] = "kasir";
		$_SESSION['nama']= $data['nama'];

		// berfungsi mengalihkan ke halaman moderator
		echo "<script>alert('Sukses Login');location.href='dKasir.php'</script>";


	}elseif($data['level']=="owner"){
		$_SESSION['username'] = $data['username'];
		$_SESSION['level'] = "owner";
		$_SESSION['nama']= $data['nama'];

		echo "<script>alert('Sukses Login');location.href='dOwner.php'</script>";
	}
	else{
		// berfungsi mengalihkan alihkan ke halaman login kembali
		// header("location:index.php?alert=gagal");
		echo "<script>alert('GagalLogin password / username salah');location.href='index.php'</script>";
		
	}	
}else{
	// header("location:index.php? alert=gagal");
	echo "<script>alert('Gagal Login password / username salah');location.href='index.php'</script>";

}
?>