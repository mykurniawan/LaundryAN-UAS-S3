<?php
session_start();
include "connection.php";
$username = $_SESSION['username'];

if ($_SESSION['username'] == "") {
    header("location:index.php");
} elseif ($_SESSION['level'] == "kasir") {
    header("location:dKasir.php");
} elseif ($_SESSION['level'] == "owner") {
    header("location:dOwner.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">

    <link rel="stylesheet" href="assets/css/shared/iconly.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="#"><h4>LaundryaN</h4></a>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Regis Pengguna</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="adminDanKasir/admin/regisK.php">Registrasi Kasir</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="adminDanKasir/admin/dataKasir.php">Data kasir</a>
                                </li>
                                <!-- <li class="submenu-item ">
                                    <a href="#">Daftar Admin</a>
                                </li> -->
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Transaksi</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item ">
                                    <a href="adminDanKasir/transaksi/dataT.php">Data Transaksi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Member</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="adminDanKasir/regisMember.php">Registrasi Member</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="adminDanKasir/dataMember.php">Daftar Member</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="adminDanKasir/cetakKM.php">Cetak Kartu Member</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-basket-fill"></i>
                                <span>Order</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="adminDanKasir/order/dataOrder.php">Data Order</a>
                                </li>
                                <!-- <li class="submenu-item ">
                                    <a href="adminDanKasir/dataMember.php">Daftar Member</a>
                                </li> -->
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Outlet</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="adminDanKasir/outlet/dataOutlet.php">Daftar Outlet</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="adminDanKasir/outlet/buatOutlet.php">Create Outlet</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Paket</span>
                            </a>
                            <ul class="submenu ">

                                <li class="submenu-item ">
                                    <a href="adminDanKasir/paket/dataPaket.php">Data Paket</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="adminDanKasir/paket/buatPaket.php">Buat Paket Baru</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Options</li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-hexagon-fill"></i>
                                <span>Keluar</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Logout ?
                                    </button>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                <div class="container mt-3">
                    <h2>Selamat datang <?php echo $_SESSION['nama']; ?> </h2>
                    <h5 class="font-bold text-primary"><?php echo $_SESSION['level']; ?></h5>
                    <div class="mt-4 p-5 bg-primary text-white rounded">
                        <h1 style="text-align: center;">LaundryaN</h1>
                        <br>
                        <div class="row">
                            <div class="col-sm bg-primary text-white">
                                Jumlah Member
                                <?php
                                $queryJM = mysqli_query($conn, "SELECT * FROM tmember");
                                $jumlahM = mysqli_num_rows($queryJM);
                                ?>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="font-extrabold mb-0"><?= $jumlahM ?> Member</h6>
                                </div>
                            </div>
                            <div class="col-sm bg-info text-white">
                                Jumlah Order
                                <?php
                                $queryJO = mysqli_query($conn, "SELECT * FROM torder");
                                $jumlahO = mysqli_num_rows($queryJO);
                                ?>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="font-extrabold mb-0"><?= $jumlahO ?> Order</h6>
                                </div>

                            </div>
                            <div class="col-sm bg-primary text-white">
                                Jumlah Transaksi
                                <?php
                                $queryJT = mysqli_query($conn, "SELECT * FROM transaksi");
                                $jumlahT = mysqli_num_rows($queryJT);
                                ?>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="font-extrabold mb-0"><?= $jumlahT ?> Transaksi</h6>
                                </div>

                            </div>
                            <div class="col-sm bg-info text-white">
                                Total Pemasukan
                                <?php
                                $sql = "SELECT SUM(bayar) AS total FROM transaksi";
                                $result = mysqli_query($conn, $sql);


                                if (mysqli_num_rows($result) > 0) {
                                    // Fetch hasil rows
                                    while ($row = mysqli_fetch_assoc($result)) {

                                        echo "Rp " . $row['total'];
                                    }
                                }
                                ?>
                            </div>
                            <div class="col-sm bg-primary text-white">
                                Jumlah Outlet
                                <?php
                                $queryO = mysqli_query($conn, "SELECT * FROM toutlet");
                                $jumlahO = mysqli_num_rows($queryO);
                                ?>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="font-extrabold mb-0"><?= $jumlahO ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <center> -->
                    <nav class="navbar navbar-expand-sm bg-info navbar-dark">
                        <div class="container-fluid justify-content-center">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link btn btn-light" href="adminDanKasir/cetakdataM.php" target="_BLANK"> 
                                        <h6 class="font-bold text-primary text-bold">Cetak Data Member</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-light" href="adminDanKasir/order/cetakO.php" target="_BLANK"> 
                                        <h6 class="font-bold text-primary text-bold">Cetak Data Order</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-light" href="adminDanKasir/transaksi/cetakdataT.php" target="_BLANK"> 
                                        <h6 class="font-bold text-primary text-bold">Cetak Data Transaksi</h6>
                                    </a>
                                </li>
                        
                               
                            </ul>
                            
                        </div>
                    </nav>
                    <!-- </center> -->
                </div>
                <!-- <h3>Dashboard Owner</h3> -->
            </div>
         

            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        
                        <section class="section">
                            <div class="card">

                                <div class="card-header">
                                    <h2>Order</h2>
                                </div>
                                <div class="card-body">
                                    <table class="table" id="table1">
                                        <thead>
                                            <tr>
                                                <th>NO.</th>
                                                <th>ID</th>
                                                <th>NAMA</th>
                                                <th>ALAMAT</th>
                                                <th>TELEPON</th>
                                                <th>JENIS KELAMIN</th>
                                                <th>ORDER</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include 'connection.php';
                                            $sql = "SELECT * FROM tmember";
                                            $queryMember = mysqli_query($conn, $sql);
                                            $no = 0;

                                            while ($dataMember = mysqli_fetch_array($queryMember)) {
                                                $no++;
                                            ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $dataMember['idMember'] ?></td>

                                                    <td><?= $dataMember['nama'] ?></td>
                                                    <td><?= $dataMember['alamat'] ?></td>
                                                    <td><?= $dataMember['notelepon'] ?></td>
                                                    <td><?= $dataMember['jeniskelamin'] ?></td>
                                                    <td>
                                                        <a href="adminDanKasir/order/order.php?idMember= <?= $dataMember['idMember'] ?>"><img src="assets/icons/dirty.png" alt=""></a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </section>

                        <!-- <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Profile Visit</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-profile-visit"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Profile Visit</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                                        <use xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">Europe</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-0">862</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-europe"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-success" width="32" height="32" fill="blue" style="width:10px">
                                                        <use xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">America</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-0">375</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-america"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-danger" width="32" height="32" fill="blue" style="width:10px">
                                                        <use xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">Indonesia</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-0">1025</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-indonesia"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Latest Comments</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Comment</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="assets/images/faces/5.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Congratulations on your graduation!</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="assets/images/faces/2.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Wow amazing design! Can you make another tutorial for
                                                                this design?</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-12 col-lg-3">
                        <!-- <div class="card">
                            <div class="card-body py-4 px-4">
                                <div class="d-flex align-items-center">
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">selamat datang : <?php echo $_SESSION['nama']; ?></h5>
                                        <h6 class="text-muted mb-0"><?php echo $_SESSION['level']; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="card">
                            <div class="card-header">
                                <h4>Daftar Paket</h4>
                            </div>
                            <div class="card-content pb-4">

                                <?php
                                $sql = "SELECT * FROM jeniscucian";
                                $queryJeniscucian = mysqli_query($conn, $sql);
                                while ($dataJC = mysqli_fetch_array($queryJeniscucian)) {
                                    // $no++;

                                ?>
                                    <div class="recent-message d-flex px-4 py-3">
                                        <div class="name ms-4">
                                            <h5 class="mb-1"><?= $dataJC['paket'] ?></h5>
                                            <h6 class="text-muted mb-0"><?= $dataJC['harga'] ?></h6>
                                        </div>
                                    </div>
                                <?php
                                } ?>
                                <div class="container">

                                    <a href="adminDanKasir/paket/dataPaket.php">Lihat selengkapnya...</a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card">
                            <div class="card-header">
                                <h4>Visitors Profile</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-visitors-profile"></div>
                            </div>
                        </div> -->
                    </div>
            </div>
            </section>


        </div>

        <!-- Modal logout -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <div class="modal-body">
                        Yakin ingin keluar dari halaman ?
                    </div>
                    <div class="modal-footer">
                        <a href="logout.php" class="btn btn-danger">Log Out</a>

                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Batal</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div id="main">
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <!-- <div class="float-start">
                    <p>2022 &copy; Mazer</p>
                </div> -->
                    <div class="float-end">
                        <p>Project UAS <span class="text-danger"></span> by <a href="https://saugi.me">M. Yoga Kurniawan 21510011</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- Need: Apexcharts -->
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/extensions/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="assets/js/pages/datatables.js"></script>


</body>

</html>