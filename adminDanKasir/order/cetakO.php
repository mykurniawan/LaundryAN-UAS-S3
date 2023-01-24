<?php
include "../../connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak data order</title>
    <link rel="stylesheet" href="../../assets/css/main/app.css">
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="../../assets/images/logo/favicon.png" type="image/png">
</head>

<body>
    <nav class="navbar navbar-light">
        <div class="container d-block">
            <a class="navbar-brand ms-4" href="index.html">
                <a href="#">
                    <h4>LaundryaN</h4>
                </a>

            </a>
        </div>
    </nav>


    <div class="container">
        <div class="card mt-5">
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Data Order
                    </div>
                    <div class="card-body">
                        <table class="table" id="table1">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>ID</th>
                                    <th>MEMBER</th>
                                    <th>JENIS CUCIAN</th>
                                    <th>BERAT</th>
                                    <th>STATUS</th>
                                    <th>TGL MASUK</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM torder 
                                            INNER JOIN tmember ON tmember.idMember = torder.member
                                            INNER JOIN jeniscucian ON jeniscucian.idJC = torder.jeniscucian
                                            -- INNER JOIN transaksi ON transaksi.orderan = torder.idOrder
                                            INNER JOIN tstatus ON tstatus.idStatus = torder.status";
                                $queryOrder = mysqli_query($conn, $sql);
                                $no = 0;

                                while ($dataOrder = mysqli_fetch_array($queryOrder)) {
                                    $no++;
                                ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $dataOrder['idOrder'] ?></td>
                                        <td><?= $dataOrder['nama'] ?></td>
                                        <td><?= $dataOrder['paket'] ?></td>
                                        <td><?= $dataOrder['berat'] ?>kg</td>
                                        <td><?= $dataOrder['keterangan'] ?></td>
                                        <td><?= $dataOrder['tglMasuk'] ?></td>

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