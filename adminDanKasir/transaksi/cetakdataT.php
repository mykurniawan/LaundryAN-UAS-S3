<?php
include "../../connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak data Transaksi</title>
    <link rel="stylesheet" href="../../assets/css/main/app.css">
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.png" type="image/png">
</head>

<body>
    <nav class="navbar navbar-light">
        <div class="container d-block">
            <!-- <a href="index.html"><i class="bi bi-chevron-left"></i></a> -->
            <a class="navbar-brand ms-4" href="#">
            <a href="#"><h4>LaundryaN</h4></a>

            <!-- <img src="../../assets/images/logo/logo.svg"> -->
            </a>
        </div>
    </nav>


    <div class="container">
        <div class="card mt-5">
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
                                        <th>Tgl Masuk</th>
                                        <th>Bayar</th>
                                        <th>Tgl Bayar</th>
                                        <th>Atas Nama</th>
                                        <th>Karyawan</th>
                                        <th>Outlet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM transaksi
                                            INNER JOIN toutlet ON toutlet.idOutlet = transaksi.tempatoutlet";
                                    $query = mysqli_query($conn, $sql);
                                    $no = 0;

                                    while ($dataTransaksi  = mysqli_fetch_array($query )) {
                                        $no++;
                                    ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $dataTransaksi['idTransaksi'] ?></td>
                                            <td><?= $dataTransaksi['paketc'] ?></td>

                                            <td><?= $dataTransaksi['tglM'] ?></td>
                                            <td><?= $dataTransaksi['bayar'] ?></td>
                                            <td><?= $dataTransaksi['tgl'] ?></td>
                                            <td><?= $dataTransaksi['atasnama'] ?></td>
                                            <td><?= $dataTransaksi['karyawan'] ?></td>
                                            <td><?= $dataTransaksi['namaOutlet'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
        </div>
    </div>

    <script>
        window.print();
    </script>
</body>

</html>