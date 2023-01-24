<?php
session_start();
include "../../connection.php";
if ($_SESSION['username'] == "") {
    header("location:../../index.php");
}

$sql = "SELECT * FROM torder  
        INNER JOIN tmember ON tmember.idMember = torder.member
        INNER JOIN jeniscucian ON jeniscucian.idJC = torder.jeniscucian
        INNER JOIN tstatus ON tstatus.idStatus = torder.status
        WHERE idOrder='" . $_GET['idOrder'] . "'";
$query = mysqli_query($conn, $sql);
$dataTransaksi = mysqli_fetch_array($query);

// ambil data member 
?>
<?php
//transaksi di lakukan
if (isset($_POST['submit'])) {
    $idOrder = $_POST['orderan'];
    $pc = $_POST['paketc'];
    $hpkg = $_POST['hargaperkg'];
    $bc = $_POST['beratc'];
    $tglM = $_POST['tglM'];
    $bayar = $_POST['bayar'];
    $tgl = $_POST['tgl'];
    $member = $_POST['atasnama'];
    $karyawan = $_POST['karyawan'];
    $tempat = $_POST['tempatoutlet'];

    $sql = "INSERT INTO transaksi(orderan, paketc, hargaperkg, beratc, tglM, bayar, tgl, atasnama, karyawan, tempatoutlet)
            VALUES('" . $idOrder . "','" . $pc . "','" . $hpkg . "','" . $bc . "','" . $tglM . "','" . $bayar . "','" . $tgl . "','" . $member . "','" . $karyawan . "','" . $tempat . "') ";
    $insert = mysqli_query($conn, $sql);

    if ($insert) {
        echo "<script>alert('Sukses'); location.href='dataT.php'</script>";
    } else {
        echo "<script>alert('Gagal'); location.href='#'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>

    <link rel="stylesheet" href="../../assets/css/main/app.css">
    <link rel="stylesheet" href="../../assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.png" type="image/png">

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

                        <li class="sidebar-item  ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Transaksi</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Menu</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="../transaksi/dataT.php">Data Transaksi</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../order/dataOrder.php">Data Order</a>
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
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Transaksi atas nama <b><?= $dataTransaksi['nama'] ?></b></h3>
                            <!-- <p class="text-subtitle text-muted"> id memb</p> -->
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../../dAdmin.php">Dashboard</a></li>
                                    <!-- <li class="breadcrumb-item active" aria-current="page">Form Layout</li> -->
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><?php echo $_SESSION['username']; ?></i></h4>
                                    <h4 class="card-title">Biaya orderan <i><?= $dataTransaksi['nama'] ?></i></h4>
                                    <p>berat cucian <b> <?= $dataTransaksi['berat'] ?>kg</b></p>
                                    <p>Status cucian terkini ( <?= $dataTransaksi['keterangan'] ?> )</p>

                                    <?php
                                    $sql1 = "SELECT harga from jeniscucian WHERE idJC = 1 ";
                                    $sql2 = "SELECT harga from jeniscucian WHERE idJC = 2 ";
                                    $sql4 = "SELECT harga from jeniscucian WHERE idJC = 4 ";
                                    $sql5 = "SELECT harga from jeniscucian WHERE idJC = 5 ";
                                    $queryPaket1 = mysqli_query($conn, $sql1);
                                    $queryPaket2 = mysqli_query($conn, $sql2);
                                    $queryPaket4 = mysqli_query($conn, $sql4);
                                    $queryPaket5 = mysqli_query($conn, $sql5);

                                    $hargaPaket1  = mysqli_fetch_array($queryPaket1);
                                    $hargaPaket2  = mysqli_fetch_array($queryPaket2);
                                    $hargaPaket4  = mysqli_fetch_array($queryPaket4);
                                    $hargaPaket5  = mysqli_fetch_array($queryPaket5);

                                    if ($dataTransaksi['jeniscucian'] == "1") {
                                        $harga = $hargaPaket1['harga'];
                                        $bayar = $dataTransaksi['berat'] * $harga;
                                        echo "Total Bayar" . $bayar;
                                    } elseif ($dataTransaksi['jeniscucian'] == "2") {
                                        $harga = $hargaPaket2['harga'];
                                        $bayar = $dataTransaksi['berat'] * $harga;
                                        echo "Total Bayar" . $bayar;
                                    } elseif ($dataTransaksi['jeniscucian'] == "4") {
                                        $harga = $hargaPaket4['harga'];
                                        $bayar = $dataTransaksi['berat'] * $harga;
                                        echo "Total Bayar" . $bayar;
                                    } elseif ($dataTransaksi['jeniscucian'] == "5") {
                                        $harga = $hargaPaket5['harga'];
                                        $bayar = $dataTransaksi['berat'] * $harga;
                                        echo "Total Bayar" . $bayar;
                                    }
                                    ?>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="" method="POST" class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="row">
                                                    <input type="hidden" name="orderan" value="<?= $dataTransaksi['idOrder'] ?>" class="form-control" placeholder="Member" id="first-name-icon">

                                                    <div class="col-md-2">
                                                        <label>Atas Nama</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" name="atasnama" value="<?= $dataTransaksi['nama'] ?>" class="form-control" placeholder="nama" id="first-name-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Paket Pilihan</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" name="paketc" value="<?= $dataTransaksi['paket'] ?>" class="form-control" placeholder="nama" id="first-name-icon">
                                                                <div class="form-control-icon">
                                                                    <!-- <i class="bi bi-person"></i> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Harga per kg</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" name="hargaperkg" value="<?= $dataTransaksi['harga'] ?>" class="form-control" placeholder="nama" id="first-name-icon">
                                                                <div class="form-control-icon">
                                                                    <!-- <i class="bi bi-person"></i> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Berat Cucian</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" name="beratc" value="<?= $dataTransaksi['berat'] ?> kg" class="form-control" placeholder="nama" id="first-name-icon">
                                                                <div class="form-control-icon">
                                                                    <!-- <i class="bi bi-person"></i> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Tanggal Masuk</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="date" name="tglM" value="<?= $dataTransaksi['tglMasuk'] ?>" required class="form-control" placeholder="Tanggal" id="first-name-icon">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Tanggal Bayar</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="date" name="tgl" required class="form-control" placeholder="Tanggal" id="first-name-icon">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Bayar</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input required type="number" name="bayar" value="<?= $bayar ?>" class="form-control" placeholder="berat dalam kg" id="first-name-icon">
                                                                <div class="form-control-icon">
                                                                    Rp
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Karyawan</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input required type="text" name="karyawan" value="<?php echo $_SESSION['username']; ?>" class="form-control" placeholder="berat dalam kg" id="first-name-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>Outlet</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <select class="form-select form-select-sm" name="tempatoutlet" required>
                                                                    <!-- <option> Pilih </option> -->
                                                                    <?php
                                                                    $sql = mysqli_query($conn, "SELECT * FROM toutlet");
                                                                    while ($data = mysqli_fetch_array($sql)) {
                                                                        echo '<option value="' . $data['idOutlet'] . '">' . $data['namaOutlet'] . '</option>';
                                                                    }
                                                                    ?>
                                                                </select>
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
                            </div>
                        </div>
                    </div>
            </div>
            </section>
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
    <script src="../../assets/js/bootstrap.js"></script>
    <script src="../../assets/js/app.js"></script>

</body>

</html>