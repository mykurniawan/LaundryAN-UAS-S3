<?php
session_start();
include "../../connection.php";
$username = $_SESSION['username'];

if ($_SESSION['username'] == "") {
    header("location:../../index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>

    <link rel="stylesheet" href="../../assets/css/main/app.css">
    <link rel="stylesheet" href="../../assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.png" type="image/png">

    <link rel="stylesheet" href="../../assets/css/pages/fontawesome.css">
    <link rel="stylesheet" href="../../assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="../../assets/css/pages/datatables.css">
    <!-- bootstrap5 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="#">
                                <h4>LaundryaN</h4>
                            </a>

                            <!-- <a href="#"><img src="../../assets/images/logo/logo.svg" alt="Logo" srcset=""></a> -->
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
                        <!-- <li class="sidebar-title">Menu</li> -->

                        <li class="sidebar-item  ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Data Transaksi</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Menu</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="../order/dataOrder.php">Data Order</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="../../dAdmin.php" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Halaman Utama</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                <a style="color: white; text-decoration: none;" href="cetakdataT.php" target="_BLANK">Cetak</a>
                            </button>
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
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Transaksi</h3>
                            <p class="text-subtitle text-muted">Tabel Data Transaksi</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                                <a style="color: white; text-decoration: none;" href="../../dAdmin.php">Kembali</a>
                                            </button>
                                        </div>
                                    </div>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Basic Tables start -->
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Data Transaksi
                        </div>
                        <div class="card-body">
                            <table class="table" id="table1">
                                <thead>
                                    <tr>
                                        <th>NO.</th>
                                        <th>ID</th>
                                        <th>Paket</th>
                                        <th>Bayar</th>
                                        <th>TGL</th>
                                        <th>Atas Nama</th>
                                        <th>Karyawan</th>
                                        <th>OPTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM transaksi";
                                    $query = mysqli_query($conn, $sql);
                                    $no = 0;

                                    while ($dataTransaksi  = mysqli_fetch_array($query)) {
                                        $no++;
                                    ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $dataTransaksi['idTransaksi'] ?></td>
                                            <td><?= $dataTransaksi['paketc'] ?></td>

                                            <td><?= $dataTransaksi['bayar'] ?></td>
                                            <td><?= $dataTransaksi['tgl'] ?></td>
                                            <td><?= $dataTransaksi['atasnama'] ?></td>
                                            <td><?= $dataTransaksi['karyawan'] ?></td>
                                            <td>
                                                <a href="nota.php?idTransaksi= <?= $dataTransaksi['idTransaksi'] ?>" target="_BLANK"><img src="../../assets/icons/print.png"></a>
                                                <a href="hapusT.php?idTransaksi= <?= $dataTransaksi['idTransaksi'] ?>"><img src="../../assets/icons/trash.png" alt=""></a>
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
                <!-- Basic Tables end -->

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <?php
                            // $queryAdmin = mysqli_query($conn,"SELECT * FROM admin WHERE idAdmin = '".$_GET['idAdmin']."'");
                            // $dataAdmin = mysqli_fetch_array($queryAdmin);

                            $sql = "SELECT * FROM toutlet WHERE idOutlet ='" . $_GET['idOutlet'] . "'";
                            //  $sql = "SELECT * FROM toutlet ";
                            $queryOutlet = mysqli_query($conn, $sql);
                            $dataOutlet = mysqli_fetch_array($queryOutlet);
                            ?>
                            <div class="modal-body">
                                <form action="prosesEditO.php" method="POST" class="form form-horizontal">
                                    <div class="form-body">
                                        <div class="row">

                                            <input type="hidden" name="idOutlet" value="<?= $dataOutlet['idOutlet'] ?>" class="form-control" placeholder="Nama Outlet" id="first-name-icon">

                                            <div class="col-md-2">
                                                <label>Nama Outlet</label>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" name="namaOutlet" value="<?= $dataOutlet['namaOutlet'] ?>" class="form-control" placeholder="Nama Outlet" id="first-name-icon">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-person"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label>Alamat</label>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" name="alamat" value="<?= $dataOutlet['alamat'] ?>" class="form-control" placeholder="Alamat" id="first-name-icon">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-envelope"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label>Telepon</label>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="number" name="teleponOutlet" value="<?= $dataOutlet['teleponOutlet'] ?>" class="form-control" placeholder="No Telepon">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-phone"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2023 &copy; LaundryaN</p>
                    </div>
                    <div class="float-end">
                        <p>Project UAS <span class="text-danger"></span> by <a href="#">M. Yoga Kurniawan 21510011</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="../../assets/js/bootstrap.js"></script>
    <script src="../../assets/js/app.js"></script>

    <script src="../../assets/extensions/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="../../assets/js/pages/datatables.js"></script>
    <!-- <script src="js.js"></script> -->

</body>

</html>